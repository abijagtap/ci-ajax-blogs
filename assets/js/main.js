function loadContent(url) {
	$.ajax({
		url: url,
		method: "GET",
		success: function (response) {
			$(".container").html(response);
		},
		error: function (xhr, status, error) {
			console.error("AJAX error:", error);
			alert("Failed to load content.");
		},
	});
}

// Handle clicks on links with .admin-link class
$(document).on(
	"click",
	".back-to-grid, .read-more",
	function (event) {
		event.preventDefault(); // Prevent default behavior of link
		var url = $(this).attr("href"); // Get the URL from the link
		loadContent(url);
	}
);
