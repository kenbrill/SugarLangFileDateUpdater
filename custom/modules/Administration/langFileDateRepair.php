<?php
//Sugar Language File Date Updater
$path = 'custom/';
$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));

foreach ($rii as $file) {
    if ($file->isDir()) {
        continue;
    }
    $fileName = $file->getFilename();
    $pathName = $file->getPathname();
    if ($fileName === 'en_us.lang.php') {
        echo "touched {$pathName}<br>";
        touch($pathName);
    }
    if (substr($fileName, 0, 8) === 'en_us.sugar_') {
        echo "touched {$pathName}<br>";
        touch($pathName);
    }
}
