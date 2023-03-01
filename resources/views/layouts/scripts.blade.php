<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'><script  src="./script.js"></script><script  src="{{ asset('js/scriptshome.js') }}"></script>
<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JavaScript de DataTables -->
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
  $('#miTabla').DataTable();
});
$.extend(true, $.fn.dataTable.defaults, {
    language: {
        decimal: ",",
        thousands: ".",
        info: "Mostrando registros del START al END de un total de TOTAL registros",
        infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
        infoPostFix: "",
        infoFiltered: "(filtrado de un total de MAX registros)",
        loadingRecords: "Cargando...",
        lengthMenu: "Mostrar MENU registros",
        paginate: {
            first: "Primero",
            last: "Último",
            next: "Siguiente",
            previous: "Anterior",
        },
        processing: "Procesando...",
        search: "Buscar:",
        searchPlaceholder: "Término de búsqueda",
        zeroRecords: "No se encontraron resultados",
        emptyTable: "Ningún dato disponible en esta tabla",
        aria: {
            sortAscending:
                ": Activar para ordenar la columna de manera ascendente",
            sortDescending:
                ": Activar para ordenar la columna de manera descendente",
        },
        //only works for built-in buttons, not for custom buttons
        buttons: {
            create: "Nuevo",
            edit: "Cambiar",
            remove: "Borrar",
            copy: "Copiar",
            csv: "fichero CSV",
            excel: "tabla Excel",
            pdf: "documento PDF",
            print: "Imprimir",
            colvis: "Visibilidad columnas",
            collection: "Colección",
            upload: "Seleccione fichero....",
        },
        select: {
            rows: {
                _: "%d filas seleccionadas",
                0: "clic fila para seleccionar",
                1: "una fila seleccionada",
            },
        },
    },
});
</script>
</body>
</html>