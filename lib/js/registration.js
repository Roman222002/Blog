$(document).ready(function () {
    if (document.cookie.split(';').some((item) => item.includes('user'))) {
        window.location.href = '../../Pages/home.php'
    }

    $('#formRegistration').submit(function (e) {
        e.preventDefault()

        if ($('#password').val().length < 8) {
            $('.error-short-pass').show()
            $('.error-different-pass').hide()
            return false
        }

        if ($('#password').val() !== $('#password_confirmation').val()) {
            $('.error-short-pass').hide()
            $('.error-different-pass').show()
            return false
        }

        $.ajax({
            type: 'POST',
            url: '../../Controllers/Registration.php',
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