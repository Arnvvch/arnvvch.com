<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arnvvch.com</title>
    <meta name="description" content="Personal portfolio of Arnav Chotkan - Developer, Student, and Tech Enthusiast.">
    <meta property="og:title" content="arnvvch.com">
    <meta property="og:description" content="Explore my projects, journey, and contact info.">
    
    <!-- Modern Typography -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Space+Grotesk:wght@300;500;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/htmx.org@1.9.10"></script>
    <script async src="https://unpkg.com/es-module-shims@1.8.0/dist/es-module-shims.js"></script>
    <script type="importmap">
    {
        "imports": {
            "three": "https://unpkg.com/three@0.160.0/build/three.module.js",
            "three/addons/": "https://unpkg.com/three@0.160.0/examples/jsm/"
        }
    }
    </script>
</head>
<body>
    <div class="main-container">
        <!-- New Top Header -->
        <header class="top-nav">
            <div class="brand">arnvvch<span>.com</span></div>
            <button class="hamburger" onclick="toggleMenu()">☰</button>
        </header>

        <!-- Layout Wrapper -->
        <div class="layout">
            <!-- Left Panel (Character Area) -->
            <div class="model-area">
                <div class="character-glow-orb"></div>
                <div id="three-container"></div>
            </div>

            <!-- Sidebar Navigation (Hidden on mobile) -->
            <nav class="sidebar" id="nav-menu">
                <div class="nav-links">
                    <button class="nav-button active" hx-get="content/home.php" hx-target=".window-content" onclick="toggleMenu(); updateActive(this)">HOME</button>
                    <button class="nav-button" hx-get="content/about.php" hx-target=".window-content" onclick="toggleMenu(); updateActive(this)">ABOUT</button>
                    <button class="nav-button" hx-get="content/projects.php" hx-target=".window-content" onclick="toggleMenu(); updateActive(this)">PROJECTS</button>
                    <button class="nav-button" hx-get="content/contact.php" hx-target=".window-content" onclick="toggleMenu(); updateActive(this)">CONTACT</button>
                </div>
            </nav>

            <!-- Main Content Area -->
            <main class="content-area">
                <div id="content-box" class="glass-box">
                    <div class="new-corner-decor-wrapper"></div>
                    <div class="new-scanner-line"></div>
                    <div class="new-bg-shape" style="width: 40px; height: 40px; top: 10%; right: 10%;"></div>
                    <div class="new-bg-shape" style="width: 20px; height: 20px; bottom: 20%; left: 5%; border-radius: 50%;"></div>
                    
                    <div class="window-content">
                        <?php include 'content/home.php'; ?>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script type="module" src="js/viewer.js"></script>
    <script>
        function updateActive(btn) {
            document.querySelectorAll('.nav-button').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        }
        function toggleMenu() {
            document.getElementById('nav-menu').classList.toggle('open');
        }
    </script>
</body>
</html>
  </script>
</body>
</html>
