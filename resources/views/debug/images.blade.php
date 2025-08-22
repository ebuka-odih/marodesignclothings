<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Debug - Maro Design</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .section { margin-bottom: 30px; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .image-item { margin: 10px 0; padding: 10px; border: 1px solid #eee; border-radius: 3px; }
        .image-item img { max-width: 100px; max-height: 100px; margin-right: 10px; }
        .error { color: red; }
        .success { color: green; }
        .warning { color: orange; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 8px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Image Debug Information</h1>
    
    <div class="section">
        <h2>Storage Configuration</h2>
        <table>
            <tr>
                <th>Setting</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>APP_URL</td>
                <td>{{ config('app.url') }}</td>
            </tr>
            <tr>
                <td>Storage Link Exists</td>
                <td class="{{ file_exists(public_path('storage')) ? 'success' : 'error' }}">
                    {{ file_exists(public_path('storage')) ? 'Yes' : 'No' }}
                </td>
            </tr>
            <tr>
                <td>Storage Directory Exists</td>
                <td class="{{ file_exists(storage_path('app/public')) ? 'success' : 'error' }}">
                    {{ file_exists(storage_path('app/public')) ? 'Yes' : 'No' }}
                </td>
            </tr>
            <tr>
                <td>Storage Directory Readable</td>
                <td class="{{ is_readable(storage_path('app/public')) ? 'success' : 'error' }}">
                    {{ is_readable(storage_path('app/public')) ? 'Yes' : 'No' }}
                </td>
            </tr>
        </table>
    </div>

    <div class="section">
        <h2>All Images in Database</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Path</th>
                <th>Disk</th>
                <th>Generated URL</th>
                <th>File Exists</th>
                <th>Preview</th>
            </tr>
            @foreach($images as $image)
                @php
                    $fileExists = Storage::disk($image->disk)->exists($image->path);
                    $product = $image->imageable;
                @endphp
                <tr>
                    <td>{{ $image->id }}</td>
                    <td>{{ $product ? $product->name : 'N/A' }}</td>
                    <td>{{ $image->path }}</td>
                    <td>{{ $image->disk }}</td>
                    <td>
                        <a href="{{ $image->url }}" target="_blank">{{ $image->url }}</a>
                    </td>
                    <td class="{{ $fileExists ? 'success' : 'error' }}">
                        {{ $fileExists ? 'Yes' : 'No' }}
                    </td>
                    <td>
                        @if($fileExists)
                            <img src="{{ $image->url }}" alt="Preview" style="max-width: 50px; max-height: 50px;">
                        @else
                            <span class="error">File not found</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="section">
        <h2>Products with Images</h2>
        @foreach($products as $product)
            <div class="image-item">
                <h3>{{ $product->name }}</h3>
                <p><strong>Featured Image URL:</strong> {{ $product->featuredImageUrl ?? 'None' }}</p>
                <p><strong>Total Images:</strong> {{ $product->images->count() }}</p>
                
                @if($product->images->count() > 0)
                    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                        @foreach($product->images as $image)
                            <div style="border: 1px solid #ccc; padding: 5px; text-align: center;">
                                <img src="{{ $image->url }}" alt="{{ $image->alt_text }}" 
                                     style="max-width: 100px; max-height: 100px; display: block; margin: 0 auto;">
                                <small>{{ $image->is_featured ? 'Featured' : 'Regular' }}</small>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="warning">No images for this product</p>
                @endif
            </div>
        @endforeach
    </div>

    <div class="section">
        <h2>Storage Link Test</h2>
        <p>Click the link below to test if the storage link is working:</p>
        <a href="{{ asset('storage/files/0ugdGUalcBACdTwwWEXXLgJPR2lhUIP64oPQuIij.png') }}" target="_blank">
            Test Image Link
        </a>
    </div>

    <div class="section">
        <h2>Commands to Run on Production</h2>
        <p>If images are not showing, run these commands on your production server:</p>
        <pre>
php artisan storage:check-link
php artisan config:clear
php artisan cache:clear
php artisan view:clear
        </pre>
    </div>
</body>
</html>
