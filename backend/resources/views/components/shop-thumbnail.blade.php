<div>
    @if(empty($filename))
    <img src="{{asset('images/no_image.jpg')}}" alt="no_image">
    @else
    <img src="{{asset('storage/shops/' . $filename)}}" alt="item_image">
    @endif
</div>