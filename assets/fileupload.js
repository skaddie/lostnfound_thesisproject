function previewImages() {
    if (this.files) {
      [].forEach.call(this.files, readAndPreview);
    }
    function readAndPreview(file) {
  
      // Make sure `file.name` matches our extensions criteria
      if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
        return alert(file.name + " is not an image");
      } // else...
      var reader = new FileReader();
      reader.addEventListener("load", function(e) {
        $('#imagePreview').css('background-image', 'url('+e.target.result +')');
        $('#imagePreview').hide();
        $('#imagePreview').fadeIn(650);
      });
      reader.readAsDataURL(file);
    }
}
document.querySelector('#imageUpload').addEventListener("change", previewImages);
