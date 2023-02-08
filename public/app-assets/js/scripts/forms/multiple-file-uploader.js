$(function() {
  var dropZoneImages = $('#dpz-images'),
      mainForm = $('#main-form'),
      uploadedImageMap = {};

  dropZoneImages.dropzone({
      paramName: 'file', // The name that will be used to transfer the file
      maxFiles: 3, // FILE
      maxFilesize: 3, // MB
      acceptedFiles: ".jpeg,.jpg,.png",
      init: function() {
          var _this = this;
          $('#clear-dropzone').on('click', function() {
              _this.removeAllFiles();
          });
      },
      success: function(file, response) {
          let input =
              `<input name="images[]" class="d-none" type="text" value="${response.url}"/>`;

          mainForm.append(input);
          uploadedImageMap[file.name] = response.url;
      },
      removedfile: function(file) {
          file.previewElement.remove();

          if (typeof file.name === 'undefined') {
            return;
          }
          var value = '';
          var name = file.name;

          if(uploadedImageMap[name] === 'undefined') {
            return;
          }

          value = uploadedImageMap[name];
          mainForm.find(`input[name="images[]"][value="${value}"]`).remove()
      }
  });
})
