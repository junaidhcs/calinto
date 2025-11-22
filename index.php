<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calinto - Coming Soon</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1e1e2f, #29294d);
            height: 100vh;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .container {
            text-align: center;
            animation: fadeIn 2s ease-in-out;
        }

        .logo {
            font-size: 45px;
            font-weight: 600;
            letter-spacing: 3px;
            margin-bottom: 10px;
            animation: slideDown 1.5s ease forwards;
        }

        .tagline {
            font-size: 18px;
            opacity: 0.8;
            animation: fadeIn 3s ease-in-out;
        }

        .coming {
            margin-top: 40px;
            font-size: 32px;
            font-weight: 600;
            animation: pulse 2s infinite;
        }

        .loading {
            margin-top: 25px;
        }

        .dots span {
            animation: blink 1.5s infinite;
        }

        .dots span:nth-child(2) {
            animation-delay: 0.3s;
        }

        .dots span:nth-child(3) {
            animation-delay: 0.6s;
        }

        /* Floating particle animation */
        .particle {
            position: absolute;
            width: 8px;
            height: 8px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: floatUp 6s infinite linear;
        }

        @keyframes floatUp {
            0% { transform: translateY(100vh) scale(0.5); opacity: 0; }
            50% { opacity: 1; }
            100% { transform: translateY(-10vh) scale(1); opacity: 0; }
        }

        @keyframes fadeIn {
            from { opacity: 0 }
            to { opacity: 1 }
        }

        @keyframes slideDown {
            from { transform: translateY(-40px); opacity: 0 }
            to { transform: translateY(0); opacity: 1 }
        }

        @keyframes blink {
            0% { opacity: 0 }
            100% { opacity: 1 }
        }

        @keyframes pulse {
            0%,100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
    </style>
</head>

<body>

    <!-- Animated Floating Particles -->
    <script>
        for (let i = 0; i < 40; i++) {
            let particle = document.createElement("div");
            particle.className = "particle";
            particle.style.left = Math.random() * 100 + "vw";
            particle.style.animationDelay = Math.random() * 5 + "s";
            particle.style.width = particle.style.height = (Math.random() * 8 + 4) + "px";
            document.body.appendChild(particle);
        }
    </script>

    <div class="container">
        <div class="logo">CALINTO</div>
        <div class="tagline">Empowering Digital Commerce</div>

        <div class="coming">Coming Soon</div>

        <div class="loading">
            <div class="dots">
                <span>.</span><span>.</span><span>.</span>
            </div>
        </div>
    </div>

</body>
</html>
