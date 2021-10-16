<style>
#grid {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#grid td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;<?php echo $row['collegename']; }?>
}

#grid tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#grid th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<?php
$url="https://www.teachuseducation.com/mhtcet/Graduation/Engineering/Mumbai-University/Information-Technology";
$html=file_get_contents($url);
$dom=new domDocument;
@$dom->loadHTML ($html);
$tables=$dom->getElementsByTagName('table');
$rows=$tables->item(0)->getElementsByTagName('tr');
echo "<table id='grid'>";
echo "<tr><td>Rank</td><td>College Name</td><td>Minority Status</td><td>Fees p.a</td><td>open</td><td>All India</td><td>Minority</td><td>OBC</td></tr>";
foreach ($rows as $row) {
    $cols=$row ->getElementsByTagName('td');
    if(isset($cols ->item(0)->nodeValue) && isset($cols ->item(1)->nodeValue) && isset($cols ->item(2)->nodeValue) && isset($cols ->item(3)->nodeValue) && isset($cols ->item(4)->nodeValue)){
    echo "<tr><td>".$cols->item(0)->nodeValue."</td><td>".$cols->item(1)->nodeValue."</td><td>".$cols->item(2)->nodeValue."</td><td>".$cols->item(3)->nodeValue."</td><td>".$cols->item(4)->nodeValue."</td><td>".$cols->item(5)->nodeValue."</td><td>".$cols->item(6)->nodeValue."</td><td>".$cols->item(7)->nodeValue."</td></tr>";
}
}

echo "<tr><td colspan='2'>";
echo "</table>";
?>


