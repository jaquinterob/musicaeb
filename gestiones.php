<?php
$gestor=$_GET['gestor'];
include('plantilla/plantilla.php');

?>

<link rel="stylesheet" href="css/gestiones.css">
<input id="gestor_verde" type="hidden" value="<?php echo $gestor;  ?>">
    <div id="contenedor_gestiones" class="row">

    </div>
</body>
<script src="js/gestiones.js" charset="utf-8"></script>
</html>
