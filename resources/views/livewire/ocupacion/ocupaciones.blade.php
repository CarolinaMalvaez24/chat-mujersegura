<div>
    <table>
      <thead>
          <tr>
              <th>No.</th>
              <th>Descripcion</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach($actividades_realiza as $value)
          <tr>
              <td>{{$loop->index+1}}</td>
              <td>{{$value->actividad_realiza}}</td>
          </tr>
          @endforeach
      </tbody>
    </table> 
  </div>