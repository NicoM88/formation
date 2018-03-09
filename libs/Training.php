<?php
class Training {

    public function getDirInfos($dir) {
        $files = scandir($dir);
        array_shift($files);
        array_shift($files);
        return $files;
    }

    public function getExercices($dir) {
        $files = scandir($dir);
        $result = [];
        foreach($files as $file) {
            if(is_dir($dir."/".$file) && $file !="." && $file != "..") {
                $result[] = $file;
            }
        }
        return $result;
    }
   
}