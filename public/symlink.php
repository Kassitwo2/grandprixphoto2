<?php 
/*  symlink('/home/grandprixphoto/public html/gpp laravel/storage/app/public', '/home/grandprixphoto/public_html/backoffice/storage');
  */

symlink(
    '/var/www/vhosts/grandprixphoto.ma/public html/gpp laravel/storage/app/public', // Source directory
    '/var/www/vhosts/grandprixphoto.ma/public_html/backoffice/storage' // Target directory
); 
/* $targetFolder = $_SERVER['DOCUMENT_ROOT'].'/gpp_laravel/storage/app/public';
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/backoffice/storage';
symlink($targetFolder,$linkFolder);
echo 'Symlink process successfully completed'; */