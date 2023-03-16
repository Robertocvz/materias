<label for="Asignaturas">Asignaturas </label>
    <input type="text" name="Asignaturas" value="{{isset($materia->Asignatura)?$materia->Asignatura:' '}}" id="Asignaturas"> 
    <br>
    <label for="Actividad1">Actividad1 </label>
    <input type="text" name="Actividad1" value="{{isset($materia->Actividad1)?$materia->Actividad1:' '}}"id="Actividad1"> 
    <br>
    <label for="CalificacionAct1">CalificacionAct1 </label>
    <input type="text" name="CalificacionAct1" value="{{isset($materia->CalificacionAct1)?$materia->CalificacionAct1:' '}}"id="CalificacionAct1"> 
    <br>
    <label for="Actividad2">Actividad2 </label>
    <input type="text" name="Actividad2" value="{{isset($materia->Actividad2)?$materia->Actividad2:' '}}"id="Actividad2"> 
    <br>
    <label for="CalificacionAct2">CalificacionAct2 </label>
    <input type="text" name="CalificacionAct2" value="{{isset($materia->CalificacionAct2)?$materia->CalificacionAct2:' '}}"id="CalificacionAct2"> 
    <br>
    <input type="submit" value="Guardar datos"> 
    <br>
    <a href="{{url('/materia/')}}"> REGRESAR </a>