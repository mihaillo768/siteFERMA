<?php
error_reporting(-1);
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/func.php';
$objects = get_objects();
$categorys = get_categorys();
debug($objects);
$page = $_GET['page'];
$count = 9;
$page_count = floor(count($objects)/ $count);
?>
<!DOCTYPE html>
<html>
<head>	
    <meta charset="utf-8" />		
    <meta name="keywords" content="" />	
    <meta name="description" content="" />	
	<meta content="width=960" name="viewport">
	<meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/png" href="/favicon.png">
	<title>Продукт</title>
	
	<link rel="stylesheet" href="css/reset.css"/>   
	<link rel="stylesheet" href="css/fonts.css" /> 
	<link rel="stylesheet" href="css/jquery.bxslider.css" /> 
	<link rel="stylesheet" href="css/style.css"/>  
	
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/jquery.bxslider.js"></script>
	<script src="js/main.js"></script>
</head>
<body>

<section id="wrapper">
	<div class="envelope">
		<header class="header">
			<div class="headerNav">
				<ul class="center">
					<li>
						<a href="">О компании</a>
					</li>
					<li>
						<a href="">Вахтовые поселки</a>
					</li>
					<li>
						<a href="">Продукция</a>
						<div class="headerSubNav">
							<ul>
								<li>
									<a href="">
										<p>
											промышленое и строительное 
											<br/>
											направление
										</p>
									</a>
									<div class="headerSubMenu">
										<ul>
											<li>
												<a href="">Склад</a>
											</li>
											<li>
												<a href="">Столовые</a>
											</li>
											<li>
												<a href="">Бытовка</a>
											</li>
											<li>
												<a href="">Котельная</a>
											</li>
											<li>
												<a href="">Производственный цех</a>
											</li>
											<li>
												<a href="">Сантехнический блок</a>
											</li>
											<li>
												<a href="">Прорабка</a>
											</li>
											<li>
												<a href="">Водоочистка</a>
											</li>
											<li>
												<a href="">Бокс для техниики</a>
											</li>
											<li>
												<a href="">Прачечная</a>
											</li>
											<li>
												<a href="">Мобильный офис</a>
											</li>
											<li>
												<a href="">Блок-модуль</a>
											</li>
											<li>
												<a href="">Общежитие</a>
											</li>
											<li>
												<a href="">КПП</a>
											</li>
											<li>
												<a href="">Пункт обогрева</a>
											</li>
											<li>
												<a href="">Холодильные камеры</a>
											</li>
											<li>
												<a href="">Административно-бытовой комплекс</a>
											</li>
											<li>
												<a href="">Сушильная</a>
											</li>
											<li>
												<a href="">Офисное здание</a>
											</li>
											<li>
												<a href="">Аренда бытовок</a>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<a href="">
										<p>
											торговое 
											<br/>
											направление
										</p>
									</a>
									<div class="headerSubMenu">
										<ul>
											<li>
												<a href="">Торговый павильон </a>
											</li>
											<li>
												<a href="">Торговые комплексы под ключ</a>
											</li>
											<li>
												<a href="">Магазин</a>
											</li>
											<li>
												<a href="">Мини-маркет</a>
											</li>
											<li>
												<a href="">Торговый комплекс</a>
											</li>
											<li>
												<a href="">Супермаркет </a>
											</li>
											<li>
												<a href="">Мини-рынок</a>
											</li>
											<li>
												<a href="">Холодильные камеры</a>
											</li>
											<li>
												<a href="">Торговые ряды</a>
											</li>
										</ul>
									</div>
								</li>
								<li>
									<a href="">
										<p>
											агропромышленое 
											<br/>
											направление
										</p>
									</a>
									<div class="headerSubMenu">
										<ul>
											<li>
												<a href="">Овощехранилище</a>
											</li>
											<li>
												<a href="">Свиноферма</a>
											</li>
											<li>
												<a href="">Производственный цех</a>
											</li>
											<li>
												<a href="">Зернохранилище</a>
											</li>
											<li>
												<a href="">Птицеферма</a>
											</li>
											<li>
												<a href="">Котельная </a>
											</li>
											<li>
												<a href="">Цех убоя КРС/МРС</a>
											</li>
											<li>
												<a href="">АБК</a>
											</li>
											<li>
												<a href="">Водоочистка</a>
											</li>
											<li>
												<a href="">Торгово-молочная ферма</a>
											</li>
											<li>
												<a href="">Бокс для техники</a>
											</li>
											<li>
												<a href="">Холодильные камеры</a>
											</li>
											<li>
												<a href="">Коровник</a>
											</li>
											<li>
												<a href="">Ангар</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li>
						<a href="">Технологии</a>
					</li>
					<li>
						<a href="">Объекты</a>
					</li>
					<li>
						<a href="">Документы</a>
					</li>
					<li>
						<a href="">Контакты</a>
					</li>
				</ul>
			</div>
			<div class="header_content">
				<div class="center">
					<div class="logo">
						<a href="#">
							<img src="/img/logo.png" alt=""/>
						</a>
					</div>
					<div class="header_tel">
						<p>8 800 250-96-46 <span>+7 3812 590-103</span></p>
						<a href="">Заказать звонок</a>
					</div>
					<div class="header_btn">
						<a class="btn makeOrder" href="">сделать заказ</a>
						<a class="btn calculateCost" href="">рассчитать стоимость</a>
					</div>
				</div>
			</div>
		</header>
		<div class="contentPage">
			<div class="productPage productPage_objectS">
				<div class="productPage_title">Объекты</div>
				<div class="productPage_text">
					Производственная Компания «АРТа» существует уже более 10-ти лет, успешно работая на рынке производства модульных зданий и металлоконструкций.
				</div>
				<div class="productPage_nav">
					<div class="productPage_navBlock">
						<ul class="productPage_menu">
							<li>
								<a class="productPage_navTitle" href="admin.php">
									Админ панель
								</a>
							</li>

                            <?php if(!empty($categorys)): ?>
                                <?php foreach ($categorys as $category): ?>
							        <li>
								        <a class="productPage_navTitle" href="">
                                            <?= $category['name'] ?>
								        </a>
							        </li>
                                <?php endforeach; ?>        
                            <?php endif; ?>
						</ul>
					</div>
				</div>
				<div class="productPage_content">
					<div class="objectsSection_list objectsSection_product">
                        <?php if(!empty($objects)): ?>
                            <?php for($i = $page*$count; $i < ($page+1)*$count; $i++): ?>
                                <div class="objectsSection_listBlock">
                                    <a class="objectsSection_img" style="background-image:url('/img/<?php echo $objects[$i]['img'] ?>')" href="object.html"></a>
                                    <div class="objectsSection_text"><?= $objects[$i]['name'] ?></div>
                                </div>
                            <?php endfor; ?>        
                        <?php endif; ?>
					</div>
					<ul class="pagination">
						<li class="start">
							<a href="?page=<?php echo 0 ?>">В начало</a>
						</li>
						<li class="prev">
							<a href="?page=<?php echo $p-1?>"></a>
						</li>
						<?php for($p = 0; $p <= $page_count; $p++): ?>
							<li class="active">
								<a href="?page=<?php echo $p?>"><?php echo $p+1 ?></a>
							</li>
						<?php endfor; ?>
						<li class="next">
							<a href="?page=<?php echo $p+1 ?>"></a>
						</li>
						<li class="end">
							<a href="?page=<?php echo $page_count ?>">В конец</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="center">
			<a class="footerLogo" href="">
				<img src="/img/footerLogo.png" alt=""/>
			</a>
			<div class="footerTel">
				<p class="footerTel_number">8 800 250-96-46</p>
				<p class="footerTel_number">+7 3812 590-103</p>
				<a class="footerTel_link" href="">Заказать звонок</a>
			</div>
			<div class="copyright">© 2016 «АРТА»</div>
			<div class="footerNav">
				<div class="footerProducts">
					<div class="footerProducts_title">Продукция:</div>
					<ul>
						<li>
							<a href="">
								Промышленность
								<br/>
								и строительство
							</a>
						</li>
						<li>
							<a href="">Торговля</a>
						</li>
						<li>
							<a href="">Агрокомплекс</a>
						</li>
					</ul>
				</div>
				<div class="footerProducts">
					<ul>
						<li>
							<a href="">Вахтовые поселки</a>
						</li>
						<li>
							<a href="">Технологии</a>
						</li>
						<li>
							<a href="">Объекты</a>
						</li>
						<li>
							<a href="">Полезные статьи</a>
						</li>
						<li>
							<a href="">О компании</a>
						</li>
						<li>
							<a href="">Документы</a>
						</li>
						<li>
							<a href="">Контакты</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer_btn">
				<a class="btn makeOrder" href="">сделать заказ</a>
				<br/>
				<a class="btn calculateCost" href="">рассчитать стоимость</a>
			</div>
			<a class="logo_ferma" href="http://fermastudio.com/" target="_blank">cоздание сайта</a>
		</div>
	</footer>
</section>
</body>
</html>