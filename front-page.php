<?php get_header(); ?> 

	<main class="main homepage" role="main">

		<section class="homepage__banners">

			<header class="screen-reader-text">
				<h1>Destaques</h1>
			</header>

			<div class="homepage__banners--item">
				<div class="homepage__banners--image-container"><img src="<?php echo get_template_directory_uri(); ?>/layout/banner1.png" height="410" width="643" alt=""></div>
				<div class="homepage__banners--info-container">
					<a class="homepage__banners--tag" href="#">Notícias</a>
					<h2 class="homepage__banners--title">Novo Tomb Raider faz de Lara Croft a maior mulher nos games</h2>
				</div>
			</div>

			<div class="homepage__banners--item">
				<div class="homepage__banners--image-container"><img src="<?php echo get_template_directory_uri(); ?>/layout/banner2.png" alt=""></div>
				<div class="homepage__banners--info-container">
					<a class="homepage__banners--tag" href="#">Notícias</a>
					<h2 class="homepage__banners--title">Fallout 4 é nomeado Jogo do Ano pela premiação DICE</h2>
				</div>
			</div>
			<div class="homepage__banners--item main">
				<div class="homepage__banners--image-container"><img src="<?php echo get_template_directory_uri(); ?>/layout/banner3.png" alt=""></div>
				<div class="homepage__banners--info-container">
					<a class="homepage__banners--tag" href="#">Notícias</a>
					<h2 class="homepage__banners--title">Análise Assassin’s Creed Chronicles India</h2>
				</div>
			</div>
			<div class="homepage__banners--item">
				<div class="homepage__banners--image-container"><img src="<?php echo get_template_directory_uri(); ?>/layout/banner4.png" alt=""></div>
				<div class="homepage__banners--info-container">
					<a class="homepage__banners--tag" href="#">Notícias</a>
					<h2 class="homepage__banners--title">Trailer de Star Wars: Battlefront será feito com o motor gráfico do jogo</h2>
				</div>
			</div>
			<div class="homepage__banners--item">
				<div class="homepage__banners--image-container"><img src="<?php echo get_template_directory_uri(); ?>/layout/banner5.png" alt=""></div>
				<div class="homepage__banners--info-container">
					<a class="homepage__banners--tag" href="#">Notícias</a>
					<h2 class="homepage__banners--title">HoloLens próximo? Criador afirma que ainda não está na hora</h2>
				</div>
			</div>
		</section>

		<section class="homepage__news">
			<div class="homepage__news--container container post-type__archive">

				<?php echo ( isset( $ads->homepage->banner->horizontal ) ) ? $ads->homepage->banner->horizontal : '' ?>

				<header>
					<div class="post-type__archive--title"><h1>Novidades</h1></div>
				</header>

				<div class="news__list">

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views"><span class="icon__views"><svg width="16" height="11"><use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/images/sprite.svg#icon__views" /></svg></span>1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

				</div>

				<div class="news__list main">

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news2.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

					<div class="news__list--ads">
						<div class="news__list--ad ad">
							<?php echo ( isset( $ads->homepage->news->square1 ) ) ? $ads->homepage->news->square1 : '' ?>
						</div>
						<div class="news__list--ad ad">
							<?php echo ( isset( $ads->homepage->news->square1 ) ) ? $ads->homepage->news->square2 : '' ?>
						</div>
					</div>

				</div>

				<div class="news__list">

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

					<div class="news__list--item">
						<div class="news__list--thumbnail"><img src="<?php echo get_template_directory_uri(); ?>/layout/news1.png" alt=""></div>
						<h2 class="news__list--title"><a href="#">Street Fighter 5: Capcom revela detalhes de Alex e do DLC de março</a></h2>
						<div class="news__list--stuff">
							<div class="news__list--views">1990</div>
							<div class="news__list--datetime">por <span class="author">Vitor Dente</span> em às <span><time datetime="2008-02-14">10:33</time></span></div>
						</div>
					</div>

				</div>

				<footer>
					<div class="post-type__archive--view-more">
						<a href="#">ver tudo</a>
					</div>
				</footer>

				<?php echo ( isset( $ads->homepage->news->horizontal ) ) ? $ads->homepage->news->horizontal : '' ?>

			</div>
		</section>

		<?php $reviews = new WP_Query( array( 'post_type' => 'post_analises', 'posts_per_page' => 6 ) ); ?>
		<?php if ( $reviews->have_posts() ) : ?>

			<section class="homepage__reviews">
				<div class="homepage__reviews--container container">
					<header>
						<div class="post-type__archive--title"><h1>Análises</h1></div>
						<div class="homepage__reviews--subtitle"><p>Não concorda com a nossa nota? Não tem problema! <strong>Dê também a sua nota</strong> para os games que já jogou.</p></div>
					</header>
					<div class="reviews__list">
						<?php while ( $reviews->have_posts() ) : $reviews->the_post(); ?>
							<div class="reviews__list--item">
								<a href="<?php the_permalink(); ?>" class="global-link"><?php the_title(); ?></a>
								<div class="reviews__list--thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('analises-thumbnail') ?></a></div>
								<div class="reviews__list--rate"><span class="rate">85</span></div>
								<div class="reviews__list--rate public"><span class="rate">87</span><span class="desc">pública</span></div>
								<h2 class="reviews__list--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>
						<?php endwhile; ?>
					</div>
					<footer>
						<div class="post-type__archive--view-more"><a href="<?php echo get_post_type_archive_link('post_analises'); ?>">ver tudo</a></div>
					</footer>
				</div>
				<div class="homepage__reviews--pattern"></div>
			</section>
			<script>
				document.addEventListener('DOMContentLoaded', createReviewsPattern, false);

				function createReviewsPattern() {
					reviews = document.querySelector('.homepage__reviews');
					reviewsPattern = document.querySelector('.homepage__reviews--pattern');

					var pattern = Trianglify({
						width:     reviews.clientWidth,
						height:    reviews.clientHeight,
						cell_size: 300,
						variance:  1,
						x_colors: ['#010402', '#132b0e', '#87BC03'],
						y_colors: ['#000000', '#091d0d', '#162b0d'],

					});

					reviewsPattern.appendChild( pattern.canvas() );
				}
			</script>

			<!-- pagination here -->

			<?php wp_reset_postdata(); ?>
		<?php endif; ?>

	</main>

<?php get_footer(); ?>