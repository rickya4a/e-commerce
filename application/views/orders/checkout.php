<div class="span12">
    <?php echo set_breadcrumb('<span class="divider">/</span>') ?>
    <div class="page-header">
        <h1>Rincian Pembelian</h1>
    </div>
    <?php if ($this->cart->contents()): ?>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Nama</th>
                    <th>Ukuran</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>

                <?php foreach ($this->cart->contents() as $items): ?>


                    <tr>

                        <td class="muted center_text">
                            <a href="product.html">
                                <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                                        <img src="<?php echo base_url() ?>timthumb.php?src=<?php echo $items['options']['pic']; ?>&h=70&w=50" title="<?php echo $items['name']; ?>" alt=""/>
                                <?php endif; ?>
                            </a>
                        </td>

                        <td><?php echo $items['name']; ?></td>
                        <td><?php echo $items['options']['size']; ?></td>
                        <td><?php echo $items['qty'] ?></td>
                        <td><?php echo number_format($items['price']); ?></td>
                        <td><?php echo number_format($items['subtotal']); ?></td>

                    </tr>
                    <?php $i++; ?>

                <?php endforeach; ?>
                <tr>
                    <td><strong>Total</strong></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><strong><?php echo number_format($this->cart->total()); ?></strong></td>
                </tr>
            </tbody>
        </table>
        
        <div class="row">
            <div class="span5">
                <a href="<?php echo site_url('carts'); ?>" class="btn btn-primary">&lt; Kembali</a>
            </div>
            <div class="span2">
                &nbsp;
            </div>
            <div class="span5">
                <a href="<?php echo site_url('orders/proceed'); ?>" class="btn btn-primary pull-right">Lanjut</a>
            </div>
        </div>

    <?php else: ?>
        <div class="row">
            <div class="span12">
                Keranjang Anda kosong...
            </div>
        </div>
        <div class="row">
            <div class="span5">
                &nbsp;
            </div>
            <div class="span2">
                <a href="<?php echo site_url('products'); ?>" class="btn btn-primary">&lt; Kembali belanja</a>
            </div>
            <div class="span5">
                &nbsp;
            </div>
        </div>
    <?php endif; ?>




</div>
