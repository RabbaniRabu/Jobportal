function searchJobs() {
    // Get the search input value
    var searchInput = document.getElementById("search-input").value;
    var locationInput = document.getElementById("location-input").value;
  
    // Fetch data from JSON (replace 'data.json' with your JSON file path)
    fetch('./JobPortal/script/data.json')
        .then(response => response.json())
        .then(data => {
            // Filter jobs based on search input
            var filteredJobs = data.jobs.filter(job => 
                job.title.toLowerCase().includes(searchInput.toLowerCase()) &&
                job.location.toLowerCase().includes(locationInput.toLowerCase())
            );
  
            // Display the filtered jobs
            displayJobs(filteredJobs);
        })
        .catch(error => console.error('Error fetching data:', error));
  }
  
    function displayJobs(jobs) {
      var jobCardsContainer = document.getElementById("job-cards");
      jobCardsContainer.innerHTML = ""; // Clear previous cards
  
      jobs.forEach(job => {
          // Create a card for each job with a link for more details
          var card = document.createElement("div");
          card.className = "card";
  
          // Create an anchor tag and set its href attribute to the target page
          var link = document.createElement("a");
          link.href = "Jobportal/pages/jobpages.php"; // Specify the target page in the 'href' attribute
  
          // Append the card to the anchor tag
          link.appendChild(card);
  
          card.innerHTML = `
          <div class="card-body">
          <h5 class="card-title">${job.title}</h5>
          <p class="card-subtitle mb-2 text-muted">Salary: ${job.salary}</p>
          <p class="card-subtitle mb-2 text-muted" style="color: blue;">More...</p>
      </div>
          `;
  
          // Append the anchor tag to the job cards container
          jobCardsContainer.appendChild(link);
      });
    }