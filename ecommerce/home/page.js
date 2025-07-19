window.addEventListener("load", function () {
    const loader = document.getElementById("loader-wrapper");
    loader.style.opacity = "0";
    loader.style.visibility = "hidden";
});

const menuToggle = document.getElementById('menuToggle');
const offCanvasMenu = document.getElementById('offCanvasMenu');
const overlay = document.getElementById('overlay');
const menuIcon = menuToggle.querySelector('i');

menuToggle.addEventListener('click', () => {
    offCanvasMenu.classList.toggle('active');
    overlay.classList.toggle('active');
    document.body.classList.toggle('no-scroll');
    if (offCanvasMenu.classList.contains('active')) {
        menuIcon.classList.remove('fa-bars');
        menuIcon.classList.add('fa-times');
    } else {
        menuIcon.classList.remove('fa-times');
        menuIcon.classList.add('fa-bars');
    }
});

overlay.addEventListener('click', () => {
    offCanvasMenu.classList.remove('active');
    overlay.classList.remove('active');
    document.body.classList.remove('no-scroll');
    menuIcon.classList.remove('fa-times');
    menuIcon.classList.add('fa-bars');
});

offCanvasMenu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
        const isNavLink = link.closest('nav');

        if (isNavLink) {
            offCanvasMenu.classList.remove('active');
            overlay.classList.remove('active');
            document.body.classList.remove('no-scroll');
            menuIcon.classList.remove('fa-times');
            menuIcon.classList.add('fa-bars');
        }
    });
});
document.querySelector('.off-canvas-icons').addEventListener('click', (event) => {
    event.stopPropagation();
});

document.addEventListener("DOMContentLoaded", () => {

    function createWeatherParticle(type) {
        const el = document.createElement("div");
        el.classList.add("weather-particle");

        if (type === "snow") {
            el.classList.add("snow");
            el.textContent = "❄";
            el.style.fontSize = (Math.random() * 8 + 12) + "px";
            el.style.animationDuration = (Math.random() * 5 + 5) + "s";
        } else if (type === "rain") {
            el.classList.add("rain");
            el.style.animationDuration = (Math.random() * 1.5 + 1) + "s";
        } else if (type === "storm") {
            el.classList.add("storm");
            el.textContent = "⚡";
            el.style.animationDuration = (Math.random() * 3 + 2) + "s";
        }

        el.style.left = Math.random() * window.innerWidth + "px";
        document.body.appendChild(el);

        setTimeout(() => el.remove(), 7000);
    }

    function triggerLightningFlash() {
        const flash = document.createElement("div");
        flash.classList.add("lightning-flash");
        document.body.appendChild(flash);
        setTimeout(() => flash.remove(), 300);
    }

    setInterval(() => createWeatherParticle("snow"), 300);
    setInterval(() => createWeatherParticle("rain"), 120);
    setInterval(() => {
        if (Math.random() < 0.3) {
            createWeatherParticle("storm");
            triggerLightningFlash();
        }
    }, 2000);
});

document.addEventListener("DOMContentLoaded", function () {
    const scrollUpBtn = document.getElementById("scrollUpBtn");
    const scrollDownBtn = document.getElementById("scrollDownBtn");
    const gameGrid = document.getElementById("game-grid");
    window.addEventListener("scroll", () => {
        if (window.scrollY > 200) {
            scrollUpBtn.style.display = "block";
        } else {
            scrollUpBtn.style.display = "none";
        }
    });

    scrollUpBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});