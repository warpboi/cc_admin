<?php
$data['title'] = "Home";
$data['css'] =
    array(
        "sidebar"
    );
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
    $root = $root . '\cc_admin';
}
echo $root;
require_once "$root/app/views/templates/header.php";
?>
<div class="container--content">
    Content here
    <a href="<?= base_url ?>/mixing">Start Mixing!</a>
</div>
<?php
require_once "$root/app/views/templates/footer.php";
