@extends('layout/layout')

@section('container')    
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ url('admin/category')}} "><button type="submit" class="btn long mr-20" style="background:#e59f06">Back</button></a>
                <br><br>
               
                <div class="form-element py-30 multiple-column">
                    <h4 class="font-20 mb-20">Add category</h4>
                    <form action="{{route('category.insert')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group"><label class="font-14 bold mb-2">Category Name</label>
                                    <input type="text" class="theme-input-style @error('category') is-invalid @enderror" placeholder="Category name" name='category' value={{$category_name}}>
                                    @error('category')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                               
                               
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-4"><label for="exampleSelect1"
                                    class="mb-2 bold d-block">Select category</label>
                                    <div class="custom-select style--two">
                                        <select class="theme-input-style"
                                            id="exampleSelect1" name="category_parent_id">
                                            <option value="0">Select category</option>
                                            @foreach($category as $cat)
                                            @if($category_parent_id==$cat->id)
                                                <option selected value="{{$cat->id}}">
                                            @else
                                                <option value="{{$cat->id}}">
                                            @endif
                                            {{ $cat->category_name}}</option>
                                            
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group"><label class="font-14 bold mb-2">Category slug</label>
                                    <input type="text" class="theme-input-style @error('slug') is-invalid @enderror" name="slug" placeholder="Category slug" value={{$slug}}>
                                    @error('slug')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><label class="font-14 bold mb-2">Select image</label>
                                    <input type="file" class="theme-input-style @error('image') is-invalid @enderror" name="image" >
                                    @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                               <div class="d-flex align-items-center mb-3"><label class="custom-checkbox success position-relative mr-2"><input type="checkbox" id="check2" {{$is_home_checked}} name="is_home" > <span class="checkmark"></span></label> <label for="check22">Show in web page</label></div>
                             
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
 