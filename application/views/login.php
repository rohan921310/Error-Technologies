<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="<?= base_url() ?>lib/jquery.form.js"></script>
    <script src="<?= base_url() ?>dist/jquery.validate.js"></script>

    <title>Welcome To Error Technologies</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #17a2b8;
            height: 100vh;
        }

        #login {
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
            /* border: 2px solid #5b6cd6; */
            margin: 20px;
            border-radius: 6px;
            max-width: 600px;
            margin-top: 120px;
            height: 375px;
        }

        form .error {
            color: #ff0000;
        }
    </style>
</head>

<body>
    <div class="container" style="max-width: 600px;">


        <div class="row justify-content-center align-items-center" id="login">

            <div class="container">
                <h3 class="text-center text-black pt-3" style="font-family: 'Playfair Display', serif;"> <u> Registration Form</u></h3>
            </div>
            <?php if ($msg = $this->session->flashdata('msg')) {
                    if ($msg_class = $this->session->flashdata('msg_class')) {
                ?>
            <div class="col-12">
               
                        <div class="alert <?= $msg_class ?>">
                            <h4> <?= $msg ?> </h4>
                        </div>
               
            </div>
            <?php         }
                }

                ?>
            <div class="col-12" id="rest_done" style="display: none;">
                <div class="alert bg-info text-white">
                    <h4> Form Reset </h4>
                </div>
            </div>
            <div class="col-12">
                <form class="form-group" id="form1" name="registration" action="<?= base_url() ?>check-form" method="POST">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Full Name" name="fullname">
                        <div style="color: red;">
                            <?php echo form_error('fullname'); ?>
                        </div>

                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" name="email">
                        <div style="color: red;">
                            <?php echo form_error('email'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password (6 or more characters)" name="password">
                        <div style="color: red;">
                            <?php echo form_error('password'); ?>
                        </div>
                        <?php echo form_error(''); ?>
                    </div>
                    <div class="col-12" style="text-align: center;">

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="#" id="reset" class="btn btn-danger">Reset</a>
                    </div>
                </form>
            </div>
        </div>
    </div>






    <script>
        $(document).ready(function() {
            $("#reset").on('click', function(e) {
                $('#form1')[0].reset();
                $('#rest_done').css("display", "block");

            });

        });
    </script>

    <script>
        $("form[name='registration']").validate({
            // Specify validation rules
            rules: {
                fullname: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6
                }
            },
            // Specify validation error messages
            messages: {
                firstname: "Please enter your firstname*",
                password: {
                    required: "Please provide a password*",
                    minlength: "Your password must be at least 6 characters long"
                },
                email: "Please enter a valid email address*"
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>

</html>