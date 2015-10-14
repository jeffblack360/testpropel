<?php

// setup auto-loading
require __DIR__.'/vendor/autoload.php';

// setup propel
require __DIR__.'/generated-conf/config.php';

use testpropel\Author;

$author = new Author();
$author->setFirstName('Jeff');
$author->setLastName('Black');
$author->save();
