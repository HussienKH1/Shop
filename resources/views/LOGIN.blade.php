<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('LOGIN.css')}}">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>LOGIN Account</title>
</head>
<body>
    <section>
        <div class="container">
            <div class="Navigation">
                <nav>
                    <ul>
                        
                        <li><a href="">HOME</a></li> 
                        <li><a href="">SHOP</a></li> 
                        <li><a href="">ABOUT</a></li> 
                    </ul>
                    <ul>
                        <li><a href="">SEARCH</a></li> 
                        <li><a href="">FUTURES</a></li> 
                        <li><a href="">CART <span>(0)</span></a></li> 
                    </ul>
                </nav> 
            </div>

            <div class="Login-Container">

                <div class="Picture-Box">
                    <img src="./images/image12.jpeg" alt="login">
                </div>

                <div class="Login-Box">

                    <form action="" method="POST">
                        @csrf

                        <div class="BOX-CONTAINER">

                            <div class="Title">
                                <h1>Login</h1> 
                            </div>

                            <div class="BOX-INPUT">
                                <input type="text" name="Email" placeholder="Email"> 
                                <input type="password" name="Password" placeholder="Password">
                            </div>
                            
                            <div class="SIGN-IN">
                                <button type="submit">SIGN IN</button>
                            </div>
                           
                            <div class="FORGET-PASSWORD"> 
                                <a href=""> Forget your password?</a>
                            </div>
                        
                            <div class="SIGN-UP">
                                <span> Don't have an account? </span>
                                <a href=""> Sign up!</a>
                            </div>

                        </div> 
                    </form>

                </div>  

            </div>
        </div> 
    </section>

    <footer>

        <div class="Footer-Container">

            <div class="Upper-footer">

                <div class="left-region">

                   <span> Join us on the ... to an effortless glow.</span> <br> 
                   <span> Glaze your inbox with tips, tricks & exclusive content from ... </span> <br>

                    <form action="" method="POST"> 
                    @csrf
                    <input type="text" name="Email" placeholder="Email"> 
                    <div class="line">
                    </div>
                    <button type="Submit"> Subsribe </button>
                    </form>
                
                    <span> By signing up, you agree to our  <a href="">  Privacy Policy* </a></span> 
                </div>

                <div class="right-region">

                    <div class="section-1">
                        <span> Navigate </span> <br>
                        <a href=""> Shop</a> 
                        <a href=""> Our Story</a>
                        <a href=""> ... Futures </a> 
                        <a href=""> Impact </a> 
                        <a href=""> VLOG </a> 
                    </div>

                    <div class="section-2">
                        <span> Social </span> <br>
                        <div class="insta">
                            <ion-icon name="logo-instagram"></ion-icon>
                            <a href=""> Instagram</a> 
                        </div>
                        <div class="youtube">
                            <ion-icon name="logo-youtube"></ion-icon>
                            <a href=""> Youtube </a>
                        </div>
                        <div class="tiktok">
                            <ion-icon name="logo-tiktok"></ion-icon>
                            <a href=""> Tiktok </a>
                        </div> 
                    </div>

                    <div class="section-3"> 
                        <span> OFFICIAL </span>
                        <a href=""> Privacy</a> 
                        <a href=""> Terms </a>
                        <a href=""> Accessibility </a> 
                        <a href=""> FAQ </a>
                        <a href=""> Contact </a>
                        <a href=""> Events </a>
                    </div>
                    
                    <div class="section-4">
                    <span> SUPPORT </span> <br>
                    <span> We’re here M-F 9am - 5pm PST. </span> <br>
                    <span> Drop us a note anytime: </span> <br>
                    <a href=""> support@...</a>
                    <a href=""> Cookie Preferences </a>
                    
                    
                    </div>
                </div>

            </div>

            <div class="Down-region">

            </div>

        </div>

    </footer>

</body>
</html>