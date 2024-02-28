<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Al Azb Real Estate And Builders</title>
  <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <link href="css/bootstrap.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-dark bg-primary flex-md-nowrap p-4 shadow height-10">
    <!-- logo image   -->
    <img src="/images/alazblogo.png height-20 width-20" alt="">
    <a class="navbar-brand col-sm-20 col-md-7 mr-30 fs-2 text font-bold text-uppercase align-self-start p-2 flex-grow-1 bd-highlight" href="/login.php">Al Azb Dashboard</a>
    <input type="text" class="form-control form-control-primary  w-3 form-right" placeholder="Search...">
    <ul class="navbar-nav px-5">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </nav>
  <div class="container-fluid">
    <div class="row ">
      <!-- Sidear -->
      <div class="col-md-2 bg-dark d-none d-md-block sidebar">
        <div class="left-sidebar text-white ">
          <ul class="p-1 nav flex-column sidebar-nav text-dark">
            <li class="nav-item">
              <a class="nav-link active" href="#" bg-dark>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-fill" viewBox="0 0 16 16">
                  <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM15 4.667V5H1v-.333L1.5 4h6V1h1v3h6l.5.667Z" />
                </svg>
                Data Entry Department
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>
                Tele Depatrment
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                </svg>
                Sales Department
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link border border-success p-2 mb-2" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                </svg>
                Finance Department

              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left" viewBox="0 0 16 16">
                  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                </svg>
                Messages
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path fill-rule=" evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                Profile
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                </svg>
                Daily Progress Sheet
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " href="#">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">
                  <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                Request Report Sheet
              </a>
            </li>
            <footer>@ End Of Dashboard</footer>
          </ul>
        </div>
      </div>


      <!-- mywork -->
      <!-- Same to both Option weather Demand or Sale CUstomer Portal -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="container col-lg-10 mt-3">
          <h2>Welcome To DataEntry Department</h2>
          <p> You can Select the the wheather Demand Customer Portal or Data Entry of Sale Customer Portal:</p>
          <!-- <form action="Aafaq">
            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
              <label class="form-check-label" for="radio1">Demand Portal</label>
            </div>

            <div class="form-check ">
              <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
              <label class="form-check-label" for="radio2">Sale Customer</label>
            </div>
             <button type="submit" class="btn btn-primary mt-3">Submit</button>
          </form> -->


          <!-- Pills navs -->
          <ul class="nav nav-pills mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
              <a
                class="nav-link active"
                id="ex1-tab-1"
                data-mdb-toggle="pill"
                href="#ex1-pills-1"
                role="tab"
                aria-controls="ex1-pills-1"
                aria-selected="true"
                >Tab 1</a
              >
            </li>
            <li class="nav-item" role="presentation">
              <a
                class="nav-link"
                id="ex1-tab-2"
                data-mdb-toggle="pill"
                href="#ex1-pills-2"
                role="tab"
                aria-controls="ex1-pills-2"
                aria-selected="false"
                >Tab 2</a
              >
            </li>
            <li class="nav-item" role="presentation">
              <a
                class="nav-link"
                id="ex1-tab-3"
                data-mdb-toggle="pill"
                href="#ex1-pills-3"
                role="tab"
                aria-controls="ex1-pills-3"
                aria-selected="false"
                >Tab 3</a
              >
            </li>
          </ul>
          <!-- Pills navs -->

          <!-- Pills content -->
          <div class="tab-content" id="ex1-content">
            <div
              class="tab-pane fade show active"
              id="ex1-pills-1"
              role="tabpanel"
              aria-labelledby="ex1-tab-1"
            >
              Tab 1 content
            </div>
            <div class="tab-pane fade" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
              Tab 2 content
            </div>
            <div class="tab-pane fade" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
              Tab 3 content
            </div>
          </div>
          <!-- Pills content -->

        </div>

        <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                Home
                            </button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                Profile
                            </button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                Contact
                            </button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">


  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    Demand Data Entry
    <!-- Demmand Data Entry portal -->
    <div>
          <h4>Welcome to Demmand data Entry of Customer</h4>
          <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-flat" type="button" role="tab" aria-controls="nav-flat" aria-selected="true">
                                Flat
                            </button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">
                                Home
                            </button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-land" type="button" role="tab" aria-controls="nav-land" aria-selected="false">
                                Land
                            </button>
  </div>
</nav>
          <!-- <select class="form-select" aria-label="Default select example">

            <option selected>Demmand of</option>
            <option value="1">Flat</option>
            <option value="2">House</option>
            <option value="3">Land</option>
          </select> -->
        </div>
  </div>


  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    Profile
  </div>


  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
    Contact
  </div>

  
</div





       <!-- When User Select One radio button then This will show in the screen   --> -->
        <!-- DropDown -->

        
        <!-- When User Select One dropdown option then This form will show in the screen -->
        <!-- if User select on Flat The Flat Table will Open  -->
        <!-- Flat form -->
        <form class="collapse" id="asdf">
          <div class="mb-3">
            <h4>Welcome to Flat Portal Please add Information of Required Flat</h4>
            <div class="mb-3">
              <label for="exampleInputname" class="form-label">Full Name</label>
              <input type="name" class="form-control col-md-6 border-dark" id="name" placeholder="Please Enter Demmand Person Name">
            </div>
            <div class="mb-3">
              <label for="Phonenumber" class="form-label">Phone Number</label>
              <input type="phonenumber" class="form-control col-md-6 border-dark" id="phonenumber" placeholder="Please Enter Demmanded Person Phone Number">
            </div>
            <div class="mb-3">
              <label for="examplelocation" class="form-label">Location</label>
              <input type="location" class="form-control col-md-6 border-dark" id="location" placeholder="Please Enter Demmand Person Desired Location">
            </div>

            <div class="mb-3">
              <label for="area" class="form-label">Area</label>
              <input type="area" class="form-control col-md-6 border-dark" id="area" placeholder="Please Enter Demmand Person Desired area">
              <div id="area" class="form-text text-primary ">How Much Area, Demmand by Customer.</div>
            </div>
            <!-- Plot -->
            <!-- <div class="col-md-6"> -->
            <select class="form-select col-md-6" aria-label="Default select example">
              <option selected>
                <plot>Plot Size</plot>
              </option>
              <option value="1">5 Marlas</option>
              <option value="2">10 Marlas</option>
              <option value="3">15 Marlas</option>
              <option value="3">1 Kenal</option>
              <option value="3">1.5 Kenal</option>
              <option value="3">2 Kenal</option>
              <option value="3">3 Kenal</option>
              <option value="3">4 Kenal</option>
              <option value="3">5 Kenal</option>
              <option value="3">10 Kenal</option>
              <option value="3">15 Kenal</option>
              <option value="3">20 Kenal</option>
            </select>
            <div id="plot" class="form-text text-primary ">How Much Area, Demmand by Customer.</div>
          </div>
          <!-- floor -->
          <select class=" col form-select col-md-6" aria-label="Default select example">

            <option selected>
              <floor>Floor No</floor>
            </option>
            <option value="1">Ground Floor</option>
            <option value="2">First Floor</option>
            <option value="3">Second ground Floor</option>
            <option value="3">Third Marlas</option>
            <option value="3">Fourth Florr</option>
            <option value="3">Fifth Floor</option>
            <option value="3">Sixth Floor</option>
            <option value="3">Seventh Floor</option>
            <option value="3">Eight Floor</option>
            <option value="3">Ninth Floor</option>
            <option value="3">10th Floor</option>
            <option value="3">11th Floor</option>
            <option value="3">12th Floor</option>
            <option value="3">13th Floor</option>
            <option value="3">14th Floor</option>
            <option value="3">15th Floor</option>
            <option value="3">16th Floor</option>
            <option value="3">17th Floor</option>
            <option value="3">18th Floor</option>
            <option value="3">19th Floor</option>
            <option value="3">20th Floor</option>
          </select>


          <div id="floor" class="form-text text-primary ">Floor Number, Demmand by Customer.</div>

          <!-- room -->
          <select class="form-select col-md-6" aria-label="Default select example">
            <option selected>
              <rooms>No. of Rooms</rooms>
            </option>
            <option value="1">1</option>
            <option value="2">2 </option>
            <option value="3">3</option>
            <option value="3">4</option>
            <option value="3">5</option>
            <option value="3">6</option>
            <option value="3">7</option>
            <option value="3">8</option>
            <option value="3">9</option>
            <option value="3">10 </option>
            <div id="room" class="form-text text-primary ">How Much Rooms, Demmand by Customer.</div>

            <select class="form-select col-md-6" aria-label="Default select example">
              <option selected>
                <bathroom>No. of Bathrooms</bathroom>
              </option>
              <option value="1">1</option>
              <option value="2">2 </option>
              <option value="3">3</option>
              <option value="3">4</option>
              <option value="3">5</option>
              <option value="3">6</option>
              <option value="3">7</option>
              <option value="3">8</option>
              <option value="3">9</option>
              <option value="3">10 </option>
              <!-- <option value="3">15 Kenal</option>
                <-- <option value="3">20 Kenal</option> -->

                <div class="mb-3">
      <label for="price" class="form-label">Price Range</label>
      <input type="price" class="form-control col-md-6 border-dark" id="price" placeholder="Please Enter Demmand Person Desired area">
      <div id="price" class="form-text text-primary ">How Much Price of Flat, Demmand by Customer.</div>
    </div>
    <select class="form-select col-md-6" aria-label="Default select example">
      <option selected>
        <furnished>Condition Of Flat</furnished>
      </option>
      <option value="1">Furnished</option>
      <option value="2">Un-Furnished</option>
    </select>
    <label for="url" class="form-label">URL</label>
    <input type="url" class="form-control col-md-6 border-dark" id="url" placeholder="URL of website from data data got">
    <label for="exampleInputEmail1" class="form-label"></label>
    <label for="url" class="form-label">Reference</label>
    <input type="url" class="form-control col-md-6 border-dark" id="url" placeholder="Please Enter Reference of Demand">
    <label for="exampleInputEmail1" class="form-label"></label>
    <button type="Save" class="btn btn-primary">Save</button>
            </select>
            <div id="bathroom" class="form-text text-primary ">How Much Rooms, Demmand by Customer.</div>
    </div>


  </div>

  <!-- <option value="3">15 Kenal</option>
    
                <-- <option value="3">20 Kenal</option> -->
  </select>
  </div>
  </div>


  </form>

  <!-- If user Select House Then thisbelow form will apear -->

  <form class="collapse" id="asdgqwgq1r">
    <div class="mb-3">
      <h4>Welcome to House Portal Please add Information of Required House</h4>
      <div class="mb-3">
        <label for="exampleInputname" class="form-label">Full Name</label>
        <input type="name" class="form-control col-md-6 border-dark" id="name" placeholder="Please Enter Demmand Person Name">
      </div>
      <div class="mb-3">
        <label for="Phonenumber" class="form-label">Phone Number</label>
        <input type="phonenumber" class="form-control col-md-6 border-dark" id="phonenumber" placeholder="Please Enter Demmanded Person Phone Number">
      </div>
      <div class="mb-3">
        <label for="examplelocation" class="form-label">Location</label>
        <input type="location" class="form-control col-md-6 border-dark" id="location" placeholder="Please Enter Demmand Person Desired Location">
      </div>
      <div class="mb-3">
        <label for="area" class="form-label">Area of House</label>
        <input type="area" class="form-control col-md-6 border-dark" id="area" placeholder="Please Enter Demmand Person Desired area">
        <div id="area" class="form-text text-primary ">How Much Area, Demmand by Customer.</div>
      </div>
      <!-- Plot -->
      <!-- <div class="col-md-6"> -->
      <select class="form-select col-md-6" aria-label="Default select example">
        <option selected>
          <plot>Plot</plot>
        </option>
        <option value="1">5 Marlas</option>
        <option value="2">10 Marlas</option>
        <option value="3">15 Marlas</option>
        <option value="3">1 Kenal</option>
        <option value="3">1.5 Kenal</option>
        <option value="3">2 Kenal</option>
        <option value="3">3 Kenal</option>
        <option value="3">4 Kenal</option>
        <option value="3">5 Kenal</option>
        <option value="3">10 Kenal</option>
        <option value="3">15 Kenal</option>
        <option value="3">20 Kenal</option>
      </select>
      <div id="plot" class="form-text text-primary ">How Much Area, Demmand by Customer.</div>
    </div>
    <!-- floor -->
    <select class=" col form-select col-md-6" aria-label="Default select example">
      <!-- room -->
      <select class="form-select col-md-6" aria-label="Default select example">
        <option selected>
          <room>No. of Rooms</room>
        </option>
        <option value="1">1</option>
        <option value="2">2 </option>
        <option value="3">3</option>
        <option value="3">4</option>
        <option value="3">5</option>
        <option value="3">6</option>
        <option value="3">7</option>
        <option value="3">8</option>
        <option value="3">9</option>
        <option value="3">10 </option>
        <!-- <option value="3">15 Kenal</option>
                <-- <option value="3">20 Kenal</option> -->
      </select>
      <div id="room" class="form-text text-primary ">How Much Rooms, Demmand by Customer.</div>
      </div>
      <select class="form-select col-md-6" aria-label="Default select example">
        <option selected>
          <bathroom>No. of Bathrooms</bathroom>
        </option>
        <option value="1">1</option>
        <option value="2">2 </option>
        <option value="3">3</option>
        <option value="3">4</option>
        <option value="3">5</option>
        <option value="3">6</option>
        <option value="3">7</option>
        <option value="3">8</option>
        <option value="3">9</option>
        <option value="3">10 </option>
        <!-- <option value="3">15 Kenal</option>
                <-- <option value="3">20 Kenal</option> -->
      </select>
      <div id="bathroom" class="form-text text-primary ">How Much Rooms, Demmand by Customer.</div>
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price Range</label>
        <input type="price" class="form-control col-md-6 border-dark" id="price" placeholder="Please Enter Demmand Person Desired area">
        <div id="price" class="form-text text-primary ">How Much Price of House, Demmand by Customer.</div>
      </div>
      <select class="form-select col-md-6" aria-label="Default select example">
        <option selected>
          <furnished>Condition Of House</furnished>
        </option>
        <option value="1">Furnished</option>
        <option value="2">Un-Furnished</option>
      </select>
      <label for="url" class="form-label">URL</label>
      <input type="url" class="form-control col-md-6 border-dark" id="URL" placeholder="url of website from data data got">
      <label for="exampleInputEmail1" class="form-label"></label>
      <button type="Save" class="btn btn-primary">Save</button>
      </div>
  </form>

  <!-- if user select land in Demand portal this form will apear -->

  <form class="collapse" id="landcollapse">
    <div class="mb-3">
      <h4>Welcome to Land Portal Please add Information of Required Land</h4>
      <div class="mb-3">
        <label for="exampleInputname" class="form-label">Full Name</label>
        <input type="name" class="form-control col-md-6 border-dark" id="name" placeholder="Please Enter Demmand Person Name">
      </div>
      <div class="mb-3">
        <label for="Phonenumber" class="form-label">Phone Number</label>
        <input type="phonenumber" class="form-control col-md-6 border-dark" id="phonenumber" placeholder="Please Enter Demmanded Person Phone Number">
      </div>
      <div class="mb-3">
        <label for="examplelocation" class="form-label">Location</label>
        <input type="location" class="form-control col-md-6 border-dark" id="location" placeholder="Please Enter Demmand Person Desired Location">
      </div>

      <div class="mb-3">
        <label for="area" class="form-label">Area of House</label>
        <input type="area" class="form-control col-md-6 border-dark" id="area" placeholder="Please Enter Demmand Person Desired area">
        <div id="area" class="form-text text-primary ">How Much Area, Demmand by Customer.</div>
      </div>
      <!-- Plot -->
      <!-- <div class="col-md-6"> -->
      <select class="form-select col-md-6" aria-label="Default select example">
        <option selected>
          <plot>Plot</plot>
        </option>
        <option value="1">5 Marlas</option>
        <option value="2">10 Marlas</option>
        <option value="3">15 Marlas</option>
        <option value="3">1 Kenal</option>
        <option value="3">1.5 Kenal</option>
        <option value="3">2 Kenal</option>
        <option value="3">3 Kenal</option>
        <option value="3">4 Kenal</option>
        <option value="3">5 Kenal</option>
        <option value="3">10 Kenal</option>
        <option value="3">15 Kenal</option>
        <option value="3">20 Kenal</option>
      </select>
      <div id="plot" class="form-text text-primary ">How Much Area, Demmand by Customer.</div>
    </div>

    <div class="mb-3">
      <label for="price" class="form-label">Price Range</label>
      <input type="price" class="form-control col-md-6 border-dark" id="price" placeholder="Please Enter Demmand Person Desired area">
      <div id="price" class="form-text text-primary ">How Much Price of House, Demmand by Customer.</div>
    </div>
    <label for="url" class="form-label">URL</label>
    <input type="url" class="form-control col-md-6 border-dark" id="URL" placeholder="url of website from data data got">
    <label for="exampleInputEmail1" class="form-label"></label>
    <button type="Save" class="btn btn-primary">Save</button>
    </div>
  </form>










  <!-- Sale Data Entry Portal -->
  <div class="collapse" id="collapseCustomer">
    <h4>Welcome to Sale Data Entry of Customer</h4>
    <select class="form-select" aria-label="Default select example">

      <option selected>Sale of</option>
      <option value="1">Flat</option>
      <option value="2">House</option>
      <option value="3">Land</option>
    </select>
  </div>
  <!-- When User Select One dropdown option then This form will show in the screen -->
  <!-- if User select on Flat The Flat Table will Open  -->
  <!-- Flat form -->
  <form class="collapse" id="FlatCollapse">
    <div class="mb-3">
      <h4>Welcome to FLat Portal Please add Information of Sales Flat</h4>
      <div class="mb-3">
        <label for="exampleInputname" class="form-label">Full Name</label>
        <input type="sname" class="form-control col-md-6 border-dark" id="sname" placeholder="Please Enter Flat Owner Name">
      </div>
      <div class="mb-3">
        <label for="sphonenumber" class="form-label">Phone Number</label>
        <input type="sphonenumber" class="form-control col-md-6 border-dark" id="sphonenumber" placeholder="Please Enter Seller Phone Number">
      </div>
      <div class="mb-3">
        <label for="examplelocation" class="form-label">Location</label>
        <input type="slocation" class="form-control col-md-6 border-dark" id="slocation" placeholder="Please Enter Flat Location">
      </div>
      <div class="mb-3">
        <label for="sarea" class="form-label">Plot</label>
        <input type="sarea" class="form-control col-md-6 border-dark" id="sarea" placeholder="Please Enter Plot Size">
        <div id="area" class="form-text text-primary ">Plot Area.</div>
      </div>
      <!-- Plot -->
      <!-- <div class="col-md-6"> -->
      <select class="form-select col-md-6" aria-label="Default select example">
        <option selected>
          <plot>Plot</plot>
        </option>
        <option value="1">5 Marlas</option>
        <option value="2">10 Marlas</option>
        <option value="3">15 Marlas</option>
        <option value="3">1 Kenal</option>
        <option value="3">1.5 Kenal</option>
        <option value="3">2 Kenal</option>
        <option value="3">3 Kenal</option>
        <option value="3">4 Kenal</option>
        <option value="3">5 Kenal</option>
        <option value="3">10 Kenal</option>
        <option value="3">15 Kenal</option>
        <option value="3">20 Kenal</option>
      </select>
      <div id="splot" class="form-text text-primary ">How Much Plot Area</div>
    </div>
    <!-- floor -->
    <select class=" col form-select col-md-6" aria-label="Default select example">
      <option selected>
        <floor>Floor No</floor>
      </option>
      <option value="1">Ground Floor</option>
      <option value="2">First Floor</option>
      <option value="3">Second ground Floor</option>
      <option value="3">Third Marlas</option>
      <option value="3">Fourth Florr</option>
      <option value="3">Fifth Floor</option>
      <option value="3">Sixth Floor</option>
      <option value="3">Seventh Floor</option>
      <option value="3">Eight Floor</option>
      <option value="3">Ninth Floor</option>
      <option value="3">10th Floor</option>
      <option value="3">11th Floor</option>
      <option value="3">12th Floor</option>
      <option value="3">13th Floor</option>
      <option value="3">14th Floor</option>
      <option value="3">15th Floor</option>
      <option value="3">16th Floor</option>
      <option value="3">17th Floor</option>
      <option value="3">18th Floor</option>
      <option value="3">19th Floor</option>
      <option value="3">20th Floor</option>
    </select>
    <div id="sfloor" class="form-text text-primary ">Floor Number </div>
    </div>
    <!-- room -->
    <select class="form-select col-md-6" aria-label="Default select example">
      <option selected><Area>No. of Rooms</Area></option>
      <option value="1">1</option>
      <option value="2">2 </option>
      <option value="3">3</option>
      <option value="3">4</option>
      <option value="3">5</option>
      <option value="3">6</option>
      <option value="3">7</option>
      <option value="3">8</option>
      <option value="3">9</option>
      <option value="3">10 </option>
      <!-- <option value="3">15 Kenal</option>
                <-- <option value="3">20 Kenal</option> -->
    </select>
    <div id="sroom" class="form-text text-primary ">Number of rooms</div>
    </div>
    <select class="form-select col-md-6" aria-label="Default select example">
      <option selected>
        <bathroom>No. of Bathrooms</bathroom>
      </option>
      <option value="1">1</option>
      <option value="2">2 </option>
      <option value="3">3</option>
      <option value="3">4</option>
      <option value="3">5</option>
      <option value="3">6</option>
      <option value="3">7</option>
      <option value="3">8</option>
      <option value="3">9</option>
      <option value="3">10 </option>
      <!-- <option value="3">15 Kenal</option>
                <-- <option value="3">20 Kenal</option> -->
    </select>
    <div id="sbathroom" class="form-text text-primary ">How Much Rooms, Offer for Sale by Customer.</div>
    </div>

    <div class="mb-3">
      <label for="sprice" class="form-label">Price Range</label>
      <input type="sprice" class="form-control col-md-6 border-dark" id="sprice" placeholder="Please Enter Demmand Person Desired area">
      <div id="sprice" class="form-text text-primary ">How Much Price of Flat, Offer for Sale by Customer.</div>
    </div>
    <select class="form-select col-md-6" aria-label="Default select example">
      <option selected>
        <furnished>Condition Of Flat</furnished>
      </option>
      <option value="1">Furnished</option>
      <option value="2">Un-Furnished</option>
    </select>
    <div class="mb-3">
      <label for="sarea" class="form-label">Area</label>
      <input type="sarea" class="form-control col-md-6 border-dark" id="area" placeholder="Please Enter offer of Seller area">
      <div id="sarea" class="form-text text-primary ">How Much Area, Offer of Sales by Customer.</div>
    </div>
    <label for="url" class="form-label">URL</label>
    <input type="url" class="form-control col-md-6 border-dark" id="url" placeholder="URL of website from data data got">
    <label for="exampleInputEmail1" class="form-label"></label>
    <button type="Save" class="btn btn-primary">Save</button>
    </div>
  </form>


  <!-- PHP work -->
  <?php require_once 'process.php'; ?>
  <?php
  if (isset($_SESSION['message'])) : ?>

    <div class="alert alert-<?= $_SESSION['msg_type'] ?>">

      <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
      ?>
    </div>
  <?php endif ?>
  <div class="Aafaq">
    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'alazbreal') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM customers");
    //pre_r($result->fetch_assoc());
    ?>

    <div class="row justify-content-center">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>PhoneNumber</th>
            <th>Email</th>
            <th>isLead</th>
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <?php
        while ($row = $result->fetch_assoc()) : ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phonenumber']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['lead']; ?></td>
            <td>
              <a href="admindashboard.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
              <a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php endwhile; ?>
      </table>
    </div>

    <?php
    function pre_r($array)
    {
      echo '<pre>';
      print_r($array);
      echo '</pre>';
    }
    ?>
    <div class="container vh-100  w-25">
      <div class="row justify-content-center h-100">
        <form action="process.php" method="POST">

          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
          </div>

          <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="phonenumber" class="form-control" value="<?php echo $phonenumber; ?>">
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
          </div>

          <div class="form-group">
            <label for="lead">Lead: </label>
            <select name="isLead" id="lead">
              <option value="1">Yes</option>
              <option value="0">No</option>
            </select>
          </div>
          <div class="form-group">
            <?php
            if ($update == true) :
            ?>
              <button type="submit" class="btn btn-info" name="update">Update</button>
            <?php else : ?>
              <button type="submit" class="btn btn-primary" name="save">Save</button>
            <?php endif; ?>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- for footer ptoblem  -->
  </main>

  <footer class="text-center text-white" style="background-color: #f1f1f1;">
    <!-- Grid container -->
    <div class="container pt-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="www.face.com/aafaqfazal" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">AlAzb Real Estate</a>
    </div>
    <!-- Copyright -->
  </footer>
  </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--Bootstrap CSS-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<!--Fontawesome-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>