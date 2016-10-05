<div id="wrapper" class="container">
	<div id="header" class="row">
		<h2 class="col-md-8">
			<a href="<? $_SERVER['SERVER_NAME'] ?>/">Доска объявлений</a>
		</h2>

		<div class="auth col-md-4">
			<? if(empty($user) and !is_array($user)): ?>
				<a href="?action=login">Вход</a> | <a href="?action=registration">Регистрация</a>
			<? else: ?>
				Добро пожаловать, <?= $user['name'] ?> | <a href="?action=login&logout=1">Выход</a><br/>
				Ваш последний вход: <?= date('d.m.Y H:i:s', $user['last_login']) ?>
			<? endif; ?>
		</div>
	</div>

	<div id="main-menu" class="navbar navbar-default">
		<ul class="nav navbar-nav navbar-right">
			<? foreach($main_menu as $item): ?>
				<li class="<?=$item['classes'];?>"><a href="<?= $item['link']; ?>"><?= $item['name'] ?></a></li>
			<? endforeach; ?>
		</ul>
	</div>

	<div class="row">
		<? if($_GET['action'] !== 'add_message'){ include THEME . 'sidebar.tpl.php';}?>
		<div id="content" class="col-md-9 <?= $action ?>">
			<div class="page-header">
				<h2 class="title_page"><?= $title ?></h2>
			</div>
			<? if($_SESSION['msg']): ?>
				<?= $_SESSION['msg']['message']; ?>
			<? endif; ?>
			<?= $content ?>
		</div>
	</div>

	<div id="footer">
		<p class="footer_text">Доска объявлений</p>
	</div>
</div>