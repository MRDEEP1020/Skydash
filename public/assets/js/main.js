/**
 * Template Name: NiceAdmin
 * Updated: Jan 29 2024 with Bootstrap v5.3.2
 * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
(function () {
    "use strict";

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim();
        if (all) {
            return [...document.querySelectorAll(el)];
        } else {
            return document.querySelector(el);
        }
    };

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        if (all) {
            select(el, all).forEach((e) => e.addEventListener(type, listener));
        } else {
            select(el, all).addEventListener(type, listener);
        }
    };

    /**
     * Easy on scroll event listener
     */
    const onscroll = (el, listener) => {
        el.addEventListener("scroll", listener);
    };

    /**
     * Sidebar toggle
     */
    if (select(".toggle-sidebar-btn")) {
        on("click", ".toggle-sidebar-btn", function (e) {
            select("body").classList.toggle("toggle-sidebar");
        });
    }

    /**
     * Search bar toggle
     */

    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = select("#navbar .scrollto", true);
    const navbarlinksActive = () => {
        let position = window.scrollY + 200;
        navbarlinks.forEach((navbarlink) => {
            if (!navbarlink.hash) return;
            let section = select(navbarlink.hash);
            if (!section) return;
            if (
                position >= section.offsetTop &&
                position <= section.offsetTop + section.offsetHeight
            ) {
                navbarlink.classList.add("active");
            } else {
                navbarlink.classList.remove("active");
            }
        });
    };
    window.addEventListener("load", navbarlinksActive);
    onscroll(document, navbarlinksActive);

    /**
     * Toggle .header-scrolled class to #header when page is scrolled
     */
    let selectHeader = select("#header");
    if (selectHeader) {
        const headerScrolled = () => {
            if (window.scrollY > 100) {
                selectHeader.classList.add("header-scrolled");
            } else {
                selectHeader.classList.remove("header-scrolled");
            }
        };
        window.addEventListener("load", headerScrolled);
        onscroll(document, headerScrolled);
    }

    /**
     * Back to top button
     */
    let backtotop = select(".back-to-top");
    if (backtotop) {
        const toggleBacktotop = () => {
            if (window.scrollY > 100) {
                backtotop.classList.add("active");
            } else {
                backtotop.classList.remove("active");
            }
        };
        window.addEventListener("load", toggleBacktotop);
        onscroll(document, toggleBacktotop);
    }

    /**
     * Initiate tooltips
     */

    /**
     * Initiate quill editors
     */

    /**
     * Initiate TinyMCE Editor
     */

    /**
     * Initiate Bootstrap validation check
     */
    var needsValidation = document.querySelectorAll(".needs-validation");

    Array.prototype.slice.call(needsValidation).forEach(function (form) {
        form.addEventListener(
            "submit",
            function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add("was-validated");
            },
            false
        );
    });

    /**
     * Initiate Datatables
     */

    /**
     * Autoresize echart charts
     */
})();

// Select elements for referencing
const searchContainer = document.querySelector(".search-container");
const navbarHeight = searchContainer.offsetHeight;
const inputElements = searchContainer.querySelectorAll(
    ".search-input-group input"
);
const sidebar = document.querySelector(".sidebar"); // Assuming sidebar element

// Listen for scroll events
window.addEventListener("scroll", function () {
    const scrollY = window.scrollY;

    // Make search container sticky when scrolled past a certain point
    if (scrollY > navbarHeight) {
        // Adjusted condition for better positioning
        searchContainer.classList.add("sticky");

        // Apply CSS adjustments for sticky state:
        searchContainer.style.marginRight = "200px";
        searchContainer.style.marginBottom = "100px";
        searchContainer.style.marginTop = "-3px";
        searchContainer.style.width = "-12px";
        inputElements.forEach((input) => {
            input.style.width = "100px"; // Adjust initial width as desired
            input.style.marginRight = "105px"; // Adjust initial margin as desired
        });

        // Dynamically adjust spacing based on scroll position:
        const scrollFactor = Math.min(scrollY / navbarHeight, 1); // Normalized scroll factor
        const reducedWidth = 160 * scrollFactor; // Adjust width based on scroll
        inputElements.forEach((input) => {
            input.style.width = `${reducedWidth}px`;
            input.style.marginRight = "5px";
        });
    } else {
        searchContainer.classList.remove("sticky");

        // Reset CSS adjustments when not sticky:
        searchContainer.style.marginRight = "";
        searchContainer.style.marginBottom = "";
        searchContainer.style.marginTop = "";
        inputElements.forEach((input) => {
            input.style.width = ""; // Reset width to initial value
            input.style.marginRight = ""; // Reset margin to initial value
        });
    }
});

// Dropdown

// JavaScript for the dropdown functionality
const dropdowns = document.querySelectorAll(".dropdowns");

dropdowns.forEach((dropdowns) => {
    const title = dropdowns.querySelector(".dropdown__title");
    const content = dropdowns.querySelector(".dropdown__content");

    content.addEventListener("click", (event) => {
        const selectedOption = event.target.closest("a");
        if (selectedOption) {
            title.textContent = selectedOption.textContent;
            dropdowns.classList.remove("active");
        }
    });

    title.addEventListener("click", () => {
        dropdowns.classList.toggle("active");
    });
});

// Close dropdowns when clicking outside
document.addEventListener("click", (event) => {
    dropdowns.forEach((dropdowns) => {
        if (!dropdowns.contains(event.target)) {
            dropdowns.classList.remove("active");
        }
    });
});

document.querySelectorAll('.option-button').forEach(function(button) {
  button.addEventListener('click', function() {
    var filter = this.getAttribute('data-filter');

    document.querySelectorAll('.option-button').forEach(function(btn) {
      btn.classList.remove('active');
    });

    this.classList.add('active');

    document.querySelectorAll('.flight-card').forEach(function(card) {
      card.classList.remove('best', 'cheapest', 'recommended'); // Remove previous highlights

      var price = parseInt(card.getAttribute('data-price'));
      var recommended = card.getAttribute('data-recommended') === 'true';
      var priceCard = card.nextElementSibling; // Get the corresponding price card

      if (filter === 'best') {
        var bestPrice = Math.min.apply(Math, Array.from(document.querySelectorAll('.flight-card')).map(function(c) {
          return parseInt(c.getAttribute('data-price'));
        }));
        if (price === bestPrice) {
          card.classList.add('best');
        }
      } else if (filter === 'cheaper') {
        var cheapestPrice = Math.min.apply(Math, Array.from(document.querySelectorAll('.flight-card')).map(function(c) {
          return parseInt(c.getAttribute('data-price'));
        }));
        if (price === cheapestPrice) {
          card.classList.add('cheapest');
        }
      } else if (filter === 'recommended') {
        if (recommended) {
          card.classList.add('recommended');
        }
      }

      // Ensure price cards are always visible
      if (priceCard) {
        priceCard.style.display = 'flex';
      }
    });
  });
});


// Example destinations for autocomplete

// document.querySelectorAll(".option-button").forEach(function (button) {
//   button.addEventListener("click", function () {
//     var filter = this.getAttribute("data-filter");

//     document.querySelectorAll(".option-button").forEach(function (btn) {
//       btn.classList.remove("active");
//     });

//     this.classList.add("active");

//     document.querySelectorAll(".card-details").forEach(function (card) {
//       var price = parseInt(card.getAttribute("data-price"));
//       var recommended = card.getAttribute("data-recommended") === "true";

//       var priceCard = card.querySelector(".price-card"); // Find the corresponding price card

//       card.classList.remove("best", "cheapest", "recommended"); // Remove previous highlights

//       if (filter === "best") {
//         var allPrices = Array.from(document.querySelectorAll(".card-details")).map(function (c) {
//           return parseInt(c.getAttribute("data-price"));
//         });
//         var bestPrice = Math.min(...allPrices);

//         if (price === bestPrice) {
//           card.classList.add("best");
//         }
//       } else if (filter === "cheaper") {
//         // Add logic similar to "best" to find cheapest flights and add "cheapest" class
//       } else if (filter === "recommended") {
//         if (recommended) {
//           card.classList.add("recommended");
//         }
//       }

//       if (priceCard) {
//         priceCard.style.display = "flex"; // Ensure price cards are always visible
//       }
//     });
//   });
// });


const destinations = [];

function showDestinations(inputId) {
    const input = document.getElementById(inputId);
    const filter = input.value.toUpperCase();
    const destinationList = document.getElementById("destinationList");
    destinationList.innerHTML = "";
    destinations.forEach(function (destination) {
        if (destination.startsWith(filter)) {
            const option = document.createElement("div");
            option.textContent = destination;
            option.addEventListener("click", function () {
                input.value = destination;
                destinationList.innerHTML = "";
            });
            destinationList.appendChild(option);
        }
    });
}
