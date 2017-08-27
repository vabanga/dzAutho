<h3>Список тестов</h3>
<?php
require_once 'core/core.php';

define(PATH_UPLOAD,'tests');
$files = array();
$k = 1;
foreach (glob(PATH_UPLOAD."/*.json") as $filename) {
	$files[$k] = $filename;
	$exp = explode('.',$filename);
	$ext = explode('/',$exp[0]);
	?>
	<ul>
		<li><a href="/test.php?&act=test&fileid=<?=$k?>"><?= $ext[1] ?></a></li>
	</ul>
	<?php

	?>
	<form action="" method="POST">
		<input type="submit" name="<?=$k?>" value="Удалить тест">
	</form>
	<?php
	if($_POST[$k]){
		unlink(__DIR__.'/'.$files[$k]);
		header("Location: list.php");
		die;
	}
	$k++;
}
if($_SESSION['user']['name'] == 'Гость'){
}else {
	?>
	<a href="downloadTest.php">Добавить тест</a><?php
}
?>
