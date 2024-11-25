<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $judul; ?></title>
        <style>
            @font-face {
                font-family: SourceSansPro;
                src: url(SourceSansPro-Regular.ttf);
            }

            .clearfix:after {
                content: "";
                display: table;
                clear: both;
            }

            a {
                color: #0087C3;
                text-decoration: none;
            }

            body {
                position: relative;
                width: 25cm;  
                height: 29.7cm; 
                margin: 0 auto; 
                color: #555555;
                background: #FFFFFF; 
                font-family: Arial, sans-serif; 
                font-size: 14px; 
                font-family: SourceSansPro;
            }

            header {
                padding: 10px 0;
                margin-bottom: 20px;
                border-bottom: 1px solid #AAAAAA;
            }

            #logo {
                float: left;
                margin-top: 8px;
            }

            #logo img {
                height: 70px;
            }

            #company {
                float: right;
                text-align: right;
            }

            #details {
                margin-bottom: 50px;
            }

            #client {
                padding-left: 6px;
                border-left: 6px solid #0087C3;
                float: left;
            }

            #client .to {
                color: #777777;
            }

            h2.name {
                font-size: 1.4em;
                font-weight: normal;
                margin: 0;
            }

            #invoice {
                float: right;
                text-align: right;
            }

            #invoice h1 {
                color: #0087C3;
                font-size: 2.4em;
                line-height: 1em;
                font-weight: normal;
                margin: 0  0 10px 0;
            }

            #invoice .date {
                font-size: 1.1em;
                color: #777777;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                border-spacing: 0;
                margin-bottom: 20px;
            }

            table th,
            table td {
                padding: 20px;
                background: #EEEEEE;
                text-align: center;
                border-bottom: 1px solid #FFFFFF;
            }

            table th {
                white-space: nowrap;        
                font-weight: normal;
            }

            table td {
                text-align: right;
            }

            table td h3{
                color: #57B223;
                font-size: 1.2em;
                font-weight: normal;
                margin: 0 0 0.2em 0;
            }

            table .no {
                font-size: 1.6em;
                text-align: left;
            }

            table .desc {
                text-align: left;
                font-size: 1.6em;
            }

            table .unit {
                font-size: 1.6em;
                text-align: left;
            }

            table .qty {
                font-size: 1.6em;
                text-align: left;
            }

            table .total {
                font-size: 1.6em;
                text-align: left;
            }

            table tbody tr:last-child td {
                border: none;
            }
        </style>
    </head>
    <body>
        <main>
            <div id="details" class="clearfix">
                <?php foreach ($useraktif as $u) { ?>
                    <div id="client">
                        <div class="to">Informasi :</div>
                        <h2 class="name"><?= $u->nama; ?></h2>
                        <div class="address"><?= $u->alamat; ?></div>
                        <div class="email"><a href="mailto:<?= $u->email; ?>"><?= $u->email; ?></a></div>
                    </div>
                <?php }?>
                <div id="invoice">
                    <h1>BOOKING</h1>
                    <div class="date"><?= $items[0]['id_booking'] ?></div>
                    <div class="date"><?= date("d F Y", strtotime($items[0]['tgl_booking'])); ?></div>
                    <div class="date"><?= date("d F Y", strtotime($items[0]['batas_ambil'])); ?></div>
                </div>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th class="no" style="background-color: #0087C3; color: white;">No</th>
                        <th class="desc" style="background-color: #0087C3; color: white;">Buku</th>
                        <th class="unit" style="background-color: #0087C3; color: white;">Penulis</th>
                        <th class="qty" style="background-color: #0087C3; color: white;">Penerbit</th>
                        <th class="total" style="background-color: #0087C3; color: white;">Tahun Terbit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($items as $i) { ?>
                        <tr>
                            <td class="no"><?= $no; ?></td>
                            <td class="desc"><?= $i['judul_buku']; ?></td>
                            <td class="unit"><?= $i['pengarang']; ?></td>
                            <td class="qty"><?= $i['penerbit']; ?></td>
                            <td class="total"><?= $i['tahun_terbit']; ?></td>
                        </tr>
                    <?php $no++; }?>
                </tbody>
            </table>
        </main>
    </body>
</html>