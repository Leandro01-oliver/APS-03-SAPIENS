const senha = document.getElementById("password");
const icon = document.getElementsByClassName("icon_cust");

function mostrarsenha() {
    if (senha.type == "password") {
        senha.type = "text";
    } else {
        senha.type = "password";
    }
}
