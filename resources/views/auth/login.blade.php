<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="index.css">
    <title>Login - HKBP Perumnas Batu Onom</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <section>
        <!-- form box -->
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>
                        <!-- <ion-icon name="ticket-outline"></ion-icon> -->
                        Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="number" class="form-control" id="exampleFormControlInput1" required>
                        <label for="exampleFormControlInput1" class="form-label fw-bold">No. Handphone</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" class="form-control" id="exampleFormControlInput1" required>
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember me | <a href="#"><b>Forget Password</b></a></label>
                    </div>
                    <button class="button">Log in</button>
                    <div class="register">
                        <p>Don't Have a Account |
                            <a href="/regis" class="a-register">
                                <b>Register</b></a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
