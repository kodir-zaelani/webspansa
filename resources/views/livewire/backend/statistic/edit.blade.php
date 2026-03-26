<div>
    <div class="box box-outline-warning" >
       <div class="box-body">
            <form enctype="multipart/form-data" >
                <div class="form-group">
                    <h5>Title <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" wire:model="editingStatisticTitle" class="form-control @error('editingStatisticTitle') is-invalid @enderror" placeholder="Title" required autofocus>
                    </div>
                    @error('editingStatisticTitle')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <div class="form-group">
                    <h5>Amount <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" wire:model="editingStatisticAmount" class="form-control @error('editingStatisticAmount') is-invalid @enderror" placeholder="Amount" required autofocus>
                    </div>
                    @error('editingStatisticAmount')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <div class="form-group">
                    <h5>Icon <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" wire:model="editingStatisticIcon" class="form-control @error('editingStatisticIcon') is-invalid @enderror" placeholder="Icon"  autofocus>
                        <small>
                            <a href="https://icons.getbootstrap.com/" target="_blank" rel="noopener noreferrer">
                                <i class="bi bi-bootstrap"></i> Select Icon Bootsrap
                            </a>
                        </small>
                    </div>
                    @error('editingStatisticIcon')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <div class="form-group">
                    <h5>Class </h5>
                    <div class="controls">
                        <input type="url" wire:model="editingStatisticClass" class="form-control @error('editingStatisticClass') is-invalid @enderror" placeholder="Class"  autofocus>
                    </div>
                    @error('editingStatisticClass')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>

                <div class="form-group">
                    <h5>{{ __('Description')}} </h5>
                    <div class="controls">
                        <textarea name="" wire:model="editingStatisticcontent" class="form-control @error('editingStatisticcontent') is-invalid @enderror"  id="" cols="100%" rows="5"></textarea>
                    </div>
                    @error('editingStatisticcontent')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <button class="btn btn-sm btn-primary" wire:click.prevent='update'><i class="ti-save pe-2"></i> Update</button>
                <button class="btn btn-sm btn-warning ms-10" wire:click='cancelEdit'><i class="ti-back-left pe-2"></i> Cancel</button>
            </form>
        </div>
    </div>
</div>
