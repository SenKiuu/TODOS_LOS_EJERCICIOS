function fecha() {
  //Obtención de la hora actual:
  var fecha = new Date();
  var hora = fecha.getHours();
  var minuto = fecha.getMinutes();
  var segundos = fecha.getSeconds();
  var horaspm;

  //Formateo de los minutos y segundos:
  if (minuto < 10) {
    minuto = "0" + minuto;
  }
  if (segundos < 10) {
    segundos = "0" + segundos;
  }

  //Determinación de AM o PM y ajuste al formato de 12 horas:
  if (hora >= 12) {
    horaspm = "pm";
    if (hora > 12) {
      hora -= 12; 
    }
  } else {
    horaspm = "am";
    if (hora === 0) {
      hora = 12;
    }
  }

//Actualización del contenido en el HTML:

  document.getElementById("hora").innerHTML = "Hora: " + hora + ":" + minuto + ":" + segundos + " " + horaspm;
}

setInterval(fecha, 1000);


// -----------------------------------------------------------------------------------------
 /* Función para almacenar datos de sesión con un tiempo de expiración */
 function saveSessionData(key, value, durationHours) {
  const currentDate = new Date();
  currentDate.setTime(currentDate.getTime() + (durationHours * 60 * 60 * 1000));
  const expiration = "expires=" + currentDate.toUTCString();

  /* Almacenamos en el almacenamiento local */
  localStorage.setItem("user", value);
  localStorage.setItem("securePass", "angel"); /* Solo para ejemplo, no recomendado en producción */

  /* Mensajes informativos */
  alert("Usuario almacenado en localStorage: " + localStorage.getItem("user"));
  alert("Contraseña almacenada en localStorage: " + localStorage.getItem("securePass"));

  /* Almacenamos en cookies */
  document.cookie = key + "=" + value + ";" + expiration + ";path=/";
}

/* Recuperar una cookie almacenada previamente */
function retrieveCookie(key) {
  const keyEquals = key + "=";
  const cookiesArray = document.cookie.split(';');
  for (let i = 0; i < cookiesArray.length; i++) {
      let cookieItem = cookiesArray[i].trim();
      if (cookieItem.indexOf(keyEquals) === 0) {
          return cookieItem.substring(keyEquals.length);
      }
  }
  return "";
}

/* Comprobamos si existe una sesión activa */
function verifySession() {
  const activeUser = retrieveCookie("activeUser");
  if (activeUser) {
      document.getElementById("access-form").style.display = "none";
      document.getElementById("welcome-panel").style.display = "block";
      document.getElementById("current-user").innerText = activeUser;
  } else {
      document.getElementById("access-form").style.display = "block";
      document.getElementById("welcome-panel").style.display = "none";
  }
}

/* Validamos las credenciales ingresadas */
function checkCredentials(user, pass) {
  const validUser = "angel";
  const validPass = "angel";
  return user === validUser && pass === validPass;
}

/* Manejo del inicio de sesión */
function userLogin() {
  const userInput = document.getElementById("user-input").value;
  const passInput = document.getElementById("pass-input").value;

  if (checkCredentials(userInput, passInput)) {
      saveSessionData("activeUser", userInput, 8);
      verifySession();
  } else {
      alert("Credenciales inválidas. Por favor, inténtalo nuevamente.");
  }
}

/* Cerrar sesión */
function userLogout() {
  document.cookie = "activeUser=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
  localStorage.removeItem("user");
  localStorage.removeItem("securePass");
  verifySession();
}

/* Verificamos sesión activa al cargar la página */
window.onload = function() {
  verifySession();
};