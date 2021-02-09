@extends('products.layout')
 
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<style>
body {
    background-color: #363636 !important;
 

}

.clr {
    background-color: #363636 !important;
}

.clrs {
    background-color: #FFFFFF !important;
    color: balck !important;
    width:500px;

}

.txtc {
    color: balck !important;
}

.nav {
    color: #FF7615 !important;
    font-size: 30px;
    font-weight: bold;
    font-family: "Comic Sans MS";
}

.full-height {
    height: 100vh;
}
.fnt{
    color: #090909 !important;
    font-size: 16px;
    font-weight: bold;
    font-family: "Maiandra GD";
}
.head{
    font-weight: bold !important;
    width:auto;
    margin-left:30%;
    font-size:20px;
    color:red;
    text-align:center;
    font-family:"times new roman";
    justify-content:center;
}
.content{
    text-align:justify;
}
@media only screen and (max-width: 680px) {
    .clrs {
    background-color: #FFFFFF !important;
    color: balck !important;
    width:96%!important;
}
.nav {
    font-size: 13px;
}
</style>
<body class="">
    <div class="container clr full-height  p-3 mb-5 ">
        <div class="row nav">
            <div class=" rounded-3  p-2 pl-3 mb-3 m-2 col-12">
                <ul class="list-inlinec d-flex  ">
                    <div class="mx-3">Natural Disaster</div>
                    <div class="mx-3">Man-Made Disasters</div>
                    <div class="mx-3">Epidemic</div>
                </ul>
            </div>
        </div>

        <div class="row fnt col-sm">
        @foreach ($products as $product)
            <div class=" clrs rounded-3  p-2 pl-3 mb-3 m-2 col-3">
            <span class="head">{{ $product->Title }}</span>
            <br/>
            <span class="content">{{ $product->content }}</span>
            </div>
            @endforeach
        </div>
       
    </div>
</body>

</html>
@endsection