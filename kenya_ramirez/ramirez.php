<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenya - My Childhood</title>
    <link rel="stylesheet" href="ramirez.css">
</head>
<body>
    <header>
        <h1>Kenya Fernanda Ramirez Perez</h1>
        <h3>Hi everyone, I'm Kenya :3</h3>
    </header>

    <main>
        <section class="contenido">
           <div class="seccion">
    <h2>꒰ My Childhood Memories ♡ ꒱</h2>
</div>
        <div class="seccion">
            <p>My Cinderella dress.</p>
        </div>

        <div class="seccion">
            <p>My kindergarten "graduation".</p>
        </div>

        <div class="seccion">
            <p>When I turned ten...</p>
        </div>

            <div class="seccion">
                <h2>Key Life Events</h2>
                <p>One time in gym class, I fell while running and scraped my knee really bad. I wanted to cry, but I didn't. I was too embarrassed.</p>
                <p>My first pet was a super cute puppy my brother adopted. I loved her so much and felt really happy to have a dog.</p>
                <p>In elementary school, there was a scary rumor about a bomb at school. Everyone was crying, even my little brother, but I ignored him so I wouldn't get scared too.</p>
            </div>

            <div class="seccion">
                <h2>Activities and Hobbies</h2>
                <p>My biggest hobby is writing poetic prose. I love writing poetry... I find any little detail and turn it into a sentimental piece, especially about a person who is very special to me.</p>
                <p>I really enjoy watching horror series and movies, though I also like romantic comedies.</p>
                <p>I love spending time with my kitty.</p>
            </div>

            <div class="seccion">
                <h2>My Future</h2>
                <p>I'm going to finish my college degree and graduate.</p>
                <p>I'm going to get a job after that.</p>
                <p>One day, I'm going to buy a house.</p>
                <p>I'm going to travel to many countries.</p>
                <p>Maybe in the future, I'm going to get married and start a family.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Kenya Fernanda. Todos los derechos reservados.</p>
    </footer>
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const emojis = ["💖", "✨", "🌸", "🍬", "🌼", "🌷"];
        setInterval(() => {
            const emoji = document.createElement("div");
            emoji.textContent = emojis[Math.floor(Math.random() * emojis.length)];
            emoji.style.position = "fixed";
            emoji.style.left = Math.random() * 100 + "vw";
            emoji.style.top = "100vh";
            emoji.style.fontSize = "22px";
            emoji.style.opacity = "0.9";
            emoji.style.zIndex = "10";
            emoji.style.pointerEvents = "none";
            emoji.style.animation = "floatUp 6s ease-in forwards";
            document.body.appendChild(emoji);
            setTimeout(() => emoji.remove(), 6000);
        }, 800); // cada 0.8 segundos
    });
</script>

<style>
@keyframes floatUp {
    0% {
        transform: translateY(0);
        opacity: 1;
    }
    100% {
        transform: translateY(-100vh) rotate(360deg);
        opacity: 0;
    }
}
</style>
</body>
</html>