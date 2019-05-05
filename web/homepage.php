<p> This is the homepage for my page for CS 313 at Brigham Young University - Idaho.  Above you can navigate to the assignments I will be completing this semester as well as a short bio about me, my interests, and my projects. </p>

<p> Counter:


	<?php
		$file = fopen("counter.txt", "r+") or die("Unable to open file!");
		$count = (int) fgets($file);
		$count++;
		echo $count;
		fwrite($file, $count);
		fclose($file);
	?> 

</p>