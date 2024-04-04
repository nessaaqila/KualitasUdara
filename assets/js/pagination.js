$(document).ready(function() {
        // Function to store scroll position
        function storeScrollPosition() {
            sessionStorage.setItem('scrollPosition', $(window).scrollTop());
        }

        // Function to restore scroll position
        function restoreScrollPosition() {
            var scrollPosition = sessionStorage.getItem('scrollPosition');
            if (scrollPosition !== null) {
                $(window).scrollTop(scrollPosition);
            }
        }

        // Restore scroll position when the page loads
        restoreScrollPosition();

        // Handle pagination links
        $('#pagination a').on('click', function(e) {
            e.preventDefault();
            var page = $(this).attr('href').split('=')[1];

            // Store the current scroll position before navigating
            storeScrollPosition();

            // Navigate to the new page
            window.location.href = '?halaman=' + page;
        });
    });