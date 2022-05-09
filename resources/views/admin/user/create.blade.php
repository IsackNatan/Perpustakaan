@if ($create)
<div class="modal fade show" id="modal-default" style="display: block; padding-right: 17px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah User</h4>
                <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </span>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input wire:model="name" type="text" class="form-control" id="nama">
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input wire:model="email" type="email" class="form-control" id="email">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input wire:model="password" type="password" class="form-control" id="password">
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group">
                    <label for="ulangi_password">Ulangi Password</label>
                    <input wire:model="password_confirmation" type="password" class="form-control" id="ulangi_password">
                    @error('password_confirmation') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select wire:model="jurusan" class="form-control" id="jurusan">
                        <option selected value="">Pilih Jurusan</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Pendeta">Pendeta</option>
                        <option value="Biologi">Biologi</option>
                        <option value="Ekonomi">Ekonomi</option>
                        <option value="Farmasi">Farmasi</option>
                    </select>
                    @error('jurusan') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Jenis Kelamin</label>
                    <div class="form-check" wire:model="jenis_kelamin">
                        <input name="jenis_kelamin" type="radio" value="Pria" id="jenis_kelamin">
                        <label for="jenis_kelamin ">Pria</label>
                    </div>
                    <div class="form-check" wire:model="jenis_kelamin">
                        <input name="jenis_kelamin" type="radio" value="Wanita" id="jenis_kelamin">
                        <label for="jenis_kelamin">Wanita</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Batal</span>
                <span type="button" wire:click="store" class="btn btn-success">Simpan</span>
            </div>
        </div>
    </div>
</div>
@endif