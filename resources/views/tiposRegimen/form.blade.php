<div class="mb-3">
    <label class="small mb-1" for="currentPassword">Nombre</label>
    <input class="form-control" id="nombre" name="nombre" type="text" value="{{ isset($tiposRegimen->nombre)?$tiposRegimen->nombre:''}}" placeholder="Tipos Regimen" />
    <label class="small mb-1" for="currentPassword">regimen</label>
    <select name="regimen_id" id="regimen_id" class="form-control">
        <option value="{{ isset($tiposRegimen->regimen->id)?$tiposRegimen->regimen->id:''}}">{{ isset($tiposRegimen->regimen->nombre)?$tiposRegimen->regimen->nombre:'Seleccione...'}}</option>
        @foreach($regimens as $regimen)
            <option value="{{$regimen->id}}">{{$regimen->nombre}}</option>
        @endforeach
    </select>

</div>
<!-- Form Group (new password)-->

<button class="btn btn-success" type="submit" ">Guardar</button>