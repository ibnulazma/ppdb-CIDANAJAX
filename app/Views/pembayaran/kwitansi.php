<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Kwitansi Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .right {
            text-align: right;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 0.9em;
            color: #555;
        }
    </style>
</head>

<body>

    <h2>Kwitansi Pembayaran Seragam</h2>
    <p><b>Kode Pendaftaran:</b> <?= esc($siswa->kode_pendaftaran) ?><br>
        <b>Nama Siswa:</b> <?= esc($siswa->nama_siswa) ?>
    </p>

    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Dibayar</th>
            </tr>
        </thead>
        <tbody>
            <?php $total = 0; ?>
            <?php foreach ($bayar as $b): ?>
                <?php $total += floatval($b->dibayar); ?>
                <tr>
                    <td><?= esc($b->nama_item) ?></td>
                    <td>Rp<?= number_format($b->dibayar, 0, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Total</th>
                <th>Rp<?= number_format($total, 0, ',', '.') ?></th>
            </tr>
        </tfoot>
    </table>

</body>

</html>