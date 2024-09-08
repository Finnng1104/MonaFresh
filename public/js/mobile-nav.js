document.addEventListener('DOMContentLoaded', () => {
    const openBtn = document.querySelector('.open-btn');
    const closeBtn = document.querySelector('.close-btn');
    const sidebar = document.querySelector('.sidebar');
    const menuOverlay = document.querySelector('.menu-overlay');
    const menuItems = document.querySelectorAll('.menu-item-has-children');

    const searchToggleBtn = document.querySelector('.search-toggle-btn');
    const searchOverlay = document.querySelector('.search-overlay');

    openBtn.addEventListener('click', () => {
        sidebar.classList.add('open');
        menuOverlay.style.opacity = '1';
        menuOverlay.style.visibility = 'visible';
    });

    closeBtn.addEventListener('click', () => {
        sidebar.classList.remove('open');
        menuOverlay.style.opacity = '0';
        menuOverlay.style.visibility = 'hidden';
    });

    menuOverlay.addEventListener('click', () => {
        sidebar.classList.remove('open');
        menuOverlay.style.opacity = '0';
        menuOverlay.style.visibility = 'hidden';
    });

    menuItems.forEach(item => {
        item.addEventListener('click', () => {
            item.classList.toggle('open');
        });
    });

    searchToggleBtn.addEventListener('click', () => {
        searchOverlay.style.opacity = '1';
        searchOverlay.style.visibility = 'visible';
    });

    searchOverlay.addEventListener('click', (e) => {
        if (e.target === searchOverlay || e.target.classList.contains('search-btn')) {
            searchOverlay.style.opacity = '0';
            searchOverlay.style.visibility = 'hidden';
        }
    });
})