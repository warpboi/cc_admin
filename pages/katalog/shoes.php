<?php
$data['title'] = "Katalog";

$data['css'] =
    array(
        "sidebar",
        "paduan-pakaian"
    );
$data['script'] =
    array("data", "dom", "scriptMix");
$data['mix_page'] = 'shoes';
$data['dataname'] = 'sepatu';

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if ($root == 'C:\xampp\htdocs') {
    $root = 'C:\xampp\htdocs\cc_admin';
}
require_once "$root/app/views/templates/header.php";
require_once "$root/app/views/templates/sidebar.php";
require_once "$root/app/models/ShoesMan.php";

$items = new ShoesMan();
$data['items'] = $items->getAllSepatu();

?>

<style>
    .item-container {
        display: flex;
        width: 100%;
        flex-wrap: wrap;
        gap: 20px;
        padding: 30px;
    }

    .item {
        text-align: center;
        width: 210px;
        border-radius: 15px;
        border: solid 1px black;
    }

    .item img {
        width: 100%;
    }

    .item button {
        padding: 10px;
    }
</style>
<div class="item-container">
    <?php
    foreach ($data['items'] as $e) {
    ?>
        <div class="item">
            <img src="<?= base_url; ?>/uploads/<?= $e['gambar'] ?>.jpg" alt="">
            <button data-id="<?= $e['id'] ?>" data-item="<?= $data['mix_page'] ?>" class="btn-add ">+</button>
        </div>
    <?php
    }
    ?>
</div>
<?php
require_once "$root/app/views/templates/footer.php";
