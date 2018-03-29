<?php $stars=$experience->rating ?>
@for ($i = 1; $i < 6; $i++)
    @if( $stars>0)
    <?php  $stars=$stars-1;?>
    <span class="fa fa-star checked"></span>
    @else
    <span class="fa fa-star"></span>
    @endif
@endfor