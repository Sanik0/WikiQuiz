<!doctype html>
<html>

<head>
    <title>WikiQuiz</title>
    <meta charset="utf-8" />
    <link rel="icon" href="/svg/logo.svg" type="image/svg+xml">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body>

    {{-- Navbar --}}
    <nav class="bg-white border-b border-gray-200 px-6 py-3 flex items-center justify-between">
        <a href="/" class="flex items-center gap-2">
            <svg fill="#45556C" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" viewBox="0 0 137.177 137.177" xml:space="preserve">

                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                <g id="SVGRepo_iconCarrier">
                    <g>
                        <g>
                            <path d="M100.088,74.921c0.322-16.108-0.604-33.033-2.795-44.404c-2.059-2.195-4.434-4.165-7.088-5.782 c2.813,13.159,3.738,39.516,2.765,61.354C94.607,82.995,97.414,79.391,100.088,74.921z" />
                            <path d="M101.33,35.646c1.498,9.149,2.247,20.715,2.277,32.336c1.905-4.6,3.27-9.962,3.245-16.398 C106.834,46.979,104.904,41.078,101.33,35.646z" />
                            <path d="M105.379,117.07c0.183-0.28,0.359-0.56,0.536-0.876c-0.499-0.439-1.145-1.035-1.912-1.778 c-0.536,1.035-1.108,1.899-1.717,2.654H105.379L105.379,117.07z" />
                            <path d="M79.227,20.752c2.295,17.902,2.271,79.245-0.067,96.331h6.406c4.329-16.069,4.523-74.65,0.56-94.392 C83.97,21.788,81.668,21.111,79.227,20.752z" />
                            <path d="M99.667,109.685c-0.828,3.087-1.771,5.607-2.861,7.386h3.684c0.792-1.047,1.528-2.374,2.211-3.97 C101.75,112.114,100.715,110.97,99.667,109.685z" />
                            <path d="M97.329,106.622c-2.106-3.002-3.982-6.479-4.993-10.176c-0.73,8.945-1.826,16.387-3.324,20.637h5.176 C95.43,114.671,96.489,111.091,97.329,106.622z" />
                            <path d="M58.069,117.07h6.396c-2.35-17.22-2.356-79.463,0-96.763c-2.368,0.22-4.6,0.612-6.695,1.16 c-3.374,14.678-3.992,56.291-1.86,80.91c1.194-0.214,2.253-0.396,2.868-0.512c2.171,5.108,0.576,8.945-1.513,11.49 C57.515,114.769,57.783,116.011,58.069,117.07z" />
                            <path d="M54.315,116.097c-0.91,0.657-1.565,0.986-1.565,0.986h1.857C54.51,116.778,54.422,116.419,54.315,116.097z" />
                            <path d="M47.228,26.537c-4.46,17.598-4.938,55.29-1.428,77.174c0.466,0.013,0.904,0.122,1.382,0.049 c1.51-0.194,3.148-0.45,4.752-0.719c-2.725-23.784-2.083-64.643,1.939-80.294C51.405,23.745,49.146,24.966,47.228,26.537z" />
                            <path d="M30.315,75.609c0.021,0.651,0.04,1.315,0.07,1.967c0.618,0.64,1.647,1.163,2.707,1.571 c-0.143-3.117-0.231-6.284-0.244-9.475c-1.078,1.936-2.003,3.738-2.527,5.108C30.315,75.062,30.315,75.335,30.315,75.609z" />
                            <path d="M68.415,20.104c-1.1,17.142-1.105,79.528-0.006,96.967h6.828c1.084-17.354,1.084-79.247,0-96.729 C72.875,20.146,70.586,20.064,68.415,20.104z" />
                            <path d="M41.702,33.26c-5.812,10.948-6.253,20.557-5.812,22.347c0.451,1.791,2.351,5.14,2.351,5.14s-1.453,2.244-3.148,5.054 c-0.055,4.713,0.024,9.463,0.25,14.078c0.703,0.189,1.215,0.293,1.215,0.293s0.551,1.559-0.573,4.572 c-1.117,3.021,2.083,6.521,3.036,7.746c0.956,1.211-1.333,5.023-0.561,7.143c0.469,1.278,2.04,2.617,4.071,3.445 c-3.547-20.148-3.346-53.331,0.612-71.977C42.661,31.807,42.119,32.474,41.702,33.26z" />
                            <path d="M68.589,130.941c-34.383,0-62.354-27.974-62.354-62.353c0-34.383,27.971-62.353,62.354-62.353 c0.998,0,1.984,0.024,2.971,0.067l0.293-6.226C70.769,0.025,69.679,0,68.589,0C30.771,0,0,30.772,0,68.589 c0,37.813,30.771,68.588,68.589,68.588c1.09,0,2.18-0.024,3.264-0.072l-0.293-6.229C70.573,130.917,69.587,130.941,68.589,130.941 z" />
                            <path d="M77.667,130.284l0.896,6.168c2.241-0.322,4.445-0.761,6.619-1.297l-1.511-6.053 C81.704,129.596,79.701,129.991,77.667,130.284z" />
                            <path d="M85.278,2.053c-2.161-0.542-4.365-0.98-6.606-1.31l-0.913,6.166c2.033,0.301,4.037,0.691,6.004,1.184L85.278,2.053z" />
                            <path d="M119.433,22.555c-1.51-1.665-3.1-3.258-4.762-4.765l-4.189,4.612c1.511,1.373,2.96,2.819,4.33,4.336L119.433,22.555z" />
                            <path d="M97.944,6.586c-2.021-0.956-4.098-1.814-6.217-2.582L89.62,9.871c1.925,0.691,3.812,1.477,5.651,2.344L97.944,6.586z" />
                            <path d="M130.284,59.479l6.162-0.91c-0.329-2.238-0.768-4.439-1.297-6.604l-6.053,1.498 C129.583,55.439,129.979,57.439,130.284,59.479z" />
                            <path d="M127.324,47.621l5.87-2.104c-0.768-2.119-1.62-4.201-2.576-6.223l-5.638,2.67 C125.851,43.797,126.643,45.688,127.324,47.621z" />
                            <path d="M122.1,36.566l5.347-3.212c-1.163-1.933-2.411-3.796-3.751-5.599l-5.005,3.721C119.908,33.11,121.047,34.812,122.1,36.566 z" />
                            <path d="M137.092,65.271l-6.224,0.307c0.049,1.001,0.073,2,0.073,3.011c0,1.041-0.024,2.082-0.073,3.117l6.224,0.299 c0.061-1.133,0.085-2.271,0.085-3.416C137.177,67.48,137.152,66.375,137.092,65.271z" />
                            <path d="M89.522,127.337l2.095,5.87c2.126-0.761,4.202-1.62,6.224-2.576l-2.655-5.638 C93.347,125.876,91.453,126.655,89.522,127.337z" />
                            <path d="M129.078,83.8l6.047,1.51c0.542-2.162,0.986-4.372,1.309-6.606l-6.162-0.907C129.967,79.829,129.565,81.833,129.078,83.8z " />
                            <path d="M124.943,95.302l5.633,2.68c0.962-2.016,1.814-4.099,2.582-6.224l-5.864-2.106 C126.605,91.581,125.814,93.469,124.943,95.302z" />
                            <path d="M100.666,15.107c1.754,1.054,3.452,2.195,5.085,3.41l3.72-5.005c-1.802-1.334-3.665-2.588-5.59-3.748L100.666,15.107z" />
                            <path d="M100.581,122.118l3.215,5.341c1.924-1.157,3.794-2.399,5.59-3.739l-3.708-5.012 C104.039,119.933,102.341,121.071,100.581,122.118z" />
                            <path d="M110.415,114.836l4.189,4.622c1.662-1.511,3.258-3.1,4.768-4.762l-4.615-4.189 C113.38,112.017,111.931,113.466,110.415,114.836z" />
                            <path d="M118.642,105.775l4.999,3.732c1.34-1.802,2.594-3.665,3.757-5.596l-5.347-3.209 C120.991,102.456,119.859,104.144,118.642,105.775z" />
                        </g>
                    </g>
                </g>

            </svg>
            <span class="self-center text-xl text-slate-600 font-semibold whitespace-nowrap">WikiQuiz</span>
        </a>
        <p class="text-md w-fit text-center md:block hidden font-medium text-gray-700" id="quiz-title">{{ urldecode($title) }} - Quiz</p>
        <button onclick="exitQuiz()" class="text-white bg-slate-700 hover:bg-slate-800 text-sm font-medium px-4 py-2 rounded-lg">
            Exit Quiz
        </button>
    </nav>

    <p class="text-md w-full text-center mt-10 block md:hidden font-medium text-gray-700" id="quiz-title">{{ urldecode($title) }} - Quiz</p>

    {{-- Question Count Selector --}}
    <div id="setup-screen" class="max-w-md mx-auto px-4 mt-20 text-center">
        <h2 class="text-xl font-semibold text-gray-900 mb-2">How many questions?</h2>
        <p class="text-sm text-gray-500 mb-8">Choose how long you want your quiz to be.</p>

        <div class="grid grid-cols-5 gap-3 mb-8">
            @foreach([10, 15, 20, 30, 50] as $count)
            <button onclick="selectCount(this, {{ $count }})"
                class="count-btn py-3 text-sm font-medium border border-gray-200 rounded-xl text-gray-600 hover:border-slate-600 hover:text-slate-700 hover:bg-slate-50 transition-all">
                {{ $count }}
            </button>
            @endforeach
        </div>

        <button onclick="beginQuiz()" id="begin-btn" class="w-full bg-slate-700 hover:bg-slate-800 text-white text-sm font-medium px-6 py-3 rounded-xl transition-all opacity-50 cursor-not-allowed" disabled>
            Start Quiz →
        </button>
    </div>

    {{-- Loading State --}}
    <div id="loading" class="hidden flex flex-col items-center justify-center min-h-[60vh] gap-4">
        <svg class="animate-spin w-8 h-8 text-slate-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 12a9 9 0 1 1-6.219-8.56" />
        </svg>
        <p class="text-sm text-gray-500">Generating your quiz...</p>
    </div>

    {{-- Quiz --}}
    <div id="quiz-container" class="hidden max-w-2xl mx-auto px-4 mt-8">

        {{-- Progress --}}
        <div class="flex items-center gap-3 mb-8">
            <span class="text-xs text-gray-400" id="progress-current">1</span>
            <div class="flex-1 bg-gray-200 rounded-full h-1.5">
                <div class="bg-slate-700 h-1.5 rounded-full transition-all duration-300" id="progress-bar" style="width: 10%"></div>
            </div>
            <span class="text-xs text-gray-400" id="progress-total">10</span>
        </div>

        {{-- Question Card --}}
        <div class="bg-white border border-gray-200 rounded-2xl p-8">
            <p class="text-sm text-gray-700 leading-relaxed mb-8" id="question-text"></p>
            <p class="text-xs text-gray-400 uppercase tracking-wide mb-3">Choose Answer</p>
            <div class="flex flex-col gap-3" id="choices"></div>
            <div class="mt-8 flex justify-end">
                <button onclick="nextQuestion()" id="next-btn" class="bg-slate-700 hover:bg-slate-800 text-white text-sm font-medium px-6 py-2.5 rounded-lg transition-all opacity-50 cursor-not-allowed" disabled>
                    Next →
                </button>
            </div>
        </div>

        <p class="text-center text-xs text-gray-400 mt-4" id="question-counter">Question 1 of 10</p>
    </div>

    {{-- Results Modal --}}
    <div id="results-modal" class="hidden fixed inset-0 bg-black/40 flex items-center justify-center z-50 px-4">
        <div class="bg-white rounded-2xl w-full max-w-md overflow-hidden">
            <div class="p-6 border-b border-gray-100 flex items-center justify-between">
                <div>
                    <p class="text-xs text-gray-400">Quiz completed</p>
                    <h2 class="text-base font-semibold text-gray-900" id="result-title"></h2>
                </div>
            </div>
            <div class="p-6 text-center border-b border-gray-100">
                <p class="text-3xl font-semibold text-gray-900" id="result-score"></p>
                <p class="text-sm text-gray-500 mt-1" id="result-sub"></p>
            </div>
            <div class="grid grid-cols-2 gap-3 p-6 border-b border-gray-100">
                <div class="bg-gray-50 rounded-xl p-4">
                    <p class="text-xs text-gray-400 mb-1">Correct</p>
                    <p class="text-xl font-semibold text-green-600" id="result-correct"></p>
                </div>
                <div class="bg-gray-50 rounded-xl p-4">
                    <p class="text-xs text-gray-400 mb-1">Incorrect</p>
                    <p class="text-xl font-semibold text-red-500" id="result-incorrect"></p>
                </div>
            </div>
            <div class="flex items-center justify-end gap-3 p-4">
                <button onclick="retakeQuiz()" class="flex items-center gap-2 px-4 py-2 text-sm border border-gray-200 rounded-lg hover:bg-gray-50">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M1 4v6h6M23 20v-6h-6" />
                        <path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15" />
                    </svg>
                    Retake
                </button>
                <button onclick="exitQuiz()" class="bg-slate-700 hover:bg-slate-800 text-white text-sm font-medium px-4 py-2 rounded-lg">Exit Quiz</button>
            </div>
        </div>
    </div>

    <script>
        const title = "{{ $title }}";
        let questions = [];
        let current = 0;
        let score = 0;
        let selected = null;
        let questionCount = null;

        function selectCount(el, count) {
            document.querySelectorAll('.count-btn').forEach(btn => {
                btn.classList.remove('bg-slate-700', 'text-white', 'border-slate-700');
                btn.classList.add('border-gray-200', 'text-gray-600');
            });
            el.classList.add('bg-slate-700', 'text-white', 'border-slate-700');
            el.classList.remove('border-gray-200', 'text-gray-600');
            questionCount = count;
            const beginBtn = document.getElementById('begin-btn');
            beginBtn.disabled = false;
            beginBtn.classList.remove('opacity-50', 'cursor-not-allowed');
        }

        function beginQuiz() {
            if (!questionCount) return;
            document.getElementById('setup-screen').classList.add('hidden');
            document.getElementById('loading').classList.remove('hidden');
            fetchAndGenerateQuiz();
        }

        async function fetchAndGenerateQuiz() {
            try {
                const formattedTitle = title.replace(/\+/g, '_').replace(/ /g, '_');
                const res = await fetch(`https://en.wikipedia.org/w/api.php?action=query&titles=${formattedTitle}&prop=extracts&explaintext=true&format=json&origin=*`);
                const data = await res.json();
                const pages = data.query.pages;
                const page = pages[Object.keys(pages)[0]];
                const text = page.extract;

                questions = generateQuestions(text, questionCount);

                if (questions.length < 5) {
                    document.getElementById('loading').innerHTML = '<p class="text-sm text-red-500 text-center mt-20">Not enough content to generate a quiz for this article. Try a longer article.</p>';
                    return;
                }

                document.getElementById('loading').classList.add('hidden');
                document.getElementById('quiz-container').classList.remove('hidden');
                document.getElementById('progress-total').textContent = questions.length;
                document.getElementById('result-title').textContent = decodeURIComponent(title).replace(/_/g, ' ').replace(/\+/g, ' ');
                renderQuestion();

            } catch (err) {
                console.error('Error:', err);
                document.getElementById('loading').innerHTML = '<p class="text-sm text-red-500 text-center mt-20">Failed to load article. Please go back and try again.</p>';
            }
        }

        function extractKeywords(text) {
            const years = [...new Set(text.match(/\b(1[0-9]{3}|20[0-9]{2})\b/g) || [])];

            const properNouns = [...new Set(
                (text.match(/\b[A-Z][a-z]+(?:\s[A-Z][a-z]+)+\b/g) || [])
                .filter(n => n.split(' ').length >= 2)
            )];

            const nouns = [...new Set(
                (text.match(/(?<=[a-z,;]\s)[A-Z][a-z]{3,}\b/g) || [])
            )];

            const numbers = [...new Set(
                (text.match(/\b\d+(?:,\d+)?(?:\.\d+)?\b/g) || [])
            )];

            // Countries and places
            const places = [...new Set(
                (text.match(/\b(?:in|at|from|near|to|of)\s([A-Z][a-z]+(?:\s[A-Z][a-z]+)*)\b/g) || [])
                .map(p => p.replace(/^(?:in|at|from|near|to|of)\s/, ''))
                .filter(p => p.length > 2)
            )];

            // Ages and durations
            const ages = [...new Set(
                (text.match(/\b(\d+)\s*(?:years?|months?|days?|weeks?|hours?|decades?)\b/g) || [])
            )];

            // Percentages
            const percentages = [...new Set(
                (text.match(/\b\d+(?:\.\d+)?%/g) || [])
            )];

            // Currencies
            const currencies = [...new Set(
                (text.match(/(?:\$|£|€)\s*\d+(?:[.,]\d+)*(?:\s*(?:million|billion|thousand))?/g) || [])
            )];

            // Ordinals — "first", "second", "third" etc
            const ordinals = [...new Set(
                (text.match(/\b(?:first|second|third|fourth|fifth|sixth|seventh|eighth|ninth|tenth)\b/gi) || [])
                .map(o => o.toLowerCase())
            )];

            // Roles and titles — "President", "Director", "CEO"
            const roles = [...new Set(
                (text.match(/\b(?:President|Prime Minister|Director|Secretary|General|Admiral|Captain|Governor|Senator|Minister|Chairman|CEO|CTO|Professor|Doctor|Mayor|Ambassador|Commander)\b/g) || [])
            )];

            return {
                years,
                properNouns,
                nouns,
                numbers,
                places,
                ages,
                percentages,
                currencies,
                ordinals,
                roles
            };
        }

        function generateQuestions(text, limit) {
            const sentences = text
                .replace(/\n+/g, ' ')
                .split(/(?<=[.?!])\s+/)
                .filter(s => s.length > 80 && s.length < 350)
                .filter(s => !/\[|\]|{|}|=|<|>/.test(s))
                .filter(s => !/^See also|^References|^Notes|^External|^Further/.test(s));

            const allWords = extractKeywords(text);
            const usedAnswers = new Set();
            const qs = [];

            for (const sentence of sentences) {
                if (qs.length >= limit) break;
                const question = tryBuildQuestion(sentence, allWords, usedAnswers);
                if (question) {
                    qs.push(question);
                    usedAnswers.add(question.answer);
                }
            }

            return qs;
        }

        function tryBuildQuestion(sentence, allWords, usedAnswers) {
            const patterns = [
                // Years
                {
                    regex: /\b(1[0-9]{3}|20[0-9]{2})\b/g,
                    type: 'year'
                },

                // Full proper noun phrases (multi-word names)
                {
                    regex: /\b([A-Z][a-z]+(?:\s[A-Z][a-z]+){1,3})\b/g,
                    type: 'proper_noun'
                },

                // Place after preposition — "born in Germany", "located in New York"
                {
                    regex: /\b(?:in|at|from|near|to|of)\s([A-Z][a-z]+(?:\s[A-Z][a-z]+)*)\b/g,
                    type: 'place'
                },

                // Age / duration — "for 12 years", "after 3 months"
                {
                    regex: /\b(\d+)\s*(years?|months?|days?|weeks?|decades?)\b/g,
                    type: 'age'
                },

                // Percentages
                {
                    regex: /\b(\d+(?:\.\d+)?%)/g,
                    type: 'percentage'
                },

                // Currency amounts
                {
                    regex: /(?:\$|£|€)\s*\d+(?:[.,]\d+)*(?:\s*(?:million|billion|thousand))?/g,
                    type: 'currency'
                },

                // Ordinal positions
                {
                    regex: /\b(first|second|third|fourth|fifth|sixth|seventh|eighth|ninth|tenth)\b/gi,
                    type: 'ordinal'
                },

                // Roles and titles
                {
                    regex: /\b(President|Prime Minister|Director|Secretary|General|Admiral|Captain|Governor|Senator|Minister|Chairman|CEO|Professor|Doctor|Mayor)\b/g,
                    type: 'role'
                },

                // Single capitalized nouns (not sentence start)
                {
                    regex: /(?<=[a-z,;]\s)([A-Z][a-z]{3,})\b/g,
                    type: 'noun'
                },

                // Plain numbers
                {
                    regex: /\b(\d+(?:,\d+)?(?:\.\d+)?)\b/g,
                    type: 'number'
                },
            ];

            // Shuffle patterns so question types are varied
            const shuffled = patterns.sort(() => Math.random() - 0.5);

            for (const pattern of shuffled) {
                const matches = [...sentence.matchAll(pattern.regex)];
                if (matches.length === 0) continue;

                const match = matches[Math.floor(Math.random() * matches.length)];
                const answer = match[0].trim();

                if (usedAnswers.has(answer)) continue;
                if (answer.length < 2) continue;
                if (/^(the|a|an|and|or|of|in|at|to|for|is|was|are|were|it|he|she|they)$/i.test(answer)) continue;

                const distractors = getDistractors(answer, pattern.type, allWords);
                if (distractors.length < 3) continue;

                const blanked = sentence.replace(answer, '________');
                const choices = [...distractors.slice(0, 3), answer].sort(() => Math.random() - 0.5);

                return {
                    question: blanked,
                    answer,
                    choices,
                    type: pattern.type
                };
            }

            return null;
        }

        function getDistractors(answer, type, allWords) {
            const {
                years,
                properNouns,
                nouns,
                numbers,
                places,
                ages,
                percentages,
                currencies,
                ordinals,
                roles
            } = allWords;
            let pool = [];

            if (type === 'year') {
                const answerYear = parseInt(answer);

                // First try real years from the article that are close
                pool = years
                    .filter(y => y !== answer)
                    .sort((a, b) => Math.abs(parseInt(a) - answerYear) - Math.abs(parseInt(b) - answerYear))
                    .slice(0, 8);

                // Always pad with nearby realistic years regardless
                const offsets = [-1, 1, -2, 2, -3, 3, -5, 5, -7, 7, -10, 10];
                for (const offset of offsets) {
                    const fake = String(answerYear + offset);
                    if (!pool.includes(fake) && fake !== answer) {
                        pool.push(fake);
                    }
                    if (pool.length >= 8) break;
                }
            } else if (type === 'proper_noun') {
                const wordCount = answer.split(' ').length;
                pool = properNouns
                    .filter(n => n !== answer && n.split(' ').length === wordCount)
                    .concat(properNouns.filter(n => n !== answer && n.split(' ').length !== wordCount));

            } else if (type === 'place') {
                pool = places
                    .filter(p => p !== answer)
                    .concat(properNouns.filter(n => n !== answer));

            } else if (type === 'age') {
                const num = parseInt(answer);
                const unit = answer.replace(/\d+\s*/, '');
                const offsets = [2, 5, 10, 15, 20, -2, -5, -10];
                pool = offsets
                    .map(o => `${Math.abs(num + o)} ${unit}`)
                    .filter(a => a !== answer);

            } else if (type === 'percentage') {
                const num = parseFloat(answer);
                pool = [
                    `${Math.round(num * 0.5)}%`,
                    `${Math.round(num * 1.5)}%`,
                    `${Math.round(num * 2)}%`,
                    `${Math.round(num + 10)}%`,
                    `${Math.round(num - 10)}%`,
                ].filter(p => p !== answer && parseFloat(p) >= 0);

            } else if (type === 'currency') {
                const symbol = answer.match(/\$|£|€/)?.[0] || '$';
                const num = parseFloat(answer.replace(/[^0-9.]/g, ''));
                const suffix = answer.match(/million|billion|thousand/)?.[0] || '';
                pool = [
                    `${symbol}${Math.round(num * 0.5)}${suffix ? ' ' + suffix : ''}`,
                    `${symbol}${Math.round(num * 2)}${suffix ? ' ' + suffix : ''}`,
                    `${symbol}${Math.round(num * 1.5)}${suffix ? ' ' + suffix : ''}`,
                    `${symbol}${Math.round(num * 3)}${suffix ? ' ' + suffix : ''}`,
                ].filter(c => c !== answer);

            } else if (type === 'ordinal') {
                const allOrdinals = ['first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 'tenth'];
                pool = allOrdinals.filter(o => o !== answer.toLowerCase());

            } else if (type === 'role') {
                const allRoles = ['President', 'Prime Minister', 'Director', 'Secretary', 'General', 'Admiral', 'Governor', 'Senator', 'Chairman', 'CEO', 'Professor', 'Doctor', 'Mayor', 'Ambassador'];
                pool = allRoles.filter(r => r !== answer);

            } else if (type === 'number') {
                const num = parseFloat(answer.replace(/,/g, ''));
                pool = [
                    String(Math.round(num * 0.5)),
                    String(Math.round(num * 1.5)),
                    String(Math.round(num * 2)),
                    String(Math.round(num * 0.25)),
                    String(Math.round(num + num * 0.1)),
                ].filter(n => n !== answer);

            } else {
                const answerLen = answer.length;
                pool = nouns
                    .filter(n => n !== answer)
                    .sort((a, b) => Math.abs(a.length - answerLen) - Math.abs(b.length - answerLen))
                    .slice(0, 10);
            }

            return pool.sort(() => Math.random() - 0.5).slice(0, 3);
        }
        1

        function renderQuestion() {
            const q = questions[current];
            const total = questions.length;

            document.getElementById('question-text').textContent = q.question;
            document.getElementById('progress-current').textContent = current + 1;
            document.getElementById('progress-bar').style.width = ((current + 1) / total * 100) + '%';
            document.getElementById('question-counter').textContent = `Question ${current + 1} of ${total}`;

            const choicesEl = document.getElementById('choices');
            choicesEl.innerHTML = '';

            q.choices.forEach(choice => {
                const btn = document.createElement('button');
                btn.textContent = choice;
                btn.className = 'w-full text-left px-4 py-3 text-sm text-gray-700 border border-gray-200 rounded-xl hover:border-slate-400 hover:bg-slate-50 transition-all';
                btn.onclick = () => selectAnswer(btn, choice);
                choicesEl.appendChild(btn);
            });

            selected = null;
            const nextBtn = document.getElementById('next-btn');
            nextBtn.disabled = true;
            nextBtn.classList.add('opacity-50', 'cursor-not-allowed');
        }

        function selectAnswer(el, choice) {
            document.querySelectorAll('#choices button').forEach(btn => {
                btn.disabled = true;
                btn.onclick = null;
                // remove hover classes so they dont interfere with the color feedback
                btn.classList.remove('hover:border-slate-400', 'hover:bg-slate-50');
            });

            const correct = questions[current].answer;
            const isCorrect = choice === correct;

            if (isCorrect) {
                score++;
                el.classList.remove('border-gray-200', 'text-gray-700');
                el.classList.add('border-green-500', 'bg-green-50', 'text-green-700', 'font-medium');
            } else {
                el.classList.remove('border-gray-200', 'text-gray-700');
                el.classList.add('border-red-400', 'bg-red-50', 'text-red-600', 'font-medium');

                document.querySelectorAll('#choices button').forEach(btn => {
                    if (btn.textContent.trim() === correct) {
                        btn.classList.remove('border-gray-200', 'text-gray-700');
                        btn.classList.add('border-green-500', 'bg-green-50', 'text-green-700', 'font-medium');
                    }
                });
            }

            selected = choice;
            const nextBtn = document.getElementById('next-btn');
            nextBtn.disabled = false;
            nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
        }

        function nextQuestion() {
            if (!selected) return;
            current++;
            if (current >= questions.length) {
                showResults();
                return;
            }
            renderQuestion();
        }

        function showResults() {
            const total = questions.length;
            const pct = Math.round((score / total) * 100);
            document.getElementById('results-modal').classList.remove('hidden');
            document.getElementById('result-score').textContent = pct + '%';
            document.getElementById('result-sub').textContent = `You scored ${score} out of ${total}`;
            document.getElementById('result-correct').textContent = score;
            document.getElementById('result-incorrect').textContent = total - score;
        }

        function retakeQuiz() {
            current = 0;
            score = 0;
            selected = null;
            document.getElementById('results-modal').classList.add('hidden');
            document.getElementById('quiz-container').classList.add('hidden');
            document.getElementById('setup-screen').classList.remove('hidden');
            questionCount = null;
            document.querySelectorAll('.count-btn').forEach(btn => {
                btn.classList.remove('bg-slate-700', 'text-white', 'border-slate-700');
                btn.classList.add('border-gray-200', 'text-gray-600');
            });
        }

        function exitQuiz() {
            window.location.href = '/';
        }
    </script>


</body>

</html>