<?php
require_once 'core/core.php';
if($_SESSION['user']['name'] == 'Гость'){
	header("HTTP/1.1 401 Unauthorized");
	echo '401 Unauthorized';
}else {
	?>
	<form action="action.php" method="post" enctype="multipart/form-data">
		<input type="file" name="userfile">
		<input type="submit" value="Отправить">
		<input type="submit" value="Редирект" name="redirect">
	</form>
	<?php
}
?>
