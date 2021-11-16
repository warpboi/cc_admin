<?php
$data['title'] = "Home";
$data['css'] =
    array(
        "sidebar"
    );
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if ($root == 'C:\xampp\htdocs') {
    $root = 'C:\xampp\htdocs\cc_admin';
}
require_once "$root/app/views/templates/header.php";
?>
<div class="container--content">
    Content here
    <a href="<?= base_url ?>/mixing">Start Mixing!</a>
</div>
<?php
require_once "$root/app/views/templates/footer.php";
