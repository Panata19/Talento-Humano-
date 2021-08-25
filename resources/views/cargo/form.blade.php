<div class="mb-3">
    <label class="small mb-1" for="currentPassword">Nombre</label>
    <input class="form-control" id="nombre" name="nombre" type="text" value="{{ isset($cargo->nombre)?$cargo->nombre:''}}" placeholder="Nombre de cargo" />
    <label class="small mb-1" for="currentPassword">Departamento</label>
    <select name="departamento_id" id="departamento_id" class="form-control">
        <option value="{{ isset($cargo->departamento->id)?$cargo->departamento->id:''}}">{{ isset($cargo->departamento->nombre)?$cargo->departamento->nombre:'Seleccione...'}}</option>
        @foreach($departamentos as $departamento)
            <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
        @endforeach
    </select>

</div>
<!-- Form Group (new password)-->

<button class="btn btn-success" type="submit" ">Guardar</button>