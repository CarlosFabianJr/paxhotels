const modalD = document.getElementById("modal-desenvolvimento");
const modal = document.getElementById("modal-login");
const modalRH = document.getElementById("modal-rp");

const room_pax = document.querySelector(".room-pax");

function Login() {
    modal.style.display = "block"
    document.body.style.overflow = "hidden"
}

function hideLogin(event) {
    if(event.target.id == "modal-login") {
        modal.style.display = "none"
        document.body.style.overflow = "auto"
    } else {
        modal.style.display = "block"
        document.body.style.overflow = "hidden"
    }
}

function Desenvolvimento() {
    modalD.style.display = "block"
    document.body.style.overflow = "hidden"
}

function hideDesenvolvimento(event) {
    if(event.target.id == "modal-desenvolvimento") {
        modalD.style.display = "none"
        document.body.style.overflow = "auto"
    } else {
        modalD.style.display = "block"
        document.body.style.overflow = "hidden"
    }
}

function roomHos() {
    modalRH.style.display = "block"
}


let quartos = 1;
let hospedes = 3;

function setQuarto(value) {
    quartos = value;
    room_pax.value = `${quartos} quarto(s), ${hospedes} hóspedes`;
}

function setHospede(value) {
    hospedes = value;
    room_pax.value = `${quartos} quarto(s), ${hospedes} hóspedes`;
}