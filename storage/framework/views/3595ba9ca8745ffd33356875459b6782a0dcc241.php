<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script>
            a = 0;
            function addPregunta(){
                    a++;

                    var div = document.createElement('div');
                    // div.setAttribute('class', 'form-inline');
                        div.innerHTML = '<div  class="pregunta_'+a+' "><label for="txtNombre">Pregunta</label><input class="form-control" name="pregunta_'+a+'" type="text"/></div><div class="pregunta_'+a+'"><label for="txtNombre">Respuesta</label><input class="form-control" name="respuesta_'+a+'" type="text"/></div>';
                        document.getElementById('Preguntas').appendChild(div);document.getElementById('Preguntas').appendChild(div);
            }
        </script>
    </head>

    <body>
        <div class="container">
            <form action="formulario2.html" id="formulario" method="get">
                <div class="form-group">
                    <input type="button" class="btn btn-success" id="add_pregunta()" onClick="addPregunta()" value="Agregar" />
                </div>
                <!-- El id="Preguntas" indica que la función de JavaScript dejará aquí el resultado -->
                <div class="form-group" id="Preguntas"></div>
            </form>
        </div>

    </body>
</html><?php /**PATH C:\laragon\www\Estadia\pyxis\resources\views/admin/productos/prueba.blade.php ENDPATH**/ ?>