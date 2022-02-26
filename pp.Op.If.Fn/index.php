<?php

interface iTest1{

}

var_dump(interface_exists('iTest1')); //bool(true)
var_dump(interface_exists('iTest2')); // bool(false)


var_dump(get_declared_interfaces());

// array(19) {
//   [0]=>
//   string(11) "Traversable"
//   [1]=>
//   string(17) "IteratorAggregate"
//   [2]=>
//   string(8) "Iterator"
//   [3]=>
//   string(11) "ArrayAccess"
//   [4]=>
//   string(12) "Serializable"
//   [5]=>
//   string(9) "Countable"
//   [6]=>
//   string(9) "Throwable"
//   [7]=>
//   string(17) "DateTimeInterface"
//   [8]=>
//   string(16) "JsonSerializable"
//   [9]=>
//   string(17) "RecursiveIterator"
//   [10]=>
//   string(13) "OuterIterator"
//   [11]=>
//   string(16) "SeekableIterator"
//   [12]=>
//   string(11) "SplObserver"
//   [13]=>
//   string(10) "SplSubject"
//   [14]=>
//   string(23) "SessionHandlerInterface"
//   [15]=>
//   string(18) "SessionIdInterface"
//   [16]=>
//   string(38) "SessionUpdateTimestampHandlerInterface"
//   [17]=>
//   string(9) "Reflector"
//   [18]=>
//   string(6) "iTest1"
// }