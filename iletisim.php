<?php
 $kullanici= $_POST["ad"];
  $mesaj= $_POST["mesajicerigi"];
   $mesaj1= $_POST["mesaj"];
    $nereli= $_POST["rizeli"];
	 $ilce= $_POST["ilce"];
    $yas= $_POST["yas"];
    
    
	  
	  echo "<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/stillerim.css\" />";
	 echo "<body background=images/loginarkaplan.jpg>";

	 
       echo      "<table class=\"transparent\" cellpadding=\"12 \" border=\"3\">";
	  
       echo         " <tr>";
       echo             " <td>AD SOYAD:</td>";
	   echo                 "<td> $kullanici </td>";
       echo         " </tr>";
	  
       echo         " <tr>";
	                          echo "<td> MESAJ İÇERİĞİ:</td>";
       echo              "<td>  $mesaj </td>";
      
                       
       echo         " </tr>";
       echo          "<tr>";
	   echo "<td> MESAJ: </td>";
       echo             " <td>$mesaj1;</td>";
     
       echo         " </tr>";
       echo          "<tr>";
	   echo "<td> RİZELİ Mİ?</td>";
	 echo              " <td>  $nereli   </td>";
      
	   echo         " <tr>";
	      echo "<td> İLÇE:</td>";
       echo              "<td>  $ilce </td>";
       echo              "<td>";
                       
       echo         " </tr>";
	    echo         " <tr>";
		   echo "<td> YAŞ?</td>";
       echo              "<td> $yas </td>";
       echo              "<td>";
                       
       echo         " </tr>";
       echo         " <tr>";
		   echo "<td> SEVER MİSİNİZ ?</td>";
       echo              "<td> $severmisin</td>";
       echo              "<td>";
                       
       echo         " </tr>";
	     echo         " <tr>";
		  
       echo              "<td> <a href=\"Hakkında.html\">Anasayfaya dönmek için tıklayınız.</a> </td>";
       echo              "<td>";
                       
       echo         " </tr>";
     
       echo             " </td>";
       echo          "</tr>";
	  
       echo     " </table>";
     
	
  echo " <a href=\"Hakkında.html\">Anasayfaya dönmek için tıklayınız.</a>";

		echo"</body>";
	  
	  
	  




?>