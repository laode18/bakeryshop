@extends('layouts.app')
@section('content')

<div class="collection_text">Product</div>

<div class="container">
        

        <div class="row">
            <div class="col-md-5">
                <img src="{{ url('storage/images/'.$product->image_url) }}" class="img-thumbnail" width="300" height="300">
                <p>&nbsp;</p>
                <h3>{{ $product->name }}</h3>
                <h4 class="font-weight-bold">Rp. {{ $product->price }}</h4>
            </div>
            <div class="col">
                
                <h2>Rating for:</h2>
                <div class="rating-css">
                <div class="star-icon">
                @if ($productRating == 1 || $productRating < 2)
                    <label for="rating1" class="fa fa-star checked"></label>
                @elseif($productRating == 2 || $productRating < 3)
                        <label for="rating1" class="fa fa-star checked"></label>
                        <label for="rating2" class="fa fa-star checked"></label>
                    @elseif($productRating == 3 || $productRating < 4)
                            <label for="rating1" class="fa fa-star checked"></label>
                            <label for="rating2" class="fa fa-star checked"></label>
                            <label for="rating3" class="fa fa-star checked"></label>
                        @elseif($productRating == 4 || $productRating < 5) 
                            <label for="rating1" class="fa fa-star checked"></label>
                            <label for="rating2" class="fa fa-star checked"></label>
                            <label for="rating3" class="fa fa-star checked"></label>
                            <label for="rating4" class="fa fa-star checked"></label>
                            @else
                            <label for="rating1" class="fa fa-star checked"></label>
                            <label for="rating2" class="fa fa-star checked"></label>
                            <label for="rating3" class="fa fa-star checked"></label>
                            <label for="rating4" class="fa fa-star checked"></label>
                            <label for="rating5" class="fa fa-star checked"></label> 
                @endif
                </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-2">
                        <p class="text-muted">Quantity</p>
                        <div class="d-flex">
                            <button class="btn btn-outine-dark">-</button>
                            <input type="text" readonly placeholder="0" style="width:30px" class="text-center">
                            <button class="btn btn-outline">+</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p></p>
                        <a href="{{ route('carts.add', ['id' => $product->id]) }}"
                            class="btn btn-primary w-50 mt-4">Beli</a>
                        {{-- <button class="btn btn-primary w-50 mt-4">Beli</button> --}}
                    </div>

                </div>
                <div class="row mt-3 p-3">
                    <a href="https://www.facebook.com/sharer/sharer.php?=u={{ route('products.show', ['id' => $product['id']]) }}"
                        class="social-button" target="_blank"><i class="bi bi-facebook mr-2"></i>Share Facebook</a>
                    <a href="https://www.twitter.com/intent/tweet?text=my share text&amp;url={{ route('products.show', ['id' => $product['id']]) }}"
                        class="social-button ml-2" target="_blank"><i class="bi bi-twitter mr-2"></i>Share Twitter</a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{ route('products.show', ['id' => $product['id']]) }}"
                        class="social-button ml-2" target="_blank"><i class="bi bi-linkedin mr-2"></i>Share Linkedin</a>
                    <a href="https://wa.me/?text={{ route('products.show', ['id' => $product['id']]) }}"
                        class="social-button ml-2" target="_blank"><i class="bi bi-whatsapp mr-2"></i>Share Whatsapp</a>
                </div>
                <div class="row">
                <div class="tab">
                  <button class="tablinks" onclick="openCity(event, 'Deskripsi')">Deskripsi</button>
                  <button class="tablinks" onclick="openCity(event, 'Review')">Review</button>
                </div>
                </div>
                <div class="row">
                    <div class="tab-content" id="myTabContent">
                        <div id="Deskripsi" class="tabcontent">
                            <p class="mt-2"> {{ $product->description }}</p>
                        </div>
                        <div id="Review" class="tabcontent">
                            <div class="container">
                                
                                <form enctype="multipart/form-data"
                                    action="{{ route('products.review', ['product_id' => $product->id]) }}"
                                    method="POST">
                                    @csrf
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" id="rating1" value="1">
                                        <label class="form-check-label" for="rating1">1</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" id="rating2" value="2">
                                        <label class="form-check-label" for="rating2">2</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" id="rating3" value="3">
                                        <label class="form-check-label" for="rating3">3</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" id="rating4" value="4">
                                        <label class="form-check-label" for="rating4">4</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" id="rating5" value="5">
                                        <label class="form-check-label" for="rating5">5</label>
                                    </div>
                                    <p class="mt-2">Deskripsi</p>
                                    <div class="form-group">
                                        <textarea class="form-control" name="description" id="ckview"></textarea>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                                

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
    <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

@endsection