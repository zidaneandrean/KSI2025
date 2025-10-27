<?php
// contoh data mahasiswa (statik)
$mahasiswa = [
  ['nim' => '23120001', 'nama' => 'Muhammad Zidane Andrean', 'prodi' => 'Manajemen Informatika'],
  ['nim' => '23120002', 'nama' => 'Widiana Indira', 'prodi' => 'Sistem Informasi'],
  ['nim' => '23120003', 'nama' => 'Zayn Malik', 'prodi' => 'Teknik Komputer'],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KSI2025 - Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">KSI2025</a>
    </div>
  </nav>

  <div class="container my-5">
    <h3 class="mb-4 text-center">Daftar Mahasiswa</h3>
    <table class="table table-striped table-bordered">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Prodi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; foreach($mahasiswa as $m): ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= htmlspecialchars($m['nim']); ?></td>
            <td><?= htmlspecialchars($m['nama']); ?></td>
            <td><?= htmlspecialchars($m['prodi']); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <footer class="bg-dark text-light text-center py-3">
    <div class="container">© 2025 Zidane Andrean - KSI2025</div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>