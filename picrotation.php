<html>
<head>

</head>

<body>
<?
$pic[1] = "<img src='http://thumbs.dreamstime.com/x/happy-students-together-19846895.jpg' alt='' title=''>";
$pic[2] = "<img src='http://static.dnaindia.com/sites/default/files/2014/03/04/218356-goin.jpg' alt='' title=''>";
$pic[3] = "<img src='http://healthyteachingonline.com/blog/wp-content/uploads/2014/10/StudentNotPayingAttention.jpg' alt='' title=''>";

$random = rand(1,3);

print $pic[$random];

?>
</body>

</html>