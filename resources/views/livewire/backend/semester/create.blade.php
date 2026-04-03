<div>
    <div class="box box-outline-warning">
        <div class="box-header">
            <h4 class="box-title"><strong>{{__('Create')}}</strong></h4>
        </div>
        <form enctype="multipart/form-data" >
            <div class="box-body">
                <div class="form-group @error('tahunajaran_id') has-error @enderror">
                    <h5>Tahun Pelajaran <span class="text-danger">*</span></h5>
                    <select class="form-control select2 @error('tahunajaran_id') has-error @enderror" style="width: 100%;" wire:model="tahunajaran_id" >
                        <option value="" holder>{{ __('Pilih Tahun Pelajaran') }}</option>
                        @foreach ($tahunajaran as $item)
                        <option value="{{ $item->id }}" {{ old('tahunajaran_id') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                        @endforeach

                    </select>
                    @error('tahunajaran_id')
                    <span class="help-block"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group @error('semestername') has-error @enderror">
                    <h5>Semester <span class="text-danger">*</span></h5>
                    <select class="form-control select2" style="width: 100%;" wire:model="semestername" name="semestername">
                        <option value="" holder>Select Semester</option>
                        <option value="1" {{ old('semestername') == '1' ? 'selected' : '' }}>1</option>
                        <option value="2" {{ old('semestername') == '2' ? 'selected' : '' }}>2</option>
                    </select>

                    @error('semestername')
                    <span class="help-block"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                {{-- <div class="form-group">
                    <h5>Semester id</h5>
                    <div class="controls">
                        <input type="text" wire:model="semesterid" class="form-control @error('semesterid') is-invalid @enderror" placeholder="Semester id" >
                        <small class="text-muted">Semester id : 20231</small>
                    </div>
                    @error('semesterid')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div> --}}
                {{-- <div class="form-group">
                    <h5>Nama <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" wire:model="nama" value="{{$item->name}} {{$namasemester}}" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" >
                        <small class="text-muted">Nama : 2003/2004 {{ $namasemester }}</small>
                    </div>
                    @error('nama')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div> --}}

                <div class="form-group @error('periode_aktif') has-error @enderror">
                    <h5>Status <span class="text-danger">*</span></h5>
                    <select class="form-control select2" style="width: 100%;" wire:model="periode_aktif" name="periode_aktif">
                        <option value="" holder>Select Status</option>
                        <option value="1" {{ old('periode_aktif') == '1' ? 'selected' : '' }}>Aktif</option>
                        <option value="0" {{ old('periode_aktif') == '0' ? 'selected' : '' }}>Tidak Aktif</option>
                    </select>
                    @error('periode_aktif')
                    <span class="help-block"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <h5>Tanggal Mulai </h5>
                    <div class="controls">
                        <input type="date" wire:model="tanggal_mulai"  id="tanggal_mulai-date-input" class="form-control @error('tanggal_mulai') is-invalid @enderror" placeholder="Tanggal Mulai" >
                    </div>
                    @error('tanggal_mulai')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <div class="form-group">
                    <h5>Tanggal Selesai </h5>
                    <div class="controls">
                        <input type="date" wire:model="tanggal_selesai" id="tanggal_selesai-date-input" class="form-control @error('tanggal_selesai') is-invalid @enderror" placeholder="Tanggal Selesai" >
                    </div>
                    @error('tanggal_selesai')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
            </div>
            <div class="box-footer flexbox">
                <div class="flex-grow text-end">
                    <button class="btn btn-sm btn-primary" wire:click.prevent="store"><i class="fa fa-save" aria-hidden="true"></i> {{ __('Save') }}</button>
                    <button class="btn btn-sm btn-warning ms-10" wire:click='cancelAdd'><i class="ti-back-left pe-2"></i> {{ __('Cancel') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>

