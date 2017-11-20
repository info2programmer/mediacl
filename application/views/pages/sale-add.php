<!-- Container-fluid starts -->
<div class="container-fluid">

    <!-- Header start -->
    <div class="row">
        <div class="main-header">
            <h4>Sale Management</h4>
            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                <li class="breadcrumb-item">
                    <a href="<?php echo base_url(); ?>user/"><i class="icofont icofont-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>user/">Dashbord</a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>settings/SaleManage">Sale
                        Details</a>
                </li>
            </ol>
            <center><ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                    </li><button type="button" class="btn btn-inverse-primary waves-effect waves-light " data-toggle="tooltip" data-placement="top" title=""><a href="<?php echo base_url();?>View/Sales" style="color:#FF0000;">View Sales Details</a></button></li>
                     </ol>
        </center>
        </div>
    </div>
    <!-- Header end -->

    <div class="row">
        <!-- Form Control starts -->

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">New Sale Bill</h5>

                </div>
                <!-- end of modal -->
                <form name="companyform" id="signupform" method="post" action="<?php echo base_url();?>index.php/add/sales" enctype="multipart/form-data" autocomplete="off">
              
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="md-input-wrapper multisugg">
                                    <div class="md-input-wrapper multisugg">
                                        <input type="text" class="md-form-control" placeholder="Customer Name" name="cname"/>
                                        <ul class="md-form-control">
                                        <?php foreach($customer as $client){?>
                                            <li data-address="<?php echo $client['cladd'];?>" data-phn="<?php echo $client['clphn'];?>" data-gstin="<?php echo $client['cgst'];?>"><?php echo $client['clname'];?>-<?php echo $client['cl_id'];?></li>
                                            <?php } ?>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-3">
                                <div class="md-input-wrapper">
                                    <div class="md-input-wrapper">
                                        <input type="text" class="md-form-control" placeholder="Customer Address" name="caddress"/>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="md-input-wrapper">
                                    <div class="md-input-wrapper">
                                        <input type="text" class="md-form-control" placeholder="Phone" name="cphn"/>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="md-input-wrapper">
                                    <div class="md-input-wrapper">
                                        <input type="text" class="md-form-control" placeholder="GST No" name="cgstin"/>
                                       
                                    </div>
                                </div>
                            </div>
                              <div class="col-sm-3">
                                <div class="md-input-wrapper">
                                    <div class="md-input-wrapper">
                                       Sale Date : <input type="date" class="md-form-control" placeholder="Sale Date" name="sl_date"/>
                                       
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 bill-item-list">

                                <!-- this is the last one with add button -->
                                <div class="row">
                                <input type="hidden" name="hid_sourav_distinguish[]" />
                                    <div class="col-sm-1">
                                        <div class="md-input-wrapper multisugg">
                                         
                                            <input type="text" class="md-form-control" placeholder="Item" name="item-name[]" />
                                            <ul class="md-form-control">
                                             <?php foreach($items as $itemN){?>
                                                <li data-price="<?php echo $itemN['item_single_p_wogst'];?>" data-gst="<?php echo $itemN['item_p_gst'];?>" data-ost="<?php echo $itemN['item_p_sgst'];?>" data-ist="<?php echo $itemN['item_p_igst'];?>"><?php echo $itemN['item_name'];?>-<?php echo $itemN['item_id'];?></li>
                                                <?php }?>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="md-input-wrapper">
                                            <input type="text" class="md-form-control" placeholder="Price" name="item-price[]" oninput="calcRow(this)" />
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="md-input-wrapper">
                                            <input type="text" class="md-form-control" placeholder="Qty" name="item-quantity[]" oninput="calcRow(this)" />
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="md-input-wrapper">
                                            <select class="md-form-control required" name="item_qunit[]">
                                                        <option value="">Unit</option>
                                                        <?php foreach($unit as $unitn){?>
                                                        <option value="<?php echo $unitn['uid'];?>"><?php echo $unitn['stname'];?></option>
                                                        <?php }?>
                                                    </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="md-input-wrapper">
                                            <input type="text" class="md-form-control" placeholder="Discount" name="item-discnt[]" oninput="calcDisc(this)" />
                                        </div>
                                    </div>
                                    <div class="col-sm-1" style="display:none;">
                                        <div class="md-input-wrapper">
                                            <input type="text" class="md-form-control" placeholder="Disc Amt" name="item-disc-amt[]" readonly />
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="md-input-wrapper">
                                            <input type="text" class="md-form-control" placeholder="SGST" name="item-gst[]" oninput="calcRow(this)" />
                                        </div>
                                    </div>
                                    <div class="col-sm-1" style="display:none;">
                                        <div class="md-input-wrapper">
                                            <input type="text" class="md-form-control" placeholder="SGST Amt" name="item-gst-amt[]" readonly />
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="md-input-wrapper">
                                            <input type="text" class="md-form-control" placeholder="CGST" name="item-cgst[]" oninput="calcRow(this)" />
                                        </div>
                                    </div>
                                    <div class="col-sm-1" style="display:none;">
                                        <div class="md-input-wrapper">
                                            <input type="text" class="md-form-control" placeholder="CGST Amt" name="item-cgst_amt[]" readonly />
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="md-input-wrapper">
                                            <input type="text" class="md-form-control" placeholder="IGST" name="item-isgt[]" oninput="calcRow(this)" />
                                        </div>
                                    </div>
                                    <div class="col-sm-1" style="display:none;">
                                        <div class="md-input-wrapper">
                                            <input type="text" class="md-form-control" placeholder="IGST Amt" name="item-igst-amt[]" readonly />
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="md-input-wrapper">
                                            <input type="text" class="md-form-control" placeholder="TOTAL" name="item-total[]" readonly />
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-success btn-sm waves-effect waves-light m-t-10" style="padding:3px;" onclick="addItemRow(this)">
                                            <i class="icofont icofont-plus"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm waves-effect waves-light m-t-10" style="padding:3px;" onclick="removeItemRow(this)">
                                            <i class="icofont icofont-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /this is the last one with add button -->
                            </div>
                        </div>
                        <!--<div class="row">
                            <div class="col-sm-8 text-right p-t-15">
                                Discount
                            </div>
                            <div class="col-sm-2">
                                <div class="md-input-wrapper">
                                    <input type="text" class="md-form-control" placeholder="Discount" name="discount" oninput="calcDiscount()" />
                                </div>
                            </div>
                        </div>-->
                        <div class="row">
                            <div class="col-sm-8 text-right p-t-15">
                                Gross Total
                            </div>
                            <div class="col-sm-2">
                                <div class="md-input-wrapper">
                                    <input type="text" class="md-form-control" placeholder="Gross Total" readonly name="gross-total" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 text-right p-t-15">
                                Discount Precentage
                            </div>
                            <div class="col-sm-2">
                                <div class="md-input-wrapper">
                                    <input type="text" class="md-form-control" placeholder="Discount Precentage" name="discount-precentage" oninput="calcDiscount()" />
                                </div>
                            </div>
                            <div class="col-sm-2 text-right p-t-15">
                                Discount Amount
                            </div>
                            <div class="col-sm-2">
                                <div class="md-input-wrapper">
                                    <input type="text" readonly class="md-form-control" placeholder="Discount Amount" name="discount-amt" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 text-right p-t-15">
                                Net Total
                            </div>
                            <div class="col-sm-2">
                                <div class="md-input-wrapper">
                                    <input type="text" class="md-form-control" placeholder="Net Total" name="all-total" />
                                </div>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-30">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<style>
[name*=item]{
font-size:11px;
}
</style>
<!-- Container-fluid ends -->
<script>
	function roundToTwo(num) {    
		return +(Math.round(num + "e+2")  + "e-2");
	}
    var trgul;
    $('.multisugg input').on('focus', function () {
        $(this).parent().find('ul').addClass('open');
        $(this).parent().addClass('focused');
    });
    $('.multisugg input').on('blur', function () {
        trgul = $(this).parent().find('ul');
        function clth() {
            trgul.removeClass('open');
            trgul.parent().removeClass('focused');
        }

        setTimeout(clth, 200);
    });
    $('.multisugg input').on('input', function () {
        lismv = $(this).val().toLowerCase();
        $(this).parent().find('li').each(function () {
            if (~$(this).text().toLowerCase().search(lismv) && lismv) {
                $(this).show()
            } else {
                $(this).hide()
            }
        });
    });
    $('.multisugg li').on('click', function () {
        console.log($(this).parent().parent().find('input').val());
        $(this).parent().parent().find('input').val($(this).text());
        $(this).parent().parent().parent().next().find('input').val($(this).data('price'));
		$(this).parent().parent().parent().parent().find('[name*=hid_sourav_distinguish]').val($(this).data('price'));
		console.log($(this).parent().parent().parent().parent().find('[name*=hid_sourav_distinguish]').val());
		$(this).parent().parent().parent().next().next().next().next().next().find('input').val($(this).data('gst'));
		$(this).parent().parent().parent().next().next().next().next().next().next().next().find('input').val($(this).data('ost'));
		$(this).closest('.row').find("[name='item-isgt[]']").val($(this).data('ist'));
		
		$(this).closest('.row').find("[name='caddress']").val($(this).data('address'));
		$(this).closest('.row').find("[name='cphn']").val($(this).data('phn'));
		$(this).closest('.row').find("[name='cgstin']").val($(this).data('gstin'));
    });

    function calcRow(ths) {
        quantity = parseInt($(ths).closest(".row").find("[name='item-quantity[]']").val()) || 0;
        sgst = parseFloat($(ths).closest(".row").find("[name='item-gst[]']").val()) || 0;
        cgst = parseFloat($(ths).closest(".row").find("[name='item-cgst[]']").val()) || 0;
		igst = parseFloat($(ths).closest(".row").find("[name='item-isgt[]']").val()) || 0;
		discper = parseFloat($(ths).closest(".row").find("[name='item-discnt[]']").val()) || 0;
        price = parseFloat($(ths).closest(".row").find("[name='item-price[]']").val()) || 0;
        console.log(price);
        console.log(quantity);
        console.log(sgst);
        console.log(cgst);
		
		disc_amt = (price * quantity * discper) / 100;
		
		discounted_amount = (price * quantity)-disc_amt;
		
        sgst_amt = (discounted_amount * sgst) / 100;
        console.log(sgst_amt);
        $(ths).closest(".row").find("[name='item-gst-amt[]']").val(roundToTwo(sgst_amt));
		
        cgst_amt = (discounted_amount * cgst) / 100;
        console.log(cgst_amt);
        $(ths).closest(".row").find("[name='item-cgst_amt[]']").val(roundToTwo(cgst_amt));
		
		igst_amt = (discounted_amount * igst) / 100;
        console.log(igst_amt);
        $(ths).closest(".row").find("[name='item-igst-amt[]']").val(roundToTwo(igst_amt));
		
        item_total = discounted_amount + sgst_amt + cgst_amt + igst_amt;
        console.log(item_total);
        $(ths).closest(".row").find("[name='item-total[]']").val(roundToTwo(item_total));
		
		
        $(ths).closest(".row").find("[name='item-disc-amt[]']").val(roundToTwo(disc_amt));
		calcDiscount();
        
    }
	
	function calcDisc(ths) {
        quantity = parseInt($(ths).closest(".row").find("[name='item-quantity[]']").val()) || 0;
        sgst = parseFloat($(ths).closest(".row").find("[name='item-gst[]']").val()) || 0;
        cgst = parseFloat($(ths).closest(".row").find("[name='item-cgst[]']").val()) || 0;
		igst = parseFloat($(ths).closest(".row").find("[name='item-isgt[]']").val()) || 0;
		discper = parseFloat($(ths).closest(".row").find("[name='item-discnt[]']").val()) || 0;
        price = parseFloat($(ths).closest(".row").find("[name='item-price[]']").val()) || 0;
        console.log(price);
        console.log(quantity);
        console.log(sgst);
        console.log(cgst);
		disc_amt = (price * quantity * discper) / 100;
		
		discounted_amount = (price * quantity)-disc_amt;
		
        sgst_amt = (discounted_amount * sgst) / 100;
        console.log(sgst_amt);
        $(ths).closest(".row").find("[name='item-gst-amt[]']").val(roundToTwo(sgst_amt));
		
        cgst_amt = (discounted_amount * cgst) / 100;
        console.log(cgst_amt);
        $(ths).closest(".row").find("[name='item-cgst_amt[]']").val(roundToTwo(cgst_amt));
		
		igst_amt = (discounted_amount * igst) / 100;
        console.log(igst_amt);
        $(ths).closest(".row").find("[name='item-igst-amt[]']").val(roundToTwo(igst_amt));
		
        item_total = discounted_amount + sgst_amt + cgst_amt + igst_amt;
        console.log(item_total);
        $(ths).closest(".row").find("[name='item-total[]']").val(roundToTwo(item_total));

        $(ths).closest(".row").find("[name='item-disc-amt[]']").val(roundToTwo(disc_amt));
		
		calcDiscount();
    }

    function calcDiscount() {
        all_total = 0;
        $('[name*="item-total"]').each(function () {
            all_total += parseFloat($(this).val());
        });
        discount = parseFloat($("[name=discount-precentage]").val()) || 0;
        $("[name=gross-total]").val(roundToTwo(all_total));
        tdsc = (all_total*discount)/100;
       all_total -= tdsc;
        $("[name=discount-amt]").val(roundToTwo(tdsc));
        $("[name=all-total]").val(roundToTwo(all_total));
		
    }

    function addItemRow(ths) {
        ths = $(ths);
        addable = '<div class="row">'
			+ '<input type="hidden" name="hid_sourav_distinguish[]" />'
            + '<div class="col-sm-1">'
            + '<div class="md-input-wrapper multisugg">'
            + '<input type="text" class="md-form-control" placeholder="Item" name="item-name[]" /><span class="md-line"></span>'
            + '<ul class="md-form-control">'
			<?php foreach($items as $itemN){?>
            + '<li data-price="<?php echo $itemN['item_single_p_wogst'];?>" data-gst="<?php echo $itemN['item_p_gst'];?>" data-ost="<?php echo $itemN['item_p_sgst'];?>"  data-ist="<?php echo $itemN['item_p_igst'];?>"><?php echo $itemN['item_name'];?>-<?php echo $itemN['item_id'];?></li>'
            <?php }?>
            + '</ul>'
            + '</div>'
            + '</div>'
            + '<div class="col-sm-1">'
            + '<div class="md-input-wrapper">'
            + '<input type="text" class="md-form-control" placeholder="Price" name="item-price[]" oninput="calcRow(this)" /><span class="md-line"></span>'
            + '</div>'
            + '</div>'
            + '<div class="col-sm-1">'
            + '<div class="md-input-wrapper">'
            + '<input type="text" class="md-form-control" placeholder="qty" name="item-quantity[]" oninput="calcRow(this)" /><span class="md-line"></span>'
            + '</div>'
            + '</div>'
            + '<div class="col-sm-1">'
            + '<div class="md-input-wrapper">'
            + '<select class="md-form-control" name="item_qunit[]">'
            + '<option value="">Select</option>'
			<?php foreach($unit as $unitn){?>
            + '<option value="<?php echo $unitn['uid'];?>"><?php echo $unitn['stname'];?></option>'
            <?php }?>
            + '</select>'
            + '</div>'
            + '</div>'
			+ '<div class="col-sm-1">'
            + '<div class="md-input-wrapper">'
            + '<input type="text" class="md-form-control" placeholder="Discount" name="item-discnt[]" oninput="calcDisc(this)" /><span class="md-line"></span>'
            + '</div>'
            + '</div>'
			+ '<div class="col-sm-1" style="display:none;">'
            + '<div class="md-input-wrapper">'
            + '<input type="text" class="md-form-control" placeholder="Disc Amt" name="item-disc-amt[]" readonly /><span class="md-line"></span>'
            + '</div>'
            + '</div>'
            + '<div class="col-sm-1">'
            + '<div class="md-input-wrapper">'
            + '<input type="text" class="md-form-control" placeholder="SGST" name="item-gst[]" oninput="calcRow(this)" /><span class="md-line"></span>'
            + '</div>'
            + '</div>'
			+ '<div class="col-sm-1" style="display:none;">'
            + '<div class="md-input-wrapper">'
            + '<input type="text" class="md-form-control" placeholder="SGST Amt" name="item-gst-amt[]" readonly /><span class="md-line"></span>'
            + '</div>'
            + '</div>'
			+ '<div class="col-sm-1">'
            + '<div class="md-input-wrapper">'
            + '<input type="text" class="md-form-control" placeholder="CGST" name="item-cgst[]" oninput="calcRow(this)" /><span class="md-line"></span>'
            + '</div>'
            + '</div>'
			+ '<div class="col-sm-1" style="display:none;">'
            + '<div class="md-input-wrapper">'
            + '<input type="text" class="md-form-control" placeholder="CGST Amt" name="item-cgst_amt[]" readonly /><span class="md-line"></span>'
            + '</div>'
            + '</div>'
			 + '<div class="col-sm-1">'
            + '<div class="md-input-wrapper">'
            + '<input type="text" class="md-form-control" placeholder="IGST" name="item-isgt[]" oninput="calcRow(this)" /><span class="md-line"></span>'
            + '</div>'
            + '</div>'
			+ '<div class="col-sm-1" style="display:none;">'
            + '<div class="md-input-wrapper">'
            + '<input type="text" class="md-form-control" placeholder="IGST Amt" name="item-igst-amt[]" readonly /><span class="md-line"></span>'
            + '</div>'
            + '</div>'
            + '<div class="col-sm-1">'
            + '<div class="md-input-wrapper">'
            + '<input type="text" class="md-form-control" placeholder="TOTAL" name="item-total[]" readonly /><span class="md-line"></span>'
            + '</div>'
            + '</div>'
            + '<div class="col-sm-1">'
            + '<button type="button" class="btn btn-success btn-sm waves-effect waves-light m-t-10" style="padding:3px;" onclick="addItemRow(this)">'
            + '<i class="icofont icofont-plus"></i>'
            + '</button> '
            + '<button type="button" class="btn btn-danger btn-sm waves-effect waves-light m-t-10" style="padding:3px;" onclick="removeItemRow(this)">'
            + '<i class="icofont icofont-minus"></i>'
            + '</button>'
            + '</div>'
            + '</div>';
        ths.parent().parent().parent().append(addable);
        ths.remove();
        $('.multisugg input').on('focus', function () {
            $(this).parent().find('ul').addClass('open');
            $(this).parent().addClass('focused');
        });
        $('.multisugg input').on('blur', function () {
            trgul = $(this).parent().find('ul');
            function clth() {
                trgul.removeClass('open');
                trgul.parent().removeClass('focused');
            }

            setTimeout(clth, 200);
        });
        $('.multisugg input').on('input', function () {
            lismv = $(this).val().toLowerCase();
            $(this).parent().find('li').each(function () {
                if (~$(this).text().toLowerCase().search(lismv) && lismv) {
                    $(this).show()
                } else {
                    $(this).hide()
                }
            });
        });
        $('.multisugg li').on('click', function () {
            console.log($(this).parent().parent().find('input').val());
            $(this).parent().parent().find('input').val($(this).text());
            $(this).parent().parent().parent().next().find('input').val($(this).data('price'));
            $(this).parent().parent().parent().parent().find('[name*=hid_sourav_distinguish]').val($(this).data('price'));
            console.log($(this).parent().parent().parent().parent().find('[name*=hid_sourav_distinguish]').val());
            $(this).parent().parent().parent().next().next().next().next().next().find('input').val($(this).data('gst'));
			$(this).parent().parent().parent().next().next().next().next().next().next().next().find('input').val($(this).data('ost'));
			$(this).closest('.row').find("[name='item-isgt[]']").val($(this).data('ist'));
			
			$(this).closest('.row').find("[name='caddress']").val($(this).data('address'));
			$(this).closest('.row').find("[name='cphn']").val($(this).data('phn'));
			$(this).closest('.row').find("[name='cgstin']").val($(this).data('gstin'));
        });
    }
    function removeItemRow(ths) {
        ths = $(ths);
        ths.parent().parent().remove();
        addable = '<div class="col-sm-2">'
            +'<button type="button" class="btn btn-success waves-effect waves-light m-t-10 m-r-5" onclick="addItemRow(this)">'
            + '<i class="icofont icofont-plus"></i>'
            + '</button>'
            + '<button type="button" class="btn btn-danger waves-effect waves-light m-t-10" onclick="removeItemRow(this)">'
            + '<i class="icofont icofont-minus"></i>'
            + '</button>'
            + '</div>';
        $('.bill-item-list').children().last().children().last().remove();
        $('.bill-item-list').children().last().append(addable);
        calcDiscount();
    }
</script>
 