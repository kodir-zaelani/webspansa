<div>
    <div class="box bs-3 border-success" >
        <div class="box-body">
            <form enctype="multipart/form-data" >
                <div class="form-group">
                    <h5>Title <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" wire:model="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title" required autofocus>
                    </div>
                    @error('title')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <div class="form-group">
                    <h5>Amount <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" wire:model="amount" class="form-control @error('amount') is-invalid @enderror" placeholder="Amount" required autofocus>
                    </div>
                    @error('amount')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <div class="form-group">
                    <h5>Icon <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="text" wire:model="icon" class="form-control @error('icon') is-invalid @enderror" placeholder="Icon" required autofocus>
                        <small>
                            <a href="https://icons.getbootstrap.com/" target="_blank" rel="noopener noreferrer">
                                <i class="bi bi-bootstrap"></i> Select Icon Bootsrap
                            </a>
                        </small>
                    </div>
                    @error('icon')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <div class="form-group">
                    <h5>Class </h5>
                    <div class="controls">
                        <input type="text" wire:model="class" class="form-control @error('class') is-invalid @enderror" placeholder="Class"  autofocus>
                    </div>
                    @error('class')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                 <div class="form-group">
                    <h5>{{ __('Description')}} </h5>
                    <div class="controls">
                        <textarea name="" wire:model="content" class="form-control @error('content') is-invalid @enderror"  id="" cols="100%" rows="5"></textarea>
                    </div>
                    @error('content')
                    <div class="form-control-feedback"><small> <code>{{ $message }}</code> </small></div>
                    @enderror
                </div>
                <button class="btn btn-sm btn-primary" wire:click.prevent='store'><i class="ti-save pe-2"></i> Save</button>
            </form>
        </div>
    </div>
</div>
