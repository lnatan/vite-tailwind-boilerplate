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

    <header class="my-6 lg:my-10">
        <div class="container">
            <div class="flex items-center justify-between gap-5">
                <div class="w-20 h-12">
                    <a href="<?php echo home_url() ?>"><img src="/assets/img/logo.png" alt=""></a>
                </div>
                <nav class="hidden lg:flex overflow-hidden">
                    <?php get_menu_header() ?>
                </nav>
                <div class="flex items-center gap-2">
                    <button class="flex items-center justify-center bg-white bg-opacity-40 hover:bg-neutral-200 rounded-2xl border border-neutral-200 w-11 h-11"><span class="svg-icon svg-icon-24 svg-icon-search"></span></button>
                    <button class="lg:hidden flex items-center justify-center bg-white bg-opacity-40 rounded-2xl border border-neutral-200 w-11 h-11"><span class="svg-icon svg-icon-24 svg-icon-menu"></span></button>
                </div>                
            </div>
        </div>
    </header>

    <main class="flex-grow px-4 py-4">
        <div class="container">