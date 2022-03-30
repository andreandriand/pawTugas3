<?php
require 'functions.php';

$id = $_GET["id"];

$data = query("SELECT * FROM clubs_210 WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    //cek keberhasilan ubah data
    if (edit($_POST) > 0) {
        echo "<script>
                alert('Ubah data berhasil dilakukan');
                document.location.href = 'index.php';
            </script>";
    } else {
        echo  "<script>
                alert('Ubah data gagal dilakukan');
                document.location.href = 'index.php';
            </script>";
    }
}
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ubah Data</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/lib/chosen/chosen.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Ubah Data</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-body card-block">
                                <form method="POST" action="">
                                    <input type="hidden" name="id" value="<?= $data["id"]; ?>">
                                    <div class="form-group">
                                        <label class=" form-control-label">Nama</label>
                                        <div class="input-group">
                                            <input type="text" name="name" class="form-control" value="<?= $data["name"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Negara</label>
                                        <div class="input-group">
                                            <input type="text" name="country" class="form-control" value="<?= $data["country"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Tahun Berdiri</label>
                                        <div class="input-group">
                                            <input type="text" maxlength="4" name="year" class="form-control" value="<?= $data["year"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Manager</label>
                                        <div class="input-group">
                                            <input type="text" name="manager" class="form-control" value="<?= $data["manager"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Stadion</label>
                                        <div class="input-group">
                                            <input type="text" name="stadium" class="form-control" value="<?= $data["stadium"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=" form-control-label">Logo</label>
                                        <div class="input-group">
                                            <input type="text" name="logo" class="form-control" value="<?= $data["logo"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-10 input-group">
                                                <button type="submit" name="submit" class="btn btn-success" onclick="return confirm('Apakah anda yakin ingin mengubah data ini?')">Ubah</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="input-group">
                                    <button class="btn btn-danger" onclick="kembali()">Kembali</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>


    </div><!-- .animated -->
    </div><!-- .content -->
    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2022
                </div>
                <div class="col-sm-6 text-right">
                    Designed by <a href="https://colorlib.com">Andre</a>
                </div>
            </div>
        </div>
    </footer>


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>
    <script>
        function kembali() {
            document.location.href = "index.php";
        }
    </script>

</body>

</html>