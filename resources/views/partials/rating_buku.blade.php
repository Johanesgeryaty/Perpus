@php
    $ratingBuku = new \App\Models\BukuPopuler();

    if(Auth::check()) {
        $checkRating = $ratingBuku->where(['buku_online_id' => $bukuonline->id, 'user_id' => Auth::user()->id])->count();
    } else {
        $checkRating = false;
    }

@endphp

<form action="{{route('user.bukuonline.rating', $bukuonline->id)}}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger"> <i class="bi bi-heart"></i> <span>{{$bukuonline->buku_populer->count()}}</span></button>
</form>
