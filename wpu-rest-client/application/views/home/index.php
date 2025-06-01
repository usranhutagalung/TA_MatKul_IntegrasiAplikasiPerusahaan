<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<style>
  body {
    font-family: 'Poppins', sans-serif;
  }

  .card:hover {
    transform: translateY(-5px);
    transition: 0.3s ease;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  }
</style>
<!-- Jumbotron -->
<div class="jumbotron text-center bg-dark text-white py-5" id="home" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);">
  <img src="<?= base_url(); ?>assets/img/usran.jpg" class="rounded-circle img-thumbnail shadow-lg mb-3" style="width: 200px; height: 200px;">
  <h1 class="display-4">Usran Bangun Fajar Hutagalung</h1>
  <h3 class="lead">Information System Student | Programmer | Public Speaker</h3>
</div>

<!-- About Me / Portfolio -->
<section class="portfolio" id="portfolio">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>About Me</h2>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php
      $about = [
        ['img' => '1.jpg', 'text' => 'Lahir di Kabupaten Tapanuli Tengah Sumatera Utara 20 Januari 2004.'],
        ['img' => '2.jpg', 'text' => 'Sekolah Dasar di MIN 7 Tapanuli Tengah'],
        ['img' => '7.jpg', 'text' => 'Sekolah Menengah pertama di MTS N Sibolga'],
        ['img' => '3.jpg', 'text' => 'Sekolah Menengah Atas di MAN Sibolga dengan Jurusan MIPA dan Lulus di Tahun 2022.'],
        ['img' => '4.jpg', 'text' => 'Kuliah di Universitas Islam Negeri Imam Bonjol Padang pada angkatan 2022.'],
        ['img' => '5.jpg', 'text' => 'Fakultas Sains dan Teknologi dengan Program Studi Sistem Informasi.'],
        ['img' => '6.jpg', 'text' => 'Hobi saya bermain game, mendengarkan musik, dan membaca novel. Warna kesukaan saya hitam.']
      ];
      foreach ($about as $item): ?>
        <div class="col mb-4">
          <div class="card shadow-sm h-100 border-0">
            <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/<?= $item['img']; ?>" alt="Card image">
            <div class="card-body">
              <p class="card-text text-center"><?= $item['text']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Contact -->
<section class="contact bg-light" id="contact">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>Contact</h2>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card bg-primary text-white mb-4 text-center">
          <div class="card-body">
            <h5 class="card-title">Contact Me</h5>
            <p class="card-text">Feel free to reach out to me via the form or location below.</p>
          </div>
        </div>

        <ul class="list-group mb-4">
          <li class="list-group-item"><h5><i class="bi bi-geo-alt-fill"></i> Location</h5></li>
          <li class="list-group-item">My Home</li>
          <li class="list-group-item">Jl. Padat Karya Lingk. 2, Sibuluan Nauli, Tapanuli Tengah</li>
          <li class="list-group-item">West Sumatera, Indonesia</li>
        </ul>
      </div>

      <div class="col-lg-6">
        <form>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" class="form-control" id="phone" placeholder="Masukkan nomor telepon" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Tulis pesan di sini" required></textarea>
          </div>
          <div class="form-group text-right">
            <button type="submit" class="btn btn-primary">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
  <p class="mb-0">© <?= date('Y'); ?> Usran Bangun Fajar Hutagalung. All Rights Reserved.</p>
</footer>
