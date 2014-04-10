<header id="header">
            <nav class="font_type1">
             		<?php
					if (isset($_POST['nav'])) {
		 			header("Location: $_POST[nav]");
					}
					?>
                    
                    <ul>
                        <li class="a"><a href="index.html">HOME</a></li><li class="b"><a href="ancienthistory.html">ANCIENT HISTORY</a></li><li class="c"><a href="productshelf.html">PRODUCT SHELF</a></li><li class="d"><a href="aboutus.html">ABOUT US</a></li><li class="e"><a href="contactus.html">CONTACT US</a></li>
                    </ul> 
                    
                    <form id="page-changer" action="" method="post">
                    <select name="nav"> 
   					 	<option value="" selected="selected">MENU</option> 
    
                        <option value="index.html">HOME</option>  
                        <option value="ancienthistory.html">ANCIENT HISTORY</option> 
                        <option value="productshelf.html">PRODUCT SHELF</option> 
                        <option value="aboutus.html">ABOUT US</option> 
                        <option value="contactus.html">CONTACT US</option> 
                      	</select>
						    <input type="submit" value="Go" id="submit" />
						</form>
            
            			<div>OBIA SPIRITS</div>
            </nav>  
            
            <div id="transnav">
                    
            </div>
</header>