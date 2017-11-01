<div class="span12">
    <?php echo set_breadcrumb('<span class="divider">/</span>') ?>
    <div class="page-header">
        <h1>Rincian Belanja</h1>
    </div>
    <table class="table table-bordered table-striped">
        <tr >
            <td >No. Pemesanan</td><td><?php echo $order['code']; ?></td>
        </tr>
        <tr>
            <td>Tanggal</td><td><?php echo $this->general->humanDate2($order['order_date']); ?></td>
        </tr>
        <tr>
            <td>Total</td><td><strong>Rp. <?php echo number_format($order['total']); ?></strong></td>
        </tr>
        <tr>
            <td>Jatuh Tempo</td><td><?php echo $this->general->humanDate2($order['payment_deadline']); ?></td>
        </tr>
        <tr>
            <td>Metode</td><td><?php echo $paymentMethods[$order['payment_method']]; ?></td>
        </tr>
        <tr>
            <td>Status</td><td><?php echo $status[$order['status']]; ?></td>
        </tr>
    </table>
    <h3>Rincian Item</h3>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>

                <th>Nama</th>
                <th>Ukuran</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>

            </tr>
        </thead>

        <?php $i = 1; ?>

        <?php foreach ($orderDetails as $orderDetail): ?>

            <tr>
                <td><?php echo $orderDetail['name']; ?></td>
                <td><?php echo $orderDetail['size']; ?></td>
                <td><?php echo $orderDetail['qty']; ?></td>
                <td><?php echo number_format($orderDetail['net_price']); ?></td>
                <td style="text-align:right"><?php echo number_format($orderDetail['net_price'] * $orderDetail['qty']); ?></td>

            </tr>
            <?php $i++; ?>

        <?php endforeach; ?>
            <tr>
                <td colspan="4" style="text-align: right;"> Biaya Pengiriman</td>
                <td style="text-align: right"><strong>Rp. <?php  ?></strong></td>
            </tr>
        <tr>
            <td colspan="4" style="text-align:right">TOTAL :</td>
            <td style="text-align:right"><strong>Rp. <?php echo number_format($order['total']); ?></strong></td>                
        </tr>                  

    </table>
    <div class="row">
        <div class="span5">
            <a href="<?php echo base_url() ?>index.php/orders/history" class="btn btn-primary">&lt; Kembali</a>
        </div>
    <?php if ($order['status'] == 1): ?>
        <div class="span5">
            <a href="<?php echo base_url() ?>index.php/report/detail/<?php echo $order['id']; ?>" target=_blank class="btn btn-primary">Cetak</a>
        </div>
    <?php endif; ?>
    </div>
</div>	


