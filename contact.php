<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kontak</title>
  <link rel="stylesheet" href="style.css">
  <style>
    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }

    .contact-form button {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      background-color: #1abc9c;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .contact-form button:hover {
      background-color: #17a589;
    }
  </style>
</head>
<body>
  <section class="section-page">
    <h2>Hubungi Saya via WhatsApp</h2>
    <p>Silakan isi form berikut untuk mengirim pesan langsung ke WhatsApp saya.</p>

    <form class="contact-form" onsubmit="kirimWA(event)">
      <input type="text" id="nama" placeholder="Nama Anda" required>
      <textarea id="pesan" rows="5" placeholder="Pesan Anda..." required></textarea>
      <button type="submit">Kirim via WhatsApp</button>
    </form>

    <br>
    <a href="index.php" class="btn">Kembali ke Home</a>
  </section>

  <script>
    function kirimWA(e) {
      e.preventDefault();

      const nama = document.getElementById("nama").value.trim();
      const pesan = document.getElementById("pesan").value.trim();
      const noWa = "6283843836165";

      const linkWA = `https://wa.me/${noWa}?text=Halo%2C%20saya%20${encodeURIComponent(nama)}.%0A${encodeURIComponent(pesan)}`;
      window.open(linkWA, '_blank');
    }
  </script>
</body>
</html>
