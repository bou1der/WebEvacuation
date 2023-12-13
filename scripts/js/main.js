$(document).ready(function() {
    const phone = document.querySelector("#phoneInput");
    $("#phoneInput").mask("+7 (999) 999 99 99");
    phone.addEventListener("click", function(){
        phone.focus();
        phone.setSelectionRange(4, 4);
    });
})