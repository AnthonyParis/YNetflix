$(document).ready(() => {
    $("#connexionForm").submit(event => {
        event.preventDefault()

        $.post("ConnexionForm.php", {
            "email" : $("#email").val(),
        }).then(response => {
            location.assign("Index.php")
        })
    })
})