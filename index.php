<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Portfolio</title>
</head>
<body>
    <div class="bttn">
        <i class="fa fa-bars bara"></i>
    </div>
  <div class="container container-fluid">
    <div class="menu">
        <div class="text">
            <h1>Johne <span>Dohe</span></h1>
        <hr>
        </div>
        
        <div class="tags">
            <Ul>
                <li><a href="#" class="anchor1">Main</a></li>
                <li> <a href="#" class="anchor1">Gallery</a></li>
                <li><a href="#" class="anchor1">About</a></li>
                <li><a href="#" class="anchor2">Dark Mode</a></li>
            </Ul>    
        </div>
        
    </div>
    <div class="content">
       <div class="pad"> <h1>This is Some of Our<span> Picture</span></h1><hr></div>
        <div class="project container-fluid ">
            <div class="row">   
            <?php 
                include 'connect.php';
                $conn= open_connection() ;
                
                $sql = " SELECT id, img ,lable ,time  FROM imges " ; 
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    $target_dir = '/img/';
                    
                    while($row = $result->fetch_assoc()) {
                        $target_file = $target_dir . $row["img"];
                        echo  '<div class="item col-sm-6 col-lg-4  ">
                                <div class="row">                
                                    <div class="col-12">
                                        <img src="'.$target_file.'" >
                                    </div>
                                    <div class="big col-12 ">
                                        <div class="title">'.$row["lable"].'.</div>
                                        <div class="date">'.$row["time"].'.</div>
                                    </div> </div></div>' ;
                    }
                } else {
                    echo "0 results";
                }   
            ?>
            </div>             
        <div class="social">
            <div>
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                <i class="fa fa-twitch" aria-hidden="true"></i>
            </div>

        </div>
    </div>


  </div>


   <script src="js/jquery.js"></script>
<script src="js/main.js"></script>
</body>


</html>
