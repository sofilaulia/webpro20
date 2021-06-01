<div class="col-md-12">
    <h3>
    Daftar BMI Pasien
    </h3>
    <table class="table">
        <thead>
            <tr>
        <th>#</th><th>Tanggal Periksa</th><th>Kode</th><th>Nama</th><th>Gender</th><th>Berat</th><th>Tinggi</th><th>BMI</th><th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $nomor=1;
            foreach($list_bmi as $all){
        ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$all->kode?></td>
                <td><?=$all->nama?></td>
                <td><?=$all->gender?></td>
                <td><?=$all->berat?></td>
                <td><?=$all->tinggi?></td>
                <td><?=$all->bmi?></td>
                <td><?=$all->status?></td>
            </tr>;
        <?php
            $nomor++;
            }
        ?>
        </tbody>
    </table>
</div>