var acc = document.getElementsByClassName("accordion");
var i;
var activePanel = null; // registro del panel actualmente abierto

// Agregar event listener al documento para cerrar el acordeón al hacer clic fuera de los botones
document.addEventListener("click", function(event) {
  if (!event.target.matches('.accordion') && activePanel !== null) {
    activePanel.classList.remove("active");
    activePanel.nextElementSibling.style.maxHeight = null;
    activePanel = null;
  }
});

// Agregar event listener a cada botón del acordeón
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      // si el panel está abierto, cerrarlo
      this.classList.remove("active");
      panel.style.maxHeight = null;
      activePanel = null;
    } else {
      // si el panel está cerrado, abrirlo y cerrar cualquier otro panel abierto
      if (activePanel !== null) {
        activePanel.classList.remove("active");
        activePanel.nextElementSibling.style.maxHeight = null;
      }
      this.classList.add("active");
      panel.style.maxHeight = panel.scrollHeight + "px";
      activePanel = this;
    }
  });
}
