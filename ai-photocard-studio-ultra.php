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
                            <textarea id="card-headline" rows="3" oninput="updatePreview()"
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
                            <input type="text" id="card-subhead" oninput="updatePreview()"
                                   class="w-full bg-slate-50 dark:bg-slate-800 border-2 border-slate-200 dark:border-slate-700 rounded-xl p-3 text-sm dark:text-white outline-none focus:border-red-500"
                                   placeholder="Optional subheading...">
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">Category</label>
                                <select id="card-category" onchange="updatePreview()"
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
                                <input type="text" id="card-date" oninput="updatePreview()"
                                       value="<?php echo date('j F, Y'); ?>"
                                       class="w-full bg-slate-50 dark:bg-slate-800 border-2 border-slate-200 dark:border-slate-700 rounded-xl p-3 text-xs dark:text-white outline-none">
                            </div>
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-1">
                                <i class="fas fa-globe mr-1"></i>Website/Brand
                            </label>
                            <input type="text" id="card-website" oninput="updatePreview()"
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

                <!-- Branding & Logo -->
                <div class="bg-white dark:bg-slate-900 rounded-3xl p-6 shadow-xl border-2 border-slate-100 dark:border-slate-800">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-copyright text-white text-sm"></i>
                        </div>
                        <h3 class="text-xs font-black text-slate-700 dark:text-slate-300 uppercase tracking-widest">Logo & Branding</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="border-2 border-dashed border-slate-200 dark:border-slate-700 rounded-xl p-4 text-center cursor-pointer hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all" onclick="document.getElementById('logo-upload').click()">
                            <input type="file" id="logo-upload" class="hidden" accept="image/*" onchange="handleLogoUpload(event)">
                            <i class="fas fa-upload text-xl text-slate-300 mb-2"></i>
                            <p class="text-[10px] font-bold text-slate-400">Upload Brand Logo</p>
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-2">Logo Scale: <span id="logo-scale-val">100</span>%</label>
                            <input type="range" id="logo-scale" min="10" max="200" value="100" oninput="updateLogoStyle()" class="w-full accent-blue-600">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-2">Logo Opacity: <span id="logo-opacity-val">100</span>%</label>
                            <input type="range" id="logo-opacity" min="0" max="100" value="100" oninput="updateLogoStyle()" class="w-full accent-blue-600">
                        </div>
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
                            <button onclick="addShape()" class="toolbar-btn" title="Add Shape">
                                <i class="fas fa-shapes"></i>
                            </button>
                            <button onclick="addSticker()" class="toolbar-btn" title="Add Sticker">
                                <i class="fas fa-smile"></i>
                            </button>
                            <div class="w-px h-6 bg-slate-200 dark:bg-slate-700 mx-1"></div>
                            <button onclick="toggleGrid()" class="toolbar-btn" id="grid-btn" title="Toggle Grid">
                                <i class="fas fa-th"></i>
                            </button>
                            <button onclick="toggleRuler()" class="toolbar-btn" id="ruler-btn" title="Toggle Ruler">
                                <i class="fas fa-ruler-combined"></i>
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
                            <button onclick="resetZoom()" class="toolbar-btn">
                                <i class="fas fa-expand"></i>
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
                            <div id="card-canvas" class="w-full h-full relative">
                                <!-- Background Image -->
                                <img id="bg-preview" class="absolute inset-0 w-full h-full object-cover" style="filter: brightness(1) contrast(1) saturate(1);">

                                <!-- Gradient Overlay -->
                                <div id="gradient-overlay" class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>

                                <!-- Top Bar -->
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

                                <!-- Main Content -->
                                <div class="absolute bottom-0 left-0 right-0 p-8 z-10 text-white space-y-4">
                                    <!-- Logo Overlay -->
                                    <div id="logo-layer" class="layer absolute top-[-300px] left-0 hidden" style="width: 100px; height: auto;">
                                        <img id="logo-preview" src="" class="w-full h-auto">
                                    </div>

                                    <h2 id="view-headline" class="text-4xl font-black leading-tight drop-shadow-2xl layer" style="text-shadow: 0 4px 12px rgba(0,0,0,0.8);">
                                        Your Headline Goes Here
                                    </h2>
                                    <p id="view-subhead" class="text-sm font-medium opacity-90 border-l-4 border-red-600 pl-4 hidden drop-shadow-lg layer"></p>

                                    <!-- Bottom Bar -->
                                    <div class="pt-6 flex justify-between items-center border-t border-white/10 mt-6">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-xs font-black shadow-lg">
                                                <i class="fas fa-newspaper"></i>
                                            </div>
                                            <span id="view-web" class="text-xs font-bold tracking-widest">WWW.YOURSITE.COM</span>
                                        </div>
                                        <div class="text-[8px] font-bold uppercase opacity-50 tracking-widest">PhotoCard Studio</div>
                                    </div>
                                </div>
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
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-layer-group text-white text-sm"></i>
                            </div>
                            <h3 class="text-xs font-black text-slate-700 dark:text-slate-300 uppercase tracking-widest">Layers</h3>
                        </div>
                        <button onclick="addLayer()" class="text-xs font-bold text-purple-600 hover:text-purple-700">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <div id="layers-list" class="space-y-2 max-h-48 overflow-y-auto custom-scrollbar">
                        <div class="layer-item active">
                            <i class="fas fa-image mr-2"></i>
                            <span>Background</span>
                            <div class="ml-auto flex gap-1">
                                <button class="layer-action"><i class="fas fa-eye"></i></button>
                                <button class="layer-action"><i class="fas fa-lock"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Design Tools -->
                <div class="bg-white dark:bg-slate-900 rounded-3xl p-6 shadow-xl border-2 border-slate-100 dark:border-slate-800">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-palette text-white text-sm"></i>
                        </div>
                        <h3 class="text-xs font-black text-slate-700 dark:text-slate-300 uppercase tracking-widest">Design</h3>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-2 flex items-center justify-between">
                                <span><i class="fas fa-palette mr-1"></i>Brand Color</span>
                                <input type="color" id="brand-color" value="#dc2626" oninput="updateBrandColor()"
                                       class="w-8 h-8 rounded-lg cursor-pointer border-2 border-slate-200 dark:border-slate-700">
                            </label>
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-2">
                                <i class="fas fa-text-height mr-1"></i>Font Size: <span id="font-size-val">36</span>px
                            </label>
                            <input type="range" id="font-size" min="20" max="80" value="36" oninput="updateFontSize()"
                                   class="w-full accent-red-600">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-2">
                                <i class="fas fa-font mr-1"></i>Font Family
                            </label>
                            <select id="font-family" onchange="updateFontFamily()"
                                    class="w-full bg-slate-50 dark:bg-slate-800 border-2 border-slate-200 dark:border-slate-700 rounded-xl p-2 text-xs dark:text-white outline-none cursor-pointer">
                                <option value="'Inter', sans-serif">Inter</option>
                                <option value="'Poppins', sans-serif">Poppins</option>
                                <option value="'Roboto', sans-serif">Roboto</option>
                                <option value="'Montserrat', sans-serif">Montserrat</option>
                                <option value="'Playfair Display', serif">Playfair</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Filters & Effects -->
                <div class="bg-white dark:bg-slate-900 rounded-3xl p-6 shadow-xl border-2 border-slate-100 dark:border-slate-800">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center">
                            <i class="fas fa-magic text-white text-sm"></i>
                        </div>
                        <h3 class="text-xs font-black text-slate-700 dark:text-slate-300 uppercase tracking-widest">Filters</h3>
                    </div>
                    <div class="space-y-3">
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-2">
                                <i class="fas fa-sun mr-1"></i>Brightness: <span id="brightness-val">100</span>%
                            </label>
                            <input type="range" id="brightness" min="0" max="200" value="100" oninput="applyFilters()"
                                   class="w-full accent-amber-500">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-2">
                                <i class="fas fa-adjust mr-1"></i>Contrast: <span id="contrast-val">100</span>%
                            </label>
                            <input type="range" id="contrast" min="0" max="200" value="100" oninput="applyFilters()"
                                   class="w-full accent-slate-500">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-2">
                                <i class="fas fa-tint mr-1"></i>Saturation: <span id="saturation-val">100</span>%
                            </label>
                            <input type="range" id="saturation" min="0" max="200" value="100" oninput="applyFilters()"
                                   class="w-full accent-blue-500">
                        </div>
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase mb-2">
                                <i class="fas fa-circle-notch mr-1"></i>Blur: <span id="blur-val">0</span>px
                            </label>
                            <input type="range" id="blur" min="0" max="20" value="0" oninput="applyFilters()"
                                   class="w-full accent-purple-500">
                        </div>
                        <button onclick="resetFilters()" class="w-full text-xs font-bold text-slate-500 hover:text-red-600 transition-colors py-2 px-3 rounded-lg border border-slate-200 dark:border-slate-700">
                            <i class="fas fa-undo mr-1"></i>Reset Filters
                        </button>
                    </div>
                </div>

                <!-- AI Assistant -->
                <div class="bg-gradient-to-br from-slate-900 to-black rounded-3xl p-6 text-white shadow-xl relative overflow-hidden">
                    <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-indigo-500/10 rounded-full blur-[60px]"></div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-xl flex items-center justify-center animate-pulse-glow">
                                <i class="fas fa-brain text-sm"></i>
                            </div>
                            <div>
                                <h4 class="text-xs font-black uppercase tracking-widest">AI Studio</h4>
                                <div class="flex items-center gap-1 mt-0.5">
                                    <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full animate-ping"></span>
                                    <span class="text-[8px] text-emerald-400 uppercase font-bold">Active</span>
                                </div>
                            </div>
                        </div>
                        <div id="ai-suggestion" class="text-xs text-slate-400 italic mb-4 leading-relaxed">
                            Ready to enhance your design with AI-powered suggestions!
                        </div>
                        <div class="space-y-2">
                            <button onclick="aiGenerateHeadline()" class="w-full py-2 px-3 bg-white/10 hover:bg-white/20 rounded-xl text-[10px] font-bold transition-all flex items-center justify-center gap-2">
                                <i class="fas fa-lightbulb"></i>Generate Headline
                            </button>
                            <button onclick="aiSuggestColors()" class="w-full py-2 px-3 bg-white/10 hover:bg-white/20 rounded-xl text-[10px] font-bold transition-all flex items-center justify-center gap-2">
                                <i class="fas fa-palette"></i>Color Palette
                            </button>
                            <button onclick="aiOptimizeLayout()" class="w-full py-2 px-3 bg-white/10 hover:bg-white/20 rounded-xl text-[10px] font-bold transition-all flex items-center justify-center gap-2">
                                <i class="fas fa-magic"></i>Optimize Layout
                            </button>
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
<link href="https://fonts.googleapis.com/css2?family=Aneka+Bangla:wght@400;700&family=Hind+Siliguri:wght@300;400;500;600;700&family=Mina:wght@400;700&family=Noto+Sans+Bengali:wght@100..900&family=Noto+Serif+Bengali:wght@100..900&family=Tiro+Bangla&family=Galada&family=Atma:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
/* Animations */
@keyframes pulse-glow { 0%, 100% { opacity: 0.5; } 50% { opacity: 1; } }
@keyframes gradient { 0%, 100% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } }

.animate-pulse-glow { animation: pulse-glow 2s ease-in-out infinite; }
.animate-gradient { background-size: 200% 200%; animation: gradient 5s ease infinite; }

/* Template Buttons */
.tmp-btn {
    padding: 10px 12px; border-radius: 12px; font-size: 11px; font-weight: 700;
    color: #64748b; background: #f8fafc; border: 2px solid #e2e8f0;
    cursor: pointer; transition: all 0.2s; display: flex; align-items: center; justify-content: center;
}
.dark .tmp-btn { background: #1e293b; color: #94a3b8; border-color: #334155; }
.tmp-btn:hover { background: #fee2e2; border-color: #fecaca; color: #dc2626; }
.dark .tmp-btn:hover { background: #7f1d1d; border-color: #991b1b; }
.tmp-btn.active {
    background: linear-gradient(135deg, #dc2626, #ea580c);
    color: #fff; border-color: transparent; box-shadow: 0 4px 12px rgba(220, 38, 38, 0.4);
}

/* Toolbar Buttons */
.toolbar-btn {
    width: 36px; height: 36px; display: flex; align-items: center; justify-content: center;
    border-radius: 10px; border: 2px solid #e2e8f0; background: #fff;
    color: #64748b; cursor: pointer; transition: all 0.2s; font-size: 14px;
}
.dark .toolbar-btn { background: #1e293b; border-color: #334155; color: #94a3b8; }
.toolbar-btn:hover { border-color: #dc2626; color: #dc2626; background: #fef2f2; }
.dark .toolbar-btn:hover { border-color: #dc2626; background: #7f1d1d; }
.toolbar-btn.active { background: #dc2626; color: #fff; border-color: #dc2626; }

/* Export Buttons */
.export-btn {
    padding: 14px 20px; border-radius: 16px; font-size: 13px; font-weight: 700;
    color: #fff; border: none; cursor: pointer; transition: all 0.3s;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center;
}
.export-btn:active { transform: scale(0.95); }

/* Layers */
.layer-item {
    padding: 10px 12px; border-radius: 10px; background: #f8fafc;
    border: 2px solid #e2e8f0; display: flex; align-items: center;
    font-size: 11px; font-weight: 600; color: #475569; cursor: pointer; transition: all 0.2s;
}
.dark .layer-item { background: #1e293b; border-color: #334155; color: #94a3b8; }
.layer-item:hover { border-color: #dc2626; }
.layer-item.active { background: #dc2626; color: #fff; border-color: #dc2626; }
.layer-action {
    width: 24px; height: 24px; display: flex; align-items: center; justify-content: center;
    border-radius: 6px; background: rgba(0,0,0,0.1); cursor: pointer; transition: all 0.2s; font-size: 10px;
}
.layer-action:hover { background: rgba(0,0,0,0.2); }

/* Custom Scrollbar */
.custom-scrollbar::-webkit-scrollbar { width: 4px; }
.custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
.custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(220, 38, 38, 0.3); border-radius: 10px; }
.custom-scrollbar::-webkit-scrollbar-thumb:hover { background: rgba(220, 38, 38, 0.5); }
</style>

<script>
(function() {
'use strict';

// ==================== STATE ====================
let state = {
    zoom: 1,
    currentTemplate: 'classic',
    filters: { brightness: 100, contrast: 100, saturation: 100, blur: 0 },
    history: [],
    historyIndex: -1,
    gridVisible: false,
    rulerVisible: false
};

// ==================== INITIALIZATION ====================
document.addEventListener('DOMContentLoaded', function() {
    initializeEventListeners();
    initDraggable();
    updatePreview();
    updateLayersPanel();

    // Character counter
    document.getElementById('card-headline').addEventListener('input', function() {
        const count = this.value.length;
        document.getElementById('headline-count').textContent = count + '/120';
    });
});

function initializeEventListeners() {
    // Image upload
    const dropZone = document.getElementById('drop-zone');
    const imageInput = document.getElementById('image-upload');

    dropZone.onclick = () => imageInput.click();

    imageInput.onchange = (e) => {
        const file = e.target.files[0];
        if(file) {
            if(file.size > 5 * 1024 * 1024) {
                alert('File size must be less than 5MB');
                return;
            }
            const reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById('bg-preview').src = event.target.result;
                saveHistory();
            };
            reader.readAsDataURL(file);
        }
    };

    // Drag & drop
    dropZone.ondragover = (e) => {
        e.preventDefault();
        dropZone.classList.add('border-emerald-500');
    };

    dropZone.ondragleave = () => {
        dropZone.classList.remove('border-emerald-500');
    };

    dropZone.ondrop = (e) => {
        e.preventDefault();
        dropZone.classList.remove('border-emerald-500');
        const file = e.dataTransfer.files[0];
        if(file && file.type.startsWith('image/')) {
            imageInput.files = e.dataTransfer.files;
            imageInput.dispatchEvent(new Event('change'));
        }
    };
}

// ==================== TEMPLATE SWITCHING ====================
window.changeTemplate = function(template) {
    state.currentTemplate = template;

    // Update button states
    document.querySelectorAll('.tmp-btn').forEach(btn => {
        btn.classList.remove('active');
        if(btn.dataset.template === template) {
            btn.classList.add('active');
        }
    });

    // Apply template styles
    const overlay = document.getElementById('gradient-overlay');
    const headline = document.getElementById('view-headline');

    // Ensure headline is always white as requested
    headline.style.color = '#ffffff';

    switch(template) {
        case 'modern':
            overlay.style.background = 'linear-gradient(135deg, rgba(99, 102, 241, 0.8), rgba(168, 85, 247, 0.8))';
            break;
        case 'minimal':
            overlay.style.background = 'linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent)';
            break;
        case 'cyber':
            overlay.style.background = 'linear-gradient(to top, rgba(15, 23, 42, 0.9), rgba(236, 72, 153, 0.3))';
            break;
        case 'luxury':
            overlay.style.background = 'linear-gradient(to top, rgba(20, 20, 20, 0.9), rgba(212, 175, 55, 0.2))';
            break;
        case 'vintage':
            overlay.style.background = 'linear-gradient(to top, rgba(67, 56, 20, 0.8), rgba(67, 56, 20, 0.3))';
            overlay.style.mixBlendMode = 'multiply';
            break;
        case 'neon':
            overlay.style.background = 'linear-gradient(45deg, rgba(0, 255, 255, 0.3), rgba(255, 0, 255, 0.3), rgba(0, 0, 0, 0.8))';
            break;
        case 'editorial':
            overlay.style.background = 'linear-gradient(to right, rgba(0, 0, 0, 0.9) 30%, transparent)';
            break;
        case 'abstract':
            overlay.style.background = 'radial-gradient(circle at bottom, rgba(79, 70, 229, 0.8), transparent)';
            break;
        case 'gaming':
            overlay.style.background = 'linear-gradient(to top, #1a1a1a 10%, rgba(220, 38, 38, 0.4))';
            break;
        case 'nature':
            overlay.style.background = 'linear-gradient(to top, rgba(6, 78, 59, 0.9), transparent)';
            break;
        default:
            overlay.style.background = 'linear-gradient(to top, black, rgba(0, 0, 0, 0.2), transparent)';
            overlay.style.mixBlendMode = 'normal';
    }

    saveHistory();
};

// ==================== PREVIEW UPDATE ====================
window.updatePreview = function() {
    const headline = document.getElementById('card-headline').value || 'Your Headline Goes Here';
    const subhead = document.getElementById('card-subhead').value;
    const category = document.getElementById('card-category').value;
    const date = document.getElementById('card-date').value;
    const website = document.getElementById('card-website').value || 'WWW.YOURSITE.COM';

    document.getElementById('view-headline').textContent = headline;
    document.getElementById('view-category').textContent = category;
    document.getElementById('view-date').textContent = date;
    document.getElementById('view-web').textContent = website.toUpperCase();

    const subheadEl = document.getElementById('view-subhead');
    if(subhead) {
        subheadEl.textContent = subhead;
        subheadEl.classList.remove('hidden');
    } else {
        subheadEl.classList.add('hidden');
    }
};

// ==================== BRAND COLOR ====================
window.updateBrandColor = function() {
    const color = document.getElementById('brand-color').value;
    document.querySelectorAll('.bg-red-600').forEach(el => {
        el.style.backgroundColor = color;
    });
    document.querySelectorAll('.border-red-600').forEach(el => {
        el.style.borderColor = color;
    });
    saveHistory();
};

// ==================== FONT SIZE ====================
window.updateFontSize = function() {
    const size = document.getElementById('font-size').value;
    document.getElementById('font-size-val').textContent = size;
    document.getElementById('view-headline').style.fontSize = size + 'px';
    saveHistory();
};

// ==================== FONT FAMILY ====================
window.updateFontFamily = function() {
    const family = document.getElementById('font-family').value;
    document.getElementById('view-headline').style.fontFamily = family;
    saveHistory();
};

// ==================== FILTERS ====================
window.applyFilters = function() {
    const brightness = document.getElementById('brightness').value;
    const contrast = document.getElementById('contrast').value;
    const saturation = document.getElementById('saturation').value;
    const blur = document.getElementById('blur').value;

    document.getElementById('brightness-val').textContent = brightness;
    document.getElementById('contrast-val').textContent = contrast;
    document.getElementById('saturation-val').textContent = saturation;
    document.getElementById('blur-val').textContent = blur;

    const filter = `brightness(${brightness}%) contrast(${contrast}%) saturate(${saturation}%) blur(${blur}px)`;
    document.getElementById('bg-preview').style.filter = filter;

    state.filters = { brightness, contrast, saturation, blur };
    saveHistory();
};

window.resetFilters = function() {
    document.getElementById('brightness').value = 100;
    document.getElementById('contrast').value = 100;
    document.getElementById('saturation').value = 100;
    document.getElementById('blur').value = 0;
    applyFilters();
};

// ==================== ZOOM ====================
window.zoomIn = function() {
    state.zoom = Math.min(state.zoom + 0.1, 2);
    applyZoom();
};

window.zoomOut = function() {
    state.zoom = Math.max(state.zoom - 0.1, 0.5);
    applyZoom();
};

window.resetZoom = function() {
    state.zoom = 1;
    applyZoom();
};

function applyZoom() {
    const canvas = document.getElementById('capture-area');
    canvas.style.transform = `scale(${state.zoom})`;
    document.getElementById('zoom-level').textContent = Math.round(state.zoom * 100) + '%';
}

// ==================== DRAGGABLE & RESIZABLE ====================
function initDraggable() {
    interact('.layer')
        .draggable({
            inertia: true,
            modifiers: [
                interact.modifiers.restrictRect({
                    restriction: 'parent',
                    endOnly: true
                })
            ],
            autoScroll: true,
            listeners: {
                move: dragMoveListener
            }
        })
        .resizable({
            edges: { left: true, right: true, bottom: true, top: true },
            listeners: {
                move (event) {
                    var target = event.target
                    var x = (parseFloat(target.getAttribute('data-x')) || 0)
                    var y = (parseFloat(target.getAttribute('data-y')) || 0)

                    target.style.width = event.rect.width + 'px'
                    target.style.height = event.rect.height + 'px'

                    x += event.deltaRect.left
                    y += event.deltaRect.top

                    target.style.transform = 'translate(' + x + 'px, ' + y + 'px)'

                    target.setAttribute('data-x', x)
                    target.setAttribute('data-y', y)
                }
            },
            modifiers: [
                interact.modifiers.restrictEdges({
                    restriction: 'parent'
                }),
                interact.modifiers.restrictSize({
                    min: { width: 50, height: 20 }
                })
            ],
            inertia: true
        });
}

function dragMoveListener (event) {
    var target = event.target
    var x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx
    var y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy

    target.style.transform = 'translate(' + x + 'px, ' + y + 'px)'

    target.setAttribute('data-x', x)
    target.setAttribute('data-y', y)
}

// ==================== GRID & RULER ====================
window.toggleGrid = function() {
    state.gridVisible = !state.gridVisible;
    document.getElementById('grid-overlay').classList.toggle('hidden', !state.gridVisible);
    document.getElementById('grid-btn').classList.toggle('active', state.gridVisible);
};

window.toggleRuler = function() {
    state.rulerVisible = !state.rulerVisible;
    document.getElementById('ruler-btn').classList.toggle('active', state.rulerVisible);
    // Ruler implementation can be added
};

// ==================== HISTORY (UNDO/REDO) ====================
function saveHistory() {
    // Simple history implementation
    state.historyIndex++;
    state.history[state.historyIndex] = {
        template: state.currentTemplate,
        filters: {...state.filters}
    };
}

window.undo = function() {
    if(state.historyIndex > 0) {
        state.historyIndex--;
        // Restore state
    }
};

window.redo = function() {
    if(state.historyIndex < state.history.length - 1) {
        state.historyIndex++;
        // Restore state
    }
};

// ==================== AI FEATURES ====================
window.aiOptimize = async function(type) {
    const headline = document.getElementById('card-headline').value;
    if(!headline) {
        alert('Please enter a headline first!');
        return;
    }

    const prompt = `Rewrite this headline to be more engaging and viral: "${headline}". Return only the improved headline in the same language.`;
    const result = await callAI(prompt);

    if(result) {
        document.getElementById('card-headline').value = result.replace(/["""]/g, '');
        updatePreview();
    }
};

window.aiGenerateHeadline = async function() {
    const category = document.getElementById('card-category').value;
    const prompt = `Generate a catchy ${category} news headline. Return only the headline.`;
    const result = await callAI(prompt);

    if(result) {
        document.getElementById('card-headline').value = result;
        updatePreview();
    }
};

window.aiSuggestColors = async function() {
    const headline = document.getElementById('card-headline').value;
    const prompt = `Based on this headline: "${headline}", suggest 3 color hex codes that would work well. Return only the hex codes separated by commas.`;
    const result = await callAI(prompt);

    if(result) {
        document.getElementById('ai-suggestion').textContent =
            `Suggested colors: ${result}`;
    }
};

window.aiOptimizeLayout = async function() {
    document.getElementById('ai-suggestion').textContent =
        'AI analyzing your design layout...';

    setTimeout(() => {
        document.getElementById('ai-suggestion').textContent =
            'Tip: Try increasing font size to 42px and using a darker gradient for better text contrast.';
    }, 1500);
};

async function callAI(prompt) {
    try {
        const formData = new FormData();
        formData.append('action', 'qalbe_ai_chat');
        formData.append('message', prompt);
        formData.append('security', '<?php echo wp_create_nonce("qalbe_ai_nonce"); ?>');

        const res = await fetch('<?php echo admin_url("admin-ajax.php"); ?>', {
            method: 'POST',
            body: formData
        });

        const data = await res.json();
        return data.success ? data.data : null;
    } catch(e) {
        console.error('AI Error:', e);
        return null;
    }
}

// ==================== LAYER MANAGEMENT ====================
window.updateLayersPanel = function() {
    const list = document.getElementById('layers-list');
    const layers = [
        { id: 'bg-preview', name: 'Background', icon: 'fa-image' },
        { id: 'logo-layer', name: 'Logo', icon: 'fa-copyright' },
        { id: 'view-headline', name: 'Headline', icon: 'fa-heading' },
        { id: 'view-subhead', name: 'Subheading', icon: 'fa-paragraph' }
    ];

    list.innerHTML = layers.map(layer => `
        <div class="layer-item ${layer.id === 'bg-preview' ? 'active' : ''}" onclick="selectLayer('${layer.id}')">
            <i class="fas ${layer.icon} mr-2"></i>
            <span>${layer.name}</span>
            <div class="ml-auto flex gap-1">
                <button class="layer-action" onclick="event.stopPropagation(); toggleLayerVisibility('${layer.id}')">
                    <i class="fas fa-eye" id="eye-${layer.id}"></i>
                </button>
            </div>
        </div>
    `).join('');
};

window.selectLayer = function(id) {
    document.querySelectorAll('.layer-item').forEach(el => el.classList.remove('active'));
    // Visual feedback for selection
    const canvasEl = document.getElementById(id);
    if(canvasEl) {
        document.querySelectorAll('.layer').forEach(el => el.style.outline = 'none');
        if(id !== 'bg-preview') canvasEl.style.outline = '2px dashed #dc2626';
    }
};

window.toggleLayerVisibility = function(id) {
    const el = document.getElementById(id);
    const eye = document.getElementById('eye-' + id);
    if(el.classList.contains('hidden')) {
        el.classList.remove('hidden');
        eye.classList.replace('fa-eye-slash', 'fa-eye');
    } else {
        el.classList.add('hidden');
        eye.classList.replace('fa-eye', 'fa-eye-slash');
    }
};

window.addLayer = function() {
    alert('Advanced layer addition coming in v3.1!');
};

// ==================== TOOLS ====================
window.addText = function() {
    alert('Text layer feature coming soon!');
};

window.addShape = function() {
    alert('Shape feature coming soon!');
};

window.addSticker = function() {
    alert('Sticker feature coming soon!');
};

// ==================== LOGO MANAGEMENT ====================
window.handleLogoUpload = function(e) {
    const file = e.target.files[0];
    if(file) {
        const reader = new FileReader();
        reader.onload = (event) => {
            const logoPreview = document.getElementById('logo-preview');
            const logoLayer = document.getElementById('logo-layer');
            logoPreview.src = event.target.result;
            logoLayer.classList.remove('hidden');
            // Reset position to visible area if hidden
            logoLayer.style.top = '20px';
            logoLayer.style.left = '20px';
            saveHistory();
        };
        reader.readAsDataURL(file);
    }
};

window.updateLogoStyle = function() {
    const scale = document.getElementById('logo-scale').value;
    const opacity = document.getElementById('logo-opacity').value;
    const logoLayer = document.getElementById('logo-layer');

    document.getElementById('logo-scale-val').textContent = scale;
    document.getElementById('logo-opacity-val').textContent = opacity;

    logoLayer.style.width = (scale * 1) + 'px';
    logoLayer.style.opacity = opacity / 100;
};

// ==================== UNSPLASH ====================
window.openUnsplash = function() {
    window.open('https://unsplash.com', '_blank');
};

window.removeBackground = function() {
    document.getElementById('bg-preview').src = '';
};

// ==================== EXPORT ====================
window.downloadCard = async function(format = 'png') {
    const capture = document.getElementById('capture-area');

    // Temporarily hide grid
    const grid = document.getElementById('grid-overlay');
    const gridWasVisible = !grid.classList.contains('hidden');
    grid.classList.add('hidden');

    try {
        const canvas = await html2canvas(capture, {
            scale: 3,
            useCORS: true,
            allowTaint: true,
            backgroundColor: null
        });

        let mimeType, fileExt;
        switch(format) {
            case 'jpg':
                mimeType = 'image/jpeg';
                fileExt = 'jpg';
                break;
            case 'webp':
                mimeType = 'image/webp';
                fileExt = 'webp';
                break;
            default:
                mimeType = 'image/png';
                fileExt = 'png';
        }

        const link = document.createElement('a');
        link.download = `PhotoCard-${Date.now()}.${fileExt}`;
        link.href = canvas.toDataURL(mimeType, 0.95);
        link.click();
    } catch(e) {
        console.error('Export error:', e);
        alert('Export failed. Please try again.');
    } finally {
        if(gridWasVisible) grid.classList.remove('hidden');
    }
};

window.shareCard = async function() {
    try {
        const capture = document.getElementById('capture-area');
        const canvas = await html2canvas(capture, { scale: 2 });

        canvas.toBlob(async (blob) => {
            const file = new File([blob], 'photocard.png', { type: 'image/png' });

            if(navigator.share && navigator.canShare({ files: [file] })) {
                await navigator.share({
                    files: [file],
                    title: 'PhotoCard Studio',
                    text: 'Check out my photo card!'
                });
            } else {
                alert('Share not supported. Downloading instead.');
                downloadCard('png');
            }
        });
    } catch(e) {
        console.error('Share error:', e);
    }
};

})();
</script>

<?php get_footer(); ?>
