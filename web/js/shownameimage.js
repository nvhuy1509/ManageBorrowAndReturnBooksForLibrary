
$(function () {
    $("#fileupload").change(function (event) {

        var x = event.target.files[0].name
        $(".file-name").text(x)
    });
});