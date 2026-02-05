<?php
/**
 * Template Name: AI Content & SEO Suite
 * Description: Advanced Tone Analyzer, Headline Checker, FAQ Generator, Sentiment Analyzer, Originality Score, Content Optimizer
 */

get_header(); ?>

<div class="qalbe-tool-container py-12 bg-slate-50 dark:bg-slate-950 min-h-screen">
    <div class="max-w-7xl mx-auto px-4">

        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white mb-4 tracking-tighter">
                Smart <span class="text-indigo-600">AI Content</span> & SEO Suite
            </h1>
            <p class="text-slate-600 dark:text-slate-400 max-w-2xl mx-auto text-lg">
                আপনার লেখার মান বাড়ান। এআই এর সাহায্যে টোন অ্যানালাইসিস, হেডলাইন চেক এবং এসইও স্কিমা জেনারেট করুন।
            </p>
            <div class="mt-6 flex items-center justify-center gap-4 text-sm">
                <span class="px-4 py-2 bg-white dark:bg-slate-900 rounded-full shadow-sm border border-slate-200 dark:border-slate-800">
                    <i class="fas fa-fire text-orange-500"></i> <span id="usage-counter" class="font-bold text-slate-700 dark:text-slate-300">0</span> analyses today
                </span>
                <button onclick="exportHistory()" class="px-4 py-2 bg-white dark:bg-slate-900 rounded-full shadow-sm border border-slate-200 dark:border-slate-800 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors">
                    <i class="fas fa-download text-indigo-600"></i> Export History
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <div class="lg:col-span-1 space-y-4">
                <div class="bg-white dark:bg-slate-900 p-6 rounded-[2.5rem] shadow-xl border border-slate-200 dark:border-slate-800 sticky top-8">
                    <h3 class="font-bold text-slate-800 dark:text-slate-200 mb-6 uppercase text-xs tracking-widest px-2">SEO Modules</h3>
                    <nav id="seo-nav" class="space-y-1">
                        <?php
                        $seo_tools = [
                            'tone' => ['name' => 'Text Tone Analyzer', 'icon' => 'fa-brain'],
                            'headline' => ['name' => 'Headline Checker', 'icon' => 'fa-heading'],
                            'faq' => ['name' => 'FAQ Schema Gen', 'icon' => 'fa-question-circle'],
                            'sentiment' => ['name' => 'Review Sentiment', 'icon' => 'fa-smile'],
                            'original' => ['name' => 'Originality Score', 'icon' => 'fa-fingerprint'],
                            'readability' => ['name' => 'Readability Score', 'icon' => 'fa-book-open'],
                            'keyword' => ['name' => 'Keyword Density', 'icon' => 'fa-key'],
                            'meta' => ['name' => 'Meta Tag Generator', 'icon' => 'fa-tags'],
                            'content-optimizer' => ['name' => 'Content Optimizer', 'icon' => 'fa-magic'],
                            'competitor' => ['name' => 'Competitor Analysis', 'icon' => 'fa-chart-line']
                        ];
                        foreach($seo_tools as $id => $tool) : ?>
                            <button onclick="switchSEOTool('<?php echo $id; ?>')" class="seo-nav-btn w-full text-left px-4 py-3 rounded-xl transition-all text-sm font-medium hover:bg-slate-100 dark:hover:bg-slate-800 dark:text-slate-400 flex items-center gap-3" id="btn-<?php echo $id; ?>">
                                <i class="fas <?php echo $tool['icon']; ?> text-xs"></i>
                                <span><?php echo $tool['name']; ?></span>
                            </button>
                        <?php endforeach; ?>
                    </nav>

                    <div class="mt-8 p-4 bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-slate-800 dark:to-slate-700 rounded-2xl">
                        <p class="text-xs font-bold text-slate-600 dark:text-slate-300 mb-2">💡 Pro Tip</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400" id="pro-tip">Use batch analysis to save time on multiple contents.</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-3 space-y-8">
                <div class="bg-white dark:bg-slate-900 rounded-[3rem] p-8 md:p-12 shadow-2xl border border-slate-200 dark:border-slate-800 min-h-[550px]">

                    <!-- Tone Analyzer with Advanced Features -->
                    <div id="tool-tone" class="seo-section hidden space-y-6">
                        <div class="flex items-center justify-between">
                            <h2 class="text-2xl font-black dark:text-white">AI Text Tone & Sentiment</h2>
                            <div class="flex gap-2">
                                <button onclick="pasteFromClipboard('tone-input')" class="text-xs px-3 py-1 bg-slate-100 dark:bg-slate-800 rounded-lg hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                                    <i class="fas fa-paste"></i> Paste
                                </button>
                                <button onclick="clearInput('tone-input')" class="text-xs px-3 py-1 bg-slate-100 dark:bg-slate-800 rounded-lg hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
                                    <i class="fas fa-times"></i> Clear
                                </button>
                            </div>
                        </div>
                        <textarea id="tone-input" rows="6" class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-2xl p-6 dark:text-white outline-none" placeholder="আপনার প্যারাগ্রাফ বা কাস্টমার রিভিউ এখানে পেস্ট করুন..."></textarea>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="text-xs text-slate-500 dark:text-slate-400">
                                <span class="font-bold" id="tone-word-count">0</span> words •
                                <span class="font-bold" id="tone-char-count">0</span> characters
                            </div>
                            <div class="text-right">
                                <label class="inline-flex items-center gap-2 text-xs">
                                    <input type="checkbox" id="tone-deep-analysis" class="rounded">
                                    <span class="dark:text-slate-400">Deep Analysis Mode</span>
                                </label>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <button onclick="analyzeTone()" class="bg-indigo-600 text-white py-4 rounded-xl font-bold shadow-lg shadow-indigo-500/30 flex items-center justify-center gap-2 hover:bg-indigo-700 transition-colors">
                                <i class="fas fa-microscope"></i> Analyze Tone
                            </button>
                            <button onclick="analyzeToneWithComparison()" class="bg-purple-600 text-white py-4 rounded-xl font-bold shadow-lg shadow-purple-500/30 flex items-center justify-center gap-2 hover:bg-purple-700 transition-colors">
                                <i class="fas fa-balance-scale"></i> Compare with Ideal Tone
                            </button>
                        </div>
                    </div>

                    <!-- Headline Checker with Score Visualization -->
                    <div id="tool-headline" class="seo-section hidden space-y-6">
                        <h2 class="text-2xl font-black dark:text-white">Headline Quality Checker</h2>
                        <input type="text" id="headline-input" placeholder="আপনার ব্লগের শিরোনাম লিখুন..." class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-xl p-4 dark:text-white outline-none">
                        <div class="grid grid-cols-3 gap-4">
                            <div class="p-4 bg-slate-50 dark:bg-slate-800 rounded-xl text-center">
                                <p class="text-xs text-slate-500 dark:text-slate-400 mb-1">Word Count</p>
                                <p class="text-2xl font-bold dark:text-white" id="headline-words">0</p>
                                <p class="text-xs text-slate-400">Ideal: 6-10</p>
                            </div>
                            <div class="p-4 bg-slate-50 dark:bg-slate-800 rounded-xl text-center">
                                <p class="text-xs text-slate-500 dark:text-slate-400 mb-1">Character Count</p>
                                <p class="text-2xl font-bold dark:text-white" id="headline-chars">0</p>
                                <p class="text-xs text-slate-400">Ideal: 50-60</p>
                            </div>
                            <div class="p-4 bg-slate-50 dark:bg-slate-800 rounded-xl text-center">
                                <p class="text-xs text-slate-500 dark:text-slate-400 mb-1">Power Words</p>
                                <p class="text-2xl font-bold dark:text-white" id="headline-power">0</p>
                                <p class="text-xs text-slate-400">Detected</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <button onclick="checkHeadline()" class="bg-blue-600 text-white py-4 rounded-xl font-bold hover:bg-blue-700 transition-colors">
                                <i class="fas fa-check-circle"></i> Check Quality Score
                            </button>
                            <button onclick="generateHeadlineVariations()" class="bg-cyan-600 text-white py-4 rounded-xl font-bold hover:bg-cyan-700 transition-colors">
                                <i class="fas fa-lightbulb"></i> Generate 5 Variations
                            </button>
                        </div>
                    </div>

                    <!-- FAQ Schema Generator with Preview -->
                    <div id="tool-faq" class="seo-section hidden space-y-6">
                        <h2 class="text-2xl font-black dark:text-white">FAQ Schema Generator</h2>
                        <div class="space-y-4" id="faq-pairs-container">
                            <div class="faq-pair grid grid-cols-1 gap-3 p-4 bg-slate-50 dark:bg-slate-800 rounded-xl">
                                <input type="text" class="faq-question bg-white dark:bg-slate-900 border-none rounded-lg p-3 dark:text-white outline-none text-sm" placeholder="Question 1">
                                <textarea class="faq-answer bg-white dark:bg-slate-900 border-none rounded-lg p-3 dark:text-white outline-none text-sm" rows="2" placeholder="Answer 1"></textarea>
                            </div>
                        </div>
                        <button onclick="addFAQPair()" class="text-sm text-indigo-600 dark:text-indigo-400 font-bold hover:underline">
                            <i class="fas fa-plus-circle"></i> Add Another FAQ
                        </button>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <button onclick="generateFAQSchema()" class="bg-emerald-600 text-white py-4 rounded-xl font-bold hover:bg-emerald-700 transition-colors">
                                <i class="fas fa-code"></i> Generate JSON-LD
                            </button>
                            <button onclick="validateSchema()" class="bg-teal-600 text-white py-4 rounded-xl font-bold hover:bg-teal-700 transition-colors">
                                <i class="fas fa-check-double"></i> Validate Schema
                            </button>
                        </div>
                    </div>

                    <!-- Review Sentiment Analyzer -->
                    <div id="tool-sentiment" class="seo-section hidden space-y-6">
                        <h2 class="text-2xl font-black dark:text-white">Review Sentiment Analyzer</h2>
                        <textarea id="sentiment-input" rows="6" class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-2xl p-6 dark:text-white outline-none" placeholder="Paste customer reviews here (multiple reviews separated by line breaks)..."></textarea>
                        <div class="flex gap-4">
                            <button onclick="analyzeSentiment()" class="flex-1 bg-rose-600 text-white py-4 rounded-xl font-bold hover:bg-rose-700 transition-colors">
                                <i class="fas fa-heart-pulse"></i> Analyze Sentiment
                            </button>
                            <button onclick="bulkSentimentAnalysis()" class="flex-1 bg-pink-600 text-white py-4 rounded-xl font-bold hover:bg-pink-700 transition-colors">
                                <i class="fas fa-layer-group"></i> Bulk Analysis
                            </button>
                        </div>
                    </div>

                    <!-- Originality Score Checker -->
                    <div id="tool-original" class="seo-section hidden space-y-6">
                        <h2 class="text-2xl font-black dark:text-white">Content Originality Score</h2>
                        <textarea id="original-input" rows="8" class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-2xl p-6 dark:text-white outline-none" placeholder="Paste your content to check for originality and AI detection..."></textarea>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <button onclick="checkOriginality()" class="bg-violet-600 text-white py-4 rounded-xl font-bold hover:bg-violet-700 transition-colors">
                                <i class="fas fa-fingerprint"></i> Check Originality
                            </button>
                            <button onclick="detectAIContent()" class="bg-fuchsia-600 text-white py-4 rounded-xl font-bold hover:bg-fuchsia-700 transition-colors">
                                <i class="fas fa-robot"></i> Detect AI Content
                            </button>
                            <button onclick="plagiarismCheck()" class="bg-purple-600 text-white py-4 rounded-xl font-bold hover:bg-purple-700 transition-colors">
                                <i class="fas fa-search"></i> Plagiarism Check
                            </button>
                        </div>
                    </div>

                    <!-- Readability Score -->
                    <div id="tool-readability" class="seo-section hidden space-y-6">
                        <h2 class="text-2xl font-black dark:text-white">Readability Score Analyzer</h2>
                        <textarea id="readability-input" rows="8" class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-2xl p-6 dark:text-white outline-none" placeholder="Paste your article or content here..."></textarea>
                        <div class="grid grid-cols-4 gap-4 text-center">
                            <div class="p-3 bg-slate-50 dark:bg-slate-800 rounded-xl">
                                <p class="text-xs text-slate-500 dark:text-slate-400">Sentences</p>
                                <p class="text-xl font-bold dark:text-white" id="read-sentences">0</p>
                            </div>
                            <div class="p-3 bg-slate-50 dark:bg-slate-800 rounded-xl">
                                <p class="text-xs text-slate-500 dark:text-slate-400">Avg Word/Sentence</p>
                                <p class="text-xl font-bold dark:text-white" id="read-avg-words">0</p>
                            </div>
                            <div class="p-3 bg-slate-50 dark:bg-slate-800 rounded-xl">
                                <p class="text-xs text-slate-500 dark:text-slate-400">Complex Words</p>
                                <p class="text-xl font-bold dark:text-white" id="read-complex">0</p>
                            </div>
                            <div class="p-3 bg-slate-50 dark:bg-slate-800 rounded-xl">
                                <p class="text-xs text-slate-500 dark:text-slate-400">Reading Time</p>
                                <p class="text-xl font-bold dark:text-white" id="read-time">0m</p>
                            </div>
                        </div>
                        <button onclick="analyzeReadability()" class="w-full bg-amber-600 text-white py-4 rounded-xl font-bold hover:bg-amber-700 transition-colors">
                            <i class="fas fa-book-open"></i> Analyze Readability
                        </button>
                    </div>

                    <!-- Keyword Density Analyzer -->
                    <div id="tool-keyword" class="seo-section hidden space-y-6">
                        <h2 class="text-2xl font-black dark:text-white">Keyword Density Checker</h2>
                        <textarea id="keyword-input" rows="8" class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-2xl p-6 dark:text-white outline-none" placeholder="Paste your content here..."></textarea>
                        <input type="text" id="target-keyword" placeholder="Target keyword (optional)" class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-xl p-4 dark:text-white outline-none">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <button onclick="analyzeKeywords()" class="bg-lime-600 text-white py-4 rounded-xl font-bold hover:bg-lime-700 transition-colors">
                                <i class="fas fa-key"></i> Analyze Keywords
                            </button>
                            <button onclick="suggestKeywords()" class="bg-green-600 text-white py-4 rounded-xl font-bold hover:bg-green-700 transition-colors">
                                <i class="fas fa-lightbulb"></i> Suggest LSI Keywords
                            </button>
                        </div>
                    </div>

                    <!-- Meta Tag Generator -->
                    <div id="tool-meta" class="seo-section hidden space-y-6">
                        <h2 class="text-2xl font-black dark:text-white">SEO Meta Tag Generator</h2>
                        <input type="text" id="meta-title" placeholder="Page Title" class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-xl p-4 dark:text-white outline-none mb-4">
                        <textarea id="meta-content" rows="6" class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-2xl p-6 dark:text-white outline-none" placeholder="Page content or summary..."></textarea>
                        <input type="text" id="meta-focus-keyword" placeholder="Focus Keyword" class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-xl p-4 dark:text-white outline-none">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <button onclick="generateMetaTags()" class="bg-sky-600 text-white py-4 rounded-xl font-bold hover:bg-sky-700 transition-colors">
                                <i class="fas fa-tags"></i> Generate Meta Tags
                            </button>
                            <button onclick="generateOpenGraph()" class="bg-blue-600 text-white py-4 rounded-xl font-bold hover:bg-blue-700 transition-colors">
                                <i class="fab fa-facebook"></i> Generate OG Tags
                            </button>
                        </div>
                    </div>

                    <!-- Content Optimizer -->
                    <div id="tool-content-optimizer" class="seo-section hidden space-y-6">
                        <h2 class="text-2xl font-black dark:text-white">AI Content Optimizer</h2>
                        <textarea id="optimizer-input" rows="8" class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-2xl p-6 dark:text-white outline-none" placeholder="Paste your content for optimization suggestions..."></textarea>
                        <div class="grid grid-cols-2 gap-4">
                            <input type="text" id="optimizer-keyword" placeholder="Target Keyword" class="bg-slate-50 dark:bg-slate-800 border-none rounded-xl p-4 dark:text-white outline-none">
                            <select id="optimizer-intent" class="bg-slate-50 dark:bg-slate-800 border-none rounded-xl p-4 dark:text-white outline-none">
                                <option value="">Select Intent</option>
                                <option value="informational">Informational</option>
                                <option value="commercial">Commercial</option>
                                <option value="transactional">Transactional</option>
                                <option value="navigational">Navigational</option>
                            </select>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <button onclick="optimizeContent()" class="bg-orange-600 text-white py-4 rounded-xl font-bold hover:bg-orange-700 transition-colors">
                                <i class="fas fa-magic"></i> Optimize Content
                            </button>
                            <button onclick="improveStructure()" class="bg-red-600 text-white py-4 rounded-xl font-bold hover:bg-red-700 transition-colors">
                                <i class="fas fa-sitemap"></i> Improve Structure
                            </button>
                            <button onclick="enhanceSEO()" class="bg-yellow-600 text-white py-4 rounded-xl font-bold hover:bg-yellow-700 transition-colors">
                                <i class="fas fa-chart-line"></i> Enhance SEO
                            </button>
                        </div>
                    </div>

                    <!-- Competitor Analysis -->
                    <div id="tool-competitor" class="seo-section hidden space-y-6">
                        <h2 class="text-2xl font-black dark:text-white">Competitor Content Analysis</h2>
                        <input type="url" id="competitor-url" placeholder="Competitor URL" class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-xl p-4 dark:text-white outline-none mb-4">
                        <textarea id="your-content" rows="6" class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-2xl p-6 dark:text-white outline-none" placeholder="Your content for comparison..."></textarea>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <button onclick="analyzeCompetitor()" class="bg-red-600 text-white py-4 rounded-xl font-bold hover:bg-red-700 transition-colors">
                                <i class="fas fa-chart-line"></i> Analyze Competitor
                            </button>
                            <button onclick="contentGapAnalysis()" class="bg-orange-600 text-white py-4 rounded-xl font-bold hover:bg-orange-700 transition-colors">
                                <i class="fas fa-binoculars"></i> Find Content Gaps
                            </button>
                        </div>
                    </div>

                    <!-- Result Container with Enhanced Features -->
                    <div id="seo-result-container" class="mt-12 hidden animate-fade-in">
                        <div class="p-8 bg-slate-50 dark:bg-slate-800/50 rounded-[2.5rem] border-2 border-dashed border-slate-200 dark:border-slate-700">
                            <div class="flex items-center justify-between mb-4">
                                <p class="text-xs font-bold text-indigo-500 uppercase tracking-widest">AI Analysis Result</p>
                                <div class="flex gap-2">
                                    <button onclick="saveToHistory(event)" class="text-xs px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded-lg hover:bg-indigo-200 dark:hover:bg-indigo-900/50 transition-colors">
                                        <i class="fas fa-save"></i> Save
                                    </button>
                                    <button onclick="shareResult(event)" class="text-xs px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-lg hover:bg-blue-200 dark:hover:bg-blue-900/50 transition-colors">
                                        <i class="fas fa-share-alt"></i> Share
                                    </button>
                                </div>
                            </div>
                            <div id="seo-final-result" class="text-sm dark:text-slate-300 leading-relaxed whitespace-pre-wrap"></div>
                            <div class="mt-6 flex gap-3">
                                <button id="copy-btn" class="text-xs font-bold text-slate-400 hover:text-indigo-500 transition-colors flex items-center gap-2">
                                    <i class="fas fa-copy"></i> Copy Result
                                </button>
                                <button onclick="downloadResult()" class="text-xs font-bold text-slate-400 hover:text-emerald-500 transition-colors flex items-center gap-2">
                                    <i class="fas fa-download"></i> Download as TXT
                                </button>
                                <button onclick="exportPDF()" class="text-xs font-bold text-slate-400 hover:text-rose-500 transition-colors flex items-center gap-2">
                                    <i class="fas fa-file-pdf"></i> Export PDF
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Analysis History Panel -->
                <div class="bg-white dark:bg-slate-900 rounded-[2.5rem] p-8 shadow-xl border border-slate-200 dark:border-slate-800">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-black dark:text-white">Recent Analysis History</h3>
                        <button onclick="clearHistory()" class="text-xs text-red-500 hover:text-red-600 font-bold">
                            <i class="fas fa-trash"></i> Clear All
                        </button>
                    </div>
                    <div id="history-container" class="space-y-3 max-h-96 overflow-y-auto">
                        <p class="text-sm text-slate-400 text-center py-8">No analysis history yet</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const resultContainer = document.getElementById('seo-result-container');
    const finalResult = document.getElementById('seo-final-result');
    let analysisHistory = JSON.parse(localStorage.getItem('seo_analysis_history') || '[]');
    let currentTool = '';

    // Update usage counter
    updateUsageCounter();
    renderHistory();

    // Pro tips rotation
    const proTips = [
        "Use batch analysis to save time on multiple contents.",
        "Higher readability scores mean better user engagement.",
        "Aim for 1-2% keyword density for optimal SEO.",
        "Power words in headlines increase click-through rates by 30%.",
        "Regular sentiment analysis helps improve customer satisfaction.",
        "Original content ranks 50% better than duplicate content.",
        "FAQ schema can increase your search visibility significantly.",
        "Compare with competitors to find content opportunities."
    ];

    let tipIndex = 0;
    setInterval(() => {
        tipIndex = (tipIndex + 1) % proTips.length;
        const tipEl = document.getElementById('pro-tip');
        if(tipEl) tipEl.textContent = proTips[tipIndex];
    }, 8000);

    // Tool Switching
    window.switchSEOTool = function(id) {
        currentTool = id;
        document.querySelectorAll('.seo-section').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('.seo-nav-btn').forEach(btn => {
            btn.classList.remove('bg-indigo-600', 'text-white', 'font-bold');
            btn.classList.add('dark:text-slate-400');
        });
        const targetTool = document.getElementById('tool-' + id);
        if(targetTool) targetTool.classList.remove('hidden');
        const activeBtn = document.getElementById('btn-' + id);
        if(activeBtn) {
            activeBtn.classList.add('bg-indigo-600', 'text-white', 'font-bold');
            activeBtn.classList.remove('dark:text-slate-400');
        }
        if(resultContainer) resultContainer.classList.add('hidden');
    };

    // Text Counter for Tone Analyzer
    const toneInput = document.getElementById('tone-input');
    if(toneInput) {
        toneInput.addEventListener('input', function() {
            const text = this.value;
            const words = text.trim().split(/\s+/).filter(w => w.length > 0).length;
            const chars = text.length;
            const wordCountEl = document.getElementById('tone-word-count');
            const charCountEl = document.getElementById('tone-char-count');
            if(wordCountEl) wordCountEl.textContent = words;
            if(charCountEl) charCountEl.textContent = chars;
        });
    }

    // Headline Counter
    const headlineInput = document.getElementById('headline-input');
    if(headlineInput) {
        headlineInput.addEventListener('input', function() {
            const text = this.value;
            const words = text.trim().split(/\s+/).filter(w => w.length > 0).length;
            const chars = text.length;
            const powerWords = ['amazing', 'exclusive', 'proven', 'ultimate', 'essential', 'powerful', 'secret', 'guaranteed', 'free', 'bonus'];
            const foundPowerWords = powerWords.filter(pw => text.toLowerCase().includes(pw)).length;

            const hWordsEl = document.getElementById('headline-words');
            const hCharsEl = document.getElementById('headline-chars');
            const hPowerEl = document.getElementById('headline-power');
            if(hWordsEl) hWordsEl.textContent = words;
            if(hCharsEl) hCharsEl.textContent = chars;
            if(hPowerEl) hPowerEl.textContent = foundPowerWords;
        });
    }

    // Readability Stats Calculator
    const readabilityInput = document.getElementById('readability-input');
    if(readabilityInput) {
        readabilityInput.addEventListener('input', function() {
            const text = this.value;
            const sentences = text.split(/[.!?]+/).filter(s => s.trim().length > 0).length;
            const words = text.trim().split(/\s+/).filter(w => w.length > 0);
            const avgWords = sentences > 0 ? Math.round(words.length / sentences) : 0;
            const complexWords = words.filter(w => w.length > 12).length;
            const readingTime = Math.ceil(words.length / 200);

            const rSentencesEl = document.getElementById('read-sentences');
            const rAvgWordsEl = document.getElementById('read-avg-words');
            const rComplexEl = document.getElementById('read-complex');
            const rTimeEl = document.getElementById('read-time');
            if(rSentencesEl) rSentencesEl.textContent = sentences;
            if(rAvgWordsEl) rAvgWordsEl.textContent = avgWords;
            if(rComplexEl) rComplexEl.textContent = complexWords;
            if(rTimeEl) rTimeEl.textContent = readingTime + 'm';
        });
    }

    // --- Tone Analyzer ---
    window.analyzeTone = async function() {
        const text = document.getElementById('tone-input').value;
        if(!text.trim()) return alert('Please enter some text.');

        const deepAnalysis = document.getElementById('tone-deep-analysis').checked;
        const mode = deepAnalysis ? 'with detailed psychological insights, emotion breakdown, and writing style analysis' : 'with basic categorization';

        showLoading();
        const prompt = `Analyze the tone and sentiment of this text ${mode}: "${text}".

Please provide:
1. Primary Tone: (Professional, Friendly, Casual, Formal, Aggressive, Persuasive, etc.)
2. Sentiment Score: (Positive/Negative/Neutral with percentage)
3. Emotional Tone: (Joy, Anger, Sadness, Fear, Surprise, Trust)
4. Writing Style: (Descriptive, Narrative, Expository, Persuasive)
5. Target Audience: (Who would resonate with this tone?)
6. Improvement Suggestions: (3-5 specific recommendations)

Format the response with proper headings and bullet points.`;

        await callGemini(prompt, 'Tone Analysis');
    };

    window.analyzeToneWithComparison = async function() {
        const text = document.getElementById('tone-input').value;
        if(!text.trim()) return alert('Please enter some text.');

        showLoading();
        const prompt = `Compare this text's tone with ideal tones for different contexts: "${text}"

Analyze and compare with:
1. Professional Business Communication
2. Friendly Customer Support
3. Persuasive Marketing Copy
4. Educational Content
5. Social Media Engagement

For each context, provide:
- Compatibility Score (0-100)
- What works well
- What needs adjustment
- Specific rewrite suggestions

Format with clear sections and scores.`;

        await callGemini(prompt, 'Tone Comparison');
    };

    // --- Headline Checker ---
    window.checkHeadline = async function() {
        const headline = document.getElementById('headline-input').value;
        if(!headline.trim()) return alert('Enter a headline.');

        showLoading();
        const prompt = `Analyze this headline comprehensively: "${headline}"

Provide detailed analysis:

1. QUALITY SCORE: Rate 0-100 with breakdown for:
   - Clarity (0-25)
   - Emotional Impact (0-25)
   - SEO Potential (0-25)
   - Click-worthiness (0-25)

2. STRUCTURAL ANALYSIS:
   - Word count optimization
   - Character length for SERPs
   - Power words detected
   - Numbers/data included

3. SEO ANALYSIS:
   - Search intent match
   - Keyword placement
   - SERP preview simulation

4. EMOTIONAL TRIGGERS:
   - Curiosity level
   - Urgency factor
   - Value proposition clarity

5. IMPROVEMENT SUGGESTIONS:
   - Generate 5 optimized variations
   - Explain why each is better

Format with clear sections, scores, and actionable insights.`;

        await callGemini(prompt, 'Headline Analysis');
    };

    window.generateHeadlineVariations = async function() {
        const headline = document.getElementById('headline-input').value;
        if(!headline.trim()) return alert('Enter a headline first.');

        showLoading();
        const prompt = `Generate 5 highly optimized headline variations for: "${headline}"

For each variation provide:
1. The new headline
2. Style used (Listicle, How-to, Question, Statement, etc.)
3. Key improvement made
4. Expected CTR boost
5. Best use case

Make them diverse in approach but all better than the original.`;

        await callGemini(prompt, 'Headline Variations');
    };

    // --- FAQ Schema Generator ---
    window.addFAQPair = function() {
        const container = document.getElementById('faq-pairs-container');
        const pairCount = container.children.length + 1;
        const newPair = document.createElement('div');
        newPair.className = 'faq-pair grid grid-cols-1 gap-3 p-4 bg-slate-50 dark:bg-slate-800 rounded-xl';
        newPair.innerHTML = `
            <input type="text" class="faq-question bg-white dark:bg-slate-900 border-none rounded-lg p-3 dark:text-white outline-none text-sm" placeholder="Question ${pairCount}">
            <textarea class="faq-answer bg-white dark:bg-slate-900 border-none rounded-lg p-3 dark:text-white outline-none text-sm" rows="2" placeholder="Answer ${pairCount}"></textarea>
            <button onclick="this.parentElement.remove()" class="text-xs text-red-500 hover:text-red-600 text-left">
                <i class="fas fa-trash"></i> Remove
            </button>
        `;
        container.appendChild(newPair);
    };

    window.generateFAQSchema = async function() {
        const pairs = document.querySelectorAll('.faq-pair');
        let faqData = [];

        pairs.forEach(pair => {
            const question = pair.querySelector('.faq-question').value.trim();
            const answer = pair.querySelector('.faq-answer').value.trim();
            if(question && answer) {
                faqData.push({ question, answer });
            }
        });

        if(faqData.length === 0) return alert('Please add at least one FAQ pair.');

        showLoading();
        const prompt = `Generate valid JSON-LD FAQ Schema markup for these FAQs:
${faqData.map((faq, i) => `Q${i+1}: ${faq.question}
A${i+1}: ${faq.answer}`).join('\n\n')}

Return ONLY the valid JSON-LD code following schema.org FAQPage specification. Make it properly formatted and ready to paste into HTML.`;

        await callGemini(prompt, 'FAQ Schema');
    };

    window.validateSchema = async function() {
        const pairs = document.querySelectorAll('.faq-pair');
        let faqData = [];

        pairs.forEach(pair => {
            const question = pair.querySelector('.faq-question').value.trim();
            const answer = pair.querySelector('.faq-answer').value.trim();
            if(question && answer) {
                faqData.push({ question, answer });
            }
        });

        if(faqData.length === 0) return alert('Please add at least one FAQ pair.');

        showLoading();
        const prompt = `Validate and improve these FAQ entries for schema markup:
${faqData.map((faq, i) => `Q${i+1}: ${faq.question}
A${i+1}: ${faq.answer}`).join('\n\n')}

Provide:
1. Validation status for each Q&A
2. SEO quality score (0-100)
3. Suggestions for improvement
4. Optimized versions of questions and answers
5. Additional FAQs recommendations based on the topic`;

        await callGemini(prompt, 'Schema Validation');
    };

    // --- Sentiment Analyzer ---
    window.analyzeSentiment = async function() {
        const text = document.getElementById('sentiment-input').value;
        if(!text.trim()) return alert('Please enter review text.');

        showLoading();
        const prompt = `Perform comprehensive sentiment analysis on this review/feedback: "${text}"

Provide detailed analysis:

1. OVERALL SENTIMENT:
   - Classification (Positive/Negative/Neutral/Mixed)
   - Confidence Score (0-100%)
   - Polarity Score (-1 to +1)

2. EMOTION BREAKDOWN:
   - Joy: X%
   - Trust: X%
   - Fear: X%
   - Surprise: X%
   - Sadness: X%
   - Anger: X%

3. KEY INSIGHTS:
   - Main pain points identified
   - Positive highlights
   - Customer intent (Complaint/Praise/Inquiry/Suggestion)

4. ACTIONABLE RECOMMENDATIONS:
   - Response strategy
   - Priority level (High/Medium/Low)
   - Suggested reply tone
   - Key points to address

Format with clear sections and visual indicators.`;

        await callGemini(prompt, 'Sentiment Analysis');
    };

    window.bulkSentimentAnalysis = async function() {
        const text = document.getElementById('sentiment-input').value;
        const reviews = text.split('\n').filter(r => r.trim().length > 0);

        if(reviews.length < 2) return alert('Please enter multiple reviews separated by line breaks.');

        showLoading();
        const prompt = `Perform bulk sentiment analysis on these ${reviews.length} reviews:

${reviews.map((r, i) => `Review ${i+1}: ${r}`).join('\n\n')}

Provide comprehensive summary:

1. AGGREGATE STATISTICS:
   - Overall sentiment distribution (% Positive/Negative/Neutral)
   - Average sentiment score
   - Total emotion breakdown

2. INDIVIDUAL ANALYSIS:
   - Brief sentiment for each review (1 line per review)

3. TRENDS & PATTERNS:
   - Common themes in positive reviews
   - Recurring complaints
   - Notable outliers

4. BUSINESS INSIGHTS:
   - Priority issues to address
   - Strengths to leverage
   - Customer satisfaction score estimate

5. RECOMMENDATIONS:
   - Top 3 action items
   - Response templates for common sentiments

Format in clear, scannable sections with percentages and scores.`;

        await callGemini(prompt, 'Bulk Sentiment Analysis');
    };

    // --- Originality Checker ---
    window.checkOriginality = async function() {
        const text = document.getElementById('original-input').value;
        if(!text.trim()) return alert('Please enter content to check.');

        showLoading();
        const prompt = `Analyze the originality and uniqueness of this content: "${text}"

Provide comprehensive assessment:

1. ORIGINALITY SCORE: (0-100)
   - Unique ideas: X/25
   - Fresh perspective: X/25
   - Original expression: X/25
   - Creative elements: X/25

2. CONTENT ANALYSIS:
   - Generic phrases detected
   - Cliché count
   - Unique insights present
   - Writing voice distinctiveness

3. IMPROVEMENT AREAS:
   - Overused phrases to replace
   - Areas lacking originality
   - Suggestions for unique angles

4. ENHANCED VERSION:
   - Rewrite key sections with more originality
   - Add unique metaphors or examples
   - Strengthen distinctive voice

Provide specific, actionable feedback.`;

        await callGemini(prompt, 'Originality Check');
    };

    window.detectAIContent = async function() {
        const text = document.getElementById('original-input').value;
        if(!text.trim()) return alert('Please enter content to analyze.');

        showLoading();
        const prompt = `Analyze if this content appears to be AI-generated: "${text}"

Provide detailed detection analysis:

1. AI LIKELIHOOD SCORE: (0-100%)
   - Pattern analysis: X%
   - Language naturalness: X%
   - Human variation: X%
   - Creative elements: X%

2. AI INDICATORS DETECTED:
   - Repetitive structures
   - Formulaic patterns
   - Unnatural phrasing
   - Lack of personal voice
   - Generic transitions

3. HUMAN-LIKE ELEMENTS:
   - Personal anecdotes
   - Unique perspectives
   - Natural flow variations
   - Emotional authenticity

4. HUMANIZATION RECOMMENDATIONS:
   - Add personal experiences
   - Vary sentence structures
   - Include specific examples
   - Inject authentic voice
   - Remove robotic phrases

5. REWRITTEN SECTIONS:
   - Provide 2-3 key paragraphs rewritten with human touch

Be thorough and specific in assessment.`;

        await callGemini(prompt, 'AI Detection Analysis');
    };

    window.plagiarismCheck = async function() {
        const text = document.getElementById('original-input').value;
        if(!text.trim()) return alert('Please enter content to check.');

        showLoading();
        const prompt = `Perform plagiarism risk assessment on this content: "${text}"

Provide analysis:

1. PLAGIARISM RISK LEVEL: (Low/Medium/High)

2. RISK FACTORS:
   - Common phrases analysis
   - Widely-used expressions detected
   - Industry-standard terminology vs. unique phrasing
   - Quote attribution needs

3. ORIGINALITY INDICATORS:
   - Unique sentence structures: X%
   - Original arguments: X%
   - Fresh examples: X%
   - Distinctive voice: X%

4. RECOMMENDATIONS:
   - Phrases to paraphrase
   - Areas needing citation
   - Sections to make more unique
   - Proper attribution suggestions

5. OPTIMIZED VERSION:
   - Rewrite 2-3 high-risk sections
   - Show how to make content more original

Note: This is AI-based analysis. Use professional plagiarism tools for verification.`;

        await callGemini(prompt, 'Plagiarism Risk Check');
    };

    // --- Readability Analyzer ---
    window.analyzeReadability = async function() {
        const text = document.getElementById('readability-input').value;
        if(!text.trim()) return alert('Please enter content to analyze.');

        showLoading();
        const prompt = `Perform comprehensive readability analysis on this content: "${text}"

Provide detailed assessment:

1. READABILITY SCORES:
   - Flesch Reading Ease: X (0-100)
   - Flesch-Kincaid Grade Level: X
   - Target audience: (General/Expert/Academic)
   - Estimated reading time: X minutes

2. STRUCTURAL ANALYSIS:
   - Average sentence length: X words (Ideal: 15-20)
   - Average word length: X characters
   - Complex words percentage: X%
   - Passive voice usage: X%

3. READABILITY FACTORS:
   - Paragraph length assessment
   - Transition word usage
   - Subheading effectiveness
   - List/bullet usage

4. GRADE BREAKDOWN:
   - Clarity: X/10
   - Flow: X/10
   - Accessibility: X/10
   - Engagement: X/10

5. IMPROVEMENT RECOMMENDATIONS:
   - Simplify complex sentences (provide examples)
   - Replace difficult words (list alternatives)
   - Improve paragraph structure
   - Add transition phrases
   - Break up long sections

6. OPTIMIZED VERSION:
   - Rewrite 2-3 difficult sections with better readability

Provide specific, actionable feedback with examples.`;

        await callGemini(prompt, 'Readability Analysis');
    };

    // --- Keyword Density Analyzer ---
    window.analyzeKeywords = async function() {
        const text = document.getElementById('keyword-input').value;
        const targetKeyword = document.getElementById('target-keyword').value;

        if(!text.trim()) return alert('Please enter content to analyze.');

        showLoading();
        const prompt = `Perform comprehensive keyword analysis on this content: "${text}"
${targetKeyword ? `
Target Keyword: "${targetKeyword}"` : ''}

Provide detailed analysis:

1. KEYWORD DENSITY REPORT:
   ${targetKeyword ? `- Target keyword "${targetKeyword}" appears: X times (X% density)` : ''}
   - Top 10 keywords with frequency and density %
   - Single-word keywords
   - Two-word phrases
   - Three-word phrases

2. KEYWORD OPTIMIZATION:
   ${targetKeyword ? `
   - Current density: X% (Ideal: 1-2%)
   - Keyword placement analysis (Title, First 100 words, Headings, URL)
   - Keyword variations found
   - Semantic keywords detected` : ''}

3. KEYWORD DISTRIBUTION:
   - First paragraph: X mentions
   - Body content: X mentions
   - Last paragraph: X mentions
   - Headings: X mentions

4. OVER-OPTIMIZATION ALERTS:
   - Keyword stuffing risk: Yes/No
   - Unnatural usage detected
   - Phrases to diversify

5. RECOMMENDATIONS:
   - Ideal keyword count for this content length
   - Where to add/remove keywords
   - Keyword variation suggestions
   - Natural placement opportunities

6. COMPETITOR KEYWORD GAPS:
   - Related keywords you're missing
   - Trending terms in your niche

Format with clear tables and percentages.`;

        await callGemini(prompt, 'Keyword Density Analysis');
    };

    window.suggestKeywords = async function() {
        const text = document.getElementById('keyword-input').value;
        const targetKeyword = document.getElementById('target-keyword').value;

        if(!text.trim()) return alert('Please enter content first.');

        showLoading();
        const prompt = `Based on this content and ${targetKeyword ? `target keyword "${targetKeyword}"` : 'its topic'}, suggest LSI and related keywords:

Content: "${text.substring(0, 500)}..."

Provide:

1. PRIMARY LSI KEYWORDS: (10-15 keywords)
   - Semantically related terms
   - Density each should target

2. SECONDARY KEYWORDS: (10 keywords)
   - Supporting topics
   - Related queries

3. LONG-TAIL KEYWORDS: (8-10 phrases)
   - Question-based
   - Intent-specific
   - Lower competition opportunities

4. SEMANTIC VARIATIONS:
   - Synonyms and related terms
   - Different phrasing options

5. TRENDING RELATED TERMS:
   - Currently popular searches
   - Emerging topics

6. IMPLEMENTATION STRATEGY:
   - Where to naturally include each keyword type
   - Priority ranking
   - Natural integration examples

Format as organized lists with brief explanations.`;

        await callGemini(prompt, 'LSI Keyword Suggestions');
    };

    // --- Meta Tag Generator ---
    window.generateMetaTags = async function() {
        const title = document.getElementById('meta-title').value;
        const content = document.getElementById('meta-content').value;
        const keyword = document.getElementById('meta-focus-keyword').value;

        if(!title.trim() || !content.trim()) return alert('Please enter title and content.');

        showLoading();
        const prompt = `Generate comprehensive SEO meta tags for this page:

Title: "${title}"
Content Summary: "${content}"
${keyword ? `Focus Keyword: "${keyword}"` : ''}

Generate:

1. OPTIMIZED TITLE TAG:
   - 3 variations (50-60 characters each)
   - Include power words and keyword
   - Click-worthy and SEO-friendly

2. META DESCRIPTION:
   - 3 variations (150-160 characters each)
   - Compelling call-to-action
   - Keyword integration
   - Clear value proposition

3. FOCUS KEYPHRASE:
   - Primary keyword recommendation
   - Keyword variations
   - Search volume estimate

4. SLUG/URL:
   - SEO-friendly URL structure
   - 2-3 variations

5. ADDITIONAL META TAGS:
   - Meta keywords (if applicable)
   - Author meta
   - Robots meta
   - Canonical URL suggestion

6. STRUCTURED DATA RECOMMENDATIONS:
   - Applicable schema types
   - Priority implementation

Provide ready-to-use HTML code for each tag.`;

        await callGemini(prompt, 'Meta Tag Generation');
    };

    window.generateOpenGraph = async function() {
        const title = document.getElementById('meta-title').value;
        const content = document.getElementById('meta-content').value;

        if(!title.trim() || !content.trim()) return alert('Please enter title and content.');

        showLoading();
        const prompt = `Generate complete Open Graph and Social Media meta tags for:

Title: "${title}"
Content: "${content}"

Generate comprehensive social media optimization:

1. FACEBOOK OPEN GRAPH TAGS:
   \`\`\`html
   <meta property="og:title" content="...">
   <meta property="og:description" content="...">
   <meta property="og:type" content="...">
   <meta property="og:url" content="...">
   <meta property="og:image" content="...">
   <meta property="og:site_name" content="...">
   \`\`\`

2. TWITTER CARD TAGS:
   \`\`\`html
   <meta name="twitter:card" content="...">
   <meta name="twitter:title" content="...">
   <meta name="twitter:description" content="...">
   <meta name="twitter:image" content="...">
   \`\`\`

3. LINKEDIN OPTIMIZATION:
   - Specific recommendations for LinkedIn sharing

4. IMAGE RECOMMENDATIONS:
   - Optimal dimensions (1200x630px)
   - Image description suggestions
   - Alt text recommendations

5. SOCIAL SHARING PREVIEW:
   - How it will appear on Facebook
   - How it will appear on Twitter
   - How it will appear on LinkedIn

Provide complete, copy-paste ready HTML code.`;

        await callGemini(prompt, 'Social Media Tags');
    };

    // --- Content Optimizer ---
    window.optimizeContent = async function() {
        const content = document.getElementById('optimizer-input').value;
        const keyword = document.getElementById('optimizer-keyword').value;
        const intent = document.getElementById('optimizer-intent').value;

        if(!content.trim()) return alert('Please enter content to optimize.');

        showLoading();
        const prompt = `Perform comprehensive content optimization analysis:

Content: "${content}"
${keyword ? `Target Keyword: "${keyword}"` : ''}
${intent ? `Search Intent: ${intent}` : ''}

Provide detailed optimization report:

1. CONTENT QUALITY SCORE: (0-100)
   - SEO optimization: X/25
   - Readability: X/25
   - Engagement: X/25
   - Structure: X/25

2. SEO OPTIMIZATION:
   - Keyword usage analysis
   - Keyword placement opportunities
   - LSI keyword gaps
   - Internal linking suggestions
   - External linking needs

3. CONTENT STRUCTURE:
   - Heading hierarchy assessment
   - Paragraph length optimization
   - Use of lists and bullet points
   - Visual content recommendations

4. ENGAGEMENT OPTIMIZATION:
   - Hook strength (first 100 words)
   - Call-to-action effectiveness
   - Storytelling elements
   - Emotional triggers

5. SEARCH INTENT ALIGNMENT:
   - Does content match ${intent || 'user'} intent?
   - Query satisfaction score
   - Information completeness
   - User journey alignment

6. TECHNICAL SEO:
   - Content length assessment
   - Image alt text needs
   - Schema markup opportunities
   - Mobile optimization considerations

7. DETAILED RECOMMENDATIONS:
   - Top 10 specific improvements
   - Priority ranking
   - Implementation difficulty
   - Expected impact

8. OPTIMIZED VERSION:
   - Rewrite 3-4 key sections showing improvements

Provide actionable, prioritized recommendations.`;

        await callGemini(prompt, 'Content Optimization');
    };

    window.improveStructure = async function() {
        const content = document.getElementById('optimizer-input').value;

        if(!content.trim()) return alert('Please enter content to analyze.');

        showLoading();
        const prompt = `Analyze and improve the content structure:

Content: "${content}"

Provide comprehensive structural analysis:

1. CURRENT STRUCTURE ASSESSMENT:
   - Heading hierarchy evaluation
   - Logical flow analysis
   - Section balance
   - Transition effectiveness

2. STRUCTURAL ISSUES:
   - Missing headings
   - Orphan paragraphs
   - Imbalanced sections
   - Poor transitions
   - Weak introduction/conclusion

3. IDEAL STRUCTURE BLUEPRINT:
   - Recommended heading outline
   - Optimal section order
   - Content block organization
   - Visual element placement

4. SCANNABILITY ANALYSIS:
   - Subheading frequency
   - Paragraph length distribution
   - White space usage
   - List opportunities

5. USER EXPERIENCE:
   - Table of contents recommendation
   - Jump link opportunities
   - Summary box suggestions
   - Key takeaway highlights

6. RESTRUCTURED OUTLINE:
   Provide complete reorganized outline:
   H1: [Main Title]
   - Introduction
   H2: [Section 1]
     - Key points
   H3: [Subsection]
   [Continue full structure]

7. REWRITTEN SAMPLE:
   - Show before/after for 2-3 sections
   - Demonstrate improved flow

Provide clear, implementable structural recommendations.`;

        await callGemini(prompt, 'Structure Improvement');
    };

    window.enhanceSEO = async function() {
        const content = document.getElementById('optimizer-input').value;
        const keyword = document.getElementById('optimizer-keyword').value;

        if(!content.trim()) return alert('Please enter content to enhance.');

        showLoading();
        const prompt = `Perform comprehensive SEO enhancement analysis:

Content: "${content}"
${keyword ? `Target Keyword: "${keyword}"` : ''}

Provide detailed SEO enhancement strategy:

1. ON-PAGE SEO SCORE: (0-100)
   - Keyword optimization: X/20
   - Content quality: X/20
   - Technical elements: X/20
   - User engagement: X/20
   - Mobile-friendliness: X/20

2. KEYWORD OPTIMIZATION:
   - Current keyword density and placement
   - Ideal keyword distribution
   - Keyword cannibalization risks
   - Semantic keyword opportunities
   - Long-tail variations to include

3. CONTENT GAPS:
   - Missing topics to cover
   - Questions to answer
   - Depth improvement areas
   - Competitive content gaps

4. TECHNICAL SEO ENHANCEMENTS:
   - Image optimization needs
   - Alt text requirements
   - Internal linking strategy (suggest 5-7 links)
   - External authority linking
   - Schema markup opportunities

5. ENGAGEMENT SIGNALS:
   - Improving dwell time tactics
   - Reducing bounce rate strategies
   - Encouraging social shares
   - Building backlink worthiness

6. FEATURED SNIPPET OPTIMIZATION:
   - Current snippet potential
   - Format recommendations
   - Paragraph restructuring for position 0

7. E-E-A-T IMPROVEMENT:
   - Expertise demonstration
   - Authority building elements
   - Trustworthiness signals
   - Experience sharing opportunities

8. ACTIONABLE SEO CHECKLIST:
   Priority 1 (High Impact):
   □ [Action item 1]
   □ [Action item 2]

   Priority 2 (Medium Impact):
   □ [Action item 3]

   Priority 3 (Quick Wins):
   □ [Action item 4]

9. ENHANCED VERSION:
   - Provide SEO-optimized rewrite of 2-3 key sections

Provide specific, implementable SEO enhancements.`;

        await callGemini(prompt, 'SEO Enhancement');
    };

    // --- Competitor Analysis ---
    window.analyzeCompetitor = async function() {
        const url = document.getElementById('competitor-url').value;
        const yourContent = document.getElementById('your-content').value;

        if(!url.trim()) return alert('Please enter competitor URL.');

        showLoading();
        const prompt = `Analyze competitor content strategy and compare with my content:

Competitor URL: ${url}
${yourContent ? `My Content: "${yourContent.substring(0, 300)}..."` : ''}

Provide comprehensive competitive analysis:

1. COMPETITOR CONTENT ANALYSIS:
   - Content length estimation
   - Keyword strategy detected
   - Content structure
   - Engagement elements
   - Visual content usage
   - Internal linking strategy

2. STRENGTHS IDENTIFIED:
   - What they're doing well
   - Unique value propositions
   - Competitive advantages
   - User experience elements

3. WEAKNESSES FOUND:
   - Content gaps
   - Missing information
   - Poor optimization areas
   - Opportunities for improvement

4. COMPARISON MATRIX:
   | Aspect | Competitor | Your Content | Winner |
   |--------|-----------|--------------|---------|
   | Length | X words | X words | |
   | Keywords | X | X | |
   | Structure | Rating | Rating | |
   | Readability | Score | Score | |

5. COMPETITIVE ADVANTAGES:
   - Areas where you can win
   - Untapped opportunities
   - Unique angles to explore
   - Content depth opportunities

6. REVERSE ENGINEERING:
   - Their likely keyword targets
   - Content formula analysis
   - Backlink strategy insights
   - Social proof tactics

7. ACTIONABLE STRATEGY:
   - How to outrank this content
   - Content improvements needed
   - Differentiation opportunities
   - Quick win tactics

8. ENHANCED CONTENT PLAN:
   - Suggested outline to beat competitor
   - Unique elements to add
   - Depth areas to expand

Provide strategic, actionable competitive insights.`;

        await callGemini(prompt, 'Competitor Analysis');
    };

    window.contentGapAnalysis = async function() {
        const url = document.getElementById('competitor-url').value;
        const yourContent = document.getElementById('your-content').value;

        if(!url.trim()) return alert('Please enter competitor URL.');

        showLoading();
        const prompt = `Perform content gap analysis between competitor and my content:

Competitor URL: ${url}
${yourContent ? `My Content: "${yourContent}"` : ''}

Identify content gaps and opportunities:

1. TOPIC COVERAGE GAPS:
   - Subtopics they cover that you don't
   - Questions they answer that you don't
   - Use cases they address
   - Audience segments they target

2. DEPTH ANALYSIS:
   - Areas where competitor goes deeper
   - Surface-level vs. comprehensive coverage
   - Technical detail comparison
   - Examples and case studies usage

3. KEYWORD GAPS:
   - Keywords they rank for that you don't
   - Long-tail opportunities
   - Question keywords missing
   - Semantic keyword gaps

4. CONTENT FORMAT GAPS:
   - Lists vs. paragraphs
   - How-to steps
   - Comparison tables
   - Visual content
   - Interactive elements

5. USER INTENT COVERAGE:
   - Informational intent gaps
   - Commercial intent gaps
   - Transactional intent gaps
   - Navigational intent gaps

6. ENGAGEMENT ELEMENT GAPS:
   - Call-to-actions
   - Social proof
   - Statistics and data
   - Expert quotes
   - Real-world examples

7. OPPORTUNITY PRIORITIZATION:
   High Priority Gaps:
   1. [Gap with highest impact]
   2. [Next priority]

   Medium Priority Gaps:
   3. [Gap to address]

   Quick Win Gaps:
   4. [Easy to implement]

8. CONTENT EXPANSION PLAN:
   - Recommended sections to add
   - Content length target
   - New subtopics to cover
   - Enhanced examples needed

9. COMPETITIVE CONTENT ROADMAP:
   Week 1: [Immediate improvements]
   Week 2-3: [Medium priority gaps]
   Month 2: [Long-term enhancements]

10. ENHANCED OUTLINE:
    Provide complete content outline that fills all gaps and beats competitor.

Format with clear, actionable gap identification and solutions.`;

        await callGemini(prompt, 'Content Gap Analysis');
    };

    // --- Gemini API Call Function ---
    async function callGemini(prompt, analysisType = 'Analysis') {
        const formData = new FormData();
        formData.append('action', 'qalbe_ai_chat');
        formData.append('message', prompt);
        formData.append('security', '<?php echo wp_create_nonce("qalbe_ai_nonce"); ?>');

        try {
            const res = await fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
                method: 'POST',
                body: formData
            });
            const data = await res.json();

            if(data.success) {
                finalResult.innerHTML = formatAIResponse(data.data);
                resultContainer.classList.remove('hidden');

                // Save to history
                const historyItem = {
                    type: analysisType,
                    tool: currentTool,
                    timestamp: new Date().toISOString(),
                    result: data.data.substring(0, 200) + '...',
                    fullResult: data.data
                };
                analysisHistory.unshift(historyItem);
                if(analysisHistory.length > 20) analysisHistory.pop();
                localStorage.setItem('seo_analysis_history', JSON.stringify(analysisHistory));

                updateUsageCounter();
                renderHistory();
            } else {
                finalResult.innerHTML = '<p class="text-red-500">❌ Error: ' + (data.message || 'AI response failed.') + '</p>';
                resultContainer.classList.remove('hidden');
            }
        } catch (e) {
            finalResult.innerHTML = '<p class="text-red-500">❌ Network Error: Unable to connect to AI service.</p>';
            resultContainer.classList.remove('hidden');
        }
    }

    // --- Format AI Response ---
    function formatAIResponse(text) {
        if(!text) return '';
        // Convert markdown-style formatting to HTML
        let formatted = text
            // Headers
            .replace(/^### (.*$)/gim, '<h3 class="text-lg font-bold text-slate-800 dark:text-slate-200 mt-6 mb-3">$1</h3>')
            .replace(/^## (.*$)/gim, '<h2 class="text-xl font-bold text-slate-800 dark:text-slate-200 mt-6 mb-3">$1</h2>')
            .replace(/^# (.*$)/gim, '<h1 class="text-2xl font-bold text-slate-800 dark:text-slate-200 mt-6 mb-3">$1</h1>')
            // Bold
            .replace(/\*\*(.*?)\*\*/g, '<strong class="font-bold text-slate-900 dark:text-white">$1</strong>')
            // Lists
            .replace(/^\- (.*$)/gim, '<li class="ml-4 mb-1">• $1</li>')
            .replace(/^\* (.*$)/gim, '<li class="ml-4 mb-1">• $1</li>')
            .replace(/^\d+\. (.*$)/gim, '<li class="ml-4 mb-1 list-decimal">$1</li>')
            // Code blocks
            .replace(/```([\s\S]*?)```/g, '<pre class="bg-slate-800 text-green-400 p-4 rounded-lg overflow-x-auto my-4 text-sm"><code>$1</code></pre>')
            .replace(/`(.*?)`/g, '<code class="bg-slate-200 dark:bg-slate-700 px-2 py-1 rounded text-sm">$1</code>')
            // Line breaks
            .replace(/\n\n/g, '</p><p class="mb-4">')
            .replace(/\n/g, '<br>')
            // Checkboxes
            .replace(/□/g, '<input type="checkbox" class="mr-2 rounded">')
            .replace(/☑/g, '<input type="checkbox" checked class="mr-2 rounded">');

        return '<div class="formatted-content"><p>' + formatted + '</p></div>';
    }

    // --- Loading State ---
    function showLoading() {
        if(resultContainer) {
            resultContainer.classList.remove('hidden');
            finalResult.innerHTML = `
                <div class="flex items-center gap-3 animate-pulse">
                    <div class="w-2 h-2 bg-indigo-500 rounded-full animate-bounce"></div>
                    <div class="w-2 h-2 bg-indigo-500 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                    <div class="w-2 h-2 bg-indigo-500 rounded-full animate-bounce" style="animation-delay: 0.4s"></div>
                    <span class="text-slate-600 dark:text-slate-400 ml-2">AI is analyzing content metrics...</span>
                </div>
            `;
        }
    }

    // --- Utility Functions ---
    window.pasteFromClipboard = async function(inputId) {
        try {
            const text = await navigator.clipboard.readText();
            const inputEl = document.getElementById(inputId);
            if(inputEl) {
                inputEl.value = text;
                inputEl.dispatchEvent(new Event('input'));
            }
        } catch (err) {
            alert('Unable to paste. Please use Ctrl+V manually.');
        }
    };

    window.clearInput = function(inputId) {
        const inputEl = document.getElementById(inputId);
        if(inputEl) {
            inputEl.value = '';
            inputEl.dispatchEvent(new Event('input'));
        }
    };

    // --- Copy Result ---
    const copyBtn = document.getElementById('copy-btn');
    if(copyBtn) {
        copyBtn.onclick = () => {
            const text = finalResult.innerText;
            navigator.clipboard.writeText(text).then(() => {
                const btn = document.getElementById('copy-btn');
                const originalHTML = btn.innerHTML;
                btn.innerHTML = '<i class="fas fa-check"></i> Copied!';
                btn.classList.add('text-green-500');
                setTimeout(() => {
                    btn.innerHTML = originalHTML;
                    btn.classList.remove('text-green-500');
                }, 2000);
            });
        };
    }

    // --- Download Result ---
    window.downloadResult = function() {
        const text = finalResult.innerText;
        const blob = new Blob([text], { type: 'text/plain' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `seo-analysis-${Date.now()}.txt`;
        a.click();
        URL.revokeObjectURL(url);
    };

    // --- Export PDF ---
    window.exportPDF = function() {
        // Simple HTML to PDF conversion
        const content = finalResult.innerHTML;
        const printWindow = window.open('', '', 'height=600,width=800');
        if(!printWindow) return alert('Pop-up blocked. Please allow pop-ups for this site.');
        printWindow.document.write(`
            <html>
            <head>
                <title>SEO Analysis Report</title>
                <style>
                    body { font-family: Arial, sans-serif; padding: 40px; line-height: 1.6; }
                    h1, h2, h3 { color: #4f46e5; margin-top: 20px; }
                    pre { background: #f3f4f6; padding: 15px; border-radius: 8px; overflow-x: auto; }
                    code { background: #e5e7eb; padding: 2px 6px; border-radius: 4px; }
                </style>
            </head>
            <body>
                <h1>SEO Analysis Report</h1>
                <p><strong>Generated:</strong> ${new Date().toLocaleString()}</p>
                <hr>
                ${content}
            </body>
            </html>
        `);
        printWindow.document.close();
        setTimeout(() => {
            printWindow.print();
        }, 250);
    };

    // --- Save to History ---
    window.saveToHistory = function(e) {
        const saveBtn = e ? e.currentTarget : window.event.currentTarget;
        if(!saveBtn) return;
        const originalHTML = saveBtn.innerHTML;
        saveBtn.innerHTML = '<i class="fas fa-check"></i> Saved!';
        setTimeout(() => {
            saveBtn.innerHTML = originalHTML;
        }, 2000);
    };

    // --- Share Result ---
    window.shareResult = function(e) {
        const text = finalResult.innerText.substring(0, 500);
        const shareData = {
            title: 'SEO Analysis Result',
            text: text,
            url: window.location.href
        };

        if (navigator.share) {
            navigator.share(shareData);
        } else {
            // Fallback - copy link
            navigator.clipboard.writeText(window.location.href);
            alert('Link copied to clipboard!');
        }
    };

    // --- Update Usage Counter ---
    function updateUsageCounter() {
        const today = new Date().toDateString();
        let usage = JSON.parse(localStorage.getItem('seo_usage') || '{}');

        if(usage.date !== today) {
            usage = { date: today, count: 0 };
        }

        const count = analysisHistory.filter(item => {
            const itemDate = new Date(item.timestamp).toDateString();
            return itemDate === today;
        }).length;

        const usageCounterEl = document.getElementById('usage-counter');
        if(usageCounterEl) usageCounterEl.textContent = count;
        localStorage.setItem('seo_usage', JSON.stringify({ date: today, count: count }));
    }

    // --- Render History ---
    function renderHistory() {
        const container = document.getElementById('history-container');
        if(!container) return;

        if(analysisHistory.length === 0) {
            container.innerHTML = '<p class="text-sm text-slate-400 text-center py-8">No analysis history yet</p>';
            return;
        }

        container.innerHTML = analysisHistory.map((item, index) => {
            const date = new Date(item.timestamp);
            const timeAgo = getTimeAgo(date);

            return `
                <div class="p-4 bg-slate-50 dark:bg-slate-800 rounded-xl hover:shadow-md transition-shadow cursor-pointer" onclick="loadHistoryItem(${index})">
                    <div class="flex items-center justify-between mb-2">
                        <span class="text-xs font-bold text-indigo-600 dark:text-indigo-400">${item.type}</span>
                        <span class="text-xs text-slate-400">${timeAgo}</span>
                    </div>
                    <p class="text-sm text-slate-600 dark:text-slate-300 line-clamp-2">${item.result}</p>
                </div>
            `;
        }).join('');
    }

    // --- Load History Item ---
    window.loadHistoryItem = function(index) {
        const item = analysisHistory[index];
        finalResult.innerHTML = formatAIResponse(item.fullResult);
        resultContainer.classList.remove('hidden');
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };

    // --- Clear History ---
    window.clearHistory = function() {
        if(!confirm('Clear all analysis history?')) return;
        analysisHistory = [];
        localStorage.removeItem('seo_analysis_history');
        renderHistory();
        updateUsageCounter();
    };

    // --- Export History ---
    window.exportHistory = function() {
        if(analysisHistory.length === 0) {
            alert('No history to export.');
            return;
        }

        const exportData = analysisHistory.map(item => ({
            type: item.type,
            date: new Date(item.timestamp).toLocaleString(),
            result: item.fullResult
        }));

        const blob = new Blob([JSON.stringify(exportData, null, 2)], { type: 'application/json' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `seo-history-${Date.now()}.json`;
        a.click();
        URL.revokeObjectURL(url);
    };

    // --- Time Ago Helper ---
    function getTimeAgo(date) {
        const seconds = Math.floor((new Date() - date) / 1000);

        let interval = seconds / 31536000;
        if (interval > 1) return Math.floor(interval) + " years ago";

        interval = seconds / 2592000;
        if (interval > 1) return Math.floor(interval) + " months ago";

        interval = seconds / 86400;
        if (interval > 1) return Math.floor(interval) + " days ago";

        interval = seconds / 3600;
        if (interval > 1) return Math.floor(interval) + " hours ago";

        interval = seconds / 60;
        if (interval > 1) return Math.floor(interval) + " minutes ago";

        return Math.floor(seconds) + " seconds ago";
    }

    // Initialize first tool
    switchSEOTool('tone');
});
</script>

<style>
.animate-fade-in {
    animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.formatted-content {
    line-height: 1.8;
}

.formatted-content h1,
.formatted-content h2,
.formatted-content h3 {
    scroll-margin-top: 2rem;
}

.formatted-content li {
    list-style-position: inside;
}

.formatted-content pre {
    font-family: 'Courier New', monospace;
    font-size: 0.875rem;
}

.formatted-content code {
    font-family: 'Courier New', monospace;
}

/* Custom Scrollbar */
#history-container::-webkit-scrollbar {
    width: 6px;
}

#history-container::-webkit-scrollbar-track {
    background: transparent;
}

#history-container::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 3px;
}

.dark #history-container::-webkit-scrollbar-thumb {
    background: #475569;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .qalbe-tool-container {
        padding: 2rem 0;
    }

    .max-w-7xl {
        padding: 0 1rem;
    }
}
</style>

<?php get_footer(); ?>
