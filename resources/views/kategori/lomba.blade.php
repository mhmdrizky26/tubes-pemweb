<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lomba | Insighthub</title>
<link rel="stylesheet" href="{{ asset('bahan-tubes/kategori_materi/styles.css') }}">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<div class="container">
    <!-- Navigation Sidebar -->
    <aside class="sidebar">
    <a href="dashboard.html"><img src="{{ asset('bahan-tubes/img/InsightHub__2__1-removebg-preview.png') }}" alt="#"></a>
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
            <img src="image1.jpg" alt="lomba">
            <div class="article-content">
            <span class="category">Lomba</span>
            <h3><a href="../blog-single.html">Lorem Ipsum</a></h3>
            <p class="author">Lorem</p>
            </div>
        </div>
        <div class="article-card">
            <img src="{{ asset('img/blog2.jpeg') }}" alt="lomba">
            <div class="article-content">
            <span class="category">Lomba</span>
            <h3><a href="../blog-single.html">Lomba Hology7.0</a></h3>
            <p class="author">Lorem</p>
            </div>
        </div>
        <div class="article-card">
            <img src="image4.jpg" alt="lomba">
            <div class="article-content">
            <span class="category">Lomba</span>
            <h3><a href="../blog-single.html">Lorem Ipsum</a></h3>
            <p class="author">Lorem</p>
            </div>
        </div>
        <div class="article-card">
            <img src="image4.jpg" alt="lomba">
            <div class="article-content">
            <span class="category">Lomba</span>
            <h3><a href="#"></a>Lorem Ipsum</h3>
            <p class="author">Lorem</p>
            </div>
        </div>
        <div class="article-card">
            <img src="image5.jpg" alt="lomba">
            <div class="article-content">
            <span class="category">lomba</span>
            <h3><a href="#"></a>Lorem Ipsum</h3>
            <p class="author">Lorem Ipsum</p>
            </div>
        </div>
        <div class="article-card">
            <img src="image6.jpg" alt="Lomba">
            <div class="article-content">
            <span class="category">Lomba</span>
            <h3><a href="#"></a>Lorem Ipsum</h3>
            <p class="author">Lorem</p>
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
