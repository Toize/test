<?php
$names = ['evan','austin','ollivia','chloe'];
$math = money_format('%i', 23 * 23);
?>

<html>
<head>

<script type="text/javascript">
alert('boom');
</script>
</head>
<body style="background-color:red; color:white;">
<h1>Hello</h1>
<p>lkfalkfjdjfkdjkf</p>
<ul>
<?php
foreach($names As $name) {

    echo "<li>$name</li>";
}

echo $math;
?>
</ul>
</body>

</html>