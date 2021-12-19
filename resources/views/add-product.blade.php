@extends('layout/layout')
@section('title','Admin - Add product')
@section('product_active','active')
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
                <a href="{{ url('admin/product') }} "><button type="submit" class="btn long mr-20" style="background:#e59f06">Back</button></a>
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
        
                @error('attr_image.*')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>!! {{$message}} !! </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror
                <form action="{{route('product.insert')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-element py-30 multiple-column">
                        <h4 class="font-20 mb-20">Add product</h4>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group"><label class="font-14 bold mb-2">Name</label>
                                    <input type="text" class="theme-input-style @error('name') is-invalid @enderror" placeholder="Product name" name="name" value="{{$name}}">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>   
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group mb-4"><label for="exampleSelect1"
                                    class="mb-2 bold d-block">Select category</label>
                                    <div class="custom-select style--two">
                                        <select class="theme-input-style"
                                            id="exampleSelect1" name="category_id">
                                            @foreach($category as $cat)
                                            @if($category_id==$cat->id)
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
                            <div class="col-lg-3">
                                <div class="form-group mb-4"><label for="exampleSelect1"
                                    class="mb-2 bold d-block">Select brand</label>
                                    <div class="custom-select style--two">
                                        <select class="theme-input-style"
                                             name="brand">
                                            <option>Select brand</option>
                                            @foreach($brands as $br)
                                            @if($br->id==$brand)
                                                <option selected value="{{$br->id}}">
                                            @else
                                                <option value="{{$br->id}}">
                                            @endif
                                            {{ $br->name}}</option>
                                            
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group"><label class="font-14 bold mb-2">Model</label>
                                    <input type="text" class="theme-input-style @error('model') is-invalid @enderror" name="model" placeholder="Model"  value="{{$model}}">
                                    @error('model')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><label class="font-14 bold mb-2">keywords</label>
                                    <input type="text" class="theme-input-style @error('keywords') is-invalid @enderror" name="keywords" placeholder="Keywords" value="{{$keywords}}">
                                    @error('keywords')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><label class="font-14 bold mb-2">Uses</label>
                                    <input type="text" class="theme-input-style @error('uses') is-invalid @enderror" name="uses" placeholder="Uses" value="{{$uses}}">
                                    @error('uses')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group"><label class="font-14 bold mb-2">Warranty</label>
                                    <input type="text" class="theme-input-style @error('warranty') is-invalid @enderror" name="warranty" placeholder="Warranty"  value="{{$warranty}}">
                                    @error('warranty')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3" >
                                <div class="form-group "><label class="font-14 bold mb-2">Slug</label>
                                    <input type="text" class="theme-input-style @error('slug') is-invalid @enderror" name="slug" placeholder="Slug" value="{{$slug}}">
                                    @error('slug')
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
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="font-14 bold mb-2">Technical specification</label>
                                    <textarea class="theme-input-style style--seven @error('tech_spec') is-invalid @enderror" name="tech_spec" placeholder="Technical specification">
                                        {{$technical_specification}}
                                    </textarea>
                                    @error('tech_spec')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="form-group mb-4" >
                                    <label class="font-14 bold mb-2">Short description</label> 
                                    <textarea class="theme-input-style style--seven  @error('short_desc') is-invalid @enderror" placeholder="Type Here" name="short_desc">
                                        {{$short_desc}}
                                    </textarea>
                                    @error('short_desc')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="font-14 bold mb-2">Long description</label> 
                                    <textarea id="editor" class="theme-input-style style--seven @error('long_desc') is-invalid @enderror" placeholder="Type Here" name="long_desc">
                                        {{$long_desc}}
                                    </textarea>
                                    @error('long_desc')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>    
                            <div class="col-lg-3" >
                                <div class="form-group "><label class="font-14 bold mb-2">Lead time</label>
                                    <input type="text" class="theme-input-style @error('lead_time') is-invalid @enderror" name="lead_time" placeholder="Lead time" value="{{$lead_time}}">
                                    @error('lead_time')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3" >
                                <div class="form-group "><label class="font-14 bold mb-2">Tax</label>
                                    <input type="text" class="theme-input-style @error('tax') is-invalid @enderror" name="tax" placeholder="Tax" value="{{$tax}}">
                                    @error('tax')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3" >
                                <div class="form-group "><label class="font-14 bold mb-2">Tax Type</label>
                                    <input type="text" class="theme-input-style @error('tax_type') is-invalid @enderror" name="tax_type" placeholder="Tax type" value="{{$tax_type}}">
                                    @error('tax_type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-3" >
                                <div class="form-group mb-4"><label for="exampleSelect1"
                                    class="mb-2 bold d-block">Is Promo</label>
                                    <div class="custom-select style--two">
                                        <select class="theme-input-style"
                                            id="is_promo" name="is_promo">
                                            @if($is_promo==1)
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
                            <div class="col-lg-4" >
                                <div class="form-group mb-4"><label for="exampleSelect1"
                                    class="mb-2 bold d-block">Is Featured</label>
                                    <div class="custom-select style--two">
                                        <select class="theme-input-style"
                                            id="is_featured" name="is_featured">
                                            @if($is_featured==1)
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
                            <div class="col-lg-4" >
                                <div class="form-group mb-4"><label for="exampleSelect1"
                                    class="mb-2 bold d-block">Is Discounted</label>
                                    <div class="custom-select style--two">
                                        <select class="theme-input-style"
                                            id="is_discounted" name="is_discounted">
                                            @if($is_discounted==1)
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
                            <div class="col-lg-4" >
                                <div class="form-group mb-4"><label for="exampleSelect1"
                                    class="mb-2 bold d-block">Is Trending</label>
                                    <div class="custom-select style--two">
                                        <select class="theme-input-style"
                                            id="is_trending" name="is_trending">
                                            @if($is_trending==1)
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
                            <input type="hidden" name="id" value="{{$id}}">
                        </div>
                        
                        
                    </div>
                    <br>
                    <h4 class="font-20 mb-20">Product attributes</h4>
                    <div class="form-element py-30 multiple-column" id="add_more_attr">
                        @php
                        $loop_num_count = 1;
                        @endphp
                        
                        @foreach($productAttrArr as $key=>$val)
                        @php
                            $previous_loop = $loop_num_count;
                            $pAttrArr  = (array)$val;
                        @endphp
                        
                                   
                        <input type="hidden" name="paid[]"  value="{{$pAttrArr['id']}}">
                        <div class="row" id="product_attr_{{$loop_num_count++}}" style="margin-top:10px;border-bottom-style:dashed;border-color:#6A4DF6;">
                            
                            <div class="col-lg-3">
                                <div class="form-group"><label class="font-14 bold mb-2">SKU</label>
                                    <input type="text" class="theme-input-style @error('sku') is-invalid @enderror" placeholder="SKU" name="sku[]" required value="{{$pAttrArr['sku']}}">
                                    @error('sku')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>   
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group"><label class="font-14 bold mb-2">Price</label>
                                    <input type="text" class="theme-input-style @error('price') is-invalid @enderror" name="price[]" placeholder="Price" required value="{{$pAttrArr['price']}}">
                                    @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group"><label class="font-14 bold mb-2">MRP</label>
                                    <input type="text" class="theme-input-style @error('mrp') is-invalid @enderror" name="mrp[]" placeholder="MRP" required value="{{ $pAttrArr['mrp'] }}"> 
                                    @error('mrp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group"><label class="font-14 bold mb-2">Qty</label>
                                    <input type="text" class="theme-input-style @error('qty') is-invalid @enderror" name="qty[]" placeholder="Quantity" required value="{{$pAttrArr['qty']}}">
                                    @error('qty')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group mb-4"><label for="exampleSelect1"
                                    class="mb-2 bold d-block">Select color</label>
                                    <div class="custom-select style--two">
                                        <select class="theme-input-style"
                                            id="color_data" name="color_id[]">
                                            <option value="">Select color</option>
                                            @foreach($color as $co)
                                                @if($co->id==$pAttrArr['color_id'])
                                                    <option selected value="{{$co->id}}">{{ $co->color_name}}</option>
                                                @else
                                                    <option value="{{$co->id}}">{{ $co->color_name}}</option> {{ $co->color_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group mb-4"><label for="exampleSelect1"
                                    class="mb-2 bold d-block">Select size</label>
                                    <div class="custom-select style--two">
                                        <select class="theme-input-style"
                                            id="size_data" name="size_id[]">
                                            <option value="">Select size</option>
                                            @foreach($size as $si)
                                                @if($si->id==$pAttrArr['size_id'])
                                                    <option selected value="{{$si->id}}">{{ $si->size}}</option>
                                                @else
                                                    <option value="{{$si->id}}">{{ $si->size}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4">
                                <div class="form-group"><label class="font-14 bold mb-2">Select image</label>
                                    <input type="file" class="theme-input-style @error('attr_image') is-invalid @enderror" name="attr_image[]">
                                    @error('attr_image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            @if($pAttrArr['attr_image']!='')
                            <div class="col-lg-2">
                                <a href="{{asset('storage/media/'.$pAttrArr['attr_image'])}}" target="_blank"><img src="{{asset('storage/media/'.$pAttrArr['attr_image'])}}" width="80px" style="margin-top:7px;cursor:pointer"></a>
                            </div>
                            @endif
                            
                            <div class="col-lg-2">
                                @if($loop_num_count==2)
                                
                                    <button onclick='addMore()' style="margin-top:34px;background:none" type="button">
                                        <div class="icon"><i class="icon_plus_alt" style="font-size:35px;font-weight:bold;color:rgb(62, 214, 75)"></i></div>
                                    </button>
                                    
                                @else
                                
                                    <a href="{{url('admin/product/product_attr/delete')}}/{{$pAttrArr['id']}}/{{$id}}">
                                        <div class="icon"><i class="icofont-bin" style="font-size:30px;font-weight:bold;color:rgb(218, 57, 57);margin-top:38px"></i></div>
                                    </a>
                                @endif  
                            </div>
                        </div>    
                        @endforeach
                    </div>
                
                    <br>
                    <h4 class="font-20 mb-20">Product images</h4>
                    <div class="form-element py-30 multiple-column" id="product_image_box">
                        @php
                        $loop_num_count = 1;
                    
                        @endphp
                        
                        @foreach($imageAttrArr as $key=>$val)
                        @php
                            $previous_loop = $loop_num_count;
                            $imgAttrArr  = (array)$val;
                        @endphp
                    
                        <input type="hidden" name="piid[]"  value="{{$imgAttrArr['id']}}">               
                    
                        <div class="row" id="product_image_{{$loop_num_count++}}">
                            
                            <div class="col-lg-6">
                                <div class="form-group"><label class="font-14 bold mb-2">Select image</label>
                                    <input type="file" class="theme-input-style @error('product_images') is-invalid @enderror" name="product_images[]">
                                    @error('product_images')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            @if($imgAttrArr['images']!='')
                            <div class="col-lg-2">
                                <a href="{{asset('storage/media/'.$imgAttrArr['images'])}}" target="_blank"><img src="{{asset('storage/media/'.$imgAttrArr['images'])}}" width="80px" style="margin-top:7px;cursor:pointer"></a>
                            </div>
                            @endif
                           
                            <div class="col-lg-2">
                            @if($loop_num_count==2)
                           
                                <button onclick="addMoreImage()" style="margin-top:34px;background:none" type="button">
                                     <div class="icon"><i class="icon_plus_alt" style="font-size:35px;font-weight:bold;color:rgb(62, 214, 75)"></i></div>
                                </button>
                                 
                            @else
                                <a href="{{url('admin/product/product_image/delete')}}/{{$imgAttrArr['id']}}/{{$id}}">
                                    <div class="icon"><i class="icofont-bin" style="font-size:30px;font-weight:bold;color:rgb(218, 57, 57);margin-top:38px"></i></div>
                                </a>  
                            @endif 
                            </div>
                    
                        </div>   
                        @endforeach 
                    </div>
                     
                    <div class="form-row" style="margin-top:20px">
                        <div class="col-12 text-right"><button type="submit" class="btn long">Submit</button></div>
                    </div>
                </form>
            </div> 
        </div> 
    </div>   
</div>   

<script>  
var loop_count = 1;  
function addMore(){
    loop_count++;
    var html = '<input type="hidden" name="paid[]"><div class="row" id="product_attr_'+loop_count+'" style="margin-top:10px;border-bottom-style:dashed;border-color:#6A4DF6;"><div class="col-lg-3"><div class="form-group" ><label class="font-14 bold mb-2">SKU</label> <input type="text" class="theme-input-style " placeholder="SKU" name="sku[]" required></div></div><div class="col-lg-3"><div class="form-group"><label class="font-14 bold mb-2">Price</label> <input type="text" class="theme-input-style " name="price[]" placeholder="Price" required></div></div><div class="col-lg-3"><div class="form-group"><label class="font-14 bold mb-2">MRP</label> <input type="text" class="theme-input-style"  name="mrp[]" placeholder="MRP" required></div></div><div class="col-lg-3"><div class="form-group"><label class="font-14 bold mb-2">Qty</label> <input type="text" class="theme-input-style " name="qty[]" placeholder="Quantity" required> </div></div>';
    var color_data = jQuery('#color_data').html();
    color_data  = color_data.replace("selected","");
    html+='<div class="col-lg-3"><div class="form-group mb-4"><label for="exampleSelect1" class="mb-2 bold d-block">Select color</label><div class="custom-select style--two"> <select class="theme-input-style" id="color_id" name="color_id[]">'+color_data+'</select></div></div>';
    var size_data = jQuery('#size_data').html();
    size_data = size_data.replace("selected","");
    html+='</div><div class="col-lg-3"><div class="form-group mb-4"><label for="exampleSelect1" class="mb-2 bold d-block">Select size</label><div class="custom-select style--two"> <select class="theme-input-style" id="size_id" name="size_id[]">'+size_data+'</select></div>';
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
 