<?php
$maxLength=0;
foreach($_GET as $arg) {
    if(mb_strlen($arg)>$maxLength){
        $word = $arg;
        $maxLength = mb_strlen($arg);
    }
}
echo "The largest word: $word"." ";
foreach($_GET as $arg) {
    if((mb_strlen($arg)==$maxLength) && ($arg!=$word)){
        echo "$arg"." ";
    }
}

