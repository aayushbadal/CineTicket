<?php
    require_once"./includes/header.php";


    $movie_id = isset($_GET['movieId']) ? $_GET['movieId'] : 1;
    $query = "SELECT * FROM movies where id = $movie_id";
    $result = mysqli_query($conn, $query);

    $movie = mysqli_fetch_assoc($result);

    //fetch show time
    $show_query = "select * from show_times where movie_id = $movie_id";
    $show_result = mysqli_query($conn, $show_query);
    $show_times = mysqli_fetch_all($result);
?>
 <section id="booking-section">
    <div class="container">
        <div class="booking-container">
            <div class="booking-poster">
                <img src="https://m.media-amazon.com/images/M/MV5BMTljN2VmZTctY2E0Yy00YTdkLWE4MWUtZjJhMmM0ZmExYTg4XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg" alt="">
            </div>
            <div class="booking-details">
                <h2 class="booking-title"> <?= $movie['title'] ?></h2>
                <div class="booking-info">
                    <p>
                        <strong>Genre: </strong> <?= $movie['genre'] ?>
                    </p>
                    <p>
                        <strong>Duration: </strong> <?= $movie['duration'] ?>
                    </p>
                    <p>
                        <strong>Rs. <?= $movie['price'] ?></strong> per ticket
                    </p>
                </div>
                
                <form action="" id="booking-form">
                    <div class="form-group">
                        <label for="">Select Date</label>
                        <select name="" id="">
                            <option value="">9:00 AM</option>
                            <option value="">11:00 AM</option>
                        </select>
                    </div>

                    <div class="seating-area">
                        <h3>Select Your Seat</h3>
                        <div class="screen"></div>
                        <div id="seats-container" class="seats-container">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 </section>

 <script src="./assets/js/booking.js"></script>

<?php
    require_once"./includes/footer.php";
?>