const modalC = document.getElementById("modal-construcao");
const modal = document.getElementById("modal-login");
const modalRH = document.getElementById("modal-rp");

const menuUser = document.getElementById("modal-user");
const room_hos = document.querySelector(".room-hos");

let toc = 0;
function openLogin(tag) {
    if(tag.value == "Login" || tag.value == 0) {
        modal.style.display = "block"
        loginAdmin.style.display = "flex"
        document.body.style.overflow = "hidden"
    } else {
        toc += 1;
        menuUser.style.display = "block";
    }

    if(toc == 2) {
        menuUser.style.display = "none";
        toc = 0;
    }
}

function closeLogin(event) {
    if(event.target.id == "modal-login") {
        modal.style.display = "none"
        document.body.style.overflow = "auto"
    } else {
        modal.style.display = "block"
        document.body.style.overflow = "hidden"
    }
}

function openConstrucao() {
    modalC.style.display = "block"
    document.body.style.overflow = "hidden"
}

function closeConstrucao(event) {
    if(event.target.id == "modal-construcao") {
        modalC.style.display = "none"
        document.body.style.overflow = "auto"
    } else {
        modalC.style.display = "block"
        document.body.style.overflow = "hidden"
    }
}

function roomHos() {
    modalRH.style.display = "block"
}

function dateCheck(tag) {
    tag.type = "text";
    let value = tag.value;
    value = value.split("-");
    if(value[1] != undefined) {
        value = `${value[2]}/${value[1]}/${value[0]}`;
    } else {
        let data = new Date();
        value = `${data.getDay()}/${data.getMonth()}/${data.getFullYear()}`;
    }
    tag.value = value;
}


let quartos = 1;
let hospedes = 3;

function setQuarto(value) {
    quartos = value;
    room_hos.value = `${quartos} quarto(s), ${hospedes} hóspede(s)`;
}

function setHospede(value) {
    hospedes = value;
    room_hos.value = `${quartos} quarto(s), ${hospedes} hóspede(s)`;
}