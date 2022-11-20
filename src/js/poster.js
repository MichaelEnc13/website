$(document).on("click", "#", function(e) {

    let action = e.target.id;
    let data;
    let form;
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