const menuToggle = document.querySelector(".menu-toggle");
const menuItems = document.querySelectorAll(".burger-menu li");
const mainNav = document.querySelector(".main-navigation");
const button = mainNav.getElementsByTagName("button")[0];

// Fonction qui va ajouter une class CSS qui va déclencher l'animation de fade-in du menu burger et qui transforme le burger en croix
menuToggle.addEventListener("click", function () {
  // Parcour chaque élément <li> et ajoute ou supprime la classe 'active'
  menuItems.forEach(function (item) {
    item.classList.toggle("active");
  });
  menuToggle.classList.toggle("cross");
});

// Fonction qui permet de modifier le burger en croix au clic et de fermer le menu lors du clic d'un lien
menuItems.forEach(function (menuItem) {
  menuItem.addEventListener("click", function () {
    menuToggle.classList.toggle("cross");
    mainNav.classList.toggle("toggled");
    button.setAttribute("aria-expanded", "false");
    menuItems.forEach(function (item) {
      item.classList.toggle("active");
    });
  });
});

// Fonction qui permet de rectifier le positionement de la section lors du clic d'un lien 
document.addEventListener("DOMContentLoaded", function () {
  // Sélectionner tous les liens du menu burger
  var links = document.querySelectorAll(".burger-menu a");
  // Parcourir tous les liens
  for (var i = 0; i < links.length; i++) {
    // Ajouter un gestionnaire d'événement au clic
    links[i].addEventListener("click", function () {
      // Récupérer l'ID de la cible du lien (à partir de l'attribut href)
      var targetId = this.getAttribute("href").substring(1);
      // Trouver l'élément cible dans le document
      var targetElement = document.getElementById(targetId);
      // Appliquer un décalage de 200 pixels vers le haut en utilisant scrollMarginTop
      targetElement.style.scrollMarginTop = "200px";
      // Faire défiler la page jusqu'à la position cible en douceur
      targetElement.scrollIntoView({ behavior: "smooth" });
    });
  }

});
