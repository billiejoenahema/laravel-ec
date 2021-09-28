<div>
    @if(empty($filename))
    <img src="{{asset('images/no_image.jpg')}}" alt="no_image">
    @else
    <img src="{{asset('storage/' . $path . '/' . $filename)}}" alt="item_image">
    @endif
</div>
