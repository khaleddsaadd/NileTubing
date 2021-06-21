<?php
require_once(__ROOT__ . "view/View.php");
class offerview extends View
{
    function output()
    {
        $alloffers =$this->model->All();
       
        echo '<br><br><br><br><br><br>
        <div id="body5">
            <div class="container-fluid">
                <div class="row">
                    <label id="o" class="OfferEventText">Special Offers </label>';
                    foreach($alloffers as $offer)
                    {
                        $img = __ROOT__.'/view/Images/'.$offer->image.'';
                        echo '<div class="all">
                        <div class="oneOffer">';
                        echo '<div class="imgdiv"><img class="oimg"src="'.$img.'"></div><br>';
                        echo '
                        <center>
                        <label class="Name">'.$offer->name.'</label><br>';
                        echo '<label class="p">'.$offer->price.' EGP</label><br>';
                        echo '<label class="t">Type: '.$offer->type.'</label><br>';
                        echo '<label class="sd">Start Date/Time: '.$offer->startDate.'</label><br>';
                        echo '<label class="sd">End Date/Time: '.$offer->enddate.'</label><br><br>';
                        echo'<button type="button" class="btn btn-primary">Book now</button>';
                        echo'</center>';
                        echo '<br>';
                        echo'</div>
                        </div>';
                    }

                    echo'
                     </div>
                    </div>
                </div>';
             
    }
}
?>
<style>
 
</style>