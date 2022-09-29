
<div class="md:flex ">
    <div class="col-lg-7 column-7 bg-[#1A9DBF]  h-screen flex justify-center items-center">
        <div class="bungkus flex items-center flex-col">
        <img src="<?= base_url('assets/'); ?>img/login/pablita-522 1.png" class="w-75 mb-10 mx-auto aspect-video" alt="" srcset="">
        <div class="text text-start ">
        <h1 class="text-6xl font-bold mt-8 text-light">I-PORTAL</h1>
        <p class="text-light font-semibold text-lg mt-3">Core Value Akhlak Insan <br>INTI GROUP</p>
        </div>
        </div>
    </div>
    <!-- component -->
    <div class=" col-lg-5 flex flex-col px-12 justify-center items-center ">
        <img src="<?= base_url('assets/'); ?>img/login/iportal-03 1.png" class="w-4/5 mb-12" alt="" srcset="">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-4/5 max-w-[550px]">
        <form method="post" action="<?= base_url('auth') ?>">
            <?php if ($this->session->flashdata('msg_error')) { ?>
                    <div class="alert alert-danger"> <?= $this->session->flashdata('msg_error') ?> </div>
                <?php } ?>
                <?php if ($this->session->flashdata('msg_success')) { ?>
                    <div class="alert alert-success"> <?= $this->session->flashdata('msg_success') ?> </div>
                <?php } ?>
            <div class="mb-4">
            <input
                type="text"
                name="username"
                id="username"
                placeholder="Username"
                value="<?= set_value('username'); ?>"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
            <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
            </div>

            <div class="mb-4">
            <input
                type="password"
                name="password"
                id="password"
                placeholder="Password"
                value="<?= set_value('password'); ?>"
                class="w-full  rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-slate-800 outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
            <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
            </div>

        <div class="-mx-3 flex jusfity-between flex-wrap">
            <div class="w-full px-3 sm:w-1/2">
            <div class="mb-3">
                <div class="flex items-start">
                    <input id="rememberme" type="checkbox" value="1" name="rememberme" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2  dark:border-gray-600">
                    <label for="rememberme" class="ml-2 -mt-1 text-m font-small text-dark dark:text-gray-300">Remember Me</label>
                </div>
            </div>
            </div>
            <div class="w-full px-3 text-end -mt-1 sm:w-1/2">
                
            <a class="text-[#150544]" href="">Forgot Password?</a>
            </div>
        </div>

        
        <div>
            <button
            type="submit"
            class="hover:shadow-form rounded-md bg-[#150544] w-full py-3 px-8text-center text-base font-semibold text-white outline-none"
            >
            Login
            </button>
        </div>
        </form>
        </div>
    </div>
</div>
        