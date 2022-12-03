$('#description,#features').trumbowyg();



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
        case "update":
            form = document.querySelector("form.update");
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