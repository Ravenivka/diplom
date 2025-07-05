<?php
    use App\Models\Good;
    $string = $book->composition;
    $array = json_decode($string);
    $str='';
    foreach ($array as $key => $value) {
        $item = Good::find($key);
        $str = $str.$item->name.' - '.$value.'; ';
    }
    
    if ((int)$book->paid != 1 || $book->status != 'Закрыт' || $book->status != 'Отменён') {
        
        $str3 = '<h3 style="text-align: center">Оплата '.$book->pay_method.'</h3>
                <p style="text-align: center">
                <button class="pay_btn" onclick="alert("Тут должна быть система оплаты")">Оплатить</button> </p>';
    } elseif ((int)$book->paid == 1) {
        $str3 = '<h3 style="text-align: center">Оплачено</h3>';
    } elseif ($book->status == 'Отменён') {
        $str3 = '<h3 style="text-align: center">Отмена</h3>';
    } else {
        $str3 = '<h3 style="text-align: center">Оплачено</h3>';
    }

    
?>

<style>
    .line_main {
        position: relative;
        width: 96%;
        margin-left: 2%;
        margin-right: 2%;
        display: grid;
        grid-template-rows: 200px;
        grid-template-columns: 30px auto 200px 300px 100px;
        border: 2px solid navy;
    }
    .line__first {
        width: 30px;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        background-color: lightyellow;
    }
    .line__second {
        display: flex;        
        align-items: center;
        font-size: 20px;
        width: 100%;
        height: 100%;
        
    }
    .list_text {
        margin-left: 25px;
        font-size: 18px;
    }
    .line__thrid {
        display: flex;        
        flex-direction: column;
        justify-content: center;
        background-color: lightyellow;
    }
    .line__forth {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;        
    }
    .line__fifth{
        display: flex;        
        align-items: center;
        background-color: lightyellow;
        justify-content: center;  
        font-size: 20px;      
    }
</style>

<div class="line_main">
    <div class="line__first">
        {{ $book->id }}
    </div>
    <div class="line__second">
        <p class="list_text">{{ $str }} ИТОГО: {{ $book->amount }} руб.</p>
    </div>
    
    <div class="line__thrid">
        <?php echo $str3; ?>
    </div>
    <div class="line__forth">
        {{ $book->address }}
    </div>
    <div class="line__fifth">
        {{ $book->status}}
    </div>
</div>


