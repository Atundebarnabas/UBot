<?php

      /*include("Mobile_Detect.php");

      $detect_device = new Mobile_Detect;

      // For All Mobile Devices
      if ($detect_device->isMobile())
      {
            header("location:mobile.php");
            exit();
      }*/
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>OTP/PIN Input Fields</title>
      <link rel="stylesheet" href="style.css">
</head>
<body>
      <h1>Enter OTP</h1>
      <div class="otp-bx">
            <input type="text" id="first" maxlength="1">
            <input type="text" maxlength="1" disabled>
            <input type="text" maxlength="1" class="space" disabled>
            <input type="text" maxlength="1" disabled>
            <input type="text" maxlength="1" disabled>
            <input type="text" maxlength="1" disabled>
      </div>
      <div id="no" style="background-color: white;color: #292D32;height: 120px;width: 120px;"></div>
      <input type="text" id="no2" autocomplete="off">

      <!-- # code from Stackoverflow
      # source link ====> 'https://stackoverflow.com/questions/69431738/how-to-remove-background-of-an-img-and-echo-it-as-a-transparent-using-php'
      # answer given by 'Philippe' profile link = "https://stackoverflow.com/users/4698373/philippe"
      # Question asked by 'Ambiguous Turtle' profile link = "https://stackoverflow.com/users/7861035/ambiguous-turtle" -->
<?php
$_filename= "C:\Users\mails\Pictures\ulteematebot_icon.png";
$im = imagecreatefrompng($_filename);
$remove = imagecolorallocate($im, 208, 216, 218);

imagecolortransparent($im, $remove);

imagepng($im, $_SERVER['DOCUMENT_ROOT']."/ulti.png");
imagedestroy($im);

?>
<body style="background-color: rebeccapurple;">
  
  <a href="/ulti.png" download="ulteematebot_icon">
      <img src="/ulti.png">
  </a>
</body>

<?php

      if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $url = "https";
      }

      else {
            $url = "http";
      }

      // Here append the common URL characters.
      $url .= "://";

      // Append the host(domain name, ip) to the URL.
      $url .= $_SERVER['HTTP_HOST'];

      // Append the requested resource location to the URL.

      $url .= $_SERVER['REQUEST_URI'];

      echo $url."<br>";

      // Initalize URL to the variable
      $referal_link = 'Https://www.ultimateBot.com/signup?referalcode=808080&memberid=09093494749394739';

      // Use parse_url() function to parse the URL
      // and return an associative array which
      // contains its various components

      $referal_link_componenets = parse_url($url);


      // Use parse_str() function to parse the
      // String passed via URL
      parse_str($referal_link_componenets['query'],  $rlv);
      echo 'This referal details belongs to member '. $rlv['memberid']. ' and the referalcode is '. $rlv['referalcode'];
?>

      <script>
            const inputs = document.querySelectorAll(".otp-bx input");


            const f = document.getElementById("first");

            window.addEventListener('load', function (e) {
            
                  f.focus();
            })
                 

            inputs.forEach((input, index) => {
                  input.dataset.index = index;
                  input.addEventListener("paste", handleOtppaste);
                  input.addEventListener("keyup", handleOtp);
                  input.setAttribute('autocomplete', 'off');
            });

            function handleOtppaste(e) {
                  const data = e.clipboard.getData("text");
                  const value = data.split("");
                  if(value.length === inputs.length) {
                        inputs.forEach((input, index) => (input.value = value[index]));
                        submit();
                  }
            }
            function handleOtp(e) {
                  const input = e.target;
                  let value = input.value;
                  input.value = "";
                  input.value = value ? value[0]: "";


                  let fieldIndex = input.dataset.index;
                  if(value.length > 0 && fieldIndex < inputs.length - 1) {
                        input.nextElementSibling.focus();
                  }
                  
                  const currentInput = input,
                  nextInput = input.nextElementSibling,
                  prevInput = input.previousElementSibling;




                  if (nextInput && nextInput.hasAttribute("disabled") && currentInput.value !== "") {
                  nextInput.removeAttribute("disabled");
                  nextInput.focus();
                  // currentInput.value = "";
                  
                  }

                  if(e.key === "Backspace" && fieldIndex > 0) {
                        input.previousElementSibling.focus();
                        currentInput.setAttribute("disabled", true);
                        currentInput.value= ""
                        prevInput.focus();

                  }
                  if(e.key === 'Enter' && input.value =='' || fieldIndex < 0) {
                        alert("Complete your pin");
                  }else {

                        if(fieldIndex == inputs.length - 1 && fieldIndex !== 0) {
                        submit();
                        }else {
                              // alert("Okay");
                        }
                  }

            }


                  



            function submit() {
                  console.log("Submitting.....")
                  let otp = "";
                  inputs.forEach((input) => {
                        otp += input.value;
                        input.disabled = true;
                        input.classList.add("disabled");
                  })
                  console.log(otp);
                  // alert(otp);
                  var x = document.getElementById("no").innerText = otp;
                  var y = document.getElementById("no2").value = otp;
                  // window.location.href="pintest.html";
            }
      </script>
</body>
</html>