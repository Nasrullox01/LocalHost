<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
   
<div class="container">
         <h1>One Page Crud Ajax PHP/Mysql</h1>
         <div class="row">
             <div class="col-xl-8 table-responsive h-50">
             <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
 
  
    <?
          $ulash = mysqli_connect("localhost", "root", "password", "baza nomi") or die("Ulanishda xatolik!");
          $olish = "select * from table nomi";
          $action = mysqli_query($ulash, $olish) or die(mysqli_error($ulash));
   
          while($mass = mysqli_fetch_array($action, MYSQLI_ASSOC))
          {
            echo "<tr>";
               echo "<td>".$mass["id"]."</td>";
               echo "<td>".$mass["name"]."</td>"; 
               echo "<td>".$mass["email"]."</td>";
               echo "<td>".$mass["phone"]."</td>";
               echo "<td>".$mass["address"]."</td>"; 
               echo "<td>"."<button>"."Edit"."</button>"."</td>"; 
               echo "<td>"."<button>"."Delete"."</button>"."</td>"; 
            echo "</tr>";

          } 
       ?>
  </tbody>
</table>
             </div>
             <div class="col-xl-4">
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id</label>
    <input name="inp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input name="inp1" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input name="inp2" type="email" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input name="inp3" type="numer" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <textarea name="inp4" id="text1" cols="50" rows="5"></textarea>
  </div>
  <button name="btn" type="submit" class="btn btn-primary">save</button>
</form>
             </div>
         </div>
    </div>

    <?
       if(isset($_GET["btn"])) 
       {
        $inp = $_GET["inp"];
        $inp1 = $_GET["inp1"];
        $inp2 = $_GET["inp2"];
        $inp3 = $_GET["inp3"];
        $inp4 = $_GET["inp4"];
        
        $ulash = mysqli_connect("localhost","root","","crud") or die("Ulanishda xatolik!");
        
        $r = "insert into tuble (id, name, email, phone, address) values('{$inp}','{$inp1}','{$inp2}','{$inp3}','{$inp4}')";
        
        $query = mysqli_query($ulash, $r) or die(mysqli_error($ulash));
             if($query)
             {
                echo "ulandi";
             }
       } 
       
        $olish = "select * from tuble";
        $act = mysqli_query($ulash, $olish) or die (mysqli_error($ulash));
    ?>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>