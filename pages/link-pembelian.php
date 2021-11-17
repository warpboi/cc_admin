<?php
$data['title'] = "Paduan Pakaian";

$data['css'] =
    array(
        "linkpembelian",
        "sidebar"
    );
// $data['script'] =
//     array('data', "dom", 'scriptMix', 'mixing', "paduan-pakaian");
$data['mix_page'] = 'index';

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
    $root = $root . '\cc_admin';
}
require_once "$root/app/views/templates/header.php";
// require_once "$root/app/views/templates/sidebar.php";

if (!isset($_SESSION['uname'])) {
    header('Location: ' . base_url . '/login/');
}
if (isset($_POST["submit-pakaian"])) {
    require_once "$root/app/models/ClothMan.php";
    require_once "$root/app/models/PantsMan.php";
    require_once "$root/app/models/ShoesMan.php";

    $baju = new ClothMan();
    $celana = new PantsMan();
    $sepatu = new ShoesMan();
    $data['baju'] = $baju->getBajuById($_POST["baju"]);
    $data['celana'] = $celana->getCelanaById($_POST["celana"]);
    $data['sepatu'] = $sepatu->getSepatuById($_POST["sepatu"]);
} else {
}

?>
<div class="container--content">
    <p>Link To Your Outfit</p>
    <table class="tabel">
        <tr>
            <td><img src="./uploads/<?= $data['baju']['gambar'] ?>" class="baju"></img></td>
            <td><a target="_blank" href="<?= $data['baju']['link'] ?>" class="button"><?= $data['baju']['link'] ?></a></td>
            <td><a target="_blank" href="<?= $data['baju']['link'] ?>"><img src="./dist/img/link.png" class="link"></img></a></td>
        </tr>
        <tr>
            <td><img src="./uploads/<?= $data['celana']['gambar'] ?>" class="celana"></img></td>
            <td><a target="_blank" href="<?= $data['celana']['link'] ?>" class="button"><?= $data['celana']['link'] ?></a></td>
            <td><a target="_blank" href="<?= $data['celana']['link'] ?>"><img src="./dist/img/link.png" class="link"></img></a></td>
        </tr>
        <tr>
            <td><img src="./uploads/<?= $data['sepatu']['gambar'] ?>" class="sepatu"></img></td>
            <td><a target="_blank" href="<?= $data['sepatu']['link'] ?>" class="button"><?= $data['sepatu']['link'] ?></a></td>
            <td><a target="_blank" href="<?= $data['sepatu']['link'] ?>"><img src="./dist/img/link.png" class="link"></img></a></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
    <a class="btn-grad back-to-mix" href="./mixing">
        Back to Mixing Page
    </a>

</div>
<?php
require_once "$root/app/views/templates/footer.php";
?>