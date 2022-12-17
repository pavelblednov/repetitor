<form class="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                            <input class="search_input" type="search" minlength="3"
                                placeholder="Поиск по сайту" required="required" value="<?php echo get_search_query() ?>" name="s" id="s">
                            <button type="submit" id="searchsubmit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>