<?php
/**
 * User: egorov
 * Date: 13.02.15
 * Time: 9:51
 */


?>
<footer class="">
    <div class="row">
        <div class="col-xs-5 free_day np form">
            <div class="s_t text1">УЗНАЙТЕ СВОБОДНА ЛИ ВАША ДАТА!</div>
            <div class="s_t text2">ЗАПОЛНИТЕ ФОРМУ СЕЙЧАС И Я СВЯЖУСЬ С ВАМИ В БЛИЖАЙШЕЕ ВРЕМЯ</div>
            <form>
                <div><input class="st" type="text" placeholder="Имя и дата" name="NameAndDate"></div>
                <div><input class="st" type="text" placeholder="Телефон и e-mail" name="TelAndEmail"></div>
                <div><button class="s_t" type="submit">УЗНАТЬ!</button></div>
            </form>
        </div>
        <div class="col-xs-4 copy">
            <div><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Анжрей Пределин" class="logo"></div>
            <div class="s_t text2 logo_text">АНДРЕЙ ПРЕДЕЛИН (С) 2010-2014 ВСЕ ПРАВА ЗАЩИЩЕНЫ</div>
        </div>
        <div class="col-xs-3 contacts">
            <div><img src="<?php bloginfo('template_url'); ?>/img/icons/phone.png" class="icon"> <span class="s_t">+7 (985) 411 24 00</span></div>
            <div><img src="<?php bloginfo('template_url'); ?>/img/icons/mail.png" class="icon"> <span class="s_t">INFO@MAIL.COM</span></div>
            <div><img src="<?php bloginfo('template_url'); ?>/img/icons/location.png" class="icon"> <span class="s_t">Г. КИЕВ, УКРАИНА, УЛ.УЛИЦ 25</span></div>
            <div><img src="<?php bloginfo('template_url'); ?>/img/icons/socfbwh.png" class="icon"> <img src="<?php bloginfo('template_url'); ?>/img/icons/socinst.png" class="icon" ></div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</div>
<script src="<?php bloginfo('template_url'); ?>/js/jquery/jquery-1.11.2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery/jquery.scrollTo.min.js"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/jquery/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery/fancybox/jquery.fancybox.pack.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery/instafeed.min.js"></script>


<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
</body>
</html>