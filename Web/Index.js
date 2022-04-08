$(document).ready(() => {
    $.post("http://localhost:8888/YNetflix/Medias/Index.php?action=read").then(response => {
        console.log(response)

        $.each(JSON.parse(response), (id, media) => {
            const button = media["type"] == "serie" ? (
                "<button class=\"w-50 btn btn-outline-primary\" onclick=\"location.assign('Serie.php?id=" + media["id"] + "')\"> See Episodes </button>"
            ) : (
                "<button class=\"w-50 btn btn-outline-primary\" onclick=\"location.assign('Movie.php?id=" + media["id"] + "')\"> See Movie </button>"
            )

            $("#medias").append("\
                <tr>\
                    <th class=\"align-middle\">\
                        <img class=\"img-fluid\" src=\"" + media["poster"] + "\" alt=\"" + media["title"] + "\"/>\
                    </th>\
                    <th class=\"align-middle\"> " + media["title"] + " </th>\
                    <th class=\"align-middle\"> " + media["category"] + " </th>\
                    <th class=\"align-middle\"> " + media["description"].substr(0, 200) + "… </th>\
                    <th class=\"align-middle\"> " + button + " </th>\
                </tr>\
            ")

            /*$.post("http://localhost:8888/YNetflix/Posters/Index.php?action=search&mediaId=" + media["id"]).then(response => {
                $("#poster-" + media["id"]).attr("src", response)
            })*/
        })
    })
})