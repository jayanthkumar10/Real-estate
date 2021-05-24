<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> BUY-Real Estate </title>
    <link rel="stylesheet" href="css/fa/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="css/fa/css/all.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="header">
        <h1 id="logo">Real Estate Management System- Project</h1>
    </header>

    <h2>Here is the list for you</h2><br>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                <thead>
                <tr>
                                        <th> Property ID </th>
                                        <th> Image </th>
                                        <th> Description </th>
                                        <th> City </th>
                                        <th> Address </th>
                                        <th> Area </th>
                                        <th> BHK </th>
                                        <th> Price </th>
                                        <th>Operation</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php
                                    $servername="localhost";
                                    $username="root";
                                    $password="";
                                    $dbname="feedback_wtdbms";

                                    $con= mysqli_connect($servername,$username,$password,$dbname);
                                    if (!$con)
                                    {
                                        die('could not connect:'.mysqli_error());
                                    }
                                    mysqli_select_db($con,"feedback_wtdbms");
                                    $selectquery="SELECT * FROM assests ";
                                    $query=mysqli_query($con,$selectquery);

                                    while($res=mysqli_fetch_array($query)){
                                    ?>
                                    <tr>
                                        <td><?php echo $res['property_id']; ?></td>
                                        <td><img src="<?php echo $res['image_name']; ?>" height ="100px" width="100px"></td>
                                        <td><?php echo $res['description']; ?></td>
                                        <td><?php echo $res['city']; ?></td>
                                        <td><?php echo $res['address']; ?></td>
                                        <td><?php echo $res['area']; ?></td>
                                        <td><?php echo $res['bhk']; ?></td>
                                        <td><?php echo $res['price']; ?></td>
                                    </tr>
                                    <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
</body>
</html>
