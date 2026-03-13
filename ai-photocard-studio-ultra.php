<?php
/**
 * Template Name: AI PhotoCard Studio Ultra
 * Description: Advanced Design Studio with Canvas, Layers, Filters & 20+ Pro Features
 * @package QalbeTalks
 * @version 3.0.0
 */

get_header(); ?>

<div class="qalbe-photocard-studio bg-gradient-to-b from-slate-50 via-white to-slate-50 dark:from-slate-950 dark:via-slate-900 dark:to-slate-950 min-h-screen py-12 transition-colors duration-300">
    <div class="max-w-[1920px] mx-auto px-4">

        <!-- Enhanced Header -->
        <header class="text-center mb-12">
            <div class="relative inline-block mb-8">
                <div class="absolute inset-0 bg-gradient-to-r from-red-500 to-orange-600 rounded-3xl blur-2xl opacity-40 animate-pulse-glow"></div>
                <div class="relative inline-flex items-center justify-center w-24 h-24 rounded-3xl bg-gradient-to-br from-red-500 via-orange-600 to-pink-600 text-white shadow-2xl transform hover:scale-110 hover:rotate-6 transition-all duration-700">
                    <i class="fas fa-layer-group text-4xl"></i>
                </div>
            </div>

            <h1 class="text-5xl md:text-7xl font-black text-slate-900 dark:text-white mb-6 tracking-tighter leading-[0.9]">
                <span class="block mb-2">PhotoCard Studio</span>
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-red-500 via-orange-600 to-pink-600 animate-gradient">Ultra Pro</span>
            </h1>

            <p class="text-xl md:text-2xl text-slate-600 dark:text-slate-300 max-w-3xl mx-auto leading-relaxed font-medium">
                Professional News Cards, Social Media Posts & Graphics with AI-Powered Design Tools
            </p>
        </header>

        <div class="grid grid-cols-1 xl:grid-cols-12 gap-6">

            <!-- Left Sidebar - Templates & Basic Controls -->
            <aside class="xl:col-span-3 space-y-6">

                <!-- Template Selection -->
                <div class="bg-white dark:bg-slate-900 rounded-3xl p-6 shadow-xl border-2 border-slate-100 dark:border-slate-800">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-orange-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-th-large text-white text-sm"></i>
                        </div>
                        <h3 class="text-xs font-black text-slate-700 dark:text-slate-300 uppercase tracking-widest">Templates</h3>
                    </div>
                    <div class="grid grid-cols-2 gap-2 overflow-y-auto max-h-64 custom-scrollbar pr-1">
                        <button onclick="changeTemplate('classic')" class="tmp-btn active" data-template="classic">
                            <i class="fas fa-newspaper mr-1"></i>Classic
                        </button>
                        <button onclick="changeTemplate('modern')" class="tmp-btn" data-template="modern">
                            <i class="fas fa-bolt mr-1"></i>Modern
                        </button>
                        <button onclick="changeTemplate('breaking')" class="tmp-btn" data-template="breaking">
                            <i class="fas fa-exclamation-triangle mr-1"></i>Breaking
                        </button>
                        <button onclick="changeTemplate('sports')" class="tmp-btn" data-template="sports">
                            <i class="fas fa-futbol mr-1"></i>Sports
                        </button>
                        <button onclick="changeTemplate('minimal')" class="tmp-btn" data-template="minimal">
                            <i class="fas fa-minus-circle mr-1"></i>Minimal
                        </button>
                        <button onclick="changeTemplate('tech')" class="tmp-btn" data-template="tech">
                            <i class="fas fa-microchip mr-1"></i>Tech
                        </button>
                        <button onclick="changeTemplate('business')" class="tmp-btn" data-template="business">
                            <i class="fas fa-briefcase mr-1"></i>Business
                        </button>
                        <button onclick="changeTemplate('creative')" class="tmp-btn" data-template="creative">
                            <i class="fas fa-palette mr-1"></i>Creative
                        </button>
                        <button onclick="changeTemplate('cyber')" class="tmp-btn" data-template="cyber">
                            <i class="fas fa-user-secret mr-1"></i>Cyber
                        </button>
                        <button onclick="changeTemplate('luxury')" class="tmp-btn" data-template="luxury">
                            <i class="fas fa-gem mr-1"></i>Luxury
                        </button>
                        <button onclick="changeTemplate('vintage')" class="tmp-btn" data-template="vintage">
                            <i class="fas fa-history mr-1"></i>Vintage
                        </button>
                        <button onclick="changeTemplate('neon')" class="tmp-btn" data-template="neon">
                            <i class="fas fa-lightbulb mr-1"></i>Neon
                        </button>
                        <button onclick="changeTemplate('editorial')" class="tmp-btn" data-template="editorial">
                            <i class="fas fa-book-open mr-1"></i>Editorial
                        </button>
                        <button onclick="changeTemplate('abstract')" class="tmp-btn" data-template="abstract">
                            <i class="fas fa-wind mr-1"></i>Abstract
                        </button>
                        <button onclick="changeTemplate('gaming')" class="tmp-btn" data-template="gaming">
                            <i class="fas fa-gamepad mr-1"></i>Gaming
                        </button>
                        <button onclick="changeTemplate('nature')" class="tmp-btn" data-template="nature">
                            <i class="fas fa-leaf mr-1"></i>Nature
                        </button>
                        <button onclick="changeTemplate('dark-grad')" class="tmp-btn" data-template="dark-grad">
                            <i class="fas fa-fill-drip mr-1"></i>Dark Grad
                        </button>
                        <button onclick="changeTemplate('clean-white')" class="tmp-btn" data-template="clean-white">
                            <i class="fas fa-circle-notch mr-1"></i>Clean White
                        </button>
                        <button onclick="changeTemplate('social')" class="tmp-btn" data-template="social">
                            <i class="fas fa-share-alt mr-1"></i>Social
                        </button>
                        <button onclick="changeTemplate('quote')" class="tmp-btn" data-template="quote">
                            <i class="fas fa-quote-left mr-1"></i>Quote
                        </button>
                        <button onclick="changeTemplate('breaking-now')" class="tmp-btn" data-template="breaking-now">
                            <i class="fas fa-bolt mr-1"></i>Breaking Now
                        </button>
                        <button onclick="changeTemplate('sports-pro')" class="tmp-btn" data-template="sports-pro">
                            <i class="fas fa-medal mr-1"></i>Sports Pro
                        </button>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="bg-white dark:bg-slate-900 rounded-3xl p-6 shadow-xl border-2 border-slate-100 dark:border-slate-800">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-edit text-white text-sm"></i>
                        </div>
                        <h3 class="text-xs font-black text-slate-700 dark:text-slate-300 uppercase tracking-widest">Content</h3>
                    </div>
                    <div class="space-y-3">
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">
                                <i class="fas fa-heading mr-1"></i>Headline
                            </label>
                            <textarea id="card-headline" rows="3" oninput="updateCoreLayer('headline-layer', this.value)"
                                      class="w-full bg-slate-50 dark:bg-slate-800 border-2 border-slate-200 dark:border-slate-700 rounded-xl p-3 text-sm dark:text-white outline-none focus:border-red-500 resize-none"
                                      placeholder="Enter your headline..."></textarea>
                            <div class="flex justify-between mt-1">
                                <span class="text-[9px] text-slate-400" id="headline-count">0/120</span>
                                <button onclick="aiOptimize('headline')" class="text-[9px] text-indigo-500 hover:text-indigo-600 font-bold flex items-center gap-1">
                                    <i class="fas fa-magic"></i>AI Optimize
                                </button>
                            </div>
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">
                                <i class="fas fa-align-left mr-1"></i>Subheading
                            </label>
                            <input type="text" id="card-subhead" oninput="updateCoreLayer('subhead-layer', this.value)"
                                   class="w-full bg-slate-50 dark:bg-slate-800 border-2 border-slate-200 dark:border-slate-700 rounded-xl p-3 text-sm dark:text-white outline-none focus:border-red-500"
                                   placeholder="Optional subheading...">
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Category</label>
                                <select id="card-category" onchange="updateViewElement('view-category', this.value)"
                                        class="w-full bg-slate-50 dark:bg-slate-800 border-2 border-slate-200 dark:border-slate-700 rounded-xl p-3 text-xs dark:text-white outline-none cursor-pointer">
                                    <option value="NEWS">News</option>
                                    <option value="SPORTS">Sports</option>
                                    <option value="TECH">Technology</option>
                                    <option value="BUSINESS">Business</option>
                                    <option value="ENTERTAINMENT">Entertainment</option>
                                    <option value="BREAKING">Breaking</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Date</label>
                                <input type="text" id="card-date" oninput="updateViewElement('view-date', this.value)"
                                       value="<?php echo date('j F, Y'); ?>"
                                       class="w-full bg-slate-50 dark:bg-slate-800 border-2 border-slate-200 dark:border-slate-700 rounded-xl p-3 text-xs dark:text-white outline-none">
                            </div>
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">
                                <i class="fas fa-globe mr-1"></i>Website/Brand
                            </label>
                            <input type="text" id="card-website" oninput="updateViewElement('view-web', this.value.toUpperCase())"
                                   placeholder="www.yoursite.com"
                                   class="w-full bg-slate-50 dark:bg-slate-800 border-2 border-slate-200 dark:border-slate-700 rounded-xl p-3 text-xs dark:text-white outline-none">
                        </div>
                    </div>
                </div>

                <!-- Image Upload -->
                <div class="bg-white dark:bg-slate-900 rounded-3xl p-6 shadow-xl border-2 border-slate-100 dark:border-slate-800">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-image text-white text-sm"></i>
                        </div>
                        <h3 class="text-xs font-black text-slate-700 dark:text-slate-300 uppercase tracking-widest">Background</h3>
                    </div>
                    <div id="drop-zone" class="border-2 border-dashed border-slate-200 dark:border-slate-700 rounded-2xl p-8 text-center cursor-pointer hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all group">
                        <input type="file" id="image-upload" class="hidden" accept="image/*">
                        <i class="fas fa-cloud-upload-alt text-3xl text-slate-300 dark:text-slate-600 mb-3 group-hover:text-emerald-500 transition-colors"></i>
                        <p class="text-xs text-slate-400 font-bold">Click or drag image</p>
                        <p class="text-[9px] text-slate-400 mt-1">JPG, PNG, WEBP (Max 5MB)</p>
                    </div>
                    <div class="mt-3 grid grid-cols-2 gap-2">
                        <button onclick="openUnsplash()" class="text-[10px] font-bold text-slate-500 hover:text-emerald-600 transition-colors py-2 px-3 rounded-lg border border-slate-200 dark:border-slate-700 hover:border-emerald-500">
                            <i class="fas fa-search mr-1"></i>Unsplash
                        </button>
                        <button onclick="removeBackground()" class="text-[10px] font-bold text-slate-500 hover:text-red-600 transition-colors py-2 px-3 rounded-lg border border-slate-200 dark:border-slate-700 hover:border-red-500">
                            <i class="fas fa-trash mr-1"></i>Remove
                        </button>
                    </div>
                </div>

            </aside>

            <!-- Center - Canvas Area -->
            <main class="xl:col-span-6 space-y-6">

                <!-- Toolbar -->
                <div class="bg-white dark:bg-slate-900 rounded-2xl p-4 shadow-xl border-2 border-slate-100 dark:border-slate-800">
                    <div class="flex items-center justify-between flex-wrap gap-3">
                        <div class="flex items-center gap-2">
                            <button onclick="undo()" class="toolbar-btn" title="Undo">
                                <i class="fas fa-undo"></i>
                            </button>
                            <button onclick="redo()" class="toolbar-btn" title="Redo">
                                <i class="fas fa-redo"></i>
                            </button>
                            <div class="w-px h-6 bg-slate-200 dark:bg-slate-700 mx-1"></div>
                            <button onclick="addText()" class="toolbar-btn" title="Add Text">
                                <i class="fas fa-font"></i>
                            </button>
                            <button onclick="addShape('rect')" class="toolbar-btn" title="Add Shape">
                                <i class="fas fa-shapes"></i>
                            </button>
                            <button onclick="addSticker('🔥')" class="toolbar-btn" title="Add Sticker">
                                <i class="fas fa-smile"></i>
                            </button>
                            <div class="w-px h-6 bg-slate-200 dark:bg-slate-700 mx-1"></div>
                            <button onclick="toggleGrid()" class="toolbar-btn" id="grid-btn" title="Toggle Grid">
                                <i class="fas fa-th"></i>
                            </button>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-xs font-bold text-slate-400">Zoom:</span>
                            <button onclick="zoomOut()" class="toolbar-btn">
                                <i class="fas fa-search-minus"></i>
                            </button>
                            <span class="text-xs font-bold text-slate-600 dark:text-slate-300 w-12 text-center" id="zoom-level">100%</span>
                            <button onclick="zoomIn()" class="toolbar-btn">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Canvas Area -->
                <div class="relative">
                    <div id="canvas-wrapper" class="bg-slate-200 dark:bg-slate-800 rounded-3xl overflow-hidden shadow-2xl border-4 border-white dark:border-slate-900 relative" style="aspect-ratio: 1/1;">
                        <!-- Grid Overlay -->
                        <div id="grid-overlay" class="absolute inset-0 pointer-events-none hidden" style="background-image: repeating-linear-gradient(0deg, rgba(100, 116, 139, 0.1) 0px, transparent 1px, transparent 40px, rgba(100, 116, 139, 0.1) 41px), repeating-linear-gradient(90deg, rgba(100, 116, 139, 0.1) 0px, transparent 1px, transparent 40px, rgba(100, 116, 139, 0.1) 41px); background-size: 40px 40px;"></div>

                        <!-- Capture Area -->
                        <div id="capture-area" class="w-full h-full relative overflow-hidden" style="transform-origin: center;">
                            <div id="card-canvas" class="w-full h-full relative template-classic">
                                <!-- Background Image -->
                                <img id="bg-preview" class="absolute inset-0 w-full h-full object-cover" style="filter: brightness(1) contrast(1) saturate(1);">

                                <!-- Decorative Elements -->
                                <div id="template-decor" class="absolute inset-0 pointer-events-none">
                                    <!-- Sports Pro Template Decor -->
                                    <div class="pro-sports-decor hidden absolute inset-0">
                                        <div class="absolute top-8 left-0 z-20">
                                            <div class="bg-orange-600 text-white px-8 py-2 font-black transform -skew-x-12 -ml-2 text-xl shadow-lg border-r-4 border-white/20">
                                                <span class="pro-category-view">খেলাধুলা</span>
                                            </div>
                                        </div>
                                        <div class="absolute bottom-0 left-0 right-0 z-20">
                                            <div class="flex items-center gap-3 px-8 mb-4">
                                                <div class="w-1.5 h-8 bg-orange-600"></div>
                                                <div class="text-white font-bold text-2xl drop-shadow-md pro-date-view">৬ ফেব্রুয়ারি, ২০২৬</div>
                                            </div>
                                            <div class="h-1.5 bg-orange-600 w-full"></div>
                                            <div class="bg-[#0f0f0f] p-5 flex justify-between items-center px-8">
                                                <div class="flex items-center gap-3 text-white">
                                                    <div class="w-6 h-6 bg-orange-600 rounded flex items-center justify-center">
                                                        <i class="fas fa-chart-line text-[10px]"></i>
                                                    </div>
                                                    <span class="font-black tracking-[0.2em] uppercase text-sm pro-web-view">WWW.WEBSITE.COM</span>
                                                </div>
                                                <div class="bg-[#2a2a2a] text-white px-6 py-2 rounded-full flex items-center gap-4 text-sm font-bold border border-white/10">
                                                    <span>বিস্তারিত খবর</span>
                                                    <div class="w-3.5 h-3.5 bg-white rounded-full"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Gradient Overlay -->
                                <div id="gradient-overlay" class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>

                                <!-- Static Core Elements -->
                                <div class="absolute top-0 left-0 right-0 p-6 flex justify-between items-start z-10">
                                    <div id="live-badge" class="bg-red-600 text-white px-4 py-2 text-[10px] font-black rounded-xl uppercase flex items-center gap-2 shadow-lg">
                                        <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                                        <span id="view-category">NEWS</span>
                                        <span class="border-l border-white/30 pl-2 opacity-80" id="view-date"></span>
                                    </div>
                                    <div id="category-badge" class="bg-white/20 backdrop-blur-md text-white px-4 py-2 text-[10px] font-bold rounded-xl uppercase shadow-lg">
                                        BREAKING
                                    </div>
                                </div>

                                <div class="absolute bottom-0 left-0 right-0 p-8 z-10 text-white space-y-4 pointer-events-none">
                                    <div class="flex justify-between items-center border-t border-white/10 mt-6 pt-6">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-xs font-black shadow-lg">
                                                <i class="fas fa-newspaper"></i>
                                            </div>
                                            <span id="view-web" class="text-xs font-bold tracking-widest">WWW.YOURSITE.COM</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Dynamic Layer Container -->
                                <div id="layers-container" class="absolute inset-0"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Export Options -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                    <button onclick="downloadCard('png')" class="export-btn bg-gradient-to-r from-red-600 to-orange-600 hover:from-red-700 hover:to-orange-700">
                        <i class="fas fa-download mr-2"></i>PNG
                    </button>
                    <button onclick="downloadCard('jpg')" class="export-btn bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-700 hover:to-cyan-700">
                        <i class="fas fa-file-image mr-2"></i>JPG
                    </button>
                    <button onclick="downloadCard('webp')" class="export-btn bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700">
                        <i class="fas fa-bolt mr-2"></i>WebP
                    </button>
                    <button onclick="shareCard()" class="export-btn bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700">
                        <i class="fas fa-share-alt mr-2"></i>Share
                    </button>
                </div>

            </main>

            <!-- Right Sidebar - Advanced Controls -->
            <aside class="xl:col-span-3 space-y-6">

                <!-- Layers Panel -->
                <div class="bg-white dark:bg-slate-900 rounded-3xl p-6 shadow-xl border-2 border-slate-100 dark:border-slate-800">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-layer-group text-white text-sm"></i>
                        </div>
                        <h3 class="text-xs font-black text-slate-700 dark:text-slate-300 uppercase tracking-widest">Layers</h3>
                    </div>
                    <div id="layers-list" class="space-y-2 max-h-48 overflow-y-auto custom-scrollbar">
                        <!-- Layers injected here -->
                    </div>
                </div>

                <!-- Properties Panel (Dynamic) -->
                <div id="properties-panel" class="bg-white dark:bg-slate-900 rounded-3xl p-6 shadow-xl border-2 border-slate-100 dark:border-slate-800">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-sliders-h text-white text-sm"></i>
                        </div>
                        <h3 class="text-xs font-black text-slate-700 dark:text-slate-300 uppercase tracking-widest">Properties</h3>
                    </div>
                    <div id="property-editor" class="space-y-4">
                        <p class="text-xs text-slate-400 text-center py-8">Select a layer to edit properties</p>
                    </div>
                </div>

                <!-- Global Design Tools -->
                <div class="bg-white dark:bg-slate-900 rounded-3xl p-6 shadow-xl border-2 border-slate-100 dark:border-slate-800">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-palette text-white text-sm"></i>
                        </div>
                        <h3 class="text-xs font-black text-slate-700 dark:text-slate-300 uppercase tracking-widest">Global Design</h3>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-2 flex items-center justify-between">
                                <span><i class="fas fa-palette mr-1"></i>Brand Color</span>
                                <input type="color" id="brand-color" value="#dc2626" oninput="updateBrandColor()"
                                       class="w-8 h-8 rounded-lg cursor-pointer border-2 border-slate-200 dark:border-slate-700">
                            </label>
                        </div>
                    </div>
                </div>

            </aside>
        </div>
    </div>
</div>

<!-- External Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Baloo+Da+2:wght@400;500;600;700;800&family=Noto+Serif+Bengali:wght@300;400;500;600;700&family=Atma:wght@300;400;500;600;700&family=Galada&family=Mina:wght@400;700&family=Aneka+Bangla:wght@400;700&family=Righteous&family=Pacifico&family=Bebas+Neue&family=Inter:wght@400;700&family=Shrikhand&display=swap" rel="stylesheet">

<style>
/* Animations */
@keyframes pulse-glow { 0%, 100% { opacity: 0.5; } 50% { opacity: 1; } }
@keyframes gradient { 0%, 100% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } }
.animate-pulse-glow { animation: pulse-glow 2s ease-in-out infinite; }
.animate-gradient { background-size: 200% 200%; animation: gradient 5s ease infinite; }

/* UI Elements */
.tmp-btn {
    padding: 10px 12px; border-radius: 12px; font-size: 11px; font-weight: 700;
    color: #64748b; background: #f8fafc; border: 2px solid #e2e8f0;
    cursor: pointer; transition: all 0.2s; display: flex; align-items: center; justify-content: center;
}
.dark .tmp-btn { background: #1e293b; color: #94a3b8; border-color: #334155; }
.tmp-btn:hover { background: #fef2f2; border-color: #fecaca; color: #dc2626; }
.tmp-btn.active { background: linear-gradient(135deg, #dc2626, #ea580c); color: #fff; border-color: transparent; }

.toolbar-btn {
    width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;
    border-radius: 10px; border: 2px solid #e2e8f0; background: #fff;
    color: #64748b; cursor: pointer; transition: all 0.2s;
}
.dark .toolbar-btn { background: #1e293b; border-color: #334155; color: #94a3b8; }
.toolbar-btn:hover { border-color: #dc2626; color: #dc2626; }

.export-btn {
    padding: 14px 20px; border-radius: 16px; font-size: 13px; font-weight: 700;
    color: #fff; border: none; cursor: pointer; transition: all 0.3s;
}

/* Layer Styling */
.layer-element {
    position: absolute;
    min-width: 20px;
    min-height: 20px;
    outline: none;
    box-sizing: border-box;
}
.layer-element.selected {
    box-shadow: 0 0 0 2px #6366f1;
}

/* Template Specific Overrides */
.template-news #headline-layer { border-left: 8px solid #dc2626; padding-left: 15px; }
.template-breaking #headline-layer { background: #dc2626; color: #fff; padding: 5px 15px; transform: skewX(-5deg); }
.template-tech #headline-layer { font-family: 'Righteous', cursive; color: #06b6d4; }

/* Sports Pro Template Styles */
.template-sports-pro .pro-sports-decor { display: block !important; }
.template-sports-pro #gradient-overlay,
.template-sports-pro #live-badge,
.template-sports-pro #category-badge,
.template-sports-pro .absolute.bottom-0.p-8 { display: none !important; }
.template-sports-pro #card-canvas { background: #1a1a1a; }
.template-sports-pro #card-canvas:not(:has(#bg-preview[src])):not(:has(#bg-preview[src=""])):after {
    content: 'ছবি আপলোড করুন';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: rgba(255,255,255,0.1);
    font-size: 3rem;
    font-weight: 900;
    pointer-events: none;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // --- STATE ---
    let state = {
        zoom: 1,
        currentTemplate: 'classic',
        selectedLayer: null,
        layers: [
            {
                id: 'headline-layer',
                type: 'text',
                content: 'আপনার শিরোনাম এখানে',
                style: {
                    left: '10%',
                    top: '60%',
                    fontSize: '42px',
                    color: '#ffffff',
                    fontFamily: 'Hind Siliguri',
                    fontWeight: '900',
                    textAlign: 'left',
                    width: '80%',
                    zIndex: 10
                }
            },
            {
                id: 'subhead-layer',
                type: 'text',
                content: 'এখানে উপ-শিরোনাম লিখুন',
                style: {
                    left: '10%',
                    top: '78%',
                    fontSize: '18px',
                    color: '#ffffff',
                    fontFamily: 'Hind Siliguri',
                    fontWeight: '500',
                    width: '80%',
                    zIndex: 9
                }
            }
        ],
        history: [],
        historyIndex: -1
    };

    const layersContainer = document.getElementById('layers-container');
    const propertyEditor = document.getElementById('property-editor');
    const layersList = document.getElementById('layers-list');

    // --- INITIALIZATION ---
    function init() {
        initializeEventListeners();
        initDraggable();
        updatePreview();
        updateLayersPanel();
    }

    function initializeEventListeners() {
        // Background Image
        const imageInput = document.getElementById('image-upload');
        imageInput.onchange = (e) => {
            const file = e.target.files[0];
            if(file) {
                const reader = new FileReader();
                reader.onload = (event) => {
                    document.getElementById('bg-preview').src = event.target.result;
                    saveHistory();
                };
                reader.readAsDataURL(file);
            }
        };

        // Logo Upload
        const logoInput = document.getElementById('logo-upload');
        if(logoInput) {
            logoInput.onchange = (e) => {
                const file = e.target.files[0];
                if(file) {
                    const reader = new FileReader();
                    reader.onload = (event) => addLogo(event.target.result);
                    reader.readAsDataURL(file);
                }
            };
        }
    }

    // --- CORE LOGIC ---
    window.updatePreview = function() {
        layersContainer.innerHTML = '';
        state.layers.forEach(layer => {
            const el = document.createElement('div');
            el.id = layer.id;
            el.className = `layer-element absolute cursor-move select-none ${state.selectedLayer === layer.id ? 'selected' : ''}`;

            // Content
            if(layer.type === 'text' || layer.type === 'sticker') {
                el.textContent = layer.content;
            } else if(layer.type === 'image') {
                el.innerHTML = `<img src="${layer.content}" class="w-full h-full object-contain pointer-events-none">`;
            } else if(layer.type === 'shape') {
                el.style.backgroundColor = layer.style.backgroundColor || '#6366f1';
                el.style.borderRadius = layer.style.borderRadius || '0px';
            }

            // Styles
            Object.keys(layer.style).forEach(key => {
                el.style[key] = layer.style[key];
            });

            // Handle Transform for interact.js
            const x = parseFloat(layer.style.left) || 0;
            const y = parseFloat(layer.style.top) || 0;
            const isPercentX = typeof layer.style.left === 'string' && layer.style.left.endsWith('%');
            const isPercentY = typeof layer.style.top === 'string' && layer.style.top.endsWith('%');

            if(!isPercentX) { el.style.left = '0px'; el.setAttribute('data-x', x); }
            if(!isPercentY) { el.style.top = '0px'; el.setAttribute('data-y', y); }

            if(!isPercentX || !isPercentY) {
                const tx = isPercentX ? 0 : x;
                const ty = isPercentY ? 0 : y;
                el.style.transform = `translate(${tx}px, ${ty}px)`;
            }

            el.onclick = (e) => {
                e.stopPropagation();
                selectLayer(layer.id);
            };

            layersContainer.appendChild(el);
        });
    };

    window.selectLayer = function(id) {
        state.selectedLayer = id;
        updatePreview();
        updateLayersPanel();
        updatePropertyEditor();
    };

    function updateLayersPanel() {
        layersList.innerHTML = state.layers.slice().reverse().map(layer => `
            <div class="flex items-center justify-between p-2 bg-slate-50 dark:bg-slate-800 rounded-lg cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-700 ${state.selectedLayer === layer.id ? 'ring-2 ring-indigo-500' : ''}" onclick="selectLayer('${layer.id}')">
                <span class="text-[10px] font-bold truncate max-w-[120px]">${layer.id.includes('headline') ? 'Headline' : (layer.content || layer.type)}</span>
                <div class="flex gap-1">
                    <button onclick="event.stopPropagation(); removeLayer('${layer.id}')" class="p-1 text-red-500 hover:bg-red-50 rounded"><i class="fas fa-trash text-[10px]"></i></button>
                </div>
            </div>
        `).join('');
    }

    function updatePropertyEditor() {
        const layer = state.layers.find(l => l.id === state.selectedLayer);
        if(!layer) {
            propertyEditor.innerHTML = '<p class="text-xs text-slate-400 text-center py-8">Select a layer to edit properties</p>';
            return;
        }

        let controls = `
            <div>
                <label class="text-[10px] uppercase font-bold text-slate-400 mb-1 block">Z-Index</label>
                <input type="number" value="${layer.style.zIndex || 0}" class="w-full bg-slate-50 dark:bg-slate-800 rounded-lg p-2 text-xs" oninput="updateStyle('${layer.id}', 'zIndex', this.value)">
            </div>
        `;

        if(layer.type === 'text' || layer.type === 'sticker') {
            controls += `
                <div>
                    <label class="text-[10px] uppercase font-bold text-slate-400 mb-1 block">Content</label>
                    <textarea class="w-full bg-slate-50 dark:bg-slate-800 border-none rounded-lg p-2 text-xs" oninput="updateContent('${layer.id}', this.value)">${layer.content}</textarea>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <label class="text-[10px] uppercase font-bold text-slate-400 mb-1 block">Size</label>
                        <input type="text" value="${layer.style.fontSize}" class="w-full bg-slate-50 dark:bg-slate-800 rounded-lg p-2 text-xs" oninput="updateStyle('${layer.id}', 'fontSize', this.value)">
                    </div>
                    <div>
                        <label class="text-[10px] uppercase font-bold text-slate-400 mb-1 block">Color</label>
                        <input type="color" value="${layer.style.color}" class="w-full h-8 cursor-pointer" oninput="updateStyle('${layer.id}', 'color', this.value)">
                    </div>
                </div>
                <div>
                    <label class="text-[10px] uppercase font-bold text-slate-400 mb-1 block">Font</label>
                    <select class="w-full bg-slate-50 dark:bg-slate-800 rounded-lg p-2 text-xs" onchange="updateStyle('${layer.id}', 'fontFamily', this.value)">
                        <option value="Hind Siliguri" ${layer.style.fontFamily.includes('Hind') ? 'selected' : ''}>Hind Siliguri</option>
                        <option value="Baloo Da 2" ${layer.style.fontFamily.includes('Baloo') ? 'selected' : ''}>Baloo Da 2</option>
                        <option value="Inter" ${layer.style.fontFamily.includes('Inter') ? 'selected' : ''}>Inter</option>
                        <option value="Righteous" ${layer.style.fontFamily.includes('Righteous') ? 'selected' : ''}>Righteous</option>
                    </select>
                </div>
            `;
        } else if(layer.type === 'shape') {
            controls += `
                <div>
                    <label class="text-[10px] uppercase font-bold text-slate-400 mb-1 block">Color</label>
                    <input type="color" value="${layer.style.backgroundColor}" class="w-full h-8 cursor-pointer" oninput="updateStyle('${layer.id}', 'backgroundColor', this.value)">
                </div>
                <div>
                    <label class="text-[10px] uppercase font-bold text-slate-400 mb-1 block">Radius</label>
                    <input type="text" value="${layer.style.borderRadius}" class="w-full bg-slate-50 dark:bg-slate-800 rounded-lg p-2 text-xs" oninput="updateStyle('${layer.id}', 'borderRadius', this.value)">
                </div>
            `;
        }

        propertyEditor.innerHTML = controls;
    }

    window.updateContent = function(id, val) {
        const layer = state.layers.find(l => l.id === id);
        if(layer) {
            layer.content = val;
            const el = document.getElementById(id);
            if(el) el.textContent = val;
            // Also sync back to inputs if it's headline
            if(id === 'headline-layer') document.getElementById('card-headline').value = val;
            if(id === 'subhead-layer') document.getElementById('card-subhead').value = val;
        }
    };

    window.updateStyle = function(id, key, val) {
        const layer = state.layers.find(l => l.id === id);
        if(layer) {
            layer.style[key] = val;
            const el = document.getElementById(id);
            if(el) el.style[key] = val;
        }
    };

    window.updateCoreLayer = function(id, val) {
        updateContent(id, val);
    };

    window.updateViewElement = function(id, val) {
        const el = document.getElementById(id);
        if(el) el.textContent = val;

        // Sync Pro Sports elements
        if(id === 'view-category') document.querySelectorAll('.pro-category-view').forEach(e => e.textContent = val);
        if(id === 'view-date') document.querySelectorAll('.pro-date-view').forEach(e => e.textContent = val);
        if(id === 'view-web') document.querySelectorAll('.pro-web-view').forEach(e => e.textContent = val);
    };

    // --- TOOLS ---
    window.addText = function() {
        const id = 'text-' + Date.now();
        state.layers.push({
            id: id,
            type: 'text',
            content: 'নতুন টেক্সট',
            style: { left: '100px', top: '100px', fontSize: '24px', color: '#ffffff', fontFamily: 'Hind Siliguri', zIndex: 20 }
        });
        selectLayer(id);
    };

    window.addShape = function(type) {
        const id = 'shape-' + Date.now();
        state.layers.push({
            id: id,
            type: 'shape',
            style: { left: '100px', top: '100px', width: '100px', height: '100px', backgroundColor: '#6366f1', borderRadius: type === 'circle' ? '50%' : '0px', zIndex: 5 }
        });
        selectLayer(id);
    };

    window.addSticker = function(emoji) {
        const id = 'sticker-' + Date.now();
        state.layers.push({
            id: id,
            type: 'sticker',
            content: emoji,
            style: { left: '150px', top: '150px', fontSize: '64px', zIndex: 25 }
        });
        selectLayer(id);
    };

    window.removeLayer = function(id) {
        if(id.includes('layer') && (id.includes('headline') || id.includes('subhead'))) return alert('Core layers cannot be deleted');
        state.layers = state.layers.filter(l => l.id !== id);
        if(state.selectedLayer === id) state.selectedLayer = null;
        updatePreview();
        updateLayersPanel();
        updatePropertyEditor();
    };

    // --- INTERACT.JS ---
    function initDraggable() {
        interact('.layer-element').draggable({
            inertia: true,
            listeners: {
                move: dragMoveListener,
                end: onActionEnd
            }
        }).resizable({
            edges: { left: true, right: true, bottom: true, top: true },
            listeners: {
                move: resizeMoveListener,
                end: onActionEnd
            }
        });
    }

    function dragMoveListener(event) {
        var target = event.target;
        var x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx;
        var y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;
        target.style.transform = `translate(${x}px, ${y}px)`;
        target.setAttribute('data-x', x);
        target.setAttribute('data-y', y);
    }

    function resizeMoveListener(event) {
        var target = event.target;
        var x = (parseFloat(target.getAttribute('data-x')) || 0);
        var y = (parseFloat(target.getAttribute('data-y')) || 0);
        target.style.width = event.rect.width + 'px';
        target.style.height = event.rect.height + 'px';
        x += event.deltaRect.left;
        y += event.deltaRect.top;
        target.style.transform = `translate(${x}px, ${y}px)`;
        target.setAttribute('data-x', x);
        target.setAttribute('data-y', y);
    }

    function onActionEnd(event) {
        const target = event.target;
        const layer = state.layers.find(l => l.id === target.id);
        if(layer) {
            const rect = target.getBoundingClientRect();
            const parentRect = document.getElementById('canvas-wrapper').getBoundingClientRect();
            const scale = state.zoom;

            layer.style.left = ((rect.left - parentRect.left) / scale) + 'px';
            layer.style.top = ((rect.top - parentRect.top) / scale) + 'px';
            layer.style.width = (rect.width / scale) + 'px';
            layer.style.height = (rect.height / scale) + 'px';
            updatePreview();
        }
    }

    // --- TEMPLATES ---
    window.changeTemplate = function(name) {
        state.currentTemplate = name;
        document.getElementById('card-canvas').className = 'w-full h-full relative template-' + name;
        document.querySelectorAll('.tmp-btn').forEach(b => b.classList.toggle('active', b.dataset.template === name));

        // Template specific color logic
        if(name === 'breaking') updateBrandColor('#dc2626');
        if(name === 'tech') updateBrandColor('#06b6d4');
        if(name === 'nature') updateBrandColor('#16a34a');
        if(name === 'sports-pro') {
            updateBrandColor('#ea580c');
            // Set default category for Sports Pro if it's currently generic
            const catSelect = document.getElementById('card-category');
            if(catSelect.value === 'NEWS') {
                catSelect.value = 'SPORTS';
                updateViewElement('view-category', 'SPORTS');
            }
        }
    };

    window.updateBrandColor = function(color) {
        const c = color || document.getElementById('brand-color').value;
        document.querySelectorAll('.bg-red-600').forEach(el => el.style.backgroundColor = c);
        document.querySelectorAll('.border-red-600').forEach(el => el.style.borderColor = c);
    };

    // --- EXPORT ---
    window.downloadCard = async function(format) {
        const capture = document.getElementById('capture-area');
        const canvas = await html2canvas(capture, { scale: 3, useCORS: true });
        const link = document.createElement('a');
        link.download = `PhotoCard-${Date.now()}.${format}`;
        link.href = canvas.toDataURL(`image/${format === 'jpg' ? 'jpeg' : format}`);
        link.click();
    };

    // --- ZOOM ---
    window.zoomIn = () => { state.zoom += 0.1; applyZoom(); };
    window.zoomOut = () => { state.zoom -= 0.1; applyZoom(); };
    function applyZoom() {
        document.getElementById('capture-area').style.transform = `scale(${state.zoom})`;
        document.getElementById('zoom-level').textContent = Math.round(state.zoom * 100) + '%';
    }

    window.toggleGrid = () => {
        const grid = document.getElementById('grid-overlay');
        grid.classList.toggle('hidden');
        document.getElementById('grid-btn').classList.toggle('active');
    };

    // --- AI ---
    window.aiOptimize = async function(type) {
        const input = document.getElementById('card-headline');
        if(!input.value) return;
        const res = await callAI(`Rewrite this headline to be more viral and catchy in the same language: "${input.value}"`);
        if(res) {
            input.value = res.replace(/[""]/g, '');
            updateCoreLayer('headline-layer', input.value);
        }
    };

    async function callAI(prompt) {
        const formData = new FormData();
        formData.append('action', 'qalbe_ai_chat');
        formData.append('message', prompt);
        formData.append('security', '<?php echo wp_create_nonce("qalbe_ai_nonce"); ?>');
        const res = await fetch('<?php echo admin_url("admin-ajax.php"); ?>', { method: 'POST', body: formData });
        const data = await res.json();
        return data.success ? data.data : null;
    }

    init();
})();
</script>

<?php get_footer(); ?>
