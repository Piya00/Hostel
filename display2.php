<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Add Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        /*variables*/
$fontfamily: 'Open Sans', Arial , Helvetica, sans-serif;
$backgroundColor: #1a1d1f;
$backgroundColor2: #232b2e;

body {
  background-color:$backgroundColor;
}

#snowFall {
  background:none;
  font-family: $fontfamily;
  height: 100%;
  left:0;
  position: absolute; 
  width: 100%;
  z-index:1;
  background-image:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/426955/S1.png'),
    url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/426955/S2.png'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/426955/S3.png');
    -webkit-animation: snowFall 10s linear infinite;
      -moz-animation: snowFall 10s linear infinite;
      -ms-animation: snowFall 10s linear infinite;
      animation: snowFall 10s linear infinite;
}

@-webkit-keyframes snowFall {
    0% { background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
}
@-moz-keyframes snowFall {
    0% { background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
}
@-ms-keyframes snowFall {
    0% { background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
}
@keyframes snowFall {
    0% { background-position: 0px 0px, 0px 0px, 0px 0px;}
  50% {background-position: 500px 500px, 100px 200px, -100px 150px;}
  100% {background-position: 500px 1000px, 200px 400px, -100px 300px;}
}

        body {
            font-family: Arial, sans-serif;
            margin: 0px;
            background-image: url(https://i.pinimg.com/originals/4a/d9/69/4ad969666aba06092a158b14ff2734b7.jpg);
           background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
        }
        }

        h3 {
            color: #cce000;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        td{
            background-color: black;
            color: yellow;
        }
        th {
            background-color: lime;
            color: darkblue;

        }

      
        

        .confirmation {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f2f2f2;
        }

        .confirm-btn {
            background-color: #dc3545;
            color: #fff;
        }

        .confirm-btn:hover {
            background-color: #c82333;
        }

        form {
            margin-top: 20px;
            max-width: 400px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<!-- Your PHP code goes here -->
<?php
require("connect.php");

$sql = "SELECT * FROM hostel";
$result = $conn->query($sql);

?>
<div class="container">
    
    <h3 style="text-align: center; color: pink">🙏List of Hostel Members🙏</h3>
    <?php if ($result->num_rows > 0) { ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Hostel Id</th>
                    <th>Room Number</th>
                    <th>Email</th>
                    <th>Mobile</th>
                  
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['hid']; ?></td>
                        <td><?php echo $row['room']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p>No records found</p>
    <?php } ?>
</div>
<?php
$conn->close();
?>
<div id="snowFall"></div>
</body>
</html>
