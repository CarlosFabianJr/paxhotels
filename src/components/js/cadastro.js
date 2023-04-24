const body = document.body;
let back_1 = 'background-image: url("../components/imgs/quarto-cadastr2.png")';
let back_2 = 'background-image: url("../components/imgs/quarto-cadastro.png")';
let bool = true;

function changeBody() {
    setInterval(()=> {
        if(bool == true) {
            console.log('Back1')
            body.style = back_1;
            bool = false;
        } else {
            console.log('Back2')
            body.style = back_2;
            bool = true;
        }
    }, 5000);
}

changeBody();