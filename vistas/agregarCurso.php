<div id="agregarCurso" class="row" ng-show="vistas.agregarCurso"  style = "background-color: transparent;color:#000000;">
    <span>
        <form action="servicios/registraCurso.php" method = "get">
            <div class="form-group" style = "text-align:left;">
                <label for="nombre" style = "font-weight:bolder;">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" ng-model = "cursoEnEdicion.nombre">
            </div>
            <div class="form-group" style = "text-align:left;">
                <label for="descripcion" style = "font-weight:bolder;">Descripcion:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" cols = "100" rows = "10" ng-model = "cursoEnEdicion.descripcion"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Actualizar</button>
        </form>
    </span>
</div>
