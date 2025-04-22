<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/ficha/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/ficha/create" method="post">
            <div class="form-group">
                <label for="">Ficha:</label>
                <input type="text" name="ficha" class="form-control" required>
                
                <label for="">Programa:</label>
                <select name="idPrograma" id="" required>
                    <option value="">Seleccione el programa...</option>
                    <?php 
                    foreach($programas as $programa){
                        echo "<option value=".$programa->id.">".$programa->nombre."</option>";
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