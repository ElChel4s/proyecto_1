// public/js/inicio.js
document.querySelectorAll('.section').forEach(section => {
    section.addEventListener('mouseenter', () => {
        section.querySelector('.overlay').style.opacity = '1';
    });
    section.addEventListener('mouseleave', () => {
        section.querySelector('.overlay').style.opacity = '0';
    });
});
