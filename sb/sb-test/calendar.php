<?php
$monthNames = Array("January", "February", "March", "April", "May", "June", "July", 
"August", "September", "October", "November", "December");
?>

<?php
if (!isset($_REQUEST["month"])) {

	$_REQUEST["month"] = date("n");
} 
if (!isset($_REQUEST["year"])) {

	$_REQUEST["year"] = date("Y");
} 
?>

<?php
$cMonth = $_REQUEST["month"];
$cYear = $_REQUEST["year"];
 
$prev_year = $cYear;
$next_year = $cYear;
$prev_month = $cMonth-1;
$next_month = $cMonth+1;
 
if ($prev_month == 0 ) {
    $prev_month = 12;
    $prev_year = $cYear - 1;
}
if ($next_month == 13 ) {
    $next_month = 1;
    $next_year = $cYear + 1;
}
if ($prev_year < date("Y") ) {
    
    $prev_year = date("Y");
    $prev_month = date("n");

}
?>

<table width="200">
	<tr align="center">
		<td bgcolor="#999999" style="color:blue">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="50%" align="left">
						<a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $prev_month . "&year=" . $prev_year; ?>" style="color:blue">
							Previous
						</a>
					</td>
					<td width="50%" align="right">
						<a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $next_month . "&year=" . $next_year; ?>" style="color:blue">
							Next
						</a>
					</td>
				</tr>	
			</table>
		</td>
	</tr>
	<tr>
		<td align="center">
			<table width="100%" border="0" cellpadding="2" cellspacing="2">
				<tr align="center">
					<td colspan="7" bgcolor="#999999" style="color:#FFFFFF">
						<strong><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></strong>
					</td>
				</tr>
				<tr>
					<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>S</strong></td>
					<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>M</strong></td>
					<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>T</strong></td>
					<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>W</strong></td>
					<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>T</strong></td>
					<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>F</strong></td>
					<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>S</strong></td>
				</tr>

				<?php 

					$timestamp = mktime(0,0,0,$cMonth,1,$cYear);
					$maxday = date("t",$timestamp);
					$thismonth = getdate ($timestamp);
					$startday = $thismonth['wday'];

					$today = date("j-n-Y");
					$day = date('j',strtotime($today));
					$month = date('n',strtotime($today));
					$year = date('Y',strtotime($today));

				?>
				<?php for ($i=0; $i<($maxday+$startday); $i++): ?>
				
				    <?php if (($i % 7) == 0 ): ?>

				    	<tr>

				    <?php endif; ?>

				    <?php if ($i < $startday): ?>

				    		<td></td>

				    <?php else: ?>

				    		<td align='center' valign='middle' height='20px' 
					    		<?php if ( $day==($i-1) and $month==$cMonth and $year==$cYear ): ?>
					    			style="background-color:gray ; margin:20px;font-size:20px;">
				    			
					    			<a href="viewcalendar.php?day=<?php echo $day . ",month=" . $month . ",year=" . $year;?>" style=";">
					    				<?php echo $i - $startday + 1; ?> 
					    			</a>
				    			<?php else: ?>
				    				>
				    				<?php echo $i - $startday + 1; ?>
				    			<?php endif; ?> 
				    		</td>

				    <?php endif; ?>

				    <?php if (($i % 7) == 6 ): ?>

				    	</tr>

				    <?php endif; ?>
				<?php endfor; ?>
				
			</table>
		</td>
	</tr>
</table>
<?php
echo "Today is " . date("d/m/y") . "<br>";
echo "Omwaka is " . date("Y") . "<br>";
echo "Week Number " . date("W") . "<br>";
echo "Today is " . date("l") . "<br>";
echo $cYear . "<br>";
echo $cMonth . "<br>";


?>