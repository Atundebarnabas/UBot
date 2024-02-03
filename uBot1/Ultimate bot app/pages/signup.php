<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta http-equiv="refresh" content="3"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable= no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/signup.css"/>
    <title>UltimateBot|Signup</title>
</head>
<body>
    
    <div class="form-container">
        <div class="form-container-head">
            <p>Sign Up</p>
            <span>or if you have an account, then <a href="signin">Sign In</a></span>
        </div>
        <div class="form">
            <form action="" method="post">
                <div class="fullname">
                    <input name="fullname" placeholder="Fullname" autocomplete="off"/>
                </div>
                <div class="email">
                    <input name="email" placeholder="Email" autocomplete="off"/>
                </div>
                <div class="username">
                    <input name="username" placeholder="Username" autocomplete="off"/>
                </div>
            </form>
        </div>
        <div class="form-bottom">
            <div class="tc-check">
                <div class="tc-check-box">
                    <input type="checkbox" name="tc">
                </div>
                <div class="tc-check-text">
                    <p>I am 18 years old, I accept and will comply to the terms and conditions. </p>
                </div>
            </div>
            <div class="form-button">
                <input type="submit" value="Submit" name="signupsubmit">
            </div>
        </div>
    </div>










    <script>
    //     const cb = document.getElementById("checkboxx");
    //     const contb = document.getElementById("continuebtn");
    //     const cbtne = document.getElementById("cbtn");
    //     const aganime = document.getElementById("agreeanimee");
  
    // cb.onclick = function () {
    //     // cb.setAttribute('checked', true);
    //     cbtne.removeAttribute('disabled');
    //     if (cb.checked == true) {
    //         const disabledButton = () => {
    //             cbtne.disabled = false; //Enabling the Contine button
    //         }
    //         contb.classList.add("active");
    //         aganime.classList.add("active");

    //     }else {
    //         cbtne.setAttribute('disabled', true);
    //         contb.classList.remove("active");
    //         aganime.classList.remove("active");
    //         cb.addEventListener("change", disabledButton);
    //         cbtne.disabled = true; //disabling it by default
    //     }
    // }
        // cb.onclick = function() {
        //     if (cb.checked == true) {
        //         contb.classList.add("active");
        //     }else {
        //         contb.classList.remove("active");
        //         //function to disable Button
        //         const disabledButton = () => {
        //             cbtne.disabled = true;
        //     }
        //     cbtne.addEventListener("click", disabledButton);

        //     }
        // }
    </script>

</body>
</html>