<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OSCAR'S OASIS</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    :root {
        --light-purple: #f8f3fd;
        --medium-purple: #33ff9c;
        --dark-purple: #33ffd4;
        --text-color: #ff3d3d;
        --white: #ffffff;
    }
    * {margin: 0; padding: 0; box-sizing: border-box;}
    body {font-family: 'Segoe UI', Tahoma, sans-serif; background: var(--light-purple); color: var(--text-color);}
    header {
        background: linear-gradient(135deg, var(--medium-purple), var(--dark-purple));
        color: var(--white); text-align: center; padding: 2rem 0;
    }
    h1 {font-size: 2.5rem;}
    .container {max-width: 1200px; margin: auto; padding: 0 1rem;}
    .nav-menu {display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; margin: 1.5rem 0;}
    .nav-btn {background: var(--dark-purple); color: var(--white); border: none; padding: .8rem 1.5rem; border-radius: 25px; cursor: pointer;}
    .nav-btn:hover {background: var(--medium-purple);}
    .section {display: none; padding: 2rem 0;}
    .section.active {display: block;}
    .section-title {text-align: center; font-size: 2rem; color: var(--dark-purple); margin-bottom: 2rem;}
    .cards-container {display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;}
    .event-card {
        background: var(--white); padding: 1rem; border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08); text-align: center;
    }
    .event-card img {width: 100%; height: 220px; object-fit: cover; border-radius: 8px; cursor: pointer;}
    .event-card h3 {color: var(--dark-purple); margin: .8rem 0;}
    /* Childhood adjustments */
    .single-photo img {
        display: block; margin: 0 auto; width: 60%; max-width: 500px;
        border-radius: 10px; cursor: pointer;
    }
    @media(max-width:768px){
        .single-photo img {width: 100%;}
    }
    /* Hover effect for captions */
    .img-container {position: relative;}
    .img-container::after {
        content: attr(data-caption);
        position: absolute; bottom: 0; left: 0; right: 0;
        background: rgba(75, 0, 130, 0.8); color: white;
        padding: 8px; font-size: 0.9rem;
        opacity: 0; transform: translateY(100%);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }
    .img-container:hover::after {opacity: 1; transform: translateY(0);}
    footer {text-align: center; padding: 1.5rem; background: linear-gradient(135deg, var(--medium-purple), var(--dark-purple)); color: white; margin-top: 2rem;}
    /* Lightbox */
    .lightbox {
        display: none; position: fixed; z-index: 1000; top: 0; left: 0; width: 100%; height: 100%;
        background: rgba(180,141,227,0.85); backdrop-filter: blur(6px);
        justify-content: center; align-items: center;
    }
    .lightbox-content {
        background: var(--white); padding: 15px; border-radius: 12px;
        max-width: 90%; max-height: 85%; text-align: center;
        box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    }
    .lightbox img {max-width: 100%; max-height: 70vh; border-radius: 8px;}
    .lightbox-caption {margin-top: 10px; font-size: 1.1rem; color: var(--text-color);}
    .close-btn {
        position: absolute; top: 15px; right: 20px;
        font-size: 2rem; color: var(--white); cursor: pointer;
    }
</style>
</head>
<body>
<header>
    <div class="container">
        <h1>Ixtepan Marcial</h1>
        <p>My Ordinary Life</p>
    </div>
</header>
<main class="container">
    <nav class="nav-menu">
        <button class="nav-btn" data-section="childhood">Childhood OwO</button>
        <button class="nav-btn" data-section="events">Key Events 7w7</button>
        <button class="nav-btn" data-section="hobbies">Hobbies UwU</button>
        <button class="nav-btn" data-section="future">My Future</button>
    </nav>

    <!-- Childhood -->
    <section id="childhood" class="section active">
        <h2 class="section-title">Childhood Stages</h2>
        <div class="single-photo img-container" data-caption="Exploring the world as a baby">
            <img src="karen-imagen/baby-karen.jpg" alt="Baby Karen">
        </div>
        <br>
        <div class="cards-container" style="grid-template-columns: repeat(4, 1fr);">
            <div class="event-card img-container" data-caption="Xcaret trip reward for outstanding grades">
                <img src="karen-imagen/xcaret-trip.jpg" alt="Xcaret">
            </div>
            <div class="event-card img-container" data-caption="Dancing at our school closing show">
                <img src="karen-imagen/school-dance.jpg" alt="Dance">
            </div>
            <div class="event-card img-container" data-caption="9th birthday with Tinker Bell cake">
                <img src="karen-imagen/tinkerbell-party.jpg" alt="Birthday">
            </div>
            <div class="event-card img-container" data-caption="Weekend adventures with my family">
                <img src="karen-imagen/family-weekend.jpg" alt="Family">
            </div>
        </div>
    </section>

    <!-- Key Life Events -->
    <section id="events" class="section">
        <h2 class="section-title">Key Life Events</h2>
        <div class="cards-container">
            <div class="event-card img-container" data-caption="First time riding a horse - scared at first but then enjoyed it a lot.">
                <img src="karen-imagen/first-horse.jpg" alt="Horse">
                <h3><i class="fas fa-horse"></i> First Horse Ride</h3>
                <p>First time riding a horse - scared at first but then enjoyed it a lot.</p>
            </div>
            <div class="event-card img-container" data-caption="Went to a hotel with my parents to celebrate my good grades.">
                <img src="karen-imagen/grades-hotel.jpg" alt="Hotel celebration">
                <h3><i class="fas fa-hotel"></i> Grades Celebration</h3>
                <p>Went to a hotel with my parents to celebrate my good grades.</p>
            </div>
            <div class="event-card img-container" data-caption="Passed the university entrance exam.">
                <img src="karen-imagen/university-exam.jpg" alt="University exam">
                <h3><i class="fas fa-graduation-cap"></i> University Entrance</h3>
                <p>Passed the university entrance exam.</p>
            </div>
        </div>
    </section>

    <!-- Activities & Hobbies -->
    <section id="hobbies" class="section">
        <h2 class="section-title">Activities & Hobbies</h2>
        <div class="cards-container">
            <div class="event-card img-container" data-caption="Listening to Music - Helps me relax and express my emotions">
                <img src="karen-imagen/hobby1.jpg" alt="Music">
                <h3><i class="fas fa-music"></i> Listening to Music</h3>
                <p>Helps me relax and express my emotions.</p>
            </div>
            <div class="event-card img-container" data-caption="Watching Movies - I really enjoy romantic comedies">
                <img src="karen-imagen/hobby2.jpg" alt="Movies">
                <h3><i class="fas fa-film"></i> Watching Movies</h3>
                <p>I really enjoy romantic comedies.</p>
            </div>
            <div class="event-card img-container" data-caption="Video Games - Playing video games with my boyfriend is one of my favorite activities">
                <img src="karen-imagen/hobby3.jpg" alt="Video games" style="height:280px; object-fit:cover;">
                <h3><i class="fas fa-gamepad"></i> Video Games</h3>
                <p>Playing video games with my boyfriend is one of my favorite activities.</p>
            </div>
        </div>
    </section>

    <!-- My Future Plans -->
    <section id="future" class="section">
        <h2 class="section-title">My Future Plans</h2>
        <div class="cards-container">
            <div class="event-card">
                <h3><i class="fas fa-graduation-cap"></i> Education</h3>
                <img src="karen-imagen/education.jpg" alt="Education">
                <p>I'm going to finish my studies and get my degree soon.</p>
            </div>
            <div class="event-card">
                <h3><i class="fas fa-briefcase"></i> Career</h3>
                <img src="karen-imagen/tech company.jpg" alt="Career">
                <p>I'm going to look for a job in a tech company.</p>
            </div>
            <div class="event-card">
                <h3><i class="fas fa-heart"></i> Family</h3>
                <img src="karen-imagen/marry.jpg" alt="Family">
                <p>I'm going to marry and have a lovely family.</p>
            </div>
            <div class="event-card">
                <h3><i class="fas fa-plane"></i> Travel</h3>
                <img src="karen-imagen/travel.jpg" alt="Travel">
                <p>I'm going to travel and explore different cultures.</p>
            </div>
        </div>
    </section>
</main>

<footer><p>© 2025 Karen Abigail Kantún Gómez - All Rights Reserved</p></footer>

<!-- Lightbox -->
<div class="lightbox">
    <span class="close-btn">&times;</span>
    <div class="lightbox-content">
        <img src="" alt="">
        <div class="lightbox-caption"></div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const navButtons = document.querySelectorAll('.nav-btn');
    const sections = document.querySelectorAll('.section');
    navButtons.forEach(btn => btn.addEventListener('click', function(){
        sections.forEach(s => s.classList.remove('active'));
        document.getElementById(this.dataset.section).classList.add('active');
    }));

    const lightbox = document.querySelector('.lightbox');
    const lightboxImg = document.querySelector('.lightbox img');
    const lightboxCaption = document.querySelector('.lightbox-caption');
    const closeBtn = document.querySelector('.close-btn');

    document.querySelectorAll('.img-container').forEach(item => {
        item.addEventListener('click', () => {
            lightboxImg.src = item.querySelector('img').src;
            lightboxCaption.textContent = item.dataset.caption;
            lightbox.style.display = 'flex';
        });
    });

    closeBtn.addEventListener('click', ()=> lightbox.style.display = 'none');
    lightbox.addEventListener('click', e => { if(e.target===lightbox){lightbox.style.display='none';}});
});
</script>
</body>
</html>
