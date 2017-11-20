<?php 
error_reporting(0);
$customer = $this->db->query('SELECT * FROM td_client WHERE cl_id='.$billdata[0]['customer_name'])->result_array();
?>
<?php
  function getIndianCurrency( $number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'One', 2 => 'Two',
        3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
        7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
        10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
        13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
        16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
        19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
        40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
        70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
    $digits = array('', 'Hundred','Thousand','Lakh', 'Crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    $paise = ($decimal) ? "and " . ($words[$decimal - ($decimal % 10)] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif; font-size:12px;}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; }
.style7 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.style8 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>

<body>

<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="700" height="1000" align="center" valign="top"><table width="680" border="1" cellpadding="3" cellspacing="0" style="border-collapse:collapse;">
  <col width="27" />
  <col width="67" />
  <col width="69" />
  <col width="64" />
  <col width="78" />
  <col width="105" />
  <col width="49" />
  <col width="26" />
  <col width="56" />
  <col width="61" />
  <col width="51" />
  <col width="52" />
  <col width="33" />
  <col width="82" />
  <tr height="20">
    <td height="40" colspan="13" align="center" valign="middle" class="style8"><u>TAX INVOICE</u></td>
    </tr>
  <tr height="20">
    <td height="20" colspan="6" class="style1"><span class="style5">OHM SURGICALS</span></td>
    <td colspan="3" class="style1"><span class="style3">Invoice No.</span></td>
    <td colspan="4" class="style1"><span class="style3">Dated</span></td>
  </tr>
  <tr height="20">
    <td colspan="6" rowspan="4" align="left" valign="top" class="style1"><span class="style1"><?php echo $company[0]['cname'];?></span><br/><span class="style1">EMAIL : <?php echo $company[0]['cemail'];?></span><br/><span class="style1">ADDRESS : <?php echo $company[0]['cadd'];?></span><br/><span class="style1">MOB : <?php echo $company[0]['cphn'];?></span><br/><span class="style1">PAN : <?php echo $company[0]['cpan'];?></span><br/><span class="style1">GSTIN : <?php echo $company[0]['cgst'];?></span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span></td>
    <td height="20" colspan="3" class="style1"><span class="style1"><?php echo $billdata[0]['p_bill_no'];?></span></td>
    <td colspan="4" class="style1"><span class="style1"><?php echo $billdata[0]['p_bill_date'];?></span></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="3" class="style1"><span class="style3">Delivery Note</span></td>
    <td colspan="4" class="style1"><span class="style3">Mode/Terms of Payment</span></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="3" class="style1"><span class="style1"></span></td>
    <td colspan="4" class="style1"><span class="style1"></span></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="3" class="style1"><span class="style3">Supplier's Ref.</span></td>
    <td colspan="4" class="style1"><span class="style3">Other Reference(s)</span></td>
  </tr>
  <tr height="20">
    <td colspan="6" align="left" valign="top" class="style1"><span class="style3">BUYER</span></td>
    <td height="20" colspan="3" class="style1"><span class="style1"></span></td>
    <td colspan="4" class="style1"><span class="style1"></span></td>
  </tr>
  <tr height="18">
    <td colspan="6" rowspan="6" align="left" valign="top" class="style1"><?php echo $customer[0]['clname'];?><br/>ADDRESS : <?php echo $customer[0]['cladd'];?><br/>PHN : <?php echo $customer[0]['clphn'];?><br/>PAN : <?php echo $customer[0]['clpan'];?><br/>GSTIN : <?php echo $customer[0]['cgst'];?></td>
    <td height="18" colspan="3" class="style1"><span class="style3">Buyer's Order No.</span></td>
    <td colspan="4" class="style1"><span class="style3">Dated</span></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="3" class="style1"><span class="style1"><?php echo $billdata[0]['p_bill_id'];?></span></td>
    <td colspan="4" class="style1"><span class="style1"><?php echo $billdata[0]['p_bill_date'];?></span></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="3" class="style1"><span class="style3">Despatched    through</span></td>
    <td colspan="4" class="style1"><span class="style3">Destination</span></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="3" class="style1"><span class="style1"></span></td>
    <td colspan="4" class="style1"><span class="style1"></span></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="7" class="style1"><span class="style3">Terms of    Delivery</span></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="7" class="style1"><span class="style1"></span></td>
  </tr>
  <tr height="20">
    <td width="42" height="20" class="style1"><span class="style3">Sl #</span></td>
    <td colspan="6" class="style1"><span class="style3">Description of Goods</span></td>
    <td align="center" valign="middle" class="style1"><span class="style3">MRP<br />
      (Rs)</span></td>
    <td width="58" align="center" valign="middle" class="style1"><span class="style3">HSN</span></td>
     <td width="56" align="center" valign="middle" class="style1"><span class="style3">Rate<br />
      (Rs)</span></td>
    <td width="47" align="center" valign="middle" class="style1"><span class="style3">Quantity</span></td>
   
    <td width="38" align="center" valign="middle" class="style1"><span class="style3">Disc %</span></td>
    <td width="87" align="center" valign="middle" class="style1"><span class="style3">Amount<br />
      (Rs)</span></td>
  </tr>
  <?php
						$i=1; foreach($billitem as $bitems){
						$purchunit = $this->db->query('SELECT * FROM td_purchase_item WHERE item_id='.$bitems['item_purchase_id'])->result_array();
						$unit = $this->db->query('SELECT * FROM td_unit WHERE uid='.$bitems['item_p_unit'])->result_array();
						?>
                        <?php 
			  $amount = explode(".", number_format($bitems['item_s_total'],2)); 
			  ?>
  <tr height="20">
    <td height="20" align="center" valign="middle" class="style1"><?php echo $i;?></td>
    <td colspan="6" align="left" valign="middle" class="style1"><span class="style1"><?php echo $bitems['item_name'];?></span></td>
    <td align="center" valign="middle" class="style1"><span class="style1"><?php echo $purchunit[0]['item_mrp'];?></span></td>
    <td align="center" valign="middle" class="style1"><span class="style1"><?php echo $purchunit[0]['item_hsn'];?></span></td>
     <td align="center" valign="middle" class="style1"><span class="style1"><?php echo $bitems['item_unit_p_price'];?></span></td>
    <td align="center" valign="middle" class="style1"><span class="style1"><?php echo $bitems['item_p_qty'];?> <?php echo $unit[0]['stname']; ?></span></td>
   
    
    <td align="center" valign="middle" class="style1"><span class="style1"><?php //echo $bitems['itemdiscnt'];?> % (<?php $disctot[]= $bitems['itemdiscnt_amt'];//echo $bitems['itemdiscnt_amt'];?>)</span></td>
    <td align="center" valign="middle" class="style1"><span class="style1"><?php $tot[] = $bitems['item_unit_p_price']*$bitems['item_p_qty']; echo $bitems['item_unit_p_price']*$bitems['item_p_qty'];?></span></td>
  </tr>
  <?php $i++;} ?>
  
  <tr height="20">
    <td height="20" colspan="12" align="right" valign="middle" class="style1" style="border-bottom:1px solid #fff;"><span class="style1"></span><span class="style3">TOTAL</span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span></td>
    <td align="center" valign="middle" class="style1"><span class="style1"><?php echo array_sum($tot);?></span></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="12" align="right" valign="middle" class="style1"  style="border-bottom:1px solid #fff;"><span class="style1"></span><span class="style1"></span><span class="style3">DISCOUNT (-<?php echo $billdata[0]['last_discount'] ?>%) </span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span></td>
     <td align="center" valign="middle" class="style1">-<?php /*echo array_sum($disctot); */ echo $billdata[0]['last_discount_amount']?></td>
  </tr>
  <?php 
  if($billitem[0]['item_s_igst']==0){?>
  <tr height="20">
    <td height="20" colspan="12" align="right" valign="middle" class="style1"  style="border-bottom:1px solid #fff;"><span class="style3">SGST</span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span></td>
    <td align="center" valign="middle" class="style1"><span class="style1"><?php echo $btotsgst[0]['totsgst'];?> (<?php echo $billitem[0]['item_s_gst'];?> %)</span></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="12" align="right" valign="middle" class="style1"  style="border-bottom:1px solid #fff;"><span class="style3">CGST </span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span></td>
    <td align="center" valign="middle" class="style1"><span class="style1"><?php echo $btotcgst[0]['totcgst'];?> (<?php echo $billitem[0]['item_s_cgst'];?> %)</span></td>
  </tr>
  <?php } else {?>
  <tr height="20">
    <td height="20" colspan="12" align="right" valign="middle" class="style1"><span class="style3">IGST </span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span></td>
    <td align="center" valign="middle" class="style1"><span class="style1"><?php echo $btotigst[0]['totigst'];?> (<?php echo $billitem[0]['item_s_igst'];?> %)</span></td>
  </tr>
  <?php }?>
  <tr height="20">
    <td height="20" colspan="12" align="right" valign="middle" class="style1"  style="border-bottom:1px solid #fff;"><span class="style3">ROUND OFF</span><span class="style1">
    
    </span></td>
    <td align="center" valign="middle" class="style1"><span class="style1"> <?php 
                if(isset($billitem))
                { 
                 $tamt = $billdata[0]['real_amt'];
				 $isfloat = is_float($tamt);
				 if(is_float($tamt)){
				 $expamt = explode(".", $billdata[0]['real_amt']);
				 $flt = $expamt[0];
				  echo $expamt[1];
				 } else {
				 $flt = $tamt;
				 echo 0;
				 }
                } 
              ?>  </span></td>
  </tr>
  <tr height="21">
    <td height="21" colspan="12" align="right" valign="middle" class="style1"><span class="style3">NET TOTAL</span></td>
    <td class="style1" style="text-align:center;"><span class="style1"><?php echo number_format(round($billdata[0]['p_bill_total']),2);?></span></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="13" align="right" valign="middle" class="style1"><span class="style1">E. &amp; O.E</span></td>
    </tr>
  <tr height="20">
    <td height="20" colspan="13" align="left" valign="middle" class="style1"><span class="style3">Amount Chargeable    (in words) :</span><span class="style1"> Rupees....<?php if(isset($billitem)){ echo getIndianCurrency(round($flt)); } ?>....</span></td>
    </tr>
  <tr height="20">
    <td colspan="7" rowspan="3" class="style1"><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span></td>
    <td colspan="2" rowspan="3" align="center" valign="middle" class="style1"><span class="style3">Taxable</span><span class="style3"> Value</span></td>
    <td height="20" colspan="2" align="center" valign="middle" class="style1"><span class="style3">Central Tax</span></td>
    <td colspan="2" align="center" valign="middle" class="style1"><span class="style3">State Tax</span></td>
  </tr>
  <tr height="20">
    <td height="20" align="center" valign="middle" class="style1"><span class="style3">Rate</span></td>
    <td align="center" valign="middle" class="style1"><span class="style3">Amount</span></td>
    <td align="center" valign="middle" class="style1"><span class="style3">Rate</span></td>
    <td align="center" valign="middle" class="style1"><span class="style3">Amount</span></td>
  </tr>
  <tr height="20">
    <td height="20" align="center" valign="middle" class="style1">&nbsp;</td>
    <td align="center" valign="middle" class="style1"><?php echo $btotsgst[0]['totsgst']; ?></td>
    <td align="center" valign="middle" class="style1">&nbsp;</td>
    <td align="center" valign="middle" class="style1"><?php echo $btotcgst[0]['totcgst'];?></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="7" align="right" valign="middle" class="style3" ><span class="style1">Total Tax Amount</span></td>
    <td height="20" colspan="2" align="center" valign="middle" class="style3"><?php echo $btotsgst[0]['totsgst']+$btotcgst[0]['totcgst']+$btotigst[0]['totigst'];?></td>
    <td align="center" valign="middle" class="style1">&nbsp;</td>
    <td align="center" valign="middle" class="style1">&nbsp;</td>
    <td align="center" valign="middle" class="style1">&nbsp;</td>
    <td align="center" valign="middle" class="style1">&nbsp;</td>
  </tr>
  <tr height="20">
    <td height="20" colspan="13" align="left" valign="middle" class="style1"><span class="style3">Tax Amount (in    words) :</span><span class="style1"> Rupees ..<?php if(isset($billitem)){ echo getIndianCurrency(round(($btotsgst[0]['totsgst']+$btotcgst[0]['totcgst']+$btotigst[0]['totigst']),2)); } ?>..</span><span class="style1"></span></td>
    </tr>
  <tr height="20">
    <td height="20" colspan="9" class="style1"><span class="style3">Company's PAN : </span><span class="style1"><?php echo $company[0]['cpan'];?></span></td>
    <td colspan="4" align="center" valign="middle" class="style1"><span class="style3"><?php echo $company[0]['cname'];?></span></td>
    </tr>
  <tr height="20">
    <td height="80" colspan="9" class="style1"><span class="style3">Declaration</span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"></span><span class="style1"><br />
      We declare that this invoice shows the actual price of the goods    described and that all particulars are true and correct.</span></td>
    <td height="80" colspan="4" align="center" valign="bottom" class="style1">Authorised Signatory</td>
    </tr>
  
  <tr height="20">
    <td height="20" colspan="13" align="left" valign="middle" class="style1"><span class="style7">This is a Computer    Generated Invoice</span></td>
  </tr>
</table></td>
  </tr>
</table>



</body>
</html>
