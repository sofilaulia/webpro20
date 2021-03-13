<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Form gabungan</title>
</head>

<body>
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">
                    <h4>Sistem Penilaian</h4>
                </div>
                <div class="card-body">
                    <h3>Form Nilai Siswa</h3>
                    <hr />

                    <form method="POST" action="gabungan.php">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" id="nama" class="form-control" value="" size="30" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">NIM</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nim" id="nim" class="form-control" value="" size="10" placeholder="NIM">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Mata Kuliah</label>
                                    <div class="col-sm-8">
                                        <select name="matkul" id="matkul" class="form-control">
                                            <option value="DDP">Dasar-Dasar Pemrograman</option>
                                            <option value="BDI">Basis Data I</option>
                                            <option value="WEB">Pemrograman Web</option>
                                            <option value="UI/UX">User Interface / User Experience</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nilai UTS</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nilai_uts" id="uts" class="form-control" value="" size="6" placeholder="Nilai UTS">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nilai UAS</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nilai_uas" id="uas" class="form-control" value="" size="6" placeholder="Nilai UAS">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Nilai Tugas Praktikum</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nilai_tugas" id="tugas" class="form-control" value="" size="6" placeholder="Nilai Tugas Praktikum">
                                    </div>
                                </div>

                                <div class="offset-4 pl-2">
                                    <input type="submit" class="btn btn-primary" value="SIMPAN" name="proses">
                                </div>
                            </div>
                        </div>
                    </form>

                    <?php

                    $ns1 = ['id' => 1, 'nama' => 'Ahmad Budiman', 'nim' => '01101', 'matkul' => 'DDP', 'nilai_uts' => 80, 'nilai_uas' => 84, 'nilai_tugas' => 78];
                    $ns2 = ['id' => 2, 'nama' => 'Sekar Maharani', 'nim' => '01121', 'matkul' => 'WEB', 'nilai_uts' => 70, 'nilai_uas' => 50, 'nilai_tugas' => 68];
                    $ns3 = ['id' => 3, 'nama' => 'Pratiwi Ningrum', 'nim' => '01130', 'matkul' => 'BDI', 'nilai_uts' => 60, 'nilai_uas' => 86, 'nilai_tugas' => 70];
                    $ns4 = ['id' => 4, 'nama' => 'Faisal Akbar', 'nim' => '01134', 'matkul' => 'UI/UX', 'nilai_uts' => 90, 'nilai_uas' => 91, 'nilai_tugas' => 82];

                    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
                    if (isset($_POST['proses'])) {

                        $proses = $_POST['proses'];
                        $nama = $_POST['nama'];
                        $nim = $_POST['nim'];
                        $matkul = $_POST['matkul'];
                        $uts = $_POST['nilai_uts'];
                        $uas = $_POST['nilai_uas'];
                        $tugas = $_POST['nilai_tugas'];

                        $ns5 = ['id' => 5, 'nama' => $_POST['nama'], 'nim' => $_POST['nim'], 'matkul' => $_POST['matkul'], 'nilai_uts' => $_POST['nilai_uts'], 'nilai_uas' => $_POST['nilai_uas'], 'nilai_tugas' => $_POST['nilai_tugas']];

                        array_push($ar_nilai, $ns5);
                    }
                    ?>
                </div>
                <div class="card-footer">
                    <h6 class="text-center">Develop By Sofil Muna Aulia &copy;2021</h6>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-md-12 mt-4">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Daftar Nilai Mahasiswa/i </h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px;">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">NIM</th>
                        <th class="text-center">Mata Kuliah</th>
                        <th class="text-center">UTS</th>
                        <th class="text-center">UAS</th>
                        <th class="text-center">Tugas</th>
                        <th class="text-center">Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($ar_nilai as $ns) {
                        echo '<tr class="text-center"> <td>' . $nomor . '</td>';
                        echo '<td class="text-left " >' . $ns['nama'] . '</td>';
                        echo '<td>' . $ns['nim'] . '</td>';
                        echo '<td>' . $ns['matkul'] . '</td>';
                        echo '<td>' . $ns['nilai_uts'] . '</td>';
                        echo '<td>' . $ns['nilai_uas'] . '</td>';
                        echo '<td>' . $ns['nilai_tugas'] . '</td>';

                        $nilai_akhir = ($ns['nilai_uts'] + $ns['nilai_uas'] + $ns['nilai_tugas']) / 3;
                        echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                        echo '</tr>';
                        $nomor++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</div>
</html>