<div class="data-container">
    <div class="navegate-group">
        <div class="back">
            <a href="/usuario/view"><img src="/img/back.svg"></a>
        </div>
    </div>
    <div class="info">
    <form action="/usuario/create" method="post">
        <div class="form-group">
            <label for="">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Contraseña:</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Rol:</label>
            <select name="fkIdRol" id="fkIdRol" class="form-control" required>
                <option value=""></option>
                <?php
                    if (isset($roles) && count($roles) > 0) {
                        foreach ($roles as $rol) {
                            echo "<option value='$rol->id'>$rol->nombre</option>";
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