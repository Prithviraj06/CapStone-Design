<?php
$connect = mysqli_connect("localhost","root","Prna.123","capstone_reg");

if (isset($_POST["submit"]))
 {
  if ($_FILES['file']['name']) {
    $filename = explode(".",$_FILES['file']['name']);
    if($filename[1] == 'csv')
    {
      $handle = fopen($_FILES['file']['tmp_name'],"r");
      while ($data = fgetcsv($handle))
      {
        // code...
        $item1= mysqli_real_escape_string($connect, $data[0]);
        $item2= mysqli_real_escape_string($connect, $data[1]);
        $item3= mysqli_real_escape_string($connect, $data[2]);
        $item4= mysqli_real_escape_string($connect, $data[3]);
        $item5= mysqli_real_escape_string($connect, $data[4]);
        $item6= mysqli_real_escape_string($connect, $data[5]);
        $item7= mysqli_real_escape_string($connect, $data[6]);
        $item8= mysqli_real_escape_string($connect, $data[7]);
        $item9= mysqli_real_escape_string($connect, $data[8]);
        $item10= mysqli_real_escape_string($connect, $data[9]);
        $item11= mysqli_real_escape_string($connect, $data[10]);
        $item12= mysqli_real_escape_string($connect, $data[11]);
        $item13= mysqli_real_escape_string($connect, $data[12]);
        $item14= mysqli_real_escape_string($connect, $data[13]);

        $sql = "INSERT INTO student (student_id,project_id,first_name, last_name,email, perm_email, current_term, grad_term, admit_term, term_gpa, cumulative_gpa, in_progress_units, cumulative_units, status) \n
                VALUES ('$item1',' $item2',' $item3',' $item4',' $item5',' $item6',' $item7',' $item8',' $item9',' $item10',' $item11',' $item12', ' $item13', '$item14')";
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
    <title></title>
  </head>
  <body>
    <form  method="post" enctype="multipart/form-data">
      Upload CSV: <input type="file" name="file">
      <input type="submit" name="submit" value="import">

    </form>

  </body>
</html>
