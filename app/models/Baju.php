<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
if (strpos($root, 'htdocs') !== false) {
    $root = $root . '\cc_admin';
}

require_once "$root/app/config/config.php";
require_once "$root/app/config/Database.php";

class Baju
{

    private $table1 = 'baju_man';
    private $table2 = 'baju_woman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBaju()
    {
        $this->db->query("SELECT * FROM (
        SELECT id_baju_man AS id, nama, harga,'laki-laki' AS 'gender'
          FROM " . $this->table1 . ") AS a
        UNION 
        SELECT * FROM (
        SELECT id_baju_woman AS id, nama, harga,'perempuan' AS 'gender'
          FROM " . $this->table2 . ") AS b
        ");
        return $this->db->resultSet();
    }

    public function getBajuById($data)
    {
        echo "CHOOEOE" . $data['id'];
        if ($data['identifier'] == 'BM') {
            $table = $this->table1;
            $col_id = 'id_baju_man';
        } else {
            $table = $this->table2;
            $col_id = 'id_baju_woman';
        }
        echo "colid" . $col_id;
        $this->db->query('SELECT *, ' . $col_id . ' as id FROM ' . $table . ' WHERE ' . $col_id . '=:id');
        $this->db->bind('id', $data['id']);
        return $this->db->single();
    }

    public function tambahBaju($data)
    {
        if ($data['gender'] == 'laki-laki') {
            $table = $this->table1;
        } else {
            $table = $this->table2;
        }
        $tanggal = md5(date('Y-m-d h:i:s'));
        $foto_nama_new = $tanggal . '-' . substr($data['img_file'], -6);
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        if (strpos($root, 'htdocs') !== false) {
            $root = $root . '\cc_admin';
        }
        $path = $root . '/pages/uploads/' . $foto_nama_new;
        if ($data['img_type'] == "image/jpg" || $data['img_type'] == 'image/jpeg' || $data['img_type'] == 'image/png' || $data['img_type'] == 'image/gif') //check file extension
        {
            if (!file_exists($path)) //check file not exist in your upload folder path
            {
                if ($data['img_size'] < 5000000) //check file size 5MB
                {
                    move_uploaded_file($data['img_name'], $path); //move upload file temperory directory to your upload folder
                } else {
                    $errorMsg = "Your File To large Please Upload 5MB Size"; //error message file size not large than 5MB
                }
            } else {
                $errorMsg = "File Already Exists...Check Upload Folder"; //error message file not exists your upload folder path
            }
        } else {
            $errorMsg = "Upload JPG , JPEG , PNG & GIF File Formate.....CHECK FILE EXTENSION"; //error message file extension
        }
        $query = "INSERT INTO " . $table . " (nama, harga, gambar, link) VALUES(:nama, :harga, :gambar, :link)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('gambar', $foto_nama_new);
        $this->db->bind('link', $data['link']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function tambahBajuEZ($data)
    {
        if ($data['gender'] == 'laki-laki') {
            $table = $this->table1;
        } else {
            $table = $this->table2;
        }
        $query = "INSERT INTO " . $table . " (nama, harga, gambar, link) VALUES(:nama, :harga, :gambar, :link)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('link', $data['link']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function updateDataBaju($data)
    {
        echo "aidi" . $data['id'] . "sama iden" . $data['identifier'];
        $bajoeh = $this->getBajuById($data);
        echo $bajoeh['gambar'];
        if ($data['gender'] == "laki-laki") {
            $table = $this->table1;
            $table_ = $this->table2;
            $col_id = 'id_baju_man';
            $col_id_x = 'id_baju_woman';
        } else {
            $table = $this->table2;
            $table_ = $this->table1;
            $col_id = 'id_baju_woman';
            $col_id_x = 'id_baju_man';
        }
        if (isset($data['img_file'])) {
            # code... Kalo ganti gambar
            echo "GANTI GAMBAR";
            $tanggal = md5(date('Y-m-d h:i:s'));
            $foto_nama_new = $tanggal . '-' . substr($data['img_file'], -6);
            echo $data['img_name'];
            $root = realpath($_SERVER["DOCUMENT_ROOT"]);
            if (strpos($root, 'htdocs') !== false) {
                $root = $root . '\cc_admin';
            }
            $path = $root . '/pages/uploads/' . $foto_nama_new;
            $directory = $root . '/pages/uploads/';
            if ($data['img_type'] == "image/jpg" || $data['img_type'] == 'image/jpeg' || $data['img_type'] == 'image/png' || $data['img_type'] == 'image/gif') //check file extension
            {
                if (!file_exists($path)) //check file not exist in your upload folder path
                {
                    if ($data['img_size'] < 5000000) //check file size 5MB
                    {
                        if (file_exists($directory . $bajoeh['gambar'])) //check file not exist in your upload folder path
                        {
                            unlink($directory . $bajoeh['gambar']); //unlink function remove previous file
                        }
                        move_uploaded_file($data['img_name'], $path); //move upload file temperory directory to your upload folder
                    } else {
                        $errorMsg = "Your File To large Please Upload 5MB Size"; //error message file size not large than 5MB
                    }
                } else {
                    $errorMsg = "File Already Exists...Check Upload Folder"; //error message file not exists your upload folder path
                }
            } else {
                $errorMsg = "Upload JPG , JPEG , PNG & GIF File Formate.....CHECK FILE EXTENSION"; //error message file extension
            }

            if ($data['gender'] == $data['gender_old']) {
                $query = "UPDATE " . $table . " SET nama=:nama, harga=:harga, gambar=:gambar, link=:link WHERE " . $col_id . "=:id";

                $this->db->query($query);
                $this->db->bind('id', $data['id']);
                $this->db->bind('nama', $data['nama']);
                $this->db->bind('harga', $data['harga']);
                $this->db->bind('gambar', $foto_nama_new);
                $this->db->bind('link', $data['link']);
                $this->db->execute();
            } else {
                $this->tambahBaju($data);
                $this->db->query('DELETE FROM ' . $table_ . ' WHERE ' . $col_id_x . '=:id');
                $this->db->bind('id', $data['id']);
                $this->db->execute();
            }
            return $this->db->rowCount();
        } else {
            echo "GAK";
            # code... kalo gak
            if ($data['gender'] == $data['gender_old']) {
                $query = "UPDATE " . $table . " SET nama=:nama, harga=:harga, link=:link WHERE " . $col_id . "=:id";

                $this->db->query($query);
                $this->db->bind('id', $data['id']);
                $this->db->bind('nama', $data['nama']);
                $this->db->bind('harga', $data['harga']);
                $this->db->bind('link', $data['link']);
                $this->db->execute();
            } else {
                echo
                $data['gambar'] = $bajoeh['gambar'];
                $this->tambahBajuEZ($data);
                $this->db->query('DELETE FROM ' . $table_ . ' WHERE ' . $col_id_x . '=:id');
                $this->db->bind('id', $data['id']);
                $this->db->execute();
            }
            return $this->db->rowCount();
        }
    }

    public function deleteBaju($data)
    {
        $bajoeh = $this->getBajuById($data);

        if ($data['identifier'] == 'BM') {
            $table = $this->table1;
            $col_id = 'id_baju_man';
        } else {
            $table = $this->table2;
            $col_id = 'id_baju_woman';
        }
        $root = realpath($_SERVER["DOCUMENT_ROOT"]);
        if (strpos($root, 'htdocs') !== false) {
            $root = $root . '\cc_admin';
        }
        $directory = $root . '/pages/uploads/';
        if (file_exists($directory . $bajoeh['gambar'])) //check file not exist in your upload folder path
        {
            unlink($directory . $bajoeh['gambar']); //unlink function remove previous file
        }
        $this->db->query('DELETE FROM ' . $table . ' WHERE ' . $col_id . '=:id');
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
