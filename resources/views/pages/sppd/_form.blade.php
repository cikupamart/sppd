<div id="form-sppd">
    <div class="form-group{{ $errors->has('surat_perintah_id') ? ' has-error' : '' }}">
        {!! Form::label('surat_perintah_id', 'Pelaksana') !!}
        <select class="select2surat form-control" name="surat_perintah_id">
        @if (!empty($data->surat))
            <option value="{{ $data->surat['id'] }}" selected>{{ $data->surat['nomor'] }}</option>
        @endif
        </select>
        {{-- {!! Form::select('pegawai_id', $pegawai, null, ['id' => 'pegawai_id', 'class' => 'form-control select2', 'required' => 'required']) !!} --}}
        <small class="text-danger">{{ $errors->first('surat_perintah_id') }}</small>
    </div>
    <div class="form-group{{ $errors->has('nomor') ? ' has-error' : '' }}">
        {!! Form::label('nomor', 'Nomor Surat') !!}
        {!! Form::text('nomor', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('nomor') }}</small>
    </div>
    <div class="form-group{{ $errors->has('pegawai_id') ? ' has-error' : '' }}">
        {!! Form::label('pegawai_id', 'Pelaksana') !!}
        <select class="select2 form-control" name="pegawai_id">
        @if (!empty($data->pegawai))
                <option value="{{ $data->pegawai['id'] }}" selected>{{ $data->pegawai['nama'] }}</option>
        @endif
        </select>
        {{-- {!! Form::select('pegawai_id', $pegawai, null, ['id' => 'pegawai_id', 'class' => 'form-control select2', 'required' => 'required']) !!} --}}
        <small class="text-danger">{{ $errors->first('pegawai_id') }}</small>
    </div>
    <div class="form-group{{ $errors->has('perjalanan') ? ' has-error' : '' }}">
        {!! Form::label('perjalanan', 'Perjalanan') !!}
        {!! Form::text('perjalanan', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('perjalanan') }}</small>
    </div>
    <div class="form-group{{ $errors->has('tempat_berangkat') ? ' has-error' : '' }}">
        {!! Form::label('tempat_berangkat', 'Tempat Berangkat') !!}
        {!! Form::text('tempat_berangkat', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('tempat_berangkat') }}</small>
    </div>
    <div class="form-group{{ $errors->has('tempat_tujuan') ? ' has-error' : '' }}">
        {!! Form::label('tempat_tujuan', 'Tempat Tujuan') !!}
        {!! Form::text('tempat_tujuan', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('tempat_tujuan') }}</small>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('tanggal_berangkat') ? ' has-error' : '' }}">
                {!! Form::label('tanggal_berangkat', 'Tanggal Keberangkatan') !!}
                <div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
                    {!! Form::text('tanggal_berangkat', null, ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly']) !!}
                    <span class="input-group-btn">
                        <button class="btn default" type="button">
                            <i class="fa fa-calendar"></i>
                        </button>
                    </span>
                    <small class="text-danger">{{ $errors->first('tanggal_berangkat') }}</small>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group{{ $errors->has('tanggal_kembali') ? ' has-error' : '' }}">
                {!! Form::label('tanggal_kembali', 'Tanggal Harus Kembali') !!}
                <div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
                    {!! Form::text('tanggal_kembali', null, ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly']) !!}
                    <span class="input-group-btn">
                        <button class="btn default" type="button">
                            <i class="fa fa-calendar"></i>
                        </button>
                    </span>
                    <small class="text-danger">{{ $errors->first('tanggal_kembali') }}</small>
                </div>
            </div> 
        </div>
    </div>
    <div id="relation">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group{{ $errors->has('nama_pengikut') ? ' has-error' : '' }}">
                    {!! Form::label('nama_pengikut[]', 'Nama') !!}
                    {!! Form::text('nama_pengikut[]', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('nama_pengikut[]') }}</small>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group{{ $errors->has('umur_pengikut[]') ? ' has-error' : '' }}">
                    {!! Form::label('umur_pengikut[]', 'Umur') !!}
                    {!! Form::text('umur_pengikut[]', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('umur_pengikut[]') }}</small>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group{{ $errors->has('hubungan_pengikut') ? ' has-error' : '' }}">
                    {!! Form::label('hubungan_pengikut[]', 'Hubungan Keluarga') !!}
                    {!! Form::text('hubungan_pengikut[]', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    <small class="text-danger">{{ $errors->first('hubungan_pengikut[]') }}</small>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-sm btn-primary" type="button" id="btn1">
        Tambah+
    </button>

    <div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
        {!! Form::label('keterangan', 'Keterangan Lain-lain') !!}
        {!! Form::text('keterangan', null, ['class' => 'form-control', 'required' => 'required']) !!}
        <small class="text-danger">{{ $errors->first('keterangan') }}</small>
    </div>

    
</div>


@push('scripts')
<script>
    $(document).ready(function(){
        $('.date-picker').datepicker({
            orientation: "left",
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true
        });    
        $("#btn1").click(function(){
            $("#relation").append('<div class="row"><div class="col-md-5"><div class="form-group"><label for="nama_pengikut[]">Nama</label><input class="form-control" required="required" name="nama_pengikut[]" type="text" id="nama_pengikut[]"><small class="text-danger"></small></div></div><div class="col-md-2"><div class="form-group"><label for="umur_pengikut[]">Umur</label><input class="form-control" required="required" name="umur_pengikut[]" type="text" id="umur_pengikut[]"><small class="text-danger"></small></div></div><div class="col-md-5"><div class="form-group"><label for="hubungan_pengikut[]">Hubungan Keluarga</label><input class="form-control" required="required" name="hubungan_pengikut[]" type="text" id="hubungan_pengikut[]"><small class="text-danger"></small></div></div></div>');
        });
    });
</script>
<script>
    $(".select2").select2({        
                ajax: {
                    url: "/api/select/surat/pegawai",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term // search term
                        };
                    },
                    processResults: function (data) {
                        // parse the results into the format expected by Select2.
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data
                        return {
                            results:  $.map(data, function (item) {
                                return {
                                    text: item.nama,
                                    id: item.id
                                }
                            })

                        };
                    },
                    cache: true
                },
                // minimumInputLength: 2
                escapeMarkup: function(markup) {
                    return markup;
                },
                multiple: true,
                allowClear: true,
                placeholder: 'Ketik untuk mencari dan memilih nama pegawai',
                minimumInputLength: 2,
        });
</script>
<script>
    $(".select2surat").select2({        
                ajax: {
                    url: "/api/select/surat",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term // search term
                        };
                    },
                    processResults: function (data) {
                        // parse the results into the format expected by Select2.
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data
                        return {
                            results:  $.map(data, function (item) {
                                return {
                                    text: item.nomor,
                                    id: item.id
                                }
                            })

                        };
                    },
                    cache: true
                },
                // minimumInputLength: 2
                escapeMarkup: function(markup) {
                    return markup;
                },
                multiple: true,
                allowClear: true,
                placeholder: 'Ketik untuk mencari nomor surat perintah',
                minimumInputLength: 2,
        });
</script>
@endpush