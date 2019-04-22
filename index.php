<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package patryk-nizio-2019
 */

get_header();
?>
	<section>
		<h1> Hello World ! </h1>
		<p> Cześć, nazywam sie Patryk Nizio (@Dyzio).<br>
			Prowadzę <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">bloga</a> na temat technologii webowych, czasem pojawiają sie tam artykuły związane ogólnie z programowaniem, językiem R, przetwarzaniem danych i moje luźne przemyślenia. 
			Studiuje informatykę na AGH w Krakowie, pracuję jako front-end developer oraz jestem wielkim fanem planowania i prowadzenia list, możesz zobaczyć moje cele i plany na przyszłość w zakładce <a href="<?php echo esc_url( home_url( '/plan' ) ); ?>">plany</a>.
			Jeśli potrzebujesz strony internetowej lub aplikacji mobilnej zajrzyj w zakładkę <a href="<?php echo esc_url( home_url( '/works' ) ); ?>">portfolio</a> lub zobacz moje <a href="<?php echo esc_url( home_url( '/cv' ) ); ?>">cv</a> i profil na <a href="https://github.com/dyzio18">githubie</a>
		</p>
	</section>
	<section>
		<h2>Blog</h2>
	
		<div class="box__wrapper">
			

			<img src="" alt="">
		</div>
	</section>
	<section>
		<h2>Prace</h2>
		
		A B C
	</section>


<?php
// get_sidebar();
get_footer();
