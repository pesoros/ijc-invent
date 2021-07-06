<?php
defined('BASEPATH') OR exit('');
?>
<?php if($allTransInfo):?>
<?php $sn = 1; ?>
<div id="transReceiptToPrint">
    <div class="row">
        <div class="col-xs-12 text-center text-uppercase">

        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">
            <b><?=isset($transDate) ? date('jS M, Y h:i:sa', strtotime($transDate)) : ""?></b>
        </div>
    </div>
    
    <div class="row" style="margin-top:2px">
        <div class="col-sm-12">
            <label>Receipt No:</label>
            <span><?=isset($ref) ? $ref : ""?></span>
		</div>
    </div>
    
	<div class="row" style='font-weight:bold'>
		<div class="col-xs-4">Item</div>
		<div class="col-xs-4">QtyxPrice</div>
		<div class="col-xs-4">Tot(Rp.)</div>
	</div>
	<hr style='margin-top:2px; margin-bottom:0px'>
    <?php $init_total = 0; ?>
    <?php foreach($allTransInfo as $get):?>
        <div class="row">
            <div class="col-xs-4"><?=$get['itemName'];?></div>
            <div class="col-xs-4"><?=$get['quantity'];?></div>
        </div>
        <?php $init_total += $get['totalPrice'];?>
    <?php endforeach; ?>  
    <hr style='margin-top:5px; margin-bottom:0px'>
    <div class="row margin-top-5">
        <div class="col-xs-12">
            <b>Customer Name: <?=$cust_name?></b>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <b>Customer Phone: <?=$cust_phone?></b>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <b>Customer Email: <?=$cust_email?></b>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12 text-center">Thanks for your patronage</div>
    </div>
</div>
<br class="hidden-print">
<div class="row hidden-print">
    <div class="col-sm-12">
        <div class="text-center">
            <button type="button" class="btn btn-primary ptr">
                <i class="fa fa-print"></i> Print Receipt
            </button>
            
            <button type="button" data-dismiss='modal' class="btn btn-danger">
                <i class="fa fa-close"></i> Close
            </button>
        </div>
    </div>
</div>
<br class="hidden-print">
<?php endif;?>