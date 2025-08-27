function playPauseVideo() {
    let videos = document.querySelectorAll("video");
    if (videos.length === 0) {
        console.log("No video elements found");
        return;
    }
    
    videos.forEach((video) => {
        if (!video) return;
        
        try {
            // We can only control playback without interaction if video is muted
            video.muted = true;
            // Play is a promise so we need to check we have it
            let playPromise = video.play();
            if (playPromise !== undefined) {
                playPromise.then((_) => {
                    let observer = new IntersectionObserver(
                        (entries) => {
                            entries.forEach((entry) => {
                                if (
                                    entry.intersectionRatio !== 1 &&
                                    !video.paused
                                ) {
                                    video.pause();
                                } else if (video.paused) {
                                    video.play().catch(e => console.log("Video play error:", e));
                                }
                            });
                        },
                        { threshold: 0.2 }
                    );
                    observer.observe(video);
                }).catch(e => console.log("Video play promise error:", e));
            }
        } catch (error) {
            console.log("Error handling video:", error);
        }
    });
}

// Only run if DOM is loaded
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', playPauseVideo);
} else {
    playPauseVideo();
}
    