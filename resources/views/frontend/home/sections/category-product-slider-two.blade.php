@php
    $categoryProductSliderSectionTwo = json_decode($categoryProductSliderSectionTwo->value);
    $lastKey = [];

    foreach($categoryProductSliderSectionTwo as $key => $category){
        if($category === null ){
            break;
        }
        $lastKey = [$key => $category];
    }

    if(array_keys($lastKey)[0] === 'category'){
        $category = \App\Models\Category::find($lastKey['category']);
        $products = \App\Models\Product::with(['variants', 'category', 'productImageGalleries'])
        ->where('category_id', $category->id)->orderBy('id', 'DESC')->take(12)->get();
    }elseif(array_keys($lastKey)[0] === 'sub_category'){
        $category = \App\Models\SubCategory::find($lastKey['sub_category']);
        $products = \App\Models\Product::with(['variants', 'category', 'productImageGalleries'])
        ->where('sub_category_id', $category->id)->orderBy('id', 'DESC')->take(12)->get();
    }else {
        $category = \App\Models\ChildCategory::find($lastKey['child_category']);
        $products = \App\Models\Product::with(['variants', 'category', 'productImageGalleries'])
        ->where('child_category_id', $category->id)->orderBy('id', 'DESC')->take(12)->get();
    }
@endphp
<section id="wsus__electronic">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="wsus__section_header">
                    <h3>{{$category->name}}</h3>
                    <a class="see_btn" href="{{route('products.index', ['category' => $category->slug])}}">see more <i class="fas fa-caret-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row flash_sell_slider">
            @foreach ($products as $product)
            <div class="col-xl-2 col-6 col-sm-6 col-md-4 col-lg-3  category-{{$key}}">
                <a class="wsus__hot_deals__single" href="{{route('product-detail', $product->slug)}}">
                    <div class="wsus__hot_deals__single_img">
                        <img src="{{asset($product->thumb_image)}}" alt="bag" class="img-fluid w-100">
                    </div>
                    <div class="wsus__hot_deals__single_text">
                        <h5>{!!limitText($product->name, )!!}</h5>
                        <p class="wsus__rating">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $product->reviews_avg_rating)
                                <i class="fas fa-star"></i>
                                @else
                                <i class="far fa-star"></i>
                                @endif
                            @endfor

                        </p>
                        @if (checkDiscount($product))
                            <p class="wsus__tk">{{$settings->currency_icon}}{{$product->offer_price}} <del>{{$settings->currency_icon}}{{$product->price}}</del></p>
                        @else
                            <p class="wsus__tk">{{$settings->currency_icon}}{{$product->price}}</p>
                        @endif
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

