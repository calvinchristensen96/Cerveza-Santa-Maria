<doctype html>
	<body>
		<script>
		
			window.onload = function() {
				var menu = document.getElementById("myDropdown");
				menu.style.display = "none";
			};
			
			function myFunction() {
				var menu = document.getElementById("myDropdown");
				if (menu.style.display === "none") {
					menu.style.display = "block";
				} else {
					menu.style.display = "none";
				}
			}
		</script>
	</body>
	
</html>