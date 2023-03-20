$(document).ready(function() {
    $('#dev').submit(function(event) {
        console.log("hi");
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url: 'login.php',
            method: 'POST',
            data: form_data,
            success: function(response) {
                if(response==1){
                    alert("Enter Correct Password or UserName");
                }else{

                    function saveData(){
                   var mail = document.getElementById('mail');
                   var Password = document.getElementById('Password');
                   localStorage.setItem('mail',mail);
                   localStorage.setItem('Password',Password)
                   alert("data stored in localStorage");
                                                          }
                    window.location.href="profile.html";
                }
            }
        });
    });
});
