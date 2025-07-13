<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eni</title>
    <link rel="stylesheet" href="./css/styles.css"/>
  </head>
  <body>
    <header>
      <a href="/"><img src="./images/logo.png" alt="logo" class="logo"></a>
      <nav>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Content Management</a></li>
          <li><a href="">Interactive Tools</a></li>
          <li><a href="">Feedback</a></li>
        </ul>
      </nav>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <button>Search</button>
      </div>
    </header>
    <main>
      <!-- Featured Articles -->
      <section class="section">
        <div class="section-header">
          <h2>Featured Articles</h2>
          <a href="#">More →</a>
        </div>
        <div class="card-grid">
          <div class="card">
            <img src="./images/1.png" alt="card_image">
            <h3>Emotional Health</h3>
            <div class="author">
              <h4>Author</h4>
              <span class="time">a min ago</span>
            </div>       
            <p>Fostering a sense of well - being and resilience.It’s about helping children learn to recognise and express their emotion in a health way .</p>
          </div>
          <div class="card">
            <img src="./images/2.png" alt="card_image">
            <h3>Sensory Processing</h3>
            <div class="author">
              <h4>Author</h4>
              <span class="time">a min ago</span>
            </div>       
            <p>How the brain receives , organises and responds to sensory information from the body and environment.</p>
          </div>     
        </div>
      </section>
      <!-- Interactive Features -->
      <section class="section">
        <div class="section-header">
          <h2>Interactive Features</h2>
          <a href="#">More <i>Arrow Icon</i></a>
        </div>
        <div class="card-grid">
          <div class="card">
            <img src="./images/3.png" alt="Self Assessment Quiz"/>
            <h3>Self - Assessment Quiz</h3>
            <small>Author | Date</small>
          </div>
          <div class="card">
            <img src="./images//4.png" alt="Learning Challenges Quiz"/>
            <h3>Learning Challenges Quiz</h3>
            <small>Author | Date</small>
          </div>
          <div class="card">
            <img src="./images/5.png" alt="Developmental Milestones Quiz"/>
            <h3>Developmental Milestone Quiz</h3>
            <small>Author | Date</small>
          </div>
        </div>        
      </section>  
    </main>
    <script src="./js/scripts.js"></script>
  </body>
</html>