<?php get_header(); ?>

<div class="section_inner">
<div class="category-res 22">
	<h1><?php single_cat_title(); ?></h1>
<?php
// проверяем есть ли посты в глобальном запросе - переменная $wp_query
if( have_posts() ){
	// перебираем все имеющиеся посты и выводим их
	while( have_posts() ){
		the_post();
		?>

<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
</div>

<?php
	}
	?>

<div class="navigation">
		<div class="next-posts"><?php next_posts_link(); ?></div>
		<div class="prev-posts"><?php previous_posts_link(); ?></div>
	</div>

<?php
}
// постов нет
else {
	echo "<h2>Записей нет.</h2>";
}?>
</div>
</div>

<?php get_footer(); ?>