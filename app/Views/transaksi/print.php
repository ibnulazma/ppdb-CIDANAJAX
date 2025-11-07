<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 15px;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h2,
        h4 {
            margin: 0;
            text-align: center;
        }

        .total {
            text-align: right;
            font-weight: bold;
        }

        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body>

    <h2>LAPORAN TRANSAKSI PEMBAYARAN</h2>
    <h4>
        <?= $tanggal ? 'Tanggal: ' . date('d-m-Y', strtotime($tanggal)) : 'Semua Tanggal' ?>
    </h4>
    <?php if (!empty($search)): ?>
        <h4>Nama: <?= esc($search) ?></h4>
    <?php endif; ?>
    <hr>

    <?php if (empty($rekapdata)): ?>
        <p><strong>Maaf, data transaksi di tanggal ini tidak ada.</strong></p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Total Transaksi (Rp)</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($rekapdata as $row): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= esc($row['nama_siswa']) ?></td>
                        <td><?= number_format($row['total_transaksi'], 0, ',', '.') ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="2" class="total">Total Keseluruhan</td>
                    <td><?= number_format($total, 0, ',', '.') ?></td>
                </tr>
            </tbody>
        </table>
    <?php endif; ?>

    <div class="no-print" style="margin-top: 20px; text-align: center;">
        <button onclick="window.print()">🖨️ Cetak Sekarang</button>
    </div>

</body>

</html>