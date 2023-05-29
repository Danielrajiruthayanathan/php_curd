<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>front</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DOB</th>
                    <th>CITY</th>
                    <th>ADDRESS</th>
                </thead>
                <tbody>
                    <?php
                    $_SERVER="localhost";
                    $uname="root";
                    $pwd="";
                    $db="kvcet";
                    $con=mysqli_connect($_SERVER,$uname,$pwd,$db)or die("db not connected");
                    $query="select * from dani2";
                    $res=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($res))
                    {
                        $id=$row[0];
                        echo"<tr>";
                        echo"<td>".$row[0]."</td>";
                        echo"<td>".$row[1]."</td>";
                        echo"<td>".$row[2]."</td>";
                        echo"<td>".$row[3]."</td>";
                        echo"<td>".$row[4]."</td>";
                        echo"<td><a href='update1.php?id=$id'class='btn btn-success'>update</a></td>";
                        echo"<td><a href='DEL.php?id=$id'class='btn btn-success'>delete</a></td>";
                        echo"</tr>";
                    }
                    ?>
                    </tbody>
                    </table>
                    </div>
                    </div>
                    </body>
                    </html>
