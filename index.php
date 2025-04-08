<?php

$movies=[
    [
        'name'=>'Basanta',
        'poster'=>'https://m.media-amazon.com/images/M/MV5BMTljN2VmZTctY2E0Yy00YTdkLWE4MWUtZjJhMmM0ZmExYTg4XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
        'info'=>[
            'Drama',
            '160min'
        ],
        'time'=>[
            '8:00am',
            '11:00am',
            '2:00pm'
        ]
    ],
    [
        'name'=>'A Minecraft Movie',
        'poster'=>'https://m.media-amazon.com/images/M/MV5BYzFjMzNjOTktNDBlNy00YWZhLWExYTctZDcxNDA4OWVhOTJjXkEyXkFqcGc@._V1_.jpg',
        'info'=>[
            'Drama',
            '110min'
        ],
        'time'=>[
            '8:00anm',
            '11:00am',
            '2:00pm'
        ]
        ],
    [
        'name'=>'Avatar - The Way of Water',
        'poster'=>'https://upload.wikimedia.org/wikipedia/en/5/54/Avatar_The_Way_of_Water_poster.jpg',
        'info'=>[
            'Action/Sci-fi',
            '192min'
        ],
        'time'=>[
            '8:00anm',
            '11:00am',
            '2:00pm'
        ]
    ]
];





?>

    <?php 
        require_once "./includes/header.php";
    ?>


    <!-- Hero Section -->
     <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Experience the Magic of Cinema</h1>
                <p>Book our Tickets online & Enjoy The Latest Blockbusters</p>
                <a href="/movies" class="hero-btn">Explore Movies</a>
            </div>
        </div>
     </section>

     <!--Booking section -->

     <section id="movies" class="movies-section">
        <div class="container">
            <h2 class="section-title">Now Showing</h2>
            <div class="movies-grid">
                <!-- movie -->
                <?php foreach($movies as $movie):?>
                <div class="movie-card">
                    <img src="<?=$movie['poster']?>" class="movie-poster" alt="">
                    <div class="movie-details">
                        <h3 class="movie-title"><?=$movie['name']?></h3>
                        <div class="movie-info">
                            <?php foreach($movie['info'] as $info): ?>
                            <span><?= $info ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="movie-times">
                            <?php foreach($movie['time'] as $time): ?>
                                <span class="movie-time"><?= $time ?></span>
                            <?php endforeach;?>
                        </div>
                        <a href="" class="book-btn">Book Ticket</a>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        
        </div>

     </section>

    <?php
        require_once"includes/footer.php";
    ?>