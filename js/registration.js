$(document).ready(function() {
    $('#formRegistration').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '../../Controllers/Registration.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);

                if (jsonData.success === 1)
                {
                    //TODO SAVE DATA TO COOKIE jsonData.user
                    location.href = '../Pages/Home.php';
                }
                else
                {
                    alert('Error!'+jsonData.error);
                }
            }
        });
    });
});