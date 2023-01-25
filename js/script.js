function Guardar(){
    let nombre = document.querySelector("#nombre").value;
    let precio = document.querySelector("#precio").value;
    let marca = document.querySelector("#marca").value;
    let foto = document.querySelector("#foto").value;
    let res = document.querySelector("#res");
    let id =  document.querySelector("#id").value;

    let xhr = new XMLHttpRequest();

    xhr.open("POST","../Logica/Logica.php",true);

    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status === 200){
            res.innerHTML = this.responseText;
        }
    }

    let data = JSON.stringify({"nombre":nombre,"precio":precio,"marca":marca,"foto":foto, "operacion":"Guardar","id": id});
    alert(id);
    xhr.send(data);
}

function BuscarTodos(){
    
    let res = document.querySelector("#datos");
    let xhr = new XMLHttpRequest();
    xhr.open("POST","../Logica/Logica.php",true);

    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status === 200){
            res.innerHTML = this.responseText;
        }
    }

    let data = JSON.stringify({"operacion":"BuscarTodos"});
    xhr.send(data);
}

function eliminar($id){
    
    let res = document.querySelector("#res");
    let xhr = new XMLHttpRequest();
    xhr.open("POST","../Logica/Logica.php",true);
   //alert($id);
    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status === 200){
            res.innerHTML = "Eliminado";
        }
    }

    let data = JSON.stringify({"id":$id,"operacion":"Eliminar"});
    xhr.send(data);
}

function editar($a){

    $nombre = $a[1];
    $precio = $a[2];
    $marca = $a[3];
    $foto = $a[4];
    $id = $a[0];
    document.getElementById('nombre').value= $nombre;
    document.getElementById('precio').value=$a[2];
    document.getElementById('marca').value=$a[3];
    document.getElementById('foto').value=$a[4];
    document.getElementById('id').value=$a[0];
    let res = document.querySelector("#res");
    let xhr = new XMLHttpRequest();
    xhr.open("POST","../Logica/Logica.php",true);
    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status === 200){
            res.innerHTML = "listo para editar";
        }
    }

    
}

function salir(){
    let xhr = new XMLHttpRequest();
    window.open('../index.php','_self');
    xhr.open("POST","../Logica/Logica.php",true);
    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status === 200){
            res.innerHTML = "Saliendo";
        }
    }
    let data = JSON.stringify({"operacion":"Salir"});
    xhr.send(data);

}