<div class="flex ">
    <div class="basis-7/12 bg-[#1A9DBF]  h-screen flex justify-center items-center">
        <div class="bungkus flex items-center flex-col">
            <img src="<?= base_url('assets/'); ?>img/login/pablita-522 1.png" class="w-75 mb-10 mx-auto aspect-video" alt="" srcset="">
            <div class="text text-start ">
                <h1 class="text-6xl font-bold mt-8 text-light">I-PORTAL</h1>
                <p class="text-light font-semibold text-lg mt-3">Core Value Akhlak Insan <br>INTI GROUP</p>
            </div>
        </div>
    </div>


    <div class="basis-5/12 py-4 px-8  bg-gray-50 max-h-screen overflow-y-scroll">
    <a href="<?= base_url('auth'); ?>"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm max-w-full sm:w-auto px-5 py-2.5 block dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kembali</button>
    </a>
        <div class="flash-admin" data-flashdata="<?= $this->session->flashdata('adminSuccess'); ?>"></div>
        <?php if (validation_errors() == true): ?>
                    <div class="px-4 py-3 mb-3 text-md text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="font-semibold"><?= $this->session->flashdata('error'); ?></span> 
                    </div>
        <?php endif; ?>
        <div class="w-full shadow-lg rounded-lg bg-white mt-4 p-4">   
            <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                <div class="mb-6 flex items-center gap-3">
                    <div class="basis-3/12">
                        <label for="name" class="font-semibold text-gray-900 dark:text-gray-300">Nama :</label>
                    </div>
                    <div class="basis-9/12">
                        <input type="text" name="name" id="name" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <?= form_error('name', '<p class="text-danger pl-1 pt-2 text-sm font-medium">', '</p>'); ?>
                    </div>
                </div>
                <div class="mb-6 flex items-center gap-3">
                    <div class="basis-3/12">
                        <label for="username" class="font-semibold text-gray-900 dark:text-gray-300">Username :</label>
                    </div>
                    <div class="basis-9/12">
                        <input type="text" name="username" id="username" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <?= form_error('username', '<p class="text-danger pl-1 pt-2 text-sm font-medium">', '</p>'); ?>
                    </div>
                </div>
                <div class="mb-6 flex items-center gap-3">
                    <div class="basis-3/12">
                        <label for="email" class="font-semibold text-gray-900 dark:text-gray-300">Email :</label>
                    </div>
                    <div class="basis-9/12">
                        <input type="text" name="email" id="email" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <?= form_error('email', '<p class="text-danger pl-1 pt-2 text-sm font-medium">', '</p>'); ?>
                    </div>
                </div>
                <div class="mb-6 flex items-center gap-3">
                    <div class="basis-3/12">
                        <label for="password1" class="font-semibold text-gray-900 dark:text-gray-300">Password :</label>
                    </div>
                    <div class="basis-9/12">
                        <input type="password" name="password1" id="password1" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        
                    </div>
                </div>
                <div class="mb-6 flex items-center gap-3">
                    <div class="basis-3/12">
                        <label for="password2" class="font-semibold text-gray-900 dark:text-gray-300">Ulangi Password :</label>
                    </div>
                    <div class="basis-9/12">
                        <input type="password" name="password2" id="password2" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        <?= form_error('password1', '<p class="text-danger pl-1 pt-2 text-sm font-medium">', '</p>'); ?>
                    </div>
                </div>
                
                <div class="mb-6 flex items-center gap-3">
                        <div class="basis-3/12"></div>
                        <div class="basis-9/12">
                            <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm max-w-full sm:w-auto px-5 py-2.5 block dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

