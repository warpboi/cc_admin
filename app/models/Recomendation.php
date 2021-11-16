<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once "$root/app/config/config.php";
require_once "$root/app/config/Database.php";

class Recomendation
{

    // private $table = 'celana_man';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllRecomendation()
    {
        $this->db->query("SELECT * from (
SELECT id_baju_man AS id, nama, gambar,'clothes' as Source
  FROM baju_man
  ORDER BY RAND()
  LIMIT 4) AS a
UNION 
SELECT * from (
SELECT id_celana_man AS id, nama, gambar,'pants' as Source
  FROM celana_man
   ORDER BY RAND()
  LIMIT 4) AS b
UNION 
SELECT * from (
SELECT id_sepatu AS id, nama, gambar, 'shoes' as Source
  FROM sepatu_man
   ORDER BY RAND()
  LIMIT 4) AS c
  ORDER BY RAND()");
        return $this->db->resultSet();
    }

    public function getCelanaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_celana_man=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahBuku($data)
    {
        $query = "INSERT INTO buku (judul, penerbit, pengarang, tahun, kategori_id, harga) VALUES(:judul, :penerbit, :pengarang, :tahun, :kategori_id, :harga)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('kategori_id', $data['kategori_id']);
        $this->db->bind('harga', $data['harga']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataBuku($data)
    {
        $query = "UPDATE buku SET judul=:judul, penerbit=:penerbit, pengarang=:pengarang, pengarang=:pengarang, tahun=:tahun, kategori_id=:kategori_id, harga=:harga WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('kategori_id', $data['kategori_id']);
        $this->db->bind('harga', $data['harga']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteBuku($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariBuku()
    {
        $key = $_POST['key'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE judul LIKE :key");
        $this->db->bind('key', "%$key%");
        return $this->db->resultSet();
    }
}
