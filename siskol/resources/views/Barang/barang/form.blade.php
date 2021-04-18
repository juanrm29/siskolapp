<div class="form-group row justify-content-center  {{ $errors->has('tanggal') ? 'has-error' : ''}}">
    {!! Form::label('tanggal', 'Tanggal', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('tanggal', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('tanggal', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center  {{ $errors->has('nama_barang') ? 'has-error' : ''}}">
    {!! Form::label('nama_barang', 'Nama Barang', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_barang', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('nama_barang', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group row justify-content-center {{ $errors->has('kategori') ? 'has-error' : ''}}"> 
    {!! Form::label('kategori', 'Kategori', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6"> <select name="kategori" class="form-control">
     @foreach ($kategori as $kategori)
                          <option value="{{ $kategori->nama_kategori }}">{{ $kategori->nama_kategori }}</option>
                        @endforeach
    </select>
    </div>
</div>
<div class="form-group row justify-content-center  {{ $errors->has('jumlah') ? 'has-error' : ''}}">
    {!! Form::label('jumlah', 'Jumlah', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('jumlah', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('jumlah', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center  {{ $errors->has('harga_satuan') ? 'has-error' : ''}}">
    {!! Form::label('harga_satuan', 'Harga Satuan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('harga_satuan', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('harga_satuan', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group row justify-content-center  {{ $errors->has('kondisi') ? 'has-error' : ''}}">
    {!! Form::label('kondisi', 'Kondisi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6"> <select name="kondisi" class="form-control">
        <option value="Sangat Baik">Sangat Baik</option>
        <option value="Baik">Baik</option>
        <option value="Rusak">Rusak</option>
      </select>  
    </div>
</div>

<div class="form-group row justify-content-center">
    <div class="col-lg-4 col-12 align-content-center">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
