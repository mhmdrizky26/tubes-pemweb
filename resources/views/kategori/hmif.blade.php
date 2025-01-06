<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HMIF | Insighthub</title>
<link rel="stylesheet" href="{{ asset('bahan-tubes/kategori_materi/styles.css') }}">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<div class="container">
    <!-- Navigation Sidebar -->
    <aside class="sidebar">
    <a href="dashboard.html"><img src="../img/InsightHub__2__1-removebg-preview.png" alt="#"></a>
    <nav>
        <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#" class="active">Blog</a></li>
        </ul>
    </nav>
    <div class="logout">
        <a href="#">Log out</a>
    </div>
    </aside>

    <!-- Main Content -->
    <main>
    <div class="articles-section">
        <h2>Blog</h2>
        <i class='bx bxs-user-circle' ></i>

        <!-- Filter Section -->
        <div class="filter-section">
        <select>
            <option value="all">Sort by</option>
            <option value="lomba">Lomba</option>
            <option value="beasiswa">Beasiswa</option>
            <option value="karir">Karir</option>
            <option value="kabar">Kabar Terbaru</option>
            <option value="hmif">HMIF</option>
        </select>
        <button class="filter-button">Filter</button>
        </div>

        <!-- Articles Grid -->
        <div class="articles-grid">
        <div class="article-card">
            <img src="../img/blog1.jpg" alt="Relationship">
            <div class="article-content">
            <span class="category">HMIF</span>
            <h3><a href="../blog-single.html">Musyawarah Besar</a></h3>
            <p class="author">HMIF</p>
            </div>
        </div>
        <div class="article-card">
            <img src="../img/blog2.jpeg" alt="Burnout">
            <div class="article-content">
            <span class="category">Lomba</span>
            <h3><a href="../blog-single.html">Lomba Hology7.0</a></h3>
            <p class="author">Dr. Nick Willford</p>
            </div>
        </div>
        <div class="article-card">
            <img src="../img/blog3.jpg" alt="Emotions">
            <div class="article-content">
            <span class="category">Beasiswa</span>
            <h3><a href="../blog-single.html">Beasiswa JFLS</a></h3>
            <p class="author">Dr. Sarah Legend</p>
            </div>
        </div>
        <div class="article-card">
            <img src="image4.jpg" alt="Stress">
            <div class="article-content">
            <span class="category">Karir</span>
            <h3><a href="#"></a>Lorem Ipsum</h3>
            <p class="author">Dr. Evan Peters</p>
            </div>
        </div>
        <div class="article-card">
            <img src="image5.jpg" alt="Health">
            <div class="article-content">
            <span class="category">beasiswa</span>
            <h3><a href="#"></a>Lorem Ipsum</h3>
            <p class="author">Dr. Sam Cooper</p>
            </div>
        </div>
        <div class="article-card">
            <img src="image6.jpg" alt="Health">
            <div class="article-content">
            <span class="category">Kabar Terbaru</span>
            <h3><a href="#"></a>Lorem Ipsum</h3>
            <p class="author">Dr. Kelly Adams</p>
            </div>
        </div>
        </div>

        <!-- Pagination -->
        <div class="pagination">
        <button class="page active">1</button>
        <button class="page">2</button>
        <button class="page">3</button>
        <button class="page">...</button>
        <button class="page">80</button>
        </div>
    </div>
    </main>
</div>
</body>
</html>
