<div class="data-container">
    <div class="info">
        <form action="/instructor/update" method="post">
            <div class="form-group">
                <label>ID del Instructor: </label>
                <input type="text" readonly value="<?php echo $instructor->id ?>" name="id" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Centro del Instructor: </label>
                <select name="idCentro" class="form-control">
                    <option value="">Seleccione el centro...</option>
                    <?php 
                    foreach($centros as $centro){
                        if ($centro->id == $instructor->idCentro) {
                            echo "<option selected value='".$centro->id."'>".$centro->nombre."</option>";
                        }else{
                            echo "<option value='".$centro->id."'>".$centro->nombre."</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Usuario del Instructor: </label>
                <input type="text" value="<?php echo $instructor->idUsuario ?>" name="idUsuario" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit">Editar</button>
            </div>
        </form>
    </div>
    <div class="navegate-group">
        <div class="back">
            <a href="/instructor/view"><img src="/img/back.svg"></a>
        </div>
    </div>
</div>