// This functions for the  deleting Modal
$(document).ready(function() {
    // When the delete button is clicked
    $('#myBtn').click(function() {
    var id = $(this).data('id'); // Get the id of the item to delete
    var deleteUrl = 'delete.php?id=' + id; // Create the URL to delete the item

    // Set the href of the confirm delete button to this URL
    $('#confirmDelete').attr('href', deleteUrl);
    });
});
