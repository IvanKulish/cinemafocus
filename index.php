<?php get_header(); ?> <!-- Подключаем функицей php шапку сайта (header на крутом сленге) -->

    <!-- Главная секция сайта (анонсы) -->
    <section class="hero-main" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/venom.png');"> 
        <div class="hero-content">
        <h1>Venom 3 <span class="rating">★★★★★</span></h1>
        <p>In the third installment of the franchise, Eddie Brock (Tom Hardy) and his alien symbiote Venom return to battle new foes and face even greater challenges.</p>
        <button class="custom-button">Watching a film</button>
        </div>
    </section>
    <!-- /Конец/ Главная секция сайта (анонсы) -->

    <!-- Секция фильтры (сортировка фильмов по каким то критериям) -->
   <section class="sorting">
    <div class="content"> <!-- Группа всех пунктов -->
        <h1>Sorting</h1>
        <div class="filter-container">
        <div class="dropdown"> <!-- Сам пункт (неактивный элемент сортировки) -->
            <button class="dropdown-button">Year <img src="wp-content/themes/cinemafocus/assets/images/arrow.svg" alt="Icon" class="icon"></button>
            <div class="dropdown-content"> <!-- Выпадающий список с пунктами для сортировки -->
                <label><input type="checkbox" value="2019">2019</label> 
                <label><input type="checkbox" value="2020">2020</label>
                <label><input type="checkbox" value="2021">2021</label> <!-- Чекбоксы, чтобы выбрать что то конкретное -->
                <label><input type="checkbox" value="2022">2022</label>
                <label><input type="checkbox" value="2023">2023</label>
                <label><input type="checkbox" value="2024">2024</label>
            </div> 
        </div>
         <!-- По такому же принципу устроены все остальные варианты (они ниже) для сортировки -->

        <div class="dropdown">
            <button class="dropdown-button">Genre <img src="wp-content/themes/cinemafocus/assets/images/arrow.svg" alt="Icon" class="icon"></button>
            <div class="dropdown-content">
                <label><input type="checkbox" value="Action">Action</label>
                <label><input type="checkbox" value="Comedy">Comedy</label>
                <label><input type="checkbox" value="Drama">Drama</label>
                <label><input type="checkbox" value="Drama">Fantasy</label>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropdown-button">Selections <img src="wp-content/themes/cinemafocus/assets/images/arrow.svg" alt="Icon" class="icon"></button>
            <div class="dropdown-content">
                <label><input type="checkbox" value="Top Rated">Top Rated</label>
                <label><input type="checkbox" value="Trending">Trending</label>
                <label><input type="checkbox" value="New Releases">New Releases</label>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropdown-button">Country <img src="wp-content/themes/cinemafocus/assets/images/arrow.svg" alt="Icon" class="icon"></button>
            <div class="dropdown-content">
                <label><input type="checkbox" value="USA">USA</label>
                <label><input type="checkbox" value="UK">UK</label>
                <label><input type="checkbox" value="France">France</label>
                <label><input type="checkbox" value="Poland">Poland</label>
                <label><input type="checkbox" value="Germany">Germany</label>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropdown-button">Rating <img src="wp-content/themes/cinemafocus/assets/images/arrow.svg" alt="Icon" class="icon"></button>
            <div class="dropdown-content">
                <label><input type="checkbox" value="G">G</label>
                <label><input type="checkbox" value="PG">PG</label>
                <label><input type="checkbox" value="R">R</label>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropdown-button">Type <img src="wp-content/themes/cinemafocus/assets/images/arrow.svg" alt="Icon" class="icon"></button>
            <div class="dropdown-content">
                <label><input type="checkbox" value="Movie">Movie</label>
                <label><input type="checkbox" value="Series">Series</label>
                <label><input type="checkbox" value="Documentary">Documentary</label>
            </div>
        </div>
   </section> 
    <!-- /Конец/ Секция фильтры (сортировка фильмов по каким то критериям)-->

    <!-- Секция с самими фильмами. (Распишу одну карточку, все остальные так же работают) -->
        <section class="movie-section">
            <div class="movie-card"> <!-- Задал группу, стиль которой потом прописываю в css -->
                <img src="wp-content/themes/cinemafocus/assets/images/deadpool.jpg" alt="Deadpool & Wolverine"> <!-- Картинка (постер фильма) -->
                <div class="movie-info"> <!-- Группа текста со всей информацией -->
                    <div class="head">  <!-- Группа заголовка и рейтинга (звезд) -->
                        <h2>Deadpool & Wolverine</h2> 
                        <span class="rating-info">★★★★★</span>
                    </div>                  <!-- /Конец/ Группа заголовка и рейтинга (звезд) -->
                    <p>Release Year: <strong class="second-text">2024</strong></p>
                    <p>Country: <strong>USA</strong></p>  <!-- Весь остальной текст и описание -->
                    <p>Genre: <strong>Action, Adventure, Comedy</strong></p>
                    <p>Description: <strong class="description">In this highly anticipated crossover, two of Marvel's most iconic anti-heroes, Deadpool (Ryan Reynolds) and Wolverine (Hugh Jackman), team up in a hilariously action-packed adventure. Thrown together by a twist of fate, Deadpool's sarcastic wit clashes with...</strong></p>
                    <button class="watch-button">Watching a movie</button> <!-- Кнопка -->
                </div>
            </div>
            <div class="movie-card">
                <img src="wp-content/themes/cinemafocus/assets/images/venom3.png" alt="Deadpool & Wolverine">
                <div class="movie-info">
                    <div class="head">
                        <h2>Venom 3</h2>
                        <span class="rating-info">★★★★★</span>
                    </div>
                    <p>Release Year: <strong class="second-text">2024</strong></p>
                    <p>Country: <strong>USA</strong></p>
                    <p>Genre: <strong>Action, Sci-Fi, Thriller</strong></p>
                    <p>Description: <strong class="description">Venom 3 brings back Eddie Brock (Tom Hardy) and his symbiotic alter-ego, Venom, in a new chapter that dives deeper into their complicated bond. Facing a powerful new enemy and uncovering secrets of the symbiote's origins, Eddie must confront his inner darkness...</strong></p>
                    <button class="watch-button">Watching a movie</button>
                </div>
            </div>
            <div class="movie-card">
                <img src="wp-content/themes/cinemafocus/assets/images/redone.png" alt="Deadpool & Wolverine">
                <div class="movie-info">
                    <div class="head">
                        <h2>Red One</h2>
                        <span class="rating-info">★★★★★</span>
                    </div>
                    <p>Release Year: <strong class="second-text">2024</strong></p>
                    <p>Country: <strong>USA</strong></p>
                    <p>Genre: <strong>Action, Adventure, Comedy</strong></p>
                    <p>Description: <strong class="description">Dwayne Johnson and Chris Evans team up in a thrilling holiday adventure to rescue Santa Claus, who has been kidnapped. Joined by J.K. Simmons as Santa and Lucy Liu, the movie brings humor and action to a unique festive story...</strong></p>
                    <button class="watch-button">Watching a movie</button>
                </div>
            </div>
            <div class="movie-card">
                <img src="wp-content/themes/cinemafocus/assets/images/moana.jpg" alt="Deadpool & Wolverine">
                <div class="movie-info">
                    <div class="head">
                        <h2>Moana 2</h2>
                        <span class="rating-info">★★★★★</span>
                    </div>
                    <p>Release Year: <strong class="second-text">2024</strong></p>
                    <p>Country: <strong>USA</strong></p>
                    <p>Genre: <strong>Animation, Family, Fantasy</strong></p>
                    <p>Description: <strong class="description">The beloved Disney characters Moana and Maui return in a new adventure that promises to captivate audiences with stunning animation and heartfelt storytelling, diving deeper into the enchanting world of the South Pacific...</strong></p>
                    <button class="watch-button">Watching a movie</button>
                </div>
            </div>
            <div class="movie-card">
                <img src="wp-content/themes/cinemafocus/assets/images/queer.png" alt="Deadpool & Wolverine">
                <div class="movie-info">
                    <div class="head">
                        <h2>Queer</h2>
                        <span class="rating-info">★★★★★</span>
                    </div>
                    <p>Release Year: <strong class="second-text">2024</strong></p>
                    <p>Country: <strong>USA</strong></p>
                    <p>Genre: <strong>Drama, Romance</strong></p>
                    <p>Description: <strong class="description">Directed by Luca Guadagnino and based on William S. Burroughs' novel, the film follows a man's exploration of 1940s Mexico City nightlife, capturing a complex relationship with an American serviceman...</strong></p>
                    <button class="watch-button">Watching a movie</button>
                </div>
            </div>
            <div class="movie-card">
                <img src="wp-content/themes/cinemafocus/assets/images/lord.jpg" alt="Deadpool & Wolverine">
                <div class="movie-info">
                    <div class="head">
                        <h2>The Lord of the Rings: The War of the Rohirrim</h2>
                        <span class="rating-info">★★★★★</span>
                    </div>
                    <p>Release Year: <strong class="second-text">2024</strong></p>
                    <p>Country: <strong>USA</strong></p>
                    <p>Genre: <strong>Action, Adventure, Comedy</strong></p>
                    <p>Description: <strong class="description">In this highly anticipated crossover, two of Marvel's most iconic anti-heroes, Deadpool (Ryan Reynolds) and Wolverine (Hugh Jackman), team up in a hilariously action-packed adventure. Thrown together by a twist of fate, Deadpool's sarcastic wit clashes with...</strong></p>
                    <button class="watch-button">Watching a movie</button>
                </div>
            </div>
    

            <div class="pagination"> <!-- Это навигация для переключения страниц (1 2 3 4...) -->
                <button>&laquo;</button>
                <button>1</button>
                <button class="active">2</button>
                <button>3</button>
                <button>4</button>
                <button>5</button>
                <button>&raquo;</button>
            </div>

        </section>
    <!-- /Конец/ Секция с самими фильмами. -->

    <!-- Секция "Скоро в кинотеатре" -->
    <section class="soon-cinema">

        <h1>Soon in Cinema</h1>

        <div class="soon-section">
                <div class="movie-card">  <!-- Карточки сделаны так же, как и в прошлой секции -->
                    <img src="wp-content/themes/cinemafocus/assets/images/avatar.jpg" alt="Deadpool & Wolverine">
                    <div class="movie-info">
                        <h2>Avatar 4</h2>
                        <p>Release Year: <strong class="second-text">December 2025</strong></p>
                        <p>Country: <strong>USA</strong></p>
                        <p>Genre: <strong>Fiction, Adventure</strong></p>
                        <p>Description: <strong class="description">The sequel to James Cameron's epic saga of the distant planet Pandora. In the fourth part of the story, Jake Sully and his family face new threats and explore the uncharted...</strong></p>
                        <button class="read-button">Read more</button>
                    </div>
                </div>
                <div class="movie-card">
                    <img src="wp-content/themes/cinemafocus/assets/images/shrek.jpg" alt="Deadpool & Wolverine">
                    <div class="movie-info">
                        <h2>Shrek 5</h2>
                        <p>Release Year: <strong class="second-text">November 2025</strong></p>
                        <p>Country: <strong>USA</strong></p>
                        <p>Genre: <strong>Comedy, Adventure, Family</strong></p>
                        <p>Description: <strong class="description">In the highly anticipated fifth installment of the iconic Shrek franchise, the famous characters return for a new adventure. Shrek, Fiona and Donkey go in search of their roots and meet unexpected new characters....</strong></p>
                        <button class="read-button">Read more</button>
                    </div>
                </div>
        </div>

        <!-- Та же самая навигация один в один -->
        <div class="pagination">
                <button>&laquo;</button>
                <button>1</button>
                <button class="active">2</button>
                <button>3</button>
                <button>4</button>
                <button>5</button>
                <button>&raquo;</button>
            </div>
    </section>
    <!-- /Конец/ Секция "Скоро в кинотеатре" -->

    <!-- Секция "Новости" -->
    <section class="news">
        <h1>News</h1> <!-- Заголовок -->
        <div class="cards">
            <div class="news-card">
                    <h4>8 September 2024</h4> <!-- Дата написания новости -->
                    <h2>“Shrek 5” filming starts - favorite characters return to the screen</h2> <!-- Заголовок новости -->
                    <p>DreamWorks Studios has officially announced that filming has begun on the fifth movie in the Shrek series. The new installment promises to be full of humor, unexpected twists and, of course, beloved characters including...</p> <!-- Описание новости -->
                    <button class="read-button">Read more</button> <!-- Кнопка "Подробнее" -->
            </div>
            <div class="news-card">
                    <h4>16 august 2024</h4>
                    <h2>The new Avatar 4 movie trailer is an impressive look at Pandora</h2>
                    <p>20th Century Studios has released a new trailer for the fourth installment of the Avatar saga. Fans can see stunning views of new locations of Pandora and learn what threats the main characters will face...</p>
                    <button class="read-button">Read more</button>
            </div>
        </div>
    </section>
    <!-- /Конец/ Секция "Новости" -->

    <!-- Секция Подписка на рассылку новостей -->
    <section class="form" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/subscribe.png');"> <!-- Подключаем секции задний фон в виде картинки при помощи инициализации благодаря php (в другом случае картинка просто не будет отображаться) -->
        <div class="form-text"> <!-- Группа Заголовков и инпутов -->
            <h2>Subscribe to our newsletter</h2> <!-- Заголовок -->
            <p>Stay up to date with the latest news, premieres and promotions in the movie world! Fill out the form below to receive exclusive updates directly to your inbox.</p2> <!-- Описание -->
            <input class="input-container" placeholder="Name"> <!-- Инпут "Имя" -->
            <input class="input-container" placeholder="Email"> <!-- Инпут "Эл. почта" -->
        <button class="custom-button">Subscribe</button> <!-- Кнопка "Подписаться" (не на канал.. :) -->
    </section>
    <!-- /Конец/ Секция Подписка на рассылку новостей -->

</body>

<?php get_footer(); ?>     <!-- Подключаем функицей php футер -->