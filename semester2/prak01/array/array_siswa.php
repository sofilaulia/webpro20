<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Nilai Siswa</title>
</head>

<body>
    <div class="row">
    <div class="container mt-5">
        <h3 class="text-center">Daftar Nilai Siswa</h3>

        <?php
        $ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
        $ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
        $ns3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
        $ns4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];

        $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
        ?>
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">STT-Terpadu Nurul Fikri</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                    <th class="text-center" > No</th>
                    <th class="text-center" >NIM</th>
                    <th class="text-center" >UTS</th>
                    <th class="text-center" >UAS</th>
                    <th class="text-center" >Tugas</th>
                    <th class="text-center" >Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($ar_nilai as $ns) {
                    echo '<tr class="text-center"> <td>' . $nomor . '</td>';
                    echo '<td>' . $ns['nim'] . '</td>';
                    echo '<td>' . $ns['uts'] . '</td>';
                    echo '<td>' . $ns['uas'] . '</td>';
                    echo '<td>' . $ns['tugas'] . '</td>';

                    $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                    echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                    echo '</tr>';
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>