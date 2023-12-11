function navigateToPage(pageUrl) {
    window.location.href = pageUrl;
}

function filterJobs() {
    var filterValue = document.getElementById('jobFilter').value.toLowerCase();
    var jobCards = document.querySelectorAll('.card');

    jobCards.forEach(function (card) {
        var jobTitle = card.querySelector('.card-title').innerText.toLowerCase();

        if (jobTitle.includes(filterValue)) {
            card.style.display = 'block'; // Show the card
        } else {
            card.style.display = 'none'; // Hide the card
        }
    });
}

function filterJobsByExperience() {
    var experienceRange = parseInt(document.getElementById('experienceRange').value);
    document.getElementById('experienceValue').textContent = experienceRange + ' Years';

    // Placeholder logic for filtering jobs by experience range
    var jobCards = document.querySelectorAll('.card');

    jobCards.forEach(function (card) {
        var experience = parseInt(card.getAttribute('data-experience'));

        if (experience >= 0 && experience <= experienceRange) {
            card.style.display = 'block'; // Show the card
        } else{
            card.style.display = 'none'; // Hide the card
        }
    });
}