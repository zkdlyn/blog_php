
// Start Delete Confirmation Popup
document.addEventListener('DOMContentLoaded', function () {
    var deleteButtons = document.querySelectorAll('.delete-btn');
 
    deleteButtons.forEach(function (button) {
       button.addEventListener('click', function () {
          var postID = button.getAttribute('data-postid');
          var confirmDelete = confirm("Are you sure you want to delete this post?");
          if (confirmDelete) {
             window.location.href = 'delete.php?postID=' + postID;
          }
       });
    });
});
// End Delete Confirmation Popup

// Start Automatic Resizing Textarea
textarea = document.querySelector("#edit_textarea, #create_textarea");
textarea.addEventListener('input', autoResize, false);

function autoResize() {
    this.style.height = 'auto';
    this.style.height = this.scrollHeight + 'px';
}
// End Automatic Resizing Textarea

