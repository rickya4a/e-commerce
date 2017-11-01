<div class="container-fluid" id="printArea">
    <div class="col-md-6">

        <h1>Laporan Belanja</h1>
        <p>Hallo <strong><?php echo $user['email'] ?></strong>,<br/>
        Pesanan Anda di <strong>Toko Online</strong> telah dikonfirmasi:<br/></p>
        <hr/>
        <table class="mytable mytable-bordered mytable-striped">
            <tr >
                <td><strong>Kode Pesanan</strong></td><td><?php echo $order['code']; ?></td>
            </tr>
            <tr>
                <td><strong>Tanggal Pemesanan</strong></td><td><?php echo $order['order_date']; ?></td>
            </tr>
            <tr>
                <td><strong>Total</strong></td><td>Rp. <?php echo number_format($order['total']); ?>,-</td>
            </tr>
            <tr>
                <td><strong>Jatuh Tempo</strong></td><td><?php echo $order['payment_deadline']; ?></td>
            </tr>
            <tr>
                <td><strong>Metode Pembayaran</strong></td><td><?php echo $paymentMethods[$order['payment_method']]; ?></td>
            </tr>
            <tr>
                <td><strong>Status</strong></td><td><?php echo $status[$order['status']]; ?></td>
            </tr>
        </table>
        <hr/>
        <h3>Rincian Item</h3>
        <table class="mytable mytable-bordered mytable-striped">
            <tr class="cart_title">

                <td><strong>Nama</strong></td>
                <td><strong>Ukuran</strong></td>
                <td><strong>Jumlah</strong></td>
                <td><strong>Harga</strong></td>
                <td><strong>Total</strong></td>

            </tr>

            <?php $i = 1; ?>

            <?php foreach ($orderDetails as $orderDetail): ?>
                <tr>
                    <td><?php echo $orderDetail['name']; ?></td>
                    <td><?php echo $orderDetail['size']; ?></td>
                    <td><?php echo $orderDetail['qty'] ?></td>
                    <td>Rp. <?php echo $this->cart->format_number($orderDetail['net_price']); ?>,-</td>
                    <td>Rp. <?php echo $this->cart->format_number($orderDetail['net_price'] * $orderDetail['qty']); ?>,-</td>
                </tr>

                <?php $i++; ?>

            <?php endforeach; ?>

            <tr>
                <td colspan="4" class="cart_total"><span class="red">TOTAL:</span></td>
                <td>Rp. <?php echo $this->cart->format_number($order['total']); ?>,-</td>                
            </tr>                  

        </table>
        <br/>
        Terima kasih telah berbelanja di tempat kami. Kami akan segera mengirimkan pesanan Anda dalam 1x24 jam.

        <br/>
        <br/>
        Salam,
        <br/><br/><br/>

        <h2>Toko Online</h2>
    </div>
</div>
<a href="#" class="btn btn-primary" id="myButton">Cetak</a>