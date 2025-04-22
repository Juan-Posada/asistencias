<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/aprendiz/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/aprendiz/update" method="post">
            <div class="form-group">
                <label for="">ID del Aprendiz:</label>
                <input type="text" readonly value="<?php echo $aprendiz->id ?>" name="txtId" id="txtId" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Seleccione al aprendiz:</label>
                <select name="nombre" id="nombre" class="form-control" required>
                    <?php
                    if (isset($usuarios) && count($usuarios) > 0) {
                        foreach ($usuarios as $usuario) {
                            $selected = ($usuario->id == $aprendiz->idUsuario) ? 'selected' : '';
                            echo "<option value='$usuario->id' $selected>$usuario->nombre</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Ficha de Aprendiz:</label>
                <select name="ficha" id="ficha" class="form-control" required>
                    <?php
                    if (isset($fichas) && count($fichas) > 0) {
                        foreach ($fichas as $ficha) {
                            $selected = ($ficha->id == $aprendiz->idFicha) ? 'selected' : '';
                            echo "<option value='$ficha->id' $selected>$ficha->ficha</option>";
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