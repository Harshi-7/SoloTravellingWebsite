const header=document.querySelector("header");

window.addEventListener("scroll",function(){
    header.classList.toggle("sticky",window.scrollY >60);
})


// Sample data for other profiles (in real app, you'd fetch from server)
const profiles = [
    { name: "Jane Smith", email: "jane.smith@example.com", bio: "Lorem ipsum dolor sit amet, consectetur adipiscing elit.", picture: "i2.jpg" },
    { name: "Michael Johnson", email: "michael.johnson@example.com", bio: "Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.", picture: "i3.jpg" },
    { name: "Emily Davis", email: "emily.davis@example.com", bio: "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", picture: "i4.jpg" }
];

// Function to display other profiles
function displayOtherProfiles() {
    const profileList = document.getElementById('profile-list');

    profiles.forEach(profile => {
        const profileCard = document.createElement('div');
        profileCard.classList.add('profile');
        profileCard.innerHTML = `
            <img src="${profile.picture}" alt="${profile.name}'s Profile Picture">
            <p>Name: ${profile.name}</p>
            <p>Email: ${profile.email}</p>
            <p>Bio: ${profile.bio}</p>
        `;
        profileList.appendChild(profileCard);
    });
}

// Display other profiles when the page loads
document.addEventListener('DOMContentLoaded', displayOtherProfiles);
