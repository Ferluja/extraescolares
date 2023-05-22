const password = document.querySelector('#password');
const show_hide_password = document.querySelector('#show_hide_password');
const text_show_hide_password = document.querySelector('#text_show_hide_password');

const show_hide = () => {
    show_hide_password.checked ? [
        password.type = 'text',
        text_show_hide_password.textContent = "Ocultar contraseña",
    ] : [
        password.type ='password',
        text_show_hide_password.textContent = 'Mostrar contraseña'
    ];
}
show_hide_password?.addEventListener('click' , show_hide);
