
<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    $checkwachtwoord = isset($_SESSION["wachtwoordCheck"]) ? $_SESSION["wachtwoordCheck"] : '';
    if($checkwachtwoord != "true"){
      echo "
      <form class='aanmelden iphone' id='aanmeldVak' method='post'>
          <button type='submit' name='Aanmelden' class='aanmelden_button'>
            Geen account? Meld je gratis aan!
          </button><br>
          <button class='inlog_ver'>
            <span class='blauw'>Vragen of hulp nodig ?</span>
          </button>
        </div>
      </form>";
    }
    elseif ($checkwachtwoord == "false") {
      echo "
       <form class='aanmelden iphone' id='aanmeldVak' method='post'>
          <button type='submit' name='Aanmelden'class='aanmelden_button'>
            Geen account? Meld je gratis aan!
          </button><br>
          <button class='inlog_ver'>
            <span class='blauw'>Vragen of hulp nodig ?</span>
          </button>
        </div>
      </form>";
    }

 ?>
