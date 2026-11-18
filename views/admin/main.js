
        
        fetch("http://localhost/EatingBulls/?controller=carta&action=api")
        .then(respuesta => respuesta.json())
        .then(r =>{
            this.productos = r;
            const tablaProductos= document.getElementById("productos");
            this.productos.foreach(p =>{
                //arreglo guarro cambiar de manera pro con un bucle más adelante
                const tr = document.createElement("tr");
                const td1 = document.createElement("td");
                td1.textContent = p.id;
                tr.append(td1);

                const td2 = document.createElement("td");
                td2.textContent = p.nombre;
                tr.append(td2);

                tablaProductos.append(td2);

                const td3 = document.createElement("td");
                td3.textContent = p.talla;
                tr.append(td3);

                tablaProductos.append(td3);

                const td4 = document.createElement("td");
                td4.textContent = p.precio;
                tr.append(td4);

                tablaProductos.append(td4);

            });
        })

        const formularioEliminarProducto = document.querySelector("#eliminarProducto");
        formularioEliminarProducto.addEventListener("submit", (e) => {
            e.preventDefault();
            const id = e.target[0].value;
            
            fetch("http://localhost/EatingBulls/?controller=carta&action=api",
                {
                method: 'DELETE',
                body: JSON.stringify(id)
                }
            )
        })

        this.enlaces = document.querySelectorAll("a");
        this.secciones= document.querySelectorAll("section");

    let admin = new AdministrarVistas();
    admin.inicializar();
