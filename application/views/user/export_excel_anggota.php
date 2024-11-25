<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename={$title}.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
?>

<h3><center>LAPORAN DATA ANGGOTA</center></h3>
<br>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Anggota</th>
            <th>Email</th>
            <th>Aktif</th>
            <th>Member Sejak</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($laporan as $a) { ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $a['nama']; ?></td>
                <td><?= $a['email']; ?></td>
                <td><?= $a['is_active']; ?></td>
                <td><?= date('Y', $a['tanggal_input']); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>