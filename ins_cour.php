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
     
            
<?php
	 session_start();
	 
	 $username=&$_SESSION['views'];
	 echo $username;
	 echo "</br>";
	 echo "This teacher is currently teaching many courses";
	 
	 ?>



	 </body>
	 </html>
	 