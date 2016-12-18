<?php if ( !is_user_logged_in() ): ?>
<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main">
	<h1>Вход в аккаунт</h1>
    <h2 class="element-invisible">Главные вкладки</h2>
	<ul class="tabs primary">
		<li><a href="/user/register">Регистрация</a></li>
		<li><a href="/user">Войти</a></li>
		<li class="active"><a href="/user/password" class="active">Запросить новый пароль<span class="element-invisible">(активная вкладка)</span></a></li>
	</ul>            
    <div class="region region-content">
		<div id="block-system-main" class="block block-system">
			<div class="content">
				<form action="<?php echo esc_url( wp_lostpassword_url() ); ?>" method="post" id="user-pass" accept-charset="UTF-8">
				  <div>
				    <div class="form-item form-type-textfield form-item-name">
					  <label for="edit-name">Имя пользователя или адрес e-mail <span class="form-required" title="Обязательно для заполнения.">*</span></label>
					  <input type="text" id="user_login-name" name="user_login" value="" size="60" maxlength="254" class="form-text required">
					</div>
					<div class="form-actions form-wrapper" id="edit-actions"><input type="submit" id="edit-submit" name="op" value="Отправить письмо" class="form-submit"></div>
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
