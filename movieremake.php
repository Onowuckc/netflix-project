<?php
session_start();
// Sample movie, series, and animation data
$movies = array(
    array(
        "title" => "The Shawshank Redemption",
        "description" => "Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.",
        "video_url" => "https://solarmovie.pe/watch-movie/watch-the-shawshank-redemption-free-19679.5349142"
    ),
    array(
        "title" => "The Godfather",
        "description" => "The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.",
        "video_url" => "https://www.example.com/the_godfather.mp4"
    ),
    array(
        "title" => "The Dark Knight",
        "description" => "When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.",
        "video_url" => "https://www.example.com/dark_knight.mp4"
    ),
    array(
        "title" => "Inception",
        "description" => "A thief who enters the dreams of others to steal secrets from their subconscious must plant an idea into the mind of a CEO.",
        "video_url" => "https://www.example.com/inception.mp4"
    ),
    array(
        "title" => "Pulp Fiction",
        "description" => "The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.",
        "video_url" => "https://www.02tvmovies.com/pulp_fiction.mp4"
    ),
    array(
        "title" => "Forrest Gump",
        "description" => "The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.",
        "video_url" => "https://www.example.com/forrest_gump.mp4"
    ),
    array(
        "title" => "The Matrix",
        "description" => "A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.",
        "video_url" => "https://www.example.com/the_matrix.mp4"
    ),
    array(
        "title" => "Fight Club",
        "description" => "An insomniac office worker and a devil-may-care soap maker form an underground fight club that evolves into much more.",
        "video_url" => "https://www.example.com/fight_club.mp4"
    ),
    array(
        "title" => "The Silence of the Lambs",
        "description" => "A young FBI cadet must receive the help of an incarcerated and manipulative cannibal killer to help catch another serial killer, a madman who skins his victims.",
        "video_url" => "https://www.example.com/silence_of_the_lambs.mp4"
    )
);
// Sample series data
$series = array(
    array(
        "title" => "Breaking Bad",
        "description" => "A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family's future.",
        "video_url" => "https://www.example.com/breaking_bad.mp4"
    ),
    array(
        "title" => "Game of Thrones",
        "description" => "Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.",
        "video_url" => "https://www.example.com/game_of_thrones.mp4"
    ),
    array(
        "title" => "Stranger Things",
        "description" => "When a young boy disappears, his mother, a police chief, and his friends must confront terrifying supernatural forces in order to get him back.",
        "video_url" => "https://www.example.com/stranger_things.mp4"
    ),
    array(
        "title" => "Friends",
        "description" => "Follows the personal and professional lives of six twenty to thirty-something-year-old friends living in Manhattan.",
        "video_url" => "https://www.example.com/friends.mp4"
    ),
    // Additional series
    array(
        "title" => "Breaking Bad 2",
        "description" => "A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family's future.",
        "video_url" => "https://www.example.com/breaking_bad_2.mp4"
    ),
    array(
        "title" => "Game of Thrones 2",
        "description" => "Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.",
        "video_url" => "https://www.example.com/game_of_thrones_2.mp4"
    ),
    array(
        "title" => "Stranger Things 2",
        "description" => "When a young boy disappears, his mother, a police chief, and his friends must confront terrifying supernatural forces in order to get him back.",
        "video_url" => "https://www.example.com/stranger_things_2.mp4"
    ),
    array(
        "title" => "Friends 2",
        "description" => "Follows the personal and professional lives of six twenty to thirty-something-year-old friends living in Manhattan.",
        "video_url" => "https://www.example.com/friends_2.mp4"
    ),
    array(
        "title" => "Breaking Bad 3",
        "description" => "A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family's future.",
        "video_url" => "https://www.example.com/breaking_bad_3.mp4"
    ),
    array(
        "title" => "Game of Thrones 3",
        "description" => "Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns after being dormant for millennia.",
        "video_url" => "https://www.example.com/game_of_thrones_3.mp4"
    ),
    array(
        "title" => "Stranger Things 3",
        "description" => "When a young boy disappears, his mother, a police chief, and his friends must confront terrifying supernatural forces in order to get him back.",
        "video_url" => "https://www.example.com/stranger_things_3.mp4"
    ),
    array(
        "title" => "Friends 3",
        "description" => "Follows the personal and professional lives of six twenty to thirty-something-year-old friends living in Manhattan.",
        "video_url" => "https://www.example.com/friends_3.mp4"
    )
    // Add more series
);
// Sample animation data
$animation = array(
    array(
        "title" => "Toy Story",
        "description" => "A cowboy doll is profoundly threatened and jealous when a new spaceman figure supplants him as top toy in a boy's room.",
        "video_url" => "https://www.example.com/toy_story.mp4"
    ),
    array(
        "title" => "Finding Nemo",
        "description" => "After his son is captured in the Great Barrier Reef and taken to Sydney, a timid clownfish sets out on a journey to bring him home.",
        "video_url" => "https://www.example.com/finding_nemo.mp4"
    ),
    array(
        "title" => "The Lion King",
        "description" => "Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself.",
        "video_url" => "https://www.example.com/the_lion_king.mp4"
    ),
    array(
        "title" => "Shrek",
        "description" => "A mean lord exiles fairytale creatures to the swamp of a grumpy ogre, who must go on a quest and rescue a princess for the lord in order to get his land back.",
        "video_url" => "https://www.example.com/shrek.mp4"
    ),
    array(
        "title" => "Toy Story 2",
        "description" => "When Woody is stolen by a toy collector, Buzz and his friends set out on a rescue mission to save Woody before he becomes a museum toy property with his roundup gang Jessie, Prospector, and Bullseye.",
        "video_url" => "https://www.example.com/toy_story_2.mp4"
    ),
    array(
        "title" => "Finding Dory",
        "description" => "Friendly but forgetful blue tang Dory begins a search for her long-lost parents, and everyone learns a few things about the real meaning of family along the way.",
        "video_url" => "https://www.example.com/finding_dory.mp4"
    ),
    array(
        "title" => "Toy Story 3",
        "description" => "The toys are mistakenly delivered to a daycare center instead of the attic right before Andy leaves for college, and it's up to Woody to convince the other toys that they weren't abandoned and to return home.",
        "video_url" => "https://www.example.com/toy_story_3.mp4"
    ),
    array(
        "title" => "The Incredibles",
        "description" => "A family of undercover superheroes, while trying to live the quiet suburban life, is forced into action to save the world.",
        "video_url" => "https://www.example.com/the_incredibles.mp4"
    ),
    array(
        "title" => "Frozen",
        "description" => "When the newly crowned Queen Elsa accidentally uses her power to turn things into ice to curse her home in infinite winter, her sister Anna teams up with a mountain man, his playful reindeer, and a snowman to change the weather condition.",
        "video_url" => "https://www.example.com/frozen.mp4"
    ),
    // Add more animation
);
// Filter movies based on search query
$search = isset($_GET['search']) ? strtolower($_GET['search']) : '';
$filtered_movies = array_filter($movies, function ($movie) use ($search) {
    return strpos(strtolower($movie['title']), $search) !== false ||
           strpos(strtolower($movie['description']), $search) !== false;
});
// Display filtered or all movies
$movies_to_display = $search ? $filtered_movies : $movies;
// Determine which category to display based on menu selection
$selectedCategory = isset($_GET['category']) ? $_GET['category'] : 'movies';
$selected_data = [];
switch ($selectedCategory) {
    case 'series':
        $selected_data = $series;
        break;
    case 'animation':
        $selected_data = $animation;
        break;
    default:
        $selected_data = $movies_to_display;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mini Netflix</title>
<style>
    /* Add your CSS styles here */
    body {
        font-family: Arial, sans-serif;
        background-color: #000;
        color: #fff;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #333;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    }
    h1 {
        color: #e50914;
        text-align: center;
    }
    .menu {
        margin-bottom: 20px;
        text-align: center;
    }
    .menu-item {
        display: inline-block;
        margin-right: 10px;
        cursor: pointer;
        color: #fff;
    }
    .movie-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }
    .movie {
        background-color: #555;
        padding: 20px;
        border-radius: 10px;
    }
    .user-info {
        text-align: right;
        margin-bottom: 10px;
    }
    .user-info img {
        vertical-align: middle;
        border-radius: 50%;
        margin-right: 5px;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Welcome to Mini Netflix!</h1>
    <div class="user-info">
        <img src="user_logo.jpg" alt="User Logo" width="30">
        <span>Welcome, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?>!</span>
    </div>
    <div class="menu">
        <span class="menu-item" onclick="showCategory('movies')">Movies</span>
        <span class="menu-item" onclick="showCategory('series')">Series</span>
        <span class="menu-item" onclick="showCategory('animation')">Animation</span>
        <button id="logoutButton">Logout</button>
    </div>
    <input type="text" id="searchBox" placeholder="Search Movies">
    <div class="movie-grid" id="contentGrid">
        <?php
        foreach ($selected_data as $item) {
            echo "<div class='movie'>";
            echo "<h2>{$item['title']}</h2>";
            echo "<p>{$item['description']}</p>";
            echo "<video width='100%' controls>";
            echo "<source src='{$item['video_url']}' type='video/mp4'>";
            echo "Your browser does not support the video tag.";
            echo "</video>";
            echo "</div>";
        }
        ?>
    </div>
</div>
<script>
    function showCategory(category) {
        let url = `?category=${category}`;
        if (category === 'movies' && document.getElementById('searchBox').value.trim() !== '') {
            url += `&search=${document.getElementById('searchBox').value.trim()}`;
        }
        window.location.href = url;
    }
    document.getElementById('searchBox').addEventListener('input', function() {
        let searchQuery = this.value.trim().toLowerCase();
        let url = `?category=<?php echo $selectedCategory; ?>&search=${searchQuery}`;
        window.location.href = url;
    });

    document.getElementById('logoutButton').addEventListener('click', function() {
        header('location:login.php');
    });
</script>
</body>
</html>
