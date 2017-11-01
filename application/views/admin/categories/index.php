<script type="text/javascript">
    $(document).ready(function() {
        $('#menu_list2').show();
    });
</script>
<h2 class="page_title">Kategori</h2>
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
            <form id="ArticleIndexForm" method="get" action="<?php echo site_url('admin/categories/index'); ?>" accept-charset="utf-8">
                <div class="input text"><input name="q" type="text" value="<?php echo $this->input->get('q'); ?>" id="ArticleQ" /></div>            
               <button class="green_bt">Cari</button>
            </form>        
        </div>

        <div class="option">
            <a href="<?php echo site_url('admin/categories/add'); ?>" class="add">Kategori Baru</a>
        </div>


    </div>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th class="actions">Aksi</th>
        </tr>
        <?php if ($categories): ?>
            <?php foreach ($categories as $category): ?>
                <tr class="altrow">
                    <td><?php echo $category['name']; ?></td>
                    <td><?php echo $category['description']; ?></td>
                    <td class="actions">
                        <a href="<?php echo site_url('admin/categories/edit/' . $category['id']) ?>">Ubah</a> |
                        <a href="<?php echo site_url('admin/categories/delete/' . $category['id']) ?>" onclick="return confirm('Apakah Anda yakin untuk menghapus ini?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>

    <div class="paging">
        <?php //echo $pagination ?>    
    </div>
</div>                    

<!--end #article-->
