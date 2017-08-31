<?php
	$destino= $_post['email'];
	$asunto="comentario";

	$comentario="
			Email:$_post[email]
			Comentario:$_post[com]
	";

	$headers='from:'.$_post['email']."\r\n".
			'Reply-to:'.$_post['email']."\r\n".
			'X-Mailer:php/'.phpversion();
		mail($destino,$asunto,$comentario,$headers);
?>