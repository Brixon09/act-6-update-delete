<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>BSIT 2-2 Add</title>
    <style>
            :root{
  --white-color: #fff;
  --dark-color: #222;
  --body-bg-color: #fff;
  --section-bg-color: black;
  --navigation-item-hover-color: #3b5378;

  --text-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
  --box-shadow: 0 5px 25px rgb(0 0 0 / 20%);

  --scroll-bar-color: #fff;
  --scroll-thumb-color: rgba(0, 0, 0, 0.678);
  --scroll-thumb-hover-color: #454f6b;
}

/*======= Scroll bar =======*/
::-webkit-scrollbar{
  width: 11px;
  background: var(--scroll-bar-color);
}

::-webkit-scrollbar-thumb{
  width: 100%;
  background: var(--scroll-thumb-color);
  border-radius: 2em;
}

::-webkit-scrollbar-thumb:hover{
  background: var(--scroll-thumb-hover-color);
}
* {
  font-family: sans-serif;
}
body{
	margin: 150px 0;
	background: #A2B38B;
	font-family: arial, sans-serif;
	width: 100%;
}
			
/*======= Header =======*/
header{
  z-index: 999;
  position: fixed;
  width: 100%;
  height: calc(5rem + 1rem);
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  transition: 0.5s ease;
  background: #2C3639;
  transition-property: height, background;
}

header .nav-bar{
  position: relative;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 100px;
  transition: 0.3s ease;
}
.nav-bar .logo{
  color: #ffffff;
  font-size: 2.1em;
  font-weight: 780;
  letter-spacing: 1px;
  text-decoration: none;
  text-shadow: var(--text-shadow);
  background: none;
}
.text-center{
  font-weight: 700;
  display:  flex;
  align-items: center;
  justify-content:  center;
  margin: -70px 0  0;
  color: white;
  text-shadow: 2px 2px #000000;
}
form{
  border: 1px solid;
  border-radius:  5px;
  background: #fff;
}
.form-group{
  padding: 0 20px;
}
.id{  
  margin: 20px 0  10px;
  font-weight: 700;
}
.name{
  font-weight: 700;
}
input{
  margin: -8px  0;
}
 
    </style>
</head>
<body>
</head>
 <body>
  <header>
    <div class="nav-bar">
      <a href="index.php" class="logo">Add Students</a>
      <div class="navigation">
        <div class="nav-items">
          <i class="uil uil-times nav-close-btn"></i>
        </div>
      </div>
    </div>
  </header>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center ">BSIT 2-2</h1> 
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php
              include 'model.php';
              $model = new Model();
              $insert = $model->insert();
          ?>
          <form action="" method="post">
          <div class="form-group">
              <label class="id" for="">Student No.</label>
              <input type="text" name="id" class="form-control">
            </div>
            <div class="form-group">
              <label class="name" for="">Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
              <label class="name" for="">Email</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
              <label class="name" for="">Mobile No.</label>
              <input type="text" name="mobile" class="form-control">
            </div>
            <div class="form-group">
              <label class="name" for="">Address</label>
              <textarea name="address" id="" cols="" rows="3" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>