var input = document.getElementById('inputArxiu');

input.addEventListener("change", previewFile)

function previewFile() {
  var preview = document.getElementById('imatgeVedella');
  var file = document.querySelector('input[type=file]').files[0];
  var reader = new FileReader();

  reader.addEventListener("load", function () {
    // convert image file to base64 string
    preview.src = reader.result;
  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}


