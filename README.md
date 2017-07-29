# PrettyPhoto image galary widget for Yii2 Framework

The extension uses jQuery PrettyPhoto and makes image galary from php array of structure defined.

[PrettyPhoto image galary PHP Array generator](http://yii2.kadastrcard.ru/prettyphoto).

![PrettyPhoto image galary](http://yii2.kadastrcard.ru/uploads/prettyphoto.jpg)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run:

```bash
composer require slavkovrn/yii2-prettyphoto
```

or add

```bash
"slavkovrn/yii2-prettyphoto": "*"
```

to the require section of your `composer.json` file.

Usage
-----

Set link to extension in your view:

```php
<?php

use slavkovrn\prettyphoto\PrettyPhotoWidget;

?>

<?= PrettyPhotoWidget::widget([
    'id'     =>'prettyPhoto',   // id of plugin should be unique at page
    'class'  =>'galary',        // class of plugin to define a style
    'width' => '50%',           // width of image visible in widget (omit - initial width)
    'height' => '100px',        // height of image visible in widget (omit - initial height)
    'images' => [               // images at popup window of prettyPhoto galary
                    1 => [
                            'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image1.jpg',
                            'title' => 'Image visible in widget',
                        ],
                    2 => [
                            'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image2.jpg',
                            'title' => 'image 1',
                        ],
                    3 => [
                            'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image3.jpg',
                            'title' => 'image 2',
                        ],
                    4 => [
                            'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image4.jpg',
                            'title' => 'image 3',
                        ],
                ]
]) ?>
```
<a href="mailto:slavko.chita@gmail.com">write comments to admin</a>
