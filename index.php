<!DOCTYPE html>
<html>
	<head>
		<title>Hotel Fantastique</title>
		<link rel="stylesheet" href="css.css" />
		<!--[if lt IE 9]>
		<script>
			document.createElement('header');
			document.createElement('nav');
			document.createElement('section');
			document.createElement('article');
			document.createElement('aside');
			document.createElement('footer');
		</script>
		<![endif]-->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	</head>
	
	<body>
	
		<header class="header">
			<h1 class="hotel_name">Hotel Fantastique <span class="stars">★★★★★</span></h1>
			<address class="hotel_address">72b Rue de Awesome, 75001, Paris, France</address>
		</header>
		
		<section class="photos" id="slider">
			<div>
				<div class="main_image">
					<a href="#" class="buttonsprite prev"></a>
					<a href="#" class="buttonsprite next"></a>
					<img src="img/1_large.jpg">
					<div class="textshow">test</div>
				</div>
				<div id="mapdiv" style="width:294px;height:390px; float:right;">map div</div>
			</div>

			<ul class="container">
				<li class="one_photo"><span></span><img src="img/1_thumb.jpg" alt="description of photo 1" /></li>
				<li class="one_photo"><span></span><img src="img/2_thumb.jpg" alt="description of photo 2" /></li>
				<li class="one_photo"><span></span><img src="img/3_thumb.jpg" alt="description of photo 3" /></li>
				<li class="one_photo"><span></span><img src="img/4_thumb.jpg" alt="description of photo 4" /></li>
				<li class="one_photo active"><span></span><img src="img/5_thumb.jpg" alt="description of photo 5" /></li>
				<li class="one_photo"><span></span><img src="img/6_thumb.jpg" alt="description of photo 6" /></li>
				<li class="one_photo"><span></span><img src="img/7_thumb.jpg" alt="description of photo 7" /></li>
				<li class="one_photo"><span></span><img src="img/8_thumb.jpg" alt="description of photo 8" /></li>
				<li class="one_photo"><span></span><img src="img/9_thumb.jpg" alt="description of photo 9" /></li>
				<li class="one_photo"><span></span><img src="img/10_thumb.jpg" alt="description of photo 10" /></li>
				<li class="one_photo"><span></span><img src="img/11_thumb.jpg" alt="description of photo 11" /></li>
				<li class="one_photo"><span></span><img src="img/12_thumb.jpg" alt="description of photo 12" /></li>
				<li class="one_photo"><span></span><img src="img/13_thumb.jpg" alt="description of photo 13" /></li>
				<li class="one_photo"><span></span><img src="img/14_thumb.jpg" alt="description of photo 14" /></li>
			</ul>
		</section>
		
		<section class="description">
			<h2>Description</h2>
			<p>Located in the heart of Paris, this 5-star hotel offers elegant guest rooms in a Hausmannian-style building. It features a fitness centre, a concierge and a tour desk with ticket service.</p>
			<p>Decorated in a unique style, the air-conditioned guest rooms at the Hotel du Louvre are equipped with satellite TV, a minibar and free Wi-Fi access. Some rooms feature a seating area. All rooms have a private bathroom, some include marble features.</p>
			<p>The hotel restaurant, Brasserie du Louvre, has a traditional Parisian decor and serves traditional French cuisine. A buffet breakfast is served every morning. Guests can also enjoy a cocktail and jazz evenings twice a week in the Defender Bar.</p>
			<p>The 4 facades and terrace of this hotel overlook the famous Louvre Museum, the Opéra Garnier and the Comédie Française theatre.</p>
			<p>Hotel du Louvre is situated 2 minutes from Palais Royal Metro Station, providing direct access to the Champs Elysees and the Place de la Bastille. Public parking is available nearby.</p>
		</section>
		
		<section class="facilities">
			<h2>Facilities</h2>
			<ul>
				<li>Free Wifi</li>
				<li>Swimming Pool</li>
				<li>Gym</li>
				<li>24/7 reception</li>
				<li>Concierge</li>
				<li>Restaurant</li>
				<li>Free Parking</li>
				<li>Shoe-Shine</li>
				<li>Satellite TV</li>
				<li>Room Service</li>
			</ul>
		</section>
		
		<section class="rooms">
			<h2>Select Your Room</h2>
			<form method="post" action="" class="rooms_table_form">
				<table class="rooms_table" cellspacing="0" cellpadding="0">
					<thead>
						<tr>
							<th class="room_name">Room Name</th>
							<th class="room_occupancy">Occupancy</th>
							<th class="room_price">Price per Room</th>
							<th class="room_quantity">No. Rooms</th>
						</tr>
					</thead>
					<tbody>
						<tr class="one_room">
							<td class="room_name">Basic 2 Bed</td>
							<td class="room_occupancy">2</td>
							<td class="room_price">&euro;88.99</td>
							<td class="room_quantity">
								<select name="room[basic2]">
									<option value="0" selected="selected">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>
						</tr>
						<tr class="one_room">
							<td class="room_name">Basic Family Room</td>
							<td class="room_occupancy">4</td>
							<td class="room_price">&euro;98.99</td>
							<td class="room_quantity">
								<select name="room[basicfamily]">
									<option value="0" selected="selected">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>
						</tr>
						<tr class="one_room">
							<td class="room_name">Deluxe 2 Bed</td>
							<td class="room_occupancy">2</td>
							<td class="room_price">&euro;109.99</td>
							<td class="room_quantity">
								<select name="room[deluxe2]">
									<option value="0" selected="selected">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>
						</tr>
						<tr class="one_room">
							<td class="room_name">Deluxe Family Room</td>
							<td class="room_occupancy">7</td>
							<td class="room_price">&euro;112.99</td>
							<td class="room_quantity">
								<select name="room[deluxefamily]">
									<option value="0" selected="selected">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>
						</tr>
						<tr class="one_room">
							<td class="room_name">Bridal Suite</td>
							<td class="room_occupancy">2</td>
							<td class="room_price">&euro;167.99</td>
							<td class="room_quantity">
								<select name="room[bridalsuite]">
									<option value="0" selected="selected">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>
						</tr>
						<tr class="one_room">
							<td class="room_name">President Suite</td>
							<td class="room_occupancy">2</td>
							<td class="room_price">&euro;301.99</td>
							<td class="room_quantity">
								<select name="room[presidentsuite]">
									<option value="0" selected="selected">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>
						</tr>
						<tr class="one_room">
							<td class="room_name">One+One</td>
							<td class="room_occupancy">2</td>
							<td class="room_price">&euro;78.99</td>
							<td class="room_quantity">
								<select name="room[oneplusone]">
									<option value="0" selected="selected">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>
						</tr>
						<tr class="one_room">
							<td class="room_name">Single Room</td>
							<td class="room_occupancy">1</td>
							<td class="room_price">&euro;28.99</td>
							<td class="room_quantity">
								<select name="room[single]">
									<option value="0" selected="selected">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>
						</tr>
						<tr class="one_room">
							<td class="room_name">Queen Room</td>
							<td class="room_occupancy">2</td>
							<td class="room_price">&euro;99.99</td>
							<td class="room_quantity">
								<select name="room[queen]">
									<option value="0" selected="selected">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>
						</tr>
						<tr class="one_room">
							<td class="room_name">Basement 1 Bed</td>
							<td class="room_occupancy">2</td>
							<td class="room_price">&euro;9.99</td>
							<td class="room_quantity">
								<select name="room[basement1]">
									<option value="0" selected="selected">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>
						</tr>
						<tr class="one_room">
							<td class="room_name">Mega XL Suite</td>
							<td class="room_occupancy">9</td>
							<td class="room_price">&euro;412.99</td>
							<td class="room_quantity">
								<select name="room[megaxl]">
									<option value="0" selected="selected">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</td>
						</tr>																																																		
					</tbody>
					<tfoot>
						<tr>
							<td colspan="4">
								<button class="button" type="submit">Book Now</button>
							</td>
						</tr>
					</tfoot>
				</table>
			</form>
		</section>

		<section class="reviews">
			<h2>Reviews</h2>
			<select id="ddlReviewOrder" onchange="reviewObject.sortReviews(this.value)">
			<option value="2">Sort By: Popularity</option>
			<option value="1" selected>Sort By: Low to High</option>
			<option value="0">Sort By: High to Low</option>
			</select>
			<ul class="reviews_list" id="reviews_list">
					
			</ul>

			<div id="dvPagination">
				Pagination
			</div>
		</section>

		<section class="similar-hotels" >
			<h2>Similar Hotels</h2>
			<ul id="similar-hotels"></ul>
		</section>
		
		<section class="footer">
			&copy;2014 Booking.com
		</section>
		
		<script src="jquery-1.11.1.min.js"></script>
		<script src="constants.json"></script>
		<script src="js.js"></script>

	</body>
</html>