<script src="js/prettify/prettify.js"></script>
<script>
	$("#contactus").on('click', function(){
		
		$.Dialog({
			shadow: true,
			overlay: true,
			icon: '<span class="icon-mail"></span>',
			title: 'تماس با ما',
			width: 750,
			height: 600,
			padding: 10,
			content: data
		});
		
	});
	
	$("#videoplayer").on('click', function(){
		$.Dialog({
			shadow: true,
			overlay: false,
			icon: '<span class="icon-play-alt"></span>',
			title: '',
			width: 500,
			padding: 10,
			content: ''
		});
	});
</script>
</body>
</html>