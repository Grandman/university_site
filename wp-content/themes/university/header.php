<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class('html not-front not-logged-in one-sidebar sidebar-first page-node page-node- page-node-23 node-type-page'); ?>>

<div id="header">

    <div id="header-inside" height="117px">

        <div id="header-inside-left">

                        <div class="clearfix">
                        <span id="site-name" >
            <div height="117px">

				<div style="float: left; width: 80px;"><a href="/"><img style="margin-right:20px white-space: pre-line; word-wrap: break-word; display: inline;" width="80px" src="http://is.ulstu.ru/sites/default/files/logo_1_1.png" alt="Главная" /></a></div>
				<div style="float: right; width: 114px;"><a href="/"><img width="114px" src="http://is.ulstu.ru/themes/corporateclean/images/logoUlstu.png"></a></div>
				<div style="padding-top: 25px; padding-left: 260px"><a style="white-space: pre-line; word-wrap: break-word; display: inline; color: #acbbd4;" href="/" title="Главная">Кафедра "Информационные системы"</a></div>

			</div>
			</span>
                                    </div><!-- /site-name-wrapper -->

        </div>

        <div id="header-inside-right">

        </div>

    </div><!-- EOF: #header-inside -->

</div><!-- EOF: #header -->

<!-- Header Menu. -->
<div id="header-menu">
    <div id="header-menu-inside">
      <ul class="menu">
        <li class="first leaf"><a href="/node/414">Абитуриентам</a></li>
		<li class="leaf"><a href="/news" title="Новости сайта">Новости</a></li>
		<li class="expanded"><a href="/prep">Преподаватели</a>
          <ul class="menu">
            <li class="first leaf"><a href="/prep/jng">Ярушкина Н. Г.</a></li>
			<li class="leaf"><a href="/prep/atv">Афанасьева Т. В.</a></li>
			<li class="leaf"><a href="/prep/siv">Семушин И. В.</a></li>
			<li class="leaf"><a href="/prep/ssv">Скворцов С. В.</a></li>
			<li class="leaf"><a href="/prep/vvv">Воронина В. В.</a></li>
			<li class="leaf"><a href="/prep/eon">Евсеева О. Н.</a></li>
			<li class="leaf"><a href="/prep/ksv">Куркина С.В.</a></li>
			<li class="leaf"><a href="/prep/lob">Ларионова О. Б.</a></li>
			<li class="leaf"><a href="/prep/mpv">Мытарев П. В.</a></li>
			<li class="leaf"><a href="/prep/nam">Наместников А. М.</a></li>
			<li class="leaf"><a href="/prep/raa">Романов А. А.</a></li>
			<li class="leaf"><a href="/prep/sev">Суркова Е. В.</a></li>
			<li class="leaf"><a href="/prep/tvg">Тронин В. Г.</a></li>
			<li class="leaf"><a href="/prep/faa">Филиппов А. А.</a></li>
			<li class="leaf"><a href="/prep/chav">Чекина А. В.</a></li>
			<li class="leaf"><a href="/prep/shni">Шанченко Н. И.</a></li>
			<li class="leaf"><a href="/prep/shab">Шамшев Ан. Б.</a></li>
			<li class="leaf"><a href="/prep/vof">Власенко О. Ф.</a></li>
			<li class="leaf"><a href="/prep/ggu">Гуськов Г. Ю.</a></li>
			<li class="leaf"><a href="/prep/knv">Корунова Н. В.</a></li>
			<li class="leaf"><a href="/prep/kms">Кукушкина М. С.</a></li>
			<li class="leaf"><a href="/prep/mvs">Мошкин В. С.</a></li>
			<li class="leaf"><a href="/prep/tia">Тимина И. А.</a></li>
			<li class="leaf"><a href="/prep/een">Эгов Е. Н.</a></li>
			<li class="last leaf"><a href="/prep/ydv">Яшин Д. В.</a></li>
	      </ul>
        </li>
		<li class="expanded"><a href="/napr">Направления</a>
          <ul class="menu"><li class="first expanded"><a href="/bak">Бакалавриат</a>
            <ul class="menu">
              <li class="first expanded"><a href="/ISEbd">Прикладная информатика</a>
			    <ul class="menu">
			      <li class="first leaf"><a href="/ISEbd-1">Курс 1</a></li>
				  <li class="leaf"><a href="/ISEbd-2">Курс 2</a></li>
				  <li class="leaf"><a href="/ISEbd-3">Курс 3</a></li>
				  <li class="last leaf"><a href="/ISEbd-4">Курс 4</a></li>
				</ul>
			  </li>
			 <li class="last expanded"><a href="/PIbd">Программная инженерия</a>
               <ul class="menu">
                 <li class="first leaf"><a href="/PIbd-1">Курс 1</a></li>
			     <li class="leaf"><a href="/PIbd-2">Курс 2</a></li>
			     <li class="leaf"><a href="/PIbd-3">Курс 3</a></li>
			     <li class="last leaf"><a href="/PIbd-4">Курс 4</a></li>
			   </ul>
             </li>
		   </ul>
         </li>
		 <li class="last collapsed"><a href="/mag">Магистратура</a></li>
       </ul>
     </li>
	 <li class="expanded"><a href="/science">Наука</a>
       <ul class="menu">
         <li class="first collapsed"><a href="/node/739">ПИС</a></li>
	     <li class="leaf"><a href="/node/908">СНТК</a></li>
		 <li class="leaf"><a href="/science/nir" title="">НИР</a></li>
		 <li class="last leaf"><a href="/science/nirs" title="">НИРС</a></li>
	   </ul>
     </li>
	 <li class="last expanded"><a href="/rasp">Расписание</a>
       <ul class="menu">
         <li class="first leaf"><a href="/rasp/group">Расписание групп</a></li>
	  	 <li class="leaf"><a href="/rasp/prep">Расписание преподавателей</a></li>
	  	 <li class="last leaf"><a href="/rasp/aud">Расписание аудиторий</a></li>
	   </ul>
     </li>
   </ul>
        <!-- <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'menu',
                'container'      => 'ul',
             ) );
        ?>
        -->
    </div>
</div>
<div id="content">
  <div id="content-inside" class="inside">

