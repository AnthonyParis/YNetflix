$(document).ready(() => {
    $.post("http://localhost:8888/YNetflix/Users/Index.php?action=readById&id=1").then(response => {
        response = JSON.parse(response)

        console.log(response)

        $("#email").val(response["email"])
        $("#name").val(response["name"])
        $("#address").val(response["address"])
        $("#country").val(response["country"])
    })

    $("#update").submit(event => {
        event.preventDefault()

        $.post("http://localhost:8888/YNetflix/Users/Index.php?action=update&id=1&email=" + $("#email").val() + "&name=" + $("#name").val() + "&address=" + $("#address").val() + "&country=" + $("#country").val()).then(response => {
            location.reload()
        })

        console.log("OK")
    })
})