$(document).ready(function () {
    if (document.cookie.split(';').some((item) => item.includes('user='))) {
        window.location.href = '../../Pages/home.php'
    }

    $('#formLogin').submit(function (e) {
        e.preventDefault()

        $.ajax({
            type: "POST",
            url: '../../Controllers/Login.php',
            data: $(this).serialize(),
            success: function (response) {
                let jsonData = JSON.parse(response)

                if (jsonData.success === 1) {
                    document.cookie = JSON.stringify(jsonData)
                    location.href = '../../Pages/home.php'
                } else {
                    alert('Error!\n' + jsonData.error)
                }
            }
        })
    })
})