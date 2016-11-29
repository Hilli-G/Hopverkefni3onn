<?php 
	try {
		$sql = "select imageName, imagePath, Price, link FROM images";
		// PDO->query(); er notað fyrir SELECT statements ONLY, skilar object af PDOStatement class
		$result = $pdo ->query($sql);
		
	} catch (Exception $e) {
		echo "Ekki tókst að ná í gögnin". "<br>" . $e->getMessage();
	}
	// fetch() sækir eina röð í einu frá database.
	while($row = $result -> fetch()){
		$Images[] = array($row['imageName'], $row['imagePath'], $row['Price'],$row['link']);
	}
 ?>