@extends('layout/layout')
@section('title','Admin - Add size')
@section('size_active','active')

@section('container')    
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ url('admin/size')}} "><button type="submit" class="btn long mr-20" style="background:#e59f06">Back</button></a>
                <br><br>
               
                <div class="form-element py-30 multiple-column">
                    <h4 class="font-20 mb-20">Add size</h4>
                    <form action="{{route('size.insert')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group"><label class="font-14 bold mb-2">Name</label>
                                    <input type="text" class="theme-input-style @error('category') is-invalid @enderror" placeholder="Name" name='name' value={{$name}}>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                               
                               
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><label class="font-14 bold mb-2">Size</label>
                                    <input type="text" class="theme-input-style @error('slug') is-invalid @enderror" name="size" placeholder="Size" value={{$size}}>
                                    @error('size')
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
 