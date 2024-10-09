       // script.js

// Cargar el archivo navbar.html
fetch("/navbar.html")
    .then(response => response.text())
    .then(data => {
        document.getElementById("navbar").innerHTML = data;
        initializeHamburgerMenu(); // Inicializa el menú hamburguesa aquí
    })
    .catch(error => console.error("Error al cargar el navbar:", error));

// Función para inicializar el menú hamburguesa
function initializeHamburgerMenu() {
    const bars = document.querySelector(".bars");
    if (bars) {
        bars.onclick = function() {
            const navBar = document.querySelector(".nav-bar");
            if (navBar) {
                navBar.classList.toggle("active");
            }
        };
    } else {
        console.error("No se encontró el elemento .bars");
    }
}

// Cargar el archivo footer.html
fetch("/footer.html")
    .then(response => response.text())
    .then(data => document.getElementById("footer").innerHTML = data)
    .catch(error => console.error("Error al cargar el footer:", error));
