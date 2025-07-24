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
        <div class="contenido">
           <div class="seccion">
                <h2>꒰ My Childhood Memories ♡ ꒱</h2>
                <div class="tarjetas-contenedor">
                    <div class="tarjeta">
                        <img src="img/Cinderella dress.jpeg" alt="Cinderella Dress">
                        <p>My Cinderella dress.</p>
                    </div>
                    <div class="tarjeta">
                        <img src="img/Kindergarten Graduation.jpeg" alt="Kindergarten Graduation">
                        <p>My kindergarten "graduation".</p>
                    </div>
                    <div class="tarjeta">
                        <img src="img/When I turned ten.jpeg" alt="Turning Ten">
                        <p>When I turned ten...</p>
                    </div>
                </div>
            </div>

            <div class="seccion">
                <h2>Key Life Events</h2>
                <div class="tarjetas-contenedor">
                    <div class="tarjeta">
                        <img src="3knee.jpg" alt="Injured knee">
                        <p>Injured knee</p>
                    </div>
                    <div class="tarjeta">
                        <img src="8puppy.jpg" alt="First pet">
                        <p>My first pet</p>
                    </div>
                    <div class="tarjeta">
                        <img src="1bomb.jpg" alt="Scary rumor">
                        <p>Scary rumor</p>
                    </div>
                </div>
            </div>

            <div class="seccion">
                <h2>Activities and Hobbies</h2>
                <div class="tarjetas-contenedor">
                    <div class="tarjeta">
                        <img src="7poetry.jpg" alt="Writing Poetry">
                        <p>I love writing poetry and short stories.</p>
                    </div>
                    <div class="tarjeta">
                        <img src="2watchtv.jpg" alt="Watching TV">
                        <p>I enjoy watching horror and romantic shows.</p>
                    </div>
                    <div class="tarjeta">
                        <img src="gatoykenini.jpg" alt="With my kitty">
                        <p>I love spending time with my kitty.</p>
                    </div>
                </div>
            </div>

            <div class="seccion">
                <h2>My Future</h2>
                <div class="tarjetas-contenedor">
                    <div class="tarjeta">
                        <img src="4graduate.jpg" alt="Graduation">
                        <p>I'm going to finish my college degree and graduate.</p>
                    </div>
                    <div class="tarjeta">
                        <img src="5travel.jpg" alt="Get a job">
                        <p>I'm going to travel.</p>
                    </div>
                    <div class="tarjeta">
                        <img src="6married.jpg" alt="Family">
                        <p>Maybe in the future, I'll get married and start a family.</p>
                    </div>
                </div>
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