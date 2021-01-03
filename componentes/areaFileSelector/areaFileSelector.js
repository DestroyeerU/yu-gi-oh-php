const labelRef = document.querySelector(".custom-file-upload");
const inputRef = document.querySelector(".custom-file-upload input");
const defaultRef = document.querySelector(".custom-file-upload .default");
const imageRef = document.querySelector(".custom-file-upload .upload-preview");

function loadImagePreview() {
  const fileReader = new FileReader();

  fileReader.readAsDataURL(inputRef.files[0]);

  fileReader.onload = function (oFREvent) {
    imageRef.src = oFREvent.target.result;

    imageRef.classList.add('active');
    defaultRef.classList.add('hidden');
    labelRef.classList.add('hidden');
  };
}
