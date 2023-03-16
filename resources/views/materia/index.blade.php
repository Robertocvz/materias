<a href="{{url('/materia/create')}}"> Agregar nueva asignatura</a>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th>#</th>
                <th>Asignaturas</th>
                <th>Actividad1 </th>
                <th>CalificacionAct1</th>
                <th>Actividad2</th>
                <th>CalificacionAct2</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materias as $materia) 
            <tr>
             <td>{{$materia->id}}</td>
             <td>
            
            
            </td>
             <td>{{$materia->Asignaturas}}</td>
             <td>{{$materia->Actividad1}}</td>
             <td>{{$materia->CalificacionAct1}}</td>
             <td>{{$materia->Actividad2}}</td>
             <td>{{$materia->CalificacionAct2}}</td>
             <td>

             <a href="{{url('/materia/'.$materia->id.'/edit')}}"> editar</a>
                
             <form action="{{url('/materia/'.$materia->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit"  onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>
             
              </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>