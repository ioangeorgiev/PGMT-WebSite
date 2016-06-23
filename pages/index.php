<?php 
	
	mysql_connect("localhost", "root", "password") or die("could not connect");
	mysql_select_db("search_form") or die("could not find db!");
	$output = '';

	// collect

	if(isset($_POST['search'])) {
		$searchq = $_POST['search'];
		$searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);


		$query = mysql_query("SELECT * FROM members WHERE firstname LIKE '%$searchq%' OR lastname LIKE'%$searchq%'") or die("could not search!");

		$count = mysql_num_rows($query);

		if($count == 0) {
			$output = 'There was no search results!';
		} else {
			while($row = mysql_fetch_array($query)) {
				$fname = $row['firstname'];
				$lname = $row['lname'];
				$id = $row['ic'];

				$output = '<div>'.$fname.' '.$lname.'</div>';
			}
		}
	}

?>

<?php print("$output");?>