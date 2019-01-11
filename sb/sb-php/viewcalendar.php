<?php  //Start the Session
	
	session_start();
 	require('connect.php');
 	require('escape.php');

?>

hey calendar comming soon !!!<br>

<?php
	$select_calendar = "SELECT * FROM calender";
						 
	$calendar = mysqli_query($connection, $select_calendar) or die(mysqli_error($connection));
	$count = mysqli_num_rows($calendar);
?>	
<?php if ($count==0): ?>
		No dates have been added yet.
<?php else: ?>

	<?php foreach ($calendar as $dates): ?>
			<?php echo e($dates['day']); ?><br>
			<?php echo e($dates['description']); ?><br>
			<?php $idate = $dates['day']; ?><br>
									
			today = <?php echo date('j',strtotime($idate));?><br>
			month = <?php echo date('n',strtotime($idate));?><br>
			year = <?php echo date('Y',strtotime($idate)); ?><br>
		</p>
		
		<hr>
	<?php endforeach; ?>
<?php endif; ?>
			

***************
<?php if (!($count==0)): ?>

	<?php foreach ($calendar as $dates): ?>
		<?php 

			$idate = $dates['day'];
			$iday = date('j',strtotime($idate));
			$imonth = date('n',strtotime($idate));
			$iyear = date('Y',strtotime($idate)); 

		?>
		<?php if ( $iday==($i-1) and $imonth==$cMonth and $iyear==$cYear ): ?>

	    	<td align='center' valign='middle' height='20px' style="background-color:green ; margin:20px;font-size:20px;">
    			<a href="viewcalendar.php?day=<?php echo $iday . ",month=" . $imonth . ",year=" . $iyear;?>" style="">
    				<?php echo $i - $startday + 1; ?> 
    			</a>
			</td>

	    <?php endif; ?>
		
	<?php endforeach; ?>

<?php endif; ?>