<?php
class Training {

    public function getDirInfos($dir) {
        $files = scandir($dir);
        array_shift($files);
        array_shift($files);
        return $files;
    }

   
}