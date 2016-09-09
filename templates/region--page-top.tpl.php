<?php if(!empty($content)) : ?>
	<?php print $content; ?>
	<div class="header1 has-toolbar">
<?php else : ?>
	<div class="header1">
<?php endif; ?>

<header class="navbar-fixed-top" role="banner">
<!-- pre header -->
			<div id="preHeader" class="hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-xs-8">
                <ul class="ugaLink list-inline">
                  <li id="skipNav" style="border-right:1px solid #eaeaea"><a href="#mainContent">Skip to Main Content</a> </li>
									<li id="skipNav" style="border-right:1px solid #eaeaea"><a href="https://studentaffairs.uga.edu/site/content_page/accessibility">Accessibility</a> </li>
                  <li style="border-right:1px solid #eaeaea">
                      <a href="https://studentaffairs.uga.edu/" class="tips" title="" target="_blank" data-original-title="Go to The University of Georgia main website">
                          <span class="ugaLink" style="border:none;">UGA STUDENT AFFAIRS</span>
                      </a>
                  </li>
									<?php print render($user_menu); ?>
                </ul>
						</div>
            <div class="col-xs-4">
							<div id="contactBloc" style="display:none;">
<!-- social icons -->
								<ul class="socialNetwork">
									<li>
										<a href="https://www.facebook.com/" class="tips" title="" target="_blank" data-original-title="Follow Disability Resource Center on Facebook">
											<img src="https://studentaffairs.uga.edu/images/icons/facebook_icon_pre_header.png" alt="Go to Disability Resource Center Facebook page">
										</a>
									</li>
									<li>
										<a href="https://twitter.com/" class="tips" title="" target="_blank" data-original-title="Follow Disability Resource Center on Twitter">
											<img src="https://studentaffairs.uga.edu/images/icons/twitter_icon_pre-header.png" alt="Go to Disability Resource Center Twitter page">
										</a>
									</li>
									<li>
										<a href="http://instagram.com/" class="tips" title="" target="_blank" data-original-title="Follow Disability Resource Center on instagram">
											<img src="https://studentaffairs.uga.edu/images/icons/instagram_icon_pre_header.png" alt="Go to Disability Resource Center Instagram page">
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- header -->
			<div id="mainHeader">
				<div class="container">
					<nav class="navbar navbar-default scrollMenu" role="navigation">
                        <div id="searchbar" class="col-md-3" role="search" aria-labelledby="searchbar">
<!--main search bar -->
<?php if(!empty($search_box)) : ?>
	<?php print $search_box; ?>
<?php endif; ?>

						</div>
						<div class="navbar-header">
<!-- responsive navigation toggle button-->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainMenu">
								<span class="sr-only" style="color:#ffffff;">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
<!-- Logo -->
<div><a class="navbar-brand" href="/">
										<img src="<?php print $logo_url; ?>" alt="UGA Disability Resource Center" class="img img-responsive" id="main_logo"/>
								</a>
</div>
						<div class="collapse navbar-collapse" id="mainMenu">
<!-- mobile searchbar -->
                            <div id="searchbar_mobile" class="input-group input-group-sm" role="search" aria-labelledby="searchbar_mobile" style="width:100%;">

                            </div>
							<!-- Main navigation -->
							<?php print render($dropdown_menu); ?>
						</div>
					</nav>
				</div>
			</div>
		</header>
	</div>
