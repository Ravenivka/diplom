@props(['category', 'cat'])

@php
    use App\Models\Good;
    
    
    $newgood = Good::where('cat', $cat)->where('new', true)->get();
    $oldgood = Good::where('cat', $cat)->where('new', false)->get();
        
@endphp

<div class="lenta__title" style="background-image: url({{ url('img/pngegg.png') }});">
    <h2 class="lenta__h2">{{ $category }}</h2>                    
</div>
<div class="lenta">
    
        @for ($i = 0; $i < count($newgood); $i++)
            @include('components.good', ['src' => $newgood[$i]->src, 
                            'caption' => $newgood[$i]->name, 
                            'desc' =>  $newgood[$i]->desc,
                            'price' =>  $newgood[$i]->price,
                            'id' => $newgood[$i]->id,
                            'cat' => $cat
                            ])
        @endfor
    
</div> 
<details class="coffe__det">
  <summary class="coffe__summary">Показать ещё</summary>
  <div class="coffe__box">       
    @for ($i = 0; $i < count($oldgood); $i++)
      @include('components.good', ['src' => $oldgood[$i]->src, 
                      'caption' => $oldgood[$i]->name, 
                      'desc' =>  $oldgood[$i]->desc,
                      'price' =>  $oldgood[$i]->price,
                      'id' => $oldgood[$i]->id,
                      'cat' => $cat
                      ])
    @endfor   
  </div>
</details> 