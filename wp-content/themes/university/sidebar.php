<?php
global $wp;
$current_url = home_url(add_query_arg(array(),$wp->request)); 
?>
<div id="sidebar">
  <div class="region region-sidebar-first">
	<?php if ( !is_user_logged_in() ): ?>
	<div id="block-user-login" class="block block-user">
      <h2>Вход в аккаунт</h2>
      <div class="content">
	  <form name="user-login-form" id="user-login-form" action="http://wpvagrant.dev/wp-login.php" method="post">			
		<div class="form-item form-type-textfield form-item-name">
			<label for="edit-name">Имя пользователя <span class="form-required" title="Обязательно для заполнения.">*</span></label>
			<input type="text" name="log" id="edit-name" class="input form-text required" value="" size="15" maxlength="60">
		</div>
		<div class="form-item form-type-password form-item-pass">
			<label for="edit-pass">Пароль <span class="form-required" title="Обязательно для заполнения.">*</span></label>
			<input type="password" name="pwd" id="edit-pass" class="input form-text required" size="15" maxlength="60">
		</div>
		<div class="item-list">
          <ul>
            <li class="first"><a href="/user/register" title="Создать новую учетную запись.">Регистрация</a></li>
		    <li class="last"><a href="/user/password" title="Запросить новый пароль на e-mail.">Запросить новый пароль</a></li>
		  </ul>
        </div>			
		<div class="login-submit">
			<input type="submit" name="edit-submit" id="edit-submit" class="form-submit" value="Войти">
			<input type="hidden" name="redirect_to" value="<?php echo $current_url; ?>">
		</div>			
	  </form>
      </div>
    </div>	  
	<?php else: ?>
	<div id="block-menu-block-2" class="block block-menu-block">
	  <div class="content">
		<div class="menu-block-wrapper menu-block-2 menu-name-user-menu parent-mlid-0 menu-level-1">
		  <ul class="menu"><li class="first leaf menu-mlid-2"><a href="/user">Мой профиль</a></li>
			<li class="last leaf menu-mlid-15"><a href="<?php echo wp_logout_url($current_url); ?>">Выйти</a></li>
		  </ul>
		</div>
	  </div>
	</div>
	<?php endif; ?>
  </div>
</div>