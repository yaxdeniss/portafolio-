<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $upload_dir = 'uploads/';
        $upload_file = $upload_dir . basename($_FILES['file']['name']);
        
        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            echo "El archivo se ha subido correctamente.";
        } else {
            echo "Hubo un error al subir el archivo.";
        }
    } else {
        echo "No se ha seleccionado ningún archivo o ha ocurrido un error.";
    }
}
?>
