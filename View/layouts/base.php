<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $page_description; ?>">
    <title><? $page_title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>

<body>
<?php require_once('View/layouts/menu.php'); ?>
<? $page_content; ?>


</body>
<script >
    document.addEventListener('DOMContentLoaded', function(){
    let dropdownButton = document.getElementById('dropdownButton');
    let dropdownMenu = document.getElementById('dropdownButton');
    let menuButton = document.getElementById('menuButton');
    let mobileMenu = document.getElementById('mobileMenu');

    if (dropdownButton && dropdownMenu){
        dropdownButton.addEventListener('click', function () {
            console.log('click');
            dropdownMenu.classList.toggle('hidden');
        });
    }

    if (menuButton && mobileMenu){
        menuButton.addEventListener('click', function (){
            console.log('click');
            mobileMenu.classList.toggle('hidden');
        });
    }
});
</script>
</html>