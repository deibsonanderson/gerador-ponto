  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  
  <script>
	  $(document).ready(function() {
		if(screen.width <= 400){
			$("#accordionSidebar").addClass("toggled");
		}else{				
			$("#accordionSidebar").removeClass("toggled");
		}
	  });
  
	function mycopy(id) {
	  /* Get the text field */
	  var copyText = document.getElementById(id);

	  /* Select the text field */
	  copyText.select();

	  /* Copy the text inside the text field */
	  document.execCommand("copy");

	  /* Alert the copied text */
	  $('#'+id).css("color","RED");
	}
	
	function calcular(){
		const data = new Date($('#timer').val());
		data.setHours(data.getHours() + 11);
		$('#result').html(data.toLocaleString('pt-BR', {timeZone: 'America/Sao_Paulo'}));
	}
</script>