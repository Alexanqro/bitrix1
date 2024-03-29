const check = document.querySelector('[data-top-checkbox]');
const reset = document.querySelector('.catalog-hero__reset-text');

check.addEventListener('click', function (){
    document.getElementById('Form').submit();
})

reset.addEventListener('click', function(){
    window.location.href = window.location.pathname;
})

function selectChange(){
    document.getElementById('Form').submit();
}




