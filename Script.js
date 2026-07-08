console.log("Script chargé");

// petit contrôle front (optionnel)
document.querySelector("form")?.addEventListener("submit", function(e){
    let email = document.querySelector("input[name='email']").value;
    let password = document.querySelector("input[name='password']").value;

    if(email === "" || password === ""){
        alert("Veuillez remplir tous les champs");
        e.preventDefault();
    }
});
function togglePassword() {
    let password = document.getElementById("password");
    let icon = document.getElementById("eyeIcon");

    if (password.type === "password") {

        password.type = "text";

        icon.classList.remove("fa-eye");

        icon.classList.add("fa-eye-slash");

    } else {

        password.type = "password";

        icon.classList.remove("fa-eye-slash");

        icon.classList.add("fa-eye");
    }
}