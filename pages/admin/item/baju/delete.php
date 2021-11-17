<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
    $root = $root . '\cc_admin';
}

require_once "$root/app/models/Baju.php";

$baju = new Baju();

if (isset($_GET['id'])) {
    $item['identifier'] = substr($_GET['id'], 0, 2);
    $id = substr($_GET['id'], 2, 3);
    $item['id'] = (int) $id;
    if ($baju->deleteBaju($item) > 0) {
?>
        <script>
            location.replace("./");
        </script>
<?php
    }
}
