<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/competencia/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/competencia/update" method="post">
            <div class="form-group">
                <label for="">ID de la Competencia:</label>
                <input type="text" readonly value="<?php echo $competencia->id ?>" name="id" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nombre de la competencia:</label>
                <input type="text" value="<?php echo $competencia->nombre ?>" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Ficha:</label>
                <select name="idFicha" class="form-control" required>
                    <option value="">Seleccione una ficha...</option>
                    <?php 
                    foreach($fichas as $ficha){
                        $selected = ($competencia->idFicha == $ficha->id) ? 'selected' : '';
                        echo "<option value='$ficha->id' $selected>$ficha->ficha</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Instructor:</label>
                <select name="idInstructor" class="form-control" required>
                    <option value="">Seleccione un instructor...</option>
                    <?php 
                    foreach($instructores as $instructor){
                        $selected = ($competencia->idInstructor == $instructor->id) ? 'selected' : '';
                        echo "<option value='$instructor->id' $selected>$instructor->nombre</option>";
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