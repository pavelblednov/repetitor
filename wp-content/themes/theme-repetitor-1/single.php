<?php get_header(); ?>
<div class="hide_line section132 pt80 pb80">
<div class="section_inner">
<div class="page-content">
<?php
// проверяем есть ли посты в глобальном запросе - переменная $wp_query
if( have_posts() ){
	// перебираем все имеющиеся посты и выводим их
	while( have_posts() ){
		the_post();
		?>

<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <h1 class="title"><?php the_title(); ?></h1>
    <div class="text"><?php the_content(); ?></div>
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
</div>

<?php get_footer(); ?>