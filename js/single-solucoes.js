const hospedagem = document.querySelector('.hospedagem-menu')
const telecom = document.querySelector('.telecom-menu')
const nuvem = document.querySelector('.nuvem-menu')
const diversos = document.querySelector('.diversos-menu')

const pdfDownload = document.querySelector('.pdf-download');
const pdfDownloadImage = document.querySelector('.pdf-download img');

if (hospedagem.classList.contains('current-menu-ancestor')) {
    document.documentElement.style.setProperty('--main-color', '#0598cb');
    pdfDownloadImage.style.filter = "invert(41%) sepia(92%) saturate(2989%) hue-rotate(169deg) brightness(98%) contrast(96%)";

    document.querySelector(".pdf-download").onmouseover = function() {
        pdfDownloadImage.style.filter = "invert(91%) sepia(93%) saturate(32%) hue-rotate(193deg) brightness(108%) contrast(100%)";
        pdfDownload.style.background = "#0598cb"
    }
    document.querySelector(".pdf-download").onmouseout = function() {
        pdfDownload.style.background = "transparent";
        pdfDownloadImage.style.filter = "invert(41%) sepia(92%) saturate(2989%) hue-rotate(169deg) brightness(98%) contrast(96%)";
    }
}


if (telecom.classList.contains('current-menu-ancestor')) {
    document.documentElement.style.setProperty('--main-color', '#F06673');
    pdfDownloadImage.style.filter = "invert(76%) sepia(42%) saturate(6331%) hue-rotate(311deg) brightness(91%) contrast(108%)";

    document.querySelector(".pdf-download").onmouseover = function() {
        pdfDownloadImage.style.filter = "invert(91%) sepia(93%) saturate(32%) hue-rotate(193deg) brightness(108%) contrast(100%)";
        pdfDownload.style.background = "#F06673"
    }
    document.querySelector(".pdf-download").onmouseout = function() {
        pdfDownload.style.background = "transparent";
        pdfDownloadImage.style.filter = "invert(76%) sepia(42%) saturate(6331%) hue-rotate(311deg) brightness(91%) contrast(108%)";
    }
}

if (nuvem.classList.contains('current-menu-ancestor')) {
    document.documentElement.style.setProperty('--main-color', '#9BB33B');
    pdfDownloadImage.style.filter = "invert(69%) sepia(11%) saturate(2234%) hue-rotate(31deg) brightness(97%) contrast(82%)";

    document.querySelector(".pdf-download").onmouseover = function() {
        pdfDownloadImage.style.filter = "invert(91%) sepia(93%) saturate(32%) hue-rotate(193deg) brightness(108%) contrast(100%)";
        pdfDownload.style.background = "#9BB33B"
    }
    document.querySelector(".pdf-download").onmouseout = function() {
        pdfDownload.style.background = "transparent";
        pdfDownloadImage.style.filter = "invert(69%) sepia(11%) saturate(2234%) hue-rotate(31deg) brightness(97%) contrast(82%)";
    }
}

if (diversos.classList.contains('current-menu-ancestor')) {
    document.documentElement.style.setProperty('--main-color', '#F88E1E');
    pdfDownloadImage.style.filter = "invert(74%) sepia(30%) saturate(6880%) hue-rotate(348deg) brightness(102%) contrast(94%)";

    document.querySelector(".pdf-download").onmouseover = function() {
        pdfDownloadImage.style.filter = "invert(91%) sepia(93%) saturate(32%) hue-rotate(193deg) brightness(108%) contrast(100%)";
        pdfDownload.style.background = "#F88E1E"
    }
    document.querySelector(".pdf-download").onmouseout = function() {
        pdfDownload.style.background = "transparent";
        pdfDownloadImage.style.filter = "invert(74%) sepia(30%) saturate(6880%) hue-rotate(348deg) brightness(102%) contrast(94%)";
    }
}