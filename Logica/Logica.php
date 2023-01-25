<?php
    require_once("../Model/ProductoModel.php");

    $data = json_decode(file_get_contents("php://input"));

    switch ($data->operacion) {
        case "Guardar":
            $ProductoModel = new Producto();
            $ProductoModel->setNombre($data->nombre);
            $ProductoModel->setPrecio($data->precio);
            $ProductoModel->setMarca($data->marca);
            $ProductoModel->setFoto($data->foto);
            $ProductoModel->insertarProducto();
            echo "Guardado";
            break;

        case "BuscarTodos":
            $ProductoModel = new Producto();
            $resultado = $ProductoModel->BuscarTodos();
            foreach($resultado as $fila) {
                //print_r($fila);
                echo "<tr align='center'><td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td>
                <td><button class='btn btn-danger' onclick='Eliminar($fila[0]);'>Eliminar</button>
                <button class='btn btn-warning' onclick='BuscarPorId($fila[0]);'>Editar</button></td></tr>";
            }
            break;

        case "Eliminar":
            $ProductoModel = new Producto();
            $ProductoModel->setId($data->id);
            $ProductoModel->eliminarProducto();
            echo "Eliminado";
            break;

        case "BuscarPorId":
            $ProductoModel = new Producto();
            $ProductoModel->setId($data->id);
            echo $ProductoModel->BuscarPorId();            
           
            break;

        case "Actualizar":
            $ProductoModel = new Producto();
            $ProductoModel->setId($data->id);
            $ProductoModel->setNombre($data->nombre);
            $ProductoModel->setPrecio($data->precio);
            $ProductoModel->setMarca($data->marca);
            $ProductoModel->setFoto($data->foto);
            $ProductoModel->actualizarProducto();
            echo "Actualizado";
            break;
    }    
?>