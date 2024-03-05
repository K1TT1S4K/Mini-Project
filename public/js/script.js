const wrapper = document.querySelector('.wrapper');
const Sidebar = document.querySelector('.main-sidebar');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPoppup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');
const iconMenu = document.querySelector('.icon-menu');

registerLink.addEventListener('click',()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click',()=> {
    wrapper.classList.remove('active');
});

btnPoppup.addEventListener('click',()=> {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click',()=> {
    wrapper.classList.remove('active-popup');
});

iconMenu.addEventListener('click',() => {
    Sidebar.classList.add('active-sidebar')
});
