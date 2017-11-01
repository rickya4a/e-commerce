<!-- Start Sidebar -->
<?php $this->load->view('widget/categories'); ?>
<!-- End Sidebar -->
<div class="span9 popular_products">
    <?php echo set_breadcrumb('<span class="divider">/</span>') ?>
    <div class="row">
        <div class="span9">
            <h1><?php echo $product['name'] ?></h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="span3">
            <?php
            $media = $this->general->getSingleMedia('product', $product['id']);
            ?>
            <?php if (!empty($media['path'])): ?>
                <img src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url() . $media['path'] ?>&h=275&w=220"/>
            <?php else: ?>
                <img alt="" src="">
            <?php endif; ?>
        </div>
        <div class="span6">
            <div class="span6">
                <address>
                    <strong>Nama:</strong> <span><?php echo $product['name'] ?></span><br />
                    <strong>Kode:</strong> <span><?php echo $product['code'] ?> </span><br />
                    <?php if ($product['stock'] <= 0): ?>
                        <strong>Ketersediaan:</strong> <span>Habis</span><br />
                    <?php else: ?>
                        <strong>Ketersediaan:</strong> <span><?php echo $product['stock']; ?> pcs</span><br />
                    <?php endif; ?>
                    <strong>Ukuran:</strong>
                    <form method="post" accept-charset="utf-8" action="<?php echo site_url('products/add_cart/' . $product['permalink']); ?>">
                        <select name="size">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>                 
                </address>
            </div>
            <div class="span6">
                <h2>
                    <small>Harga : <?php echo number_format($product['price']) ?> Discount : <?php echo $product['discount_percent'] ?> %</small><br/>
                    <strong>Harga Nett: <?php echo number_format($product['net_price']) ?> IDR</strong> <br />
                </h2>
            </div>
            <div class="span6">
                <div class="span3 no_margin_left">
                    <input type="submit" value="Tambah ke Keranjang" class="btn btn-primary">
                </div>
                    </form>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="span9">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#1" data-toggle="tab">Deskripsi</a></li>
                    <li><a href="#2" data-toggle="tab">Produk Terkait</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="1">
                        <?php echo $product['description'] ?>
                    </div>
                    <div class="tab-pane" id="2">
                        <ul class="thumbnails related_products">
                            <?php $relatedBooks = $this->general->getProductsByCategoryId($product['category_id']) ?>
                            <?php if ($relatedBooks): ?>
                                <?php foreach ($relatedBooks as $product): ?>
                                    <li class="span2">
                                        <div class="thumbnail">
                                            <a href="<?php echo base_url() ?>index.php/products/detail/<?php echo $product['permalink']; ?>">
                                                <?php
                                                $media = $this->general->getSingleMedia('product', $product['id']);
                                                ?>
                                                <?php if (!empty($media['path'])): ?>
                                                    <img src="<?php echo base_url(); ?>timthumb.php?src=<?php echo base_url() . $media['path'] ?>&h=275&w=220"/>
                                                <?php else: ?>
                                                    <img alt="" src="http://placehold.it/220x275">
                                                <?php endif; ?>
                                            </a>
                                            <div class="caption">
                                                <a href="<?php echo base_url() ?>index.php/products/detail/<?php echo $product['permalink']; ?>"> <h5><?php echo $product['name']; ?></h5></a>  Price: <?php echo number_format($product['net_price']) ?> IDR<br /><br />
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
