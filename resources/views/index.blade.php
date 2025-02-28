
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weetas - #1 Real Estate Company in Bahrain</title>
    <link rel='stylesheet' id='weetas2024-style-css' href='https://www.weetas.com/wp-includes/css/dist/block-library/style.min.css?ver=6.7.2' media='all' />

    <link rel='stylesheet' id='weetas2024-style-css' href='/assets/css/style.css' media='all' />
    
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"/>
   
    <link rel='stylesheet' id='swiper-css-css' href='https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css?ver=6.7.2' media='all' />

    

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/css/intlTelInput.css'/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">



    @if (file_exists(public_path(path: 'build/manifest.json')) || file_exists(public_path('hot')))
        @vite(entrypoints: ['resources/js/app.js'])
    @endif

</head>
<body id="app" class="home blog hfeed no-sidebar english-language">



<exapmle-component></exapmle-component>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.1/jquery-migrate.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/intlTelInput.min.js?ver=23.0.4"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 

    <script src="{{ asset('assets/js/main.js') }}" id="weetas2024-js" defer></script>


     <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     const swiper = new Swiper('.swiper', {
        //         // Swiper options (customize as needed)
        //         loop: true, // Enable loop mode
        //         pagination: {
        //             el: '.swiper-pagination',
        //             clickable: true,
        //         },
        //         navigation: {
        //             nextEl: '.swiper-button-next',
        //             prevEl: '.swiper-button-prev',
        //         },
        //         // ... other options
        //     });

        //     // ... your other JavaScript code (dropdowns, insights, etc.) can go here or in your main.js file
        // });

        
    </script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchForm = document.getElementById('seaech-form');
        const searchTabs = searchForm.querySelector('.search-tabs ul');
        const propertyTypes = searchForm.querySelector('#search-btype ul');
        const searchFields = searchForm.querySelector('.search-fields');
        const locationInput = searchFields.querySelector('#town-search');
        const keywordInput = searchFields.querySelector('#keyword-value');
        const searchButton = searchFields.querySelector('#search-submit');
        const advancedSearchToggle = document.getElementById('advanced-search-toggle');
        const advancedSearchForm = document.getElementById('advanced-search-form');
    
        let selectedType = 'all'; // Default property type
        let selectedListingType = 'sale'; // Default listing type (buy/rent)
    
        // Handle Search Tab Clicks (Buy/Rent)
        searchTabs.addEventListener('click', function(event) {
            const tab = event.target.closest('li');
            if (!tab) return; // Clicked not on a tab
    
            searchTabs.querySelectorAll('li').forEach(li => li.classList.remove('active'));
            tab.classList.add('active');
            selectedListingType = tab.dataset.id;
            console.log("Listing Type Selected:", selectedListingType); // For debugging
        });
    
        // Handle Property Type Clicks
        propertyTypes.addEventListener('click', function(event) {
            const type = event.target.closest('li');
            if (!type) return;
    
            propertyTypes.querySelectorAll('li').forEach(li => li.classList.remove('active'));
            type.classList.add('active');
            selectedType = type.dataset.id;
            console.log("Property Type Selected:", selectedType); // For debugging
        });
    
        locationInput.addEventListener('input', function() {
            keywordInput.value = locationInput.value;  // Update the hidden input field
        });
    
        searchButton.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default form submission
    
            // Perform search logic here
            console.log("Performing search...");
            console.log("Location:", keywordInput.value);
            console.log("Property Type:", selectedType);
            console.log("Listing Type:", selectedListingType);
        });
    
        // Toggle Advanced Search Form
        advancedSearchToggle.addEventListener('click', function() {
            if (advancedSearchForm.style.display === 'none') {
                advancedSearchForm.style.display = 'block';
            } else {
                advancedSearchForm.style.display = 'none';
            }
        });
    });
</script>
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('.navbar-nav .dropdown');
    
    navItems.forEach(item => {
        let timeout;
        
        item.addEventListener('mouseenter', () => {
            clearTimeout(timeout);  
            const dropdownMenu = item.querySelector('.dropdown-menu');
            dropdownMenu.style.display = 'block';  
        });
    
        item.addEventListener('mouseleave', () => {
            const dropdownMenu = item.querySelector('.dropdown-menu');
            timeout = setTimeout(() => {
                dropdownMenu.style.display = 'none'; 
            }, 300); 
        });
    });
    });
    
</script> --}}



{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
    function adjustInsightsDisplay() {
        const insightsContainer = document.getElementById('insights-container');
        const insightCols = insightsContainer.getElementsByClassName('insight-col');
    
        if (window.innerWidth <= 576) {
            for (let i = 2; i < insightCols.length; i++) {
                insightCols[i].style.display = 'none';
            }
        } else {
            for (let i = 0; i < insightCols.length; i++) {
                insightCols[i].style.display = 'block';
            }
        }
    }
    
    window.addEventListener('resize', adjustInsightsDisplay);
    adjustInsightsDisplay();
    });
    
</script>  --}}
</body>

</html>