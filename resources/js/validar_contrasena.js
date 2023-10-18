document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("formulario")
        .addEventListener("submit", validarContraena);
});

function validarContraena(evento) {
    evento.preventDefault();

    var password = document.getElementById("password").value;
    var password_confirm = document.getElementById("password_confirm").value;

    var alert_messaje = document.getElementById("alert_messaje");

    var values = document.getElementById("values");

    if (password.length <= 6 && password_confirm.length == 0) {
        values.innerText =
            "Favor de introucir la contraseña con 8 caracteres o más";
        alert_messaje.classList.remove("d-none");
        alert_messaje.classList.add("d-block");

        return;
    }

    this.submit();
}
