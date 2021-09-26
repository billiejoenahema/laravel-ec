<div>
    @if(empty($shop->filename))
    <img src="{{asset('images/no_image.jpg')}}" alt="no_image">
    @else
    <img src="{{asset('storage/public/shops/' . $shop->filename)}}" alt="item_image">
    @endif
</div>
