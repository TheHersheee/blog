<?php

$posts = [
    'variable',
    'curl',
    'telnet',
    'git',
];

require('./header.php');
foreach($posts as $post){
    require("./posts/{$post}.php");
}
require('./footer.php');
