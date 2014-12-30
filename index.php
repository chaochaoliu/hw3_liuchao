<!DOCTYPE html>
<html>
	<head>
		<title>My First PHP Page</title>
		<meta charset="UTF-8">
		<meta name="description" content="homework3">
		<meta name="keywords" content="paragragh">
		<meta name="author" content="Chao liu">
		<style>
.pic{widows: 33.3%;}
td{
	width: 100px;
	height: 50px;
}
		</style>
	</head>
	<body>
		<h1>Chao's First Page</h1>
		<article>
			<a href="http://www.nba.com/" taeget='_blank'>NBA</a>
			<br>
			LOS ANGELES (AP) — Kobe Bryant returned to the Los Angeles Lakers' lineup Sunday night against Phoenix after taking three games off to rest.Coach Byron Scott didn't know how many minutes Bryant's return will last, and he had no predictions about how much rest Bryant will need going forward in the winter.
But the former Lakers teammates are determined to figure out how to preserve Bryant's 36-year-old body for the rigors of his 19th NBA season, even if it means taking more games off in the near future.
		</article>
		<?php for($i=0;$i<3;$i++): ?>
<img class="pic" src="http://rhinopress.org/wp-content/uploads/2014/10/james-harden.jpg" alt="James Harden" height="300" width="400">
<?php endfor; ?>
<table>
	<tbody>
		<tr>
			<td rowspan="2">
				Jill
				</td>
				<td>abc</td>
				<td>20</td>
		</tr>
		<tr>
			<td>Jackson</td>
			<td>94</td>
		</tr>
	</tbody>
</table>
<form action="https://www.google/search" method="get" name="gbqf">
	<input type="radio" id="Male" name="gender" value="male"><label for="Male">Male</label>
<br>
<input type="radio" id="Female" name="gender" value="female"><label for="Female">Female</label>
<br>
<input type="checkbox" id="bike" name="vehicle" value="bike"><label for="bike">I have a bike</label>
<br>
<input type="checkbox" id="car" name="vehicle" value="car"><label for="car">I have a car</label>
<br>
<input type="text" size="40" name="q" value=""/>
<input type="submit" value="submit">
</form>

	</body>
</html>



























