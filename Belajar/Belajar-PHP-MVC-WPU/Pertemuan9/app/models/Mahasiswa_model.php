<?php
class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    // Database Handler
    private $dbh;
    private $stmt;

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        // Cek apakah file diunggah
        if (isset($_FILES['foto_profile']) && $_FILES['foto_profile']['error'] == 0) {
            // Ambil file dari $_FILES
            $file = $_FILES['foto_profile']['tmp_name'];
            $fotoProfile = file_get_contents($file); // Konversi menjadi BLOB
        } else {
            // Misalnya, gunakan file default jika tidak ada yang diunggah
            $fotoProfile = file_get_contents('path/to/default/profile/image.jpg');
        }

        $query = "INSERT INTO mahasiswa
          (id, nama, nrp, email, jurusan, foto_profile)
          VALUES ('', :nama, :nrp, :email, :jurusan, :foto_profile)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('foto_profile', $fotoProfile, PDO::PARAM_LOB); // Bind as LOB

        $this->db->execute();
        return $this->db->rowCount();
    }

    //     // Method untuk mengambil foto dari database berdasarkan ID
    //     public function getFotoProfileById($id)
    //     {
    //         $this->db->query('SELECT foto_profile FROM ' . $this->table . ' WHERE id=:id');
    //         $this->db->bind('id', $id);
    //         return $this->db->single(); // Mendapatkan satu record
    //     }
    // }

    // // Mendapatkan ID mahasiswa dari URL, misalnya tampil_foto.php?id=1
    // if (isset($_GET['id'])) {
    //     $id = $_GET['id'];
    //     $model = new Mahasiswa_model();
    //     $result = $model->getFotoProfileById($id);

    //     // Jika gambar ditemukan, tampilkan
    //     if ($result && !empty($result['foto_profile'])) {
    //         header('Content-Type: image/jpeg'); // Ubah sesuai dengan format gambar Anda (jpeg/png/gif)
    //         echo $result['foto_profile']; // Menampilkan data BLOB sebagai gambar
    //     } else {
    //         echo 'Foto tidak ditemukan.';
    //     }
    // } else {
    //     echo 'ID tidak ditemukan.';
    // }
}
