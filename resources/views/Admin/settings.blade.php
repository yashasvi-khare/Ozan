@extends('admin.layouts.default')

@section('content')
<?php
$visible = App\Models\Setting::where('name','price_visibility')->first('value')?->value;

$hotDeals = App\Models\Setting::where('name', 'hot_deals')->first('value')?->value??'[]';
$hotDeals = json_decode($hotDeals);
?>
<div class="container">
    <h1>Manage Site Settings</h1>
    <br>
    <form enctype="multipart/form-data" action="{{ route('admin.update-settings') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Banner Image</label>
            <input type="file" name="banner_img" class="form-control" style="height:30">
        </div>
        <img src="{{asset('storage/'.App\Models\Setting::where('name','banner_img')->first('value')?->value)}}" alt="" height="80">
        <div class="mb-3">
            <label for="price" class="form-label"> Price </label>
            <input type="checkbox" name="price_visibility" @if($visible) checked @endif>
        </div>

        <h3 class="mt-5">Hot Deals
            <button class="btn btn-warning btn-sm ms-3" type="button" onclick="appendRow()"><span class=""> + Add new </span>
            </button>
        </h3>
        <form action="">
            <table class="table table-bordered" style="border:1px solid gray">
                <thead>
                    <tr>
                        <th> Image </th>
                        <th> Text </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hotDeals as $deal)

                        <tr data-index="{{$loop->iteration}}">
                            <td>
                                <img src="{{asset('storage/'.$deal->image)}}" alt="" height="80" class="ms-3 mr-4 p-2">
                                @if($deal->image)
                                <input type="hidden" name="existing[]" value="{{$deal->image}}">
                                @endif
                            </td>
                            <td>
                                <input type="text" name="hot_deal_text"  class="form-control mt-2" value="{{$deal->text}}" style="width:500px">
                            </td>
                            <td>
                                <button class="btn btn-danger ms-2" type="button" onclick="deleteRow({{$loop->iteration}})"> Delete </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </form>

        <button type="button" class="btn btn-success" onclick="updateHotDeals()">Update</button>
    </form>
</div>
<script>

    function edit (elem){
        console.log(elem)
    }

    function appendRow () {
        let img = "{{asset('img/product/default.png')}}";
        let rowLength = $('tbody tr').length;

        let tr = `<tr data-index="${rowLength+1}">
            <td>
                <label for="product_image" >
                    <img src="${img}" alt="" class="ms-3 mr-4 p-2" height="80">
                </label> <br>
                <input name="image" id="product_image" data-index="${rowLength+1}" accept="image/*" type="file" onchange="preview(this)" class="d-none">
            </td>
            <td>
                <input type="text" name="hot_deal_text" class="form-control mt-2" value="" style="width:500px">
            </td>
            <td>
                <button class="btn btn-danger ms-2" type="button" onclick="deleteRow(${rowLength+1})"> Delete </button>
            </td>
        </tr>`;
        $('tbody').append(tr)
    }

    function deleteRow(index) {
        $('tr[data-index="'+index+'"]').remove();
        updateHotDeals();
    }

    var files = {};

    function preview (elem) {
        let index = elem.dataset.index;
        let file = event.target.files[0];
        files[index] = file;

        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function() {
            $('tr[data-index="'+index+'"]').find('img').attr('src', reader.result);
        };
    }

    function updateHotDeals(){
        let data = [];
        let fd = new FormData()

        $('tbody tr').each(function(key, row ){
            let input = $(row).find('input[type=text]')
            let obj = {
                text: $(input).val()
            }
            fd.append('text_'+ row.dataset.index, obj.text);
            let url = $(row).find('input[type=hidden]').val();
            if(url) {
                files[row.dataset.index] = url;
            }
        });
        for (const key in files) {
            fd.append('image_'+key , files[key] );
        }

        fd.append('_token', "{{csrf_token()}}");

        $.ajax({
            url:"{{route('admin.updateHotDeals')}}",
            type:"POST",
            processData:false,
            contentType:false,
            data:fd,
            success: res => {
                let message = '';
                if(res.status) {
                    message = `<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> Success!</strong> ${res.message}
                    <button type="button" class="btn btn-close btn-sm" data-dismiss="alert" aria-label="Close">

                    </button>
                    </div>`
                } else {
                    message = `<div class="alert alert-error alert-dismissible fade show" role="alert">
                        <strong> Error!</strong> ${res.message}
                        <button type="button" class="btn btn-close btn-sm" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>`
                }
                $('#messageBox').append(message);
            },
            error: err => {
                console.log(err)
            }
        })
    }
</script>

@endsection
