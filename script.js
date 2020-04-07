document.getElementById('slider-left').onclick = sliderLeft;

function sliderLeft (){
    var band = document.getElementById('band');
    band.style.left = -128 +'px';
}