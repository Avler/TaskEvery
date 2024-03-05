document.addEventListener('DOMContentLoaded', () => {
    const hamMenuIcon = document.querySelector('#ham-menu-icon');
    const closeMenuIcon = document.querySelector('#close-menu-icon');
    const mobileNav = document.querySelector('#mobile-nav-menu');

    hamMenuIcon.addEventListener('click', () => {
        mobileNav.classList.toggle('d-none');  
        hamMenuIcon.classList.add('d-none');   
        closeMenuIcon.classList.remove('d-none'); 
    });

    closeMenuIcon.addEventListener('click', () => {
        mobileNav.classList.toggle('d-none');  
        closeMenuIcon.classList.add('d-none'); 
        hamMenuIcon.classList.remove('d-none'); 
    });
});
