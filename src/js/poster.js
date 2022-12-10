$('#description,#features').trumbowyg();


$(".trumbowyg-editor").keyup(function(e) {
    console.log(e.target.innerHTML);

function getQueryVariable(e) {
    let params = new URLSearchParams(location.search);
    return params.get('id');
}
$(".input_text , .trumbowyg-editor").keyup(function (e) {
    form = document.querySelector("form.update");
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
});


$(".img_post").change(function (e) {
    let id=e.target.name;
    let img = e.target.value
    // data.append("update_img", true)
    // data.append("id_img", id)
    console.log(e)
    // $.ajax({
    //     method: "POST",
    //     url: "post_creator/controller/poster.controller.php",
    //     data: data,
    //     processData: false,
    //     contentType: false,
    //     success: (res) => {
    //     console.log(res);
    // }
    // })


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
                            let id =e.target.dataset.update
                            data={status: 1, id: id, update_fish: true}
                            
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
                            location.href = `sistem_info`
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