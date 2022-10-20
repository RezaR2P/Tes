<div class="basis-4/12 px-4 pt-4" id="sideContent">

        <?php if (intval($this->session->userdata('role') == 1 || intval($this->session->userdata('role') == 2))) : ?>
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
                                <a href="<?= base_url("photo/add"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <i class="fa-solid fa-camera fa-fw text-gray-500 text-xl"></i>
                                <span class="ml-3">Tambah Foto</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("tautan/add"); ?>" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg active:bg-dark dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
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
                </section>
                <?php endif; ?>
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
                    
                        <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <?php foreach($photo as $p): ?>
                
                                <div class="swiper-slide">
                                    
                                    <img src="<?= base_url('assets/img/photo/') . $p->photo; ?>" alt="<?= $p->title; ?>" class="border-4 border-slate-700 shadow-lg rounded-lg max-w-full max-h-96">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                        </div>
                </div>
                </section>

                <section id="video">
                
                <div class="mt-4 p-2 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <h5 class="mb-4 mt-3 text-xl text-center font-semibold tracking-tight text-gray-900 dark:text-white">Video Terbaru</h5>

                        <!-- Slider main container -->
                        <div class="swiper h-48">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <?php foreach($video as $v): ?>
                            <?php $url = explode("/", $v->url); ?>
                            <div class="swiper-slide">
                                <iframe class="mx-auto rounded-xl shadow-lg w-9/12 max-h-96" src="https://www.youtube.com/embed/<?= $url[3]; ?>" title="<?= $v->title; ?>" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                        </div>


                        
                </div>
                </section>
</div>