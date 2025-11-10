AOS.init({
    duration: 800, // global duration for all AOS animations
    once: true, // animations only fire once
});

tailwind.config = {
    theme: {
        extend: {
            colors: {
                // Deeper, richer red for primary branding (used instead of default red-700)
                "brand-red": {
                    50: "#FEF2F2",
                    100: "#FEE2E2",
                    200: "#FECACA",
                    300: "#FCA5A5",
                    400: "#F87171",
                    500: "#EF4444",
                    600: "#DC2626",
                    700: "#B91C1C", // Used for main accents
                    800: "#991B1B", // Used for text/dark hover
                    900: "#7F1D1D",
                },
            },
        },
    },
};

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

// // Countdown Timer Functionality
// function updateCountdown() {
//     const now = new Date();
//     const startDate = new Date(2025, 10, 15, 0, 0, 0); // November 15, 2025, 12:00 AM
//     const endDate = new Date(2026, 0, 15, 23, 59, 59); // January 15, 2026, 11:59 PM

//     let targetDate;
//     let messagePrefix;

//     if (now < startDate) {
//         targetDate = startDate;
//         messagePrefix = "Promo Starts In: ";
//     } else if (now < endDate) {
//         targetDate = endDate;
//         messagePrefix = "Promo Ends In: ";
//     } else {
//         document.getElementById("timer").textContent = "Promo Ended";
//         return;
//     }

//     const timeRemaining = targetDate - now;

//     if (timeRemaining > 0) {
//         const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
//         const hours = Math.floor(
//             (timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
//         );
//         const minutes = Math.floor(
//             (timeRemaining % (1000 * 60 * 60)) / (1000 * 60)
//         );
//         const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

//         document.getElementById(
//             "timer"
//         ).textContent = `${messagePrefix}${days}d ${hours}h ${minutes}m ${seconds}s`;
//     } else {
//         document.getElementById("timer").textContent = "Promo Ended";
//     }
// }

// // Update countdown every second
// setInterval(updateCountdown, 1000);
// updateCountdown(); // Initial call

(function () {
    const input = document.getElementById("product-search");
    const table = document.getElementById("products-table");
    if (!input || !table) return;
    const rows = Array.from(table.querySelectorAll("tbody tr"));

    function filterRows() {
        const q = input.value.trim().toLowerCase();
        if (!q) {
            rows.forEach((r) => (r.style.display = ""));
            return;
        }
        rows.forEach((r) => {
            const product = r.dataset.product || "";
            const size = r.dataset.size || "";
            const match = product.includes(q) || size.includes(q);
            r.style.display = match ? "" : "none";
        });
    }

    input.addEventListener("input", filterRows);
    // optional: handle Enter to focus first visible row (accessibility)
    input.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
            input.value = "";
            filterRows();
        }
    });
})();

(function () {
    const input = document.getElementById("store-search");
    const tbody = document.querySelector("#stores-table tbody");
    if (!input || !tbody) return;
    const rows = Array.from(tbody.querySelectorAll("tr"));
    const noRow = document.createElement("tr");
    noRow.className = "bg-white";
    noRow.innerHTML =
        '<td class="py-3 px-4 text-sm text-gray-500" colspan="1">No matching stores found.</td>';

    function filter() {
        const q = input.value.trim().toLowerCase();
        let found = false;
        rows.forEach((r) => {
            const storeAttr = r.getAttribute("data-store") || "";
            const text = (storeAttr + " " + r.textContent).toLowerCase();
            const match = q === "" || text.includes(q);
            r.style.display = match ? "" : "none";
            if (match) found = true;
        });
        if (!found) {
            if (!tbody.contains(noRow)) tbody.appendChild(noRow);
        } else {
            if (tbody.contains(noRow)) tbody.removeChild(noRow);
        }
    }

    input.addEventListener("input", filter);
})();
