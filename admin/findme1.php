 <html>
            <head><title>Searching</title>
            
            
            <style>
			a
			{text-decoration:none;}
			p
			{color:#000;
			
				text-align:center;
			}
			</style>
            </head>
            <body background="../images/risd_bike_by_kylietseng-d5n6yml.jpg">

            <?php
            include "../search/config.php";
			
            
            echo "<h2><p>Search Results:</h2></p>";

            if(isset($_POST['search']))
            {
            $find =$_POST['find'];
            //If they did not enter a search term we give them an error
            if ($find == "")
            {
            echo "<p>You forgot to enter a search term!!!";
            exit;
            }

            // Otherwise we connect to our Database


            // We perform a bit of filtering
			
            $find = strtoupper($find);
            $find = strip_tags($find);
            $find = trim ($find);

            //Now we search for our search term, in the field the user specified
            $iname = mysql_query("SELECT * FROM users Where name LIKE '%$find%' OR username LIKE '%find%' OR email LIKE '%find%'")
			
			
			
			//$iname=mysql_query("SELECT `name`.`username`, `email`.`address` WHERE `categories`.`title` LIKE {%$find%} OR `posts`.`title` LIKE {%$find%}")
             or die(mysql_error());
			 
			 
			 ?>
			<table width="600" border="1" align="center" cellpadding="10" cellspacing="5" bgcolor="#CCCCCC" >
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#CCCCCC">
<tr>
            <?php while($result = mysql_fetch_array( $iname ))
            {
				
				echo "Name :" .$result['name'];
            echo "<br> ";
			
            echo "Username :" .$result['username'];
            echo "<br> ";
            echo "Email :".$result['email'];
            echo "<br>";
            echo "Address :".$result['address'];
            echo "<br>";
			echo "Phone :".$result['ph'];
            echo "<br>";
			echo "DOB :".$result['birthdate'];
            echo "<br>";
            
			
			echo "<br>";
			echo "<br>";
			echo "<br>";
            }

            //This counts the number or results - and if there wasn't any it gives them a     little     message explaining that
            $anymatches = mysql_num_rows($iname);
            if ($anymatches == 0)
            {
            echo "Sorry, but we can not find an entry to match your query...<br><br>";
            }

            //And we remind them what they searched for
           
			
            //}
			


            }
            ?> 


            </body>
            </html>