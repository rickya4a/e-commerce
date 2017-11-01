<div class="span12">
    <?php echo set_breadcrumb('<span class="divider">/</span>') ?>
    <div class="page-header">
        <h1>Keranjang Belanja</h1>
    </div>
    <?php if ($this->cart->contents()): ?>
        <?php echo form_open('carts/update'); ?>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Nama</th>
                    <th>Ukuran</th>
                    <th>Kuantitas</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($this->cart->contents() as $items): ?>
                    <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>
                    <tr>
                        <td class="muted center_text">
                            <a href="">
                                <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                                        <img src="<?php echo base_url() ?>timthumb.php?src=<?php echo $items['options']['pic']; ?>&h=90&w=70" title="<?php echo $items['name']; ?>" alt=""/>
                                <?php endif; ?>
                            </a>
                        </td>
                        <td><?php echo $items['name']; ?></td>
                        <td><?php echo $items['options']['size']; ?></td>
                        <td><?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'class' => 'input-mini')); ?></td>
                        <td><?php echo number_format($items['price']); ?></td>
                        <td><?php echo number_format($items['subtotal']); ?></td>
                        <td><a href="<?php echo site_url('carts/delete/' . $items['rowid']); ?>" onclick="return confirm('Apakah Anda yakin untuk menghapus item ini?')">Hapus</a></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><strong><?php echo number_format($this->cart->total()); ?></strong></td>
                </tr>
            </tbody>
        </table>
        <div class="input full">
           <select name="select" id="dropdownlist1">
                <option id="0">-- Pilih Kota --</option>
                    <?php
                        $getAllData = mysql_query("SELECT city_id, city_name, cost FROM cost");
                        while($viewAll = mysql_fetch_array($getAllData)){
                            echo '<option value="'.$viewAll['city_name'].'" data-value="'.$viewAll['cost'].'">'.$viewAll['city_name'].'</option>';
                        }
                    ?>
            </select>
            <input type="text" id="field1" value="<?php echo $viewAll['cost']?>" disabled/>
        </div>
        <div class="row">
            <div class="span5">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
            <div class="span2">
                <a href="<?php echo site_url('products'); ?>" class="btn btn-primary">Lanjutkan Belanja</a>
            </div>
            <div class="span5">
                <a href="<?php echo site_url('orders/checkout'); ?>" class="btn btn-primary pull-right">Checkout</a>
            </div>
        </div>
        <?php echo form_close(); ?>
    <?php else: ?>
        <div class="row">
            <div class="span12">
                Keranjang belanja Anda kosong...
            </div>
        </div>
        <div class="row">
            <div class="span5">
                &nbsp;
            </div>
            <div class="span2">
                <a href="<?php echo site_url('products'); ?>" class="btn btn-primary">&lt; Kembali Belanja</a>
            </div>
            <div class="span5">
                &nbsp;
            </div>
        </div>
    <?php endif; ?>
</div>
