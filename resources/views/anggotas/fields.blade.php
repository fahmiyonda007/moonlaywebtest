<!-- Kode Field -->
<div class="form-group col-sm-12">
    {!! Form::label('kode', 'Kode') !!}
    {!! Form::text('kode', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nama', 'Nama') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- No Telp Field -->
<div class="form-group col-sm-12">
    {!! Form::label('notelp', 'No Telp') !!}
    {!! Form::text('notelp', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('anggotas.index') }}" class="btn btn-default">Cancel</a>
</div>
