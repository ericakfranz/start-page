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
					<input type="text" name="q" placeholder="Search Googlez" autofocus="autofocus">
				</form>
			</div><!-- .google-search-form -->

			<div class="sites-wrap clearfix">

				<section class="my-sites section clearfix">
					<h3 class="section-title">SDavis Media & Projects</h3>
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
								<?php if( $site['wordpress'] ) {?>
									<a class="site-url site-admin" href="<?php echo rtrim( $site['url'], '/' ) . '/wp-admin/'; ?>">Admin</a>
								<?php } ?>
							</div>
						</div>
					<?php } ?>
					<div class="my-links">
						<h4 class="subtitle">My Links:</h4>
						<?php foreach( $my_links as $link ) { ?>
							<a class="random-links" href="<?php echo $link['url']; ?>">
								<img class="link-favicon" src="<?php echo $link['favicon']; ?>">
								<span class="link-title"><?php echo $link['name']; ?></span>
							</a>
						<?php } ?>
					</div>
				</section><!-- .my-sites -->

				<section class="edd-links section clearfix">
					<h3 class="section-title">Easy Digital Downloads</h3>
					<?php foreach( $edd_links as $edd ) { ?>
						<div class="site <?php echo $edd['id']; ?>">
							<div class="site-meta">
								<a class="site-title-link" href="<?php echo $edd['url']; ?>">
									<img class="site-favicon" src="<?php echo $edd['favicon']; ?>">
									<h4 class="site-title"><?php echo $edd['name']; ?></h4>
								</a>
							</div>
							<div class="site-links">
								<a class="site-url view-site" href="<?php echo $edd['url']; ?>">Site</a>
								<a class="site-url site-admin" href="<?php echo rtrim( $edd['url'], '/' ) . '/wp-admin/'; ?>">Admin</a>
								<a class="site-url site-docs" href="http://docs.easydigitaldownloads.com/">Docs</a>
							</div>
						</div>
					<?php } ?>
					<div class="site-resources">
						<div class="resources">
							<div class="resource-section">
								<h4 class="resource-section-title">Support Collective</h4>
								<div class="resource-group clearfix">
									<?php foreach( $edd_support as $support ) { ?>
										<div class="resource half">
											<img class="site-favicon" src="<?php echo $support['favicon']; ?>">
											<a class="resource-link" href="<?php echo $support['url']; ?>"><?php echo $support['name']; ?></a>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="resource-section">
								<h4 class="resource-section-title">GitHub Organization</h4>
								<div class="resource-group clearfix">
									<?php foreach( $edd_github as $gh ) { ?>
										<div class="resource half">
											<img class="site-favicon" src="<?php echo $gh['favicon']; ?>">
											<a class="resource-link" href="<?php echo $gh['url']; ?>"><?php echo $gh['name']; ?></a>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="resource-section">
								<h4 class="resource-section-title">Trello Organization</h4>
								<div class="resource-group clearfix">
									<?php foreach( $edd_trello as $trello ) { ?>
										<div class="resource half">
											<img class="site-favicon" src="<?php echo $trello['favicon']; ?>">
											<a class="resource-link" href="<?php echo $trello['url']; ?>"><?php echo $trello['name']; ?></a>
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="resource-section">
								<h4 class="resource-section-title">Tools & Resources</h4>
								<div class="resource-group clearfix">
									<?php foreach( $edd_resources as $resource ) { ?>
										<div class="resource half">
											<img class="site-favicon" src="<?php echo $resource['favicon']; ?>">
											<a class="resource-link" href="<?php echo $resource['url']; ?>"><?php echo $resource['name']; ?></a>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</section><!-- .edd-links -->

				<section class="local-sites section clearfix">
					<h3 class="section-title">Local Development</h3>
					<?php foreach( $local_sites as $local ) { ?>
						<div class="site <?php echo $local['id']; ?>">
							<div class="site-meta">
								<a class="site-title-link" href="<?php echo $local['url']; ?>">
									<img class="site-favicon" src="<?php echo $local['favicon']; ?>">
									<h4 class="site-title"><?php echo $local['name']; ?></h4>
								</a>
							</div>
							<div class="site-links">
								<a class="site-url view-site" href="<?php echo $local['url']; ?>">Site</a>
								<?php if( $local['wordpress'] ) {?>
									<a class="site-url site-admin" href="<?php echo rtrim( $local['url'], '/' ) . '/wp-admin/'; ?>">Admin</a>
									<a class="site-url site-themes" href="<?php echo rtrim( $local['url'], '/' ) . '/wp-admin/themes.php'; ?>">Themes</a>
									<a class="site-url site-plugins" href="<?php echo rtrim( $local['url'], '/' ) . '/wp-admin/plugins.php'; ?>">Plugins</a>
								<?php } ?>
							</div>
						</div>
					<?php } ?>
				</section><!-- .local-sites -->

			</div><!-- .sites-wrap -->

		</div><!-- #page -->
	</body>
</html>