<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/competencia/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/competencia/create" method="post">
            <div class="form-group">
                <label for="">Nombre de la competencia:</label>
                <input type="text" name="nombre" class="form-control" required>
                
                <label for="">Ficha:</label>
                <select name="idFicha" class="form-control" required>
                    <option value="">Seleccione una ficha...</option>
                    <?php 
                    foreach($fichas as $ficha){
                        echo "<option value='$ficha->id'>$ficha->ficha</option>";
                    }
                    ?>
                </select>
                
                <label for="">Instructor:</label>
                <select name="idInstructor" class="form-control" required>
                    <option value="">Seleccione un instructor...</option>
                    <?php 
                    foreach($instructores as $instructor){
                        echo "<option value='$instructor->id'>$instructor->nombre</option>";
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