<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/aprendiz/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
        <form action="/aprendiz/create" method="post">
            <div class="form-group">
                <label for="">Seleccione al aprendiz:</label>
                <select name="nombre" id="nombre" class="form-control" required>
                    <option value=""></option>
                    <?php
                    if (isset($usuarios) && count($usuarios) > 0) {
                        foreach ($usuarios as $usuario) {
                            echo "<option value='$usuario->id'>$usuario->nombre</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Ficha  de Aprendiz:</label>
                <select name="ficha" id="ficha" class="form-control" required>
                    <option value=""></option>
                    <?php
                    if (isset($fichas) && count($fichas) > 0) {
                        foreach ($fichas as $ficha) {
                            echo "<option value='$ficha->id'>$ficha->ficha</option>";
                        }
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