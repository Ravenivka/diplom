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
        $myURL = '/posts';
        $str3 = '<h3 style="text-align: center">Оплата '.$book->pay_method.'</h3>
                <p style="text-align: center">
                <a class="pay_btn" href="'.$myURL.'">Оплатить</button> </a>';
    } elseif ((int)$book->paid == 1) {
        $str3 = '<h3 style="text-align: center">Оплачено</h3>';
    } elseif ($book->status == 'Отменён') {
        $str3 = '<h3 style="text-align: center">Отмена</h3>';
    } else {
        $str3 = '<h3 style="text-align: center">Оплачено</h3>';
    }

    //team.css
?>




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
        <p class="list_text">Контакты:</p>
        <p class="list_text">{{ $book->email }}</p>
        <p class="list_text">{{ $book->phone }}</p>

    </div>
    <div class="line__sixth">
        <p class="list_text">{{ $book->status}}</p>
    </div>
</div>


