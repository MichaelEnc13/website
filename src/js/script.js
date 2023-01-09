$('#table').DataTable({
    destroy: true,
    scrollY: 300,

    order: [0, 'DESC']

}); 

$(document).on("scroll", function() {
    var el = document.querySelector(".benefit__title");
    var vp_pos = el.getBoundingClientRect();
    if (vp_pos.top < window.innerHeight) {
        $(".main_info").removeClass("parallax");
    } else {
        $(".main_info").addClass("parallax");
    }


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
$(document).on("click", ".btn__exit", function(e) {
    location.href = `login.php`
        //console.log(id)
});
$(document).on("click", ".btn_register", function(e) {
    form = document.querySelector("form.form_login");
    data = new FormData(form);
    data.append("login", true)
    if(data.get("usuario")=="" || data.get("pass")==""){
        swal(`Todos los campos son requeridos`, {
            icon: "error",
        });
    }else{
    $.ajax({
        method: "POST",
        url: "post_creator/controller/poster.controller.php",
        data: data,
        processData: false,
        contentType: false,
        success: (res) => {
            console.log(res);
            swal(`Se registro con exito a ${res}`, {
                icon: "success",
            });
            }
        })
    }
});
$(document).on("click", ".btn_new_post",function (e) {
    //location.href = `dashboard_add`
    e.preventDefault()
    data={new_post : "true"}
    $.ajax({
        method: "POST",
        url: "post_creator/controller/poster.controller.php",
        data: data,
        success: (res) => {
            console.log(res)
            location.href = `dashboard_update?id=${res}`
        }
    })
});
$(document).on("click", ".btn_start", function(e) {
    form = document.querySelector("form.form_login");
    data = new FormData(form);
    data.append("login_start", true)
    if(data.get("usuario")=="" || data.get("pass")==""){
        swal(`Todos los campos son requeridos`, {
            icon: "error",
        });
    }else{
        $.ajax({
        method: "POST",
        url: "post_creator/controller/poster.controller.php",
        data: data,
        processData: false,
        contentType: false,
        success: (res) => {
            //console.log(res);
            if(res==false){
                console.log(res);
                swal(`Usuario o Contraseña incorrecta`, {
                    icon: "error",
                });
            }else{
                location.href = `dashboard`
            }
        }
    })
    }
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