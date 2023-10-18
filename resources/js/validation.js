document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("formulario")
        .addEventListener("submit", validarFormulario);
});

function validarFormulario(evento) {
    evento.preventDefault();
    var name = document.getElementById("name").value;
    var password = document.getElementById("password").value;
    var type = document.getElementById("type").value;

    var alert_messaje = document.getElementById("alert_messaje");

    var values = document.getElementById("values");

    if (name.length == 0) {
        values.innerText = "Favor de introucir su nombre correctamente";
        alert_messaje.classList.remove("d-none");
        alert_messaje.classList.add("d-block");
        return;
    }

    if (password.length <= 6) {
        values.innerText =
            "Favor de introucir la contraseña con 8 caracteres o más";
        alert_messaje.classList.remove("d-none");
        alert_messaje.classList.add("d-block");

        return;
    }

    if (type.length == 0) {
        values.innerText = "Favor de introucir el tipo de aplicación";
        alert_messaje.classList.remove("d-none");
        alert_messaje.classList.add("d-block");

        return;
    }

    this.submit();
}
