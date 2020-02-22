<?php

require 'includes/main_header.php';

?>


<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="topbar-filter fw">
					<p>Found <span>1,608 movies</span> in total</p>
					<label>Sort by:</label>
					<select>
						<option value="popularity">Popularity Descending</option>
						<option value="popularity">Popularity Ascending</option>
						<option value="rating">Rating Descending</option>
						<option value="rating">Rating Ascending</option>
						<option value="date">Release date Descending</option>
						<option value="date">Release date Ascending</option>
					</select>
					<a href="moviegridfw.php" class="grid"><i class="ion-grid active"></i></a>
				</div>
				<div class="flex-wrap-movielist mv-grid-fw">
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv1.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv2.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item3.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item4.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv3.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv4.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv5.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item1.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item2.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-it10.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-it11.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-it12.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item6.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item7.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item8.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-it9.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item9.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item10.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item11.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv-item12.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv1.jpg" alt="">
						</a>
					</div>
					<div class="movie-item-style-2 movie-item-style-1">
						<a href="moviesingle.php">
							<img src="images/uploads/mv2.jpg" alt="">
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

require 'includes/main_footer.php';

?>