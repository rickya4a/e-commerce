
<h2 class="page_title">Members</h2>
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



        <div class="option">
            <a href="<?php echo site_url('admin/members/add'); ?>" class="add">Tambah Member</a>
        </div>


    </div>
    <table cellpadding="0" cellspacing="0">
        <tr>

            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Telepon/HP</th>
            <th>Status</th>
            <th class="actions">Aksi</th>
        </tr>
        <?php $i = 0; ?>
        <?php if ($members): ?>
            <?php foreach ($members as $user): ?>
                <?php
                $class = '';
                if ($i % 2 == 1) {
                    $class = 'class="altrow"';
                }
                ?>
                <tr <?php echo $class; ?>>

                    <td><?php echo $user['full_name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['address']; ?></td>
                    <td><?php echo $user['phone'] ?></td>
                    <td><?php echo $status[$user['status']] ?></td>
                    <td class="actions">
                        <?php if ($user['level'] == 1): ?>
                            <a href="<?php echo site_url('admin/members/profile') ?>">Profil</a>
                        <?php endif; ?>
                        <?php if ($user['level'] != 1): ?>
                            <a href="<?php echo site_url('admin/members/edit/' . $user['id']) ?>">Ubah</a> |
                            <a href="<?php echo site_url('admin/members/delete/' . $user['id']) ?>" onclick="return confirm('Apakah Anda yakin akan menghapus?');">Hapus</a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>

    <div class="paging">
        <?//php echo $pagination ?> 
    </div>
</div>

<!--end #article-->
