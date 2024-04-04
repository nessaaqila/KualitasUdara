<!DOCTYPE html>
<html>
    <head>
        <title></title>
            <style type="text/css">
                *{padding: 0; margin: 0; box-sizing: border-box;}
                header {
                    width: 100%;
                    height: 100vh;
                    background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.2)), url('images/1.jpg');
                    background-size: cover;
                    font-family: sans-serif;
                }
                nav {
                    width: 100%;
                    height: 100px;
                    
                    color: white;
                    display: flex;
                    justify-content: space-around;
                    align-items: center;

                }
                .logo{
                    font-size: 2em;
                    letter-spacing: 2px;
                }
                .menu a{
                    text-decoration: none;
                    color: white;
                    padding: 10px 20px;
                    font-size: 20px;
                    position: relative;
                }

                /* .menu a:before {
                    content:'';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 0%;
                    height: 100%;
                    background: 2px solid indianred;
                    transition: 0.4s linear;
                } */

                .menu a:hover{
                    text-decoration: underline indianred;
                    text-underline-position: under;
                }
                .register a{
                    text-decoration: none;
                    color: white;
                    padding: 10px 20px;
                    font-size: 20px;
                    background: indianred;
                    border-radius: 8px;

                }
                .register a:hover {
                    background: transparent;
                    border: 1px solid indianred;

                }
                .h-txt{
                    max-width: 650px;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%,-50%);
                    text-align: center;
                    color: white;
                }
                .h-txt span{
                    letter-spacing: 5px;
                }
                .h-txt h1{
                    font-size: 3.5em;
                }
                .h-txt a{
                    text-decoration: none;
                    background: indianred;
                    color: white;
                    padding: 10px 20px;
                    letter-spacing: 5px;
                    transition: 0.4s;
                }
                .h-txt a:hover {
                    background: transparent;
                    border: 1px solid indianred;

                }

            </style>
        <body>
            <header>
                <nav>
                    <div class="logo">
                        Kualitas Udara
                    </div>
                    <div class="menu">
                        <a href="#">Home</a>
                        <a href="#">Data</a>
                        <a href="#">Best Offer</a>
                        <a href="#">Our Sites</a>
                        <a href="#">Contact</a>
                    </div>
                    <div class="register">
                        <a href="signup.php">Register</a>
                    </div>
                </nav>
                <section class="h-txt">
                    <span>Selamat Datang di Website</span>
                    <h1>Pendeteksi Kualitas Udara</h1>
                    <br>
                    <a href="login.php">Cek Kualitas Udara</a>
                </section>
            </header>
        </body>
    </head>
</html>

