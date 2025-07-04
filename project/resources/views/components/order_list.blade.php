<style>
    .order_item_main{
        position: relative;
       width: 100%; 
       display:flex; 
       flex-wrap: wrap;
       padding: 0 3%;
       column-gap: 10px;
       row-gap: 10px; 
    }
</style>
<div class="order_item_main">
     @for ($i = 0; $i < count($goods); $i++)
        @include('components.order_item', ['id' => $goods[$i]['id'], 'count'=>$goods[$i]['count'], 'cat'=>$goods[$i]['cat']]) 
                        
    @endfor
</div>