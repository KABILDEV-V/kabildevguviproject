$(document).ready(function() {
    $('#dev').submit(function(event) {
        console.log("hi");
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url: 'profile.php',
            method: 'POST',
            data: form_data,
            success: function(response) {
                alert("Sucessfully Updated");
            }
        });
    });
});