<?php
$host="localhost";
$user="root";
$pass="";
$db="project";
?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#menu_list8').show();
    });
</script>
<h2 class="page_title">Laporan</h2>
<?php if ($this->session->flashdata('success')): ?>
    <div class="success_msg">
        <span><?php echo $this->session->flashdata('success'); ?></span>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('error')): ?>
    <div class="error_msg">
        <span><?php echo $this->session->flashdata('error'); ?></span>
    </div>
<?php endif; ?>
<div class="table_row">
    <div class="row clearfix">

        <div class="search">
            <form id="ArticleIndexForm" method="get" action="<?php echo site_url('admin/orders/index'); ?>" accept-charset="utf-8">
                <div class="input text"><input name="q" type="text" value="<?php echo $this->input->get('q'); ?>" id="ArticleQ" /></div>            
                <button class="green_bt">Cari</button>
            </form>        
        </div>

<?php
// Make a MySQL Connection
$query = "SELECT SUM(total) FROM orders WHERE status='1'";      
$result = mysql_query($query) or die(mysql_error());
// Print out result
while($row = mysql_fetch_array($result)){
    $total=number_format($row['SUM(total)'],0,",",".");    
    echo "<h2>Total  Keuntungan ". " = RP. ". $total;    echo "</h2>";
}
?>

    </div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <th>Kode</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Jatuh Tempo</th>
            <th>Metode</th>
            <th>Status</th>
            <th width="110" class="ac">Action</th>
        </tr>
        <?php if ($orders): ?>

            <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?php echo $order['code']; ?></td>
                    <td><?php echo $this->general->humanDate2($order['order_date']); ?></td>
                    <td><?php echo number_format($order['total']); ?></td>
                    <td><?php echo $this->general->humanDate2($order['payment_deadline']); ?></td>
                    <td><?php echo $paymentMethods[$order['payment_method']]; ?></td>
                    <td><?php echo $status[$order['status']]; ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>index.php/admin/orders/detail/<?php echo $order['id']; ?>" class="ico edit">Detail</a>
                        |
                        <a href="<?php echo site_url('admin/orders/delete/' . $order['id']) ?>" onclick="return confirm('Are you sure want to delete this?');">Delete</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7"><strong>There is no data</strong></td>
            </tr>
        <?php endif; ?>
    </table>

    <div class="paging">
        <?php echo $pagination ?>    
    </div>
</div>                    

<!--end #article-->