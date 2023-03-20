  // Define la fecha límite de la cuenta regresiva (3 días desde hoy)
  var deadline = new Date(Date.now() + 3 * 24 * 60 * 60 * 1000);

  // Función para actualizar la cuenta regresiva
  function updateCountdown() {
    // Obtiene la fecha y hora actuales
    var now = new Date().getTime();

    // Calcula la diferencia entre la fecha límite y la fecha actual
    var diff = deadline - now;

    // Calcula el tiempo restante en días, horas, minutos y segundos
    var days = Math.floor(diff / (1000 * 60 * 60 * 24));
    var hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((diff % (1000 * 60)) / 1000);

    // Crea una cadena que contiene los números de la cuenta regresiva
    var countdownString = days + "  " + hours + "  " + minutes + "  " + seconds;

    // Actualiza el elemento HTML que muestra la cuenta regresiva
    document.getElementById("countdown").innerHTML = countdownString;

    // Si la cuenta regresiva ha terminado, muestra un mensaje
    if (diff < 0) {
      document.getElementById("countdown").innerHTML = "0 : 0 : 0 : 0";
    }
  }

  // Ejecuta la función de actualización cada segundo
  setInterval(updateCountdown, 1000);
