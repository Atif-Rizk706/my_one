<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="متجر الهدايا الدعائية - اعلي النظم هو متجر يقدم أفضل الهدايا الدعائية والتسويقية لعملائه. تسوق الآن واستمتع بمجموعة متنوعة من الهدايا والخدمات.">
    <title>متجر الهدايا الدعائية - اعلى النظم</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" href="../assets/images/gift.png" type="image/x-icon">
</head>
<body>




    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div  class="appoint_table flex-container">
            <table class="table  table-dark table-striped caption-top table_body" style="width: 70% !important;margin: auto !important;margin-top: 20px !important;">


                <thead>
                <tr style="background-color: #0a58ca !important;">
                    <th scope="col">#</th>
                    <th scope="col">اسم المنتج</th>
                    <th scope="col">الوصف</th>
                    <th scope="col">الثمن</th>
                    <th scope="col">صورة</th>
                    <th scope="col">حذف</th>


                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr  class="productrow{{$product->id}} " style="background-color: #0c0c0c">
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->product_description}}</td>
                        <td>{{$product->price_currency}}</td>

                        <td><img class="table_img" style="width: 70px!important;height: 70px!important;" src="product-image/{{$product->product_image_url}}"></td>
                        <td><a href="" class="btn btn-success delete_but"  appoint_id="{{$product->id}}">حذف</a></td>

                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).on('click','.delete_but',function (e){
            e.preventDefault();

            // $(this).css("perspective","700px");
            console.log("eeeeeeeeeeeeeeeeeeeeeeeee")
            var product_id=$(this).attr('appoint_id')
            $.ajax({
                type:'post',
                url:"{{route('delete.product')}}",
                data:{
                    '_token':"{{csrf_token()}}",
                    "id":product_id,
                },
                success:function (data){
                    $('.productrow'+data.id).remove();
                    if(data.status==true){

                        $('#success_massage').show();
                        alert(data.mes);
                    }

                }
            })
        })
    </script>
    <!-- container-scroller -->


    <!-- End custom js for this page -->
</body>
</html>
