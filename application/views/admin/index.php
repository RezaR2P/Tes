
<div class="md:flex items-center">
    <div class="kiri column-7 bg-slate-600  h-screen flex flex-col justify-center items-center">
        <img src="<?= base_url('assets/'); ?>img/login/pablita-522 1.png" class="w-full aspect-video" alt="" srcset="">
        <h1 class="text-5xl font-bold text-start mt-8 text-light">I-PORTAL</h1>
        <p class="text-light mt-1">Core Value Akhlak Insan INTI GROUP</p>
        
    </div>
    <div class="kanan">

    </div>
</div>
<!-- <div class="row">
    <div class="col-lg-6  bg-samsudin p-3 ">
        
    </div>
    

    <div class="col-lg-5">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
            </div>

            <?php if ($this->session->flashdata('msg_error')) { ?>
                <div class="alert alert-danger"> <?= $this->session->flashdata('msg_error') ?> </div>
            <?php } ?>
            <?php if ($this->session->flashdata('msg_success')) { ?>
                <div class="alert alert-success"> <?= $this->session->flashdata('msg_success') ?> </div>
            <?php } ?>
            <form class="user" method="post" action="<?= base_url('auth') ?>">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                </button>
            </form>
            <hr>
            <!-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                </div> -->
            <!-- <div class="text-center">
                <a class="small" href="<?= base_url('admin/registration'); ?>">Create an Account!</a>
            </div>
        </div>
    </div>

    
</div> --> 