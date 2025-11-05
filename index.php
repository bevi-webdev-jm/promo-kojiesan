<?php
include('arrays.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Holiday Millionaire</title>
        <script src="https://cdn.tailwindcss.com"></script>

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />
        <link
            href="https://unpkg.com/aos@2.3.1/dist/aos.css"
            rel="stylesheet"
        />

        <link rel="stylesheet" href="./assets/css/style.css" />
    </head>
    <body class=" font-sans pt-20">
        <header class="bg-black fixed top-0 w-full z-50 shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <!-- Logo + Title -->
                    <a href="#" class="flex items-center gap-3">
                        <img
                            src="./assets/images/bevi-logo-white.png"
                            alt="kojie.san"
                            class="h-10 w-auto"
                        />
                        <span
                            class="text-white text-xl sm:text-2xl font-extrabold tracking-tight"
                        >
                            HOLIDAY MILLIONAIRE
                        </span>
                    </a>

                    <!-- Desktop nav -->
                    <nav class="hidden md:flex items-center space-x-6 text-sm">
                        <a
                            href="#criteria"
                            class="text-gray-200 hover:text-white"
                            >Criteria</a
                        >
                        <a
                            href="#products"
                            class="text-gray-200 hover:text-white"
                            >Products</a
                        >
                        <a href="#stores" class="text-gray-200 hover:text-white"
                            >Stores</a
                        >
                        <a href="#prizes" class="text-gray-200 hover:text-white"
                            >Prizes</a
                        >
                        <a
                            href="#mechanics-list"
                            class="ml-2 inline-flex items-center px-4 py-2 bg-white text-red-700 font-medium rounded-md shadow transition hover:bg-red-50"
                        >
                            Jump to Mechanics
                        </a>
                    </nav>

                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button
                            id="nav-toggle"
                            aria-controls="mobile-menu"
                            aria-expanded="false"
                            class="p-2 rounded-md text-gray-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                        >
                            <svg
                                id="hamburger"
                                class="h-6 w-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"
                                />
                            </svg>
                            <svg
                                id="close-icon"
                                class="h-6 w-6 hidden"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu -->
            <div
                id="mobile-menu"
                class="md:hidden bg-black/95 border-t border-gray-800 hidden"
            >
                <div class="px-4 pt-3 pb-4 space-y-2">
                    <a
                        href="#criteria"
                        class="block text-gray-200 py-2 rounded hover:bg-white/5"
                        >Criteria</a
                    >
                    <a
                        href="#products"
                        class="block text-gray-200 py-2 rounded hover:bg-white/5"
                        >Products</a
                    >
                    <a
                        href="#stores"
                        class="block text-gray-200 py-2 rounded hover:bg-white/5"
                        >Stores</a
                    >
                    <a
                        href="#prizes"
                        class="block text-gray-200 py-2 rounded hover:bg-white/5"
                        >Prizes</a
                    >
                    <a
                        href="#mechanics-list"
                        class="block mt-2 px-3 py-2 bg-white text-red-700 rounded-md text-center font-medium"
                        >Jump to Mechanics</a
                    >
                </div>
            </div>

            <!-- Small inline script to toggle mobile menu -->
            <script>
                (function () {
                    const btn = document.getElementById("nav-toggle");
                    const menu = document.getElementById("mobile-menu");
                    const hamburger = document.getElementById("hamburger");
                    const closeIcon = document.getElementById("close-icon");
                    btn?.addEventListener("click", function () {
                        const isHidden = menu.classList.toggle("hidden");
                        btn.setAttribute("aria-expanded", String(!isHidden));
                        hamburger.classList.toggle("hidden");
                        closeIcon.classList.toggle("hidden");
                    });
                })();
            </script>

            <!-- Add top padding helper so page content is not hidden under the fixed header -->
            <style>
                /* keep small and scoped: adjust body top padding to header height on small screens */
                @media (min-width: 768px) {
                    body {
                        padding-top: 4rem;
                    } /* matches h-16 */
                }
                @media (max-width: 767px) {
                    body {
                        padding-top: 4rem;
                    }
                }
            </style>
        </header>

         <!-- banner -->
        <section id="terms-banner" class="mb-6 w-full" style="margin-top: -15px;">
            <div class="w-full overflow-hidden bg-black">
                <img
                    src="./assets/images/Terms & Conditions Header.png"
                    alt="Terms and Conditions header"
                    class="w-full h-[40vh] sm:h-[56vh] md:h-[60vh] object-contain"
                />
            </div>
        </section>
        
        <main class="max-w-4xl mx-auto pb-12 px-4 sm:px-6 lg:px-8">
           
            <!-- hero -->
            <section
                id="introduction"
                class="mb-8 p-6 bg-gradient-to-r from-red-600 to-red-400 text-white rounded-xl shadow-lg flex flex-col md:flex-row items-center gap-6"
                data-aos="fade-up"
                data-aos-once="true"
            >
                <div class="flex-1">
                    <span class="inline-block bg-white/20 text-white text-xs px-3 py-1 rounded-full font-semibold mb-3">
                        Official Promo
                    </span>

                    <h1 class="text-2xl sm:text-3xl font-extrabold leading-tight mb-2">
                        kojie.san: Holiday Millionaire
                    </h1>

                    <p class="text-sm sm:text-base text-white/90 mb-4">
                        Win daily GCash vouchers and BEVi products — plus two grand prize winners of
                        ₱1,000,000 each.
                    </p>

                    <div class="flex flex-wrap gap-3">
                        <a
                            href="#mechanics-list"
                            class="inline-flex items-center px-4 py-2 bg-white text-red-700 rounded-md font-semibold shadow hover:bg-white/90"
                        >
                            Jump to Mechanics
                        </a>
                        <a
                            href="#prizes"
                            class="inline-flex items-center px-4 py-2 border border-white/30 text-white rounded-md font-medium hover:bg-white/10"
                        >
                            See Prizes
                        </a>
                    </div>

                    <div class="mt-4 text-xs text-white/80">
                        Promo Period: <strong class="text-white">Nov 15, 2025 — Jan 15, 2026</strong>
                        <br>
                        Countdown: <span id="timer" class="text-white font-semibold"></span>
                    </div>
                </div>

                <div class="w-40 h-40 md:w-56 md:h-56 flex-shrink-0">
                    <img
                        src="./assets/images/Terms & Conditions Header.png"
                        alt="Holiday Millionaire illustration"
                        class="w-full h-full object-contain"
                    />
                </div>
            </section>
                
            <!-- participation criteria -->
            <section
                id="criteria"
                class="mb-8 sm:mb-12 p-5 sm:p-6 bg-white rounded-xl shadow-lg border border-gray-200"
                data-aos="fade-right"
                data-aos-once="true"
            >
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-red-50 text-red-700">
                        <!-- updated icon: clipboard checklist -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 7h10M7 3h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                        </svg>
                    </div>

                    <h2 class="text-lg sm:text-2xl font-bold text-red-700">
                        Participation Criteria
                    </h2>
                </div>

                <ol class="space-y-4">
                    <?php 
                        foreach($criteria_arr as $num => $criteria) {
                    ?>
                        <li class="flex gap-4 items-start p-4 border border-gray-100 rounded-lg hover:shadow-sm transition">
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 rounded-full bg-red-600 text-white font-semibold flex items-center justify-center"><?php echo $num; ?></div>
                            </div>
                            <div class="text-sm sm:text-base text-gray-700">
                                <?php echo $criteria; ?>
                            </div>
                        </li>
                    <?php } ?>
                </ol>
            </section>

            <!-- products -->
            <section
                id="products"
                class="mb-8 sm:mb-12 p-5 sm:p-6 bg-white rounded-xl shadow-lg border border-gray-200"
                data-aos="fade-right"
                data-aos-once="true"
            >
                <div class="flex items-center gap-4 mb-4">
                    <h2 class="text-lg sm:text-2xl font-bold text-red-700">
                        🛒 Participating Products
                    </h2>
                </div>

                <h4 class="text-sm text-gray-700 mb-3">List of Participating Kojie San Product(s)</h4>

                <!-- Search input -->
                <div class="mb-4">
                    <label for="product-search" class="sr-only">Search products</label>
                    <input
                        id="product-search"
                        type="search"
                        placeholder="Search products or sizes..."
                        class="w-full sm:w-1/2 px-3 py-2 border border-gray-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-red-300"
                        aria-label="Search products"
                    />
                </div>

                <div class="overflow-hidden rounded-lg border border-gray-200">
                    <div class="table-scroll">
                        <div class="max-h-100 overflow-auto">
                            <table id="products-table" class="min-w-full text-sm text-left text-gray-700">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                                    <tr>
                                        <th class="py-3 px-4 whitespace-nowrap sticky top-0 bg-gray-100 z-10">Product</th>
                                        <th class="py-3 px-4 whitespace-nowrap sticky top-0 bg-gray-100 z-10">Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($products_arr as $product) { 
                                        $product_name = isset($product['product']) ? $product['product'] : '';
                                        $product_size = isset($product['size']) ? $product['size'] : '';
                                    ?>
                                        <tr class="bg-white border-b hover:bg-gray-50" data-product="<?php echo htmlspecialchars(strtolower($product_name)); ?>" data-size="<?php echo htmlspecialchars(strtolower($product_size)); ?>">
                                            <td class="py-3 px-4">
                                                <?php echo htmlspecialchars($product_name); ?>
                                            </td>
                                            <td class="py-3 px-4 whitespace-nowrap">
                                                <?php echo htmlspecialchars($product_size); ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <!-- stores -->
            <section
                id="stores"
                class="mb-8 sm:mb-12 p-5 sm:p-6 bg-white rounded-xl shadow-lg border border-gray-200"
                data-aos="fade-right"
                data-aos-once="true"
            >
                <div class="flex items-center gap-4 mb-4">
                    <h2 class="text-lg sm:text-2xl font-bold text-red-700">
                        🛒 Participating Stores
                    </h2>
                </div>

                <h4 class="text-sm text-gray-700 mb-3">Trade Stores</h4>

                <!-- Search input for stores -->
                <div class="mb-4">
                    <label for="store-search" class="sr-only">Search stores</label>
                    <input
                        id="store-search"
                        type="search"
                        placeholder="Search stores..."
                        class="w-full sm:w-1/2 px-3 py-2 border border-gray-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-red-300"
                        aria-label="Search stores"
                    />
                </div>

                <div class="overflow-hidden rounded-lg border border-gray-200">
                    <div class="table-scroll">
                        <div class="max-h-100 overflow-auto">
                            <table id="stores-table" class="min-w-full text-sm text-left text-gray-700">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                                    <tr>
                                        <th class="py-3 px-4 whitespace-nowrap sticky top-0 bg-gray-100 z-10">Store</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($stores_arr as $num => $store) { ?>
                                        <tr class="bg-white border-b hover:bg-gray-50" data-store="<?php echo htmlspecialchars(strtolower($store)); ?>">
                                            <td class="py-3 px-4">
                                                <b><?php echo $num; ?>.</b> <?php echo htmlspecialchars($store); ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <!-- promo period -->
            <section
                id="prizes"
                class="mb-8 sm:mb-12 p-5 sm:p-6 bg-white rounded-xl shadow-lg border border-gray-200"
                data-aos="fade-right"
                data-aos-once="true"
            >
                    <div class="flex items-center gap-4 mb-4">
                        <h2 class="text-xl sm:text-2xl font-bold text-red-700 mb-2 flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M3 11h18M5 21h14a2 2 0 0 0 2-2V8H3v11a2 2 0 0 0 2 2z" />
                            </svg>
                            Promo Period, Schedule of Validation, Draw Date & Announcement of Winners
                        </h2>
                    </div>

                    <div class="w-full">
                        <div class="relative overflow-hidden rounded-lg bg-gray-50 border border-gray-100 h-48 md:h-full flex items-center justify-center">
                            <img
                                src="./assets/images/prizes.png"
                                alt="Promo prizes"
                                class="w-full h-full p-4"
                            />
                        </div>
                    </div>

                    <p class="mt-3 p-3 text-xs bg-red-50 border-l-4 border-red-500 text-red-800 rounded-sm shadow-sm">
                        NOTE: Instant prize winners will be informed of their prize in real-time once the system has validated their entry
                    </p>
            </section>

            <!-- how to join -->
            <section id="mechanics-list" class="space-y-6 sm:space-y-8">
                <div
                    class="mechanic-card bg-white p-5 sm:p-6 rounded-xl shadow-xl border-t-4 border-red-600"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <h3
                        class="text-lg sm:text-xl font-semibold text-gray-900 mb-3 flex items-center"
                    >
                        <span
                            class="text-red-600 mr-3 text-xl sm:text-2xl font-extrabold"
                            >📅</span
                        >
                        How to Join
                    </h3>
                    <ol
                        class="space-y-2"
                    >
                        <?php
                            foreach($how_to_join_arr as $num => $val) {
                        ?>
                            <li class="flex gap-4 items-start p-4 border border-gray-100 rounded-lg hover:shadow-sm transition">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 rounded-full bg-red-600 text-white font-semibold flex items-center justify-center"><?php echo $num; ?></div>
                                </div>
                                <div class="text-sm sm:text-base text-gray-700">
                                    <?php echo $val; ?>
                                </div>
                            </li>
                        <?php } ?>
                    </ol>
                </div>

                <div
                    class="mechanic-card bg-white p-6 sm:p-8 rounded-xl shadow-xl border-t-4 border-red-600"
                    data-aos="fade-up"
                    data-aos-delay="200"
                    role="region"
                    aria-labelledby="prizes-heading"
                >
                    <div class="flex items-start justify-between gap-4 mb-4">
                        <div class="flex items-center gap-3">
                            <span class="inline-flex items-center justify-center w-12 h-12 rounded-lg bg-red-600 text-white text-2xl">
                                📤
                            </span>
                            <div>
                                <h3 id="prizes-heading" class="text-lg sm:text-xl font-semibold text-gray-900">
                                    Prizes
                                </h3>
                                <p class="text-sm text-gray-600">Prizes are not convertible to cash and are non-transferable.</p>
                            </div>
                        </div>

                        <div class="text-sm text-gray-500 hidden sm:block">
                            <span class="font-medium text-gray-700">Promo Rewards</span>
                            <div class="mt-1 text-xs">Instant, GCASH, Vouchers & Products</div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Instant Prizes -->
                        <article class="p-4 rounded-lg border border-gray-100 bg-gray-50">
                            <header class="flex items-center justify-between mb-2 p-1 rounded">
                                <h4 class="text-sm font-semibold text-red-700">Instant Prizes</h4>
                                <span class="text-xs text-gray-500">Real-time notification</span>
                            </header>

                            <div class="text-sm text-gray-700 leading-relaxed">
                                <?php if (!empty($prizes_arr['Instant Prizes'])): ?>
                                    <p><?php echo nl2br(htmlspecialchars($prizes_arr['Instant Prizes'])); ?></p>
                                <?php else: ?>
                                    <p class="text-gray-500">No instant prize details available.</p>
                                <?php endif; ?>
                            </div>
                        </article>

                        <!-- GCASH Vouchers -->
                        <article class="p-4 rounded-lg border border-gray-100">
                            <header class="flex items-center justify-between mb-2 p-1 rounded">
                                <h4 class="text-sm font-semibold text-red-700">GCASH Vouchers</h4>
                                <span class="text-xs bg-red-50 text-red-700 px-2 py-0.5 rounded">E-vouchers</span>
                            </header>

                            <?php if (!empty($prizes_arr['GCASH Vouchers']) && is_array($prizes_arr['GCASH Vouchers'])): ?>
                                <ul class="list-disc ml-5 text-sm text-gray-700 space-y-1">
                                    <?php foreach ($prizes_arr['GCASH Vouchers'] as $voucher): ?>
                                        <li><?php echo htmlspecialchars($voucher); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <p class="text-sm text-gray-500">No GCASH voucher details available.</p>
                            <?php endif; ?>
                        </article>

                        <!-- BEVi PH Online Stores Voucher -->
                        <article class="p-4 rounded-lg border border-gray-100">
                            <header class="flex items-center justify-between mb-2 p-1 rounded">
                                <h4 class="text-sm font-semibold text-red-700">BEVi PH Online Stores Voucher</h4>
                                <span class="text-xs text-gray-500">Discount vouchers</span>
                            </header>

                            <?php if (!empty($prizes_arr['BEVi PH Online Stores Electronic Discount Voucher']) && is_array($prizes_arr['BEVi PH Online Stores Electronic Discount Voucher'])): ?>
                                <ul class="list-disc ml-5 text-sm text-gray-700 space-y-1">
                                    <?php foreach ($prizes_arr['BEVi PH Online Stores Electronic Discount Voucher'] as $voucher): ?>
                                        <li><?php echo htmlspecialchars($voucher); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <p class="text-sm text-gray-500">No online store voucher details available.</p>
                            <?php endif; ?>

                            <p class="mt-3 text-xs bg-red-50 border-l-4 border-red-500 text-red-800 rounded-sm p-2">
                                NOTE: these vouchers can only be used at BEVi PH online stores.
                            </p>
                        </article>

                        <!-- BEVi Products -->
                        <article class="p-4 rounded-lg border border-gray-100 bg-gray-50">
                            <header class="flex items-center justify-between mb-2 p-1 rounded">
                                <h4 class="text-sm font-semibold text-red-700">BEVi Products</h4>
                                <span class="text-xs text-gray-500">Product prizes</span>
                            </header>

                            <div class="text-sm text-gray-700">
                                <?php if (!empty($prizes_arr['BEVi Products'])): ?>
                                    <p><?php echo nl2br(htmlspecialchars($prizes_arr['BEVi Products'])); ?></p>
                                <?php else: ?>
                                    <p class="text-gray-500">No product prize details available.</p>
                                <?php endif; ?>
                            </div>
                        </article>

                        <!-- Major Prize -->
                        <article class="p-4 rounded-lg border border-red-200 bg-white col-span-1 md:col-span-2">
                            <header class="flex items-center justify-between mb-2 p-1 rounded">
                                <h4 class="text-sm font-semibold text-red-700 flex items-center gap-2">
                                    <span class="text-lg">🏆</span> MAJOR PRIZE (Grand Draw)
                                </h4>
                                <span class="text-xs bg-red-50 text-red-700 px-2 py-0.5 rounded">Grand Prize</span>
                            </header>

                            <div class="text-sm text-gray-700 leading-relaxed">
                                <?php if (!empty($prizes_arr['MAJOR PRIZE (Grand Draw)'])): ?>
                                    <p><?php echo nl2br(htmlspecialchars($prizes_arr['MAJOR PRIZE (Grand Draw)'])); ?></p>
                                <?php else: ?>
                                    <p class="text-gray-500">Grand draw details will be posted soon.</p>
                                <?php endif; ?>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Determiniation of Winners -->
                <div
                    class="mechanic-card bg-white p-5 sm:p-6 rounded-xl shadow-xl border-t-4 border-red-600"
                    data-aos="fade-up"
                    data-aos-delay="300"
                >
                    <h3
                        class="text-lg sm:text-xl font-semibold text-gray-900 mb-3 flex items-center"
                    >
                        <span
                            class="text-red-600 mr-3 text-xl sm:text-2xl font-extrabold"
                            >⚖️</span
                        >
                        <span
                            class="text-red-600 mr-3 text-xl sm:text-2xl font-extrabold"
                            >3.</span
                        >
                        Determiniation of Winners
                    </h3>

                    <ul class="space-y-1">
                        <?php foreach($determination_winners_arr as $num => $val) { ?>
                            <li class="flex gap-4 items-start p-4 border border-gray-100 rounded-lg hover:shadow-sm transition">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 rounded-full bg-red-600 text-white font-semibold flex items-center justify-center"><?php echo $num; ?></div>
                                </div>
                                <div class="text-sm sm:text-base text-gray-700">
                                    <?php echo $val; ?>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

                <!--  Announcemnt of Winners -->
                <div
                    class="mechanic-card bg-white p-5 sm:p-6 rounded-xl shadow-xl border-t-4 border-red-600"
                    data-aos="fade-up"
                    data-aos-delay="400"
                >
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg sm:text-xl font-semibold text-gray-900 flex items-center gap-3">
                            <span class="text-red-600 text-2xl">🏆</span>
                            <span class="text-red-600 font-extrabold">4.</span>
                            Announcemnt of Winners, Determiniation, and Claiming of Prizes
                        </h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <?php foreach($announcement_of_winners_arr as $num => $val) {
                            $title = isset($val['title']) ? $val['title'] : '';
                            $data_items = !empty($val['data']) && is_array($val['data']) ? $val['data'] : [];
                        ?>
                            <article class="p-4 bg-gray-50 rounded-lg border border-gray-100 hover:shadow transition">
                                <div class="flex items-start gap-3">
                                    <div class="flex-shrink-0">
                                        <div class="w-9 h-9 rounded-full bg-red-600 text-white font-semibold flex items-center justify-center">
                                            <?php echo htmlspecialchars($num); ?>
                                        </div>
                                    </div>

                                    <div class="min-w-0">
                                        <h4 class="text-sm font-semibold text-gray-900 mb-1">
                                            <?php echo htmlspecialchars($title); ?>
                                        </h4>

                                        <?php if ($data_items): ?>
                                            <ul class="list-disc ml-5 text-sm text-gray-700 space-y-1">
                                                <?php foreach ($data_items as $d) { ?>
                                                    <li><?php echo htmlspecialchars($d); ?></li>
                                                <?php } ?>
                                            </ul>
                                        <?php else: ?>
                                            <p class="text-xs text-gray-500">No additional details available.</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </article>
                        <?php } ?>
                    </div>
                </div>
            </section>

            <!-- control measures -->
            <section
                id="faq"
                class="mt-10 sm:mt-12 p-6 bg-white rounded-xl shadow-lg border border-red-100"
                data-aos="flip-up"
                data-aos-duration="900"
                role="region"
                aria-labelledby="general-rules-heading"
            >
                <div class="flex items-start gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-red-50 text-red-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>

                    <div>
                        <h3 id="general-rules-heading" class="text-lg sm:text-xl font-bold text-red-700 mb-1">
                            ⚠️ Control Measures & Releases
                        </h3>
                        <p class="text-xs text-gray-500">Please read carefully. These are the rules that govern validation, release and claims.</p>
                    </div>
                </div>

                <ul role="list" class="grid gap-3 sm:gap-4">
                    <?php foreach($control_measures_arr as $num => $val) { ?>
                        <li class="flex gap-3 items-start p-3 sm:p-4 bg-red-50 border border-red-100 rounded-md">
                            <div class="flex-shrink-0">
                                <span class="inline-flex items-center justify-center w-9 h-9 rounded-full bg-red-600 text-white font-semibold">
                                    <?php echo htmlspecialchars($num); ?>
                                </span>
                            </div>

                            <div class="text-sm sm:text-base text-red-800 leading-relaxed">
                                <?php echo nl2br(htmlspecialchars($val)); ?>
                            </div>
                        </li>
                    <?php } ?>
                </ul>

                <p class="mt-3 text-xs text-gray-500">
                    If you have questions about any control measure, contact <a href="mailto:contact@yourevent.com" class="text-red-600 underline">contact@yourevent.com</a>.
                </p>
            </section>

            <div class="mt-4 p-1 sm:p-4 bg-gray-50 border-l-4 border-gray-600 rounded-md flex items-start gap-3" role="note" aria-label="Permit information">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 22s8-4 8-10A8 8 0 0 0 4 12c0 6 8 10 8 10z" />
                </svg>

                <div class="text-xs sm:text-sm text-gray-800">
                    Per <span class="font-semibold">DOH-FDA CCHUHSRR</span> — <span class="font-medium">Permit No. 0799 s. 2025</span>
                </div>
            </div>
        </main>

        <footer class="bg-gray-100 mt-12 border-t border-gray-200">
            <div
                class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 text-center text-gray-600 text-sm"
            >
                &copy; 2025 BEVi. All rights reserved. | Contact us at
                <a
                    href="mailto:contact@yourevent.com"
                    class="text-red-700 hover:text-red-900"
                    >contact@yourevent.com</a
                >
            </div>
        </footer>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="./assets/js/app.js"></script>
    </body>
</html>
