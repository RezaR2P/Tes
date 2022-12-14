<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"> 
<link href="<?= base_url('dist/output.css'); ?>" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
<link href="<?= base_url('assets/vendor/lightbox2/src/css/'); ?>lightbox.css" rel="stylesheet" />
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

<script src="<?= base_url(); ?>/dist/flowbite.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
  
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        h2,
        h4 {
            font-weight: 700 !important;
        }

        h5 {
            font-weight: 600 !important;
        }

        .sidebar {
            overflow-y: scroll;
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none;  /* Internet Explorer 10+ */
        }
        .sidebar::-webkit-scrollbar { /* WebKit */
            width: 0;
            height: 0;
        }
        .bg-cyan {
            background-color: #1A9DBF;
        }
    </style>

    <title><?= $title; ?> </title>
</head>