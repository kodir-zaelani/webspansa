<div>
    <div class="box box-outline-warning">
        <div class="box-header">
            <h4 class="box-title"><strong>{{__('Create')}}</strong></h4>
        </div>
        <form enctype="multipart/form-data" >
            <div class="box-body">
               <div class="form-group">
                    <h5>Tahun Ajaran id</h5>
                    <div class="controls">
                        <input type="text" wire:model="tahun_ajaran_id" class="form-control @error('tahun_ajaran_id') is-invalid @enderror" placeholder="Tahun Ajaran" >
                        <small class="text-muted">Tahun Ajaran id : 2023</small>
                    </div>
                    @error('tahun_ajaran_id')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <div class="form-group">
                    <h5>Nama <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" wire:model="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" >
                        <small class="text-muted">Nama : 2023/2024</small>
                    </div>
                    @error('nama')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <div class="form-group @error('periode_aktif') has-error @enderror">
                    <h5>Status <span class="text-danger">*</span></h5>
                    <select class="form-control select2" style="width: 100%;" wire:model="periode_aktif" name="periode_aktif">
                        <option value="" holder>{{ __('Pilih Status') }}</option>
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
