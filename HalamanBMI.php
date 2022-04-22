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
                    <h1>Table Pasien</h1>
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
                            <?php
class bmiPasien {
    public $tglperiksa,
    $kodepasien, 
    $nama,
    $berat,
    $tinggi,
    $umur,
    $jenisKelamin;

    public function hasilBMI() {
        return "<b>
            Tanggal Periksa : $this->tgl_periksa <br><br>
            Kode Pasien : $this->kode_pasien <br><br>
            Nama : $this->nama   <br><br>
            Berat Badan : $this->berat <br><br>                  
            Tinggi Badan : $this->tinggi <br><br>
            Umur : $this->umur <br><br>
            Jenis Kelamin : $this->jenisKelamin</br>"; 
    }
    public function statusBMI($BMI) {
        if ($BMI < 18.5) {
            return "<td>Kekurangan Berat Badan</td>";
        }
        else if ($BMI >= 18.5 && $BMI <= 24.9) {
            return "<td>Normal (ideal)</td>";
        }
        else if ($BMI >= 25.0 && $BMI <= 29.9) {
            return "<td>Kelebihan Berat Badan</td>";
        }
        else {
            return "<td>Kegemukan (Obesitas)</td>";
        }
    }
}
if (isset($_GET["nama__lengkap"])) {
    $bmi = new bmiPasien;
    $bmi->tglperiksa = $_GET["tanggal__periksa"];
    $bmi->kodepasien = $_GET["kode__pasien"];
    $bmi->nama = $_GET["nama__lengkap"];
    $bmi->berat = $_GET["berat__"];
    $bmi->tinggi = $_GET["tinggi__"];
    $bmi->umur = $_GET["umur__"];
    $bmi->jenisKelamin = $_GET["jenis__kelamin"];
}
$pasien1 = ['periksa' => '2022-01-10', 'kode' => 'P001', 'nama'=>'Wulan', 'kelamin'=>'Perempuan', 'umur'=>18, 'berat'=>46.2, 'tinggi'=>155];
$pasien2 = ['periksa' => '2022-01-11', 'kode' => 'P002', 'nama'=>'Tiara', 'kelamin'=>'Perempuan', 'umur'=>20, 'berat'=>42.8, 'tinggi'=>158];
$pasien3 = ['periksa' => '2022-01-12', 'kode' => 'P003', 'nama'=>'Agus', 'kelamin'=>'Laki-laki', 'umur'=>22, 'berat'=>90.3, 'tinggi'=>154];
$pasien4 = ['periksa' => $bmi->tglperiksa, 'kode' => $bmi->kodepasien, 'nama'=> $bmi->nama, 'kelamin'=> $bmi->jenisKelamin, 'umur'=>$bmi->umur, 'berat'=>$bmi->berat, 'tinggi'=>$bmi->tinggi];

$ar_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];
?>
                            <!DOCTYPE html>
                            <html lang="en">

                            <head>
                                <meta charset="utf-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                                <link rel="stylesheet"
                                    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
                                    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
                                    crossorigin="anonymous">
                                <title>OUTPUT</title>
                            </head>

                            <body>
                                <div class="container">
                                    <h2 class="text-center mb-5">Data BMI Pasien</h2>
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Tanggal Periksa</th>
                                                <th scope="col">Kode Pasien</th>
                                                <th scope="col">Nama Lengkap</th>
                                                <th scope="col">Gender</th>
                                                <th scope="col">Umur</th>
                                                <th scope="col">Berat</th>
                                                <th scope="col">Tinggi</th>
                                                <th scope="col">Nilai BMI</th>
                                                <th scope="col">Status BMI</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                    $nomor = 1;
                    foreach($ar_pasien as $pasien) {
                        echo '<tr><td>'.$nomor.'</td>';
                        echo '<td>'.$pasien['periksa'].'</td>';
                        echo '<td>'.$pasien['kode'].'</td>';
                        echo '<td>'.$pasien['nama'].'</td>';
                        echo '<td>'.$pasien['kelamin'].'</td>';
                        echo '<td>'.$pasien['umur'].'</td>';
                        echo '<td>'.$pasien['berat'].'</td>';
                        echo '<td>'.$pasien['tinggi'].'</td>';
                        $BMI = $pasien["berat"] / (($pasien["tinggi"]/100)**2);
                        echo '<td>'.number_format($BMI,1).'</td>';
                        $status = new bmiPasien();
                        echo $status->statusBMI($BMI);
                        echo '</tr>';
                        $nomor++;
                    }
                ?>
                                        </tbody>
                                    </table>
                                    <?php echo "<hr>BMI Anda Adalah : $BMI";?>
                                    <?php if($BMI < 18.5) {?>
                                    <img src="assets/kurus.jpg" alt="">
                                    <?php } ?>
                                    <?php if($BMI >= 18.5 && $BMI <= 24.9) {?>
                                    <img src="assets/normal.jpg" alt="">
                                    <?php } ?>
                                    <?php if($BMI >= 25.0 && $BMI <= 29.9) {?>
                                    <img src="assets/gendut.jpg" alt="">
                                    <?php } ?>
                                </div>

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