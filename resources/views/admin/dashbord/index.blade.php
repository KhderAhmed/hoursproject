
@extends('Admin.app.layouts')
@section('admin')
    

<div class="content">
    <div class="py-4 px-3 px-md-4">

        <div class="mb-3 mb-md-4 d-flex justify-content-between">
            <div class="h3 mb-0">Dashboard</div>
        </div>

        <div class="row">
           
            <div class="col-md-6 col-xl-4 mb-3 mb-xl-4">
                <!-- Widget -->
                <div class="card flex-row align-items-center p-3 p-md-4">
                    
                    <div>
                        <h4 class="lh-1 mb-1 text-success"> wlecome : {{ Auth::user()->name }}</h4>
                        <a  class="text-danger" href="{{ route('logout') }}">
                      <span>SingOut</span>  <button type="button" class="btn btn-icon btn-red rounded-circle">
                            <i class="gd-arrow-right btn-icon-inner"></i>
                        
                          </button>   </a>
                   
                    </div>
                    
                </div>
                <!-- End Widget -->
            </div>


        </div>

        <div class="row">
            <div class="col-12">
                <!-- Card -->
              
                <!-- End Card -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-4 mb-3 mb-md-4">
                <!-- Card -->
           
                <!-- End Card -->
            </div>
            <div class="col-md-6 col-xl-4 mb-3 mb-md-4">
                <!-- Card -->
              
                <!-- End Card -->
            </div>
            <div class="col-lg-6 col-xl-4 mb-3 mb-lg-4">
                <!-- Card -->
            
                <!-- End Card -->
            </div>

            <div class="col-md-6 col-xl-4 mb-3 mb-md-4">
                <!-- Card -->
                <div class="card flex-row align-items-center p-3 p-md-4">
                    <div>
                       <a href="{{ route('nameuser') }}" ><h5 class="lh-1 mb-0">Customers</h5> </a>
                         <small>{{ $TotalUser }}</small> 
                    </div>
                    <div class="js-area-chart chart--points-invisible chart--labels-hidden py-1 ml-auto"
                         data-series='[
                       [
                        {"value":"25"},
                        {"value":"35"},
                        {"value":"10"},
                        {"value":"40"},
                        {"value":"20"}
                       ]
                     ]'
                         data-width="100"
                         data-height="40"
                         data-high="40"
                         data-is-line-smooth='["simple"]'
                         data-line-width='["1px"]'
                         data-line-colors='["#0cdcB9"]'
                         data-fill-opacity=".3"
                         data-is-fill-colors-gradient="true"
                         data-fill-colors='[
                       ["rgba(28,240,221,.6)","rgba(255,255,255,.6)"]
                     ]'
                    ></div>
                </div>
                <!-- End Card -->
            </div>

            <div class="col-md-6 col-xl-4 mb-3 mb-md-4">
               <!-- Card -->
                <div class="card flex-row align-items-center p-3 p-md-4">
                    <div>
                       <a href="{{ route('ContactUsindex') }}"><h5 class="lh-1 mb-0">ConactUs</h5></a>
                         <small>{{ $Totalconact }}</small> 
                    </div>
                    <div class="js-area-chart chart--points-invisible chart--labels-hidden py-2 ml-auto"
                         data-series='[
                            [
                                {"value":"25"},
                                {"value":"35"},
                                {"value":"10"},
                                {"value":"40"},
                                {"value":"20"}
                               ]
                     ]'
                         data-width="100"
                         data-height="40"
                         data-high="100"
                         data-is-line-smooth='[false]'
                         data-line-width='["1px"]'
                         data-line-colors='["#8069f2"]'
                         data-fill-opacity=".3"
                         data-is-fill-colors-gradient="true"
                         data-fill-colors='[
                       ["rgba(128,105,242,.7)","rgba(255,255,255,.6)"]
                     ]'
           ></div>
                </div>
                <!-- End Card -->
            </div>

          <div class="col-md-6 col-xl-4 mb-3 mb-md-4">
                <!-- Card -->
                <div class="card flex-row align-items-center p-3 p-md-4">
                    <div>
                         <a href="{{ route('product') }}">  <h5 class="lh-1 mb-0">Products</h5> </a>
                        <small>{{ $TotalProduct }}</small> 
                    </div>
                    <div class="js-area-chart chart--points-invisible chart--labels-hidden py-2 ml-auto"
                         data-series='[
                            [
                                {"value":"25"},
                                {"value":"35"},
                                {"value":"10"},
                                {"value":"40"},
                                {"value":"20"}
                               ]
                     ]'
                         data-is-hide-area="true"
                         data-width="123"
                         data-height="42"
                         data-high="42"
                         data-is-line-smooth='[false]'
                         data-line-width='["2px"]'
                         data-line-colors='["#8069f2"]'
                         data-is-show-tooltips="true"
                         data-is-tooltips-append-to-body="true"
                         data-tooltip-custom-class="chart-tooltip chart-tooltip--none-triangle d-flex align-items-center small text-white p-2 mt-5 ml-5"
                         data-tooltip-badge-markup='<span class="indicator indicator-sm bg-primary rounded-circle mr-1"></span>'
                         data-is-show-points="true"
                         data-point-custom-class='chart__point--hidden'
                         data-point-dimensions='{"width":8,"height":8}'></div>
                </div>
                <!-- End Card -->
            </div>  
        </div>
        </div>
 
        {{-- <div class="row">
            <div class="col-12">
                <div class="card mb-3 mb-md-4">
                    <div class="card-header">
                        <h5 class="font-weight-semi-bold mb-0">Quanttly Products</h5>
                    </div>

                    <div class="card-body pt-0">
                        <div class="table-responsive-xl">
                            <table class="table text-nowrap mb-0">
                                <thead>
                                <tr>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Bee</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Queen</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Honey</th>
                                    <th class="font-weight-semi-bold border-top-0 py-2">Others</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    {{-- <td class="py-3">{{ $sumbee }}</td>
                                    <td class="py-3">
                                        <div>{{ $sumQueen }}</div>
                                      
                                    </td>
                                    <td class="py-3">{{ $sumHoney }}</td>
                                    <td class="py-3">{{ $sumOthers }}</td> --}}
                                
                                </tr>
                            
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> 


    </div>
@endsection





