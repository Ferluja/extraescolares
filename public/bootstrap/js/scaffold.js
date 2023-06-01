const aside = document?.querySelector('#aside');
const main = document?.querySelector('#main');
const btn_close_aside = document?.querySelector('#btn_close_aside');
const btn_open_aside = document?.querySelector('#btn_open_aside');

const open_aside = () => {
    btn_open_aside.classList.add('d-none');
    main.style.marginLeft = '250px';
    aside.classList.replace('animate__zoomOutLeft', 'animate__zoomInLeft');
}

const close_aside = () => {
    aside.classList.contains('animate__zoomInLeft') ? [
        aside.classList.replace('animate__zoomInLeft', 'animate__zoomOutLeft'),
        btn_open_aside.classList.remove('d-none'),
        main.classList.remove('position-absolute'),
        setTimeout(() => main.style.marginLeft = 0, 500),
    ] : [
        aside.classList.add('animate__animated'),
        aside.classList.add('animate__zoomOutLeft'),
        main.classList.remove('position-absolute'),
        main.classList.add('animate__animated'),
        main.classList.add('animate__fadeInRightBig'),
        btn_open_aside.classList.remove('d-none'),
        btn_open_aside.classList.remove('position-absolute'),
        btn_open_aside.classList.add('position-fixed'),
        main.style.marginLeft = 0,
    ];
}

btn_open_aside.addEventListener('click', open_aside);
btn_close_aside.addEventListener('click', close_aside);


const button = document.getElementById("statusButton");

// button.addEventListener("click", function() {
//   if (button.classList.contains("active")) {
//     button.classList.remove("active");
//     button.classList.add("inactive");
//     button.textContent = "Inactivo";
//   } else {
//     button.classList.remove("inactive");
//     button.classList.add("active");
//     button.textContent = "Activo";
//   }
// });
