<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CheckStorageLink extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'storage:check-link';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check and fix storage link issues';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Checking storage link...');
        
        $publicStoragePath = public_path('storage');
        $storagePath = storage_path('app/public');
        
        // Check if storage link exists
        if (!File::exists($publicStoragePath)) {
            $this->error('Storage link does not exist!');
            $this->info('Creating storage link...');
            
            try {
                $this->call('storage:link');
                $this->info('Storage link created successfully!');
            } catch (\Exception $e) {
                $this->error('Failed to create storage link: ' . $e->getMessage());
                return 1;
            }
        } else {
            $this->info('Storage link exists.');
            
            // Check if it's a valid symlink
            if (!is_link($publicStoragePath)) {
                $this->warn('Storage link exists but is not a symlink. Removing and recreating...');
                File::delete($publicStoragePath);
                $this->call('storage:link');
            }
        }
        
        // Check if storage directory exists
        if (!File::exists($storagePath)) {
            $this->error('Storage directory does not exist!');
            File::makeDirectory($storagePath, 0755, true);
            $this->info('Storage directory created.');
        }
        
        // Check permissions
        if (!is_readable($storagePath)) {
            $this->error('Storage directory is not readable!');
            chmod($storagePath, 0755);
            $this->info('Storage directory permissions fixed.');
        }
        
        // Test file access
        $this->info('Testing file access...');
        $testFile = $storagePath . '/test.txt';
        File::put($testFile, 'test');
        
        if (File::exists($publicStoragePath . '/test.txt')) {
            $this->info('File access test passed!');
            File::delete($testFile);
            File::delete($publicStoragePath . '/test.txt');
        } else {
            $this->error('File access test failed!');
            return 1;
        }
        
        $this->info('Storage link check completed successfully!');
        return 0;
    }
}
