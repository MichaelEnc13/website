$('#description,#features').trumbowyg({

});

$(document).on("click", function(e) {

    let action = e.target.id;
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
            form = document.querySelector("form.update");
            data = new FormData(form);
            id = e.target.dataset.update;
          
            //id_img = e.dataset.id_img;
            // let id_value_img = document.querySelectorAll(".img_post");
            // id_value_img.forEach(x=> {
            //     console.log(x.attributes.name.value)
            // });
            
            data.append("update", true)
            data.append("id", id)
            //data.append("id_img", id_img)
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
        case "delete":
            form = document.querySelector("form.create");
            data = new FormData(form);
            data.append("delete", true)

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
    }

});