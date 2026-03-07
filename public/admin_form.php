<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($car) ? 'Editar' : 'Nuevo'; ?> Vehículo · Global Car Metepec</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/admin.css?v=6">
</head>
<body>
    <div class="dashboard-container">
        <div class="dashboard-header">
            <div class="header-left">
                <i class="fas fa-car"></i>
                <h1><?php echo isset($car) ? 'Editar Vehículo' : 'Nuevo Vehículo'; ?></h1>
            </div>
            <a href="?action=dashboard" class="btn btn-outline btn-sm"><i class="fas fa-arrow-left"></i> Volver</a>
        </div>

        <form method="post" enctype="multipart/form-data" id="vehicleForm" action="?action=<?php echo isset($car) ? 'update' : 'save'; ?>">
            <?php if (isset($car)): ?>
                <input type="hidden" name="id" value="<?php echo $car['id']; ?>">
            <?php endif; ?>

            <div class="form-section">
                <h3><i class="fas fa-info-circle"></i> Información básica</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label><i class="fas fa-tag"></i> MARCA *</label>
                        <input type="text" name="brand" value="<?php echo isset($car) ? htmlspecialchars($car['brand']) : ''; ?>" required placeholder="Ej. Porsche">
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-tag"></i> MODELO *</label>
                        <input type="text" name="model" value="<?php echo isset($car) ? htmlspecialchars($car['model']) : ''; ?>" required placeholder="Ej. 911 Carrera">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label><i class="fas fa-calendar"></i> AÑO *</label>
                        <input type="number" name="year" value="<?php echo isset($car) ? $car['year'] : ''; ?>" required placeholder="2023" min="1900" max="<?php echo date('Y')+1; ?>">
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-tachometer-alt"></i> KILOMETRAJE *</label>
                        <input type="text" name="mileage" value="<?php echo isset($car) ? htmlspecialchars($car['mileage']) : ''; ?>" required placeholder="20,570 o N/A">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label><i class="fas fa-palette"></i> COLOR EXTERIOR *</label>
                        <input type="text" name="exterior_color" value="<?php echo isset($car) ? htmlspecialchars($car['exterior_color']) : ''; ?>" required placeholder="Ej. Negro">
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-palette"></i> COLOR INTERIOR *</label>
                        <input type="text" name="interior_color" value="<?php echo isset($car) ? htmlspecialchars($car['interior_color']) : ''; ?>" required placeholder="Ej. Beige">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label><i class="fas fa-engine"></i> MOTOR *</label>
                        <input type="text" name="engine" value="<?php echo isset($car) ? htmlspecialchars($car['engine']) : ''; ?>" required placeholder="Ej. 3.8L Carrera S">
                    </div>
                    <div class="form-group">
                        <label><i class="fas fa-dollar-sign"></i> PRECIO (MDP) *</label>
                        <input type="number" step="0.01" name="price" value="<?php echo isset($car) ? $car['price'] : ''; ?>" required placeholder="1.65" min="0">
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h3><i class="fas fa-cog"></i> Especificaciones técnicas</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label>Potencia</label>
                        <input type="text" name="potencia" value="<?php echo isset($car) ? htmlspecialchars($car['potencia']) : ''; ?>" placeholder="Ej. 400 HP">
                    </div>
                    <div class="form-group">
                        <label>Aceleración</label>
                        <input type="text" name="aceleracion" value="<?php echo isset($car) ? htmlspecialchars($car['aceleracion']) : ''; ?>" placeholder="Ej. 4.3s">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Velocidad Máx</label>
                        <input type="text" name="velocidad_max" value="<?php echo isset($car) ? htmlspecialchars($car['velocidad_max']) : ''; ?>" placeholder="Ej. 302 km/h">
                    </div>
                    <div class="form-group">
                        <label>Transmisión</label>
                        <input type="text" name="transmision" value="<?php echo isset($car) ? htmlspecialchars($car['transmision']) : ''; ?>" placeholder="Automática">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Tracción</label>
                        <input type="text" name="traccion" value="<?php echo isset($car) ? htmlspecialchars($car['traccion']) : ''; ?>" placeholder="Trasera">
                    </div>
                    <div class="form-group">
                        <label>Consumo</label>
                        <input type="text" name="consumo" value="<?php echo isset($car) ? htmlspecialchars($car['consumo']) : ''; ?>" placeholder="N/A">
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h3><i class="fas fa-list-ul"></i> Características</h3>
                <div class="form-group">
                    <textarea name="features" rows="6" placeholder="Ejemplo:&#10;Sistema de escape deportivo&#10;Rines de aleación 20&#10;Faros LED con láser"><?php 
                        if (isset($car) && !empty($car['features'])) {
                            echo htmlspecialchars(implode("\n", $car['features']));
                        }
                    ?></textarea>
                    <div class="info-text">
                        <i class="fas fa-info-circle"></i> Escribe cada característica en una línea nueva.
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h3><i class="fas fa-images"></i> Imágenes</h3>

                <?php if (isset($car) && $car['total_images'] > 0): ?>
                    <div class="form-group">
                        <div class="image-actions">
                            <label>Imágenes actuales</label>
                            <button type="button" class="btn-danger-sm" onclick="confirmDeleteImages()">
                                <i class="fas fa-trash"></i> Eliminar seleccionadas
                            </button>
                        </div>
                        <div class="image-preview">
                            <?php for ($i = 1; $i <= $car['total_images']; $i++): 
                                $imgPath = 'assets/images/' . $car['image_base'] . $i . $car['image_extension'];
                                $fullPath = __DIR__ . '/' . $imgPath;
                                $imgSrc = file_exists($fullPath) ? $imgPath : 'assets/images/placeholder.jpg';
                            ?>
                            <div class="image-item" title="Haz clic para vista previa">
                                <img src="<?php echo $imgSrc; ?>" alt="Imagen vehículo" onclick="previewImage('<?php echo $imgSrc; ?>')">
                                <input type="checkbox" name="delete_images[]" value="<?php echo $i; ?>">
                                <div class="delete-label">Eliminar</div>
                            </div>
                            <?php endfor; ?>
                        </div>
                        <div class="info-text" style="margin-bottom: 25px; padding-bottom: 10px; border-bottom: 1px dashed var(--gray-dark);">
                            <i class="fas fa-info-circle"></i> Marca las imágenes que deseas eliminar y haz clic en "Eliminar seleccionadas". Las restantes se renombrarán automáticamente.
                        </div>
                    </div>
                <?php endif; ?>

                <div style="margin-top: 30px; border-top: 1px solid var(--gray-dark); padding-top: 20px;">
                    <div class="form-group">
                        <label><i class="fas fa-upload"></i> <?php echo isset($car) ? 'Agregar nuevas imágenes' : 'Subir imágenes (hasta 20)'; ?></label>
                        <input type="file" name="<?php echo isset($car) ? 'new_images[]' : 'images[]'; ?>" multiple accept="image/jpeg,image/png,image/webp" class="file-input" id="imageUpload">
                        <div class="info-text">
                            <i class="fas fa-info-circle"></i> Formatos permitidos: JPG, PNG, WEBP. Tamaño máximo recomendado: 2MB por imagen.
                        </div>
                        <div class="file-info info-text" id="fileInfo"></div>
                    </div>
                </div>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn btn-primary btn-sm" id="submitBtn">
                    <i class="fas fa-save"></i> <?php echo isset($car) ? 'Actualizar Vehículo' : 'Guardar Vehículo'; ?>
                </button>
                <a href="?action=dashboard" class="btn btn-outline btn-sm"><i class="fas fa-times"></i> Cancelar</a>
            </div>
        </form>
    </div>

    <!-- Modal para vista previa de imágenes -->
    <div id="previewModal" style="display:none; position:fixed; z-index:1000; left:0; top:0; width:100%; height:100%; background:rgba(0,0,0,0.8); justify-content:center; align-items:center;" onclick="this.style.display='none'">
        <img id="previewImg" src="" style="max-width:90%; max-height:90%; border:3px solid var(--gold); border-radius:8px;">
    </div>

    <script>
        function previewImage(src) {
            const modal = document.getElementById('previewModal');
            const img = document.getElementById('previewImg');
            img.src = src;
            modal.style.display = 'flex';
        }

        function confirmDeleteImages() {
            const checkboxes = document.querySelectorAll('input[name="delete_images[]"]:checked');
            if (checkboxes.length === 0) {
                alert('No has seleccionado ninguna imagen para eliminar.');
                return;
            }
            if (confirm('¿Eliminar las imágenes seleccionadas? Esta acción no se puede deshacer.')) {
                document.getElementById('vehicleForm').submit();
            }
        }

        document.getElementById('vehicleForm').addEventListener('submit', function(e) {
            const submitBtn = document.getElementById('submitBtn');
            if (submitBtn.disabled) {
                e.preventDefault();
                return;
            }
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Procesando...';
        });

        document.getElementById('imageUpload').addEventListener('change', function() {
            const fileInfo = document.getElementById('fileInfo');
            const files = this.files;
            if (files.length > 0) {
                const allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];
                let invalidFiles = [];
                let validNames = [];
                for (let i = 0; i < files.length; i++) {
                    if (!allowedTypes.includes(files[i].type)) {
                        invalidFiles.push(files[i].name);
                    } else {
                        validNames.push(files[i].name);
                    }
                }
                if (invalidFiles.length > 0) {
                    fileInfo.innerHTML = `<i class="fas fa-exclamation-triangle" style="color:#f44336;"></i> Archivos no válidos: ${invalidFiles.join(', ')}. Solo se permiten JPG, PNG, WEBP.`;
                    this.value = '';
                } else {
                    fileInfo.innerHTML = `<i class="fas fa-check-circle" style="color:var(--gold);"></i> Seleccionados: ${validNames.join(', ')}`;
                }
            } else {
                fileInfo.innerHTML = '';
            }
        });

        window.onpageshow = function() {
            document.getElementById('submitBtn').disabled = false;
            document.getElementById('submitBtn').innerHTML = '<i class="fas fa-save"></i> <?php echo isset($car) ? 'Actualizar Vehículo' : 'Guardar Vehículo'; ?>';
        };
    </script>
</body>
</html>