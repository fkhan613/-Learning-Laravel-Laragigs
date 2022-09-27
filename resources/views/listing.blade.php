
@if(empty($listing))
<p>No listings were found</p>
@else
    <h2>{{$listing['title']}}</h2>
    <p>{{$listing['description']}}p>
@endif