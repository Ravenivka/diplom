<?php
    use \App\Models\Good;
    use \App\Models\Order;
    $item = Good::find($id);
?>
<style>
    .o_item{
        width: 300px;
        height: 100px;
        display: flex;
        position: relative;
        border: 2px solid navy;
    }
    .o_image{
        width: 40%;
        position: relative;
        height: 100%;
        overflow: hidden;
        display: flex;   
        justify-content: center;     
    }
    .o_image_image {
        position: relative;
        height: 100%;
        display: flex;
        justify-content: center;
    }
    .o_content {
        position: relative;
        width: 60%;
    }
    .o_content_counter {
        margin: 0;        
        position: relative;
        width: 100%;
        display:flex;
        align-items: center;
    }
    .o_content_form {
        margin-top: 2px;
        margin-bottom: 2px;
        background-image: url({{ url('img/button.png') }});
        background-size: 100% 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    .o_span {
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-size: 18px;
        color: #2397B5;
    }
    .o_content_btn {
        background: none;
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #FFA5FF;
        width: 15px;
        height: 15px;
    }
    .o_content_btn:hover {
        color: #2397B5;
        background-color: #FFA5FF;
    }
    .o_form_center{
        position: relative;        
        display: flex;
        justify-content: center;
        align-items: center;
        width: 60px;
    }
    .num_count{
        width: 30px;
        height: 15px;
        background-color: white;
        text-align: center;
        font-size: 10px;
    }
    .o_content_h {
        width: 100%;
    }
</style>
<div class="o_item">
    <div class="o_image">
        <img class="o_image_image" src="{{ url($item->src) }}" alt="Doppio" />
    </div>
    <div class="o_content">
        <div class="o_content_h"><h3>{{ $item->name }}</h3></div>        
        <div class="o_content_counter">            
            <div class="o_content_form">
                <form method="post" class="o_form_center">
                    @CSRF
                    <button class="o_content_btn" type="submit" formaction="/decrease/{{ $id }}"><span style="margin-bottom:2px;">-</span></button>
                      <span class="num_count">{{ $count }}  </span>  
                    <button class="o_content_btn" type="submit" formaction="/increase/{{ $id }}"><span >+</span></button>
                </form>
            </div>
        </div>
        <div class="o_content_counter"><span class="o_span">{{ $item->price }} руб.</span></div>
    </div>
</div>
