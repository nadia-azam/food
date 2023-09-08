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


function loader(){
    document.querySelector('.loader').style.display = 'none';
}

//notice 1000 = 1seconde
//notice 2000 = 2secondes

function fadeOut(){
    setInterval(loader , 2000);
}

window.onload = fadeOut();