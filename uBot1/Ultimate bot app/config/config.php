<?php
      session_start();
      if (!isset($_SESSION['lang']))
      {
            $_SESSION['lang'] = "en";
      }
      else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang']  && !empty($_GET['lang']))
      {
            if ($_GET['lang'] == "en")
            {
                  $_SESSION['lang'] = "en";
            }
            else if($_GET['lang'] == "yr")
            {
                  $_SESSION['lang'] = "yr";
            }
            else if($_GET['lang'] == "cn")
            {
                  $_SESSION['lang'] = "cn";
            }
            else if($_GET['lang'] == "it")
            {
                  $_SESSION['lang'] = "it";
            }
            else if($_GET['lang'] == "ha")
            {
                  $_SESSION['lang'] = "ha";
            }
            else if($_GET['lang'] == "ig")
            {
                  $_SESSION['lang'] = "ig";
            }
            else if($_GET['lang'] == "sp")
            {
                  $_SESSION['lang'] = "sp";
            }
            else if($_GET['lang'] == "ge")
            {
                  $_SESSION['lang'] = "ge";
            }
            else if($_GET['lang'] == "rs")
            {
                  $_SESSION['lang'] = "rs";
            }
      }
      // echo "Page language:". $_SESSION['lang'];
      require("../languages/" .$_SESSION['lang'].".php");

      /*
      Languages:
       English
       Yoruba
       Hausa
       Igbo
       Chinese
       Italian
       German
       Russian
       Spanish
      */
?>