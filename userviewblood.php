<html>

<head>


<title>BDMS</title>

<!-- Bootstrap Core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="../icofont/icofont.min.css">
<!-- Bootstrap CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>


</head>


<body>
<div id="wrapper">

<?php include 'includes/donornav.php'?>


<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
<div class=".col-lg-12">
               <h1 class="page-header">Blood Collection</h1>
                </div>
  </div>  

				<div class="row">
                        <div class=".col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Total Records of available bloods
                                </div>
								
								 <div class="panel-body">
                                    <div class="table-responsive">
										<!-- Search form -->
										<form method="GET" action="search.php">
               <div class="form-group">
                  <label for="bloodgroup">Blood Group:</label>
                  <input type="text" name="bloodgroup" id="bloodgroup" class="form-control" placeholder="Enter blood group">
               </div>
               <div class="form-group">
                  <label for="address">Address:</label>
                  <input type="text" name="address" id="address" class="form-control" placeholder="Enter address">
               </div>
               <button type="submit" class="btn btn-primary">Search</button>
            </form>
            <!-- End of search form -->
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php

						include "../pages/dbconnect.php";

						$qry="select * from blood";
						$result=mysqli_query($conn,$qry);


						echo"
						<thead>
						<tr>
							<th>Blood Group</th>
							<th>Full Name</th>
							<th>Gender</th>
							<th>D.O.B</th>
							<th>Weight</th>
							<th>Address</th>
							<th>Contact</th>
							<th>Blood Quantity</th>
							<th>Collection Date</th>
						</tr>
						</thead>";

						while($row=mysqli_fetch_array($result)){
						  echo"<tbody>
						  <tr class='gradeA'>
						  <td>".$row['bloodgroup']."</td>
						  <td>".$row['name']."</td>
						  <td>".$row['gender']."</td>
						  <td>".$row['dob']."</td>
						  <td>".$row['weight']."</td>
						  <td>".$row['address']."</td>
						  <td>".$row['contact']."</td>
						  <td>".$row['bloodqty']."</td>
						  <td>".$row['collection']."</td>

						</tr>
						<tbody>
						";
						}

						?>
						</table>
									
				</div>
				</div>		
		</div>
		</div>	
		</div>	
		</div>
		</div>
</div>

  <!-- jQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

<footer>
        <p>&copy; <?php echo date("Y"); ?>: Developed By Swati, Suryanshi, Yashmitha</p>
    </footer>
	
	<style>
	footer{
   background-color: #424558;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}
	</style>
</html>