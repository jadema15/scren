<h2>Archivos cargados</h2>
 
   @if(count($archivos)>0)
      <ul>
        @foreach($archivos as $file)       
           <li>
           <a href="{{ url('files/'.$file) }}">{{ $file }}</a>
            </li>
        @endforeach
    </ul>
    @else
    <h2>No se han cargado archivos pdf en el servidor</h2>
    @endif
    
    <div>
        <p>
           <a href="{{ route('home') }}">Guardar Imagen</a> 
        </p>
    </div>
