<?php
if (isset($_GET['v']) &&
    ($v = $_GET['v']) &&
    ($f = 'NSDN-'.$v.'.apk') &&
    file_exists($f)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($f));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($f));
    ob_clean();
    flush();
    readfile($f);
}
else {
    die('Hello World!');
}
