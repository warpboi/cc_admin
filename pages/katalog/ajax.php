  
  <?php
  $root = realpath($_SERVER["DOCUMENT_ROOT"]);

  if (isset($_GET['clothes'])) {
    require_once "$root/app/models/ClothMan.php";
    $item = new ClothMan();
    $data['item'] = $item->getBajuById($_GET['clothes']);
  }
  if (isset($_GET['pants'])) {
    require_once "$root/app/models/PantsMan.php";
    $item = new PantsMan();
    $data['item'] = $item->getCelanaById($_GET['pants']);
  }
  if (isset($_GET['shoes'])) {
    require_once "$root/app/models/ShoesMan.php";
    $item = new ShoesMan();
    $data['item'] = $item->getSepatuById($_GET['shoes']);
  }
  $myJSON = json_encode($data['item']);
  echo $myJSON;
  ?>