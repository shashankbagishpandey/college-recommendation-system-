

<?php

$con=mysqli_connect('localhost','root','','webpage');

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
      $id=$cols->item(0)->nodeValue;
      $collegename=$cols->item(1)->nodeValue;
    $minoritystatus=$cols->item(2)->nodeValue;
    $fees=$cols->item(3)->nodeValue;
    $open=$cols->item(4)->nodeValue;
    $allindia=$cols->item(5)->nodeValue;
    $minority=$cols->item(6)->nodeValue;
    $OBC=$cols->item(7)->nodeValue;
    mysqli_query($con,"insert into scrap(collegename,minoritystatus,fees,open,allindia,minority,OBC) values('$collegename','$minoritystatus','$fees','$open','$allindia','$minority','$OBC')");
}
}

echo "<tr><td colspan='2'>";
echo "</table>";
?>


