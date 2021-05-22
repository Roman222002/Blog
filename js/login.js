
$(document).ready(function() {
    $('#formLogin').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'Controllers/Login.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);

                if (jsonData.success === 1)
                {
                    location.href = 'Pages/Home.php';
                }
                else
                {
                    alert('Invalid Credentials!');
                }
            }
        });
    });
});