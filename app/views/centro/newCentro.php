<div class="data-container">
    
    <div class="info">
        <form action="/centro/create" method="post">
            <div class="form-group">
                <label for="">Nombre del centro:</label>
                <input type="text" name="nombre" class="form-control" required>
                
                <label for="">Regional:</label>
                <select name="idRegional" id="">
                    <option value="">Seleccione la regional...</option>
                    <?php 
                    foreach($regionales as $regional){
                        echo "<option value=".$regional->id.">".$regional->nombre."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/centro/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>