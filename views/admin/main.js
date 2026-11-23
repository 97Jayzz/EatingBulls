// class AdministrarVistas{
//   constructor{

//    }
//}
        
fetch("?controller=carta&action=api")
.then(respuesta => respuesta.json())
.then(r =>{
    let respuesta = r;
    respuesta.forEach(e => {
        this.productos.push(new Productos (e.id, e.nombre, e.categoria, e.precio))
    })
    const tablaProductos= document.getElementById("productos");
    productos.forEach(p =>{
        //arreglo guarro cambiar de manera pro con un bucle más adelante
        const tr = document.createElement("tr");

        const td1 = document.createElement("td");
        td1.textContent = p.id;
        tr.append(td1);

        const td2 = document.createElement("td");
        td2.textContent = p.nombre;
        tr.append(td2);

        const td3 = document.createElement("td");
        td3.textContent = p.categoria;
        tr.append(td3);

        const td4 = document.createElement("td");
        td4.textContent = p.precio;
        tr.append(td4);

        const td5 = document.createElement("td");
        const botonEliminar = document.createElement("button");
        botonEliminar.textContent="Eliminar";
        botonEliminar.addEventListener("click", () =>{
            p.eliminar();
        });
        td5.append(botonEliminar);
        tr.append(td5);
 
        tablaProductos.append(tr);

            });
        })

        class Productos{
            constructor(id, nombre, talla, precio){
                this.id = id;
                this.nombre = nombre;
                this.talla = talla;
                this.precio = precio;
            }

            eliminar(){
                fetch("?controller=carta&action=api",{
                    method: 'DELETE',
                    body: JSON.stringify(this.id)
                }).then(r => r.json())
            .then(r => console.log(r));
            }
        }

        const formularioEliminarProducto = document.querySelector("#eliminarProducto");
        formularioEliminarProducto.addEventListener("submit", (e) => {
            e.preventDefault();
            const id = e.target[0].value;
            
            fetch("?controller=carta&action=api",
                {
                method: 'DELETE',
                body: JSON.stringify(id)
                })
            .then(r => r.json())
            .then(r => console.log(r));
        })

    //    this.enlaces = document.querySelectorAll("a");
    //  this.secciones= document.querySelectorAll("section");

    // let admin = new AdministrarVistas();
    // admin.inicializar();
