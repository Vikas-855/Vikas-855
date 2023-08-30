<div class="head-div">
			<div class="main">
				<div class="head">
					<span>EVEST</span>
					<p>THE BIGGEST CHOICE OF THE WEB</p>
				</div>
				<div class="btn">
					<?php if (empty($_SESSION['username'])) { ?>
						<a href="signup.php"><input type="button" name="" value="Log in"></a>
					<?php } else { ?>
						<a href="index.php?log=1"><input type="button" name="" value="Logout <?php echo $_SESSION['username']?>"></a>
						<a class="dasboard" href="dasboard.php">Dasbord</a>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="home-page">
		 	<div class="pagnation">
				<div class="list">
					<ul>
						<a href="index.php"><li>HOME</li></a>
						<a href="new projects.php"><li>NEW PROJECT</li></a>
						<a href="special.php"><li>SPECIAL</li></a>
						<a href="all products.php"><li>ALL PRODUCTS</li></a>
						<li>REVIEWS</li>
						<a href="contatus.php"><li>CONTACT</li></a>
						<li>FAQS</li>
					</ul>
				</div>
				<form action="search.php" method="get">
					<div class="search">
						<div class="search-1">
							<div class="input">
								<input type="text" name="search">
							</div>
							<div class="btnn">
								<input type="submit" name="" value="Search">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>