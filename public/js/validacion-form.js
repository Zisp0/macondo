(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

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
})()

const inputs = document.querySelectorAll(".input");

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

inputs.forEach((input) => {
  input.addEventListener("focus", focusInput);
  input.addEventListener("blur", blurInput);
});