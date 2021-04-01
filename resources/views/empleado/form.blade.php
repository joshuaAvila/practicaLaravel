
<h1>{{ $modo }} Empleado</h1>
 @if (count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach 
        </ul>
    </div>
 @endif
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="{{ isset($empleado->Nombre )?$empleado->Nombre:old('Nombre') }}" id="nombre">
</div>

<div class="form-group">
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)? $empleado->ApellidoPaterno:old('ApellidoPaterno')  }}" id="ApellidoPaterno">
</div>

<div class="form-group">
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno">
</div>

<div class="form-group">
        <label for="correo">Correo </label>
        <input type="text" class="form-control" name="correo" value="{{isset($empleado->Correo)?$empleado->Correo:old('correo')  }}" id="correo">
</div>

<div class="form-group">
    <label for="foto">Foto</label>
        @if (isset($empleado->Foto))
        <img  class="img-thumbnail img-fluid"src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
        @endif
     <input type="file" name="foto" id="foto">
</div>

    <input type="submit"  class="btn btn-success" value="{{ $modo }} Datos">

    <a href="{{ url('empleado/')}}"  class="btn btn-info">Regresar</a>