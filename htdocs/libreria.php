<?php
function getDir(){
    print_r(scandir(getcwd()));
}

function fileEx($nome){
    return file_exists($nome);
}
?>