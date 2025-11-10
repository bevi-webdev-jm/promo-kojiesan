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
        <?php include_once('./header.php') ?>

        <!-- spacer to offset the fixed header height -->
        <div class="h-4"></div>

        <section id="terms-banner" class="mb-8 w-full" style="margin-top: -15px;"> 
            <div class="w-full overflow-hidden bg-brand-red-700/50 image-fader-container"> 
                <img
                    src="./assets/images/Terms & Conditions Header (3).png"
                    alt="Terms and Conditions header"
                    class="h-full w-full  object-cover object-center" />
            </div>
        </section>
        
        <main class="max-w-6xl mx-auto pb-16 px-4 sm:px-6 lg:px-8"> 
            
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
                            Prizes, Announcement of Winners and Claiming
                        </h2>
                    </div>
                </div>

                <p class="mb-2 text-gray-700 font-semibold">
                    Prizes are not convertible to cash and are non-transferable.
                </p>

                <div class="rounded-xl border border-gray-300 shadow-lg overflow-hidden bg-white mb-2">
                    <div class="md:hidden sticky top-0 left-0 right-0 z-40 bg-red-700 w-full shadow-lg">
                        <h2 class="text-white px-6 py-2 text-xl font-extrabold text-center tracking-wider">
                            INSTANT PRIZES
                        </h2>
                    </div>

                    <div class="overflow-x-auto">
                        <table role="table" class="min-w-full table-auto text-sm text-left text-gray-700">
                            <thead>
                                <tr class="hidden md:table-row"> <th colspan="7" class="bg-red-700 text-white px-6 py-1 text-xl font-extrabold text-center tracking-wider">
                                        INSTANT PRIZES
                                    </th>
                                </tr>
                            </thead>
                            <thead>
                                <tr class="bg-gray-100 border-b border-gray-200 text-center">
                                    <th class="px-2 py-3 text-xs font-semibold text-gray-600">PRIZES</th>
                                    <th class="px-2 py-2 text-xs font-semibold text-gray-600">NO. OF WINNERS</th>
                                    <th class="px-2 py-2 text-xs font-semibold text-gray-600">PROMO PERIOD</th>
                                    <th class="px-2 py-2 text-xs font-semibold text-gray-600">VALIDATION DATE</th>
                                    <th class="px-2 py-2 text-xs font-semibold text-gray-600">DRAW DATE</th>
                                    <th class="px-2 py-2 text-xs font-semibold text-gray-600">ANNOUNCEMENT DATE <small>(Social Media)</small></th>
                                    <th class="px-2 py-2 text-xs font-semibold text-gray-600">CLAIMING/DELIVERY OF PIZES</th>
                                </tr>
                            </thead>
                            <tbody class="text-xs">
                                <tr class="hover:bg-red-50/40 transition">
                                    <td class="px-2 py-3 text-center font-medium text-sm">
                                        GCASH VOUCHER
                                    </td>
                                    <td class="px-2 py-0">
                                        <ul>
                                            <li class=" whitespace-nowrap">- 1,000 Winners of 50 php</li>
                                            <li class=" whitespace-nowrap">- 1,000 Winners of 100 php</li>
                                            <li class=" whitespace-nowrap">- 1,000 Winners of 200 php</li>
                                            <li class=" whitespace-nowrap">- 1,000 Winners of 300 php</li>
                                            <li class=" whitespace-nowrap">- 500 Winners of 500 php</li>
                                        </ul>
                                    </td>
                                    <td class="px-2 py-3">
                                        <ul>
                                            <li class=" whitespace-nowrap">- November 15 - 30, 2025</li>
                                            <li class=" whitespace-nowrap">- December 1 - 15, 2025</li>
                                            <li class=" whitespace-nowrap">- January 1 - 15, 2026</li>
                                        </ul>
                                    </td>
                                    <td class="px-2 py-3 whitespace-nowrap">
                                        Real Time
                                    </td>
                                    <td class="px-2 py-3 whitespace-nowrap">
                                        Real Time
                                    </td>
                                    <td class="px-2 py-3">
                                        <ul>
                                            <li class=" whitespace-nowrap">- December 5, 2025</li>
                                            <li class=" whitespace-nowrap">- January 5, 2026</li>
                                            <li class=" whitespace-nowrap">- January 19, 2026</li>
                                        </ul>
                                    </td>
                                    <td class="px-2 py-3">
                                        <ul class="list-disc list-outside ml-4 space-y-2">
                                            <li>GCash vouchers will be distributed to winners via Messenger bot in the form of a voucher code.</li>
                                            <li>Winners may redeem their voucher codes through the official GCash redemption page link.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="hover:bg-red-50/40 transition">
                                    <td class="px-2 py-3 text-center font-medium text-sm">
                                        ONLINE STORE ELECTRONIC DISCOUNT VOUCHER 
                                    </td>
                                    <td class="px-2 py-0">
                                       1,500 winners of Shopee, Lazada, and TikTok Shop
                                    </td>
                                    <td class="px-2 py-3">
                                        <ul>
                                            <li class=" whitespace-nowrap">- November 15 - 30, 2025</li>
                                            <li class=" whitespace-nowrap">- December 1 - 15, 2025</li>
                                            <li class=" whitespace-nowrap">- January 1 - 15, 2026</li>
                                        </ul>
                                    </td>
                                    <td class="px-2 py-3 whitespace-nowrap">
                                        Real Time
                                    </td>
                                    <td class="px-2 py-3 whitespace-nowrap">
                                        Real Time
                                    </td>
                                    <td class="px-2 py-3">
                                        <ul>
                                            <li class=" whitespace-nowrap">- December 5, 2025</li>
                                            <li class=" whitespace-nowrap">- January 5, 2026</li>
                                            <li class=" whitespace-nowrap">- January 19, 2026</li>
                                        </ul>
                                    </td>
                                    <td class="px-2 py-3">
                                        Online store vouchers will be sent via the registered email or Messenger.
                                    </td>
                                </tr>
                                <tr class="hover:bg-red-50/40 transition">
                                    <td class="px-2 py-3 text-center font-medium text-sm">
                                        KOJIE.SAN PRODUCTS
                                    </td>
                                    <td class="px-2 py-0">
                                       1,000 winners of kojie.san products
                                    </td>
                                    <td class="px-2 py-3">
                                        <ul>
                                            <li class=" whitespace-nowrap">- November 15 - 30, 2025</li>
                                            <li class=" whitespace-nowrap">- December 1 - 15, 2025</li>
                                            <li class=" whitespace-nowrap">- January 1 - 15, 2026</li>
                                        </ul>
                                    </td>
                                    <td class="px-2 py-3 whitespace-nowrap">
                                        Real Time
                                    </td>
                                    <td class="px-2 py-3 whitespace-nowrap">
                                        Real Time
                                    </td>
                                    <td class="px-2 py-3">
                                        <ul>
                                            <li class=" whitespace-nowrap">- December 5, 2025</li>
                                            <li class=" whitespace-nowrap">- January 5, 2026</li>
                                            <li class=" whitespace-nowrap">- January 19, 2026</li>
                                        </ul>
                                    </td>
                                    <td class="px-2 py-3">
                                        BEVi products will be delivered to the winner’s registered delivery address. Before shipping, winners must sign an agreement stating that the brand is not liable for any damage, loss, or delay once the prize has been shipped out via courier.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="rounded-xl border border-gray-200 shadow-xl overflow-hidden bg-white max-w-7xl mx-auto">
                    <div class="md:hidden sticky top-0 left-0 right-0 z-40 bg-red-600 w-full shadow-lg">
                        <h2 class="text-white px-6 py-3 text-xl font-bold text-center tracking-wider">
                            GRAND PRIZE
                        </h2>
                    </div>

                    <div class="overflow-x-auto">
                        <table role="table" class="min-w-full table-auto text-sm text-gray-800 divide-y divide-gray-200">
                            <thead>
                                <tr class="hidden md:table-row">
                                    <th colspan="8" class="bg-red-600 text-white px-6 py-3 text-2xl font-extrabold text-center tracking-wider">
                                        GRAND PRIZE
                                    </th>
                                </tr>
                            </thead>
                            <thead>
                                <tr class="bg-gray-100 border-b border-gray-200 text-center">
                                    <th class="px-4 py-3 text-xs tracking-wider">PRIZES</th>
                                    <th class="px-4 py-3 text-xs tracking-wider">NO. OF WINNERS</th>
                                    <th class="px-4 py-3 text-xs tracking-wider">PROMO PERIOD</th>
                                    <th class="px-4 py-3 text-xs tracking-wider">VALIDATION DATE</th>
                                    <th class="px-4 py-3 text-xs tracking-wider">DRAW DATE</th>
                                    <th class="px-4 py-3 text-xs tracking-wider">ANNOUNCEMENT DATE <small>(Social Media)</small></th>
                                    <th class="px-4 py-3 text-xs tracking-wider">CLAIMING/DELIVERY OF PRIZES</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-xs">
                                <tr class="bg-white hover:bg-red-50 transition duration-150 ease-in-out">
                                    <td class="px-4 py-4 text-center font-extrabold text-base text-red-600">
                                        1,000,000 PHP (tax inclusive)
                                    </td>
                                    <td class="px-4 py-4 text-center font-semibold">
                                        2 Winners
                                    </td>
                                    <td class="px-4 py-4 text-center">
                                        November 15, 2025 - January 15, 2026
                                    </td>
                                    <td class="px-4 py-4 text-center whitespace-nowrap">
                                        January 16, 2026
                                    </td>
                                    <td class="px-4 py-4 text-center whitespace-nowrap">
                                        January 17, 2026
                                    </td>
                                    <td class="px-4 py-4 text-center">
                                        January 19, 2026
                                    </td>
                                    <td class="px-4 py-4 text-left text-xs space-y-3">
                                        <ul class="list-disc list-outside ml-4 space-y-2">
                                            <li>
                                                Winners first undergo verification by BEVi and Cognitive AI. Must submit:
                                                <ul class="list-circle list-outside ml-6 mt-1 space-y-1">
                                                    <li>• A valid government-issued ID</li>
                                                    <li>• The registered proof of purchase used for entry</li>
                                                </ul>
                                                <p class="mt-1 italic text-gray-500">
                                                    In cases where the original proof of purchase cannot be presented, BEVi may, at its sole discretion, accept a verified confirmation message (e.g., an official text message or Messenger conversation from the verified Kojie.san page) as supplementary proof of eligibility, provided that the authenticity of such communication can be validated by the brand.
                                                </p>
                                            </li>
                                            <li>
                                                Upon successful verification, the prize will be processed and released in the form of a Manager’s Check within thirty (30) working days. The check will be issued in the winner’s name.
                                            </li>
                                            <li>
                                                Winners must provide complete personal details and valid IDs for verification.
                                            </li>
                                            <li>
                                                Verified winners must personally claim their prize at the BEVi Beauty Elements Ventures Inc. office in Makati City within thirty (30) days from receipt of official notification.
                                            </li>
                                            <li>
                                                If the winner cannot claim in person, an authorized representative may do so on their behalf, provided with:
                                                <ul class="list-circle list-outside ml-6 mt-1 space-y-1">
                                                    <li>• A signed authorization letter</li>
                                                    <li>• A photocopy of the winner’s valid ID</li>
                                                    <li>• The representative’s valid ID</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Failure to claim the prize within sixty (60) calendar days from receipt of notification will result in forfeiture of the prize in favor of BEVi Beauty Elements Ventures Inc., subject to prior FDA approval.
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
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

        <?php include_once('./footer.php'); ?>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="./assets/js/app.js"></script>
    </body>
</html>