<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?php
//setlocale(LC_ALL, 'ja_JP.EUC-JP'); 

echo "このお客様のご登録はございません。";
$file = fopen("Mage_Adminhtml.csv","r");

while(! feof($file))
  {
  print_r(fgetcsv($file));
  }

fclose($file);
?> 

