<?php

foreach( glob('classes/*.php') as $class ) {

    var_dump($class);
    require $class;

}

