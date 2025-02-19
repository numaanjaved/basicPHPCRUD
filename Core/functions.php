<?php


function dd($value)
{
    echo "<pre style = 'color:#000; background-color:#fff; font-size:20px;' >";
    var_dump($value);
    echo "</pre>";
};
function basePath($path)
{
    return $path;
};

function views($path, $data = [])
{
    extract($data);
    return require_once("Assets/views/{$path}");
}
function removeOldImage($newPath, $oldPath)
{
    if ($newPath !== '' && $newPath !== $oldPath) {
        unlink($oldPath);
    }
}
function loadFile($fileName, $filePath)
{
    if (file_exists($filePath)) {
        require_once($filePath);
    } else {
        echo $fileName . ' File Not Found';
    }
}
