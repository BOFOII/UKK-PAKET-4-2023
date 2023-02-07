<div class="modal fade" id="modal-tawaran" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header bg-transparent">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body px-sm-5 mx-50 pb-5">
              <h1 class="text-center mb-1" id="addNewCardTitle">Tambahkan Tawaran</h1>
              <p class="text-center">Tambahkan tawaran anda untuk memanangkan baranag ini</p>

              <!-- form -->
              <form id="addNewCardValidation" class="row gy-1 gx-2 mt-75" onsubmit="return false">
                  <div class="col-12">
                      <label class="form-label" for="modalAddCardNumber">Tawaran</label>
                      <div class="input-group input-group-merge">
                          <input id="modalAddCardNumber" name="modalAddCard" class="form-control add-credit-card-mask" type="text" placeholder="contoh: 120000" aria-describedby="modalAddCard2" data-msg="Please enter your credit card number" />
                          <span class="input-group-text cursor-pointer p-25" id="modalAddCard2">
                              <span class="add-card-type"></span>
                          </span>
                      </div>
                  </div>

                  <div class="col-12 text-center">
                      <button type="submit" class="btn btn-primary me-1 mt-1">Submit</button>
                      <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
                          Cancel
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
