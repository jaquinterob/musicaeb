
<?php
include('plantilla/plantilla.html');
include('menu.php');
?>
<link  rel="icon"   href="img/clave.png" type="image/png">

<input id="gestor" type="hidden" name="opcion" value="<?php echo $gestor; ?>">
<input id="llamamiento" type="hidden" name="opcion" value="<?php echo $llamamiento; ?>">
<div id="contenedor_inicio" class="ocultar">
    <div class="row">
        <div class="col s12 m6">
            <div class="card">
                <div class="card-content black-text">
                    <span class="card-title">Coros por Barrio</span>
                    <table id="contenedor_tabla_coros" class="highlight">
                        <!-- desde php -->
                    </table>
                </div>
                <hr>
                <div style="margin:20px" id="donutchart1" style="width: auto; height: auto;"></div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card">
                <div class="card-content black-text">
                    <span class="card-title">Llamamientos por Barrio</span>
                    <table id="contenedor_tabla_llamamientos" class="highlight">
                        <!-- desde php -->
                    </table>
                </div>
                <hr style=""/>
                <div style="margin:20px" id="donutchart" style="width: auto; height: auto;"></div>
            </div>
        </div>
    </div>
</div>
<div id="contenedor_individuales_titulo" class="center-align ocultar">
    <br>
    <span style="color:#4CAF50; font-size: 25px" id="contenedor_titulo"></span>
    <hr>
</div>
<div id="contenedor_individual" class="row ocultar"></div>
<div id="contenedor_estaca" class="row ocultar"></div>
<!-- modal1 -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h5  id="contenedor_titulo_modal1">Miembro Obispado - Buenos Aires</h5  >
        <div class="input-field col s6">
            <i class="material-icons prefix icon-green">person</i>
            <input id="nombre" type="text" class="validate">
            <label for="nombre">Nombre</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix icon-green">phone_android</i>
            <input id="celular" type="number" class="validate">
            <label for="celular">Celular</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons icon-green prefix">message</i>
            <input id="nota_gestion" type="text" class="validate">
            <label for="nota_gestion">Nota de gestion</label>
        </div>
        <div class="input-field col s12">
            <select id='estado'>
                <option value="" disabled selected>Escoge un estado</option>
                <option value="por llamar">por llamar</option>
                <option value="Inactivo">Inactivo</option>
                <option value="Sin capacitar">Sin capacitar</option>
                <option value="Listo">Listo</option>
            </select>
        </div>
    </div>
        <div id="contenedor_boton_modal1" class="modal-footer"></div>
    </div>
    <!-- modal2-->
    <div id="modal2" class="modal">
        <div class="modal-content">
            <h5  id="contenedor_titulo_modal2">Miembro Obispado - Buenos Aires</h5>
            <div style="margin:50px" class="switch col s12 center-align">
                <label>
                    No
                    <input id="sw_coro" type="checkbox">
                    <span class="lever"></span>
                    Si
                </label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons icon-green prefix">message</i>
                <input id="nota_gestion2" type="text" class="validate">
                <label for="nota_gestion2">Nota de gestion</label>
            </div>
        </div>
        <div id="contenedor_boton_modal2" class="modal-footer"></div>
    </div>
</body>
</html>

<script src="js/home.js" charset="utf-8"></script>
