const form = document.querySelector('form');
const usernameInput = document.getElementById('CorreoUsuario');
const passwordInput = document.getElementById('Password');
const usernameError = document.getElementById('CorreoUsuario-error');
const passwordError = document.getElementById('Password-error');

form.addEventListener('submit', (event) => {
  if (!usernameInput.value) {
    usernameError.textContent = 'Por favor ingrese su correo.';
    event.preventDefault();
  } else {
    usernameError.textContent = '';
  }
  
  if (!passwordInput.value) {
    passwordError.textContent = 'Por favor ingrese su contraseña.';
    event.preventDefault();
  } else {
    passwordError.textContent = '';
  }
});
