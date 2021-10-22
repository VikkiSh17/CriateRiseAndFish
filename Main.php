<!Doctype html>
<html lang="ru">
<meta charset="utf-8">
<title>Рис и Рыба</title>
<meta name="description" content="Rice and Fish">
<meta name="keywords" content="rise, fish, rise and fish">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="/assets/scripts/scripts.js"></script>
<script src="/assets/scripts/jquery-3.5.1.min.js"></script>
<link rel = "stylesheet" href="assets/css/Main.css"> <!--подключение работает-->
<!--<link rel = "stylesheet" href = "assets/css/Main.scss">-->

<div class='wrapper' id='wrapper'>
<head>
    <div class="logo-img"><a href='Main copy.php'></a><img src='assets/img/Group.png'></div>
    <div class="nav">
        <ul>
            <li><a fref='#'>Акции</a></li>
            <li><a fref='#'>Программа лояльности</a></li>
            <li><a fref='#'>Промо-коды</a></li>
            <li><a fref='#'>О нас</a></li>
            <li><a fref='#'>Доставка и оплата</a></li>
            <li><a fref='#'>Контакты</a></li>
        </ul>
        
    </div>
    <input type='seach' alt='seach' placeholder='Введите название блюда, например сет Король лев'>
    <div class='seach-sucsess'><btn><img src='assets/img/Vector 816.png'></btn></div>
    <div class="number"><img src='assets/img/8 (3532) 48-08-58.png'></div>
    <div class="time-magazine"><img src='assets/img/с 10_00 до 23_30.png'></div>
    <div class="profile"><img src='assets/img/Group 1589.png'></div>
    <div class="bookmark"><img src='assets/img/Vector 695.png'></div>
    <div class="basket"><img src='assets/img/Group (2).png'></div>
    <div class="many">10000p</div>
        <!--echo basket script sql php-->
        
</head>

<body>

    <div class="promo">
        <img src='assets/img/Frame 1667.png'>
    </div>
    <div class='promo-scrol'>
        <a href='#' alt='prev_promo'><img src='assets/img/Group 1551.png'></a>
    </div>   <!--like button to preview promo image-->
    <div class='promo-scrol2'>
        <a href='#' alt='next_promo'><img src='assets/img/Group 1550.png'></a>
    </div>   <!--like button to next promo image-->
    <!--script with shadow graphics without changing the page-->

    
    <div class='menu-set-tag_group'>
        <div class='float-set-tag_group'> <!--A-here gives link category at the bottom page by name (scrolling)-->
        <div class='container_menu-set-tag'><a href='#' alt='сеты'><img src='assets/img/menu-set-tag/Group 1585.png'></a></div>
        <div class='container_menu-set-tag'><a href='#' alt='запеч ролы'><img src='assets/img/menu-set-tag/Group 1584.png'></a></div>
        <div class='container_menu-set-tag'><a href='#' alt='прост ролы'><img src='assets/img/menu-set-tag/Group 1583.png'></a></div>
        <div class='container_menu-set-tag'><a href='#' alt='слож ролы'><img src='assets/img/menu-set-tag/Group 1582.png'></a></div>
        <div class='container_menu-set-tag'><a href='#' alt='темпура ролы'><img src='assets/img/menu-set-tag/Group 1581.png'></a></div>
        <div class='container_menu-set-tag'><a href='#' alt='суши'><img src='assets/img/menu-set-tag/Group 1580.png'></a></div>
        <div class='container_menu-set-tag'><a href='#' alt='супы'><img src='assets/img/menu-set-tag/Group 1579.png'></a></div>
        <div class='container_menu-set-tag'><a href='#' alt='воки'><img src='assets/img/menu-set-tag/Group 1578.png'></a></div>
        <div class='container_menu-set-tag'><a href='#' alt='гавай поке'><img src='assets/img/menu-set-tag/Group 1577.png'></a></div>
        <div class='container_menu-set-tag'><a href='#' alt='закус'><img src='assets/img/menu-set-tag/Group 1576.png'></a></div>
        <div class='container_menu-set-tag'><a href='#' alt='соусы'><img src='assets/img/menu-set-tag/Group 1575.png'></a></div>
        <div class='container_menu-set-tag'><a href='#' alt='десерты'><img src='assets/img/menu-set-tag/Group 1574.png'></a></div>
        </div>
    </div> <style>.container_menu-set-tag{padding-top: 116px;}</style><!--здесь сработало-->


    <div id='NewHeader' class='NewHeader'>
        <div class='elementNewHeader'>
            <img src='assets/img/logo2.png'>
            <img src='assets/img/рис и рыба.png'>
            <a href='#' alt='sets'>Сеты</a>
            <a href='#' alt='baked'>Запеченные роллы</a>
            <a href='#' alt='roll'>Простые роллы</a>
            <a href='#' alt='hardroll'>Сложные роллы</a>
            <a href='#' alt='tempura'>Темпура роллы</a>
            <a href='#' alt='sushi'>Суши</a>
            <a href='#' alt='soup'>Супы</a>
            <a href='#' alt='vock'>Воки</a>
            <a href='#' alt='gavai'>Гавайские поке</a>
            <a href='#' alt='zakus'>Закуски</a>
            <a href='#' alt='souse'>Соусы</a>
            <a href='#' alt='dezert'>Десерты</a>
            <a href='#' alt='drinck'>Напитки</a>
        </div>
    </div>
    <style>/*.NewHeader{ display:none;}*/
        .elementNewHeader{display: inline; 
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        border-style:ridge;border-radius: 2px; border: rgb(201, 201, 201);
        padding-top:83px; padding-bottom:20px; padding-left:20px; background-color:#FAEFAC;}
        .elementNewHeader>a{color:#000; font-size:1.2em; margin:10px;;padding:10px; text-decoration:none;}
    </style>


    <!--CONTENT-->


<?php

    $mysqli = new mysqli('localhost', 'root', '', 'riseandfish');
 
    if ($mysqli->connect_error) {
        die('Ошибка подключения (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
    }
    $mysqli->set_charset('utf8');

    //$sql="SELECT * FROM 'sets' ";
    
    //$query="INSERT INTO sets VALUES('$name', 'descriptions')";
    //$result=false;
    //if($mysqli->query($query)){
    //    $result=true;
    //}
    //return $result;

    //mysql> SELECT * FROM 'sets' WHERE 'name';


    
    $db = null;

?>
    
<div class='container-content'>

    <h1>Сеты</h1>

    <ul class='panel-sort1'>
        <li>По популярности<img src='assets/img/panel-sort/marker.png'></li>
        <li>По цене<img src='assets/img/panel-sort/marker.png'></li>
        <li>По весу<img src='assets/img/panel-sort/marker.png'></li>
        <li><img src='assets/img/panel-sort/hot.png'>Акция<btn><img src='assets/img/panel-sort/square.png'></btn></li>
        <li><img src='assets/img/panel-sort/vegan.png'>Вегетарианские<btn><img src='assets/img/panel-sort/square.png'></btn></li>
        <li><img src='assets/img/panel-sort/peper.png'>Острое<btn><img src='assets/img/panel-sort/square.png'></btn></li>
        <!--square - in check mark this is a scripts-event--> 
    </ul>


    <div class='container-product'>
            
        <div class='container-product-small'><!-- здесь стиль работает-->
            <style>.container-product-small {
            width: 368px;
            height: 500px;
            margin: 20px;
            display: inline-block;
            float: left;
            }</style>
            <!-- hear php-sql-->
                <?php
                $query=$mysqli->query('SELECT*FROM sets');
                while($row = $result->fetch_assoc($query)){ ?>
            <a href='klick-okno'><img src='
                <?php
                    echo $row['image'];
                ?>
            '></a>
            <h3>
                <?php
                    echo $row['name'];
                ?>
            </h3>
            <p><?php
                    echo $row['descriptions'];
                ?>
            </p>
            <h4>
                <?php
                    echo $row['cost'];
                ?>
            </h4>
            <div class='badge'>
                <?php
                    echo $row['badge'];
                ?>
            </div>
            <?php } mysql_close();?>
        </div>

        <div id='black-backgrownd'>
        <div id='onklick-container-product-small' class='container-product-small'>
            <?php
                $query=$mysqli->query('SELECT*FROM sets');
                while($row = $result->fetch_assoc($query)){ ?>
            <img src='
                <?php
                    echo $row['image'];
                ?>
            '>
            <h3>
                <?php
                    echo $row['name'];
                ?>
            </h3>
            <p><?php
                    echo $row['descriptions'];
                ?>
            </p>
            <h4>
                <?php
                    echo $row['cost'];
                ?>
            </h4>
            <div class='badge'>
                <?php
                    echo $row['badge'];
                ?>
            </div>
            <?php } mysql_close();?>
        </div>
        <style>
            #onklick-container-product-small{
                width: 368px;
                height: 500px;
                margin: 20px;
                position: absolute;
                border: 3px solid;
                border-radius: 10px;
            }
            #onklick-container-product-small:target{
                display: block;
            }
            #black-backgrownd {
                display: none;
                top:0;
                left:0;
                position:absolute;
                width:100%;
                height:100%;
                background: rgba(102, 102, 102, 0.5);
            }
            #black-backgrownd:target {display: block;}
        </style>
        </div>

       
    </div>

    <div class='line-notvisible'>
        <style>.line-notvisible{height: 50px; width: 1500px;
            float:left;}</style>
    </div>
    

    <h2>Запечёные ролы</h2>
    <style>h2{font-size: 4em; float:left;}</style>
            

    <ul class='panel-sort2'>
        <li>По популярности   <img src='assets/img/panel-sort/marker.png'></li>
        <li>По цене   <img src='assets/img/panel-sort/marker.png'></li>
        <li><img src='assets/img/panel-sort/hot.png'>Акция   <btn><img src='assets/img/panel-sort/square.png'></btn></li>
        <li><img src='assets/img/panel-sort/vegan.png'>Вегетарианские   <btn><img src='assets/img/panel-sort/square.png'></btn></li>
        <li><img src='assets/img/panel-sort/peper.png'>Острое   <btn><img src='assets/img/panel-sort/square.png'></btn></li>
        <!--square - in check mark this is a scripts-event--> 
        <style>ul.panel-sort2{display: inline; 
        list-style-type: none;}</style> <!--эта строка работает-->
    </ul>


    <div class='container-product'>

        <div id='container-product-small' class='container-product-small'>
            <?php $query=$mysqli->query('SELECT*FROM baked');
                while($row = $result->fetch_assoc($query)) {
            ?>
            
            <img src='
                <?php 
                echo $row['image'];
                ?>
            '>
            <h3>
                <?php
                echo $row['name'];
                ?>
            </h3>
            <p>
                <?php
                echo $row['descriptions'];
                ?>
            </p>
            <h4>
                <?php
                    echo $row['cost'];
                ?>
            </h4>
            <div class='badge'>
                <?php
                    echo $row['badge'];
                ?>
            </div>
            <?php } mysql_close();?>

        </div>


    </div>


    <div class='container-product'>
        <h2>Напитки</h2>

        <div class='container-product-small'>
            <img src='assets/img/preview-water/foto-fanta.png'>
            <h3>Fanta 1000 мл.</h3>
            <p>1000 мл.</p>
        </div>

        <div class='container-product-small'>
            <img src='assets/img/preview-water/foto-cola.png'>
            <h3>Coca Cola 1000 мл.</h3>
            <p>1000 мл.</p>
        </div>

        <div class='container-product-small'>
            <img src='assets/img/preview-water/foto-sprite.png'>
            <h3>Sprite 1000 мл.</h3>
            <p>1000 мл.</p>
        </div>

        <div class='container-product-small'>
            <img src='assets/img/preview-water/foto-mors.png'>
            <h3>Морс клюквенный 500 мл.</h3>
            <p>Клюква, сахар, вода, 500 мл.</p>
        </div>

        <div class='container-product-small'>
            <img src='assets/img/preview-water/foto-mors.png'>
            <h3>Морс черничный 500 мл.</h3>
            <p>Черника, сахар, вода, 500 мл.</p>
        </div>

        <div class='container-product-small'>
            <img src='assets/img/preview-water/foto-sock.png'>
            <h3>Сок яблочный 1000 мл.</h3>
            <p>1000 мл.</p>
        </div>

        <div class='container-product-small'>
            <img src='assets/img/preview-water/foto-sock.png'>
            <h3>Сок апельсиновый 1000 мл.</h3>
            <p>1000 мл.</p>
        </div>

        <div class='container-product-small'>
            <img src='assets/img/preview-water/foto-sock.png'>
            <h3>Сок грейпфрутовый 1000 мл.</h3>
            <p>1000 мл.</p>
        </div>


    </div>


    <div class='container-product'>
        <style>.contaiber-product{clear:both;}</style>
        <h2>Доставка и оплата</h2>
        <div class='container-product-small'>
            <img src='assets/img/frame-clock.png'>
            <style>.container-product-small>img{ max-width:365px;}</style>
            <h3>90 МИНУТ ИЛИ заказ БЕСПЛАТНО</h3>
            <p>Если мы не успеем доставить ваш заказ 
                в течении 90 минут, то курьер назовет 
                вам промо-код на покупку роллов из раздела “Горячие роллы”, 
                “Темпура роллы”, “Запеченные роллы” на выбор
            </p>
            <div class='button'><a href='#'><h3>Блюда на выбор</h3></a></button>
            <style>
            .container-product-small>a {text-decoration: none; color:#fff;}
            .button { background-color:#7866FA; width:213px; height: 50px;
                  border:none; padding-top: 1px; text-align: center;}
            </style>
        </div>

        <div class='container-product-small'>
        <img src='assets/img/frame-rol.png'>
        <h3>по-настоящему вкусно!</h3>
        <p>Мы готовим блюда из свежих продуктов, после оформления заказов. 
            У нас не бывает заготовок или полуфабрикатов. Дополнительный 
            текст на главной странице. Текст можно увеличить при необходимости 
            добавив несколько дополнительных текстовых блока.
        </p>
        <div class='button'><a href='#'><h3>о нас</h3></a></button>
        </div>

        <div class='container-product-small'>
        <img src='assets/img/img-map.png'>
        <h3>Зона доставки в г. Оренбург</h3>
        <p>Мы доставим ваш заказ даже в самые отдаленные районы города Оренбурга. 
            Открыв карту вы можете найти свой район 
            и узнать стоимость доставки, которая будет добавлена к стоимости заказа.
        </p>
        <div class='button'><a href='#'><h3>Карта</h3></a></button>
        </div>
    </div>

</div>
</body>

<footer>
<div class='container-footer'>
    <style>.container-footer{clear:both; position: relative;}</style>

    <img src='assets/img/footer/Vector 814.png' alt='black'>

    <div class='textFooter-left'>
        <p>Прием заказов: c 10:00 до 01:30</p>
        <div class='number-footer'><img src='assets/img/footer/+7 (3532) 48-08-58.png'></div>
        <h3>Рис и рыба</h3>
        <p>О компании Вакансии Контакты</p>
        <p>Доставка суши — онлайн сервис заказа суши и других блюд в Оренбурге.</p> 
        <p>© 2021 "Рис и Рыба",  Все права защищены</p>
    </div>
    <style>.textFooter-left{ position: absolute; top: 8px; left: 16px; color:#fff;}</style>

    <div class='textFooter-centre'>
        <h3>Подписывайтесь! У нас много интересного!</h3>
        <h3>Доставка</h3>
        <p>Доставка и оплата Программа лояльности Промо-коды</p>
        <p>ООО "Наименование оранизации" ИНН: 561999999, КПП: 561001001</p>

        <div class='image-footer-visa'>
        <img src='assets/img/footer/mastercart.png'>
        <img src='assets/img/footer/visa.png'>
        <img src='assets/img/footer/mir-logo.png'>
        </div>
    </div>
    <style>.textFooter-centre{position: absolute;color:#fff;
    top: 8px; left: 55%;}</style>

    <div class='textFooter-right'>
        <div class='image-footer-sotial'>
            <img src='assets/img/footer/vk.png'>
            <img src='assets/img/footer/instagram.png'>
        </div>
        <h3>Юридическая информация</h3>
        <p>Политика конфиденциальности Пользовательское соглашение</p>
    
        <div class='image-footer-logoDSM'>
            <img src='assets/img/footer/logoDSMedia-footer.png'>
        </div>
        <p>Создание сайта</p>
    </div>
    <style>.textFooter-right{position: absolute;color:#fff;
    bottom: 220px;right: -500px; left: 1010px;}</style>
    

    <div class='image-footer-logoRiseAndFish'>
        <img src='assets/img/footer/inu.png'>
    </div>
    <style>.image-footer-logoRiseAndFish{position: absolute;
    bottom: 8px;right: 0px; left: 1500px;}
    </style>
</div>
</footer>

</div>