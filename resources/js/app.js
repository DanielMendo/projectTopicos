import './bootstrap';

const formAgregar = document.querySelector('#formAgregar');
const btnAgregar = document.querySelector('#btnAgregar');
const btnCancelar = document.querySelector('#btnCancelar')

btnAgregar.addEventListener('click', function() {
    formAgregar.classList.remove('d-none')
})

btnCancelar.addEventListener('click', function() {
    formAgregar.classList.add('d-none')
})
