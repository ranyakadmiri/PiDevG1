// When the document is ready
document.addEventListener('DOMContentLoaded', function () {
    // Get the search input field
    var searchInput = document.getElementById('searchInput');

    // Add an event listener for input changes
    searchInput.addEventListener('input', function () {
        // Get the search query
        var query = searchInput.value;

        // Make an AJAX request to the search endpoint
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Update the offers list container with the response
                    document.getElementById('offresList').innerHTML = xhr.responseText;
                } else {
                    console.error('Error:', xhr.status);
                }
            }
        };
        xhr.open('GET', '/search?title=' + encodeURIComponent(query), true);
        xhr.send();
    });
});
