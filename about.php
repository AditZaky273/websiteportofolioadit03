<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Me</title>
  <link rel="stylesheet" href="style.css"/>
  <style>
    #background {
      position: fixed;
      top: 0;
      left: 0;
      z-index: -1;
      width: 100%;
      height: 100%;
    }
    .about {
      max-width: 900px;
      margin: 100px auto;
      padding: 40px;
      background-color: rgba(255, 255, 255, 0.85);
      border-radius: 20px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
    }
    .about h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }
    .about p {
      font-size: 1.1rem;
      line-height: 1.6;
      color: #444;
      text-align: justify;
    }
    .btn-home {
      display: inline-block;
      margin-top: 30px;
      padding: 12px 24px;
      background-color: #1abc9c;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      transition: background 0.3s ease;
    }
    .btn-home:hover {
      background-color: #17a589;
    }
    .btn-container {
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <div class="navbar">
      <h1 class="logo">Portofolio</h1>
      <nav>
        <a href="index.php">Home</a>
        <a href="skills.php">Skills</a>
        <a href="project.php">Project</a>
        <a href="contact.php">Contact</a>
      </nav>
    </div>
  </header>

  <canvas id="background"></canvas>

  <section class="about">
    <h2>About Me</h2>
    <p>
      Halo! Saya <strong>Aditya Rizqi Faizzaky</strong>, seorang pelajar dari SMKN 5 Surakarta jurusan Pengembangan Perangkat Lunak dan Gim (PPLG). Saya memiliki minat besar dalam dunia <strong>Web Development</strong>, serta berpengalaman dalam membuat desain antarmuka menggunakan <strong>Figma</strong>, HTML, dan CSS. <br><br>
      Selain itu, saya juga memiliki kemampuan dalam mengedit video promosi menggunakan Adobe Premiere Pro dan CapCut. Saya senang bekerja secara kreatif dan selalu terbuka untuk belajar hal baru. Portofolio ini mencerminkan perjalanan dan karya saya di bidang desain web dan multimedia.
    </p>

    <div class="btn-container">
      <a href="index.php" class="btn-home">Kembali ke Home</a>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 Aditya Rizqi Faizzaky</p>
  </footer>


  <script>
    const canvas = document.getElementById("background");
    const ctx = canvas.getContext("2d");

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    const particles = [];
    const particleCount = 100;

    for (let i = 0; i < particleCount; i++) {
      particles.push({
        x: Math.random() * canvas.width,
        y: Math.random() * canvas.height,
        radius: Math.random() * 2 + 1,
        dx: (Math.random() - 0.5) * 1.5,
        dy: (Math.random() - 0.5) * 1.5
      });
    }

    function drawParticles() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      ctx.fillStyle = "#1abc9c88";
      particles.forEach(p => {
        ctx.beginPath();
        ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
        ctx.fill();
        p.x += p.dx;
        p.y += p.dy;

        if (p.x < 0 || p.x > canvas.width) p.dx *= -1;
        if (p.y < 0 || p.y > canvas.height) p.dy *= -1;
      });

      requestAnimationFrame(drawParticles);
    }

    drawParticles();

    window.addEventListener("resize", () => {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    });
  </script>
</body>
</html>
