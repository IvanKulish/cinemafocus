       let currentPage = 1;
        const totalPages = 5;

        function updatePagination() {
            const paginationButtons = document.querySelectorAll('.pagination button');
            paginationButtons.forEach(button => {
                button.classList.remove('active');
            });
            const activeButton = document.querySelector(`.pagination button[data-page="${currentPage}"]`);
            if (activeButton) {
                activeButton.classList.add('active');
            }
        }

        function goToPage(pageNumber) {
            if (pageNumber < 1 || pageNumber > totalPages) return;
            currentPage = pageNumber;
            updatePagination();
            loadMovies();
        }

        function previousPage() {
            if (currentPage > 1) {
                goToPage(currentPage - 1);
            }
        }

        function nextPage() {
            if (currentPage < totalPages) {
                goToPage(currentPage + 1);
            }
        }

        function loadMovies() {
            const movieSection = document.querySelector('.movie-section');
            movieSection.innerHTML = '';
            // Example: Load movies based on currentPage (this should be replaced by actual data)
            for (let i = 1; i <= 2; i++) {
                const movieCard = document.createElement('div');
                movieCard.className = 'movie-card';
                movieCard.innerHTML = `
                    <img src="wp-content/themes/cinemafocus/assets/images/deadpool.jpg" alt="Deadpool & Wolverine">
                    <div class="movie-info">
                        <h2>Deadpool & Wolverine - Page ${currentPage} Movie ${i}</h2>
                        <p>Release Year: <strong>2024</strong></p>
                        <p>Country: <strong>USA</strong></p>
                        <p>Genre: <strong>Action, Adventure, Comedy</strong></p>
                        <p>Description: In this highly anticipated crossover, two of Marvel's most iconic anti-heroes, Deadpool (Ryan Reynolds) and Wolverine (Hugh Jackman), team up in a hilariously action-packed adventure...</p>
                        <button class="watch-button">Watching a movie</button>
                    </div>
                `;
                movieSection.appendChild(movieCard);
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const pagination = document.querySelector('.pagination');
            pagination.innerHTML = '';
            // Create pagination buttons
            const prevButton = document.createElement('button');
            prevButton.innerHTML = '&laquo;';
            prevButton.addEventListener('click', previousPage);
            pagination.appendChild(prevButton);

            for (let i = 1; i <= totalPages; i++) {
                const pageButton = document.createElement('button');
                pageButton.innerText = i;
                pageButton.setAttribute('data-page', i);
                pageButton.addEventListener('click', () => goToPage(i));
                pagination.appendChild(pageButton);
            }

            const nextButton = document.createElement('button');
            nextButton.innerHTML = '&raquo;';
            nextButton.addEventListener('click', nextPage);
            pagination.appendChild(nextButton);

            loadMovies();
            updatePagination();
        });