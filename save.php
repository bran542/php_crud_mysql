<?php
include("db.php");

//VALIDAR QUE RECIBIMOS LOS DATOS
if (isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    //GUARDAR LOS DATOS EN MYSQL (CONSULTA)
    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query Failed");
    }

    //MENSAJE DE ALERTA Y COLOR DEL MENSAJE AL INSERTAR DATOS
    $_SESSION['message'] = 'Task Saved succesfully';
    $_SESSION['message_type'] = 'success';

    //Redirecciona a
    header("Location: index.php");
}


?>