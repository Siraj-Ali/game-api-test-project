<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!-- Font Awesome -->
    <link href="{{ asset('assets/css/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/css/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
   <link href="{{ asset('assets/css/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="{{ asset('assets/css/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
<!-- JQVMap -->
<link href="{{ asset('assets/css/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
<!-- bootstrap-daterangepicker -->
<link href="{{ asset('assets/css/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/build/css/custom.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/build/css/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{route('home')}}"><i class="fa fa-shopping-cart"></i> Products <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>
                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tables <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">

              <div class="clearfix"></div>



              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Products <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li >
                        <a href="{{route('product.form')}}" class="" type="button" role="button" aria-expanded="false">Add <i class="fa fa-plus-square"></i></a>

                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Id </th>
                            <th class="column-title">Title </th>
                            <th class="column-title">Author </th>
                            <th class="column-title">Publish Date </th>
                            <th class="column-title">Price </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach ($products as $product)
                          <tr class="even pointer" id="row-{{$product->id}}">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">{{$product->id}}</td>
                            <td class=" ">{{$product->title}} </td>
                            <td class=" ">{{$product->author}} <i class="success fa fa-long-arrow-up"></i></td>
                            <td class=" ">{{$product->publish_date}}</td>
                            <td class=" ">{{$product->price}}</td>
                            <td class=" last">
                                <a href="{{route('edit.product', $product->id)}}"><i class="fa fa-edit"></i> </a> |
                                <a onclick="destorye({{$product->id}})"><i class="fa fa-trash"></i></a>
                                {{-- href="{{route('distroye.product', $product->id)}}"  --}}
                            </td>
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
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/css/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
   <script src="{{ asset('assets/css/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/css/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets/css/vendors/nprogress/nprogress.js')}}"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets/css/vendors/iCheck/icheck.min.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/css/build/js/custom.min.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('.alert').remove();
        });

        function destorye(id) {
            // alert(id);
            var token = document.getElementsByName("csrfToken").value;
            if(confirm('Are you sure?')) {
                $.ajax({
                    url: "{{route('destroye.product')}}",
                    type: "POST",
                    headers: {'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')},
                    data: {'id' : id},
                    success: function(result) {
                        $('#row-'+id).remove();
                    }
                })
            }
        }
    </script>
  </body>
</html>
