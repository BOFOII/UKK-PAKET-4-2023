<div class="modal fade" id="modal-user" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Informasi Barang</h1>
                    <p>Masukan data barang pada form di bawah untuk menambahkan barang.</p>
                </div>
                <form id="main-form" class="row gy-1 pt-75" onsubmit="return false">
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="basic-icon-default-fullname">Nama Barang</label>
                        <input type="text" class="form-control dt-full-name error" id="basic-icon-default-fullname"
                            placeholder="contoh: IPhone 12 PRO Max" name="user-fullname" />
                            <span id="basic-default-name-error" class="error">This field is required.</span>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="basic-icon-default-uname">Harga Awal</label>
                        <input type="text" id="basic-icon-default-uname" class="form-control dt-uname error"
                            placeholder="contoh: 100000" name="user-name" />
                            <span id="basic-default-name-error" class="error">This field is required.</span>
                    </div>
                    <div class="col-12 position-relative">
                        <label class="form-label" for="basic-icon-default-contact">Tanggal Dibuat</label>
                        <input type="text" id="pd-default" class="form-control pickadate error"
                            placeholder="18 June, 2020" />
                            <span id="basic-default-name-error" class="error">This field is required.</span>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="basic-icon-default-email">Deskripsi</label>
                        <div class="form-floating mb-0">
                            <textarea data-length="20" class="form-control char-textarea error" id="textarea-counter" rows="3" placeholder="Counter"
                                style="height: 100px"></textarea>
                        </div>
                        <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 20 </small>
                        <span id="basic-default-name-error" class="error">This field is required.</span>
                    </div>
                </form>
                <div class="col-12 mt-2 pt-50">
                    <label class="form-label" for="basic-icon-default-email">Images</label>

                    <form action="{{ route('post.images') }}" class="dropzone dropzone-area" id="dpz-images" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="dz-message">Drop files here or click to upload.</div>
                    </form>

                    <button id="clear-dropzone" class="mt-1 btn btn-outline-primary mb-1">
                        <i data-feather="trash" class="me-25"></i>
                        <span class="align-middle">Clear Dropzone</span>
                    </button>
                </div>
                <div class="col-12 text-center mt-2 pt-50">
                    <button type="submit" class="btn btn-primary me-1">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                        Discard
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
