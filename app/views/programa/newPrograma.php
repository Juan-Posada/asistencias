<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/programa/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/programa/create" method="post">
            <div class="form-group">
                <label for="">Nombre del Programa: </label>
                <input type="text" name="nombre" id="txtNombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Centro del programa: </label>
                <select name="idCentro" id="">
                    <option value="">Seleccione el centro...</option>
                    <?php 
                    foreach($centros as $centro){
                        echo "<option value='".$centro->id."'>".$centro->nombre."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>