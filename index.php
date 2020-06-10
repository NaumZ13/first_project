<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" media="screen and (min-width: 992px)" href="styles/desktop.css">
  <link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 992px)" href="styles/tablet.css">
  <link rel="stylesheet" media="screen and (max-width: 768px)" href="styles/mobile.css">
  <title>Project 1</title>
</head>

<body>

  <div class="container-fluid">
    <nav class="navbar navbar-default col-md-12 col-xs-12">
      <div class="row">
        <div class="navbar-header col-md-2">
          <a class="navbar-brand text-center" href="index.php">
            <img src="Brainster-Logo-031.png" class="logo img-responsive" alt="logo" width="100%;">
          </a>
        </div>
        <div class="container">
          <div class="navigation">
            <div onclick="showSidebar()" class="toggle-nav">
              <div></div>
              <div></div>
              <div></div>
            </div>
            <div class="sidebar">
              <a onclick="closeSidebar()"><i class="fa fa-times"></i></a>
              <a href="https://www.brainster.io/marketpreneurs">Академија за маркетинг</a>
              <a href="http://codepreneurs.co/">Академија за програмирање</a>
              <a href="">Академија за data science</a>
              <a href="https://www.brainster.io/design">Академија за дизајн</a>
              <a href="form.php"> <button onclick="location.href='form.php'" type="button" class="btn btn-default btn-danger nav-btn">
                  Вработи наш студент
                </button></a>
            </div>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav col-md-8 hidden-sm center">
            <li><a href="https://www.brainster.io/marketpreneurs" target="_blank">Академија за
                маркетинг<span class="sr-only">(current)</span></a></li>
            <li><a href="http://codepreneurs.co/" target="_blank">Академија за програмирање</a></li>
            <li><a href="#">Академија за data science</a></li>
            <li><a href="https://www.brainster.io/design" target="_blank">Академија за дизајн</a></li>
          </ul>
          <div class="navbar col-md-2 hidden-sm">
            <form class="navbar-form">
              <div class="form-group" action="form.html" method="POST">
                <button onclick="location.href='form.php'" type="button" class="btn btn-default btn-danger nav-btn">
                  Вработи наш студент
                </button>
            </form>
          </div>
          </form>
        </div>
      </div>
    </nav>
  </div>
  <div class="container-fluid background1">
    <h1 class="h1Background">
      Brainster Labs</h1>
  </div>
  <div class="container-fluid" style="padding: 0px;">
    <div class="row">
      <ul class="projects-nav">
        <div class="col-md-4 projectsPadding ">
          <li onclick="setActive('marketing')" class="active">Проекти на студенти од академијата<br /> за маркетинг<i class="fa fa-check-circle"></i>
          </li>
        </div>
        <div class="col-md-4 projectsPadding mobileBorder">
          <li onclick="setActive('development')">Проекти на студенти од академијата<br /> за програмирање<i class="fa fa-check-circle"></i>
          </li>
        </div>
        <div class="col-md-4 projectsPadding mobileBorder">
          <li onclick="setActive('design')">Проекти на студенти од академијата<br /> за дизајн<i class="fa fa-check-circle"></i>
          </li>
        </div>

      </ul>

    </div>
  </div>

  <div class="container-fluid" style="background-color: #fcd232;">
    <div class="row">
      <div class="col-md-12">
        <h1 class="projectsTittle">Проекти</h1>
      </div>
    </div>
    <div class="row rowOne">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 thumbnailWidth card-holder  marketing zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/marketing1.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Маркетинг </span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот. </p>
            <p style=" font-weight: bold; font-size: 12px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="marketing.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12 thumbnailWidth card-holder  marketing  zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/marketing2.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Маркетинг </span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="marketing.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-offset-3 col-xs-offset-0 col-md-offset-0 col-sm-6 col-xs-12 thumbnailWidth card-holder  marketing zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="marketing3.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="images/caption">
            <span class="cardCourse">Академија
              за Маркетинг </span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="marketing.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row rowOne">
      <div class="col-md-4 col-sm-6 col-xs-12 thumbnailWidth card-holder  marketing zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/marketing4.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Маркетинг </span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="marketing.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12 thumbnailWidth card-holder  marketing zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/marketing5.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Маркетинг </span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="marketing.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-md-offset-0 col-xs-offset-0 col-sm-offset-3 col-xs-12 thumbnailWidth card-holder marketing zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/marketing6.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Маркетинг </span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="marketing.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row rowOne">
      <div class="col-md-4 col-sm-6 col-xs-12 thumbnailWidth card-holder developer zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/coding1.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Програмирање</span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="developer.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12 thumbnailWidth card-holder developer zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/coding2.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Програмирање</span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="developer.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-offset-3 col-md-offset-0 col-xs-offset-0 col-sm-6 col-xs-12 thumbnailWidth card-holder developer zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/coding3.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Програмирање</span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="developer.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row rowOne">
      <div class="col-md-4 col-sm-6 col-xs-12 thumbnailWidth card-holder developer zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/codingnew4.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Програмирање </span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="developer.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12 thumbnailWidth card-holder developer zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/coding5.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Програмирање</span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="developer.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0 col-xs-offset-0 col-xs-12 thumbnailWidth card-holder developer zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/coding6.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Програмирање</span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="developer.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row rowOne">
      <div class="col-md-4  col-sm-6 col-xs-12 thumbnailWidth card-holder developer zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/coding7.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Програмирање </span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="developer.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4  col-sm-6 col-xs-12 thumbnailWidth card-holder developer zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/coding8.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Програмирање </span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="developer.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0 col-xs-offset-0 col-xs-12 thumbnailWidth card-holder developer zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/coding9.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Програмирање </span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="developer.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row rowOne">
      <div class="col-md-4 col-sm-6 col-sm-offset-3 col-xs-offset-0 col-md-offset-0 col-xs-12 thumbnailWidth card-holder developer zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/codingnew10.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Програмирање </span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="developer.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6  col-md-offset-0 col-xs-offset-0 col-xs-12 thumbnailWidth card-holder designer zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/design1.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Дизајн </span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="design.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6  col-md-offset-0 col-xs-offset-0 col-xs-12 thumbnailWidth card-holder designer zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/design5.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Дизајн </span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="design.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row rowOne">
      <div class="col-md-3 col-sm-6 col-xs-12 thumbnailWidth card-holder designer zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/design3.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Дизајн </span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="design.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 thumbnailWidth card-holder designer zoom">
        <div class="thumbnail thumbnail-radius">
          <img src="images/designnew4.jpg" alt="..." class="img-responsive imgcircle" style="border-bottom-left-radius: 0px; border-bottom-right-radius:0px;">
          <div class="caption">
            <span class="cardCourse">Академија
              за Дизајн </span>
            <h3 class="h3Cards">Име на проектот стои овде во две линии
            </h3>
            <p class="pCards">Краток опис во кој студентите ќе можат да опишат за што се
              работи проектот </p>
            <p style=" font-weight: bold; font-size: 11px;"> Април - Октомври 2019 </p>
            <div class="kopce text-right">
              <a href="design.php" target="_blank"><button type="button" class="btn btn-default btn-danger  btnCards">Дознај
                  повеќе</button> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer style="background-color: #34313b; color: white;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">Изработено со <span style="font-size:200%;color:red;">&hearts;</span> од студентите на
            Brainster</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>

</html>