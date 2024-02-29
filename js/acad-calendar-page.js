function showPage(pageId) {
    // Hide all pages
    const pages = document.querySelectorAll('.page');
    pages.forEach(page => {
      page.style.display = 'none';
    });
  
    // Show the selected page
    const selectedPage = document.getElementById(pageId);
    selectedPage.style.display = 'block';
  
    // Update the active link in the pagination
    const paginationLinks = document.querySelectorAll('.pagination a');
    paginationLinks.forEach(link => {
      link.parentNode.classList.remove('active');
    });
    const activeLink = document.querySelector(`.pagination a[href="#${pageId}"]`);
    activeLink.parentNode.classList.add('active');
  }
  