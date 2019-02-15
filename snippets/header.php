<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Secret Site</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
    <body class="container">
    	<h1>my lovely site</h1>

        <section class="col-6">

<?php

$messages = getSessionMessages();
if (!empty($messages)) {
?>
        <section class="messages">
            <ul class="list-unstyled">
<?php

foreach($messages as $message) {
?>
                <li class="alert alert-<?=$message['status']?>"><?=$message['text']?></li>
<?php
}

?>                
            </ul>
        </section>

<?php
}



?>        
