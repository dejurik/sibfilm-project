{$subject = 'Сообщение с сайта' scope=root}
<html>
<body>
<p>С сайта {$config.company_name} {$smarty.now|date_format:"%d.%m.%Y %H:%M"} было отправлено сообщение.</p>
<p>Имя: {$mail.name}</p>
<p>Email: {$mail.email}</p>
<p>Телефон: {$mail.phone}</p>
<p>{$mail.message}</p>
</body>
</html>
