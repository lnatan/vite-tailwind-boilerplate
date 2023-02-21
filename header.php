<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class('flex flex-col h-screen') ?>>
    <?php wp_body_open(); ?>

    <header class="flex-0 bg-slate-100 px-4 border shadow-md">
        <div class="container">
            <div class="flex items-center min-h-[40px]">
                <div class="">
                    <a href="<?php echo home_url() ?>">Logo</a>
                </div>
                <nav class="px-2">
                    <?php get_menu_header() ?>
                </nav>
            </div>
        </div>
    </header>

    <main class="flex-grow px-4 py-4">
        <div class="container">