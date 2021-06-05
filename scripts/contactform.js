const inputs = document.querySelectorAll(".input");

function focusFunc() {
    let parent = this.parentNode;
    parent.classList.add("focus");
}

function blurFunc() {
    let parent = this.parentNode;
    if (this.value == "") {
        parent.classList.remove("focus");
    }
}

inputs.forEach((input) => {
    input.addEventListener("focus", focusFunc);
    input.addEventListener("blur", blurFunc);
});

function validar() {
    var form = document.getElementById("formulario");

    if (form.nombre.value == 0) {
        document.getElementById("errornombre").innerHTML = "Este campo se encuentra vacío.";
        form.nombre.value = "";
        form.nombre.focus();
        return false;
    }

    if (form.email.value == 0) {
        document.getElementById("errormail").innerHTML = "<p style='color:red; text-align: center;'>Este campo se encuentra vacío.</p>";
        form.email.value = "";
        form.email.focus();
        return false;
    }
    if (form.mensaje.value == 0) {
        document.getElementById("errormensaje").innerHTML = "<p style='color:red; text-align: center;'>Este campo se encuentra vacío.</p>";
        form.mensaje.value = "";
        form.mensaje.focus();
        return false;
    }

}