<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Taslema</title>
    <meta name="description" content="Purchase and control your orders - has never been more simple!">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Billing-Table-with-Add-Row--Fixed-Header-Feature.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Ludens---1-Index-Table-with-Search--Sort-Filters-v20.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Taslema</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="/orders"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link active" href="/products"><i class="fas fa-table"></i><span>Products</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                       
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">{{$data->email}}</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar3.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#">
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="logout"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                     
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                     
                    </div>
                    <div class="card" id="TableSorterCard">
                        <div class="card-header py-3">
                            <div class="row table-topper align-items-center">
                                <div class="col-12 col-sm-5 col-md-6 text-start" style="margin: 0px;padding: 5px 15px;">
                                    <p class="text-primary m-0 fw-bold">Products</p>
                                </div>
                                <div class="col-12 col-sm-7 col-md-6 text-end" style="margin: 0px;padding: 5px 15px;">
                                <button class="btn btn-primary btn-sm reset" type="button" style="margin: 2px;" data-toggle="modal" data-target="#myModal">Add new products</button>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table tablesorter" id="ipi-table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th class="text-center">Product ID</th>
                                                <th class="text-center">Name</th>
                                                <th class="text-center">Barcode</th>
                                                <th class="text-center">Edit</th>
                                                <th class="text-center">Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                        @foreach($products as $o)
                                            <tr>
                                            <td>{{$o->id}}</td>
                                            <td>{{$o->name}}</td>
                                            <td>{{$o->barcode}}</td>
                                            <td><a class="btn btnMaterial btn-flat success semicircle editBtn" role="button" href="javascript:void(0)"><i class="fas fa-pen"></i></a></td>
                                            <!-- <td> <a class="btn btnMaterial btn-flat primary semicircle" role="button" href="{{ url('orders/orderDetails', [$o->id]) }}"><i class="far fa-eye"></i></a></td> -->
                                            <td>
                                            <form action="products/{{$o->id}}" method='POST'>
                                             @csrf
                                             @method('DELETE')
                                             <input class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" type="submit" class='btn btn-danger' value=''><i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i>
                                             </form>
                                              </tr>
                                              @endforeach 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Taslema 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
   
    <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> product</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
      <form action="products" method='POST' id='form'>
      @csrf
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" id='name' name='name' class='form-control'>
      </div>
      <div class="form-group">
        <label for="">Barcode</label>
        <input type="text" id='barcode' name='barcode' class='form-control'>
      </div>
      <div class="form-group">
       
        <input type="submit" id='submit' name='submit' class='btn btn-success'>
      </div>
      </form>
      </div>

   

    </div>
  </div>
</div>

<script>

$('.editBtn').click(function(e){

     barcode = e.target.parentElement.parentElement.previousElementSibling.innerText;
     name=e.target.parentElement.parentElement.previousElementSibling.previousElementSibling.innerText;
     id = e.target.parentElement.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.innerText;

  $('#name').val(name);
  $('#barcode').val(barcode);
  $('#form').attr('action','products/'+id);
  $('#form').append("<input type='hidden' name='_method' value='PUT'>")

    $('#myModal').modal('show');


})


</script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>