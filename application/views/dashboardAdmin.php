<body <?php if ($buatAkun == "ya") { echo "onload = buatAkunSukses()";} ?> >
	<!-- Code here -->
	<div class="body" style="min-height: 555px; text-align: center;">
		<div class="text-center" style="margin-top: 290px; position: absolute;"> 
			<div id="str" style="font-size: 50px; margin-left: 340px; color: #282931" center></div>
		</div> 
	</div>	
</body>

<script type="text/javascript"> 
	var string = "Sistem Informasi Akademik Siswa";
	var str = string.split(""); 
	var el = document.getElementById('str'); 
	(function animate() { 
		str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running);  
		var running = setTimeout(animate, 90); 
	})(); 

	function buatAkunSukses(){
		alert("Akun baru telah dibuat.");
	}
</script>