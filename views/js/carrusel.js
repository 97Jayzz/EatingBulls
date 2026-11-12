document.querySelectorAll('.carrusel').forEach(function (carrusel){
    const fila = carrusel.querySelector('.fila-productos');
    const izq = carrusel.querySelector('.flecha-izq');
    const der = carrusel.querySelector('.flecha-der');

    izq.addEventListener('click', function(){
        fila.scrollBy({left: -fila.clientWidth, behavior: 'smooth'});
    });

    der.addEventListener('click', function(){
        fila.scrollBy({left: fila.clientWidth, behavior: 'smooth'});
    });
});
