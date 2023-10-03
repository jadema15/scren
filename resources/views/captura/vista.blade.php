<link rel="stylesheet" type="text/css" href="../css/style.css">

<div class="container">

<h2 class="label-title">Imágenes Capturadas</h2>

<div class="bordered-form">
 @if(count($archivos)>0)
      <ul class="bootstrap-list">
        @foreach($archivos as $file)       
           <li>
           <a href="{{ url('files/'.$file) }}">{{ $file }}</a>
            </li>
        @endforeach
    </ul>
    @else
    <h2>No se han cargado archivos pdf en el servidor</h2>
    @endif    
</div>
 
  
    <div>
        <p>
           <a class="button-bootstrap-subir" href="{{ route('home') }}">Capturar Imagen</a> 
        </p>
    </div>

</div>
