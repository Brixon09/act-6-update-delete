<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Student List</title>
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
a{
				margin: -300px 0;
				text-decoration: none;
				color: #fff;
        background-color: #007bff;
        border-color: #007bff;
				padding: 10px;
				border-radius: 2px;
				transition: 0.2s;
				font-weight: 650;
			}
			a:hover{
				transition: 0.2s;
				background: #3B9AE1;
        text-decoration: none;
        color: #fff;
			}
      body{
	background: #A2B38B;
	font-family: arial, sans-serif;
}
      thead th{
        border: 1px solid;
        background: #3F4E4F;
        text-align:  center;
        color: white;
      }
      tbody td{
        border: 1px solid;
        text-align:  center;
        background: #fff;
      }
      .row{
         width: 90%; 
        margin: 200px 70px;
        border-top: 1px solid;
      } 
      .action{
        width: 145px;
      }
    </style>
  </head>
  <body>
  <header>
    <div class="nav-bar">
      <a href="#" class="logo">List of Students</a>
      <div class="navigation">
        <div class="nav-items">
          <i class="uil uil-times nav-close-btn"></i>
          <a href="add.php"> <span class="addrec">Add Records</span> </a>
        </div>
      </div>
    </div>
  </header>

      <div class="row">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Student No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile No.</th>
                <th>Address</th>
                <th class="action">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
 
                include 'model.php';
                $model = new Model();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td>
                  <a style="padding: 10px; " href="delete.php?id=<?php echo $row['id']; ?>" class="badge badge-danger">Delete</a>
                  <a style="padding: 10px; width: 58px;" href="edit.php?id=<?php echo $row['id']; ?>" class="badge badge-success">Edit</a>
                </td>
              </tr>
 
              <?php
                }
              }else{
                echo "<span style=' font-size:  30px; font-weight: 750; text-shadow:  1px  1px  black; color:  #fff; margin:  150px 480px; position: absolute; '>No Data Available</span>";
            }
              ?>
            </tbody>
          </table>
        </div>
    </div>
</body>
</html>