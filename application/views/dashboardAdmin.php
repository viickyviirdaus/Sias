

	<!-- Code here -->
	<div class="body" style="min-height: 555px; text-align: center;">
	<div class="text-center" style="margin-top: 290px; position: absolute;"> 
			<div id="str" style="font-size: 50px; margin-left: 100px; color: #282931"></div> 
		</div> 

		<script type="text/javascript"> 
			var string = "Selamat Datang di Sistem Informasi Akademik Siswa"; 
			var str = string.split(""); 
			var el = document.getElementById('str'); 
			(function animate() { 
				str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running);  
				var running = setTimeout(animate, 90); 
			})(); 
		</script>
	</div>


