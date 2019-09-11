<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bioplane - Around The World</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="btn-rounded.css">
</head>

<?php
class URL {
  public function __construct($name, $link, $active = false) {
    $this->name = $name;
    $this->link = $link;
    $this->active = $active;
  }

  function display(){
    if($this->active){
      return '<a class="current" href="' . $this->link . '">' . $this->name . '</a>';
    } else {
      return '<a href="' . $this->link . '">' . $this->name . '</a>';
    }
  }
}

function populateLinks(){
  $links = array(new URL("Welcome", "#", true),
                new URL("Sponsors", "#"),
                new URL("Biopilots and Team", "#"),
                new URL("Photos / Videos", "#"),
                new URL("Past Projects", "#"),
                new URL("Contact", "#"));

  foreach ($links as $link) {
    echo $link->{'display'}();
  }
}
?>

<body>
    <div id="drawer">
        <div id="close">X</div>
       <?php populateLinks(); ?>
    </div>
    <section class="container-fluid" id="navbar">
        <div class="title">
            <a href="#">
                <img src="bioplane-logo.png" alt="Bioplane" />
            </a>
        </div>
        <div class="links hidden-xs">
          <?php populateLinks(); ?>

        </div>
        <div class="visible-xs">
            <i class="material-icons" id="menu-btn">menu</i>
        </div>
    </section>
    <div id="main-header" class="container-fluid">
        <h1 id="main-header-title">Bioflight - Around The World</h1>
    </div>
    <div id="side-content" class="container col-md-4">
        <div id="important-buttons">
            <a class="btn-rounded" href="#">Donate</a>
            <br>
            <!-- FLIGHT TRACKING -->
            <!-- <a class="btn-rounded btn-inactive" href="#">Track</a> -->
        </div>
        <div id="important-news">
            <h3 class="text-center">NEWS</h3>

            <?php
              class News {
                public function __construct($title, $date, $author, $link, $text){
                  $this->title = $title;
                  $this->date = $date;
                  $this->author = $author;
                  $this->link = $link;
                  $this->text = $text;
                }

                function display(){
                  return '<a href="' . $this->link . '"<h4 class="news-title">' . $this->title . '</h4></a><br/>' . '<small class="news-details">' . $this->author . ' &nbsp;&bull;&nbsp; ' . $this->date . '</small><br/>' . '<p class="text-justify news-text">' . $this->text . '</p>';
                }
              }

              $news = array(
                 new News("Test Article", "09-05-16", "Kyle", "#", "  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec ultrices risus. Ut vitae orci nec magna fermentum euismod sit amet vitae mi. Cras euismod velit at arcu auctor, eu congue nisi convallis. Aliquam ac ipsum arcu. Curabitur ut ornare
                   risus. Aliquam eget mauris odio. Mauris vitae faucibus mauris. Nam elementum tortor vestibulum nunc volutpat blandit. Maecenas dapibus, odio suscipit placerat dictum, lacus risus hendrerit augue, vel egestas lacus massa vel eros. Suspendisse
                   accumsan et tellus sed cursus. Donec volutpat orci vitae tortor interdum, et vestibulum tortor placerat. Nunc commodo eros nisl, quis pulvinar lectus facilisis ut. Donec suscipit libero elit, nec fringilla nisl pulvinar fermentum."),
                  new News("Test Article2", "09-05-16", "Kyle", "#", "  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec ultrices risus. Ut vitae orci nec magna fermentum euismod sit amet vitae mi. Cras euismod velit at arcu auctor, eu congue nisi convallis. Aliquam ac ipsum arcu. Curabitur ut ornare
                    risus. Aliquam eget mauris odio. Mauris vitae faucibus mauris. Nam elementum tortor vestibulum nunc volutpat blandit. Maecenas dapibus, odio suscipit placerat dictum, lacus risus hendrerit augue, vel egestas lacus massa vel eros. Suspendisse
                    accumsan et tellus sed cursus. Donec volutpat orci vitae tortor interdum, et vestibulum tortor placerat. Nunc commodo eros nisl, quis pulvinar lectus facilisis ut. Donec suscipit libero elit, nec fringilla nisl pulvinar fermentum.")
              );

              foreach ($news as $article) {
                echo $article->{'display'}();
              }
             ?>

        </div>
    </div>
    <div id="main-content" class="container col-md-8">
        <div class="content-section">
            <h3 class="text-center">ABOUT</h3>
            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec ultrices risus. Ut vitae orci nec magna fermentum euismod sit amet vitae mi. Cras euismod velit at arcu auctor, eu congue nisi convallis. Aliquam ac ipsum arcu. Curabitur ut ornare
                risus. Aliquam eget mauris odio. Mauris vitae faucibus mauris. Nam elementum tortor vestibulum nunc volutpat blandit. Maecenas dapibus, odio suscipit placerat dictum, lacus risus hendrerit augue, vel egestas lacus massa vel eros. Suspendisse
                accumsan et tellus sed cursus. Donec volutpat orci vitae tortor interdum, et vestibulum tortor placerat. Nunc commodo eros nisl, quis pulvinar lectus facilisis ut. Donec suscipit libero elit, nec fringilla nisl pulvinar fermentum.
            </p>
        </div>
        <div class="content-section">
            <h3 class="text-center">PLANE</h3>
            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec ultrices risus. Ut vitae orci nec magna fermentum euismod sit amet vitae mi. Cras euismod velit at arcu auctor, eu congue nisi convallis. Aliquam ac ipsum arcu. Curabitur ut ornare
                risus. Aliquam eget mauris odio. Mauris vitae faucibus mauris. Nam elementum tortor vestibulum nunc volutpat blandit. Maecenas dapibus, odio suscipit placerat dictum, lacus risus hendrerit augue, vel egestas lacus massa vel eros. Suspendisse
                accumsan et tellus sed cursus. Donec volutpat orci vitae tortor interdum, et vestibulum tortor placerat. Nunc commodo eros nisl, quis pulvinar lectus facilisis ut. Donec suscipit libero elit, nec fringilla nisl pulvinar fermentum.
            </p>
        </div>
    </div>

    <script src="app.js" charset="utf-8"></script>
</body>

</html>
