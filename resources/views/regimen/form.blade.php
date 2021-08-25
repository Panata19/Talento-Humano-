<div class="mb-3">
    <label class="small mb-1" for="currentPassword">Nombre</label>
    <input class="form-control" id="nombre" name="nombre" type="text" value="{{ isset($regimen->nombre)?$regimen->nombre:''}}" placeholder="Nomrbe del regimen" />
</div>
<!-- Form Group (new password)-->

<button class="btn btn-success" type="submit" ">Guardar</button>