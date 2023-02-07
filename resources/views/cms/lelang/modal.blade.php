<div class="modal fade" id="modals-slide-in" tabindex="-1" aria-hidden="true">
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
                    <label class="form-label" for="barang-lelang">Barang</label>
                    <select id="barang-lelang" class="select2 form-select">
                        <option value="subscriber">IPhone 12 Pro Max</option>
                    </select>
                  </div>
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="lelang-status">Status</label>
                  <select id="lelang-status" class="select2 form-select">
                      <option value="dibuka">Dibuka</option>
                      <option value="ditutup">Ditutup</option>
                  </select>
                  </div>
              </form>
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
