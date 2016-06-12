<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="temp_files/css3menu2/style.css" type="text/css" />
    <script type="text/javascript" src="marquee.js">
</script>
<link href="gallary/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="BackgroundGradient"> </div>
    <div class="BodyContent">

    <div class="BorderBorder"><div class="BorderBL"><div></div></div><div class="BorderBR"><div></div></div><div class="BorderTL"></div><div class="BorderTR"><div></div></div><div class="BorderT"></div><div class="BorderR"><div></div></div><div class="BorderB"><div></div></div><div class="BorderL"></div><div class="BorderC"></div><div class="Border">

        <div class="Header">
          <div class="HeaderTitle">
            <h1><a href="#"><img src="images/logooo.jpg" alt=""></a></h1>
               <div style="text-align:right; margin-right:100px;">
        	  <b>  <a href="logout.php" style="margin-left:10px; text-decoration:none;">Logout</a>
  
            	</b>
          </div>
            <h2></h2>
          </div>
        </div><div class="Menu">
           

<ul id="css3menu2" class="topmenu">
	<li class="topfirst"><a href="fee.php" style="width:89px;height:19px;line-height:19px;">Fee</a></li>
	<li class="topmenu"><a href="course_reg.php" style="width:102px;height:19px;line-height:19px;"><span>Course reg</span></a>
	<ul>
    </ul></li>
	<li class="topmenu"><a href="attendance.php" style="width:97px;height:19px;line-height:19px;"><span>Attendance</span></a>
	<ul>
		
	 </ul></li>
	<li class="topmenu"><a href="marks.php" style="width:85px;height:19px;line-height:19px;"><span>Marks</span></a>
	
	<li class="toplast"><a href="exam.php" style="width:89px;height:19px;line-height:19px;"><span>Exam</span></a>
	
</ul>

</ul></li>
	
	


</div><div class="Columns"><div class="MainColumn">
        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div><div class="ArticleC"></div><div class="Article">


        </div></div>



        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div><div class="ArticleC"></div><div class="Article">

      
        
        </p>
     
      
        
        </p>
     
         <h1>Attendance</h1>   
			<?php
		session_start();
	 
	 $username=&$_SESSION['views'];
	 echo $username;
	 $conn=oci_connect("scott" , "Tiger", "localhost/xe");


	$sql=oci_parse($conn,"Select * from attendance where ssnn='$username' ");
			oci_execute($sql);
			echo "<table border=1>";
			echo "<tr><th>Username</th><th>Course</th><th>Date</th><th>Present</th></tr>";
			while($row=oci_fetch_array($sql))
			{
				echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
			}

			echo "</table>";
?>

</body>
</html>