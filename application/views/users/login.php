<div class="span12">
    <?php echo set_breadcrumb('<span class="divider">/</span>') ?>


    <div class="row">
        <div class="span9">
            <h1>Masuk akun</h1>
        </div>
    </div>

    <hr />

    <div class="row">

        <div class="span6 well">
            <h2>Pelanggan Baru</h2>
            <p>Daftarkan akun Anda sekarang agar bisa berbelanja di Toko Online kami.</p>
            <br />
            <a href="<?php echo site_url('members/register'); ?>" class="btn btn-primary pull-right">Buat Akun</a>
        </div>

        <div class="span4 well pull-right">
            <h2>Pelanggan Terdaftar</h2>
            <p>Jika Anda sudah memiliki akun, silakan masuk.</p>

            <?php echo form_open('users/login'); ?>
            <fieldset>
                <div class="control-group">
                    <label for="focusedInput" class="control-label">Email</label>
                    <div class="controls">
                        <input type="text" name="email" value="<?php echo set_value('email') ?>" placeholder="Email Anda" id="username" class="input-xlarge focused">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Password</label>
                    <div class="controls">
                        <input type="password" name="password" placeholder="Password Anda" id="password" class="input-xlarge">
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Login</button>
 <!--               <?php echo anchor('members/register', 'Daftar') ?> |                -->
 <!--               <?php echo anchor('members/forgot_password', 'Lupa Password?'); ?>  -->
            </fieldset>
            <?php echo form_close(); ?>

        </div>

    </div>
</div>
