@php $nav_help = 'active'; @endphp
@extends('layouts.master')
@section('title')
Help
@endsection
@section('content')
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">
            <div class="col-md-2">
            </div>
            <div class="col-md-8 center">
                <h3 class="panel-title">Help</h3>
                <hr>
                    <ul class="list-group">
                      <li class="list-group-item disabled">In your home page, you can see the latest wishing cards of different category (Texts, Images, Gifs, Videos) in Festishes.</li>
                      <li class="list-group-item disabled">At the right side of the Home page, you have the whole list of Festivals added in Festishes.Selecting them will show specific Wishing cards of the Fest.</li>
                      <li class="list-group-item disabled">We have provided a "Search/Filter bar" which help you to find Categories.</li>
                    </ul>
                    <br>
                    <h6>Cards</h6>
                        <ul class="list-group">
                            <li class="list-group-item disabled">The Festival catagory is shown in the bottom left of each card.</li>
                            <li class="list-group-item disabled">The "Total views" of the cards will be displayed near the Festival category.</li>
                            <li class="list-group-item disabled">You can see a right arrow button at the bottom right of each card which direct you to "Share wall".From here, you can easily share your wishing.We also provided you with a premium design Share wall.</li>
                        </ul> 
                        <br> 
                            <p><span class="badge badge-secondary">Text Card</span></p>
                        <ul class="list-group">
                            <li class="list-group-item disabled">If the text is more than a specific characters, there appear a "Read more" button which expands the text card without even reloading the current page.</li>
                            <li class="list-group-item disabled">The text card also provided with a "Copy to Clipboard (CtC)" button which copies the whole text to your clipboard and you can easily paste the text on anywhere.</li>
                        </ul>
                        <br>
                            <p><span class="badge badge-secondary">Image/Gif/Video Card</span></p>
                        <ul class="list-group">
                            <li class="list-group-item disabled">In Image, Gif and Video cards, you have a "Download option" which simply downloads the content to your device.You do not have to worry about your data plans since the file size will be shown near download button.</li>
                        </ul>
            </div>
        </div>
@endsection