<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background: #f4f4f4;
  margin: 0;
}

header {
  background-color: #3498db;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
  border-radius: 0 0 16px 16px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

nav {
  float: left;
  width: 30%;
  min-height: 300px;
  background: #eaf6fb;
  padding: 20px;
  border-radius: 16px;
  margin-right: 2%;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
  border: 2px solid #3498db;
}

nav ul {
  list-style-type: none;
  padding: 0;
}

nav ul li {
  margin-bottom: 18px;
}

nav ul li a {
  text-decoration: none;
  color: #3498db;
  font-weight: bold;
  font-size: 18px;
  transition: color 0.2s;
}
nav ul li a:hover {
  color: #217dbb;
}

article {
  float: left;
  padding: 20px;
  width: 68%;
  background-color: #fff;
  min-height: 300px;
  border-radius: 16px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
  border: 2px solid #eaf6fb;
}

section {
  background: #f9fbfd;
  padding: 24px 0;
  border-radius: 18px;
  margin: 24px 0;
}
section::after {
  content: "";
  display: table;
  clear: both;
}

footer {
  background-color: #3498db;
  padding: 14px;
  text-align: center;
  color: white;
  border-radius: 16px 16px 0 0;
  margin-top: 32px;
}

@media (max-width: 600px) {
  nav, article {
    width: 100%;
    min-height: auto;
    margin-right: 0;
    margin-bottom: 16px;
  }
}
</style>
</head>
<body>

<h2 style="text-align:center;">AMIE</h2>
<p style="text-align:center;">This is my Website
<header>
  <h2>Cities</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="home_page.php?page=london">London</a></li>
      <li><a href="home_page.php?page=paris">Paris</a></li>
      <li><a href="home_page.php?page=tokyo">Tokyo</a></li>
    </ul>
  </nav>
  
  <article>
   <!-- content area -->
    <?php
    if(isset($_GET['page'])){
        $page=$_GET['page'];
        switch($page){
            case'london';
            include 'london.php';
            break;
            case'paris';
            include 'paris.php';
            break;
            case'tokyo';
            include 'tokyo.php';
            break;
        }
    }

    ?>

  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>

