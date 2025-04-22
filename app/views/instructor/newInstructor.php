<div class="data-container">
    <div class="info">
        <form action="/instructor/create" method="post">
            <div class="form-group">
                <label for="">Centro del Instructor: </label>
                <select name="idCentro" class="form-control">
                    <option value="">Seleccione el centro...</option>
                    <?php 
                    foreach($centros as $centro){
                        echo "<option value='".$centro->id."'>".$centro->nombre."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Usuario del Instructor: </label>
                <input type="text" name="idUsuario" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/instructor/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>