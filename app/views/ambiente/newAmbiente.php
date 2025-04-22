<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/ambiente/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/ambiente/create" method="post">
            <div class="form-group">
                <label for="">Nombre del Ambiente: </label>
                <input type="text" name="nombre" id="txtNombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Centro: </label>
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