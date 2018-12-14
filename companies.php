<?php  

 require("connect.php");  
 $record_per_page = 5;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT * FROM user_reg LIMIT $start_from, $record_per_page";  
 $result = mysqli_query($con, $query);  
 $output .= "  
      <table class='table table-bordered'>  
           <tr>  
                <th width='50%'>Name</th>  
                <th width='50%'>Description</th> 
                <th width='50%'>View</th>
           </tr>  
 ";  
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
           <tr>  
                <td>'.$row["name"].'</td>  
                <td>'.$row["email"].'</td>
                <td><a href="comp_view.html?i='.$row["email"].'">View</a></td>
           </tr>  
      ';  
 }  
 $output .= '</table><br /><div align="center">';  
 $page_query = "SELECT * FROM user_reg ORDER BY name DESC";  
 $page_result = mysqli_query($con, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "
      <style>
     .list{ cursor:pointer; padding:6px; border:1px solid #ccc};
     a {
         text-decoration:none;
         color:black;
     }
      </style>
      <span class='list'  id='".$i."'>".$i."</span>";  
 }  
 $output .= '</div><br /><br />';  
 echo $output;  
 ?>  