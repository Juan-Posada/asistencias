<div class="flex flex-col items-center bg-gray-100 p-8 rounded-2xl shadow-lg max-w-4xl mx-auto gap-5">
    <h2 class="text-[30px] font-bold text-[#00AF00]">Crear Usuario</h2>

    <form class="gap-3 flex flex-col w-full max-w-md" action="/usuario/create" method="post">
        <div class="flex flex-col gap-2">
            <label class="text-[18px] font-medium">Nombre:</label>
            <input type="text" name="nombre" required class="rounded-md py-2 px-3 bg-white border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>

        <div class="flex flex-col gap-2">
            <label class="text-[18px] font-medium">Email:</label>
            <input type="email" name="email" required class="rounded-md py-2 px-3 bg-white border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>

        <div class="flex flex-col gap-2">
            <label class="text-[18px] font-medium">Contraseña:</label>
            <input type="password" name="contrasena" required class="rounded-md py-2 px-3 bg-white border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>

        <div class="flex flex-col gap-2">
            <label class="text-[18px] font-medium">Rol:</label>
            <select name="idRol" id="rolUsuario" required class="rounded-md py-2 px-3 bg-white border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500">
                <option value="">Seleccione un rol</option>
                <?php 
                if (isset($roles) && count($roles) > 0) {
                    foreach($roles as $rol){
                        echo "<option value=\"{$rol->id}\">{$rol->nombre}</option>";
                    }
                }
                ?>
            </select>
        </div>

        <!-- Campos adicionales (solo si los vas a guardar en otra tabla) -->
        <div id="extraFields"></div>

        <div class="mt-6 flex justify-center">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-full transition duration-300">
                Guardar
            </button>
        </div>
    </form>
</div>

<script>
// Lógica solo si más adelante manejas datos adicionales según el rol
document.getElementById("rolUsuario").addEventListener("change", function () {
    let extraFields = document.getElementById("extraFields");
    extraFields.innerHTML = ""; // Limpiar si se cambia

    let selectedText = this.options[this.selectedIndex].text;

    if (selectedText === "Aprendiz") {
        extraFields.innerHTML = `
            <div class="flex flex-col gap-2 mt-3">
                <label class="text-[18px] font-medium">Ficha:</label>
                <select name="idGrupo" class="rounded-md py-2 px-3 bg-white border border-gray-300">
                    <option>Seleccione el grupo</option>
                    <?php 
                    if (isset($grupos) && count($grupos) > 0) {
                        foreach($grupos as $grupo){
                            echo "<option value=\"{$grupo->id}\">{$grupo->ficha}</option>";
                        }
                    }
                    ?>
                </select>
            </div>
        `;
    } else if (selectedText === "Instructor") {
        extraFields.innerHTML = `
            <div class="flex flex-col gap-2 mt-3">
                <label class="text-[18px] font-medium">Centro:</label>
                <input type="text" name="profesion" class="rounded-md py-2 px-3 bg-white border border-gray-300">
            </div>
        `;
    } else if (selectedText === "Investigador") {
        extraFields.innerHTML = `
            <div class="flex flex-col gap-2 mt-3">
                <label class="text-[18px] font-medium">Teléfono:</label>
                <input type="text" name="telefono" class="rounded-md py-2 px-3 bg-white border border-gray-300">
            </div>
            <div class="flex flex-col gap-2 mt-3">
                <label class="text-[18px] font-medium">Institución:</label>
                <input type="text" name="institucion" class="rounded-md py-2 px-3 bg-white border border-gray-300">
            </div>
        `;
    }
});
</script>
