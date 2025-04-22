<style>
        .title {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 8px;
            margin-bottom: 5px;
        }

        .date {
            color: #2980b9;
            font-size: 1.2em;
        }

        .attendance-container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 1px;
            background-color: #ddd;
            border: 1px solid #ddd;
            margin: 25px 0;
        }

        .grid-header {
            background-color: #f2f2f2;
            font-weight: bold;
            padding: 12px;
            text-align: left;
        }

        .student-item {
            background-color: white;
            padding: 12px;
            display: flex;
            align-items: center;
        }

        .student-item:nth-child(6n+4),
        .student-item:nth-child(6n+5),
        .student-item:nth-child(6n+6) {
            background-color: #f9f9f9;
        }

        .time-slot {
            background-color: #e8f4fc;
            padding: 6px 10px;
            border-radius: 4px;
            font-size: 0.9em;
            display: inline-block;
        }

        .alert {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 4px;
            margin: 25px 0;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .alert::before {
            content: "⚠";
            margin-right: 10px;
            font-size: 1.3em;
        }

        .action-btn {
            background-color: #3498db;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
            display: block;
            margin: 30px auto 0;
            transition: background-color 0.3s;
        }

        .action-btn:hover {
            background-color: #2980b9;
        }

        .divider {
            height: 1px;
            background-color: #eee;
            margin: 30px 0;
        }

        /* Estilos para los botones de acción */
        .btn-group {
            display: flex;
            gap: 8px;
        }

        .btn {
            padding: 6px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.9em;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.3s;
            width: 32px;
            height: 32px;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .btn-presente {
            background-color: #28a745;
            color: white;
        }

        .btn-excusa {
            background-color: #ffc107;
            color: #212529;
        }

        .btn-ausente {
            background-color: #dc3545;
            color: white;
        }

        .btn-icon {
            width: 20px;
            height: 20px;
        }
        
        .btn-save {
            background-color: #4da6ff;
            border: none;
            border-radius: 6px;
            padding: 8px 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            color: white;
            font-weight: 500;
        }
        
        .btn-save:hover {
            background-color: #3a8de0;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 25px;
            border-radius: 8px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            position: relative;
            top: 0;
            transform: none;
            margin: auto;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .modal-title {
            font-size: 1.3em;
            color: #2c3e50;
            margin: 0;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 1.5em;
            cursor: pointer;
            color: #777;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1em;
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }
    </style>
<div>

<div class="attendance-container flex flex-col">
        <!-- Encabezados -->
        <div class="grid-header">Nombre</div>
        <div class="grid-header">Bloque</div>
        <div class="grid-header">Acciones</div>
        
        <!-- Estudiantes -->
        <div class="student-item">Juan Esteban Lopez</div>
        <div class="student-item"></div>
        <div class="student-item">
            <div class="btn-group">
                <button class="btn btn-presente" title="Presente">
                    <i class="fas fa-check"></i>
                </button>
                <button class="btn btn-ausente" title="Ausente">
                    <i class="fas fa-times"></i>
                </button>
                <button class="btn btn-excusa" title="Excusa">
                    <i class="fas fa-triangle-exclamation"></i>
                </button>
            </div>
        </div>
        
        <div class="student-item">Jhon Alexander Pineda</div>
        <div class="student-item"></div>
        <div class="student-item">
            <div class="btn-group">
                <button class="btn btn-presente" title="Presente">
                    <i class="fas fa-check"></i>
                </button>
                <button class="btn btn-ausente" title="Ausente">
                    <i class="fas fa-times"></i>
                </button>
                <button class="btn btn-excusa" title="Excusa">
                    <i class="fas fa-triangle-exclamation"></i>
                </button>
            </div>
        </div>
        
        <div class="student-item">Angie Dahiana Rios</div>
        <div class="student-item"><span class="time-slot">07:00 AM - 12:00 PM</span></div>
        <div class="student-item">
            <div class="btn-group">
                <button class="btn btn-presente" title="Presente">
                    <i class="fas fa-check"></i>
                </button>
                <button class="btn btn-ausente" title="Ausente">
                    <i class="fas fa-times"></i>
                </button>
                <button class="btn btn-excusa" title="Excusa">
                    <i class="fas fa-triangle-exclamation"></i>
                </button>
            </div>
        </div>
        
    </div>

    <div class="alert">
        ALERTA! Hay aprendices con más de tres inasistencias.
    </div>

    <div class="divider"></div>

    <button class="action-btn">Tomar Asistencia</button>

    <!-- Modal para excusa -->
    <div id="excuseModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Registrar Excusa</h3>
                <button class="close-btn">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="excuseReason">Motivo de la excusa:</label>
                    <textarea id="excuseReason" class="form-control" rows="4" placeholder="Describa el motivo de la excusa"></textarea>
                </div>
                <div class="form-group">
                    <label for="arrivalTime">Hora de llegada:</label>
                    <input type="time" id="arrivalTime" class="form-control">
                </div>
                <div class="form-group">
                    <label for="departureTime">Hora de salida:</label>
                    <input type="time" id="departureTime" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-save">
                    <img src="images/save.png" alt="Guardar" class="btn-icon">
                    Guardar
                </button>
            </div>
        </div>
    </div>

    <script>
        // Funcionalidad del modal
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('excuseModal');
            const excuseBtns = document.querySelectorAll('.btn-excusa');
            const closeBtns = document.querySelectorAll('.close-btn');

            // Abrir modal al hacer clic en cualquier botón de excusa
            excuseBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    modal.style.display = 'flex';
                });
            });

            // Cerrar modal
            closeBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    modal.style.display = 'none';
                });
            });

            // Cerrar modal al hacer clic fuera del contenido
            window.addEventListener('click', function(event) {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });
        });
    </script>
</div>