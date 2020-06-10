<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" media="screen and (min-width: 992px)" href="desktop.css">
  <link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 992px)" href="tablet.css">
  <link rel="stylesheet" media="screen and (max-width: 768px)" href="mobile.css">
  <title>Form</title>
</head>

<body>

  <div class="container-fluid">
    <nav class="navbar navbar-default col-md-12 col-xs-12">
      <div class="row">
        <div class="navbar-header col-md-2">
          <a class="navbar-brand text-center" href="index.php">
            <img src="Brainster-Logo-031.png" class="logo img-responsive" alt="logo">
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
          <div class="col-md-2 hidden-sm">
            <form class="navbar-form">
              <div class="form-group" action="form.html" method="POST">
                <!-- <button type="submit" class="btn nav-btn"><a class="button-a" href="/form.html"
                target="_blank">Вработи наш студент</a></button> -->
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

  <form action="database.php" method="POST">
    <div class="container-fluid formContainer">
      <div class="row">
        <div class="col-md-12 col-sm-12" style="padding: 0px;">
          <h1 class="text-center titleMobile titleDesktop" style="font-weight: bold; font-size:39px; padding: 0px;">Вработи студенти</h1>
        </div>
      </div>
      <div class="row formMobile formDesktop formTablet">
        <div class="col-md-3 col-lg-3 col-md-offset-3">
          <div class="form-group">
            <label for="">Име и презиме</label>
            <input required name="name" type="text" class="form-control inputMobile inputDesktop" id="exampleInputEmail1" placeholder="Вашето име и презиме">
          </div>
        </div>
        <div class="col-md-3 col-lg-3">
          <div class="form-group">
            <label for="">Име на компанија</label>
            <input required name="company" type="text" class="form-control inputMobile inputDesktop" id="exampleInputEmail1" placeholder="Име на вашата компанија">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-lg-3 col-md-offset-3">
          <div class="form-group">
            <label for="">Контакт имејл</label>
            <input required name="email" type="email" class="form-control inputMobile inputDesktop" id="exampleInputEmail1" placeholder="Контакт маил на вашата компанија">
          </div>
        </div>
        <div class="col-md-3 col-lg-3">
          <div class="form-group">
            <label for="">Контакт телефон</label>
            <input required name="phone" type="text" class="form-control inputMobile inputDesktop" id="exampleInputEmail1" placeholder="Контакт телефон на вашата компанија">
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-md-3 col-md-offset-3">
          <label for="">Тип на студенти</label>
          <br>
          <div class="form-group select-field ">
            <select name="selectCourse" class="form-control" id="sel1" style="font-size: 12px; height: 40px; font-weight: bold;">
              <option class="selectPlaceholder" selected disabled hidden >Изберете тип на студент </option>
              <option name="marketing" value="marketing" >Студенти од маркетинг</option>
              <option name="developer" value="developer"  >Студенти од програмирање</option>
              <option name="science" value="science" >Студенти од data science</option>
              <option  name="design" value="design" >Студенти од дизајн</option>
            </select>
          </div>
         
        </div>
        <!-- <div class="col-md-3 col-lg-3 col-md-offset-3">
          <label for="">Тип на студенти</label>
          <br>
          <div class="form-group selectField ">
            <select name="selectCourse" class="form-control" id="sel1">
              <option class="selectPlaceholder" selected disabled value="">Изберете тип на студент </option>
              <option name="marketing" value="marketing">Студенти од маркетинг</option>
              <option name="developer" value="developer">Студенти од програмирање</option>
              <option name="science" value="science">Студенти од data science</option>
              <option name="design" value="design">Студенти од дизајн</option>
            </select>
          </div>

        </div> -->
        <div class="col-md-3 col-lg-3">
          <div class="form-group tabletButton" style="margin-top:23px;">
            <button value="submit" style="padding: 10px; background-color: red; color: white;" type="submit" class="btn  btn-block">Испрати</button>
          </div>
        </div>
      </div>
    </div>

  </form>
  <footer style="background-color: #34313b; color: white;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">Изработено со <span style="font-size:200%;color:red;">&hearts;</span>
            од студентите на Brainster</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="main.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>