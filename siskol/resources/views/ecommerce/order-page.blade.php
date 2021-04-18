@extends('layouts.app')

@push('before-css')
  <!-- This page CSS -->
  <!-- Page CSS -->
  <link href="{{asset('plugins/vendors/bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/css/pages/order-page.css')}}" rel="stylesheet" type="text/css">
@endpush
@section('content')
  <!-- ============================================================== -->
  <!-- Container fluid  -->
  <!-- ============================================================== -->
  <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Breadcrumbs box -->
    <!-- ============================================================== -->
    <nav class="breadcrumb">
      <span class="breadcrumb-item text-dark">Ecommerce</span>
      <a class="breadcrumb-item text-dark" href="{{url('ecommerce-order-list')}}">Orders</a>
      <a class="breadcrumb-item text-primary">Orders Page</a>

    </nav>
    <!-- ============================================================== -->
    <!-- End Breadcrumbs box -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Info box -->
    <!-- ============================================================== -->
    <div class="row">
      <!-- Column -->
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="row">

              <div class="col-lg-10">
                <div class="order-status">
                  <ul>
                    <li class="non-active">
                      <div class="white-bg">
                        <div class="circle-top"><div class="circle-1"></div>
                        </div>
                      </div>

                      <span>Refunded</span></li>

                    <li class="non-active">
                      <div class="white-bg">
                        <div class="circle-top"><div class="circle-1"></div>
                        </div>
                      </div>
                      <span>Pre-Order</span></li>

                    <li class="active-link">
                      <div class="white-bg">
                        <div class="circle-top"><div class="circle-1"></div>
                        </div>
                      </div>
                      <span>Awaiting Payment</span></li>

                    <li class="non-active">
                      <div class="white-bg">
                        <div class="circle-top"><div class="circle-1"></div>
                        </div>
                      </div>
                      <span>Delivery</span></li>

                  </ul>
                </div>
              </div>

              <div class="col-lg-2">
                <div class="btn-group pull-right">
                  <div class="dropdown">
                    <button aria-expanded="false" data-toggle="dropdown" class="btn waves-effect waves-light btn-rounded btn-outline-primary dropdown-toggle m-t-10" type="button">Change Order Status <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Delivered</a></li>
                      <li><a href="#">Out to Delivery</a></li>
                      <li><a href="#">Pending</a></li>
                      <li><a href="#">Cancelled</a></li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
      <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- End Info box -->

    <!--Delivery details -->
    <!-- ============================================================== -->
    <div class="row">
      <!-- Column -->
      <div class="col-lg-8 col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="d-flex m-b-10 no-block">
              <h5 class="card-title m-b-0 align-self-center text-uppercase">Order id 45601</h5>
              <div class="ml-auto">
                <ul class="list-inline m-t-5 text-muted text-uppercase lp-5 font-medium font-12">
                  <li>19.07.2018, 12:15</li>

                </ul>
              </div>
            </div>

            <div class="table-responsive">
              <table class="table product-table color-table primary-table">
                <thead>
                <tr>
                  <th>ID </th>
                  <th>Product</th>
                  <th>&nbsp;</th>
                  <th>Price</th>
                  <th>QTY</th>
                  <th>Total</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>5541</td>
                  <td><img src="{{asset('assets/imgs/pro70x70.png')}}" alt="" title=""> </td>
                  <td class="text-dark weight-600">
                    Huawei Y512 phone
                  </td>
                  <td>$375</td>
                  <td>1</td>
                  <td>$375</td>

                </tr>
                <tr>
                  <td>6595</td>
                  <td><img src="{{asset('assets/imgs/pro70x70.png')}}" alt="" title=""> </td>
                  <td class="text-dark weight-600">Wood table in red
                  </td>
                  <td>$488</td>
                  <td>1</td>
                  <td>$488</td>

                </tr>
                <tr>
                  <td>1234</td>
                  <td><img src="{{asset('assets/imgs/pro70x70.png')}}" alt="" title=""> </td>
                  <td class="text-dark weight-600">Huawei Y512 phone
                  </td>
                  <td>$244</td>
                  <td>2</td>
                  <td>$488</td>

                </tr>

                <tr>  <td>1234</td>
                  <td><img src="{{asset('assets/imgs/pro70x70.png')}}" alt="" title=""> </td>
                  <td class="text-dark weight-600">Riser white laptop
                  </td>
                  <td>$168</td>
                  <td>2</td>
                  <td>$336</td>

                </tr>


                <tr>
                  <td colspan="2" class="custom-product">&nbsp;</td>

                  <td colspan="3" class="text-muted custom-product">Subtotal Price:
                  </td>
                  <td class="custom-product">$1389</td>

                </tr>

                <tr>
                  <td class="no-border" colspan="2">&nbsp;</td>

                  <td colspan="3" class="text-muted no-border">Discount:
                  </td>
                  <td class="no-border">-$10</td>

                </tr>

                <tr>
                  <td class="no-border" colspan="2">&nbsp;</td>
                  <td colspan="3" class="text-muted no-border">Delivery (American Express):
                  </td>
                  <td class="no-border">$39</td>

                </tr>

                <tr>
                  <td class="no-border" colspan="2">&nbsp;</td>
                  <td colspan="3" class="text-dark no-border weight-600">Total Price:
                  </td>
                  <td class="no-border">$1418</td>

                </tr>





                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title m-b-5 align-self-center text-uppercase">Customer Details</h5>


            <div class="product-table text-dark no-border">
              <table class="table m-b-5 m-t-20 ">
                <tbody>
                <tr>
                  <td class="text-muted">Customer: </td>
                  <td class="text-color">Hakim Summers</td>
                </tr>
                <tr>
                  <td class="text-muted">Email: </td>
                  <td class="text-color">summershak@gmail.com</td>
                </tr>
                <tr>
                  <td class="text-muted">Phone: </td>
                  <td class="text-color">(059) 456 51 123</td>
                </tr>
                <tr>
                  <td class="text-muted">Address: </td>
                  <td class="text-color">MacKengsley St. 45/5, London, United Kingdom</td>
                </tr>
                </tbody>
              </table>
            </div>


          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title m-b-5 align-self-center text-uppercase">Shipping Address</h5>


            <div class="product-table text-dark no-border">
              <table class="table m-b-5 m-t-20 ">
                <tbody>
                <tr>
                  <td  class="text-muted">Recipient: </td>
                  <td  class="text-color">Amelie Summers</td>
                </tr> <tr>
                  <td class="text-muted">Phone: </td>
                  <td class="text-color">(059) 402 05 448</td>
                </tr> <tr>
                  <td class="text-muted">Address: </td>
                  <td class="text-color">Avenue St. 56/4B, London, United Kingdom</td>
                </tr>
                <tr>
                  <td class="text-muted">Post Code: </td>
                  <td class="text-color">45660</td>
                </tr>


                </tbody>
              </table>
            </div>


          </div>
        </div>

      </div>
      <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- End Delivery details -->

    @include('layouts.partials.footer')

  </div>
@endsection


@push('js')
  <!-- ============================================================== -->
  <!-- This page plugins -->
  <!-- ============================================================== -->
  <!--c3 JavaScript -->
  <script src="{{asset('plugins/vendors/d3/d3.min.js')}}"></script>
  <script src="{{asset('plugins/vendors/c3-master/c3.min.js')}}"></script>
  <!--jquery knob -->
  <script src="{{asset('plugins/vendors/knob/jquery.knob.js')}}"></script>
  <!--Sparkline JavaScript -->
  <script src="{{asset('plugins/vendors/sparkline/jquery.sparkline.min.js')}}"></script>
  <!--Morris JavaScript -->
  <script src="{{asset('plugins/vendors/raphael/raphael-min.js')}}"></script>
  <script src="{{asset('plugins/vendors/morrisjs/morris.js')}}"></script>
  <!-- Popup message jquery -->
  <script src="{{asset('plugins/vendors/toast-master/js/jquery.toast.js')}}"></script>
  <script src="{{asset('plugins/vendors/datatables/jquery.dataTables.min.js')}}"></script>
  <script>
      $(function() {
          $('#myTable').DataTable();
          var table = $('#example').DataTable({
              "columnDefs": [{
                  "visible": false,
                  "targets": 2
              }],
              "order": [
                  [2, 'asc']
              ],
              "displayLength": 18,
              "drawCallback": function(settings) {
                  var api = this.api();
                  var rows = api.rows({
                      page: 'current'
                  }).nodes();
                  var last = null;
                  api.column(2, {
                      page: 'current'
                  }).data().each(function(group, i) {
                      if (last !== group) {
                          $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                          last = group;
                      }
                  });
              }
          });
          // Order by the grouping
          $('#example tbody').on('click', 'tr.group', function() {
              var currentOrder = table.order()[0];
              if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                  table.order([2, 'desc']).draw();
              } else {
                  table.order([2, 'asc']).draw();
              }
          });

      });
      $('#example23').DataTable({
          dom: 'Bfrtip',
          buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print'
          ]
      });
  </script>
  <script>
      function checkAll(ele) {
          var checkboxes = document.getElementsByTagName('input');
          if (ele.checked) {
              for (var i = 0; i < checkboxes.length; i++) {
                  if (checkboxes[i].type == 'checkbox') {
                      checkboxes[i].checked = true;
                  }
              }
          } else {
              for (var i = 0; i < checkboxes.length; i++) {
                  console.log(i)
                  if (checkboxes[i].type == 'checkbox') {
                      checkboxes[i].checked = false;
                  }
              }
          }
      }
  </script>

  <!-- ============================================================== -->
  <!-- Style switcher -->
  <!-- ============================================================== -->
  <script src="{{asset('plugins/vendors/styleswitcher/jQuery.style.switcher.js')}}"></script>
@endpush
