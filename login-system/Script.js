
// Window Scroll
window.addEventListener('scroll',()=>{
    document.querySelector('.profile-popup').style.display='none'
    document.querySelector('.add-post-popup').style.display='none'
})

// Start Profile Popup

document.querySelectorAll('#my-profile-picture, #sidebar-profile').forEach(AllProfile => {
    AllProfile.addEventListener('click',()=>{
        document.querySelector('.profile-popup').style.display='flex';

        document.getElementById('profile-upload').style.display = 'none';
    });
});

document.querySelectorAll('#delete-btn').forEach(AllProfile => {
    AllProfile.addEventListener('click',()=>{
        document.querySelector('.delete-popup').style.display='flex';
    });
});

document.querySelectorAll('.close').forEach(AllCloser=>{
    AllCloser.addEventListener('click',()=>{
        document.querySelectorAll('.profile-popup').forEach(popup=>{
            popup.style.display='none';
        });
        document.querySelectorAll('.delete-popup').forEach(popup=>{
            popup.style.display='none';
        });
    });
});

document.querySelector('#profile-upload').addEventListener('change', () => {
    const selectedFile = document.querySelector('#profile-upload').files[0];

    if (selectedFile) {
        document.querySelectorAll('#my-profile-picture img').forEach(AllMyProfileImg => {
            AllMyProfileImg.src = URL.createObjectURL(selectedFile);
        });
    }
});

// End Profile Popup

// Start Add Post Popup
document.querySelector('#crate-lg').addEventListener('click', () => {
    document.querySelector('.add-post-popup').style.display = 'flex';
});
document.querySelector('#feed-pic-upload').addEventListener('change', () => {
    document.querySelector('#postIMG').src = URL.createObjectURL(document.querySelector('#feed-pic-upload').files[0]);
});
// End Add Post Popup

// Start Edit Post Popup
document.querySelector('#edit-btn').addEventListener('click', () => {
    document.querySelector('.edit-post-popup').style.display = 'flex';
});
document.querySelector('#feed-pic-upload').addEventListener('change', () => {
    document.querySelector('#postIMG').src = URL.createObjectURL(document.querySelector('#feed-pic-upload').files[0]);
});
// End Edit Post Popup

// Start Automatic Resizing Textarea
textarea = document.querySelector("#add-post-text, #add-post");
textarea.addEventListener('input', autoResize, false);

function autoResize() {
    this.style.height = 'auto';
    this.style.height = this.scrollHeight + 'px';
}
// End Automatic Resizing Textarea