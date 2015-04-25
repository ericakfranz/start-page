<?php
/**
 * Start Page
 */
require( 'sites.php' );
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Start Page</title>
		<link href="assets/css/normalize.css" rel="stylesheet" type="text/css">
		<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="page">

			<div class="google-search-form">
				<form method="get" action="https://www.google.com/search">
					<input type="text" name="q" placeholder="Search Google" autofocus="autofocus">
				</form>
			</div><!-- .google-search-form -->

			<div class="sites-wrap clearfix">

				<section class="my-sites section clearfix">
					<h3 class="section-title">My Sites & Favorites</h3>
					<?php foreach( $my_sites as $site ) { ?>
						<div class="site <?php echo $site['id']; ?>">
							<div class="site-meta">
								<a class="site-title-link" href="<?php echo $site['url']; ?>">
									<img class="site-favicon" src="<?php echo $site['favicon']; ?>">
									<h4 class="site-title"><?php echo $site['name']; ?></h4>
								</a>
							</div>
							<div class="site-links">
								<a class="site-url view-site" href="<?php echo $site['url']; ?>">Site</a>
								<?php
									if( $site['wordpress'] ) {
										if( $site['admin'] ) {
											printf( '<a class="site-url site-admin" href="%s">Admin</a>&nbsp;',
												rtrim( $site['url'], '/' ) . '/wp-admin/'
											);
										}
										if( $site['themes'] ) {
											printf( '<a class="site-url site-themes" href="%s">Themes</a>&nbsp;',
												rtrim( $site['url'], '/' ) . '/wp-admin/themes.php'
											);
										}
										if( $site['plugins'] ) {
											printf( '<a class="site-url site-plugins" href="%s">Plugins</a>&nbsp;',
												rtrim( $site['url'], '/' ) . '/wp-admin/plugins.php'
											);
										}
									}
								?>
							</div>
						</div>
					<?php } ?>
					<div class="my-links">
						<h4 class="subtitle">My Secondary Links:</h4>
						<?php foreach( $my_links as $link ) { ?>
							<a class="random-links" href="<?php echo $link['url']; ?>">
								<img class="link-favicon" src="<?php echo $link['favicon']; ?>">
								<span class="link-title"><?php echo $link['name']; ?></span>
							</a>
						<?php } ?>
					</div>
				</section><!-- .my-sites -->

				<section class="project-links section clearfix">
					<h3 class="section-title">Single Project Section</h3>
					<?php foreach( $project_links as $project ) { ?>
						<div class="site project-site <?php echo $project['id']; ?>">
							<div class="site-meta">
								<a class="site-title-link" href="<?php echo $project['url']; ?>">
									<img class="site-favicon" src="<?php echo $project['favicon']; ?>">
									<h4 class="site-title"><?php echo $project['name']; ?></h4>
								</a>
							</div>
							<div class="site-links">
								<a class="site-url view-site" href="<?php echo $project['url']; ?>">Site</a>
								<?php
									if( $project['wordpress'] ) {
										if( $project['admin'] ) {
											printf( '<a class="site-url site-admin" href="%s">Admin</a>&nbsp;',
												rtrim( $project['url'], '/' ) . '/wp-admin/'
											);
										}
										if( $project['themes'] ) {
											printf( '<a class="site-url site-themes" href="%s">Themes</a>&nbsp;',
												rtrim( $project['url'], '/' ) . '/wp-admin/themes.php'
											);
										}
										if( $project['plugins'] ) {
											printf( '<a class="site-url site-plugins" href="%s">Plugins</a>&nbsp;',
												rtrim( $project['url'], '/' ) . '/wp-admin/plugins.php'
											);
										}
									}
								?>
							</div>
						</div>
					<?php } ?>
					<div class="site-resources">
						<div class="resources">
							<div class="resource-section">
								<h4 class="resource-section-title">Section One</h4>
								<div class="resource-group clearfix">
									<?php foreach( $section_one_links as $one ) { ?>
										<div class="resource half">
											<img class="site-favicon" src="<?php echo $one['favicon']; ?>">
											<a class="resource-link" href="<?php echo $one['url']; ?>"><?php echo $one['name']; ?></a>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="resource-section">
								<h4 class="resource-section-title">Section Two</h4>
								<div class="resource-group clearfix">
									<?php foreach( $section_two_links as $two ) { ?>
										<div class="resource half">
											<img class="site-favicon" src="<?php echo $two['favicon']; ?>">
											<a class="resource-link" href="<?php echo $two['url']; ?>"><?php echo $two['name']; ?></a>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="resource-section">
								<h4 class="resource-section-title">Section Three</h4>
								<div class="resource-group clearfix">
									<?php foreach( $section_three_links as $three ) { ?>
										<div class="resource half">
											<img class="site-favicon" src="<?php echo $three['favicon']; ?>">
											<a class="resource-link" href="<?php echo $three['url']; ?>"><?php echo $three['name']; ?></a>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="resource-section">
								<h4 class="resource-section-title">Section Four</h4>
								<div class="resource-group clearfix">
									<?php foreach( $section_four_links as $four ) { ?>
										<div class="resource half">
											<img class="site-favicon" src="<?php echo $four['favicon']; ?>">
											<a class="resource-link" href="<?php echo $four['url']; ?>"><?php echo $four['name']; ?></a>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</section><!-- .project-links -->

				<section class="more-sites section clearfix">
					<h3 class="section-title">More Sites</h3>
					<?php foreach( $more_sites as $site ) { ?>
						<div class="site <?php echo $site['id']; ?>">
							<div class="site-meta">
								<a class="site-title-link" href="<?php echo $site['url']; ?>">
									<img class="site-favicon" src="<?php echo $site['favicon']; ?>">
									<h4 class="site-title"><?php echo $site['name']; ?></h4>
								</a>
							</div>
							<div class="site-links">
								<a class="site-url view-site" href="<?php echo $site['url']; ?>">Site</a>
								<?php
									if( $site['wordpress'] ) {
										if( $site['admin'] ) {
											printf( '<a class="site-url site-admin" href="%s">Admin</a>&nbsp;',
												rtrim( $site['url'], '/' ) . '/wp-admin/'
											);
										}
										if( $site['themes'] ) {
											printf( '<a class="site-url site-themes" href="%s">Themes</a>&nbsp;',
												rtrim( $site['url'], '/' ) . '/wp-admin/themes.php'
											);
										}
										if( $site['plugins'] ) {
											printf( '<a class="site-url site-plugins" href="%s">Plugins</a>&nbsp;',
												rtrim( $site['url'], '/' ) . '/wp-admin/plugins.php'
											);
										}
									}
								?>
							</div>
						</div>
					<?php } ?>
				</section><!-- .more-sites -->

			</div><!-- .sites-wrap -->

		</div><!-- #page -->
	</body>
</html>