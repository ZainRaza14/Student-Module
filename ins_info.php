 

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
	<li class="topfirst"><a href="ins_info.php" style="width:84px;height:19px;line-height:19px;">Inst Info</a></li>
	<li class="topmenu"><a href="ins_cour.php" style="width:102px;height:19px;line-height:19px;"><span>Ins Cour</span></a>
	<ul>
    	
    
		
        
	</ul></li>
	<li class="topmenu"><a href="ins_attendance.php" style="width:97px;height:19px;line-height:19px;"><span>Sub Atte</span></a>
	<ul>
		
	 </ul></li>
	<li class="topmenu"><a href="ins_marks.php" style="width:85px;height:19px;line-height:19px;"><span>Sub marks</span></a>
	<ul>
		
        
		        
	</ul></li>
	
	
	
</ul>





</div><div class="Columns"><div class="MainColumn">
        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div><div class="ArticleC"></div><div class="Article">


        </div></div>



        <div class="ArticleBorder"><div class="ArticleBL"><div></div></div><div class="ArticleBR"><div></div></div><div class="ArticleTL"></div><div class="ArticleTR"><div></div></div><div class="ArticleT"></div><div class="ArticleR"><div></div></div><div class="ArticleB"><div></div></div><div class="ArticleL"></div><div class="ArticleC"></div><div class="Article">

      
        
        </p>
     <br>
	 <?php
	 session_start();
	 
	 $username=&$_SESSION['views'];
	 echo $username;
	 $conn=oci_connect("scott" , "Tiger", "localhost/xe");


	$sql=oci_parse($conn,"Select * from faculty where ssn='$username' ");
			oci_execute($sql);
			echo "<table border=1>";
			echo "<tr><th>Rank</th><th>F_office</th><th>F_phone</th><th>F_salary</th><th>Ssn</th><th>password</th><th>Deparment</th><th>Uni_name</th></tr>";
			while($row=oci_fetch_array($sql))
			{
				echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";
			}

			echo "</table>";
	 ?>
            <br>
            <br>
               <h1> Welcome Teacher !</h1>
 
Welcome to Fast nuces, The National University of Computer and Emerging Sciences (Initials:NUCES; or: FAST-NU) is one of the leading technical universities in Pakistan with multiple campuses based in cosmopolitan cities.

Foundation for Advancement of Science and Technology (FAST) was founded and established by BCCI financier Hasan Abidi who provided a large financial capital for university's purpose 
to promote research in computer sciences and emerging technologies in 1980. Established in 2000, it is regarded as one of the leading technical universities in Pakistan and offers 
wide range of programmes for undergraduate, postgraduate, and doctoral studies in engineering, management sciences, business administration, humanities, arts, natural and social science.[8]
<br>
<br>
It consistently ranked among one of the leading and top institution of higher learning in the country, securing its top rank in "computer sciences, IT" category by the HEC in 2010<br>
<br>

            <br>

            <br>
            <br>
            <br>
            <br>
                 <br>
            <br>
            <br>
          

            <br>
            <br>
            <br>
            <br>
                 <br>
            <br>
            <br>
          

            <br>
            <br>
            <br>
            <br>
       
        </div></div></div></div>
        <div class="Footer">
           <a href="#">Copyrights by Zain Raza</a>
        </div>                

</div></div>
    </div>

</body>
</html>
