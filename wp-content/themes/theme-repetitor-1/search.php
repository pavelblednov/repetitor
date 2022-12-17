<?php get_header(); ?>

<div class="section_inner">
<div class="title"><span style="color:#424242;"><span><strong><span><?php printf( __( 'Результаты поиска: %s', 'twentyten' ), '' . get_search_query() . '' );?></span></strong></span></span></div>
<div class="search-res">
<?php
// проверяем есть ли посты в глобальном запросе - переменная $wp_query
if( have_posts() ){
	// перебираем все имеющиеся посты и выводим их
	while( have_posts() ){
		the_post();
		?>

<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php the_excerpt(); ?>
</div>

<?php
	}
	?>

<!-- <div class="navigation">
		<div class="next-posts"><?php next_posts_link(); ?></div>
		<div class="prev-posts"><?php previous_posts_link(); ?></div>
	</div> -->

<?php
}
// постов нет
else {
	echo "<h2>Записей нет.</h2>";
}?>
</div>
</div>
<?php get_footer(); ?>