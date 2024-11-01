
<section id="subtitle">
    <div class="container mx-6 mt-20 mb-3 flex items-center gap-7">
    <img class="h-[5.5rem] w-auto" src="<?= base_url('assets/'); ?>img/login/iportal-03 1.png">
        
    <h4 class="text-2xl font-extrabold"><?= $title; ?></h4>

    <form method="post" action="<?= base_url('article'); ?>">   
    <label for="search" class=" text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
    <div class="flex">
        <input autocomplete="off" name="keyword" autofocus type="search" id="search" class="block p-2.5 w-64 text-sm text-gray-900 bg-gray-50 rounded-l-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
        <button type="submit" name="submit" class="text-white bg-[#23BBD1] hover:bg-[#0d8fa3] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-r-lg text-md px-3 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
    </form>

    </div>
</section>

<hr class="border">

<section id="cardNews">
    <div class="container mx-6 mt-2">
        <div class="flex gap-2">