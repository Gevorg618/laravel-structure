$( document ).ready(function() {
    $(".login-btn-group button").click(function (event) {
        var target = $( event.target );
        $(".login-btn-group .blue-btn").removeClass("blue-btn");
        $(this).addClass("blue-btn")
        if(target.is(".login-btn-group button:first-child")){
            console.log(1234);
            $(".auth-form-cont form:last-child").removeClass("hide-form");
            $(".auth-form-cont form:first-child").addClass("hide-form");
        } else{
            console.log(12343);
            $(".auth-form-cont form:first-child").removeClass("hide-form");
            $(".auth-form-cont form:last-child").addClass("hide-form");
        }
    });
    $(".alert-error").click(function () {
        $(this).remove();
    });
});