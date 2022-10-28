<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="UTF-8" />
    <title>Lab 8</title>
    <link rel="stylesheet" href="tes.css">
</head>
<body>
<center><h1>Welcome <?php echo $_GET["fname"]; ?> 
<?php echo $_GET["mname"]; ?> 
<?php echo $_GET["lname"]; ?></h1></center>
<div class="student-profile py-4">
  <div class="container">
  
      
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="https://source.unsplash.com/600x300/?student" alt="student dp">
           <h3> <?php echo $_GET["fname"]; ?></h3>
          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Student ID:</strong><?php echo $_GET["StudentID"]; ?></p>
            <p class="mb-0"><strong class="pr-1">Date of Birth:</strong><?php echo $_GET["DOB"]; ?></p>
            <p class="mb-0"><strong class="pr-1">Section:</strong><?php echo $_GET["email"]; ?></p>
          </div>
        </div>
     
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Mobile Number</th>
                <td width="2%">:</td>
                <td><?php echo $_GET["M"]; ?></td>
              </tr>
              <tr>
                <th width="30%">Class</th>
                <td width="2%">:</td>
                <td><?php echo $_GET["Course"]; ?></td>
              </tr>
              <tr>
                <th width="30%">Year/Sem	</th>
                <td width="2%">:</td>
                <td><?php echo $_GET["Year/Sem"]; ?></td>
              </tr>
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
                <td><?php echo $_GET["gender"]; ?></td>
              </tr>
              <tr>
                <th width="30%">Dapartment</th>
                <td width="2%">:</td>
                <td><?php echo $_GET["Dapartment"]; ?></td>
              </tr>
            </table>
          </div>
        </div>

            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Full Address: </h3>
          
          <div class="card-body pt-0">
              <p><?php echo $_GET["A"]; ?></p>
          </div>
       
      </div>
   
  </div>
</div>


	</body>
</html>
