<?php

$category = [
    [
        'title' => 'Главная',
        'link' => '/',
    ],
    [
        'title' => 'Услуги',
        'subCategory' => [
            [
                'title' => 'Фронт',
                'link' => '#',
            ],
            [
                'title' => 'Бэк',
                'link' => '#',
            ],
            [
                'title' => 'СЕО',
                'link' => '#',
            ],
        ]
    ],
    [
        'title' => 'О нас',
        'subCategory' => [
            ['title' => 'Test'],
        ],
        'link' => '#',
    ],
    [
        'title' => 'Контакты',
        'link' => '#',
    ],
];
$categoryHalf = count($category) / 2;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<!--Foreach-->
<header>
    <div class="container">
        <ul id="menu" class="menu nav justify-content-center">
            <?php foreach($category as $key => $value) { ?>

                <?php if($key == $categoryHalf) : ?>
                    <li class="logo">
                        <a class="logo__link" href="/">
                            <img class="logo__img" src="img/logo.png" alt="Logo">
                        </a>
                    </li>
                <?php endif; ?>



                <?php if ( !empty($value['subCategory']) && isset($value['subCategory'])): ?>
                    <li class="menu__list nav-item"><a class="menu__link nav-link active" aria-current="page" href="<?= "{$value['link']}" ?>"><?= "{$value['title']}" ?> &#9662;</a>
                        <ul id="sub-menu" class="sub-menu">
                            <?php foreach($value['subCategory'] as $subValue) { ?>
                                <li class="nav-item sub-menu__list"><a class="sub-menu__link nav-link active" aria-current="page" href="<?= "{$subValue['link']}" ?>"><?= "{$subValue['title']}" ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="menu__list nav-item"><a class="menu__link nav-link active" aria-current="page" href="<?= "{$value['link']}" ?>"><?= "{$value['title']}" ?></a></li>
                <?php endif; ?>


            <?php } ?>
        </ul>
    </div>
</header>

<!--For-->

<header style="margin-top: 250px;">
    <div class="container">
        <ul id="menu" class="menu nav justify-content-center">
            <?php for($i=0; $i <= count($category); $i++) { ?>

                <?php if($i == $categoryHalf) : ?>
                    <li class="logo">
                        <a class="logo__link" href="/">
                            <img class="logo__img" src="img/logo.png" alt="Logo">
                        </a>
                    </li>
                <?php endif; ?>



                <?php if ( !empty($category[$i]['subCategory']) && isset($category[$i]['subCategory'])): ?>
                    <li class="menu__list nav-item"><a class="menu__link nav-link active" aria-current="page" href="<?= "{$category[$i]['link']}" ?>"><?= "{$category[$i]['title']}" ?> &#9662;</a>
                        <ul id="sub-menu" class="sub-menu">
                            <?php for($ii=0; $ii < count($category[$i]['subCategory']); $ii++) { ?>
                            <li class="nav-item sub-menu__list"><a class="sub-menu__link nav-link active" aria-current="page" href="<?= "{$category[$i]['subCategory'][$ii]['link']}" ?>"><?= "{$category[$i]['subCategory'][$ii]['title']}" ?></a></li>
                                <?php } ?>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="menu__list nav-item"><a class="menu__link nav-link active" aria-current="page" href="<?= "{$category[$i]['link']}" ?>"><?= "{$category[$i]['title']}" ?></a></li>
                <?php endif; ?>


            <?php } ?>
        </ul>
    </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>