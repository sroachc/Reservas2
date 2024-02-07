//TEXTAREA
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
//SLIDER
document.addEventListener("DOMContentLoaded", function(event) {
    var index = 0;
    var images = document.querySelectorAll(".slider img");

    function showImage() {
        // Ocultar todas las imágenes
        for (var i = 0; i < images.length; i++) {
            images[i].classList.remove("active");
        }

        // Mostrar la imagen actual
        images[index].classList.add("active");

        // Incrementar el índice
        index++;

        // Reiniciar el índice si llega al final
        if (index === images.length) {
            index = 0;
        }

        // Llamar a la función nuevamente después de 3 segundos (3000 ms)
        setTimeout(showImage, 3000);
    }

    // Iniciar el slider
    showImage();
});