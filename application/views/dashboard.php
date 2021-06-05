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

    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><?= $this->session->userdata('full_name') ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

            </ul>

            <a href="<?= base_url() ?>logout" class="btn btn-outline-info my-2 my-sm-0" type="submit">Logout</a>
        </div>
    </nav>

    <div class="container">
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-info alert-dismissible fade show mt-3 " role="alert">
                <strong><?= $this->session->flashdata('success') ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
        } ?>
        <?php if ($this->session->flashdata('msg')) { ?>

        <div class="alert alert-<?= $this->session->flashdata('msg_class') ?> alert-dismissible fade show mt-3" role="alert">
            <strong><?= $this->session->flashdata('msg') ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
        } ?>

        <div class="card mt-4 ">
            <div class="card-header">
                <u>Import Users with CSV: </u>
            </div>
            <div class="card-body">
                <h5 class="card-title">Select File Here:</h5>


                <form  action="<?= base_url() ?>check-csv" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                    <div class="custom-file mb-3">
                        <input type="file" name="csv_file" class="custom-file-input" onchange="upload(this.value)" accept=".csv" required>
                        <label class="custom-file-label" for="validatedCustomFile">Upload Your .csv File Here</label>
                        <?php echo $error; ?>
                        <div class="invalid-feedback">

                        </div>
                    </div>

                    <div class="mt-4" style="text-align: center;">
                        <button type="submit" id="submit" class="btn btn-primary btn-lg btn-block ">Submit</button>
                    </div>
                </form>
            </div>
        </div>


    </div>

    <script>
        function upload(fakepath) {
            var split = fakepath.split('fakepath\\');
            var fileExtension = fakepath.split('.');
            if (fileExtension[1] === 'csv') {
                $('.invalid-feedback').css("color", "green");
                $('.invalid-feedback').css("display", "block");
                $('.invalid-feedback').html("<b>Selected File:</b> " + split[1]);
                $('#submit').removeAttr("disabled");
            } else {
                $('.invalid-feedback').css("color", "red");
                $('.invalid-feedback').css("display", "block");
                $('.invalid-feedback').html("<b>Error, only .csv file can be uploaded</b>");
                $('#submit').attr("disabled", "");
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>

</html>