$(document).ready(function(){
    $('#login-form').submit(function() {
        var url="/project_quiz/login_submit.php";
        var data = $('#login-form').serialize();
        $.ajax(url, {
            data: data,
            success: login_success,
            error: onError,
            type: "POST"
        });
        return false;
    });
});
var login_success = function (response) {
    alert(response);
    data = JSON.parse(data);
};
var onError=function (data) {
    alert("Internal Server Error");
}
