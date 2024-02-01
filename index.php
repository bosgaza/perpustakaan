<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Online</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Style */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        /* Header Style */
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        /* Navigation Style */
        nav {
            background-color: #444;
            padding: 10px;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
        }

        /* Main Content Style */
        main {
            padding: 20px;
        }

        /* Center text in section */
        section {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Membuat tinggi section setara dengan tinggi viewport */
        }

        /* Footer Style */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Perpustakaan Online</h1>
    </header>

    <nav>
        <ul>
            <li><a href="view_data.php">Lihat Data</a></li>
            <li><a href="input_data.php">Isi Data</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>Selamat datang di Perpustakaan Online!</h2>
            <p>Temukan dan kelola data buku dengan mudah.</p>
        </section>

        <!-- Konten utama dapat diletakkan di sini -->
    </main>

    <footer>
        &copy; 2024 Perpustakaan Online
    </footer>

</body>
</html>
