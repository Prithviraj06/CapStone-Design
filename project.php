<?php
$localhost = "localhost";
$dbun = "root";
$dbpw = "Thinkblue76";
$dbname = "capstone_reg_test";

$connect = mysqli_connect($localhost,$dbun,$dbpw,$dbname);

# Action after Submit button is clicked to update project table
if (isset($_POST["submit"]))
 {
	 #get file name
  if ($_FILES['file']['name']) {
    $filename = explode(".",$_FILES['file']['name']);
    if($filename[1] == 'csv')
    {
      $handle = fopen($_FILES['file']['tmp_name'],"r");
	  
      while ($data = fgetcsv($handle))
      {
        // code...
        $col1= mysqli_real_escape_string($connect, $data[0]);
        $col2= mysqli_real_escape_string($connect, $data[1]);
        $col3= mysqli_real_escape_string($connect, $data[2]);
        $col4= mysqli_real_escape_string($connect, $data[3]);
        $col5= mysqli_real_escape_string($connect, $data[4]);
        $col6= mysqli_real_escape_string($connect, $data[5]);

        $sql = "INSERT INTO project (project_id, name, description, status, start_date, end_date) VALUES ('$col1','$col2','$col3','$col4','$col5','$col6') ON DUPLICATE KEY UPDATE 
			project_id = '$col1',
			name = '$col2', 
			description = '$col3', 
			status = '$col4',
			start_date = '$col5', 
			end_date = '$col6'";
        mysqli_query($connect,$sql);
      }	  
	  fclose($handle);
      print "Import Done";
    }

  }
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Show and Import to Table</title>
  </head>
  <body>
	<table>
		<tr>
			<th>project_id</th>
			<th>name</th>
			<th>description</th>
			<th>status</th>
			<th>start_date</th>
			<th>end_date</th>
		<tr>
		<?php
		$localhost = "localhost";
		$dbun = "root";
		$dbpw = "Thinkblue76";
		$dbname = "capstone_reg_test";

		$connect = mysqli_connect($localhost,$dbun,$dbpw,$dbname);

		$query = "SELECT * FROM project ORDER BY status, start_date";
		#$result = mysqli_query($connect,$query) or die("Bad Query: $query");
		$result = $connect-> query($query);
		
		if ($result-> num_rows > 0) {
			while ($row = $result-> fetch_assoc()){
				echo"</tr><td>".$row['project_id']."</td><td>".$row['name']."</td><td>".$row['description']."</td><td>".$row['status']."</td><td>".$row['start_date']."</td><td>".$row['end_date']."</td><tr>";
			}
		}
		else{
			echo "table is empty";
		}
		$connect-> close();
		?>
	</table>
	<br>
    <form  method="post" enctype="multipart/form-data">
      <label>Upload CSV: <input type="file" name="file">
      <input type="submit" name="submit">

    </form>

  </body>
</html>
