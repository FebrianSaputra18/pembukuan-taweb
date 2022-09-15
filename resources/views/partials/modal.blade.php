<!-- Modal -->
<div class="modal fade" id="addsalesModal" tabindex="-1" aria-labelledby="addsalesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addsalesModalLabel">Tambah Karyawan</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('register') }}" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="number">number</label>
                            <input id="number" type="text" class="form-control @error('number') is-invalid @enderror"
                                name="number" value="{{ old('number') }}" autofocus>
                            @error('number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <textarea id="address" class="form-control @error('address') is-invalid @enderror" rows="5"
                                name="address" autofocus>{{ old('address') }}</textarea>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="password" class="d-block">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror pwstrength"
                                data-indicator="pwindicator" name="password">
                            <div id="pwindicator" class="pwindicator">
                                <div class="bar"></div>
                                <div class="label"></div>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="password_confirmation" class="d-block">Password Confirmation</label>
                            <input id="password_confirmation" type="password" class="form-control"
                                name="password_confirmation">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="agree" class="custom-control-input" id="agree" required>
                            <label class="custom-control-label" for="agree">I agree with the terms and
                                conditions</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal -->

<!-- Modal Sales -->
<!-- Tambah Data Harian -->
<div class="modal fade" id="tambahdataModal" tabindex="-1" aria-labelledby="tambahdataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="tambahdataModalLabel">Tambah Data</h4>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="card-body p-4">
                    <div class="form-group row mb-3">
                        <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                        <input type="text" class="col-sm-6 form-control @error('nama_barang') is-invalid @enderror"
                            name="nama_barang" value="{{ old('nama_barang') }}" placeholder="Masukkan Nama Barang"
                            autofocus>
                        @error('nama_barang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group row mb-3">
                        <label for="ambil_barang" class="col-sm-2 col-form-label">Ambil Barang</label>
                        <input type="number" class="col-sm-4 form-control @error('ambil_barang') is-invalid @enderror"
                            name="ambil_barang" value="{{ old('ambil_barang') }}" placeholder=" Masukkan total Barang"
                            autofocus>
                        @error('ambil_barang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label for="sisa_barang" class="col-sm-2 col-form-label">Sisa Barang</label>
                        <input type="number" class="col-sm-4 form-control @error('sisa_barang') is-invalid @enderror"
                            name="sisa_barang" value="{{ old('sisa_barang') }}" placeholder=" Masukkan total Barang"
                            autofocus>
                        @error('sisa_barang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class=" form-group row mb-3">
                        <label for="total_laku" class="col-sm-2 col-form-label">Laku Barang</label>
                        <input type="number" class="col-sm-4 form-control @error('total_laku') is-invalid @enderror"
                            name="total_laku" value="{{ old('total_laku') }}" placeholder=" Masukkan total Barang"
                            autofocus>
                        @error('total_laku')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <label for="total_uang" class="col-sm-2 col-form-label">Total Uang</label>
                        <input type="number" class="col-sm-4 form-control @error('total_uang') is-invalid @enderror"
                            name="total_uang" value="{{ old('total_uang') }}" placeholder=" Masukkan Total Uang"
                            autofocus>
                        @error('total_uang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group row mb-3">
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <input type="text" class="col-sm-6 form-control @error('keterangan') is-invalid @enderror"
                            name="keterangan" value="{{ old('keterangan') }}" placeholder="Masukkan Keterangan"
                            autofocus>
                        @error('keterangan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="edit-dataModal" tabindex="-1" aria-labelledby="edit-dataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="edit-dataModalLabel">Tambah Data</h4>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="card-body p-4">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Lihat Data -->
<div class="modal fade" id="lihatdataModal" tabindex="-1" aria-labelledby="lihatdataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lihatdataModalLabel">Lihat Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Lihat Data Bulanan -->

<!-- Modal Supplier -->
<div class="modal fade" id="addDataSupplier" tabindex="-1" aria-labelledby="addDataSupplierLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDataSupplierLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                KONTOL
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->