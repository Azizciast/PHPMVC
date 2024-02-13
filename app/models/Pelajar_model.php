<?php

class Pelajar_model {
    private $table = 'students';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllPelajar()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPelajarById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPelajar($data) 
    {
        $query = "INSERT INTO students
                    VALUES
                    ('', :nama, :ndp, :email, :kursus)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('ndp', $data['ndp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('kursus', $data['kursus']);

        $this->db->execute();

        return $this->db->rowCount();
        // return 0;
    }

    public function hapusDataPelajar($id) 
    {
        $query = "DELETE FROM students WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataPelajar($data)
    
    {
        $query = "UPDATE  students SET
                    nama = :nama,
                    ndp = :ndp,
                    email = :email,
                    kursus = :kursus
                    WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('ndp', $data['ndp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('kursus', $data['kursus']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    
    }

    public function cariDataPelajar()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM students WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}
