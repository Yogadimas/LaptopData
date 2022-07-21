const flashData = $(".flash-data").data("flashdata");
const CACHE_KEY = "title";
let getItemTitle;
function checkForStorage() {
	return typeof Storage !== "undefined";
}

if (checkForStorage()) {
	getItemTitle = localStorage.getItem(CACHE_KEY);
}
if (flashData) {
	Swal.fire({
		title: "Deleted",
		text: getItemTitle + " laptop data " + flashData + " successfully",
		icon: "success",
		confirmButtonColor: "#1E7E34",
		allowOutsideClick: false,
	}).then((result) => {
		if (result.isConfirmed) {
			window.localStorage.clear();
		}
	});
}

// delete button
$(".btn-delete").on("click", function (e) {
	const currentRow = $(this).closest("tr");
	const getTitle = currentRow.find("td:eq(1)").html();
	if (checkForStorage()) {
		window.localStorage.setItem(CACHE_KEY, getTitle);
	}

	e.preventDefault();

	const href = $(this).attr("href");

	Swal.fire({
		position: "top-end",
		title: "Delete the " + getTitle + " ?",
		text: "you will not be able to recover it",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Delete",
	}).then((result) => {
		if (result.isConfirmed) {
			document.location.href = href;
		} else {
            window.localStorage.clear();
        }
	});
});
