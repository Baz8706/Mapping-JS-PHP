<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Index</title>
</head>
<body>
<br />
<header>
<h1>Points of Interest - Index</h1>
<h3>SWD601</h3>
<p>Darryl Cooper</p>
</header>
<br/>
<div id='search'>
<h2>Requirement 1 - POI Search</h2>
	<fieldset>
		<legend>Search By Region, Type or Both</legend>
		<p>Enter the region and select the point of interest type. If region is left blank all POIs of the type selected will be returned, if region is set and the type of any is selected all POIs in that region will be returned regardless of type.</p>
			<form class='log' method='get' action='POI/POI_LOOKUP.php'>
				<label for='region'>Region: </label>
				<input type='text' id='region' name='region'/>
				<label for='type'>Type: </label>
				<select id='type' name='type'>
					<option value='any'>All</option>
					<option value='city'>City</option>
					<option value='hill'>Hill</option>
					<option value='industrial estate'>Industrial Estate</option>
					<option value='moor'>Moor</option>
					<option value='pub'>Pub</option>
					<option value='restaurant'>Restaurant</option>
					<option value='touristsite'>Tourist site</option>
					<option value='town'>Town</option>
				</select>
				<input type='submit' value='Search' />
			</form>
	</fieldset>
</div>
<div id='addpoi'>
<h2>Requirement 2 - Add POI</h2>	
<a href="http://edward2.solent.ac.uk/phpMyAdmin">phpMyAdmin</a>			
			<form class='log' method='post' action='POI/ADDPOI.php'>
		<fieldset>
				<legend>Credentials</legend>
				<label for="username">Username: </label>
				<input type="text" id="user" name="user"/>
				<label for="password">Password: </label>
				<input type="password" id="pass" name="pass"/>
		</fieldset>
		<fieldset>
				<legend>POI Details</legend>
				<label for="name">Name: </label>
				<input type="text" name="name" id="name"/>
				<label for="country">Country: </label>
				<input type="country" id="country" name="country"/>
				<label for='region'>Region: </label>
				<input type='text' id='region' name='region'/>
				<label for='type'>Type: </label>
				<select id='type' name='type'>
					<option value='-'>-</option>
					<option value='city'>City</option>
					<option value='hill'>Hill</option>
					<option value='industrial estate'>Industrial Estate</option>
					<option value='moor'>Moor</option>
					<option value='pub'>Pub</option>
					<option value='restaurant'>Restaurant</option>
					<option value='touristsite'>Tourist site</option>
					<option value='town'>Town</option>
				</select>
				<label for="decsc">Description: </label>
				<input type="text" name="desc" id="desc"/>
				<label for="lon">Lon: </label>
				<input type="number" name="lon" id="lon"/>
				<label for="lat">Lat: </label>
				<input type="number" name="lat" id="lat"/>
				<input type='submit' value='Add POI' />
			</form>
	</fieldset>
				<div id="reviewpoi">
				<h2>Requirement 3 - Review POI</h2>
				<a href="http://edward2.solent.ac.uk/phpMyAdmin">phpMyAdmin</a>	
				<form class="log" method="post" action="POI/ADDREVIEW.php">
				<fieldset>
				<legend>Credentials</legend>
				<label for="username">Username: </label>
				<input type="text" id="user" name="user"/>
				<label for="password">Password: </label>
				<input type="password" id="pass" name="pass"/>
				</fieldset>
				<fieldset>
				<legend>Review Details</legend>
				<label for="id">POI ID: </label>
				<input type="number" id="id"  name="id"/>
				<label for="rev">Review: </label>
				<input type="text" id="rev" name="rev"/>
				<input type="submit" value="Add Review"/>
				</fieldset>
				</form>
				</div>
	<div id="frontend">
		<h2>Requirement 4 - POI Front End</h2>
		<fieldset>
		<legend>POI Front End</legend>
		<p>The Points of Interest front end features a dedicated button<img src="panels.png"> which when clicked will allow the user to search for a POI, the search operates as that of requirement 1.</p>
		<p><a href="POI/POI_HOME.html"><img src="kayak.png">Points of Interest</a></p>
		</fieldset>
	</div>
	<div id="visith">
		<h2>Requirement 5 - VisitHampshire</h2>
		<fieldset>
		<legend>VisitHampshire</legend>
		<p>The VisitHampshire site is implemented using php in order to take adavantage of cURL to connect to requirement 1 as a webservice. The region of Hampshire is predefined within the php code to allow for POIs for only that region to be returned.</p>
		<p><a href="POI/HAMP/VISITH.php"><img src="map.png">VisitHampshire</a></p>
		</fieldset>
	</div>	
	<div id="frontend2">
		<h2>Requirement 6 - POI Mapping</h2>
		<fieldset>
		<legend>POI Mapping</legend>
		<p>The Points of Interest front end incorperates mapping via the Leaflet javascript library, this combined with location services and the search facility(1) allows for a user to search for POIs and will present them with a list of results aswell as pins placed on the map to denote the location of each POI returned from their search.</p>
		<p><a href="POI/POI_HOME.html"><img src="kayak.png">Points of Interest</a></p>
		</fieldset>
	</div>
		<div id="visith2">
		<h2>Requirement 7 - VisitHampshire Reviews</h2>
		<fieldset>
		<legend>VisitHampshire Reviews</legend>
		<p>When a user searches each result returned includes a link that allows for them to add a review of a chosen POI, this is implemented by capturing the ID of the POI and passing it to a POST form, this aswell as the VisitHampshire login info are ecapsulated witin hidden fields and sent to the webservice(3) in order to verified and the review added.</p>
		<p><a href="POI/HAMP/VISITH.php"><img src="map.png">VisitHampshire</a></p>
		</fieldset>
	</div>
	</div>
		<div id="frontend3">
		<h2>Requirement 8 - Adding a POI</h2>
		<fieldset>
		<legend>Adding a POI</legend>
		<p>The POI front end can allow for the addition of a POI via two routes, by using javascript event handlers the user can click a location on the map or by clicking a dedicated button <img src="map2.png">. Clicking the map will auto fill the longitude and lattitude input fields,</p>
		<p>clicking the button will leave these fields blank for the user to define themselves but in both cases if the user is valid and all required fields completed and valid the POI will be added and displayed on the map.</p>
		<p><a href="POI/POI_HOME.html"><img src="kayak.png">Points of Interest</a></p>
		</fieldset>
	</div>	
		</div>
		<div id="frontend4">
		<h2>Requirement 9 - Current Area Pin Generation</h2>
		<fieldset>
		<legend>Auto Pin Generation</legend>
		<p>In order to implement this feature the map view boundries had to be captured each time the map view was changed, capturing these and passing them to a new webservice which using the values would query the database and return POIs within these boundries.</p>
		<p>The POIs returned from each query were added to the map using their lon and lat values, each pin included the POI details and the ability to review them. This feature can be toggled using a button placed above the map.</p> 
		<p><a href="POI/POI_HOME.html"><img src="kayak.png">Points of Interest</a></p>
		</fieldset>
		<form class='log' method='get' action='POI/APINS.php'>
		<fieldset>
		<legend>Add Pins Web Service</legend>
		<label for="north">North:</label>
		<input type="number" step="any" name="north" id="north">
		<label for="south">South:</label>
		<input type="number" step="any" name="south" id="south">
		<label for="east">East:</label>
		<input type="number" step="any" name="east" id="east">
		<label for="west">West:</label>
		<input type="number" step="any" name="west" id="west">
		<input type="submit" value="Submit"/>
		</fieldset>
		</form>
	</div>
	<div id="frontend5">
			<h2>Requirement 10 - POI Front End Review</h2>
		<fieldset>
		<legend>POI Front End Review</legend>
		<p>This feature was implemented using the review web service(3) in a similar way to requirement 8, pins generated on the map from a search or by dragging would be bound to popups that included elements generted using the DOM.</p>
		<p>Each pop up is bound to each pin within the loop as well as the html DOM elements, the button element captures each record's ID and combined with an event listener can used in order to implment reviews.</p>
		<p><a href="POI/POI_HOME.html"><img src="kayak.png">Points of Interest</a></p>
		</fieldset>
	</div>
<footer>

</footer>
</body>
</html>