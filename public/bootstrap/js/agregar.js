const password = document.querySelector('#password');
const show_hide_password = document.querySelector('#show_hide_password');
const text_show_hide_password = document.querySelector('#text_show_hide_password');
const birthday = document.querySelector('#birthday');
const admission_day = document.querySelector('#admission_day');
const rol = document.querySelector('#rol');
const temp_rol = document.querySelector('#temp_rol');
const photo_profile = document.querySelector('#photo_profile');

const show_hide = () => {
    show_hide_password.checked ? [
        password.type = 'text',
        text_show_hide_password.textContent = "Ocultar contraseña",
    ] : [
        password.type = 'password',
        text_show_hide_password.textContent = 'Mostrar contraseña',
    ];
}

const preview_profile = (evt) => {
    var file_input = evt.target;
    if (file_input.files && file_input.files[0]) {
        let reader = new FileReader();
        reader.onload = function(evt) {
            let imagePreview = document.querySelector('#photo');
            imagePreview.src = evt.target.result;
        };
        reader.readAsDataURL(file_input.files[0]);
    }
}

show_hide_password?.addEventListener('click', show_hide);
birthday?.addEventListener('focus', () => {
    birthday.type != 'text' && birthday.value != '' ? birthday.type = 'date' : birthday.type = 'date';
});
admission_day?.addEventListener('focus', () => {
    admission_day.type != 'text' && admission_day.value != '' ? admission_day.type = 'date' : admission_day.type = 'date';
});
temp_rol?.addEventListener('focus', () => {
    rol.classList.add('form-control'); 
    rol.hidden = false;
    temp_rol.classList.remove('form-control');
    temp_rol.hidden = true;
});
photo_profile.addEventListener('change', preview_profile);