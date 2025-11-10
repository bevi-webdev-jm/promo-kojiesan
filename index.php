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
        <!-- favicons -->
        <link rel="icon" href="./assets/images/bevi-logo.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/bevi-logo.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/bevi-logo.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/bevi-logo.png" />
        <link rel="mask-icon" href="./assets/images/bevi-logo.png" color="#b91c1c" />
        <meta name="msapplication-TileColor" content="#b91c1c" />
        <meta name="theme-color" content="#b91c1c" />

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
    <body class="font-sans bg-gray-50"> 
        <header class="sticky top-0 left-0 right-0 bg-black w-full z-50 shadow-2xl"> 
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <a href="#" class="flex items-center gap-3">
                    <img
                        src="./assets/images/bevi-logo-white.png"
                        alt="kojie.san"
                        class="h-10 w-auto"
                    />
                    <span class="hidden md:inline-block text-white text-xl sm:text-2xl font-black tracking-widest uppercase">
                        HOLIDAY MILLIONAIRE
                    </span>
                    </a>

                    <nav class="hidden md:flex items-center space-x-6 text-sm font-semibold">
                    <a
                        href="#criteria"
                        class="text-gray-100 hover:text-white transition duration-200"
                        >Criteria</a
                    >
                    <a
                        href="#products"
                        class="text-gray-100 hover:text-white transition duration-200"
                        >Products</a
                    >
                    <a href="#stores" class="text-gray-100 hover:text-white transition duration-200"
                        >Stores</a
                    >
                    <a href="#prizes" class="text-gray-100 hover:text-white transition duration-200"
                        >Prizes</a
                    >
                    <a
                        href="#mechanics-list"
                        class="ml-2 inline-flex items-center px-4 py-2 bg-white text-brand-red-700 font-bold rounded-full shadow-lg transition hover:bg-brand-red-50 hover:text-brand-red-900 transform hover:scale-105" >
                        Jump to Mechanics
                    </a>
                    </nav>

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

            <div
            id="mobile-menu"
            class="md:hidden bg-brand-red-900/95 border-t border-brand-red-700 hidden" >
            <div class="px-4 pt-3 pb-4 space-y-2 font-medium">
                <a
                href="#criteria"
                class="block text-gray-100 py-2 px-3 rounded hover:bg-white/10 transition"
                >Criteria</a
                >
                <a
                href="#products"
                class="block text-gray-100 py-2 px-3 rounded hover:bg-white/10 transition"
                >Products</a
                >
                <a
                href="#stores"
                class="block text-gray-100 py-2 px-3 rounded hover:bg-white/10 transition"
                >Stores</a
                >
                <a
                href="#prizes"
                class="block text-gray-100 py-2 px-3 rounded hover:bg-white/10 transition"
                >Prizes</a
                >
                <a
                href="#mechanics-list"
                class="block mt-2 px-3 py-2 bg-white text-brand-red-700 rounded-md text-center font-bold shadow transition hover:bg-red-50"
                >Jump to Mechanics</a
                >
            </div>
            </div>
        </header>

        <!-- spacer to offset the fixed header height -->
        <div class="h-4"></div>

        <section id="terms-banner" class="mb-8 w-full" style="margin-top: -15px;"> 
            <div class="w-full overflow-hidden bg-brand-red-700/50"> <img
                    src="./assets/images/Terms & Conditions Header.png"
                    alt="Terms and Conditions header"
                    class="h-full w-full  object-cover object-center" />
            </div>
        </section>
        
        <main class="max-w-4xl mx-auto pb-16 px-4 sm:px-6 lg:px-8"> 
            <section
                id="introduction"
                class="mb-10 p-6 bg-gradient-to-r from-brand-red-700 to-brand-red-500 text-white rounded-xl shadow-2xl flex flex-col md:flex-row items-center gap-6 transform -translate-y-4" data-aos="fade-up"
                data-aos-once="true"
            >
                <div class="mt-4 text-xs text-white/80">
                    Promo Period: <strong class="text-white font-extrabold">Nov 15, 2025 — Jan 15, 2026</strong>
                    <br>
                    Countdown: <span id="timer" class="text-white font-extrabold"></span>
                </div>
            </section>
                
            <section
                id="criteria"
                class="mt-10 mb-12 sm:mb-16 p-6 sm:p-8 bg-white rounded-xl shadow-lg border border-gray-100" data-aos="fade-right"
                data-aos-once="true"
            >
                <div class="flex items-center gap-4 mb-6 border-b border-brand-red-100 pb-3">
                    <h2 class="text-xl sm:text-3xl font-extrabold text-brand-red-700 tracking-wide">
                        Participation Criteria
                    </h2>
                </div>

                <ol class="space-y-4">
                    <?php 
                        foreach($criteria_arr as $num => $criteria) {
                    ?>
                        <li class="flex gap-4 items-start p-4 border border-gray-100 rounded-lg hover:shadow-md hover:border-brand-red-200 transition duration-300"> 
                            <div class="flex-shrink-0">
                                <div class="w-8 h-8 rounded-full bg-brand-red-700 text-white font-bold flex items-center justify-center shadow-md"><?php echo $num; ?></div>
                            </div>
                            <div class="text-base text-gray-800 flex-1">
                                <?php echo $criteria; ?>
                            </div>
                        </li>
                    <?php } ?>
                </ol>
            </section>

            <section
                id="products"
                class="mb-12 sm:mb-16 p-6 sm:p-8 bg-white rounded-xl shadow-lg border border-gray-100"
                data-aos="fade-right"
                data-aos-once="true"
            >
                <div class="flex items-center gap-4 mb-6 border-b border-brand-red-100 pb-3">
                    <div class="flex items-center gap-3">
                        <h2 class="text-xl sm:text-3xl font-extrabold text-brand-red-700 tracking-wide">
                            Participating Products
                        </h2>
                    </div>
                </div>

                <h4 class="text-base text-gray-700 font-semibold mb-4">List of Participating Kojie San Product(s)</h4> 
                <div class="mb-6">
                    <label for="product-search" class="sr-only">Search products</label>
                    <input
                        id="product-search"
                        type="search"
                        placeholder="Search products or sizes..."
                        class="w-full sm:w-1/2 px-4 py-2 border border-gray-300 rounded-lg text-base shadow-sm focus:outline-none focus:ring-2 focus:ring-brand-red-500 focus:border-brand-red-500 transition" aria-label="Search products"
                    />
                </div>

                <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md"> 
                    <div class="table-scroll">
                        <div class="max-h-100 overflow-auto">
                            <table id="products-table" class="min-w-full text-sm text-left text-gray-700">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-100 font-bold sticky top-0 z-10 border-b-2 border-brand-red-300"> 
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
                                        <tr class="bg-white border-b border-gray-100 hover:bg-brand-red-50/50 transition duration-150" data-product="<?php echo htmlspecialchars(strtolower($product_name)); ?>" data-size="<?php echo htmlspecialchars(strtolower($product_size)); ?>"> 
                                            <td class="py-3 px-4 font-medium">
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

            <section
                id="stores"
                class="mb-12 sm:mb-16 p-6 sm:p-8 bg-white rounded-xl shadow-lg border border-gray-100"
                data-aos="fade-right"
                data-aos-once="true"
            >
                <div class="flex items-center gap-4 mb-6 border-b border-brand-red-100 pb-3">
                    <div class="flex items-center gap-3">
                        <h2 class="text-xl sm:text-3xl font-extrabold text-brand-red-700 tracking-wide">
                            Participating Stores
                        </h2>
                    </div>
                </div>

                <h4 class="text-base text-gray-700 font-semibold mb-4">Trade Stores</h4>

                <div class="mb-6">
                    <label for="store-search" class="sr-only">Search stores</label>
                    <input
                        id="store-search"
                        type="search"
                        placeholder="Search stores..."
                        class="w-full sm:w-1/2 px-4 py-2 border border-gray-300 rounded-lg text-base shadow-sm focus:outline-none focus:ring-2 focus:ring-brand-red-500 focus:border-brand-red-500 transition"
                        aria-label="Search stores"
                    />
                </div>

                <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">
                    <div class="table-scroll">
                        <div class="max-h-100 overflow-auto">
                            <table id="stores-table" class="min-w-full text-sm text-left text-gray-700">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-100 font-bold sticky top-0 z-10 border-b-2 border-brand-red-300">
                                    <tr>
                                        <th class="py-3 px-4 whitespace-nowrap sticky top-0 bg-gray-100 z-10">Store</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($stores_arr as $num => $store) { ?>
                                        <tr class="bg-white border-b border-gray-100 hover:bg-brand-red-50/50 transition duration-150" data-store="<?php echo htmlspecialchars(strtolower($store)); ?>">
                                            <td class="py-3 px-4">
                                                <b class="text-brand-red-700"><?php echo $num; ?>.</b> <?php echo htmlspecialchars($store); ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>

            <section
                id="prizes"
                class="mb-12 sm:mb-16 p-6 sm:p-8 bg-white rounded-xl shadow-lg border border-gray-100"
                data-aos="fade-right"
                data-aos-once="true"
            >
                <div class="flex items-center gap-4 mb-6 border-b border-brand-red-100 pb-3">
                    <div class="flex items-center gap-3">
                        <h2 class="text-xl sm:text-3xl font-extrabold text-brand-red-700 tracking-wide">
                            Promo Period, Schedule of Validation, Draw Date & Announcement of Winners
                        </h2>
                    </div>
                </div>

                <!-- <div class="w-full mb-4">
                    <div class="relative overflow-hidden rounded-xl bg-gray-50 border-2 border-gray-300 shadow-lg h-100 md:h-full flex items-center justify-center"> 
                        <img
                            src="./assets/images/prizes.png"
                            alt="Promo prizes"
                            class="w-full h-full p-2 object-contain"
                        />
                    </div>
                </div> -->

                <div class="rounded-xl border border-gray-300 shadow-lg overflow-hidden bg-white">
                    <div class="overflow-x-auto">
                        <table role="table" class="min-w-full table-auto text-sm text-left text-gray-700">
                            <thead>
                                <tr>
                                    <th colspan="6" class="bg-red-700 text-white px-6 py-4 text-xl font-extrabold text-center tracking-wider">
                                        GCASH INSTANT PRIZES
                                    </th>
                                </tr>
                            </thead>

                            <?php foreach($promo_period_arr as $title => $val) { ?>
                                <!-- Group title -->
                                <thead class="bg-white sticky top-0 z-10">
                                    <tr>
                                        <th colspan="6" class="bg-gray-50 sticky top-0 z-10 text-brand-red-700 text-center">
                                            <?php echo htmlspecialchars($title); ?>
                                        </th>
                                    </tr>

                                    <!-- Column headers -->
                                    <tr class="bg-gray-100 border-b border-gray-200">
                                        <th class="px-4 py-3 text-xs font-semibold text-gray-600 whitespace-nowrap">Month No</th>
                                        <th class="px-4 py-2 text-xs font-semibold text-gray-600 whitespace-nowrap">No. of Winners</th>
                                        <th class="px-4 py-2 text-xs font-semibold text-gray-600 whitespace-nowrap">Promo Period</th>
                                        <th class="px-4 py-2 text-xs font-semibold text-gray-600 whitespace-nowrap">Validation Date</th>
                                        <th class="px-4 py-2 text-xs font-semibold text-gray-600 whitespace-nowrap">Draw Date</th>
                                        <th class="px-4 py-2 text-xs font-semibold text-gray-600 whitespace-nowrap">Announcement Date (Social)</th>
                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-100">
                                    <?php foreach($val as $row) { ?>
                                        <tr class="hover:bg-red-50/40 transition">
                                            <td class="px-4 py-3 text-center font-medium text-sm"><?php echo htmlspecialchars($row['month']); ?></td>
                                            <td class="px-4 py-3 text-center"><?php echo htmlspecialchars($row['winners']); ?></td>
                                            <td class="px-4 py-3"><?php echo htmlspecialchars($row['period']); ?></td>
                                            <td class="px-4 py-3 whitespace-nowrap"><?php echo htmlspecialchars($row['validation_date']); ?></td>
                                            <td class="px-4 py-3 whitespace-nowrap"><?php echo htmlspecialchars($row['draw_date']); ?></td>
                                            <td class="px-4 py-3 whitespace-nowrap"><?php echo htmlspecialchars($row['announcement_date']); ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            <?php } ?>

                            <!-- Grand prize footer -->
                            <tfoot>
                                <tr>
                                    <th colspan="6" class="bg-blue-700 text-white px-4 py-3 text-lg text-center font-extrabold tracking-wider">
                                        GRAND PRIZE
                                    </th>
                                </tr>
                                <tr class="bg-blue-50 border-t border-b border-blue-200">
                                    <th class="px-4 py-2 text-xs font-semibold text-gray-600">No. of Winners</th>
                                    <th class="px-4 py-2 text-xs font-semibold text-gray-600">Promo Period</th>
                                    <th class="px-4 py-2 text-xs font-semibold text-gray-600">Validation Date</th>
                                    <th class="px-4 py-2 text-xs font-semibold text-gray-600">Draw Date</th>
                                    <th class="px-4 py-2 text-xs font-semibold text-gray-600">Announcement Date (Social)</th>
                                    <th class="px-4 py-2 text-xs font-semibold text-gray-600">Notes</th>
                                </tr>
                                <tr class="bg-blue-50/80">
                                    <td class="px-4 py-3 text-center font-bold">2</td>
                                    <td class="px-4 py-3 text-center">Nov 1 - Jan 15</td>
                                    <td class="px-4 py-3 text-center">16 Jan</td>
                                    <td class="px-4 py-3 text-center">17 Jan</td>
                                    <td class="px-4 py-3 text-center">17 Jan</td>
                                    <td class="px-4 py-3 text-sm text-gray-600">Winners announced on official social channels</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                <p class="mt-3 p-3 text-sm bg-brand-red-100 border-l-4 border-brand-red-700 text-brand-red-800 rounded-lg shadow-sm font-medium"> 
                    NOTE: Instant prize winners will be informed of their prize in real-time once the system has validated their entry
                </p>
            </section>

            <section id="mechanics-list" class="space-y-8 sm:space-y-12"> 
                <div
                    class="mechanic-card bg-white p-6 sm:p-8 rounded-xl shadow-2xl border-t-8 border-brand-red-700" data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <div class="flex items-center gap-4 mb-6 border-b border-brand-red-100 pb-3">
                        <div class="flex items-center gap-3">
                            <h2 class="text-xl sm:text-3xl font-extrabold text-brand-red-700 tracking-wide">
                                How to Join
                            </h2>
                        </div>
                    </div>

                    <ol
                        class="space-y-4"
                    >
                        <?php
                        foreach($how_to_join_arr as $num => $val) {
                        ?>
                            <li class="flex gap-4 items-start p-4 border border-gray-200 rounded-lg bg-gray-50 hover:shadow-md hover:border-brand-red-300 transition duration-300">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 rounded-full bg-brand-red-700 text-white font-bold flex items-center justify-center shadow-md"><?php echo $num; ?></div>
                                </div>
                                <div class="text-base text-gray-800 flex-1">
                                    <?php echo $val; ?>
                                </div>
                            </li>
                        <?php } ?>
                    </ol>
                </div>

                <div
                    class="mechanic-card bg-white p-6 sm:p-8 rounded-xl shadow-lg border-t-8 border-brand-red-700"
                    data-aos="fade-up"
                    data-aos-delay="200"
                    role="region"
                    aria-labelledby="prizes-heading"
                >
                    <div class="flex items-start justify-between gap-4 mb-6 border-b border-brand-red-100 pb-3">
                        <div class="flex items-center gap-3">
                            <div>
                                <h3 id="prizes-heading" class="text-xl sm:text-3xl font-extrabold text-brand-red-800 tracking-wide">
                                    Prizes
                                </h3>
                                <p class="text-sm text-gray-600">Prizes are not convertible to cash and are non-transferable.</p>
                            </div>
                        </div>

                        <div class="text-sm text-gray-500 hidden sm:block pt-2">
                            <span class="font-bold text-gray-800">Promo Rewards</span>
                            <div class="mt-1 text-xs text-brand-red-600 font-medium">Instant, GCASH, Vouchers & Products</div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6"> 
                        <article class="p-4 rounded-lg border border-gray-200 bg-brand-red-50 shadow-md">
                            <header class="flex items-center justify-between mb-2 p-1 rounded">
                                <h4 class="text-base font-bold text-brand-red-800">Instant Prizes</h4>
                                <span class="text-xs text-gray-600 font-medium">Real-time notification</span>
                            </header>

                            <div class="text-sm text-gray-700 leading-relaxed">
                                <?php if (!empty($prizes_arr['Instant Prizes'])): ?>
                                    <p><?php echo nl2br(htmlspecialchars($prizes_arr['Instant Prizes'])); ?></p>
                                <?php else: ?>
                                    <p class="text-gray-500">No instant prize details available.</p>
                                <?php endif; ?>
                            </div>
                        </article>

                        <article class="p-4 rounded-lg border border-gray-200 shadow-md">
                            <header class="flex items-center justify-between mb-2 p-1 rounded">
                                <h4 class="text-base font-bold text-brand-red-800">GCASH Vouchers</h4>
                                <span class="text-xs bg-brand-red-100 text-brand-red-700 px-2 py-0.5 rounded-full font-medium">E-vouchers</span>
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

                        <article class="p-4 rounded-lg border border-gray-200 shadow-md">
                            <header class="flex items-center justify-between mb-2 p-1 rounded">
                                <h4 class="text-base font-bold text-brand-red-800">BEVi PH Online Stores Voucher</h4>
                                <span class="text-xs text-gray-600 font-medium">Discount vouchers</span>
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

                            <p class="mt-3 text-xs bg-brand-red-100 border-l-4 border-brand-red-700 text-brand-red-800 rounded-lg p-2 font-medium">
                                NOTE: these vouchers can only be used at BEVi PH online stores.
                            </p>
                        </article>

                        <article class="p-4 rounded-lg border border-gray-200 bg-brand-red-50 shadow-md">
                            <header class="flex items-center justify-between mb-2 p-1 rounded">
                                <h4 class="text-base font-bold text-brand-red-800">BEVi Products</h4>
                                <span class="text-xs text-gray-600 font-medium">Product prizes</span>
                            </header>

                            <div class="text-sm text-gray-700">
                                <?php if (!empty($prizes_arr['BEVi Products'])): ?>
                                    <p><?php echo nl2br(htmlspecialchars($prizes_arr['BEVi Products'])); ?></p>
                                <?php else: ?>
                                    <p class="text-gray-500">No product prize details available.</p>
                                <?php endif; ?>
                            </div>
                        </article>

                        <article class="p-6 rounded-xl border-4 border-cyan-500 bg-white shadow-xl col-span-1 md:col-span-2">
                            <header class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-3 rounded px-2"> 

                                <h4 class="text-xl font-black text-brand-red-700 flex items-center gap-2 mb-2 sm:mb-0"> 
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full flex-shrink-0"> 
                                        <img src="./assets/images/icons/success.png" alt="success">
                                    </div>
                                    MAJOR PRIZE (GRAND DRAW)
                                </h4>

                                <span class="text-sm bg-brand-red-700 text-white px-3 py-1 rounded-full font-bold uppercase tracking-wider">
                                    Grand Prize
                                </span>
                            </header>

                            <div class="text-base text-gray-800 leading-relaxed">
                                <?php if (!empty($prizes_arr['MAJOR PRIZE (Grand Draw)'])): ?>
                                    <p><?php echo nl2br(htmlspecialchars($prizes_arr['MAJOR PRIZE (Grand Draw)'])); ?></p>
                                <?php else: ?>
                                    <p class="text-gray-500">Grand draw details will be posted soon.</p>
                                <?php endif; ?>
                            </div>
                        </article>
                    </div>
                </div>

                <div
                    class="mechanic-card bg-white p-6 sm:p-8 rounded-xl shadow-lg border-t-8 border-brand-red-700"
                    data-aos="fade-up"
                    data-aos-delay="300"
                >
                    <h3
                        class="text-xl sm:text-3xl font-extrabold text-brand-red-800 mb-6 flex items-center tracking-wide"
                    >
                        Determination of Winners
                    </h3>

                    <ul class="space-y-4">
                        <?php foreach($determination_winners_arr as $num => $val) { ?>
                            <li class="flex gap-4 items-start p-4 border border-gray-200 rounded-lg bg-gray-50 hover:shadow-md hover:border-brand-red-300 transition duration-300">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 rounded-full bg-brand-red-700 text-white font-bold flex items-center justify-center shadow-md"><?php echo $num; ?></div>
                                </div>
                                <div class="text-base text-gray-800 flex-1">
                                    <?php echo $val; ?>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

                <div
                    class="mechanic-card bg-white p-6 sm:p-8 rounded-xl shadow-lg border-t-8 border-brand-red-700"
                    data-aos="fade-up"
                    data-aos-delay="400"
                >
                    <div class="flex items-center justify-between mb-6 border-b border-brand-red-100 pb-3">
                        <h3 class="text-xl sm:text-3xl font-extrabold text-brand-red-800 tracking-wide flex items-center gap-3">
                            Announcement of Winners, Determination, and Claiming of Prizes
                        </h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <?php foreach($announcement_of_winners_arr as $num => $val) {
                            $title = isset($val['title']) ? $val['title'] : '';
                            $data_items = !empty($val['data']) && is_array($val['data']) ? $val['data'] : [];
                        ?>
                            <article class="p-5 bg-gray-50 rounded-lg border border-gray-200 hover:shadow-lg transition duration-300">
                                <div class="flex items-start gap-3">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 rounded-full bg-brand-red-700 text-white font-bold text-lg flex items-center justify-center shadow-md">
                                            <?php echo htmlspecialchars($num); ?>
                                        </div>
                                    </div>

                                    <div class="min-w-0">
                                        <h4 class="text-base font-bold mb-2">
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

            <section
                id="faq"
                class="mt-16 sm:mt-20 p-6 bg-white rounded-xl shadow-lg border border-red-200"
                data-aos="fade-up"
                data-aos-duration="900"
                role="region"
                aria-labelledby="general-rules-heading"
            >
                <div class="flex items-start gap-4 mb-6 border-b border-red-300 pb-3">

                    <div>
                        <h3 id="general-rules-heading" class="text-xl sm:text-3xl font-extrabold text-brand-red-700 tracking-wide mb-1">
                            Control Measures & Releases
                        </h3>
                        <p class="text-sm text-gray-600">Please read carefully. These are the rules that govern validation, release and claims.</p>
                    </div>
                </div>

                <ul role="list" class="grid gap-4 sm:gap-5">
                    <?php foreach($control_measures_arr as $num => $val) { ?>
                        <li class="flex gap-4 items-start p-4 sm:p-5 bg-gray-50 border border-gray-200 rounded-lg shadow-inner">
                            <div class="flex-shrink-0">
                                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-brand-red-700 text-white font-bold shadow-md">
                                    <?php echo htmlspecialchars($num); ?>
                                </span>
                            </div>

                            <div class="text-sm sm:text-base text-black-900 leading-relaxed font-medium flex-1">
                                <?php echo nl2br(htmlspecialchars($val)); ?>
                            </div>
                        </li>
                    <?php } ?>
                </ul>

                <p class="mt-4 text-sm text-gray-600">
                    If you have questions about any control measure, contact <a href="mailto:contact@yourevent.com" class="text-blue-700 font-semibold underline hover:text-blue-900">marketing.digital@kojiesan.com</a>.
                </p>
            </section>

            <div class="mt-8 p-4 bg-blue-50 border-l-4 border-blue-600 rounded-lg flex items-start gap-3 shadow-md" role="note" aria-label="Permit information"> 
                <div class="flex items-center justify-center w-5 h-5 rounded-full flex-shrink-0"> 
                    <img src="./assets/images/icons/information.png" alt="infotmation">
                </div>

                <div class="text-sm text-gray-800">
                    Per <span class="font-bold">DOH-FDA CCHUHSRR</span> — <span class="font-extrabold text-blue-800">Permit No. 0799 s. 2025</span>
                </div>
            </div>
        </main>

        <footer class="bg-gray-200 mt-16 border-t border-brand-red-300"> <div
                class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8 text-center text-gray-700 text-sm font-medium"
            >
                &copy; 2025 BEVi. All rights reserved. | Contact us at
                <a
                    href="mailto:contact@yourevent.com"
                    class="text-blue-700 hover:text-brand-red-900 font-semibold transition"
                    >marketing.digital@kojiesan.com</a
                >
            </div>
        </footer>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="./assets/js/app.js"></script>
    </body>
</html>