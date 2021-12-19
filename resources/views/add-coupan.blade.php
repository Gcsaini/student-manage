@extends('layout/layout')
@section('title','Admin - Add coupan')
@section('coupan_active','active')
@section('container')    
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ url('admin/coupan') }} "><button type="submit" class="btn long mr-20" style="background:#e59f06">Back</button></a>
                <br><br>
               
                <div class="form-element py-30 multiple-column">
                    <h4 class="font-20 mb-20">Add coupan</h4>
                    <form action="{{route('coupan.insert')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group"><label class="font-14 bold mb-2">Coupan Name</label>
                                    <input type="text" class="theme-input-style @error('name') is-invalid @enderror" placeholder="Coupan name" name="name" value={{$name}}>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>   
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group"><label class="font-14 bold mb-2">Code</label>
                                    <input type="text" class="theme-input-style @error('code') is-invalid @enderror" name="code" placeholder="Coupan code" value={{$code}}>
                                    @error('code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-4"><label for="exampleSelect1"
                                    class="mb-2 bold d-block">Is one time</label>
                                    <div class="custom-select style--two">
                                        <select class="theme-input-style"
                                            id="is_one_time" name="is_one_time">
                                            @if($is_one_time==1)
                                                <option selected value="1">Yes</option>
                                                <option value="0">No</option>

                                            @else
                                            <option value="1">Yes</option>
                                            <option value="0" selected>No</option>

                                            @endif
                                                                       
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group"><label class="font-14 bold mb-2">value</label>
                                    <input type="text" class="theme-input-style @error('value') is-invalid @enderror" name="value" placeholder="Coupan value" value={{$value}}>
                                    @error('value')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-4"><label for="exampleSelect1"
                                    class="mb-2 bold d-block">Type</label>
                                    <div class="custom-select style--two">
                                        <select class="theme-input-style"
                                            id="is_discounted" name="type">
                                            @if($type=="value")
                                                <option selected value="value">Value</option>
                                                <option value="percentage">Percentage</option>

                                            @elseif($type=="percentage")
                                            <option  value="value">Value</option>
                                            <option selected value="percentage">Percentage</option>
                                            @else
                                            <option  value="value">Value</option>
                                            <option  value="percentage">Percentage</option>
                                            @endif
                                                                       
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group"><label class="font-14 bold mb-2">Min order amount</label>
                                    <input type="text" class="theme-input-style @error('min_order_amount') is-invalid @enderror" name="min_order_amount" placeholder="Coupan code" value={{$min_order_amount}}>
                                    @error('min_order_amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <input type="hidden" name="id" value={{$id}}>
                        </div>
                        
                        <div class="form-row">
                            <div class="col-12 text-right"><button type="submit" class="btn long">Submit</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>   
</div>    

@endsection    
 