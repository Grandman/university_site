<?php if ( !is_user_logged_in() ): ?>
<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main">         
	<h1>Вход в аккаунт</h1>
	<h2 class="element-invisible">Главные вкладки</h2>
	<ul class="tabs primary">
		<li><a href="/user/register">Регистрация</a></li>
		<li class="active"><a href="/user" class="active">Войти<span class="element-invisible">(активная вкладка)</span></a></li>
		<li><a href="/user/password">Запросить новый пароль</a></li>
	</ul>            
    <div class="region region-content">
		<div id="block-system-main" class="block block-system">
			<div class="content">
				<form name="user-login-form" id="user-login-form" action="http://wpvagrant.dev/wp-login.php" method="post">	
				  <div>
					<div class="form-item form-type-textfield form-item-name">
					  <label for="edit-name">Имя пользователя <span class="form-required" title="Обязательно для заполнения.">*</span></label>
					  <input type="text" id="edit-name" name="log" value="" size="60" maxlength="60" class="form-text required">
					  <div class="description">Введите ваш логин.</div>
					</div>
					<div class="form-item form-type-password form-item-pass">
					  <label for="edit-pass">Пароль <span class="form-required" title="Обязательно для заполнения.">*</span></label>
					  <input type="password" id="edit-pass" name="pwd" size="60" maxlength="128" class="form-text required">
					  <div class="description">Введите ваш пароль.</div>
					</div>
					<input type="submit" name="edit-submit" id="edit-submit" class="form-submit" value="Войти">
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

