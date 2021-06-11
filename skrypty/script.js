function view () {
    let platnosc = document.getElementById("platnosc");

    for (let i = 0; i < 3; i++ ) { //pętla dodająca nasłuchwanie kliknięcia na elementach o klasie "click"
            document.getElementsByClassName("click")[i].addEventListener("click", function () {
            platnosc.classList.toggle("noview"); // dodanie/usunięcie klasy
        });
    }
}

function redirect () {
    for (let i = 0; i < 3; i++ ) { //pętla dodająca nasłuchwanie kliknięcia na elementach o klasie "click"
        document.getElementsByClassName("click")[i].addEventListener("click", function () {
        location.href = "logowanie.php"; // przekierowanie na stronę logowania
    });
    }
}