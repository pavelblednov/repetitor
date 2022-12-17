<div class="hide_line    section             section109  " style="background-color:#f8f8f8;  background-image:url(<?php echo get_template_directory_uri(); ?>/img/null.png);" data-id="2607406" id="b_2607406">
                                    
                                        
                                        <div class="noise" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/null.png);"></div>
                                        <div class="section_inner width1170  hide_phone ">
                                            <div class="logo_block">
                                                
                                                    
                                                            <div class="logo_img"><img  data-lazy='1' data-src="<?php echo get_template_directory_uri(); ?>/img/tobiz_logo_def_black.png" alt=""></div>
                                                    
                                                
                                                <div class="slogan">
                                                    <div class="text1"></div>
                                                    <div class="text2"><span style="font-size:17px;">Личный блог учителя</span></div>
                                                </div>
                                                 
                                            </div>
                                            <div class="menus_block">
                                                <div class="menu1 menu" style="color: #33333">
                                                    <div class="menu_text1 menu_text">Интересное</div>
                                                    <?php
                                                    $args = array(
                                                    'theme_location' => 'footer_menu',
                                                    'menu' => 'footer3',
                                                    'container' => 'div',
                                                    'container_class' => 'menu1_ul',
                                                    'menu_class' => '',
                                                    'menu_id' => 'menu__list',
                                                    'add_li_class'  => 'level0',
                                                    'link_class' => 'menu__item_link'
                                                    );
                                                    ?>
                                                    <?php wp_nav_menu($args); ?>
													<div class="phone1 zphone ">+7 800 333 22 33</div>
                                                    <div class="clear"></div>
                                                </div>
                                            <div class="menu menu2" style="color: #33333">
                                                    <div class="menu_text2 menu_text">Детям</div>
                                                    <?php
                                                    $args = array(
                                                    'theme_location' => 'footer_menu',
                                                    'menu' => 'footer2',
                                                    'container' => 'div',
                                                    'container_class' => 'menu1_ul',
                                                    'menu_class' => '',
                                                    'menu_id' => 'menu__list',
                                                    'add_li_class'  => 'level0',
                                                    'link_class' => 'menu__item_link'
                                                    );
                                                    ?>
                                                    <?php wp_nav_menu($args); ?>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="menu menu3" style="color: #33333">
                                                    <div class="menu_text3 menu_text">Родителям</div>
                                                    <?php
                                                    $args = array(
                                                    'theme_location' => 'footer_menu',
                                                    'menu' => 'footer1',
                                                    'container' => 'div',
                                                    'container_class' => 'menu1_ul',
                                                    'menu_class' => '',
                                                    'menu_id' => 'menu__list',
                                                    'add_li_class'  => 'level0',
                                                    'link_class' => 'menu__item_link'
                                                    );
                                                    ?>
                                                    <?php wp_nav_menu($args); ?>
                                                    <div class="clear"></div>
                                                </div>
                                                
                                                    <div class="popup_form">
                            <div class="popup_form_inner">
                                <div class="popup_form_close"></div>
                                <div class="popup_form_title">Заполните форму </div>
                                <form action="handler.php" enctype="multipart/form-data" method="post">
                                        <div class="form1"><input type="hidden" name="Название формы" value="">	<div class="field"><div class="field_title ">Введите имя</div><div class="field_description"></div><div class="field_input field_input_text"><input type="text" required="required" name="Введите имя" placeholder="Введите имя"></div></div><div class="field"><div class="field_title  ">Введите номер телефона</div><div class="field_description"></div><div class="field_input field_input_phone"><input type="text" required="required" pattern="[+)( .-]*[0-9]+[0-9+)( .-]*" minlength="6" name="Введите номер телефона" placeholder="xxx-xxx-xxx"></div></div><div class="field"><div class="field_input"><input type="submit" class="submit_btn surround" data-hcolor="#ed7a00" data-action="thanks" data-metrica_event="undefined" data-fb_pixel="undefined" data-vk_pixel="undefined" data-gtag_event="undefined" data-url="" data-amount="0" data-product_name="undefined" value="Заказать звонок менеджера" style="background-color:#ed7a00;    border-radius: 2em; ;  box-shadow: 0; ;  "></div></div></div>
                                </form>
                                <div class="popup_form_text">Нажимая на кнопку, Вы принимаете <a target="_blank" href="/?personal_data=1">Положение</a> и <a target="_blank" href="/?personal_data=2">Согласие</a> на обработку персональных данных.</div>
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
                                <div class="clear"></div>
                            </div></div>

        </div>
            
            
        
                                    
        


    <script>

/*         (function() {

            var resources_css = [
                'https://fonts.googleapis.com/css?family=Roboto&display=swap',
                'https://fonts.googleapis.com/icon?family=Material+Icons&display=swap',
                //'/fonts/font-awesome-4.7.0/css/fa.min.css'
            ];
            var resource = [];
            $.each(resources_css, function(element,index){
                resource[index] = document.createElement('link');
                resource[index].setAttribute("rel", "stylesheet");
                resource[index].setAttribute("href",element);
                resource[index].setAttribute("type","text/css");

                var head = document.getElementsByTagName('head')[0];
                head.appendChild(resource[index]);

            });

        })(); */

    </script>
    
    
    
    <div id="result-message"></div> 


            
    
      <?php wp_footer(  );?>      

                            
        <script src="<?php echo get_template_directory_uri(); ?>/js/mask.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/lazyload.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>
        
        			
               
        
        
    </body>
</html>