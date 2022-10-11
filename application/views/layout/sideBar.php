<section id="cardNews">
        <div class="flex max-h-screen">
            <div class="basis-2/12">
            <aside class="w-72" aria-label="Sidebar">
            <div class="overflow-y-auto py-4 px-3 bg-white rounded dark:bg-gray-800">
                <div class="flex flex-col justify-center items-center">
                    <img src="<?= ($user['avatar']) ? base_url('assets/img/profile/') . $user['avatar'] : base_url('assets/img/profile/default.jpg'); ?>" alt="Avatar" class="w-24 h-24 rounded-full">
                    <h4 class="font-semibold text-xl mt-3"><?= $user['username']; ?></h4>
                    <a href="<?= base_url("article"); ?>"><p class="font-medium mt-1">Dashboard</p></a>
                </div>

                <ul class="space-y-1 mt-4">
                            <li>
                                <a href="<?= base_url("article/arsip"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fa-solid fa-user-edit fa-fw text-gray-500 text-xl"></i>
                                <span class="ml-3">Edit Profil</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("article/arsip"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fa-solid fa-box-archive fa-fw text-gray-500 text-xl"></i>
                                <span class="ml-3">Arsip Artikel</span>
                                </a>
                            </li>
                            <li class="border-r-[3px] border-cyan-500">
                                <a href="<?= base_url("article/add"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fa-solid fa-pen fa-fw text-gray-500 text-xl"></i>
                                <span class="ml-3">Tambah Artikel</span>
                                </a>
                            </li>
                             <li>
                                <a href="<?= base_url("article/add"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
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
                            <li>
                                <a href="<?= base_url("article/kliping"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fa-solid fa-book fa-fw text-gray-500 text-xl"></i>
                                <span class="ml-3">Kliping</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("article/comments"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fa-solid fa-comment fa-fw text-gray-500 text-xl"></i>
                                <span class="ml-3">Maintain Komen</span>
                                </a>
                            </li>
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