<?php
session_start();
include "setup.php";
#$_SESSION["Test"]="hello";
#echo $_SESSION["ID"];
// Start the session
/*$Date=date("Y-m-d");
print($Date."<br>");


$dateTime = new DateTime();
$date=date_format($dateTime, 'Y-m-d H:i:s');
print($date."<br>");

$Recipient=$_GET["RecipientID"];
$FName=$_GET["FName"];
$LName=$_GET["LName"];
$Amount=$_GET["Amount"];


$JobName=$_GET["JobName"];
$JobDescription=$_GET["JobDescription"];
$StartDate=$_GET["StartDate"];
$EndDate=$_GET["EndDate"];

print($_GET["Recipient"]);
print($_GET["FName"]);
print($_GET["LName"]);
print($_GET["IBAN"]);
print($_GET["Amount"]);

print($_GET["JobName"]);
print($_GET["JobDescription"]);
print($_GET["StartDate"]);
print($_GET["EndDate"]);




$conn_id = setup_connect()
 or die ("cannot connect to server");


$TraderID=$_SESSION["ID"];





$base=12345003;
$sql = "SELECT JobID FROM Jobs_Database";
$result = $conn_id->query($sql);
$rowcount=$result->num_rows;
$newrow =$rowcount+$base;
$JobID='J'.strval($newrow);
echo $JobID;


$ErrorMessage="Hello";
if($JobID==""){
  print(1111);
}

    $query = "INSERT INTO Jobs_Database
VALUES ('$JobID','$TraderID','$Recipient','$Date','$Amount','$Amount',0,0,'$date',
'$JobDescription',
'$FName','$LName',
'$JobName',
'$StartDate',
'$EndDate',
'0')";
if ($conn_id->query($query) === TRUE) {
    echo "Job Created";
} else {
    echo "Error creating user: " . $conn_id->error;
}


$conn_id->close();





#$IDNumber = $_GET['IDNumber'];
#print($IDNumber);

$ID=$_SESSION["ID"];
*/
?>


<!DOCTYPE html>
<html lang="en">

<head>

     </head>
<h2>UCC upload portal</h2>
            <h3>Contribute an exam paper</h3>
            <h6>Please select a file</h6>

            <form action="upload.php" method="post" enctype="multipart/form-data">


<select  name="course" id="course">
  <option value="Computer Science" selected="Computer Science">Computer Science</option>
  <option value="Business Information Systems">Business Information Systems</option>
  <option value="Law">Law</option>
</select>
<br>
<input type="text" name="module" placeholder="Module Code">
<br>

              <select name="year" id="year">
  <option value="2020" selected="selected">2020</option>
  <option value="2019">2019</option>
  <option value="2018">2018</option>
  <option value="2017">2017</option>
    <option value="2016">2016</option>
  <option value="2015">2015</option>
  <option value="2014">2014</option>
  <option value="2013">2013</option>
    <option value="2012">2012</option>
  <option value="2011">2011</option>
  <option value="2010">2010</option>
  <option value="2009">2009</option>
</select>
<br>
<select  name="season" id="season">
  <option value="Summer" selected="selected">Summer</option>
  <option value="Winter">Winter</option>
  <option value="Autumn">Autumn</option>
</select>
<br>
    <input type="file" class="text-center center-block file-upload" name="fileToUpload" id="fileToUpload">
<br>
    <input type="submit" name="submit">
    <br><br><h4>Successfully uploaded</h4>
</div></div><!--/col-3-->
                    </form>

                </div><!--/tab-pane-->
            </div><!--/tab-pane-->
        </div><!--/tab-content-->

        
                    </form>
                    <?php 
                    $ErrorMessage="";
                    print($ErrorMessage); ?>
               
                  </div>
              
                </div>
              </div>

              <!-- Color System -->
             

            </div></div>
              

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

