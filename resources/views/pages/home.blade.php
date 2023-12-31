<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-boot />
    <title>E-commerse</title>
</head>

<body>
    <x-nav />
    <div class="row">
        <div class="col-2 " style="height:100vh; background-color:hotpink;position:sticky;top:60px; z-index:11 ">
            <x-admin_sidebar />

        </div>
        <div class="col-10">
            <x-slider />
            <h3 class="display-5 text-center">
                Our Products
            </h3>
            <div class="container">
                <div class="row">
                    @foreach ($products as $item)
                        <div class="col-4 shadow border">
                            <img width="100%" height="200px" style="object-fit: contain"
                                src="{{ asset('storage/' . $item->image) }}" alt="">
                            <div class="row">
                                <div class="col-6">
                                    <h4 style="color: hotpink">
                                        <span class="d-block"> Name:{{ $item->name }} </span>

                                    </h4>
                                </div>
                                <div class="col-6">
                                    <h4 style="color: hotpink" class="d-block">
                                        <span class="d-block "> Price:{{ $item->price }} </span>

                                    </h4>
                                </div>
                            </div>
                            <h4 style="color: hotpink">
                                <span class="d-block "> Category:{{ $item->category }} </span>

                            </h4>
                            <a href="/single-product/{{ $item->id }}" style="background:hotpink"
                                class="w-50 m-auto btn btn-info text-light text-center m-auto d-flex justify-content-center">
                                Show more
                            </a>
                        </div>
                    @endforeach
                    {{ $products->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>

    </div>
    <x-boot_js />


</body>

</html>
