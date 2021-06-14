@extends('layouts.admins')

@section('content')
<div class="main_content_iner overly_inner ">
<div class="row">
    <div class="col-12">
        <div class="page_title_box d-flex align-items-center justify-content-between">
            <div class="page_title_left">
                <h3 class="f_s_30 f_w_700 text_white" >Dashboard</h3>
                <ol class="breadcrumb page_bradcam mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Salessa </a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Teacher</a></li>
                    <li class="breadcrumb-item active">Sales</li>
                </ol>
            </div>
            <a href="#" class="white_btn3">Create Report</a>
        </div>
    </div>
</div>
<div class="row ">


      <div class="col-lg-4">
                    <div class="white_card card_height_100 default_border_1px mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Daily Sales</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                          <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                          <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                          <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                          <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div id="chart-currently"></div>
                        </div>
                    </div>
                </div>
    <div class="col-lg-4">
        <div class="white_card card_height_100  mb_20">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Transaction</h3>
                    </div>
                    <div class="header_more_tool">
                        <div class="dropdown">
                            <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                              <i class="ti-more-alt"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                              <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                              <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                              <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                              <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="white_card_body">
                <div class="table-responsive">
                    <table class="table bayer_table m-0">
                        <tbody>
                          <tr>
                            <td >
                                <img class="byder_thumb wh_56" src="img/Payment/1.png" alt="">
                            </td>
                            <td>
                                <div class="payment_gatway">
                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme">Electricity Bill</h5>
                                    <p class="color_gray f_s_12 f_w_700 ">10 Aug 03:00PM</p>
                                </div>
                            </td>
                            <td>
                                <div class="payment_gatway text-right">
                                    <h5 class="byer_name  f_s_16 f_w_700 text_color_4">- $ 1254.00</h5>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td >
                                <img class="byder_thumb wh_56" src="img/Payment/1.png" alt="">
                            </td>
                            <td>
                                <div class="payment_gatway">
                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme">Showroom Rent</h5>
                                    <p class="color_gray f_s_12 f_w_700 ">10 Aug 03:00PM</p>
                                </div>
                            </td>
                            <td>
                                <div class="payment_gatway text-right">
                                    <h5 class="byer_name  f_s_16 f_w_700 text_color_5">+ $ 1254.00</h5>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td >
                                <img class="byder_thumb wh_56" src="img/Payment/1.png" alt="">
                            </td>
                            <td>
                                <div class="payment_gatway">
                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme">Iron Costing</h5>
                                    <p class="color_gray f_s_12 f_w_700 ">10 Aug 03:00PM</p>
                                </div>
                            </td>
                            <td>
                                <div class="payment_gatway text-right">
                                    <h5 class="byer_name  f_s_16 f_w_700 text_color_5">+ $ 1254.00</h5>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td >
                                <img class="byder_thumb wh_56" src="img/Payment/1.png" alt="">
                            </td>
                            <td>
                                <div class="payment_gatway">
                                    <h5 class="byer_name  f_s_16 f_w_700 color_theme">Packeging Cost</h5>
                                    <p class="color_gray f_s_12 f_w_700 ">10 Aug 03:00PM</p>
                                </div>
                            </td>
                            <td>
                                <div class="payment_gatway text-right">
                                    <h5 class="byer_name  f_s_16 f_w_700 text_color_5">+ $ 1254.00</h5>
                                </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="white_card card_height_100  mb_20">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">News & Update</h3>
                    </div>
                    <div class="single_wrap_input">
                        <select class="nice_Select2 wide" name="" id="">
                            <option value="1">Today</option>
                            <option value="1">Tomorrow</option>
                            <option value="1">Yesterday</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="white_card_body">
                <div class="single_update_news">
                    <h5 class="byer_name  f_s_16 f_w_600 color_theme2">36% off For pixel lights Couslations Types.</h5>
                    <p class="color_gray f_s_12 f_w_700 ">Sorem Kpsum is simply of the printing..</p>
                </div>
                <div class="single_update_news">
                    <h5 class="byer_name  f_s_16 f_w_600 color_theme2">We are produce new product this</h5>
                    <p class="color_gray f_s_12 f_w_700 ">Gorem Rpsum is simply text of the printing...</p>
                </div>
                <div class="single_update_news">
                    <h5 class="byer_name  f_s_16 f_w_600 color_theme2">50% off For COVID Couslations Types.</h5>
                    <p class="color_gray f_s_12 f_w_700 ">EoremHpsum is simply dummy...</p>
                </div>
                <div class="load_more_button text-center mt_30">
                    <a class="theme_text_btn d-flex align-items-center justify-content-center"  href="#">Load more <i class="ti-angle-down f_s_12 ml-2"></i> </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30 ">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Monthly Invoices</h3>
                    </div>
                    <div class="header_more_tool">
                        <div class="dropdown">
                            <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                              <i class="ti-more-alt"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                              <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                              <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                              <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                              <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="white_card_body QA_section">
                <div class="QA_table ">
                    <!-- table-responsive -->
                    <table class="table lms_table_active2 p-0">
                        <thead>
                            <tr>
                                <th scope="col">Customer</th>
                                <th scope="col">Product</th>
                                <th scope="col">Invoice</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="customer d-flex align-items-center">
                                        <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/1.png" alt=""></div>
                                        <span class="f_s_14 f_w_400 color_text_1" >Customer</span>
                                    </div>

                                </td>
                                <td class="f_s_14 f_w_400 color_text_2">Sunglass</td>
                                <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                <td class="f_s_14 f_w_400 color_text_4">$350</td>
                                <td class="f_s_14 f_w_400 text-right"><a href="#" class="badge_btn_1">Pending</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="customer d-flex align-items-center">
                                        <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/2.png" alt=""></div>
                                        <span class="f_s_14 f_w_400 color_text_1" >Customer</span>
                                    </div>

                                </td>
                                <td class="f_s_14 f_w_400 color_text_2">Sunglass</td>
                                <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                <td class="f_s_14 f_w_400 color_text_4">$350</td>
                                <td class="f_s_14 f_w_400 text-right"><a href="#" class="badge_btn_2">Paid</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="customer d-flex align-items-center">
                                        <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/3.png" alt=""></div>
                                        <span class="f_s_14 f_w_400 color_text_1" >Customer</span>
                                    </div>

                                </td>
                                <td class="f_s_14 f_w_400 color_text_2">Sunglass</td>
                                <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                <td class="f_s_14 f_w_400 color_text_4">$350</td>
                                <td class="f_s_14 f_w_400 text-right"><a href="#" class="badge_btn_3">Shipped</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="customer d-flex align-items-center">
                                        <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/4.png" alt=""></div>
                                        <span class="f_s_14 f_w_400 color_text_1" >Customer</span>
                                    </div>

                                </td>
                                <td class="f_s_14 f_w_400 color_text_2">Sunglass</td>
                                <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                <td class="f_s_14 f_w_400 color_text_4">$350</td>
                                <td class="f_s_14 f_w_400 text-right"><a href="#" class="badge_btn_3">Shipped</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="customer d-flex align-items-center">
                                        <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/5.png" alt=""></div>
                                        <span class="f_s_14 f_w_400 color_text_1" >Customer</span>
                                    </div>

                                </td>
                                <td class="f_s_14 f_w_400 color_text_2">Sunglass</td>
                                <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                <td class="f_s_14 f_w_400 color_text_4">$350</td>
                                <td class="f_s_14 f_w_400 text-right"><a href="#" class="badge_btn_2">Paid</a></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="customer d-flex align-items-center">
                                        <div class="thumb_34 mr_15 mt-0"><img class="img-fluid radius_50" src="img/customers/6.png" alt=""></div>
                                        <span class="f_s_14 f_w_400 color_text_1" >Customer</span>
                                    </div>

                                </td>
                                <td class="f_s_14 f_w_400 color_text_2">Sunglass</td>
                                <td class="f_s_14 f_w_400 color_text_3">#DE2548</td>
                                <td class="f_s_14 f_w_400 color_text_4">$350</td>
                                <td class="f_s_14 f_w_400 text-right"><a href="#" class="badge_btn_4 ">Delivered</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</div>

</div>

@endsection()
