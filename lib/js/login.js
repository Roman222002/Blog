$(document).ready(function () {
    if (document.cookie.split(';').some((item) => item.includes('user'))) {
        window.location.href = '../../Pages/home.php'
    }

    $('#formLogin').submit(function (e) {
        e.preventDefault()

        $.ajax({
            type: 'POST',
            url: '../../Controllers/Login.php',
            data: $(this).serialize(),
            success: function (jsonData) {
                jsonData = JSON.parse(jsonData)

                if (jsonData.success) {
                    document.cookie = 'user=' + JSON.stringify(jsonData.user)
                    location.href = '../../Pages/home.php'
                } else {
                    alert('Error!\n' + JSON.stringify(jsonData.error))
                }
            }
        })
    })
})