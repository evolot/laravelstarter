@extends('admin.layouts.app')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>DASHBOARD</h2>
    </div>

    <!-- Widgets -->
    <div class="row clearfix">
      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
        <div class="info-box bg-pink hover-expand-effect">
          <div class="icon">
            <i class="material-icons">playlist_add_check</i>
          </div>
          <div class="content">
            <div class="text">用户</div>
            <div class="number count-to" data-from="0" data-to="125" data-speed="15"
                 data-fresh-interval="20"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
        <div class="info-box bg-cyan hover-expand-effect">
          <div class="icon">
            <i class="material-icons">help</i>
          </div>
          <div class="content">
            <div class="text">订单</div>
            <div class="number count-to" data-from="0" data-to="257" data-speed="1000"
                 data-fresh-interval="20"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
        <div class="info-box bg-light-green hover-expand-effect">
          <div class="icon">
            <i class="material-icons">forum</i>
          </div>
          <div class="content">
            <div class="text">课程</div>
            <div class="number count-to" data-from="0" data-to="243" data-speed="1000"
                 data-fresh-interval="20"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
        <div class="info-box bg-orange hover-expand-effect">
          <div class="icon">
            <i class="material-icons">person_add</i>
          </div>
          <div class="content">
            <div class="text">商品</div>
            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000"
                 data-fresh-interval="20"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
        <div class="info-box bg-orange hover-expand-effect">
          <div class="icon">
            <i class="material-icons">person_add</i>
          </div>
          <div class="content">
            <div class="text">文章</div>
            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000"
                 data-fresh-interval="20"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
        <div class="info-box bg-orange hover-expand-effect">
          <div class="icon">
            <i class="material-icons">person_add</i>
          </div>
          <div class="content">
            <div class="text">工单</div>
            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000"
                 data-fresh-interval="20"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- #END# Widgets -->
    <!-- CPU Usage -->
  {{--<div class="row clearfix">--}}
  {{--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
  {{--<div class="card">--}}
  {{--<div class="header">--}}
  {{--<div class="row clearfix">--}}
  {{--<div class="col-xs-12 col-sm-6">--}}
  {{--<h2>CPU USAGE (%)</h2>--}}
  {{--</div>--}}
  {{--<div class="col-xs-12 col-sm-6 align-right">--}}
  {{--<div class="switch panel-switch-btn">--}}
  {{--<span class="m-r-10 font-12">REAL TIME</span>--}}
  {{--<label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--<ul class="header-dropdown m-r--5">--}}
  {{--<li class="dropdown">--}}
  {{--<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">--}}
  {{--<i class="material-icons">more_vert</i>--}}
  {{--</a>--}}
  {{--<ul class="dropdown-menu pull-right">--}}
  {{--<li><a href="javascript:void(0);">Action</a></li>--}}
  {{--<li><a href="javascript:void(0);">Another action</a></li>--}}
  {{--<li><a href="javascript:void(0);">Something else here</a></li>--}}
  {{--</ul>--}}
  {{--</li>--}}
  {{--</ul>--}}
  {{--</div>--}}
  {{--<div class="body">--}}
  {{--<div id="real_time_chart" class="dashboard-flot-chart"></div>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--</div>--}}
  {{--</div>--}}
  <!-- #END# CPU Usage -->
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="header">
            <h2>
              TABS WITH ICON TITLE
            </h2>
            <ul class="header-dropdown m-r--5">
              <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                   role="button" aria-haspopup="true" aria-expanded="true">
                  <i class="material-icons">more_vert</i>
                </a>
                <ul class="dropdown-menu pull-right">
                  <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a>
                  </li>
                  <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another
                      action</a></li>
                  <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else
                      here</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#home_with_icon_title" data-toggle="tab">
                  <i class="material-icons">home</i> 公告
                </a>
              </li>
              <li role="presentation">
                <a href="#profile_with_icon_title" data-toggle="tab">
                  <i class="material-icons">face</i> 新会员
                </a>
              </li>
              <li role="presentation">
                <a href="#messages_with_icon_title" data-toggle="tab">
                  <i class="material-icons">email</i> 新订单
                </a>
              </li>
              <li role="presentation">
                <a href="#settings_with_icon_title" data-toggle="tab">
                  <i class="material-icons">settings</i> 新工单
                </a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                <div class="card">
                  <div class="header">
                    <h2>
                      BASIC EXAMPLE
                    </h2>
                    <ul class="header-dropdown m-r--5">
                      <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">
                          <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                          <li><a href="javascript:void(0);"
                                 class=" waves-effect waves-block">Action</a></li>
                          <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another
                              action</a></li>
                          <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something
                              else here</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="body">
                    <div class="table-responsive">
                      <div id="DataTables_Table_0_wrapper"
                           class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show
                                <select name="DataTables_Table_0_length"
                                        aria-controls="DataTables_Table_0"
                                        class="form-control input-sm">
                                  <option value="10">10</option>
                                  <option value="25">25</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                                </select> entries</label></div>
                          </div>
                          <div class="col-sm-6">
                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input
                                    type="search" class="form-control input-sm" placeholder=""
                                    aria-controls="DataTables_Table_0"></label></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <table
                                class="table table-bordered table-striped table-hover js-basic-example dataTable"
                                id="DataTables_Table_0" role="grid"
                                aria-describedby="DataTables_Table_0_info">
                              <thead>
                              <tr role="row">
                                <th class="sorting_asc" tabindex="0"
                                    aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending"
                                    style="width: 126px;">Name
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Position: activate to sort column ascending"
                                    style="width: 210px;">Position
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Office: activate to sort column ascending"
                                    style="width: 90px;">Office
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Age: activate to sort column ascending"
                                    style="width: 38px;">Age
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Start date: activate to sort column ascending"
                                    style="width: 84px;">Start date
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Salary: activate to sort column ascending"
                                    style="width: 68px;">Salary
                                </th>
                              </tr>
                              </thead>
                              <tfoot>
                              <tr>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Position</th>
                                <th rowspan="1" colspan="1">Office</th>
                                <th rowspan="1" colspan="1">Age</th>
                                <th rowspan="1" colspan="1">Start date</th>
                                <th rowspan="1" colspan="1">Salary</th>
                              </tr>
                              </tfoot>
                              <tbody>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>$1,200,000</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>$132,000</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td>$206,850</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>$372,000</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td>$163,500</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td>$106,450</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td>$145,600</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                              </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-5">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                 aria-live="polite">Showing 1 to 10 of 57 entries
                            </div>
                          </div>
                          <div class="col-sm-7">
                            <div class="dataTables_paginate paging_simple_numbers"
                                 id="DataTables_Table_0_paginate">
                              <ul class="pagination">
                                <li class="paginate_button previous disabled"
                                    id="DataTables_Table_0_previous"><a href="#"
                                                                        aria-controls="DataTables_Table_0"
                                                                        data-dt-idx="0"
                                                                        tabindex="0">Previous</a>
                                </li>
                                <li class="paginate_button active"><a href="#"
                                                                      aria-controls="DataTables_Table_0"
                                                                      data-dt-idx="1"
                                                                      tabindex="0">1</a></li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="2" tabindex="0">2</a>
                                </li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="3" tabindex="0">3</a>
                                </li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="4" tabindex="0">4</a>
                                </li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="5" tabindex="0">5</a>
                                </li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="6" tabindex="0">6</a>
                                </li>
                                <li class="paginate_button next" id="DataTables_Table_0_next"><a
                                      href="#" aria-controls="DataTables_Table_0" data-dt-idx="7"
                                      tabindex="0">Next</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                <div class="card">
                  <div class="header">
                    <h2>
                      BASIC EXAMPLE
                    </h2>
                    <ul class="header-dropdown m-r--5">
                      <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">
                          <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                          <li><a href="javascript:void(0);"
                                 class=" waves-effect waves-block">Action</a></li>
                          <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another
                              action</a></li>
                          <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something
                              else here</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="body">
                    <div class="table-responsive">
                      <div id="DataTables_Table_0_wrapper"
                           class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show
                                <select name="DataTables_Table_0_length"
                                        aria-controls="DataTables_Table_0"
                                        class="form-control input-sm">
                                  <option value="10">10</option>
                                  <option value="25">25</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                                </select> entries</label></div>
                          </div>
                          <div class="col-sm-6">
                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input
                                    type="search" class="form-control input-sm" placeholder=""
                                    aria-controls="DataTables_Table_0"></label></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <table
                                class="table table-bordered table-striped table-hover js-basic-example dataTable"
                                id="DataTables_Table_0" role="grid"
                                aria-describedby="DataTables_Table_0_info">
                              <thead>
                              <tr role="row">
                                <th class="sorting_asc" tabindex="0"
                                    aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending"
                                    style="width: 126px;">Name
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Position: activate to sort column ascending"
                                    style="width: 210px;">Position
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Office: activate to sort column ascending"
                                    style="width: 90px;">Office
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Age: activate to sort column ascending"
                                    style="width: 38px;">Age
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Start date: activate to sort column ascending"
                                    style="width: 84px;">Start date
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Salary: activate to sort column ascending"
                                    style="width: 68px;">Salary
                                </th>
                              </tr>
                              </thead>
                              <tfoot>
                              <tr>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Position</th>
                                <th rowspan="1" colspan="1">Office</th>
                                <th rowspan="1" colspan="1">Age</th>
                                <th rowspan="1" colspan="1">Start date</th>
                                <th rowspan="1" colspan="1">Salary</th>
                              </tr>
                              </tfoot>
                              <tbody>


                              <tr role="row" class="odd">
                                <td class="sorting_1">Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>$1,200,000</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>$132,000</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td>$206,850</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>$372,000</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td>$163,500</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td>$106,450</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td>$145,600</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                              </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-5">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                 aria-live="polite">Showing 1 to 10 of 57 entries
                            </div>
                          </div>
                          <div class="col-sm-7">
                            <div class="dataTables_paginate paging_simple_numbers"
                                 id="DataTables_Table_0_paginate">
                              <ul class="pagination">
                                <li class="paginate_button previous disabled"
                                    id="DataTables_Table_0_previous"><a href="#"
                                                                        aria-controls="DataTables_Table_0"
                                                                        data-dt-idx="0"
                                                                        tabindex="0">Previous</a>
                                </li>
                                <li class="paginate_button active"><a href="#"
                                                                      aria-controls="DataTables_Table_0"
                                                                      data-dt-idx="1"
                                                                      tabindex="0">1</a></li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="2" tabindex="0">2</a>
                                </li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="3" tabindex="0">3</a>
                                </li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="4" tabindex="0">4</a>
                                </li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="5" tabindex="0">5</a>
                                </li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="6" tabindex="0">6</a>
                                </li>
                                <li class="paginate_button next" id="DataTables_Table_0_next"><a
                                      href="#" aria-controls="DataTables_Table_0" data-dt-idx="7"
                                      tabindex="0">Next</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                <div class="card">
                  <div class="header">
                    <h2>
                      BASIC EXAMPLE
                    </h2>
                    <ul class="header-dropdown m-r--5">
                      <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">
                          <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                          <li><a href="javascript:void(0);"
                                 class=" waves-effect waves-block">Action</a></li>
                          <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another
                              action</a></li>
                          <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something
                              else here</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="body">
                    <div class="table-responsive">
                      <div id="DataTables_Table_0_wrapper"
                           class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show
                                <select name="DataTables_Table_0_length"
                                        aria-controls="DataTables_Table_0"
                                        class="form-control input-sm">
                                  <option value="10">10</option>
                                  <option value="25">25</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                                </select> entries</label></div>
                          </div>
                          <div class="col-sm-6">
                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input
                                    type="search" class="form-control input-sm" placeholder=""
                                    aria-controls="DataTables_Table_0"></label></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <table
                                class="table table-bordered table-striped table-hover js-basic-example dataTable"
                                id="DataTables_Table_0" role="grid"
                                aria-describedby="DataTables_Table_0_info">
                              <thead>
                              <tr role="row">
                                <th class="sorting_asc" tabindex="0"
                                    aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending"
                                    style="width: 126px;">Name
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Position: activate to sort column ascending"
                                    style="width: 210px;">Position
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Office: activate to sort column ascending"
                                    style="width: 90px;">Office
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Age: activate to sort column ascending"
                                    style="width: 38px;">Age
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Start date: activate to sort column ascending"
                                    style="width: 84px;">Start date
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Salary: activate to sort column ascending"
                                    style="width: 68px;">Salary
                                </th>
                              </tr>
                              </thead>
                              <tfoot>
                              <tr>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Position</th>
                                <th rowspan="1" colspan="1">Office</th>
                                <th rowspan="1" colspan="1">Age</th>
                                <th rowspan="1" colspan="1">Start date</th>
                                <th rowspan="1" colspan="1">Salary</th>
                              </tr>
                              </tfoot>
                              <tbody>


                              <tr role="row" class="odd">
                                <td class="sorting_1">Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>$1,200,000</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>$132,000</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td>$206,850</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>$372,000</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td>$163,500</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td>$106,450</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td>$145,600</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                              </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-5">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                 aria-live="polite">Showing 1 to 10 of 57 entries
                            </div>
                          </div>
                          <div class="col-sm-7">
                            <div class="dataTables_paginate paging_simple_numbers"
                                 id="DataTables_Table_0_paginate">
                              <ul class="pagination">
                                <li class="paginate_button previous disabled"
                                    id="DataTables_Table_0_previous"><a href="#"
                                                                        aria-controls="DataTables_Table_0"
                                                                        data-dt-idx="0"
                                                                        tabindex="0">Previous</a>
                                </li>
                                <li class="paginate_button active"><a href="#"
                                                                      aria-controls="DataTables_Table_0"
                                                                      data-dt-idx="1"
                                                                      tabindex="0">1</a></li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="2" tabindex="0">2</a>
                                </li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="3" tabindex="0">3</a>
                                </li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="4" tabindex="0">4</a>
                                </li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="5" tabindex="0">5</a>
                                </li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="6" tabindex="0">6</a>
                                </li>
                                <li class="paginate_button next" id="DataTables_Table_0_next"><a
                                      href="#" aria-controls="DataTables_Table_0" data-dt-idx="7"
                                      tabindex="0">Next</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                <div class="card">
                  <div class="header">
                    <h2>
                      BASIC EXAMPLE
                    </h2>
                    <ul class="header-dropdown m-r--5">
                      <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">
                          <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                          <li><a href="javascript:void(0);"
                                 class=" waves-effect waves-block">Action</a></li>
                          <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another
                              action</a></li>
                          <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something
                              else here</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="body">
                    <div class="table-responsive">
                      <div id="DataTables_Table_0_wrapper"
                           class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show
                                <select name="DataTables_Table_0_length"
                                        aria-controls="DataTables_Table_0"
                                        class="form-control input-sm">
                                  <option value="10">10</option>
                                  <option value="25">25</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                                </select> entries</label></div>
                          </div>
                          <div class="col-sm-6">
                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input
                                    type="search" class="form-control input-sm" placeholder=""
                                    aria-controls="DataTables_Table_0"></label></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <table
                                class="table table-bordered table-striped table-hover js-basic-example dataTable"
                                id="DataTables_Table_0" role="grid"
                                aria-describedby="DataTables_Table_0_info">
                              <thead>
                              <tr role="row">
                                <th class="sorting_asc" tabindex="0"
                                    aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                    aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending"
                                    style="width: 126px;">Name
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Position: activate to sort column ascending"
                                    style="width: 210px;">Position
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Office: activate to sort column ascending"
                                    style="width: 90px;">Office
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Age: activate to sort column ascending"
                                    style="width: 38px;">Age
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Start date: activate to sort column ascending"
                                    style="width: 84px;">Start date
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1"
                                    aria-label="Salary: activate to sort column ascending"
                                    style="width: 68px;">Salary
                                </th>
                              </tr>
                              </thead>
                              <tfoot>
                              <tr>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Position</th>
                                <th rowspan="1" colspan="1">Office</th>
                                <th rowspan="1" colspan="1">Age</th>
                                <th rowspan="1" colspan="1">Start date</th>
                                <th rowspan="1" colspan="1">Salary</th>
                              </tr>
                              </tfoot>
                              <tbody>


                              <tr role="row" class="odd">
                                <td class="sorting_1">Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>$1,200,000</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>$132,000</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td>$206,850</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>$372,000</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td>$163,500</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td>$106,450</td>
                              </tr>
                              <tr role="row" class="odd">
                                <td class="sorting_1">Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td>$145,600</td>
                              </tr>
                              <tr role="row" class="even">
                                <td class="sorting_1">Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                              </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-5">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                 aria-live="polite">Showing 1 to 10 of 57 entries
                            </div>
                          </div>
                          <div class="col-sm-7">
                            <div class="dataTables_paginate paging_simple_numbers"
                                 id="DataTables_Table_0_paginate">
                              <ul class="pagination">
                                <li class="paginate_button previous disabled"
                                    id="DataTables_Table_0_previous"><a href="#"
                                                                        aria-controls="DataTables_Table_0"
                                                                        data-dt-idx="0"
                                                                        tabindex="0">Previous</a>
                                </li>
                                <li class="paginate_button active"><a href="#"
                                                                      aria-controls="DataTables_Table_0"
                                                                      data-dt-idx="1"
                                                                      tabindex="0">1</a></li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="2" tabindex="0">2</a>
                                </li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="3" tabindex="0">3</a>
                                </li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="4" tabindex="0">4</a>
                                </li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="5" tabindex="0">5</a>
                                </li>
                                <li class="paginate_button "><a href="#"
                                                                aria-controls="DataTables_Table_0"
                                                                data-dt-idx="6" tabindex="0">6</a>
                                </li>
                                <li class="paginate_button next" id="DataTables_Table_0_next"><a
                                      href="#" aria-controls="DataTables_Table_0" data-dt-idx="7"
                                      tabindex="0">Next</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="row clearfix">
      <!-- Task Info -->
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <div class="card">
          <div class="header">
            <h2>TASK INFOS</h2>
            <ul class="header-dropdown m-r--5">
              <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                   role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">more_vert</i>
                </a>
                <ul class="dropdown-menu pull-right">
                  <li><a href="javascript:void(0);">Action</a></li>
                  <li><a href="javascript:void(0);">Another action</a></li>
                  <li><a href="javascript:void(0);">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="body">
            <div class="table-responsive">
              <table class="table table-hover dashboard-task-infos">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Task</th>
                  <th>Status</th>
                  <th>Manager</th>
                  <th>Progress</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Task A</td>
                  <td><span class="label bg-green">Doing</span></td>
                  <td>John Doe</td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62"
                           aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Task B</td>
                  <td><span class="label bg-blue">To Do</span></td>
                  <td>John Doe</td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40"
                           aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Task C</td>
                  <td><span class="label bg-light-blue">On Hold</span></td>
                  <td>John Doe</td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72"
                           aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Task D</td>
                  <td><span class="label bg-orange">Wait Approvel</span></td>
                  <td>John Doe</td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95"
                           aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Task E</td>
                  <td>
                    <span class="label bg-red">Suspended</span>
                  </td>
                  <td>John Doe</td>
                  <td>
                    <div class="progress">
                      <div class="progress-bar bg-red" role="progressbar" aria-valuenow="87"
                           aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                    </div>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- #END# Task Info -->

    </div>
  </div>
</section>

<!-- Jquery Core Js -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.js"></script>
{{--<script src="plugins/jquery/jquery.min.js"></script>--}}

<!-- Bootstrap Core Js -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
{{--<script src="plugins/bootstrap/js/bootstrap.js"></script>--}}

<!-- Select Plugin Js -->
{{--<script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>--}}

<!-- Slimscroll Plugin Js -->
<script src="https://cdn.bootcss.com/jQuery-slimScroll/1.3.0/jquery.slimscroll.min.js"></script>
{{--<script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>--}}

<!-- Waves Effect Plugin Js -->
<script src="{{url('/js/admin/plugins/waves.min.js')}}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{url('/js/admin/plugins/jquery.countTo.js')}}"></script>

{{--<!-- Morris Plugin Js -->--}}
{{--<script src="plugins/raphael/raphael.min.js"></script>--}}
{{--<script src="plugins/morrisjs/morris.js"></script>--}}


<!-- Sparkline Chart Plugin Js -->
{{--<script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>--}}

<!-- Custom Js -->
<script src="{{asset('/js/admin/admin.js')}}"></script>
<script src="{{asset('/js/admin/pages/index.js')}}"></script>

<!-- Demo Js -->
<script src="{{asset('js/admin/demo.js')}}"></script>

@endsection
