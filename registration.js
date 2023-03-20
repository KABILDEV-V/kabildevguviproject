$(document).ready(function() {
    $('#dev').submit(function(event) {
        event.preventDefault();
        console.log("hii");
        var form_data = $(this).serialize();
        $.ajax({
            url: 'register.php',
            method: 'POST',
            data: form_data,
            success: function(response) {
                if(response==1){
                    alert("Password Mixmacthing");
                }else{
                    window.location.href="login.html";
                }
            }
        });
    });
});
