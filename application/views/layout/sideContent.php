<div class="basis-4/12 px-4 pt-4" id="sideContent">

        <?php if (intval($this->session->userdata('role') == 1 || intval($this->session->userdata('role') == 2))) : ?>
                <section id="menuadmin">
                    
                    <div class="max-w-sm bg-white rounded-b-xl overflow-hidden border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="bg-[#150544] text-white py-2">
                            <h5 class="mb-2 text-xl text-center font-semibold tracking-tight dark:text-white">Admin Menu</h5>
                        
                        <p class="font-normal text-center dark:text-gray-400">Halo <?= $user["username"]; ?></p>
                        </div>
                        <aside class="w-full" aria-label="Sidebar">
                    <div class="bg-[#23BBD1]  px-4 py-2">
                        <ul class="">
                            <li>
                                <a href="<?= base_url("article"); ?>" class="text-white flex items-center p-2 text-base font-normal rounded-lg active:bg-dark dark:text-white hover:bg-[#150544] dark:hover:bg-gray-700">
                                <i class="fa-solid fa-gauge fa-fwtext-xl"></i>
                                <span class="ml-3">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("article/archive"); ?>" class="flex items-center p-2 text-base font-normal text-white rounded-lg active:bg-dark dark:text-white hover:bg-[#150544] dark:hover:bg-gray-700">
                                <i class="fa-solid fa-calendar-days fa-fwtext-xl"></i>
                                <span class="ml-3">Arsip Artikel</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("article/add"); ?>" class="flex items-center p-2 text-base font-normal text-white rounded-lg active:bg-dark dark:text-white hover:bg-[#150544] dark:hover:bg-gray-700">
                                <i class="fa-solid fa-pen fa-fwtext-xl"></i>
                                <span class="ml-3">Tambah Artikel</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("photo/add"); ?>" class="flex items-center p-2 text-base font-normal text-white rounded-lg active:bg-dark dark:text-white hover:bg-[#150544] dark:hover:bg-gray-700">
                                <i class="fa-solid fa-camera fa-fwtext-xl"></i>
                                <span class="ml-3">Tambah Foto</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("tautan/add"); ?>" class="flex items-center p-2 text-base font-normal text-white rounded-lg active:bg-dark dark:text-white hover:bg-[#150544] dark:hover:bg-gray-700">
                                <i class="fa-solid fa-link fa-fwtext-xl"></i>
                                <span class="ml-3">Tambah Tautan</span>
                                </a>
                            </li>
                             <li>
                                <a href="<?= base_url("video/add"); ?>" class="flex items-center p-2 text-base font-normal text-white rounded-lg active:bg-dark dark:text-white hover:bg-[#150544] dark:hover:bg-gray-700">
                                <i class="fa-solid fa-video fa-fwtext-xl"></i>
                                <span class="ml-3">Tambah Video</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("article/kliping"); ?>" class="flex items-center p-2 text-base font-normal text-white rounded-lg active:bg-dark dark:text-white hover:bg-[#150544] dark:hover:bg-gray-700">
                                <i class="fa-solid fa-book fa-fwtext-xl"></i>
                                <span class="ml-3">Kliping</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= base_url("auth/logout"); ?>" class="flex items-center p-2 text-base font-normal text-white rounded-lg active:bg-dark dark:text-white hover:bg-[#150544] dark:hover:bg-gray-700">
                                <i class="fa-solid fa-right-from-bracket fa-fwtext-xl"></i>
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

                <div class="mt-4 max-w-sm bg-white  rounded-b-xl overflow-hidden shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="bg-[#150544] text-white py-2">
                        <h5 class=" text-xl text-center font-semibold tracking-tight dark:text-white">Pengumuman</h5>
                    </div>

                    <?php  if(empty($pengumuman)) : ?>
                        <div class="bg-[#23BBD1]  px-4 py-3">
                        <h5 class=" text-2xl italic text-center font-semibold tracking-tight dark:text-white">Tidak Ada Pengumuman</h5>
                        </div>
                    <?php else : ?>
                        <div class="bg-[#23BBD1]  px-4 py-3">
                        <p class=" font-normal text-sm text-start text-white dark:text-gray-400"><?= date('D, d M Y', $pengumuman->date); ?></p>
                        <a href="<?= base_url('article/maincontent/') . $pengumuman->id_article; ?>"><p class="font-semibold text-md text-start text-white dark:text-gray-400"><?= $pengumuman->title; ?></p></a>
                        </div>
                    <?php endif ; ?>
                   
                   
                </div>

                </section>

                <section id="foto">
                <div class="mt-4 max-w-sm bg-white rounded-b-xl overflow-hidden  shadow-md shad dark:bg-gray-800 dark:border-gray-700">
                    <div class="bg-[#150544] text-white py-2">
                        <h5 class=" text-xl text-center font-semibold tracking-tight dark:text-white">Foto Terbaru</h5>
                    </div>  
                    <div class="bg-[#23BBD1]  px-4 py-3">
                        <div class="swiper bg-white rounded-md">
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
                </div>
                </section>

                <section id="video">
                
                <div class="mt-4 mb-3 max-w-sm bg-white  rounded-b-xl overflow-hidden  shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="bg-[#150544] text-white py-2">
                        <h5 class=" text-xl text-center font-semibold tracking-tight dark:text-white">Video Profil</h5>
                    </div>  
                    <div class="bg-[#23BBD1]  px-2 py-3">
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
                </div>
                </section>
</div>