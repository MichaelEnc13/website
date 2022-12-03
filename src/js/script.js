$('#table').DataTable({
    destroy: true,
    scrollY: 300,

    order: [0, 'DESC']

});

function detectPosition() {
    if (window.scrollY > 100) {
        $(".btn_goTop").css("display", "block");
    } else {
        $(".btn_goTop").css("display", "none");
    }
}
detectPosition()
document.addEventListener('scroll', () => {

    detectPosition()

})
$(".btn_goTop").click(function(e) {
    window.scroll({
        top: 0,
        left: 0,
        behavior: 'smooth'
    });
});
//toggle menu de navegacion

$("#nav__toggle,.overlay").click(function(e) {
    $(".nav__list").toggleClass("nav__list--show ");
    $(".overlay").toggleClass("overlay--show ");
});
$(".nav__items__links--contact,.nav__items__links--blue").click(function(e) {
    $(".nav__list").removeClass("nav__list--show ");
    $(".overlay").removeClass("overlay--show ");
});

$(document).on("click", ".read_post", function(e) {
    let id = e.target.dataset.id ? e.target.dataset.id : e.target.parentElement.dataset.id;
    location.href = `sistem_info?id=${id}`
        //console.log(id)
});






$("#suscription").click(function(e) {
    let form = document.querySelector(".suscriptionForm")
    let data = new FormData(form);
    data.append("suscription", true)
    $("#suscription").text("Enviando...");
    $("#suscription").attr("disabled", true);
    $.ajax({
        type: "POST",
        url: "api/controller/mailer.controller.php",
        data,
        contentType: false,
        processData: false,
        success: function(res) {
            if (res) {
                swal("La información ha sido enviada", "Gracias por suscribirte a Dotsell", "success")
                $("#suscription").text("Enviando");

                $("#suscription").removeAttr("disabled");
            }
        }
    });
});