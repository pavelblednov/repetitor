<?php get_header(); ?>
<div class="hide_line    section    bg_text       section117 "
    style="background-color:#f8f8f8;  background-image:url(img/null.png); padding-top:80px; padding-bottom:80px;"
    data-id="2607347" id="b_2607347"><a name="obomne"></a>


    <div class="noise" style="background-image:url(/img/null.png);"></div>
    <div class="noise_new " style="background-image:url(/img/null.png); opacity:0.5;"></div>
    <div class="section_inner    ">



        <div class="arr1">

            <div data-link="" class="col_2   image1  border   image_size_840x1200  border1  "><img data-lazy='1'
                    data-src="<?php the_field('about_img', 2);?>" alt=""></div>

            <div class="col_2">
                <div class="descr1">
                    <p><span style="color:#424242;"><strong><span style="font-size:40px;">
                    <?php the_field('about_title', 2);?>
                </span></strong></span>
                    </p>
                </div>
                <div class="txt1">
                    <p>
                        <span style="font-size:17px">
                            <span style="color:#333333"><?php the_field('about_text', 2);?></span>
                        </span>
                    </p>
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </div>
</div>

<div data-hcolor="#ff6600" class="hide_line    section            section125  "
    style="background-color:#ffffff;  background-image:url(<?php echo get_template_directory_uri(); ?>/img/null.png); padding-top:80px; padding-bottom:60px;"
    data-id="2607425" id="b_2607425"><a name="a_2607425"></a>


    <div class="noise" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/null.png);"></div>
    <div class="noise_new " style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/null.png); opacity:0.5;"></div>
    <div class="section_inner  all_border  width1170 ">
        <div class="title">
            <p><span style="color:#424242;"><strong><span style="font-size:40px;">
                            <font face="montserrat"><?php the_field('promo_title', 2);?></font>
                        </span></strong></span></p>
        </div>
        <div class="sub_title"></div>

        <?php the_field('promo_items', 2);?>

        <div class="popup_thanks">
            <div class="popup_thanks_inner">
                <div class="popup_thanks_close">X</div>
                <div class="popup_thanks_title">Спасибо за заявку!</div>
                <div class="popup_thanks_text">Заявка отправлена. Наш менеджер свяжется с Вами в ближайшее время.</div>
            </div>
        </div>

    </div>
</div>

<div data-hcolor="#ff6600" class="hide_line   section              section164  "
    style="background-color:#f8f8f8;  background-image:url(<?php echo get_template_directory_uri(); ?>/img/null.png); padding-top:80px; padding-bottom:80px;"
    data-id="2607502" id="b_2607502"><a name="a_2607502"></a>


    <div class="noise" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/null.png);"></div>
    <div class="section_inner all_border  ">
        <div class="col w450h60 pcenter  ">
            <div class="sub_title"><span style="font-size:30px;"><span style="font-family:montserrat">Свяжитесь со мной, если у вас есть вопросы</span></span></div>
            <div class="btn1 surround btn-popup" data-id="w5" data-hcolor="#ed7a00"
                style="background-color:#ed7a00;  border-radius: 2em;   box-shadow: 0;  font-size: 18px;   ">Связаться с
                учителем</div>

        </div>
        <div class="clear"></div>

        <div class="popup_form w5" data-form="w5">
            <div class="popup_form_inner">
                <div class="popup_form_close"></div>
                <div class="popup_form_title">Оставить заявку</div>
                <form action="" enctype="multipart/form-data" method="post" id="form-1">
                    <div class="form1"><input type="hidden" name="Название формы" value="">
                    <div class="field">
                            <div class="field_title ">Введите имя</div>
                            <div class="field_description"></div>
                            <div class="field_input field_input_text"><input type="text" required="required"
                                    name="username" placeholder="Введите имя"></div>
                        </div>
                        <div class="field">
                            <div class="field_title  ">Введите E-mail</div>
                            <div class="field_description"></div>
                            <div class="field_input field_input_email"><input type="email" required="required"
                                    name="useremail" placeholder="mail@mail.ru"></div>
                        </div>
                        <div class="field">
                            <div class="field_title  ">Введите номер телефона</div>
                            <div class="field_description"></div>
                            <div class="field_input field_input_phone"><input type="text" required="required"
                                    pattern="[+)( .-]*[0-9]+[0-9+)( .-]*" minlength="6" name="userphone"
                                    placeholder="xxx-xxx-xxx"></div>
                        </div>
                        <div class="field">
                            <div class="field_input"><input type="submit" class="submit_btn surround"
                                    data-hcolor="#ed7a00" data-action="thanks" data-metrica_event="undefined"
                                    data-fb_pixel="undefined" data-vk_pixel="undefined" data-gtag_event="undefined"
                                    data-url="" data-amount="0" data-product_name="undefined" value="Отправить"
                                    style="background-color:#ed7a00;    border-radius: 2em; ;  box-shadow: 0; ; font-size: 18px; ">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="popup_form_text">Нажимая на кнопку, Вы принимаете Положение и <a target="_blank"
                        href="/политика-конфиденциальности/">Согласие</a> на обработку персональных данных.</div>
            </div>
        </div>


        <div class="popup_thanks">
            <div class="popup_thanks_inner">
                <div class="popup_thanks_close">X</div>
                <div class="popup_thanks_title">Спасибо за заявку!</div>
                <div class="popup_thanks_text">Заявка отправлена. Наш менеджер свяжется с Вами в ближайшее время.</div>
            </div>
        </div>

    </div>
</div>

<div class="hide_line   section           section148   "
    style="background-color:#ffffff;  background-image:url(<?php echo get_template_directory_uri(); ?>/img/null.png); padding-top:80px; padding-bottom:80px;"
    data-id="2607430" id="b_2607430"><a name="a_2607430"></a>


    <div class="noise" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/null.png);"></div>
    <div class="noise_new " style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/null.png); opacity:0.5;"></div>
    <div class="section_inner width1170 ">
        <div class="title"><span style="color:#424242;"><strong><span style="font-size:40px;"><span
                            style="font-family:montserrat">Как проходит обучение в классе</span></span></strong></span>
        </div>
        <div class="sub_title"></div>

        <?php
        $images = get_field('home_gallery');
        ?>

        <div class="arr1">
            <div class="image_box1  ">
                <img data-lazy='1' src="<?php echo $images[0]['image']; ?>" alt="<?php echo $images[4]['title']; ?>">
                <div class="overlay_image_box  active_off" data-link="" data-link-target="0">
                    <div class="overlay_image_title"></div>
                    <div class="overlay_image_descr"></div>
                </div>
            </div>
            <div class="image_box2  ">
                <img data-lazy='1' src="<?php echo $images[1]['image']; ?>" alt="">
                <div class="overlay_image_box  active_off" data-link="" data-link-target="0">
                    <div class="overlay_image_title"></div>
                    <div class="overlay_image_descr"></div>
                </div>
            </div>
            <div class="image_box3  ">
                <img data-lazy='1' src="<?php echo $images[2]['image']; ?>" alt="">
                <div class="overlay_image_box  active_off" data-link="" data-link-target="0">
                    <div class="overlay_image_title"></div>
                    <div class="overlay_image_descr"></div>
                </div>
            </div>
            <div class="image_box4  ">
                <img data-lazy='1' src="<?php echo $images[3]['image']; ?>" alt="">
                <div class="overlay_image_box  active_off" data-link="" data-link-target="0">
                    <div class="overlay_image_title"></div>
                    <div class="overlay_image_descr"></div>
                </div>
            </div>
            <div class="image_box5  ">
                <img data-lazy='1' src="<?php echo $images[4]['image']; ?>" alt="">
                <div class="overlay_image_box  active_off" data-link="" data-link-target="0">
                    <div class="overlay_image_title"></div>
                    <div class="overlay_image_descr"></div>
                </div>
            </div>
        </div>

        

        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>