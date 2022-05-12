//Pesquisa

const pesquisa = document.getElementById("container-pesquisa");
const btn_pesquisa = document.getElementById("btn_pesquisa");
var animacao_show = [
    { transform: 'translateY(-55px)' },
    { transform: 'translateY(0)' }
];

var animacao_hide = [
    { transform: 'translateY(0)' },
    { transform: 'translateY(-55px)' }
];



function Pesquisa() {

    if (pesquisa.classList.contains("hide") === true) {

        pesquisa.classList.remove("hide");
        pesquisa.animate(animacao_show, { duration: 500 });
        btn_pesquisa.classList.add("hide");


    } else {

        pesquisa.animate(animacao_hide, { duration: 500 });
        pesquisa.classList.add("hide");
        btn_pesquisa.classList.remove("hide");
    }
}

document.getElementById("content").onclick = function(event) {
    if (top.innerWidth > 1198 && event.target != pesquisa) {

        pesquisa.animate(animacao_hide, { duration: 500 });
        pesquisa.classList.add("hide");
        btn_pesquisa.classList.remove("hide");

    }
};