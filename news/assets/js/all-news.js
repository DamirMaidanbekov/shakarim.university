document.addEventListener('DOMContentLoaded', function() {
  // This script handles the pagination functionality
  // Currently just a placeholder as we're only showing page 1
  
  const paginationLinks = document.querySelectorAll('.page-link');
  
  paginationLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      // Prevent default link behavior
      e.preventDefault();
      
      // If this isn't the active page
      if (!this.classList.contains('page-active')) {
        // For now, just log that pagination was clicked
        console.log('Pagination clicked. In a real implementation, this would load page: ' + this.textContent);
        
        // Remove active class from current active
        document.querySelector('.page-active').classList.remove('page-active');
        
        // Add active class to clicked page (unless it's prev/next)
        if (!this.classList.contains('page-prev') && !this.classList.contains('page-next')) {
          this.classList.add('page-active');
        }
      }
    });
  });
});