$(document).ready(() => {
    $("#registerForm").submit(event => {
        event.preventDefault()

        $.post("RegisterForm.php", {
            "email" : $("#email").val(),
            "name" : $("#name").val(),
        }).then(response => {
            location.assign("Index.php")
        })
    })
})