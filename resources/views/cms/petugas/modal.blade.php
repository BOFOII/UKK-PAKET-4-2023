<div class="modal fade" id="modal-user" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
      <div class="modal-content">
          <div class="modal-header bg-transparent">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body pb-5 px-sm-5 pt-50">
              <div class="text-center mb-2">
                  <h1 class="mb-1">Informasi Petugas</h1>
                  <p>Masukan data petugas pada form di bawah untuk menambahkan petugas.</p>
              </div>
              <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="basic-icon-default-fullname">Nama Lengkap</label>
                    <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname"
                        placeholder="contoh: John Doe" name="user-fullname" />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="basic-icon-default-uname">Username</label>
                    <input type="text" id="basic-icon-default-uname" class="form-control dt-uname"
                        placeholder="contoh: Zalpha" name="user-name" />
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="user-role">User Level</label>
                        <select id="user-role" class="select2 form-select">
                            <option value="subscriber">Administrator</option>
                            <option value="editor">Petugas</option>
                        </select>
                  </div>
                  <div class="col-12 col-md-6">
                      <label class="form-label" for="basic-icon-default-email">Password</label>
                      <input type="text" id="basic-icon-default-password" class="form-control dt-email"
                          name="password" />
                  </div>
              </form>
              <div class="col-12 mt-2 pt-50">
                  <label class="form-label" for="basic-icon-default-email">Avatar</label>

                  <form action="#" class="dropzone dropzone-area" id="dpz-remove-all-thumb">
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
