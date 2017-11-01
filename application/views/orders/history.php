<div class="span12">
    <?php echo set_breadcrumb('<span class="divider">/</span>') ?>
    <div class="page-header">
        <h1>Riwayat Belanja</h1>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No. Pemesanan</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Jatuh Tempo</th>
                <th>Metode</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php if (!empty($orders)): ?>
            <?php $i = 1; ?>
            <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?php echo $order['code']; ?></td>
                    <td><?php echo $this->general->humanDate2($order['order_date']) ?></td>
                    <td><strong><?php echo $this->cart->format_number($order['total']); ?></strong></td>
                    <td><?php echo $this->general->humanDate2($order['payment_deadline']) ?></td>
                    <td><?php echo $paymentMethods[$order['payment_method']] ?></td>
                    <td><?php echo $status[$order['status']] ?></td>
                    <td style="width: 120px; max-width: 100%;">                   
                        <?php if ($order['status'] == 0): ?>
                            <a href="<?php echo site_url('confirmations/add/' . $order['code']); ?>">Konfirmasi</a> |
                            <a href="<?php echo site_url('orders/detail/' . $order['code']); ?>">Rincian</a>
                        <?php elseif ($order['status'] == 1): ?>
                            <a href="<?php echo site_url('report/detail/' . $order['code']); ?>" target="_blank">Laporan</a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>

