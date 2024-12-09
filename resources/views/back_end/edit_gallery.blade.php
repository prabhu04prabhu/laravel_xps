@extends('layouts.header')
@section('content')
<div class="content-page">  
            <div class="content">
                <div class="container-fluid">
                   <div class="page-title-box">
    <div class="row align-items-center">
         <div class="col-sm-6">
    <h4 class="page-title">Edit Gallery</h4>
    
</div>                          
           
    </div>
</div>
<!-- end row -->
                   <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                            @if (\Session::has('success'))
                                            <div class="alert alert-success">
                
                                                {!! \Session::get('success') !!}
                
                                            </div>
                                            @endif

                                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                                            <h4 class="mt-0 header-title">Choose Category</h4>
<form action="{{url('cat_search')}}" method="post">
    @csrf
                                            <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                    <select class="form-control" name="cat_id_hidden">
                                                        @php
                                                            $cat_select = DB::table('gallery_category')->get();
                                                        @endphp
                                                        @foreach ($cat_select as $row)
                                                        <option value="{{$row->cat_id}}">{{$row->name}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                            <button type="submit" class="btn btn-success">Search</button>
                                                    </div>
                                                    </div>
                                                </div>
                                           
                                            </form>
                                        <?php 
                                        $cat_id = '';
                                        $cat_name = '';
                                        if(isset($result))
                                        {
                                            foreach ($result as $item) {
                                                $cat_name = $item->name;
                                                $cat_id = $item->cat_id;
                                            }
                                        }?>
                                            <h4 class="mt-0 header-title">Chosen Category Name</h4>
                                            <p class="text-muted m-b-30" style="color: black !important;"><?php if(!empty($cat_name)){echo $cat_name;} ?></p>
                                        <?php if(!empty($cat_name)){ ?>
                                        <a href="edit_category?id=<?php echo $cat_id; ?>" class="btn btn-info">Edit Category</a>
                                        <?php } ?>
                                        <br>
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr style="text-align:center">
                                                <th style="width:12px">S.No</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>

                                             
                                                <?php $i = 1; ?>
                                                @if(isset($result))
                                                  @foreach ($result as $item)
                                            <tr style="text-align:center">
                                               
                                                <td>{{$i}}</td>
                                                <td><a href="image/{{$item->image}}" target="_blank"><img src="image/{{$item->image}}" alt="" srcset="" height="52px" width="52px"></a></td>
                                               
                                                <td>
                                                  <a href="delete_image&{{$item->id}}"  class="btn btn-success">Delete</a>
                                                </td>
                                          
                                            </tr>
                                      
                                            <?php $i++; ?>
                                            @endforeach
                                            @endif  
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                            
                </div> 
            </div> 
        </div> 
@endsection