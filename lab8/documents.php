<?php
  include 'header.txt';
  include 'menu.txt';
?>
<div class="content">
  <form action="documents.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" required> <br>
        <input type="text" name="filename" placeholder="Введите имя файла" required> <br>
        <input type="submit" name="doupload" value="Загрузить новый документ">
    </form>
</div>


<?php
// из формы получаем имя временного файла $file
// также вместе с ним передаются
//$file_name исходное имя файла, которое он имел до своей отправки на сервер
//$file_type  тип загружаемого файла, если браузер смог его определить
//$file_size  размер файла в байтах
//Все эти переменные можно увидеть, если снять комментарии со следующих строк
//echo " переменная file= $file <br>\n";
//echo "переменная file_name= $file_name <br>\n";
//echo "переменная file_type= $file_type <br>\n";
//echo "переменная file_size= $file_size <br>\n";
$docsdir="docs";  // каталог для хранения изображений
@mkdir($docsdir,0700); // Создаем, если его еще нет
// Атрибут 0700 указывает права доступа. В данном случае чтение, запись, исполнение. 
// проверяем, принят ли файл
    
if (!file_exists($docsdir . "/")) {
    mkdir($docsdir, 0700);
}

$filename = NULL;

if (isset($_POST["filename"])) {
    $filename = $_POST["filename"];


if ($_FILES && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {

    $name = $docsdir . "/" . $_FILES["file"]["name"];
    
    move_uploaded_file($_FILES["file"]["tmp_name"], $name);
     }
     $tmp = $filename . "|" . $name . "\n";
     $settings_file = fopen("doc_names.txt", "a") or die("can not create file");
     fwrite($settings_file, $tmp);
     fclose($settings_file);
}

$read_file = fopen("doc_names.txt", "r");
$result = array();
while (!feof($read_file)) {
    $res = fgets($read_file);
    if (strlen($res) > 1) {
        $str = explode("|", $res);
        $t = trim($str[1]);
        $result[$t] = $str[0];
    }
}
fclose($read_file);
// считываем в массив фотоальбом
$d=opendir($docsdir);  // открываем каталог (функция opendir возвращает идентификатор //каталога)
$docs=array(); // сначала альбом пуст
// перебираем все файлы
while (($e=readdir($d)) !==false) {
// readdir возвращает вместе с именами подкаталогов и файлов еще два символа .(ссылка на //текущий каталог)
// и .. (ссылка на родительский каталог)
// проверяем это изображение gif, jpg, png,используя регулярные выражения
// ereg ищет парные значения $e в регулярном выражении, указанном в //"^(.*)\\.(gif|jpg|png)$".
// Разделителем между ними служит символ . (\\.)
// первая скобка означает регулярное выражение "любой символ, встречающийся 0 и более //раз" в начале строки "^"
// вторая скобка (gif|jpg|png) - сочетание gif или jpg или png с конца строки "$"
if (!preg_match("/^(.*)\\.(doc|pdf|xls)$/", $e, $p)) continue;
//если нет, переходим к следующему файлу
//иначе обрабатываем этот
$path="$docsdir/$e";   // адрес
$sz=filesize($path);  // размер
$tm=filemtime ($path); //время добавления
$doc_name = array_key_exists($path, $result) ? $result[$path] : "";
// вставляем изображение в массив $photos
$docs[$tm]=array(
'time'=>filemtime ($path),  //время добавления
'name'=>$e, // имя файла
'url'=> $path, // url файла
'doc_name' => $doc_name
);
}
//Ключ массива $photos - время в секундах, когда была добавлена
// та или иная фотография. Сортируем массив: наиболее "свежие"
// фотографии располагаем ближе к его началу, используя функцию krsort. 
// При этом массив сортируется по ключу, но в обратном порядке
krsort($docs);
// данные для вывода готовы. Далеее оформляем страницу.
?>

<div class="container-fluid">
    <h1 class="text-center">Документы</h1>
    <div class="row">
        <?php foreach ($docs as $n => $doc){  ?>
          <a <?php echo "href=\"{$doc['url']}\"" ?>>
            <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <?php echo $doc['doc_name'] ?>
                        </div>
                        <?php $qq=date("d.m.Y H:i:s",$doc['time']); echo $qq;?>
                    </div>
                </div>
            </div><?php } ?></a>
    </div>
</div>