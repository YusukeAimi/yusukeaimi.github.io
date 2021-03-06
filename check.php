<?php
session_start();

if (!isset($_SESSION['contact'])) {
	header('Location: contact.php');
	exit();
}

if (!empty($_POST)) {
	/*
	require 'vendor/autoload.php';

	$email = new SendGridMailMail(); 
	$email->setFrom("test@example.com", "Example User");
	$email->setSubject("Sending with SendGrid is Fun");
	$email->addTo("ekerr310@icloud.com", "Example User");
	$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
	$email->addContent("text/html", "<strong>and easy to do anywhere, even with PHP</strong>");
	$sendgrid = new SendGrid(getenv('SENDGRID_API_KEY'));
	try {
    	$response = $sendgrid->send($email);
    	print $response->statusCode() . "\n";
    	print_r($response->headers());
    	print $response->body() . "\n";
	} catch (Exception $e) {
    	echo 'Caught exception: '. $e->getMessage() ."\n";
	}
	header('Location: thanks.php');
	exit();
	*/
	/*require __DIR__ . '/../vendor/autoload.php'; // path to vendor/

	$sendgrid = new SendGrid(getenv('SENDGRID_USERNAME'), getenv('SENDGRID_PASSWORD'));
	$email = new SendGrid\Email();
	$email->addTo('ekerr310@icloud.com')->
    		setFrom('from@example.com')->
    		setSubject('件名')->
    		setText('こんにちは！');

	$sendgrid->send($email);
	*/
	header('Location: thanks.php');
	exit();
	
}

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>お問い合わせ</title>
        <!-- css -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
	<body>
        <header>
            <!--ヘッダーメニュー-->
            <nav>
                <ul class="header-navigation">
                    <li class="header-navigation">
                        <a href="index.html" style="text-decoration: none;"><span>Top</span></a>
                    </li>
                    <li class="header-navigation">
                        <a href="index.html#about" style="text-decoration: none;"><span>About</span></a>
                    </li>
                    <li class="header-navigation">
                        <a href="index.html#works" style="text-decoration: none;"><span>Works</span></a>
                    </li>
                    <li class="header-navigation">
                        <a href="index.html#contact" style="text-decoration: none;"><span>Contact</span></a>
                    </li>
                </ul>
            </nav>
		</header>
		<div class="contact">
			<h2 class="contact-title">お問い合わせ</h2>
			<p style="color: black;">記入した内容を確認して、「送信する」ボタンをクリックしてください</p>
			<form class="mailForm" method="post" action="">
				<input type="hidden" name="action" value="submit" />
				<table class="table">
					<tbody style="color: black;">
						<tr>
							<th>・お名前</th>
							<td>
								<?php print(htmlspecialchars($_SESSION['contact']['name'], ENT_QUOTES)); ?>
        					</td>
						</tr>
						<tr>
							<th>・メールアドレス</th>
							<td>
								<?php print(htmlspecialchars($_SESSION['contact']['email'], ENT_QUOTES)); ?>
        					</td>
						</tr>
                        <tr>
							<th>・件名</th>
							<td>
								<?php print(htmlspecialchars($_SESSION['contact']['title'], ENT_QUOTES)); ?>
        					</td>
						</tr>
						<tr>
							<th>・お問い合わせ内容</th>
							<td>
								<?php print(htmlspecialchars($_SESSION['contact']['content'], ENT_QUOTES)); ?>
        					</td>
						</tr>
					</tbody>
				</table>
			    <div class="button">
					<a href="contact.php?action=rewrite">&laquo;&nbsp;書き直す</a> | <input type="submit" value="送信する" id="sent" />
				</div>
		    </form>
		</div>
    </body>

	<div id="page_top">
      <a href="#"><span style="color: #000000"><span style="font-size: 200%"><i class="fa fa-arrow-circle-up"></i></span></span></a>
    </div>
    <!-- 
    jQuery、Popper.js、Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    -->
    <!--js-->
   <script src="script.js"></script>
  </body>
</html>
