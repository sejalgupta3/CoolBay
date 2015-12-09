<?php
	session_start();
?>
<!-- Curling data from all the vendor websites -->
<?php
	$curl = curl_init('http://www.sejalgupta.com/school/views/About.php');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	$page = curl_exec($curl);
	if(curl_errno($curl)) // check for execution errors
	{
		echo 'Scraper error: ' . curl_error($curl);
		exit;
	}
	curl_close($curl);
	
	$curl2 = curl_init('http://blackblues.org/about-us.php');
	curl_setopt($curl2, CURLOPT_RETURNTRANSFER, TRUE);
	$page2 = curl_exec($curl2);
	if(curl_errno($curl2)) // check for execution errors
	{
		echo 'Scraper error: ' . curl_error($curl2);
		exit;
	}
	curl_close($curl2);
	
	$curl3 = curl_init('http://shagunjuneja.com/?page_id=14');
	curl_setopt($curl3, CURLOPT_RETURNTRANSFER, TRUE);
	$page3 = curl_exec($curl3);
	if(curl_errno($curl3)) // check for execution errors
	{
		echo 'Scraper error: ' . curl_error($curl3);
		exit;
	}
	curl_close($curl3);
	
	$curl4 = curl_init('http://www.stacktit.com/?page_id=18');
	curl_setopt($curl4, CURLOPT_RETURNTRANSFER, TRUE);
	$page4 = curl_exec($curl4);
	if(curl_errno($curl4)) // check for execution errors
	{
		echo 'Scraper error: ' . curl_error($curl4);
		exit;
	}
	curl_close($curl4);
	
	$curl5 = curl_init('http://aishwaryapatwardhanc.fatcow.com/?page_id=25');
	curl_setopt($curl5, CURLOPT_RETURNTRANSFER, TRUE);
	$page5 = curl_exec($curl5);
	if(curl_errno($curl5)) // check for execution errors
	{
		echo 'Scraper error: ' . curl_error($curl5);
		exit;
	}
	curl_close($curl5);
	
	$curl6 = curl_init('http://bluefairyclub.fatcow.com/?page_id=28');
	curl_setopt($curl6, CURLOPT_RETURNTRANSFER, TRUE);
	$page6 = curl_exec($curl6);
	if(curl_errno($curl6)) // check for execution errors
	{
		echo 'Scraper error: ' . curl_error($curl6);
		exit;
	}
	curl_close($curl6);
?>
<div class="row">
	<div class="col-md-12">
		<div class="col-md-4 feature-1 wp2">
			<div class="feature-icon">
				<i class="fa fa-pencil"></i>
			</div>
			<div class="feature-content">
				<h1>SG High School</h1>
				<p>
					<?php
			           $regex = '/<div>(.*?)<\/div>/s';
			           if ( preg_match($regex, $page, $list) )
			              echo $list[1];
			           else 
			             print "Not found";
			         ?>
		         </p>
				<a href="
				views/userHistory.php?url=http://www.sejalgupta.com/school/views/About.php&host=sg
					<?php 
						if(isset($_SESSION['login_user']) && isset($_SESSION['login_user_name'])){
							echo "&username=".$_SESSION['login_user']."&name=".$_SESSION['login_user_name'];
						}
					?>			
						
				" class="read-more-btn">Read More <i class="fa fa-chevron-circle-right"></i></a>
			</div>
		</div>
		<div class="col-md-4 feature-2 wp2 delay-05s" style="min-height:300px;">
			<div class="feature-icon">
				<i class="fa fa-paint-brush"></i>
			</div>
			<div class="feature-content">
				<h1>Black Blues</h1>
				<p>
					<?php
			           $regex2 = '/<p class="txt9">(.*?)<\/p>/s';
			           if ( preg_match($regex2, $page2, $list) )
			              echo $list[1];
			           else 
			             print "Not found";
			        ?>
				</p>
				<a href="
				views/userHistory.php?url=http://blackblues.org/about-us.php&host=blackBlue
								<?php 
									if(isset($_SESSION['login_user']) && isset($_SESSION['login_user_name'])){
										echo "&username=".$_SESSION['login_user']."&name=".$_SESSION['login_user_name'];
									}
								?>	
				" class="read-more-btn">Read More <i class="fa fa-chevron-circle-right"></i></a>
			</div>
		</div>
		<div class="col-md-4 feature-3 wp2 delay-1s">
			<div class="feature-icon">
				<i class="fa fa-mobile"></i>
			</div>
			<div class="feature-content">
				<h1>Gadget-o-Meter</h1>
				<p>
					<?php
			           $regex3 = '/<div class="entry-content">(.*?)<\/div>/s';
			           if ( preg_match($regex3, $page3, $list) )
			              echo $list[1];
			           else 
			             print "Not found";
			        ?>
				</p>
				<a href="
				views/userHistory.php?url=http://shagunjuneja.com/?page_id=14&host=gadget
					<?php 
						if(isset($_SESSION['login_user']) && isset($_SESSION['login_user_name'])){
							echo "&username=".$_SESSION['login_user']."&name=".$_SESSION['login_user_name'];
						}
					?>	
				" class="read-more-btn">Read More <i class="fa fa-chevron-circle-right"></i></a>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-4 feature-1 wp2">
			<div class="feature-icon">
				<i class="fa fa-book"></i>
			</div>
			<div class="feature-content">
				<h1>Stack IT</h1>
				<p>
					<?php
			           $regex4 = '/<div class="entry-content">(.*?)<\/div>/s';
			           if ( preg_match($regex4, $page4, $list) )
			              echo $list[1];
			           else 
			             print "Not found";
			         ?>
		         </p>
				<a href="
				views/userHistory.php?url=http://www.stacktit.com/?page_id=18&host=stack
					<?php 
						if(isset($_SESSION['login_user']) && isset($_SESSION['login_user_name'])){
							echo "&username=".$_SESSION['login_user']."&name=".$_SESSION['login_user_name'];
						}
					?>
				" class="read-more-btn">Read More <i class="fa fa-chevron-circle-right"></i></a>
			</div>
		</div>
		<div class="col-md-4 feature-2 wp2 delay-05s">
			<div class="feature-icon">
				<i class="fa fa-lemon-o"></i>
			</div>
			<div class="feature-content">
				<h1>Tadka Rater</h1>
				<p>
					<?php
			           $regex5 = '/<span style="font-size: xx-large;">(.*?)<\/span>/s';
			           if ( preg_match($regex5, $page5, $list) )
			              echo $list[1];
			           else 
			             print "Not found";
			        ?>
				</p>
				<a href="
				views/userHistory.php?url=http://aishwaryapatwardhanc.fatcow.com/?page_id=25&host=tadka
					<?php 
						if(isset($_SESSION['login_user']) && isset($_SESSION['login_user_name'])){
							echo "&username=".$_SESSION['login_user']."&name=".$_SESSION['login_user_name'];
						}
					?>		
				" class="read-more-btn">Read More <i class="fa fa-chevron-circle-right"></i></a>
			</div>
		</div>
		<div class="col-md-4 feature-3 wp2 delay-1s">
			<div class="feature-icon">
				<i class="fa fa-female"></i>
			</div>
			<div class="feature-content">
				<h1>Blue Fairy Club</h1>
				<p>
					<?php
			           $regex6 = '/<p>(.*?)<\/p>/s';
			           if ( preg_match($regex6, $page6, $list) )
			              echo $list[0];
			           else 
			             print "Not found";
			        ?>
				</p>
				<a href="
				views/userHistory.php?url=http://bluefairyclub.fatcow.com/?page_id=28&host=doll
					<?php 
						if(isset($_SESSION['login_user']) && isset($_SESSION['login_user_name'])){
							echo "&username=".$_SESSION['login_user']."&name=".$_SESSION['login_user_name'];
						}
					?>	
				" class="read-more-btn">Read More <i class="fa fa-chevron-circle-right"></i></a>
			</div>
		</div>
	</div>
</div>