navbar = document.querySelector('.header .flex .navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    profile.classList.remove('active');
    
}

profile = document.querySelector('.header .flex .profile');

document.querySelector('#user-btn').onclick = () => {
    navbar.classList.remove('active');
    profile.classList.toggle('active');
}

window.onscroll = () => {
    profile.classList.remove('active');
    navbar.classList.remove('active');
}