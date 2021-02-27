<?php


function myMenu(...$category)
{
    $categoryHalf = count($category) / 2;

    foreach ($category as $key => $value)
    {

        if($key == $categoryHalf) {

            echo "<li class='logo' >";
                        echo"<a class='logo__link' href = '/' >";
                            echo"<img class='logo__img' src = 'img/logo.png' alt = 'Logo' >";
                        echo "</a >";
                    echo "</li >";
        }

        if(!empty($value['children']) && isset($value['children'])) {
            echo "<li class='menu__list nav-item'><a class='menu__link nav-link active' aria-current='page' href='/'>{$value['title']}&#9662;</a>";
                echo "<ul id='sub-menu' class='sub-menu'>";
                    foreach ($value['children'] as $child) {
                        echo "<li class='nav-item sub-menu__list'><a class='sub-menu__link nav-link active' aria-current='page'   href='/'>{$child['title']}</a></li>";
                    }
                echo "</ul>";
            echo "</li>";
        }else {
            echo "<li class='menu__list nav-item'><a class='menu__link nav-link active' aria-current='page' href='/'>{$value['title']}</a></li>";
        }


    };

}

myMenu(['title' => 'Home'],['title' => 'About', 'children' => [[ 'title'=>'Document'], ['title'=>'Info']]], ['title' => 'Services', 'children'=> [['title'=>'Test']]], ['title' => 'Contacts']);
