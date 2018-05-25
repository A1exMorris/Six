<?php
return array(
    'news/([0-9]+)'=>'news/view/$1', //actionView NewsController
    'news/([a-z]+)'=>'news/category/$1', //actionCategory NewsController
    'news'=>'news/index', //actionIndex NewsController



    'products/([a-z]+)/([0-9]+)'=>'product/view/$1/$2',
    'products'=>'product/list', //actionList ProductController
);