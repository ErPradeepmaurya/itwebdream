    @extends('layouts.app')

    @section('title', 'Coming Soon | IT Web Dream')

    @section('content')

        <style>
            .coming-soon-container {
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                text-align: center;
                color: blue
            }

            .typing-text {
                border-right: 2px solid white;
                white-space: nowrap;
                overflow: hidden;
                width: 0;
                animation: typing 4s steps(40, end) forwards, blink 0.75s step-end infinite;
            }

            @keyframes typing {
                from {
                    width: 0;
                }

                to {
                    width: 100%;
                }
            }

            @keyframes blink {
                50% {
                    border-color: transparent;
                }
            }

            .sub-text {
                opacity: 0;
                animation: fadeIn 2s ease 4s forwards;
            }

            @keyframes fadeIn {
                to {
                    opacity: 1;
                }
            }

            .countdown {
                font-size: 1.5rem;
                margin-top: 2rem;
            }
        </style>

        <div
            class="coming-soon-container container mt-5 pt-5 d-flex flex-column justify-content-center align-items-center text-center">
            <h1 class="typing-text display-4 fw-bold mt-5">We are launching soon!</h1>
            <p class="lead sub-text mt-3">IT Web Dream is working on something amazing.</p>

            <!-- Optional countdown timer -->
            <div id="countdown" class="countdown sub-text"></div>
        </div>

        <!-- Optional: Countdown Timer Script -->
        <script>
            // Set your launch date here
            const launchDate = new Date("2025-09-01T00:00:00").getTime();

            const countdownElement = document.getElementById("countdown");

            const interval = setInterval(() => {
                const now = new Date().getTime();
                const distance = launchDate - now;

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                countdownElement.innerHTML = `Launching in ${days}d ${hours}h ${minutes}m ${seconds}s`;

                if (distance < 0) {
                    clearInterval(interval);
                    countdownElement.innerHTML = "We have launched!";
                }
            }, 1000);
        </script>
    @endsection
