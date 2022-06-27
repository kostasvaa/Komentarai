@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Rodyti įrašą</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vardas:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Aprašymas:</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>

   

    <div class="card-body">
                <h5>Leave a comment</h5>
                <form method="post" action="{{ route('comment.store') }}">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <input type="text" name="comment" class="form-control" />
                        <!-- Nurodomas produkto id -->
                        <input type="hidden" name="product_id" value="{{ $product->id }}" />
                        <!-- Nurodomas dabartinio userio id -->
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Add Comment" />
                    </div>
                </form>
               </div>

                <!-- Patikrinama ar komentaru masyvas tuscias -->
               @if($komentarai->isEmpty())
               <!-- Jei tuscias -->
                <p> Komentaru nera</p>
               @else
               <!-- Jei ne tuscias -->
                @foreach($komentarai as $komentaras)
                    <!-- Spausdinami visi komentarai -->
                    Kas: {{$komentaras->name}}<br>
                    Kada: {{$komentaras->created_at}}<br>
                    Ka: {{$komentaras->comment}}<br>
               

                    <hr>
                @endforeach
               @endif
               

@endsection