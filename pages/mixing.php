<?php
$data['title'] = "Paduan Pakaian";

$data['css'] =
    array(
        "sidebar",
        "paduan-pakaian"
    );
$data['script'] =
    array('data', "dom", 'scriptMix', 'mixing', "paduan-pakaian");
$data['mix_page'] = 'index';

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
    $root = $root . '\cc_admin';
}
require_once "$root/app/views/templates/header.php";
require_once "$root/app/views/templates/sidebar.php";

if (!isset($_SESSION['uname'])) {
    header('Location: ' . base_url . '/login/');
}

require_once "$root/app/models/Recomendation.php";

$recomendation = new Recomendation();
$data['items'] = $recomendation->getAllRecomendation();

?>
<div class="container--content">
    <div class="container">
        <section class="customize">
            <h1 class="header-sec">Customize Your Outfit</h1>

            <div class="picker" id="cloth">
                <button class="previous-btn" id="pick_cloth"><i class="fas fa-chevron-left"></i></button>

                <div class="wrapperimg" id="pick_cloth_img">
                    <div class="images-area">
                    </div>
                    <!-- Buttons Area -->
                    <!-- Pagination Area -->
                    <div class="pagination-area">
                    </div>
                </div>
                <button class="next-btn" id="pick_cloth"><i class="fas fa-chevron-right"></i></button>

            </div>
            <div class="picker" id="pants">
                <button class="previous-btn" id="pick_pants"><i class="fas fa-chevron-left"></i></button>

                <div class="wrapperimg" id="pick_pants_img">
                    <div class="images-area">
                    </div>
                    <!-- Buttons Area -->
                    <!-- Pagination Area -->
                    <div class="pagination-area">
                    </div>
                </div>
                <button class="next-btn" id="pick_pants"><i class="fas fa-chevron-right"></i></button>

            </div>
            <div class="picker" id="shoes">
                <button class="previous-btn" id="pick_shoes"><i class="fas fa-chevron-left"></i></button>

                <div class="wrapperimg" id="pick_shoes_img">
                    <div class="images-area">
                    </div>
                    <!-- Buttons Area -->
                    <!-- Pagination Area -->
                    <div class="pagination-area">
                    </div>
                </div>
                <button class="next-btn" id="pick_shoes"><i class="fas fa-chevron-right"></i></button>

            </div>
            <form action="./link-pembelian" method="post">
                <input type="hidden" name="baju" id="baju_selected" />
                <input type="hidden" name="celana" id="celana_selected" />
                <input type="hidden" name="sepatu" id="sepatu_selected" />

                <input class="btn-grad mix-submit" type="submit" name="submit-pakaian" value="OK" />
            </form>
        </section>
    </div>
    </section>
    <section class="recomendation">
        <h3>Rekomendasi Pakaian</h3>
        <div class="recomendation--container">
            <?php
            foreach ($data['items'] as $e) {
            ?>
                <div style="cursor: pointer;" class="recomendation_item ">
                    <img class="btn-add" data-id="<?= $e['id'] ?>" data-item="<?= $e['Source'] ?>" src="<?= base_url; ?>/uploads/<?= $e['gambar'] ?>.jpg" alt="">
                </div>
            <?php
            }
            ?>
        </div>
    </section>
</div>

<?php
require_once "$root/app/views/templates/footer.php";
?>