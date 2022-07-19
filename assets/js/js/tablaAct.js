//definir antes de cargar la funcion
var pagina = 1;
var numPagina = 0;
//Carga la funcion
cargarJS();
//Cargar archivos al momemto de carga la pagina.
function cargarJS() {
    consultar();
}

function consultar() {

    $.ajax({
        url: '../controller/activocontroller.php',
        type: 'GET',
        data: {
            pagina: pagina,
            funcion: "listarTablaAct"
        }
    }).done(function (data) {
        // console.log(data);
        var datos = data.split("®");
        //paginacion
        var numRegistro = parseInt(datos[0]);
        numPagina = parseInt(numRegistro / 10);
        if (numRegistro % 10 > 0) numPagina++;

        var contenedorUL = document.getElementById("contenedorUL");
        contenedorUL.innerHTML = "";

        var li1 = document.createElement("li");
        li1.className = "page-item";
        var a1 = document.createElement("button");
        a1.className = "page-link";
        a1.value = "-";
        a1.style.fontFamily = "Times New Roman', Times, serif";
        a1.addEventListener('click', function () {
            modificarPagina(this.value);
        });
        a1.innerHTML = "&laquo;";
        li1.appendChild(a1);
        contenedorUL.appendChild(li1);

        var span = document.createElement("span");
        span.style.fontFamily = "Times New Roman', Times, serif";
        span.style.letterSpacing = "3px";
        span.innerHTML = " " + pagina + "/" + numPagina + " ";

        contenedorUL.appendChild(span);

        var li3 = document.createElement("li");
        li3.className = "page-item";
        var a3 = document.createElement("button");
        a3.className = "page-link";
        a3.style.fontFamily = "Times New Roman', Times, serif";
        a3.value = "+";
        a3.addEventListener('click', function () {
            modificarPagina(this.value);
        });
        a3.innerHTML = "&raquo;";

        li3.appendChild(a3);
        contenedorUL.appendChild(li3);

        var activo = JSON.parse(datos[1]);
        var contenedor = document.getElementById("listarActivo");
        contenedor.innerHTML = "";
        for (i = 0; i < activo.length; i++) {
            agregarActivo(activo[i]);
        }
        if (activo.length == 0) {
            crearTr(16, "listarActivo");
        }
    })
}

function agregarActivo(activo) {
    var tr = document.createElement("tr");
    tr.id = activo['id_formato'];

    var td0 = document.createElement("td");
    td0.innerHTML = activo['id_formato'];

    var td1 = document.createElement("td");
    td1.innerHTML = activo['fecha'];

    var td2 = document.createElement("td");
    td2.innerHTML = activo['id_area'];

    var td3 = document.createElement("td");
    td3.innerHTML = activo['activo'];

    var td4 = document.createElement("td");
    td4.innerHTML = activo['descripcion_activo'];

    var td5 = document.createElement("td");
    td5.innerHTML = activo['fecha_modificacion'];

    var td6 = document.createElement("td");
    td6.innerHTML = activo['idioma'];

    var td7 = document.createElement("td");
    td7.innerHTML = activo['conservacion'];

    var td8 = document.createElement("td");
    td8.innerHTML = activo['formato'];

    var td9 = document.createElement("td");
    td9.innerHTML = activo['informacion_publica'];

    var td10 = document.createElement("td");
    td10.innerHTML = activo['propietario_activo'];

    var td11 = document.createElement("td");
    td11.innerHTML = activo['nivel_confidencialidad'];

    var td12 = document.createElement("td");
    td12.innerHTML = activo['confidelidad'];

    var td13 = document.createElement("td");
    td13.innerHTML = activo['integridad'];

    var td14 = document.createElement("td");
    td14.innerHTML = activo['disponibilidad'];

    var td15 = document.createElement("td");
    td15.innerHTML = activo['valor'];

    var td16 = document.createElement("td");
    td16.innerHTML = activo['nivel_tasacion'];

    var td17 = document.createElement("td");

    var botonEditar = document.createElement("a");
    botonEditar.href = "actualizarInformacion.php?idFormato=" + activo['id_formato'];
    botonEditar.style.margin = "2px";
    botonEditar.className = "btn btn-warning";
    botonEditar.innerHTML = '<i class="fas fa-edit"></i>';

    var botonEliminar = document.createElement("a");
    botonEliminar.className = "btn btn-danger";
    botonEliminar.style.margin = "2px";
    botonEliminar.setAttribute("data-bs-toggle", "modal");
    botonEliminar.setAttribute("data-bs-target", "#eliminarFormulario3");
    botonEliminar.value = activo['id_formato'];
    botonEliminar.addEventListener('click', function () {
        eliminarFormato(this);
    });
    botonEliminar.innerHTML = '<i class="fas fa-trash-alt"></i>';


    var activo = document.getElementById("activoFuncion").value;
    console.log(activo);

    if (activo == "editar") {
        td17.appendChild(botonEditar);
    }

    if (activo == "eliminar") {
        td17.appendChild(botonEliminar);
    }

    tr.appendChild(td0);
    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    tr.appendChild(td4);
    tr.appendChild(td5);
    tr.appendChild(td6);
    tr.appendChild(td7);
    tr.appendChild(td8);
    tr.appendChild(td9);
    tr.appendChild(td10);
    tr.appendChild(td11);
    tr.appendChild(td12);
    tr.appendChild(td13);
    tr.appendChild(td14);
    tr.appendChild(td15);
    tr.appendChild(td16);
    tr.appendChild(td17);

    var contenedor = document.getElementById("listarActivo");
    contenedor.appendChild(tr);
}

function modificarPagina(campo) {
    if (campo == "-" && pagina > 1) {
        pagina -= 1;
    } else if (campo == "+" && pagina < numPagina) {
        pagina += 1;
    }
    consultar();
}

function crearTr(columnas, idContenedor) {
    var tr = document.createElement("tr");
    tr.id = "trVacio";
    var td = document.createElement("td");
    td.colSpan = columnas;
    td.style = "font-family: 'Times New Roman', Times, serif; text-align: center; font-weight: 600;"
    td.innerHTML = "No hay informacion que mostrar, agrege informacion nueva";

    tr.appendChild(td);
    var contenedor = document.getElementById(idContenedor);
    contenedor.appendChild(tr);
}