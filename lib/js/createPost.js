$(document).ready(function () {
    // Post submit Function //
    $("#formLogin").submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: 'POST',
            type: '../../Controllers/AddPost.php',
            data: $(this).serialize(),
            success: function (jsonData) {
                jsonData = JSON.parse(jsonData)

                if (jsonData.success) {
                    $('#submit').val('Success!')
                    location.href = JSON.stringify(jsonData.user.url)
                } else {
                    alert('Error!\n' + JSON.stringify(jsonData.error))
                }
            }
        })
    });

    // Image Upload Function //
    $(document).on("change", ".fileupload", function () {
        var file = $(this)[0].files[0];
        var formInfo = $(this).closest(".form-group");
        var formData = new FormData();
        formData.append("post_image", file);
        $.ajax({
            url: imgURL,
            type: "POST",
            dataType: "json",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $(formInfo).find(".fileinfo").html("").append("<p>File Uploading...</p>");
            },
        }).done(function (response) {
            if (response.success) {
                $(formInfo).find("input[class='photo_upload']").val(response.success);
                $(formInfo).find(".fileinfo").html("").append("<p><img class='imgthumb img-fluid' src='" + response.success + "'>Image Uploaded</p>");
                $(formInfo).find(".btn_remove").addClass("d-none");
                $(formInfo).find(".fileinputs").html("").append("<button type='button' class='btn btn-warning btn-block removeimg'>Remove</button>");
            } else {
                $(formInfo).find(".fileinfo").html("").append("<p>" + response.error[0] + "</p>");
            }
        });
    });

    // Image Delete Function //
    $(document).on('click', '.removeimg', function () {
        var formInfo = $(this).closest(".form-group");
        var fileName = $(formInfo).find("input[class='photo_upload']").val();
        $.ajax({
            url: delURL,
            type: "POST",
            data: {id: fileName},
            dataType: "json",
        }).done(function (response) {
            if (response.success) {
                $(formInfo).find("input[class='photo_upload']").val("");
                $(formInfo).find(".fileinfo").html("").append("<p>" + response.success + "</p>");
                $(formInfo).find(".fileinputs").html("").append("<label class='btn btn-info btn-block btnfile'>Browse...<input class='fileupload d-none' type='file' name='post_image'></label>");
                $(formInfo).find(".btn_remove").removeClass("d-none");
            } else {
                $(formInfo).find(".fileinfo").html("").append("<p>" + response.error + "</p>");
            }
        });
    });

    // Image remove on edit //
    $(document).on('click', '.editimage', function () {
        var formInfo = $(this).closest(".form-group");
        $(formInfo).find("input[class='photo_upload']").val("");
        $(formInfo).find(".fileinfo").html("").append("<p>Image Removed</p>");
        $(formInfo).find(".fileinputs").html("").append("<label class='btn btn-info btn-block btnfile'>Browse...<input class='fileupload d-none' type='file' name='post_image'></label>");
    });
});
