<div class="basis-4/12 px-4 pt-4" id="sideContent">

                <section id="menuadmin">
                    
                    <div class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="">
                            <h5 class="mb-2 text-xl text-center font-semibold tracking-tight text-gray-900 dark:text-white">Admin Menu</h5>
                        
                        <p class="mb-3 font-normal text-center text-gray-800 dark:text-gray-400">Halo <?= $user["username"]; ?></p>
                        </div>
                        <aside class="w-full" aria-label="Sidebar">
                    <div class="">
                        <ul class="">
                            <li>
                                <a href="<?= base_url("article"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fa-solid fa-gauge fa-fw text-gray-500 text-xl"></i>
                                <span class="ml-3">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("article/arsip"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fa-solid fa-calendar-days fa-fw text-gray-500 text-xl"></i>
                                <span class="ml-3">Arsip Artikel</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("article/add"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fa-solid fa-pen fa-fw text-gray-500 text-xl"></i>
                                <span class="ml-3">Tambah Artikel</span>
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
                </section>

                <!-- <section id="menuadmin">
                    <div class="card">
                        <div class="card-header">
                            Admin Menu
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Halo <?= $user["username"]; ?></h5>
                            <div class="list-group">
                                <a href="<?= base_url("article"); ?>" class="list-group-item list-group-item-action active" aria-current="true">
                                    <i class="fa-solid fa-gauge fa-fw mr-2"></i>Dashboard
                                </a>
                                <a href="<?= base_url("article/arsip"); ?>" class="list-group-item list-group-item-action">
                                    <i class="fa-solid fa-calendar-days fa-fw mr-2"></i>Arsip Artikel</a>
                                <a href="<?= base_url("article/add"); ?>" class="list-group-item list-group-item-action">
                                    <i class="fa-solid fa-pen fa-fw mr-2"></i>Tambah Artikel</a>
                                <a href="<?= base_url("article/kliping"); ?>" class="list-group-item list-group-item-action">
                                    <i class="fa-solid fa-book fa-fw mr-2"></i>Kliping</a>
                                <a href="<?= base_url("article/comment"); ?>" class="list-group-item list-group-item-action">
                                    <i class="fa-solid fa-comment fa-fw mr-2"></i>Maintain Comment</a>
                                <a href="<?= base_url("auth/logout"); ?>" class="list-group-item list-group-item-action">
                                <i class="fa-solid fa-right-from-bracket fa-fw mr-2"></i>Logout</a>

                            </div>
                        </div>
                    </div>
                </section> -->


                <section id="pengumuman">

                <div class="mt-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    
                    
                    <h5 class="mb-2 text-xl text-center font-semibold tracking-tight text-gray-900 dark:text-white">Pengumuman</h5>
                
                <p class="mt-3 font-normal text-sm text-start text-gray-800 dark:text-gray-400">Senin, 19 Februari 2018</p>
                <p class="font-semibold text-md text-start text-gray-800 dark:text-gray-400">NEWS: PUBLIKASI PERATURAN DANA PENSIUN INTI YANG TERBARU (TAHUN 2017)</p>
            
            </div>

                </section>

                <section id="foto">
                <div class="mt-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-4 text-xl text-center font-semibold tracking-tight text-gray-900 dark:text-white">Foto Terbaru</h5>
                    
                        <img src="https://www.investopedia.com/thmb/1D5gzfGl4VYttKWJ5HMEGHjRLOs=/380x214/smart/filters:no_upscale()/aa014176-5bfc2b8bc9e77c002630643b.jpg" alt="" class="border-4 border-slate-700 shadow-lg rounded-lg max-w-full">
                
                </div>
                </section>

                <section id="video">
                <div class="mt-4 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-4 text-xl text-center font-semibold tracking-tight text-gray-900 dark:text-white">Video Terbaru</h5>
                    
                        <img src="https://images.unsplash.com/photo-1663287695452-bf59337d8746?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxM3x8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt="" class="border-4 border-slate-700 shadow-lg rounded-lg max-w-full">
                
                </div>
                </section>
            </div>

            </div>



    </div>
</section>