<style>
    .goods {
      width: 400px;
    }
    .goods__img {
      width: 100%;
    }
    .goods__cut {
      width: 400px;
      height: 467px;
      overflow: hidden;     
    }
    .goods__h3 {
      text-align: center;
    }
    .goods__p {
      margin: 4px 4px;
    }
    .goods__price {
      margin: 14px 4px;
      font-size: 16px;
      color: darkmagenta;
    }
    .goods__context{
      font-family: Arial, Helvetica, sans-serif;
    }
</style>


<div class="goods">
    <div class="goods__cut"> <img src="{{ $src }}" alt="item" class="goods__img" /></div>
    <div class="goods__context">
        <h3 class="goods__h3">{{ $caption }}</h3>
        <p class="goods__p">{{ $desc }}</p>
        <p class="goods__price">{{ $price }}руб</p>
    </div>                        
</div>