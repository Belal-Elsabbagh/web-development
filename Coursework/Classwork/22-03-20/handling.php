<?php
if(!$_FILES) { die("no files detected"); }

echo "File name: ".$_FILES['f1']['name']."<br>";
echo "File type: ".$_FILES['f1']['type']."<br>";
echo "File size: ".$_FILES['f1']['size']."<br>";
echo "File temporary location: ".$_FILES['f1']['tmp_name']."<br>";