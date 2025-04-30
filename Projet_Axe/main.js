var body = document.querySelector('body');
var menu = document.getElementById('menu');
var darkMode = document.getElementById('dark');
var profile = document.getElementById('profile');
var loupe = document.getElementById('loupe');
var sideBar = document.querySelector('.sideBar')


// Menu 
menu.addEventListener('click', function () {
    if (sideBar.classList.contains('activeSB')) {
        sideBar.classList.remove('activeSB')
    }
    else {
        sideBar.classList.add('activeSB')
    }
})


// Dark Mode
darkMode.addEventListener('click', function () {
    if (body.className === 'darkMode') {
        body.classList.remove('darkMode');
        menu.setAttribute("src", "img/menu.png");
        dark.setAttribute("src", "img/darkMode.png");
        profile.setAttribute("src", "img/profile.png");
        loupe.setAttribute("src", "img/loupe.png");
    }
    else {
        body.classList.add('darkMode');
        menu.setAttribute("src", "img/menuW.png");
        dark.setAttribute("src", "img/darkModeW.png");
        profile.setAttribute("src", "img/profileW.png");
        loupe.setAttribute("src", "img/loupeW.png");
    }
})


// Navigation
var tabs = document.querySelectorAll('.tab')
var contents = document.querySelectorAll('.content')

tabs.forEach(element => {
    element.addEventListener('click', function () {
        tabs.forEach(element => {
            element.classList.remove('tab-active')
        })
        contents.forEach(element => {
            element.classList.remove('active')
        })
        this.classList.add('tab-active')

        if (this.classList.contains('tab-plantContent')) {
            contents.forEach(element => {
                if (element.classList.contains('plantContent')) {
                    element.classList.add('active')
                }
            })
        }
        if (this.classList.contains('tab-fireContent')) {
            contents.forEach(element => {
                if (element.classList.contains('fireContent')) {
                    element.classList.add('active')
                }
            })
        }
        if (this.classList.contains('tab-waterContent')) {
            contents.forEach(element => {
                if (element.classList.contains('waterContent')) {
                    element.classList.add('active')
                }
            })
        }
    })
})
