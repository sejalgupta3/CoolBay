<?php	
	//SG School
	$curl = curl_init('http://www.sejalgupta.com/school/views/mostViewed.txt');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	$page = curl_exec($curl);
	$array = unserialize($page);
	$fullArray = [];
	if(curl_errno($curl)) // check for execution errors
	{
		echo 'Scraper error: ' . curl_error($curl);
		exit;
	}
	curl_close($curl);
	
	//Black Blues
	$curl2 = curl_init('http://blackblues.org/new2.txt');
	curl_setopt($curl2, CURLOPT_RETURNTRANSFER, TRUE);
	$page2 = curl_exec($curl2);
	$array2 = unserialize($page2);
	if(curl_errno($curl2)) // check for execution errors
	{
		echo 'Scraper error: ' . curl_error($curl2);
		exit;
	}
	curl_close($curl2);
	
	//Tadka Rater
	$curl3 = curl_init('http://www.aishwaryapatwardhan.com/chaatcafe_hit.txt');
	curl_setopt($curl3, CURLOPT_RETURNTRANSFER, TRUE);
	$page3 = curl_exec($curl3);
	$tadkaArray = json_decode($page3, true);
	arsort($tadkaArray,true);
	if(curl_errno($curl3)) // check for execution errors
	{
		echo 'Scraper error: ' . curl_error($curl3);
		exit;
	}
	$tadkaTotal=0;
	curl_close($curl3);
	
	//Stacktit
	$curl4 = curl_init('http://www.stacktit.com/stacktit_hit.txt');
	curl_setopt($curl4, CURLOPT_RETURNTRANSFER, TRUE);
	$page4 = curl_exec($curl4);
	$stackArray = json_decode($page4, true);
	arsort($stackArray,true);
	if(curl_errno($curl4)) // check for execution errors
	{
		echo 'Scraper error: ' . curl_error($curl4);
		exit;
	}
	$stackTotal=0;
	curl_close($curl4);
	
	$curl5 = curl_init('http://www.bluefairyclub.fatcow.com/bluefairy_hit.txt');
	curl_setopt($curl5, CURLOPT_RETURNTRANSFER, TRUE);
	$page5 = curl_exec($curl5);
	$fairyArray = json_decode($page5, true);
	arsort($fairyArray,true);
	if(curl_errno($curl5)) // check for execution errors
	{
		echo 'Scraper error: ' . curl_error($curl5);
		exit;
	}
	$fairyTotal=0;
	curl_close($curl5);
	
	$curl6 = curl_init('http://www.shagunjuneja.com/gadget_hits.txt');
	curl_setopt($curl6, CURLOPT_RETURNTRANSFER, TRUE);
	$page6 = curl_exec($curl6);
	$gadgetArray = json_decode($page6, true);
	arsort($gadgetArray ,true);
	if(curl_errno($curl6)) // check for execution errors
	{
		echo 'Scraper error: ' . curl_error($curl6);
		exit;
	}
	$gadgetTotal=0;
	curl_close($curl6);
	
?>
<ul class="slides" id="featuresSlider">
	<li>											<h2>Popular Products @ Tadka Rater</h1>
		<p>Top Product/Serivices(Most Viewed)
		<?php
			foreach ($tadkaArray as $key => $value) {
				if($value!=0 && $tadkaTotal<5){
					$fullArray[$key] = $value;
					echo "<br/>".$key."  ".$value;
					++$tadkaTotal;
				}	
			}
         ?>
         </p>
	</li>
	<li>											<h2>Popular Products @ Black Blues</h1>
		<p>Top Product/Serivices(Most Viewed)
		<?php
			foreach ($array2 as $key => $value) {
				if($value!=0){
					$fullArray[$key] = $value;
					echo "<br/>".$key." viewed  <strong>".$value."</strong> times";
				}	
			}
         ?>
         </p>
	</li>
	<li>											<h2>Popular Products @ Stack IT</h1>
		<p>Top Product/Serivices(Most Viewed)
		<?php
			foreach ($stackArray as $key => $value) {
				if($value!=0 && $stackTotal<5){
					$fullArray[$key] = $value;
					echo "<br/>".$key." viewed  <strong>".$value."</strong> times";
					++$stackTotal;
				}	
			}
         	?>
         </p>
	</li>
	<li>											<h2>Popular Products @ Gadget-o-Meter</h1>
		<p>Top Product/Serivices(Most Viewed)
		<?php
			
			foreach ($gadgetArray as $key => $value) {
				if($value!=0 && $gadgetTotal<5){
					$fullArray[$key] = $value;
					echo "<br/>".$key." viewed  <strong>".$value."</strong> times";
					++$gadgetTotal;
				}	
			}
         ?>
         </p>
	</li>
	<li>											<h2>Popular Products @ SG High School</h2>
		<p>Top Product/Serivices(Most Viewed)
		<?php
			foreach ($array as $key => $value) {
				if($value!=0){
					$fullArray[$key] = $value;
					echo "<br/>".$key." viewed  <strong>".$value."</strong> times";
				}	
			}
         ?>
         </p>
	</li>
	<li>											<h2>Popular Products @ Blue Fairy Club</h2>
		<p>Top Product/Serivices(Most Viewed)
		<?php
			foreach ($fairyArray as $key => $value) {
				if($value!=0 && $fairyTotal<5){
					$fullArray[$key] = $value;
					echo "<br/>".$key." viewed  <strong>".$value."</strong> times";
					++$fairyTotal;
				}	
			}
        	 ?>
         </p>
	</li>
	<li>											<h2>Popular Product OverAll</h2>
		<p>Top Product/Serivices(Most Viewed)
		<?php
			arsort($fullArray,true);
			$fullTotal=0;
			foreach ($fullArray as $key => $value) {
				if($value!=0 && $fullTotal<5){
					echo "<br/>".$key." viewed  <strong>".$value."</strong> times";
					++$fullTotal;
				}	
			}
        	 ?>
         </p>
	</li>
</ul>