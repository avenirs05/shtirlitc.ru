<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.2.1.352
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Отправка Форма Home',
	'heading' => 'Отправка новой формы',
	'success_redirect' => 'thank_you.html',
	'resources' => array(
		'checkbox_checked' => 'Отмечено',
		'checkbox_unchecked' => 'Флажок не установлен',
		'submitted_from' => 'Формы, отправленные с веб-сайта: %s',
		'submitted_by' => 'IP-адрес посетителя: %s',
		'too_many_submissions' => 'Недопустимо высокое количество отправок с этого IP-адреса за последнее время',
		'failed_to_send_email' => 'Не удалось отправить сообщение эл. почты',
		'invalid_reCAPTCHA_private_key' => 'Недействительный закрытый ключ reCAPTCHA.',
		'invalid_field_type' => 'Неизвестный тип поля \'%s\'.',
		'invalid_form_config' => 'Недопустимая конфигурация поля \"%s\".',
		'unknown_method' => 'Неизвестный метод запроса сервера'
	),
	'email' => array(
		'from' => 'info@shtirlitc.ru',
		'to' => 'info@shtirlitc.ru'
	),
	'fields' => array(
		'custom_U476' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Имя',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U467' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Сообщение',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U471' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Телефон *',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Телефон *\' не может быть пустым.'
			)
		)
	)
);

process_form($form);
?>
