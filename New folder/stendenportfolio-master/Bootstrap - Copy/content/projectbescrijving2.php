<div id="page-wrapper">
		<?php
			if(isset($_SESSION['portfolio'])){
				$array = explode("/", $_GET['Project']);
				$array2 = explode(".", $array['4']);
				echo  '<p><a href="index.php?page=fotogalerij"><input type="submit" value="terug naar projecten"></a>';
				echo  '<a href="index.php?page=projectbeschrijvingedit2&Project='.$_GET['Project'].'"> <input type="submit" value="edit"></a></p>';
				echo '<h1>'.$array2[0].'</h1>';
				echo "<p><img src='content/projects/".$array[2]."/SLB/projectpicture/".$array[4]."'></p>";
				
				$DBConnect = mysqli_connect("localhost", "root", "");
				if ($DBConnect === FALSE){
					echo "<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_error() . ": " . mysqli_error() . "</p>";
				} else{
					$DBName = "project_portfolio";
					if (!mysqli_select_db($DBConnect, $DBName)){
						echo "<p>Druk op edit om een beschrijving van het project te geven.</p>";
					}else{
						
						
						$SQLstring = "SELECT Project_Description FROM projects WHERE Project_Name = '".$array2['0']."' AND User_Email = '".$array['2']."'" ;
						$QueryResult = mysqli_query($DBConnect, $SQLstring);
						if (mysqli_num_rows($QueryResult) == 0){
							echo "<p>There are no textfields!</p>";
						} else{
			 
							while ($Row = mysqli_fetch_assoc($QueryResult)){
								echo $Row['Project_Description'];

							}
							mysqli_free_result($QueryResult);
						}
						
					}
					mysqli_close($DBConnect);
				}
            }               
			
			
			
			
			
			
			
			if(isset($_POST["download"])){
			//lijst met bestanden in een folder
			// van vele bestanden een zip maken
			
			$dir = "content/projects/".$array[2]."/".$array2[0]."/";
			$files = scandir($dir);rsort($files);
			$zipname = $array2[0].'.zip';
			$zip = new ZipArchive;
			$zip->open($zipname, ZipArchive::CREATE);
			foreach ($files as $file) {
				if ($file != '.' && $file != '..') {
						echo  $file."<br>";             
					$zip->addFile($dir.$file);
					
				}
			}
			$zip->close();
			
			
		   

			// download een bestand
			
				$filename = $zipname;

				if(file_exists($filename)){

					//Get file type and set it as Content Type
					$finfo = finfo_open(FILEINFO_MIME_TYPE);
					header('Content-Type: ' . finfo_file($finfo, $filename));
					finfo_close($finfo);

					//Use Content-Disposition: attachment to specify the filename
					header('Content-Disposition: attachment; filename='.basename($filename));

					//No cache
					header('Expires: 0');
					header('Cache-Control: must-revalidate');
					header('Pragma: public');

					//Define file size
					header('Content-Length: ' . filesize($filename));

					ob_clean();
					flush();
					readfile($filename);
					exit;
				}
			}
			
		
		
		?>
		<form action="#" method="POST">
			<p><input type="submit" name="download" value="download project"></p>
		</form>
    </div><!-- /#wrapper -->