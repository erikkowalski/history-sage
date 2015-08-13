<?php // get_template_part('templates/page', 'header'); ?>

<section class="top">
<?php if (!have_posts()) : ?>
<div class="alert alert-warning">
	<?php _e('Sorry, no results were found.', 'sage'); ?>
</div>
<?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
</section>
<!-- Links & other resources -->
<section class="resources clearfix">
	<div class="container">
		<h1>Resources</h1>

		<div class="col-sm-6 col-md-6 typography">
			<h3>Typography </h3>
			<ul>
				<li>
					<a href="http://fontfeed.com/" target="_blank">FontFeed</a>
					<p class="description">A daily dispatch of recommended fonts, typography techniques, and inspirational examples of digital type at work in the real world.</p>
				</li>
				<li>
					<a href="http://fontsinuse.com/" target="_blank">Fonts in Use</a>
					<p class="description">Real fonts spotted in the wild plus articles and commentary by some very nerdy folks.</p>
				</li>
				<li>
					<a href="http://www.iampeth.com/" target="_blank">IAMPETH</a>
					<p class="description">The International Association of Master Penmen, Engrossers, and Teachers of Handwriting</p>
				</li>
				<li><a href="http://ilovetypography.com/" target="_blank">I Love Typography</a></li>
				<li><a href="http://astore.amazon.com/typography-20" target="_blank">ILT Book Recommendations</a></li>
				<li><a href="http://ministryoftype.co.uk/" target="_blank">Ministry of Type</a></li>
				<li><a href="http://www.myfonts.com/newsletters/" target="_blank">MyFonts’s Newsletters</a></li>
				<li>
					<a href="http://nicewebtype.com/" target="_blank">Nice Web Type</a>
					<p class="description">A place for web typography experiments and reading about advancements and best practices in typesetting web text, handcrafted by Tim Brown.</p>
				</li>
				<li><a href="http://tdc.org/resources/" target="_blank">TDC Book Recommendations</a></li>
				<li>
					<a href="http://tdc.org" target="_blank">Type Directors Club</a>
					<p class="description">Promoting excellence in typography for over 65 years. The TDC offers excellent type related events, educational workshops, and a beautiful annual.</p>
				</li>
				<li><a href="http://typedia.com" target="_blank">Typedia</a></li>
				<li>
					<a href="http://typographica.org/" target="_blank">Typographica</a>
					<p class="description">Stephen Coles’ outstanding blog of type reviews, books and commentary.</p>
				</li>
				<li>
					<a href="http://www.webtypography.net/" target="_blank">Web Typography</a>
					<p class="description">Bringhurst’s <em>Elements of Typographic Style</em> applied to the web.</p>
				</li>
				<li>
					<a href="http://woodtyper.com" target="_blank">Wood Typer</a>
					<p class="description">Nick Sherman’s notes on large and ornamented type and related matters.</p>
				</li>
			</ul>
		</div>
		<div class="col-sm-6 col-md-6">
			<div id="web-resources" class="resource-list">
				<h3>Web Design</h3>
				<ul>
					<li>
						<a href="http://www.alistapart.com/" target="_blank">A List Apart</a>
						<p class="description">A wonderful site covering all things relating to the web with well-written articles by the field’s top practitioners.</p>
					</li>
					<li><a href="http://www.codecademy.com/" target="_blank">Codecademy</a></li>
					<li><a href="http://codeacademy.org/" target="_blank">Code Academy</a></li>
					<li><a href="http://css-tricks.com/" target="_blank">CSS Tricks</a>
						<p class="description">Chris Coyier’s excellent and extremely helpful site with articles, code snippets, and other goodies.</p>
					</li>
					<li>
						<a href="http://dontfeartheinternet.com" target="_blank">Don’t Fear the Internet</a>
						<p class="description">A site created by Jessica Hische &amp; Russ Maschmeyer to teach basic HTML and CSS to Non-Web Designers.</p>
					</li>
					<li>
						<a href="http://getkirby.com" target="_blank">Kirby CMS</a>
						<p class="description">Acontent management system for websites. It’s amazing.</p>
					</li>
					<li>
						<a href="http://methodandcraft.com/" target="_blank">Method and Craft</a>
						<p class="description">Web-centric interviews and articles “exploring the creative mind and beauty within each pixel.”</p>
					</li>
					<li>
						<a href="http://microformats.org/wiki/Main_Page" target="_blank">Microformats</a>
						<p class="description">A resource for semantic HTML in general and microformats.</p>
					</li>
					<li>
						<a href="https://developer.mozilla.org/en-US/" target="_blank">Mozilla Developers Network</a>
						<p class="description">An open community of developers building resources for a better web, regardless of brand, browser or platform. Top online documentation for HTML, CSS, JS, DOM.</p>
					</li>
					<li>
						<a href="http://www.awwwards.com/" target="_blank">Awwwards</a>
						<p class="description">Pure web candy.</p>
					</li>
					<li>
						<a href="http://codex.wordpress.org/" target="_blank">WordPress Codex</a>
						<p class="description">A massive site full of articles and forums as well as extensive documentation of all Wordpress features that is relatively easy to read and learn from.</p>
					</li>
					<li>
						<a href="http://www.zeldman.com/" target="_blank">Zeldman</a>
						<p class="description">Web Design news and information since 1995.</p>
					</li>
				</ul>
			</div>
		</div>

	</div> <!-- /container -->
</section>
