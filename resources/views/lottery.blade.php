@extends('layouts.app')

@section('content')



<div class="w-2/3 p-6 mt-20 rounded border-solid border-2 border-sky-500 mx-auto grid grid-cols-3 gap-3">

    <div class="border-solid border-2 border-fuchsia-800 p-2 col-span-3">
        <livewire:lottery.add />
    </div>

    <div class="border-solid border-2 border-fuchsia-800 p-2">
        <livewire:lottery.items-list />
    </div>
    <div class="border-solid border-2 border-fuchsia-800 p-2 col-span-2">
        <livewire:lottery.result />
    </div>

    <div id="particle-container"></div>
    <div id="flash-messages"></div>
    <audio id="countdown-sound">
        <source src="{{ asset('sounds/countdown.mp3') }}" type="audio/mpeg">
    </audio>

    <script>
        window.addEventListener('flash-message', function(event) {
            var particleSettings = {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 5,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": false,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": false,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            };

            var message = event.detail.message;
            var countdownDuration = event.detail.countdownDuration || 10;
            var soundUrl = event.detail.soundUrl || null;
            var flashMessages = document.getElementById('flash-messages');
            var messageBox = document.createElement('div');
            messageBox.classList.add('fixed', 'top-0', 'left-0', 'right-0', 'bottom-0', 'bg-gray-900', 'flex', 'justify-center', 'items-center', 'z-50');
            var messageNode = document.createElement('div');
            messageNode.classList.add('p-2', 'bg-green-500', 'text-white', 'mb-2', 'rounded', 'shadow');
            messageNode.innerText = message;
            // messageBox.appendChild(messageNode);
            flashMessages.appendChild(messageBox);
            var countdownNode = document.createElement('div');
            countdownNode.classList.add('text-white', 'text-lg', 'font-bold', 'mt-4');
            messageBox.appendChild(countdownNode);
            var countdownSound = document.getElementById('countdown-sound');
            if (soundUrl) {
                countdownSound.src = soundUrl;
            }
            countdownSound.play();
            var interval = setInterval(function() {
                countdownNode.innerText = 'Will see the result in ' + countdownDuration + ' seconds...';
                countdownDuration--;
                if (countdownDuration < 0) {
                    clearInterval(interval);
                    messageBox.removeChild(countdownNode);
                    messageBox.appendChild(messageNode);
                    setTimeout(function() {
                        flashMessages.removeChild(messageBox);
                        countdownSound.pause();
                    }, 2000);
                }
            }, 1000);
        });
    </script>


</div>


@endsection
