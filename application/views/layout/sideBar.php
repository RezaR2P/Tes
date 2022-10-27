<section id="cardNews">
        <div class="flex">
            <div class="basis-[20.8333335%] sidebar shrink  h-screen">
            <aside class="" aria-label="Sidebar">
            <div class="overflow-y-auto py-4 px-3 bg-white rounded dark:bg-gray-800">
                <div class="flex flex-col justify-center items-center">
                    <img src="<?= ($user['avatar']) ? base_url('assets/img/profile/') . $user['avatar'] : base_url('assets/img/profile/default.jpg'); ?>" alt="Avatar" class="w-24 h-24 rounded-full">
                    <h4 class="font-semibold text-xl mt-3"><?= $user['username']; ?></h4>
                    <a href="<?= base_url("article"); ?>"><p class="font-medium mt-1">Dashboard</p></a>
                </div>

                <ul class="space-y-1 mt-4">
                            <li>
                                <a href="<?= base_url("user/edit/") . $user['username']; ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fa-solid fa-user-edit fa-fw text-gray-500 text-xl"></i>
                                <span class="ml-3">Edit Profil</span>
                                </a>
                            </li>
                            <?php if (intval($this->session->userdata('role') == 1 || intval($this->session->userdata('role') == 2))) : ?>
                            <li>
                                <a href="<?= base_url("article/archive"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fa-solid fa-box-archive fa-fw text-gray-500 text-xl"></i>
                                <span class="ml-3">Arsip Artikel</span>
                                </a>
                            </li>
                            
                            
                            <div id="accordion-collapse" data-accordion="collapse">
                            <li>
                                <h2 id="accordion-collapse-heading-2" class="hover:bg-gray-100 rounded-lg ">
                                    <button type="button" class="w-full text-start p-2" data-accordion-target="#accordion-collapse-body-2" aria-expanded="true" aria-controls="accordion-collapse-body-2">
                                        <i class="fa-solid fa-blog fa-fw text-gray-500 text-xl"></i>
                                        <span class="ml-2.5 font-medium text-gray-800">Postingan</span>
                                    </button>
                                </h2>
                            </li>
                            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                                <li class="border-r-[3px] border-cyan-500">
                                    <a href="<?= base_url("user/article/") .$user['username']; ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <i class="fa-solid fa-newspaper fa-fw text-gray-500 text-xl"></i>
                                    <span class="ml-3">Artikel Saya</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url("user/photo/") . $user['username']; ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <i class="fa-solid fa-camera fa-fw text-gray-500 text-xl"></i>
                                    <span class="ml-3">Foto Saya</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url("user/tautan/") . $user['username']; ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <i class="fa-solid fa-link fa-fw text-gray-500 text-xl"></i>
                                    <span class="ml-3">Tautan Saya</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url("user/video/") . $user['username']; ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <i class="fa-solid fa-video fa-fw text-gray-500 text-xl"></i>
                                    <span class="ml-3">Video Saya</span>
                                    </a>
                                </li>
                                <li>
                                <a href="<?= base_url("user/comment/") . $user['username']; ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fa-solid fa-comment fa-fw text-gray-500 text-xl"></i>
                                <span class="ml-3">Komentar Saya</span>
                                </a>
                            </li>
                            </div>
                            <li>
                                <h2 id="accordion-collapse-heading-1" class="hover:bg-gray-100 rounded-lg ">
                                    <button type="button" class="w-full text-start p-2" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                        <i class="fa-solid fa-plus fa-fw text-gray-500 text-xl"></i>
                                        <span class="ml-2.5 font-medium text-gray-800 ">Tambah</span>
                                    </button>
                                </h2>
                            </li>
                            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                                <li class="border-r-[3px] border-cyan-500">
                                    <a href="<?= base_url("article/add"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <i class="fa-solid fa-pen fa-fw text-gray-500 text-xl"></i>
                                    <span class="ml-3">Tambah Artikel</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url("photo/add"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <i class="fa-solid fa-camera fa-fw text-gray-500 text-xl"></i>
                                    <span class="ml-3">Tambah Foto</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url("article/add"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <i class="fa-solid fa-link fa-fw text-gray-500 text-xl"></i>
                                    <span class="ml-3">Tambah Tautan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url("video/add"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <i class="fa-solid fa-video fa-fw text-gray-500 text-xl"></i>
                                    <span class="ml-3">Tambah Video</span>
                                    </a>
                                </li>
                            </div>
                            
                            </div>

                           
                            <li>
                                <a href="<?= base_url("article/kliping"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fa-solid fa-book fa-fw text-gray-500 text-xl"></i>
                                <span class="ml-3">Kliping</span>
                                </a>
                            </li>
                            <?php if (intval($this->session->userdata('role') == 1)) : ?>
                            <li>
                                <a href="<?= base_url("menu/maintenance"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fa-solid fa-menu fa-fw text-gray-500 text-xl"></i>
                                <span class="ml-3">Maintain Menu</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("comment/maintenance"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fa-solid fa-comment fa-fw text-gray-500 text-xl"></i>
                                <span class="ml-3">Maintain Komen</span>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php endif; ?>
                            <li>
                                <a href="<?= base_url("auth/logout"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fa-solid fa-right-from-bracket fa-fw text-gray-500 text-xl"></i>
                                <span class="ml-3">Logout</span>
                                </a>
                            </li>
                            
                        </ul>
            </div>
            </aside>
            </div>