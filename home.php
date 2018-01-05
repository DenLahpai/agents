<?php
require "conn.php";
?>
<html>
	 <head>
        <?php
		$headTitle = "Home";
		include "head.html";
		?>
    </head>
	<body>
		<div class="content"><!-- content -->
			<?php include "nav.html";
			$pageTitle = "Create New Booking";
			include "header.html";
			?>
			<main>
				<form action="bfooking_details.php" method="post">
					<ul>
						<?php
                        if ($_SESSION['msg_error'] != NULL) {
                            echo "<li class=\"error\">".$_SESSION['msg_error']."</li>";
                        }
                        ?>
						<li>
							<label for="pax">Number of Pax: </label>
							<input type="number" name="pax" id="pax" min="1" max="99">
						</li>
						<li>
							<input type="checkbox" name="guide" value="Yes">
							My clients will have a tour guide with them. <br>
						</li>
						<li>
							<label for="visitDate">Date:</label>
							<input type="date" name="visitDate" id="visitDate">
							<br>
							Note: We are closed on Sundays and public holidays.
						</li>
						<li>
							Opening Hours:
							<select name="tours">
								<option value="1">09:30</option>
								<option value="2">11:30</option>
								<option value="3">13:30</option>
								<option value="4">15:30</option>
							</select>
						</li>
						<li>
							<button type="submit" name="button_submit">Next</button>
						</li>
					</ul>
				</form>
			</main>
			<?php include "footer.html"; ?>
		</div><!-- end of main -->
	</body>
</html>
