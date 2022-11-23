function activarNeedsValidate() {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
}

function focusInput() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurInput() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
  if ($(this).val().trim() == "") {
    $(this).val("");
  }

}

function trimInputs(){
  var inputs = document.querySelectorAll(".input");

  inputs.forEach((input) => {
    input.addEventListener("focus", focusInput);
    input.addEventListener("blur", blurInput);
  });
}