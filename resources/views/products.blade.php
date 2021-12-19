@extends('layout/layout')
@section('title','Admin - Products')
@section('product_active','active')


@section('container')
  
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card bg-transparent">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-xl-row justify-content-xl-between mb-2">
                            <div class="d-flex align-items-center flex-wrap">
                                <div class="aside-header pr-0 d-flex align-items-center mb-4 mb-sm-0">
                                    <div class="aside-header-btn d-flex justify-content-end position-relative">
                                        <h4 class="aside-btn-text c1 d-xl-flex align-items-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add&nbsp;&nbsp;&nbsp;</h4>
                                        <a href="{{ url('admin/add-product') }}" class="btn-circle style--two">
                                            <img src="{{asset('assets/img/svg/plus_white.svg')}}" alt="" class="svg">
                                        </a>
                                    </div>
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="d-flex align-items-center mr-4 mr-xl-5 ml-xl-n2 mb-4 mb-sm-0">
                                    <div class="progress_12">
                                        <div class="ProgressBar-wrap2 position-relative">
                                            <div class="ProgressBar ProgressBar_12" data-progress="67"><svg
                                                    class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                                    <circle transform="rotate(-90, 100, 100)"
                                                        class="ProgressBar-background" cx="100" cy="100"
                                                        r="85" />
                                                    <circle transform="rotate(-90, 100, 100)"
                                                        class="ProgressBar-circle" cx="100" cy="100"
                                                        r="85" />
                                                </svg></div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="mb-1 font-14 l-height1">Products</p>
                                        <h4>{{ $count }}</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mr-4 mr-xl-5 ml-xl-n2 mb-4 mb-sm-0">
                                    <div class="progress_13">
                                        <div class="ProgressBar-wrap2 position-relative">
                                            <div class="ProgressBar ProgressBar_13" data-progress="75"><svg
                                                    class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                                    <circle transform="rotate(-90, 100, 100)"
                                                        class="ProgressBar-background" cx="100" cy="100"
                                                        r="85" />
                                                    <circle transform="rotate(-90, 100, 100)"
                                                        class="ProgressBar-circle" cx="100" cy="100"
                                                        r="85" />
                                                </svg></div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="mb-1 font-14 l-height1">Earned</p>
                                        <h4>$16k</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mr-4 mr-xl-5 ml-xl-n2 mb-4 mb-sm-0">
                                    <div class="progress_14">
                                        <div class="ProgressBar-wrap2 position-relative">
                                            <div class="ProgressBar ProgressBar_14" data-progress="48"><svg
                                                    class="ProgressBar-contentCircle" viewBox="0 0 200 200">
                                                    <circle transform="rotate(-90, 100, 100)"
                                                        class="ProgressBar-background" cx="100" cy="100"
                                                        r="85" />
                                                    <circle transform="rotate(-90, 100, 100)"
                                                        class="ProgressBar-circle" cx="100" cy="100"
                                                        r="85" />
                                                </svg></div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <p class="mb-1 font-14 l-height1">Orders</p>
                                        <h4>$4.6k</h4>
                                    </div>
                                </div>
                              
                               
                            </div>
                        </div>
                    </div>
                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>!! </strong>{{session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="table-responsive">
                        <div class="product-statistics">
                            <div class="statistic-row pb-1">
                                <div class="bold">Name</div>
                                <div class="bold">Uses</div>
                                <div class="bold">Brand</div>
                                <div class="bold">Model</div>
                                <div class="bold">Status</div>
                                <div class="bold ">Actions</div>
                            </div>
                            @foreach($results as $list)
                            <div class="statistic-row pt-2">
                                <div>
                                    @if($list->image)
                                       <a href="{{asset('storage/media/'.$list->image)}}" target="_blank"> <img src="{{asset('storage/media/'.$list->image)}}" alt=""/></a>
                                    @else
                                        <img src="{{asset('storage/media/no-image.jpg')}}" alt=""/>
                                    @endif
                                    {{ $list->name }}</div>    
                                <div>{{ $list->uses }}</div>
                                <div>{{ $list->brand }}</div>
                                <div>{{ $list->model }}</div>

                                <div class="text-center">
                                    @if($list->status=='0')
                                       <a href="{{url('admin/product/status/1')}}/{{$list->id}}" class="status-btn un_paid">Active</a>
                                    @else
                                       <a href="{{url('admin/product/status/0')}}/{{$list->id}}" class="status-btn paid">Deactive</a>
                                    @endif
                                </div>
                                <div>
                                    <div class="dropdown-button icon"> 
                                        <a href="{{ url('admin/product/delete')}}/{{$list->id}}"><i class="icofont-bin" style="font-size: 24px;color:red"></i></a> &nbsp;&nbsp;   
                                        <a href="{{ url('admin/product/edit')}}/{{$list->id}}"><i class="icofont-edit" style="font-size: 20px;color:white"></i></a>  
                                    </div>
                                    
                                </div>
                            </div>  
                            @endforeach 
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>   
</div>   

@endsection