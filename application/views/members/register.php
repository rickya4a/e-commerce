<div class="span12">
    <?php echo set_breadcrumb('<span class="divider">/</span>') ?>
    <div class="page-header">
        <h1>Daftar Akun Baru</h1>
    </div>
    <?php echo form_open('members/register') ?>
    <fieldset>
        <div class="span5 alert alert-danger">Semua kolom diperlukan</div>  
        <div class="span6">&nbsp;</div>
        <div class="span6">&nbsp;</div>
        <div class="span6">&nbsp;</div>
        <?php if ($this->session->flashdata('message')): ?>
            <?php echo $this->session->flashdata('message'); ?>
        <?php endif ?>
        <div class="control-group">
            <label for="focusedInput" class="control-label"><span class="required_mark">*</span>Nama Lengkap:</label>
            <div class="controls">
                <input type="text" class="input-xlarge focused span6" name="full_name" value="<?php echo set_value('full_name'); ?>"/>
            </div>
        </div>  

        <div class="control-group">
            <label for="focusedInput" class="control-label"><span class="required_mark">*</span>Email:</label>
            <div class="controls">
                <input type="text" class="input-xlarge focused span6" name="email" value="<?php echo set_value('email'); ?>" />
            </div>
        </div>
        <div class="control-group">
            <label for="focusedInput" class="control-label"><span class="required_mark">*</span>Password:</label>
            <div class="controls">
                <input type="password" class="input-xlarge focused span6" name="password" />
            </div>
        </div>
        <div class="control-group">
            <label for="focusedInput" class="control-label"><span class="required_mark">*</span>Konfirmasi Password:</label>
            <div class="controls">
                <input type="password" class="input-xlarge focused span6" name="confirm_password" />
            </div>
        </div>
        <div class="control-group">
            <label for="focusedInput" class="control-label"><span class="required_mark">*</span>Telepon/HP:</label>
            <div class="controls">
                <input type="number" class="input-xlarge focused span6" name="phone" value="<?php echo set_value('phone'); ?>" />
            </div>
        </div>
        <div class="control-group">
            <label for="focusedInput" class="control-label"><span class="required_mark">*</span>Kode Pos:</label>
            <div class="controls">
                <input type="number" class="input-xlarge focused span6" name="zip" value="<?php echo set_value('zip'); ?>" />
            </div>
        </div>
        <div class="control-group">
            <label for="focusedInput" class="control-label"><span class="required_mark">*</span>Alamat:</label>
            <div class="controls">
                <textarea class="span6" name="address"><?php echo set_value('address'); ?></textarea>
            </div>
        </div>
        <input type="hidden" name="status" value="<?php echo set_value('status',1); ?>">
        <div class="span2">
            <button class="btn btn-primary"  type="submit">Daftar</button>
        </div>      
    </fieldset>
    <?php echo form_close(); ?>
</div>