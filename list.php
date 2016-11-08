<? php
<table>
   <thead>
      <th></th>
      <th></th>
   </thead>
   <tbody>
   <?php
      $query = mysql_query();
      while($row = mysql_fetch_array($query)){
         echo "<tr>$row['index1']</tr>";
         echo "<tr>$row['index2']</tr>";
   ?>
   </tbody>
</table>
?>