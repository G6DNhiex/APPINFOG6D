<?php
include 'functions.php';

top('Map', '<link rel="stylesheet" href="jqvmap.css" /><script src="jquery.vmap.js" type="text/javascript"></script><script src="jquery.vmap.france.js" type="text/javascript"></script><script src="jquery.vmap.colorsFrance.js" type="text/javascript"></script>');
?>
    
	<script type="text/javascript">
	$(document).ready(function() {
		$('#francemap').vectorMap({
		    map: 'france_fr',
			hoverOpacity: 0.5,
			hoverColor: "#EC0000",
			backgroundColor: "#ffffff",
			color: "#FACC2E",
			borderColor: "#000000",
			selectedColor: "#EC0000",
			enableZoom: true,
			showTooltip: true,
		    onRegionClick: function(element, code, region)
		    {
		        var message = 'Région : "'
		            + region 
		            + '" || Id : "'
		            + code
					+ '"';
             
		        alert(message);
		    }
		});
	});
	</script>
	
	
  <h2 class="regions">Sélectionnez votre région :</h2>
    <div id="francemap"></div>
	
	<div class="aide">
<a href='index.html'><img src="question.png" alt="aide"></a>
</div>

</div>

<?php
bottom();
?>
