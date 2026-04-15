// Any additional HTMX event listeners or UI logic can go here
document.addEventListener('htmx:afterSwap', function(evt) {
    if (evt.detail.target.id === 'content-box') {
        // Reset scroll position
        evt.detail.target.scrollTop = 0;
        
        // Add a fade-in animation to the content
        evt.detail.target.style.opacity = 0;
        setTimeout(() => {
            evt.detail.target.style.transition = 'opacity 0.3s ease';
            evt.detail.target.style.opacity = 1;
        }, 50);
    }
});
