<form action="GUARDAR.php" method="post">
    <div class="form-group">
    <label>Nombre de la tarea a realizar</label>
    <input type="text" name="nombretarea" class="form-control" placeholder="Limpiar,Ordenar,Estudiar" require>
    </div>
    <div class="form-group">
    <label>Descripcion de tarea</label>
    <textarea class="form-control" name="descripcion" rows="2" required  placeholder="Describa su tarea a realizar"></textarea>
    </div>
    <div class="form-group">
    <label>Fecha de realizacion</label>
    <input type="date" name="fecha" class="form-control" required>
    </div>

    </div>

    <input type="submit" class="btn btn-success btn-block" value="Registre su tarea :)" name="Registrar">

    </form>