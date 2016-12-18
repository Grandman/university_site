<?php if ( !is_user_logged_in() ): ?>
<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main">
	<h1>Вход в аккаунт</h1>
	<h2 class="element-invisible">Главные вкладки</h2>
	<ul class="tabs primary">
		<li class="active"><a href="/user/register" class="active">Регистрация<span class="element-invisible">(активная вкладка)</span></a></li>
		<li><a href="/user">Войти</a></li>
		<li><a href="/user/password">Запросить новый пароль</a></li>
	</ul>            
    <div class="region region-content">
		<div id="block-system-main" class="block block-system">
			<div class="content">
				<form action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" method="post">
				  <div>
					<div class="form-item form-type-textfield form-item-name">
				      <label for="edit-name">Имя пользователя <span class="form-required" title="Обязательно для заполнения.">*</span></label>
					  <input class="username form-text required" type="text" id="user_login" name="user_login" value="" size="60" maxlength="60">
					  <div class="description">При регистрации в поле логин вводится фамилия, далее пробел, первая буква имени, первая буква отчества, точка, пробел, направление, пробел, год поступления. Пример: студент - Петров Петр Петрович, логин - Петров П.П. ИСЭбд 2013.</div>
					</div>
					<div class="form-item form-type-textfield form-item-mail">
					  <label for="edit-mail">Адрес электронной почты <span class="form-required" title="Обязательно для заполнения.">*</span></label>
					  <input type="text" id="user_email" name="user_email" value="" size="60" maxlength="254" class="form-text required">
					  <div class="description">На указанный адрес будут отправляться письма с сайта. Почтовый адрес не будет доступен другим пользователям и используется для восстановления пароля, определённых вами оповещений и связи через контактную форму.</div>
					</div>
					<input type="hidden" name="timezone" value="Europe/Moscow">
					<input type="hidden" name="form_build_id" value="form-CHmWE9nki9vCaUmc4EfB3JN5ESAf6YabS0MYMbDmAr4">
					<input type="hidden" name="form_id" value="user_register_form">
					<div class="form-actions form-wrapper" id="edit-actions">
					  <?php do_action('register_form'); ?>
					  <input type="submit" id="edit-submit" name="op" value="Регистрация" class="form-submit">
					</div>
				  </div>
				</form>
			</div>
		</div>  
	</div>
</div>

<?php 
get_sidebar( 'content-bottom' );
get_footer(); 
else: 
wp_redirect(home_url('/wp-admin/profile.php'));
endif;
?>