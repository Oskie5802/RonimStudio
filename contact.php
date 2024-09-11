
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ronim Studio - Kontakt</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <nav class="container">
            <div class="logo"><a href="index.html">Ronim Studio</a></div>
            <div class="nav-links">
                <a href="about.html">O nas</a>
                <a href="#games">Nasze gry</a>
                <a href="contact.html">Kontakt</a>
            </div>
            <button class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
        <div class="hero container">
            <h1>Skontaktuj się z Nami</h1>
            <p>Masz pytania lub chcesz dowiedzieć się więcej? Jesteśmy tutaj, aby pomóc!</p>
        </div>
    </header>

    <main class="container">
        <section class="contact-info">
            <h2>Dane Kontaktowe</h2>
            <p>Email: Ronim1Studio@gmail.com</a></p>
            <p>Godziny pracy: Pon - Pt 9:00 - 15:00</p>
        </section>

        <section class="contact-form">
            <h2>Formularz Kontaktowy</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name">Imię:</label>
                    <input type="text" id="name" name="name" placeholder="Wpisz swoje imię" required>
                </div>
                <div class="form-group"></div>
                    <label for="lastName">Nazwisko:</label>
                    <input type="text" id="lastName" name="lastName" placeholder="Wpisz swoje nazwisko" required> 
                </div> 
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Wpisz swój email" required>
                </div>
                <div class="form-group">
                    <label for="message">Wiadomość:</label>
                    <textarea id="message" name="message" rows="6" placeholder="Wpisz swoją wiadomość" required></textarea>
                </div>
                <button type="submit" class="cta-button">Wyślij</button>
            </form>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Ronim Studio. Wszelkie prawa zastrzeżone.</p>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <?php

        $name = @$_POST["name"];
        $lastName = @$_POST["lastName"];
        $email = @$_POST["email"];
        $message = @$_POST["message"];

        $dataFile = fopen('data.txt','a');

        
        fwrite($dataFile," Name: $name, LastName: $lastName, Email: $email, Message: $message ||");

    ?>

    <script src="main.js"></script>
</body>
</html>
