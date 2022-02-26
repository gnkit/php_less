<?php

trait Trait1
{

}

// trait Trait2
// {

// }

var_dump(trait_exists('Trait1')); // bool(true)
var_dump(trait_exists('Trait2')); // bool(false)


var_dump(get_declared_traits());

// array(1) {
//   [0]=>
//   string(6) "Trait1"
// }