<?php 

class Pelajar extends Controller {
    public function index() 
    {
        $data['judul'] = 'Daftar Pelajar';
        $data['students'] = $this->model('Pelajar_model')->getAllPelajar();
        $this->view('templates/header', $data);
        $this->view('pelajar/index', $data);
        $this->view('templates/footer');
    }


        public function detail($id) 
        {
            $data['judul'] = 'Daftar Pelajar';
            $data['pelajar'] = $this->model('Pelajar_model')->getPelajarById($id);
            $this->view('templates/header', $data);
            $this->view('pelajar/detail', $data);
            $this->view('templates/footer');
        }

        public function tambah()
        {
            if( $this->model('Pelajar_model')->tambahDataPelajar($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success' );
                header('Location:' . BASEURL . '/pelajar');
                exit;
            }else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location:' . BASEURL . '/pelajar');
                exit;
            }
        }

        public function hapus($id)
        {
            if( $this->model('Pelajar_model')->hapusDataPelajar($id) > 0 ) {
                Flasher::setFlash('berhasil', 'dihapus', 'success' );
                header('Location:' . BASEURL . '/pelajar');
                exit;
            }else {
                Flasher::setFlash('gagal', 'dihapus', 'danger');
                header('Location:' . BASEURL . '/pelajar');
                exit;
            }
        }

        public function getedit()
        {
            echo json_encode($this->model('pelajar_model')->getPelajarById($_POST['id']));
        }

        public function edit()
        {
            if( $this->model('Pelajar_model')->editDataPelajar($_POST) > 0 ) {
                Flasher::setFlash('berhasil', 'diedit', 'success' );
                header('Location:' . BASEURL . '/pelajar');
                exit;
            }else {
                Flasher::setFlash('gagal', 'diedit', 'danger');
                header('Location:' . BASEURL . '/pelajar');
                exit;
            }
        }

        public function cari()
        {
            $data['judul'] = 'Daftar Pelajar';
            $data['students'] = $this->model('Pelajar_model')->cariDataPelajar();
            $this->view('templates/header', $data);
            $this->view('pelajar/index', $data);
            $this->view('templates/footer');
        }
}
