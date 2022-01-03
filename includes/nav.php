<nav id="primary-menu" class="primary-menu">
	<!-- menu-icon-wrapper -->

	<a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
		<span class="mob-menu--title">Menu</span>
		<span id="menu-icon-wrapper" class="menu-icon-wrapper">
			<svg width="1000px" height="1000px">
				<path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
				<path id="pathE" d="M 300 500 L 700 500"></path>
				<path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
			</svg>
		</span>
	</a>

	<ul class="primary-menu-menu">
		<li class="<?php if($page === "Home") echo 'current-menu-item'; ?>">
			<a href="./index.php">Home</a>
		</li>

		<li class="menu-item-has-mega-menu menu-item-has-children <?php if($page === "Courses") echo 'current-menu-item'; ?>">
			<a href="./courses.php">Courses</a>
		</li>

		<li class="menu-item-has-children <?php if($page === "Store") echo 'current-menu-item'; ?>">
			<a href="./store.php">Store</a>
		</li>

		<!-- <li class="menu-item-has-children <?php if($page === "Marketplace") echo 'current-menu-item'; ?>">
			<a href="./store.php">Marketplace</a>
		</li> -->

		<li class="<?php if($page === "About") echo 'current-menu-item'; ?>">
			<a href="./about.php">About Us</a>
		</li>

		<!-- <li class="<?php if($page === "Ebooks") echo 'current-menu-item'; ?>">
			<a href="./ebook.php">Ebooks</a>
		</li> -->

		<li class="<?php if($page === "Affliate") echo 'current-menu-item'; ?>">
			<a href="https://docs.google.com/forms/d/e/1FAIpQLSfv-Ndr9nB3kh_BLh9_wt88KqRQVYOQwixukb21d43tvhMvTg/viewform?vc=0&c=0&w=1&flr=0" target="_blank">Affliate programme</a>
		</li>

		<li class="<?php if($page === "Events") echo 'current-menu-item'; ?>">
			<a href="./events.php">Events</a>
		</li>

		<li class="<?php if($page === "Contact") echo 'current-menu-item'; ?>">
			<a href="./contacts.php">Contacts Us</a>
		</li>
	</ul>
</nav>