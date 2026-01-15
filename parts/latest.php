<?php
  if (!isset($artikel) || !is_array($artikel) || count($artikel) === 0) {
    // nothing to show
    return;
  }
  $laatste = count($artikel)-1;
 ?>
<form class="nieuws_sec" method="post">
  <span class="text">Laatste nieuws</span>
  <hr>
  <div class="space"></div>
  <?php
    for($i=0; $i<=5; $i++){
      if ($laatste < 0) break;
      echo "
      <div class='artikel border'>
        <img src='pic/artikels/". (isset($imgArtikel[$laatste]) ? $imgArtikel[$laatste] : 'placeholder.jpg') ."' class='artikel_foto'>
        <div class='artikel_text'>
          <div class='datum'>" . (isset($datumArtikel[$laatste]) ? $datumArtikel[$laatste] : '') . "</div>
          <button class='underline blauw nonbutton' value='" . (isset($artikel[$laatste]) ? $artikel[$laatste] : '') . "' type='submit' name='Article'>
              " . (isset($artikel[$laatste]) ? $artikel[$laatste] : '') . "
          </button>
        </div>
      </div>";
      $laatste --;
    }
   ?>
</form>
