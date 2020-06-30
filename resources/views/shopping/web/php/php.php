<?PHP

echo $fileget =file_put_contents("text.html"); # Создаю файл в корневом каталоге под назывнием filename.html
// <!DOCTYPE html>
// <html>
// <head>
// 	<title>file_put_contents([0],[1])</title>
// </head>
// <body>
// <h2 style='color:#e46363' >#e46363</h2>
// </body>
// </html>");

echo file_get_contents("text.html");
if (file_exists("filename.html") == 1 ){#Проверяю файл на проверку

echo var_dump(filesize("filename.html") / 1024)."<br />";##Определяю размер файла Kb
echo var_dump(filesize("../img/product/6.jpg"));
//rename("file.html", "filename.html");
//copy("filename.html", "../filename.html")#Определяю размер файла в байтах
}
else{
echo file_get_contents("filename.html");
}
 $files = array_diff(scandir('./'), ['..','.']);#Scanning url('../')
 //var_dump($files);
 foreach ($files as $file) {
 	var_dump(is_file('./'.$file).' file '."<br>");
 	var_dump(is_dir('./'.$file).' Folder '."<br>");
 }
//var_dump(file("filename.html", FILE_IGNORE_NEW_LINES));# Выводить файл игнорируя Enter
//var_dump( explode("\r", $fileget));
//$arr= [1,2,3,4,5,6,7]; #Массивы
//file_put_contents("filename.txt", implode(PHP_EOL, $arr)); # cоздаю файл .txt и вложу разбивая enter Массивы
//rmdir("dir"); # Удаляет пустую папку
// removeDir('dir');# Удаляет папку и подпапки с файлами
// function removeDir($dir){
// array_diff(scandir('./'),['..','.']);
// foreach ($filesDir as $fileDir ) {
// 	$path = $dir. '/' .$fileDir;
// 	if (is_dir($path)) {
// 		removeDir($path);
// 	}
// 	else{
// 		unlink($path);
// 	}
// }
// rmdir($dir);
// }
/*      unlink("dir/_8_2.jpg");
      var_dump(glob("dir/*"));*/
// getDir('dir');# Удаляет папку и подпапки с файлами
// function getDir($dir){
// $Getfiles = array_diff(scandir('./'),['..','.']);
// foreach ($Getfiles as $getfile ) {
// 	$path = $dir. '/' .$getfile;
// 	if (is_dir($path)) {
// 		get_files($path);
// 	}
// 	else{
// 		var_dump($path);
// 	}
// }

// }
?>