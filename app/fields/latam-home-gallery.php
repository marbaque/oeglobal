<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;


$gallery = new FieldsBuilder('latam-home-gallery');
$gallery
    ->addRepeater('items', ['min'=> 1, 'layout' => 'block'])
        ->addText('title')
        ->addImage('image', ['preview_size' => 'square'])
        ->addUrl('url')
        ->addText('attribution_name')
        ->addUrl('attribution_url')
        ->endRepeater()
    ->setLocation('block', '==', 'acf/latam-home-gallery');

return $gallery;
