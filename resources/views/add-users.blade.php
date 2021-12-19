@extends('layout/layout')
@section('title','Admin - Add users')
@section('user_active','active')
@section('container')   
    
@if($id>0)
  {{ $img_required = ''}}
@else
 {{ $img_required = 'required'}}
@endif

<div class="main-content">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-12">
                <a href="{{ url('admin/users') }} "><button type="submit" class="btn long mr-20" style="background:#e59f06">Back</button></a>
                <br><br>
                <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
                <script src="{{asset('ckeditor/ckeditor/samples/js/sample.js')}}"></script>

                @if(Session::has('sku_error'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>!!{{session('sku_error')}}!! </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
        

                <form action="{{route('users.insert')}}" method="POST" enctype="multipart/form-data">

                    <div class="form-element py-30 multiple-column">
                        
                        <h4 class="font-20 mb-20">Add users</h4>
                        
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group"><label class="font-14 bold mb-2">Name</label>
                                    <input type="text" class="theme-input-style @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{$name}}">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>   
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><label class="font-14 bold mb-2">Email</label>
                                    <input type="text" class="theme-input-style @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{$email}}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>   
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group"><label class="font-14 bold mb-2">Address</label>
                                    <input type="text" class="theme-input-style @error('address') is-invalid @enderror" name="address" placeholder="Address"  value="{{$address}}">
                                    @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><label class="font-14 bold mb-2">City</label>
                                    <input type="text" class="theme-input-style @error('city') is-invalid @enderror" name="city" placeholder="City" value="{{$city}}">
                                    @error('city')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><label class="font-14 bold mb-2">State</label>
                                    <input type="text" class="theme-input-style @error('state') is-invalid @enderror" name="state" placeholder="State" value="{{$state}}">
                                    @error('state')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><label class="font-14 bold mb-2">Zip</label>
                                    <input type="text" class="theme-input-style @error('zip') is-invalid @enderror" name="zip" placeholder="Zip"  value="{{$zip}}">
                                    @error('zip')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6" >
                                <div class="form-group "><label class="font-14 bold mb-2">Company</label>
                                    <input type="text" class="theme-input-style @error('company') is-invalid @enderror" name="company" placeholder="Company" value="{{$company}}">
                                    @error('company')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group"><label class="font-14 bold mb-2">Select image</label>
                                    <input type="file" class="theme-input-style @error('image') is-invalid @enderror" name="image" {{$img_required}}>
                                    @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6" >
                                <div class="form-group "><label class="font-14 bold mb-2">GSTIN</label>
                                    <input type="text" class="theme-input-style @error('gstin') is-invalid @enderror" name="gstin" placeholder="GSTIN" value="{{$gstin}}">
                                    @error('gstin')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{$id}}">
                        </div>
                    </div>
                    <div class="form-row" style="margin-top:20px">
                        <div class="col-12 text-right"><button type="submit" class="btn long">Submit</button></div>
                    </div>
                    <br>
                </form>
            </div> 
        </div> 
    </div>   
</div>   

<script>  
var loop_count = 1;  
function addMore(){
    loop_count++;
    var html = '<input type="hidden" name="paid[]"><div class="row" id="product_attr_'+loop_count+'" style="margin-top:10px;border-bottom-style:dashed;border-color:#6A4DF6;"><div class="col-lg-3"><div class="form-group" ><label class="font-14 bold mb-2">SKU</label> <input type="text" class="theme-input-style " placeholder="SKU" name="sku[]" required></div></div><div class="col-lg-3"><div class="form-group"><label class="font-14 bold mb-2">Price</label> <input type="text" class="theme-input-style " name="price[]" placeholder="Price" required></div></div><div class="col-lg-3"><div class="form-group"><label class="font-14 bold mb-2">MRP</label> <input type="text" class="theme-input-style  name="mrp[]" placeholder="MRP" required></div></div><div class="col-lg-3"><div class="form-group"><label class="font-14 bold mb-2">Qty</label> <input type="text" class="theme-input-style " name="qty[]" placeholder="Quantity" required> </div></div>';
    var color_data = jQuery('#color_data').html();
    color_data  = color_data.replace("selected","");
    html+='<div class="col-lg-3"><div class="form-group mb-4"><label for="exampleSelect1" class="mb-2 bold d-block">Select color</label><div class="custom-select style--two"> <select class="theme-input-style" id="exampleSelect1" name="color_id[]">'+color_data+'</select></div></div>';
    var size_data = jQuery('#size_data').html();
    size_data = size_data.replace("selected","");
    html+='</div><div class="col-lg-3"><div class="form-group mb-4"><label for="exampleSelect1" class="mb-2 bold d-block">Select size</label><div class="custom-select style--two"> <select class="theme-input-style" id="exampleSelect1" name="size_id[]">'+size_data+'</select></div>';
    html+='</div></div><div class="col-lg-4"><div class="form-group"><label class="font-14 bold mb-2">Select image</label> <input type="file" class="theme-input-style " name="attr_image[]"></div></div><div class="col-lg-2"><button onClick=remove_more("'+loop_count+'") style="margin-top:32px;background:none"><div class="icon"><i class="icofont-bin" style="font-size:30px;font-weight:bold;color:rgb(218, 57, 57);"></i></div></button></div></div>';
    jQuery('#add_more_attr').append(html);
}    

function remove_more(loop_count){
    jQuery('#product_attr_'+loop_count).remove();
}
/* Product images add more */
    var loop_image_count=1;
    function addMoreImage(){
        loop_image_count++;
        var html = '<input type="hidden" name="piid[]" value=""/><div class="row" id="product_image_'+loop_image_count+'"><div class="col-lg-6"><div class="form-group"><label class="font-14 bold mb-2">Select image</label><input type="file" class="theme-input-style" name="product_images[]"></div></div>';
        html+='<div class="col-lg-2"><button onClick=remove_more_image("'+loop_image_count+'") style="margin-top:32px;background:none"><div class="icon"><i class="icofont-bin" style="font-size:30px;font-weight:bold;color:rgb(218, 57, 57);"></i></div></button></div>';
        html+='</div>'
        jQuery('#product_image_box').append(html);
    }

    function remove_more_image(loop_image_count){
        jQuery('#product_image_'+loop_image_count).remove();
    }



</script>

<script type="text/javascript">
    CKEDITOR.replace( 'short_desc');
    CKEDITOR.replace( 'long_desc');
    CKEDITOR.replace( 'tech_spec');
        
</script> 


@endsection    
 