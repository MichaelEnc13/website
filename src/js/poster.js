$('#description,#features').trumbowyg({
    btns: [
        ['viewHTML'],
        ['undo', 'redo'], // Only supported in Blink browsers
        ['formatting'],
        ['strong', 'em', 'del'],
        ['superscript', 'subscript'],
        ['link'],
        ['insertImage'],
        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
        ['unorderedList', 'orderedList'],
        ['horizontalRule'],
        ['removeformat'],
        ['fullscreen']
    ]
});



function getQueryVariable(e) {
    let params = new URLSearchParams(location.search);
    return params.get('id');
}
let data;
$(".input_text , .trumbowyg-editor").keyup(function(e) {
    form = document.querySelector("form.update");

    if (form != null) {
        data = new FormData(form);


        id = getQueryVariable();
        //console.log(id)
        data.append("update", true)
        data.append("id", id)
        $.ajax({
            method: "POST",
            url: "post_creator/controller/poster.controller.php",
            data: data,
            processData: false,
            contentType: false,
            success: (res) => {
                //console.log(res);
            }
        })

    }
});

let id
let post_id;
$(document).on("change", ".update_img", function(e) {
    img_id = e.target.dataset.img_id;
    post_id = e.target.dataset.post_id;
    console.log(img_id, post_id);
    var img = document.querySelector(`.update_img_form_${img_id}`);
    data = new FormData(img);



    data.append("update_img", true)
    data.append("id_img", img_id)
    data.append("id", post_id)

    $.ajax({
        method: "POST",
        url: "post_creator/controller/poster.controller.php",
        data,
        processData: false,
        contentType: false,
        success: (res) => {
            console.log(res);
        }
    })


});

$(document).on("click", function(e) {

    let action = e.target.id ? e.target.id : e.target.parentElement.id;

    let data;
    let form;
    // console.log(action);
    switch (action) {
        case "create":
            form = document.querySelector("form.create");
            data = new FormData(form);
            data.append("create", true)
            $.ajax({
                method: "POST",
                url: "post_creator/controller/poster.controller.php",
                data: data,
                processData: false,
                contentType: false,
                success: (res) => {
                    console.log(res);
                }
            })
            break;
        case "update":

            swal({
                    title: "Esta seguro de finalizar con todos los cambios?",
                    text: "",
                    icon: "info",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {

                    if (willDelete) {
                        let id = e.target.dataset.update
                        data = { status: 1, id: id, update_fish: true }

                        $.ajax({
                            method: "POST",
                            url: "post_creator/controller/poster.controller.php",
                            data: data,
                            //processData: false,
                            //contentType: false,
                            success: (res) => {
                                console.log(res);
                            }
                        })
                        location.href = `dashboard`
                    }
                });
            break;
        case "creates":
            form = document.querySelector("form.create");
            data = new FormData(form);
            data.append("create", true)
            $.ajax({
                method: "POST",
                url: "post_creator/controller/poster.controller.php",
                data: data,
                processData: false,
                contentType: false,
                success: (res) => {
                    console.log(res);
                }
            })
            break;
        case "delete":
            var post_id = e.target.parentElement.dataset.id;
            data = {
                delete: true,
                id: post_id
            };


            //console.log(post_id);

            swal({
                    title: "Seguro que quieres eliminar el post?",
                    text: "",
                    icon: "info",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {

                    if (willDelete) {

                        $.ajax({
                            method: "POST",
                            url: "post_creator/controller/poster.controller.php",
                            data: data,

                            success: (res) => {
                                console.log(res);
                                location.reload();
                            }
                        })
                        swal("Post Eliminado", {
                            icon: "success",
                        });
                    }
                });


            break;
    }

});