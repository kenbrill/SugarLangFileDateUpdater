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
    preg_match('/^[a-z]{2}_[a-z]{2}.lang.php$/i', $fileName, $matches);
    if (!empty($matches)) {
        echo "touched {$pathName}<br>";
        touch($pathName);
    }
    preg_match('/^[a-z]{2}_[a-z]{2}.sugar_.+$/i', $fileName, $matches);
    if (!empty($matches)) {
        echo "touched {$pathName}<br>";
        touch($pathName);
    }
}
