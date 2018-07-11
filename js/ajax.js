$(document).ready(function(){
    $('#registration-form').submit(function() {
        var url="/project_quiz/register_submit.php";
        var data = $('#registration-form').serialize();
        $.ajax(url, {
            data: data,
            success: registration_success,
            error: onError,
            type: "POST"
        });
        return false;
    });
});
var registration_success = function (response) {
    alert(response);
    data = JSON.parse(data);
};
var onError=function (data) {
    alert("Internal Server Error");
}

 
