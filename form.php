<? 
// Подключаем файл конфигурации
include_once ('config.php');

// Присваеваем переменные 
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$phone = $_POST['phone'];

function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}

function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];

	$name = clean($name);
	$phone = clean($phone);
	$email = clean($email);
	$comment = clean($comment);

	$errors = [];
		
	$email_validate = filter_var($email, FILTER_VALIDATE_EMAIL); 
	if ( ! $email_validate ) {
		$errors[] = [ 'field' => 'email', 'error' => 'Введите E-mail' ];
	}
	if ( ! check_length($name, 2, 25) ) {
		$errors[] = [ 'field' => 'name', 'error' => 'Введите имя' ];
	}
	if ( ! check_length($phone, 2, 20) ) {
		$errors[] = [ 'field' => 'phone', 'error' => 'Введите телефон' ];
	}
	if ( ! check_length($comment, 2, 1000) ) {
		$errors[] = [ 'field' => 'comment', 'error' => 'Введите комментарий' ];
	}

	if ( $errors ) {
		echo json_encode( [ 'error' => true, 'errors' => $errors ], JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT );
		die();
	} else echo json_encode( [ 'success' => 'Спасибо, мы вам перезвоним!' ], JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT );

	// Выводим переменные
	// Отправка на почту
	mail("$mail_recipient", "$name", "Имя: $name Телефон: $phone email: $email коментарий: $comment", "From: negite@yandex.ru");

	// Блок 2: Cоздание подключения к базе данных
	$link = mysqli_connect($db_host, $db_user, $db_password, $db_base) or die('Ошибка' . mysqli_error($link));

	// Блок 3: Записываем в БД
	$query_insert = 'INSERT INTO messages_form (name, email, comment, phone) VALUES ("' . addslashes($name) . '", "' . addslashes($email) . '", "' . addslashes($comment) . '", "' . addslashes($phone) . '")';
	mysqli_query($link, $query_insert) or die('Ошибка' . mysqli_error($link));

	// Блок 5: Закрыть подключения к базе данных
	mysqli_close($link);

} 


?>