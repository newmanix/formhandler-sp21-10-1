<?php
 
if(isset($_GET['FirstName'])){//show data
   //echo $_GET['FirstName'] . ' ' . $_GET['LastName'];

   echo '<pre>';
   var_dump($_GET);
   echo '</pre>';

}else{//show form
 echo '
 <form action="">
First Name: <input type="text" name="FirstName" /><br />
Last Name: <input type="text" name="LastName" /><br />
<input type="submit" /> 
 </form>
 ';
}
