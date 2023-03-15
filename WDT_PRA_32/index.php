<!---Create a form validation program using jquery-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"> </script>
<script>
    $(function() {
        $("form[name='RegForm']").validate({
            // Define validation rules
            rules: {
                uname: "required",
                pword: "required",
                email: "required",
                mob: "required",
                message: "required",
                uname: {
                    required: true
                },
                pword: {
                    required: true,
                    minlength: 10
                },
                email: {
                    required: true,
                    email: true
                },
                mob: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    number: true
                }
            },
            // Specify validation error messages
            messages: {
                uname: {required:"Please provide a valid name."},
                pword: {
                    required: "Please enter password",
                    minlength: "Password must be min 10 character long"
                },
                email: {
                    required: "Please enter your email",
                    minlength: "Please enter a valid email address"
                },
                mob: {
                    required: "Please provide a phone number",
                    minlength: "Phone number must be min 10 characters long",
                    maxlength: "Phone number must not be more than 10 characters long"
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
<body>
    <form name="RegForm">
        UserName:<input type="text" name="uname" id="uname"><br><br>
        Password:<input type="text" name="pword" id="pword"><br><br>
        Email:<input type="text" name="email" id="email"><br><br>
        Mobile:<input type="text" name="mob" id="mob"><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
