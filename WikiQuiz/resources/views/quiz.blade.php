<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body>

    {{-- Navbar --}}
    <nav class="bg-white border-b border-gray-200 px-6 py-3 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <svg class="w-6 h-6 text-slate-700" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <circle cx="12" cy="12" r="10" />
                <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
            </svg>
            <span class="font-semibold text-slate-700 text-sm">WikiQuiz</span>
        </div>
        <p class="text-sm font-medium text-gray-700" id="quiz-title">{{ urldecode($title) }} - Quiz</p>
        <button onclick="exitQuiz()" class="text-white bg-slate-700 hover:bg-slate-800 text-sm font-medium px-4 py-2 rounded-lg">
            Exit Quiz
        </button>
    </nav>

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
                document.getElementById('loading').innerHTML = '<p class="text-sm text-red-500 text-center mt-20">Failed to load article. Please go back and try again.</p>';
            }
        }

        function generateQuestions(text, limit) {
            const sentences = text
                .replace(/\n+/g, ' ')
                .split(/(?<=[.?!])\s+/)
                .filter(s => s.length > 60 && s.length < 300)
                .filter(s => /\bin\b|\bis\b|\bwas\b|\bare\b|\bwere\b|\bhas\b|\bhave\b/.test(s))
                .filter(s => !/\[|\]|{|}|=/.test(s));

            const allWords = extractKeywords(text);
            const qs = [];

            for (const sentence of sentences) {
                if (qs.length >= limit) break;

                const words = sentence.match(/\b[A-Z][a-z]{3,}\b|\b\d{4}\b/g);
                if (!words || words.length === 0) continue;

                const answer = words[Math.floor(Math.random() * words.length)];
                const question = sentence.replace(answer, '________');
                const distractors = allWords
                    .filter(w => w !== answer)
                    .sort(() => Math.random() - 0.5)
                    .slice(0, 3);

                if (distractors.length < 3) continue;

                const choices = [...distractors, answer].sort(() => Math.random() - 0.5);
                qs.push({
                    question,
                    answer,
                    choices
                });
            }

            return qs;
        }

        function extractKeywords(text) {
            const words = text.match(/\b[A-Z][a-z]{3,}\b|\b\d{4}\b/g) || [];
            return [...new Set(words)];
        }

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
                btn.classList.remove('border-slate-600', 'bg-slate-50', 'font-medium');
                btn.classList.add('border-gray-200');
            });
            el.classList.add('border-slate-600', 'bg-slate-50', 'font-medium');
            el.classList.remove('border-gray-200');
            selected = choice;

            const nextBtn = document.getElementById('next-btn');
            nextBtn.disabled = false;
            nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
        }

        function nextQuestion() {
            if (!selected) return;
            if (selected === questions[current].answer) score++;
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