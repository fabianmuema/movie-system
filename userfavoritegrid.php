<?php

require 'includes/main_header.php';

?>

<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>Edward kennedy’s profile</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Favorite movies</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="user-information">
					<div class="user-img">
						<a href="#"><img src="images/uploads/user-img.png" alt=""><br></a>
						<a href="#" class="redbtn">Change avatar</a>
					</div>
					<div class="user-fav">
						<p>Account Details</p>
						<ul>
							<li><a href="userprofile.php">Profile</a></li>
							<li class="active"><a href="userfavoritegrid.php">Favorite movies</a></li>
						</ul>
					</div>
					<div class="user-fav">
						<p>Others</p>
						<ul>
							<li><a href="#">Change password</a></li>
							<li><a href="#">Log out</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-12 col-xs-12" style="margin-top: -260px">
				<div class="topbar-filter user">
					<p>Found <span>1,608 movies</span> in total</p>
					<label>Sort by:</label>
					<select>
						<option value="range">-- Choose option --</option>
						<option value="saab">-- Choose option 2--</option>
					</select>
					<a href="userfavoritegrid.php" class="grid"><i class="ion-grid active"></i></a>
				</div>
				<div class="flex-wrap-movielist grid-fav">
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv1.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv2.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item3.jpg" alt="">
						</a>
					</div>


					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item4.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv3.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv4.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv5.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item1.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item2.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-it10.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-it11.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-it12.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item6.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item7.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item8.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-it9.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item9.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item10.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item11.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1 style-3">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item12.jpg" alt="">
						</a>
					</div>
				</div>
				<div class="topbar-filter">
					<label>Movies per page:</label>
					<select>
						<option value="range">20 Movies</option>
						<option value="saab">10 Movies</option>
					</select>

					<div class="pagination2">
						<span>Page 1 of 2:</span>
						<a class="active" href="#">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#">...</a>
						<a href="#">78</a>
						<a href="#">79</a>
						<a href="#"><i class="ion-arrow-right-b"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php

include 'includes/main_footer.php';

?>