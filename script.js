// ten fajny blur
document.addEventListener("DOMContentLoaded", function() {
    var kolka = document.querySelector(".kolko");
    // var kurso = document.querySelector(".kursor");
    
    document.addEventListener('mousemove', function(e) {
        var pozycjaX = e.clientX;
        var pozycjaY = e.clientY;

        kolka.style.left = (pozycjaX - (kolka.offsetWidth / 2)) + 'px';
        kolka.style.top = (pozycjaY - (kolka.offsetHeight / 2)) + 'px';

        // kurso.style.left = (pozycjaX - (kurso.offsetWidth / 2)) + 'px';
        // kurso.style.top = (pozycjaY - (kurso.offsetHeight / 2)) + 'px';
    });
});

function pobierz()
{
    window.location.href = 'The KULKA Game.zip';
}
// pobieranie kulki

document.addEventListener("DOMContentLoaded", function() {
    const slid = document.querySelector(".slider");
    const slides = document.querySelectorAll(".slide");
    const poprz = document.querySelector(".poprzednia");
    const nast = document.querySelector(".nastepna");
    let currentIndex = 0;

    function goToSlide(index) {
        slid.style.transform = `translateX(-${index * 100}%)`;
        currentIndex = index;
    }

    function poprzSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        goToSlide(currentIndex);
    }

    function nastSlide() {
        currentIndex = (currentIndex + 1) % slides.length; 
        goToSlide(currentIndex);
    }

    poprz.addEventListener('click', poprzSlide);
    nast.addEventListener('click', nastSlide);
});
//slider