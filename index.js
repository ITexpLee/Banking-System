//Once form is submitted
//Profile Form
$(document).ready(function () {
    $("#profileform").submit(function (event) {
        event.preventDefault();
        //Collect user Input
        var datapost = $("#profileform").serialize();
        //send them to signup.php using Ajax
        $.ajax({
            url: "admin.php",
            type: "POST",
            data: datapost,
            success: function (data) {
                if (data) {
                    $("#passbook").html(data);
                }
            },
            error: function () {
                $("#signupmessage").html("<div class='alert alert-danger'>There was some error in Ajax call please try again Later.</div>");
            }
        });
    });
});

//Transaction form
$(document).ready(function () {
    $("#transactionform").submit(function (event) {
        event.preventDefault();
        //Collect user Input
        var datapost = $("#transactionform").serialize();
        //send them to signup.php using Ajax
        $.ajax({
            url: "transaction.php",
            type: "POST",
            data: datapost,
            success: function (data) {
                if (data) {
                    $("#successmessage").html(data);
                }
            },
            error: function () {
                $("#signupmessage").html("<div class='alert alert-danger'>There was some error in Ajax call please try again Later.</div>");
            }
        });
    });
});