<?php

/**
 * The default email message that will be sent to users as they are approved.
 *
 * @return string
 */
function nua_default_approve_user_message() {
	$message = __( 'Ваша заявка на регистрацию на сайте {sitename} была однобрена ', 'new-user-approve' ) . "\r\n\r\n";
	$message .= "{username} . \r\n\r\n";
    $message .= __( 'Для установки пароля пройдите по ссылке:', 'new-user-approve' ) . "\r\n\r\n";
    $message .= "{reset_password_url}";

	$message = apply_filters( 'new_user_approve_approve_user_message_default', $message );

	return $message;
}

/**
 * The default email message that will be sent to users as they are denied.
 *
 * @return string
 */
function nua_default_deny_user_message() {
	$message = __( 'You have been denied access to {sitename}.', 'new-user-approve' );

	$message = apply_filters( 'new_user_approve_deny_user_message_default', $message );

	return $message;
}

/**
 * The default message that will be shown to the user after registration has completed.
 *
 * @return string
 */
function nua_default_registration_complete_message() {
	$message = sprintf( __( 'Заявка была отправлена администратору.', 'new-user-approve' ) );
	$message .= ' ';
	$message .= sprintf( __( 'Скоро Вы получите письмо с дальнейшими инструкциями. Спасибо за Ваше терпение.', 'new-user-approve' ) );

	$message = apply_filters( 'new_user_approve_pending_message_default', $message );

	return $message;
}

/**
 * The default welcome message that is shown to all users on the login page.
 *
 * @return string
 */
function nua_default_welcome_message() {
	$welcome = sprintf( __( 'Добро пожаловать на сайт: {sitename}.', 'new-user-approve' ), get_option( 'blogname' ) );

	$welcome = apply_filters( 'new_user_approve_welcome_message_default', $welcome );

	return $welcome;
}

/**
 * The default notification message that is sent to site admin when requesting approval.
 *
 * @return string
 */
function nua_default_notification_message() {
	$message = __( '{username} ({user_email}) has requested a username at {sitename}', 'new-user-approve' ) . "\n\n";
	$message .= "{site_url}\n\n";
	$message .= __( 'To approve or deny this user access to {sitename} go to', 'new-user-approve' ) . "\n\n";
	$message .= "{admin_approve_url}\n\n";

	$message = apply_filters( 'new_user_approve_notification_message_default', $message );

	return $message;
}

/**
 * The default message that is shown to the user on the registration page before any action
 * has been taken.
 *
 * @return string
 */
function nua_default_registration_message() {
	$message = __( 'После того как Вы заполните форму, заявка будет направлена администратору. Затем Вы получите письмо с дальнейшими инструкциями.', 'new-user-approve' );

	$message = apply_filters( 'new_user_approve_registration_message_default', $message );

	return $message;
}
