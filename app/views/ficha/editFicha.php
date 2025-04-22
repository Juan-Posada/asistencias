<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/ficha/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/ficha/update" method="post">
            <div class="form-group">
                <label for="">ID de la Ficha:</label>
                <input type="text" readonly value="<?php echo $ficha->id ?>" name="id" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Ficha:</label>
                <input type="text" value="<?php echo $ficha->ficha ?>" name="ficha" id="txtFicha" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Programa:</label>
                <select name="idPrograma" id="" required>
                    <?php 
                    foreach($programas as $programa){
                        if ($ficha->idPrograma == $programa->id) {
                            echo "<option selected value=".$programa->id.">".$programa->nombre."</option>";
                        } else {
                            echo "<option value=".$programa->id.">".$programa->nombre."</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>