<?php include('functions.php'); 
$college="Discussion Forum";
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="main.css">
	<meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Elements</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
</head>







<body>





	 <header class="header_area white-header">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="index.html">
              <img class="logo-2" src="img/logo2.png" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >

              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about-us.html">About</a>
                </li>
                <li class="nav-item submenu dropdown active">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Pages</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="courses.html">Courses</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="course-details.html"
                        >Course Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="elements.html">Elements</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Blog</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="single-blog.html"
                        >Blog Details</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2><?php printf($college); ?></h2>
                <div class="page_link">
                  <a href="index.html">Home</a>
                  <a href="elements.html">Elements</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




	<div class="whole-wrap">
		<div class="container">
		
			
			<div class="section-top-border">
				<h3 class="mb-30 title_color">Computer Science</h3>
			  <div>



		<div id="title" class="col-md-6 col-md-offset-3 post">
			<h2><?php echo $post['title'] ?></h2>
			<p><?php echo $post['body']; ?></p>
		</div>
		<div id="body" class="col-md-6 col-md-offset-3 comments-section">
			<!-- if user is not signed in, tell them to sign in. If signed in, present them with comment form -->
			<?php if (isset($user_id)): ?>
				<form class="clearfix" action="post_details.php" method="post" id="comment_form">
					<textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
					<button class="btn btn-primary btn-sm pull-right" id="submit_comment">Submit comment</button>
				</form>
			<?php else: ?>
				<div class="well" style="margin-top: 20px;">
					<h4 class="text-center"><a href="#">Sign in</a> to post a comment</h4>
				</div>
			<?php endif ?>
			<!-- Display total number of comments on this post  -->
			<h2><span id="comments_count"><?php echo count($comments) ?></span> Comment(s)</h2>
			<hr>
			<!-- comments wrapper -->
			<div id="comments-wrapper">
			<?php if (isset($comments)): ?>
				<!-- Display comments -->
				<?php foreach ($comments as $comment): ?>
				<!-- comment -->
				<div class="comment clearfix">
					<img src="profile.png" alt="" class="profile_pic">
					<div class="comment-details">
						<span class="comment-name"><?php echo getUsernameById($comment['user_id']) ?></span>
						<span class="comment-date"><?php echo date("F j, Y ", strtotime($comment["created_at"])); ?></span>
						<p><?php echo $comment['body']; ?></p>
						<a class="reply-btn" href="#" data-id="<?php echo $comment['id']; ?>">reply</a>
					</div>
					<!-- reply form -->
					<form action="post_details.php" class="reply_form clearfix" id="comment_reply_form_<?php echo $comment['id'] ?>" data-id="<?php echo $comment['id']; ?>">
						<textarea class="form-control" name="reply_text" id="reply_text" cols="30" rows="2"></textarea>
						<button class="btn btn-primary btn-xs pull-right submit-reply">Submit reply</button>
					</form>

					<!-- GET ALL REPLIES -->
					<?php $replies = getRepliesByCommentId($comment['id']) ?>
					<div class="replies_wrapper_<?php echo $comment['id']; ?>">
						<?php if (isset($replies)): ?>
							<?php foreach ($replies as $reply): ?>
								<!-- reply -->
								<div class="comment reply clearfix">
									<img src="profile.png" alt="" class="profile_pic">
									<div class="comment-details">
										<span class="comment-name"><?php echo getUsernameById($reply['user_id']) ?></span>
										<span class="comment-date"><?php echo date("F j, Y ", strtotime($reply["created_at"])); ?></span>
										<p><?php echo $reply['body']; ?></p>
										<a class="reply-btn" href="#">reply</a>
									</div>
								</div>
							<?php endforeach ?>
						<?php endif ?>
					</div>
				</div>
					<!-- // comment -->
				<?php endforeach ?>
			<?php else: ?>
				<h2>Be the first to comment on this post</h2>
			<?php endif ?>
			</div><!-- comments wrapper -->
		</div><!-- // all comments -->










 </div>
				</div>
			</div>
			
			
			</div>
		</div>
	</div>
	<!-- End Align Area -->

	<!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
			<div class="container">
			  <div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
				  <h4>Top Products</h4>
				  <ul>
					<li><a href="#">Managed Website</a></li>
					<li><a href="#">Manage Reputation</a></li>
					<li><a href="#">Power Tools</a></li>
					<li><a href="#">Marketing Service</a></li>
				  </ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
				  <h4>Quick Links</h4>
				  <ul>
					<li><a href="#">Jobs</a></li>
					<li><a href="#">Brand Assets</a></li>
					<li><a href="#">Investor Relations</a></li>
					<li><a href="#">Terms of Service</a></li>
				  </ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
				  <h4>Features</h4>
				  <ul>
					<li><a href="#">Jobs</a></li>
					<li><a href="#">Brand Assets</a></li>
					<li><a href="#">Investor Relations</a></li>
					<li><a href="#">Terms of Service</a></li>
				  </ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
				  <h4>Resources</h4>
				  <ul>
					<li><a href="#">Guides</a></li>
					<li><a href="#">Research</a></li>
					<li><a href="#">Experts</a></li>
					<li><a href="#">Agencies</a></li>
				  </ul>
				</div>
				<div class="col-lg-4 col-md-6 single-footer-widget">
				  <h4>Newsletter</h4>
				  <p>You can trust us. we only send promo offers,</p>
				  <div class="form-wrap" id="mc_embed_signup">
					<form
					  target="_blank"
					  action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
					  method="get"
					  class="form-inline"
					>
					  <input
						class="form-control"
						name="EMAIL"
						placeholder="Your Email Address"
						onfocus="this.placeholder = ''"
						onblur="this.placeholder = 'Your Email Address'"
						required=""
						type="email"
					  />
					  <button class="click-btn btn btn-default">
						<span>subscribe</span>
					  </button>
					  <div style="position: absolute; left: -5000px;">
						<input
						  name="b_36c4fd991d266f23781ded980_aefe40901a"
						  tabindex="-1"
						  value=""
						  type="text"
						/>
					  </div>
	  
					  <div class="info"></div>
					</form>
				  </div>
				</div>
			  </div>
			  <div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
				  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
				<div class="col-lg-4 col-sm-12 footer-social">
				  <a href="#"><i class="ti-facebook"></i></a>
				  <a href="#"><i class="ti-twitter"></i></a>
				  <a href="#"><i class="ti-dribbble"></i></a>
				  <a href="#"><i class="ti-linkedin"></i></a>
				</div>
			  </div>
			</div>
		  </footer>
		  <!--================ End footer Area  =================-->
	  
		  <!-- Optional JavaScript -->
		  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		  <script src="js/jquery-3.2.1.min.js"></script>
		  <script src="js/popper.js"></script>
		  <script src="js/bootstrap.min.js"></script>
		  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
		  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
		  <script src="js/owl-carousel-thumb.min.js"></script>
		  <script src="js/jquery.ajaxchimp.min.js"></script>
		  <script src="js/mail-script.js"></script>
		  <!--gmaps Js-->
		  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
		  <script src="js/gmaps.min.js"></script>
		  <script src="js/theme.js"></script>













<!-- Javascripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="scripts.js"></script>
</body>
</html>