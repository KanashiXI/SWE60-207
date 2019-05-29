<?php
?>
<html>
	<head>
        <meta charset="utf-8">
        <title>Hello, world!</title>
  	</head>
  <body>
  <form method="POST" action="<?php $_PHP_SELF;?>" >
          <table border="1">
          	<tr>
          		<th>ID</th>
          		<th>Quiz<br/>0-20 point</th>
          		<th>Midterm<br/>0-20 point</th>
          		<th>Final<br/>0-20 point</th>
          		<th>Grad<br/>0-20 point</th>
          	</tr>
          	<tr>
          		<td>ITE60-123</td>
          		<td><input type="text" name="quiz_score[]"></td>
          		<td><input type="text" name="mid_score[]"></td>
          		<td><input type="text" name="fin_score[]"></td>
          		<td><?php ?></td>
          	</tr>
          	<tr>
          		<td>ITE60-222</td>
          		<td><input type="text" name="quiz_score[]"></td>
          		<td><input type="text" name="mid_score[]"></td>
          		<td><input type="text" name="fin_score[]"></td>
          		<td><?php ?></td>
          	</tr>
          	<tr>
          		<td>SWE60-123</td>
          		<td><input type="text" name="quiz_score[]"></td>
          		<td><input type="text" name="mid_score[]"></td>
          		<td><input type="text" name="fin_score[]"></td>
          		<td><?php ?></td>
          	</tr>
          	<tr>
          		<td>SWE60-333</td>
          		<td><input type="text" name="quiz_score[]"></td>
          		<td><input type="text" name="mid_score[]"></td>
          		<td><input type="text" name="fin_score[]"></td>
          		<td><?php ?></td>
          	</tr>
          	<tr>
          		<td>MTA60-123</td>
          		<td><input type="text" name="quiz_score[]"></td>
          		<td><input type="text" name="mid_score[]"></td>
          		<td><input type="text" name="fin_score[]"></td>
          		<td><?php ?></td>
          	</tr>
          </table>
  	<input type="submit">
  </form>
  </body>
</html>