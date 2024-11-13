// JavaScript to show and hide the update profile container
const btnOpen = document.getElementById('btn_open_update_profile_container');
const btnClose = document.getElementById('btn_close_update_profile_container');
const profileContainer = document.getElementById('update_profile_container');

btnOpen.addEventListener('click', () => {
    profileContainer.classList.remove('hidden'); // Show the container
    profileContainer.classList.add('flex'); // Show the container
});

btnClose.addEventListener('click', () => {
    profileContainer.classList.add('hidden'); // Hide the container
    profileContainer.classList.remove('flex'); // Hide the container
});
