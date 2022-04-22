<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Pasien</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Title</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!doctype html>
                            <html lang="en">

                            <head>
                                <meta charset="utf-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                                <link rel="stylesheet"
                                    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
                                    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
                                    crossorigin="anonymous">
                                <link rel="preconnect" href="https://fonts.gstatic.com">
                                <link
                                    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
                                    rel="stylesheet">

                                <title>BMI Pasien</title>

                                <style>
                                * {
                                    padding: 0;
                                    margin: 0;
                                    box-sizing: border-box;
                                }

                                .kotak {
                                    padding: 2em 0;
                                    border-radius: 50px;
                                    background-color: #FD42EA;
                                    box-shadow: 0 0 20px rgba(255, 64, 237, .5);
                                }

                                .form-control {
                                    background: #d8e3e7;
                                }

                                .btn1 {
                                    background-color: #9214FF;
                                    color: #fff;
                                }

                                .btn1:hover {
                                    background-color: #add8e6;
                                    color: black;
                                }

                                .form-horizontal {
                                    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.10)
                                }

                                .btn1 {
                                    background-color: #9214FF;
                                    color: #fff;
                                    width: 30%;
                                    padding: 12px 15px;
                                }
                                </style>

                            </head>

                            <body>
                                <div class="container-fluid" style="max-width:1366px;">
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <form class="form-horizontal p-5 h-100 kotak" method="GET"
                                                action="HalamanBMI.php">
                                                <div class="text-center">
                                                    <h3 class="mb-5">Form Isian Indexs Massa Tubuh (BMI)</h3>
                                                </div>
                                                <!------------>
                                                <div class="form-group row">
                                                    <label for="tglperiksa" class="col-sm-4 col-form-label"><b>Tanggal
                                                            Periksa</b></label>
                                                    <div class="col-sm-6">
                                                        <input type="date" class="form-control" name="tanggal__periksa"
                                                            required>
                                                    </div>
                                                </div>
                                                <br>

                                                <!------------>
                                                <div class="form-group row">
                                                    <label for="kodepasien" class="col-sm-4 col-form-label"><b>Kode
                                                            Pasien</b></label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="kode__pasien"
                                                            required>
                                                    </div>
                                                </div>
                                                <br>

                                                <!------------>
                                                <div class="form-group row">
                                                    <label for="namalengkap" class="col-sm-4 col-form-label"><b>Nama
                                                            Lengkap</b></label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="nama__lengkap"
                                                            required>
                                                    </div>
                                                </div>
                                                <br>

                                                <!------------>
                                                <div class="form-group row">
                                                    <label for="namalengkap"
                                                        class="col-sm-4 col-form-label"><b>Berat</b></label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group mb-2 mr-sm-2">
                                                            <input type="text" class="form-control" name="berat__"
                                                                required>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">Kg</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                                <!------------>
                                                <div class="form-group row">
                                                    <label for="namalengkap" class="col-sm-4 col-form-label"><b>Tinggi
                                                            Badan</b></label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group mb-2 mr-sm-2">
                                                            <input type="text" class="form-control" name="tinggi__"
                                                                required>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">Cm</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                                <!------------>
                                                <div class="form-group row">
                                                    <label for="namalengkap"
                                                        class="col-sm-4 col-form-label"><b>Umur</b></label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group mb-2 mr-sm-2">
                                                            <input type="text" class="form-control" name="umur__"
                                                                required>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">Thn</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                                <!------------>
                                                <div class="row">
                                                    <legend class="col-form-label col-sm-4 pt-0"><b>Jenis Kelamin</b>
                                                    </legend>
                                                    <div class="col-sm-8">

                                                        <div class="form-check mr-auto">
                                                            <input class="form-check-input" type="radio" id="laki"
                                                                name="jenis__kelamin" value="Laki-Laki" required>
                                                            <label class="form-check-label mr-5" for="laki">
                                                                Laki-Laki
                                                            </label>
                                                            <input class="form-check-input" type="radio" id="perempuan"
                                                                name="jenis__kelamin" value="Perempuan" required>
                                                            <label class="form-check-label" for="perempuan">
                                                                Perempuan
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!---col-->
                                                </div>
                                                <!---row-->
                                                <br>
                                                <!------------>
                                                <div class="text-center">
                                                    <input class="btn1 btn-primary" type="submit" value="Simpan"
                                                        name="proses" />
                                                </div>
                                            </form>
                                        </div>
                                        <!--col--->



                                    </div>
                                    <!---container-->

                                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                                        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                                        crossorigin="anonymous">
                                    </script>
                                    <script
                                        src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
                                        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
                                        crossorigin="anonymous">
                                    </script>
                            </body>

                            </html>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">Footer</div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>