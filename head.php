<?php
$con=mysqli_connect('localhost','root','','amazon');
$var= array('Seller Gstin','Invoice Numbers','Invoice Date','Transaction Type','Order Id','Shipment Id','Shipment Date','Order Date','Shipment Item Id','Quantity','Item Description','Asin','Hsn/sac','Sku','Product Tax Code','Bill From City','Bill From State','	Bill From Country',	'Bill From Postal Code','Ship From City	','Ship From State','Ship From Country','Ship From Postal Code','Ship To City',	'Ship To State','Ship To Country','Ship To Postal Code','Invoice Amount','Tax Exclusive Gross','Total Tax Amount','Cgst Rate','Sgst Rate','Utgst Rate','Igst Rate','Compensatory Cess Rate','Principal Amount','Principal Amount Basis'	,'Cgst Tax','Sgst Tax','Igst Tax','Utgst Tax','Compensatory Cess Tax','Shipping Amount','Shipping Amount Basis','Shipping Cgst Tax','Shipping Sgst Tax','Shipping Utgst Tax','Shipping Igst Tax','Shipping Cess Tax Amount','Gift Wrap Amount','Gift Wrap Amount Basis','Gift Wrap Cgst Tax','Gift Wrap Sgst Tax','Gift Wrap Utgst Tax','Gift Wrap Igst Tax','	Gift Wrap Compensatory CessTax','Item Promo Discount','Item Promo Discount Basis','Item Promo Tax',	'Shipping Promo Discount','Shipping Promo Discount Basis','Shipping Promo Tax','Gift Wrap Promo Discount','Gift Wrap Promo Discount Basis','Gift Wrap Promo Tax','Tcs Cgst Rate','Tcs Cgst Amount','Tcs Sgst Rate','Tcs Sgst Amount','Tcs Utgst Rate','Tcs Utgst Amount','Tcs Igst Rate','Tcs Igst Amount','Warehouse Id','Fulfillment Channel','Payment Method Code','Credit Note No','Credit Note date');
$a=array(array("GSTIN","Company GSTIN","Ecommerce Vendor GSTIN"),array("Invoice number"),array("Invoice Date"),array("Payment Type","payment mode"),array("Order ID","Purchase ID","Item ID"),array("Vendor ID","Vendor account ID"),array("Order Date"),array("order date"),array("Item ID"),array("Quantity"),array("Description"),array("Ecommerce Vendor ID"),array("HSN Code"),array("SKU Code"),array("State Tax Code"),array("NULL"),array("NULL"),array("NULL"),array("Pin Code"),array("NULL"),array("NULL"),array("NULL"),array("Pin Code"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("Total Amount","Total Product Amount"),array("GSTID"),array("Total taxable value","Tax Amount","Taxable Amount","total tax amount"),array("CGST"),array("SGST"),array("UTGST"),array("IGST"),array("CESS Amount"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("Total Discount","Discount"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("Note Number"),array("Note Date")); 
$b=array(
    array("Vendor Register","Purchase Register","Ecommerce Vendor","GSTR1_B2B","GSTR1_B2C"),
	array("Credit Debit Note","Expense Register","GSTR1_B2B","GSTR1_B2C","Purchase Register","Sales Register"),
	array("Credit Debit Note","Expense Register","GSTR1_B2B","GSTR1_B2C","Purchase Register","Sales Register"),
	array("Expense Register","Payment Sources","Purchase Payment Register","Sales Payment Register"),
	array("Sales Register","Credit Debit Note Products","Purchased Products","Purchase Payment Register","Purchase Register","Purchase Challan Register","Item Master"),
	array("Purchase Register","Vendor Bank Account","Vendor Register"),
	//array("NULL"),
	array("Sales Register"),
	array("Sales Register"),
	array("Credit Debit Note Products","Item Master","Purchased Products","Sales Products","Stock Register"),
	array("Credit Debit Note Products","Purchased Products","Sales Products"),
	array("HSN Directory"),
	array("Ecommerce Vendor","Sales Register"),
	array("Credit Debit Note Products","HSN Directory","Item Master","Purchased Products","Sales Products"),
	array("Item Master"),
	array("GSTR1_B2B","GSTR1_B2C","State Directory"),
	array("NULL"),array("NULL"),array("NULL"),array("Vendor Register"),array("NULL"),array("NULL"),array("NULL"),array("Vendor Register"),array("NULL"),array("NULL"),array("NULL"),array("Vendor Register"),array("Credit Debit Note","Credit Debit Note Products","GSTR1_B2B","GSTR1_B2C","Purchased Products","Purchase Register","Sales Products","Sales Register"),
	array("Credit Debit Note Products","GST Class","GST Class","HSN Directory","Purchased Products","Sales Products","Sales Register"),array("Credit Debit Note","Credit Debit Note Products","Expense Register","GSTR1_B2B","GSTR1_B2C","Purchased Products","Purchase Register","Sales Products","Sales Register"),
	array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("Credit Debit Note","Credit Debit Note Products","GSTR1_B2B","GSTR1_B2C","Purchased Products","Purchase Register","Sales Products","Sales Register"),
	array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("Credit Debit Note","Credit Debit Note Products","Purchased Products","Purchase Register","Sales Products","Sales Register"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("NULL"),array("Credit Debit Note","Credit Debit Note Products"),array("Credit Debit Note","Credit Debit Note Products"),
	);
 /*foreach($a as $val)
 {
echo'<pre>';
 print_r($val);
 echo'</pre>';
 }*/
 echo'<pre>';
 print_r($b);
 echo'</pre>';
echo'<pre>';
 print_r($var);
 echo'</pre>';
 for($i=0;$i<sizeof($var);$i++)
 {
 
$sql=	"INSERT INTO `main`(`Sr no`, `csv no`, `attributes in csv`,`attributes in table`, `tablename`) VALUES ($i,1,'$var[$i]','".implode(",",array_values($a[$i]))."','".implode(",",array_values($b[$i]))."')";
//$sql.="INSERT INTO `main`(`attributes in table`, `tablename`) VALUES ('".implode(",",array_values($a[$i]))."','NULL')";
$run=mysqli_multi_query($con,$sql);
 
 if($run)
	 echo"inserted sucessfully";
 else
	 echo"error";
 }
 
 /*for($i=0;$i<sizeof($var);$i++)
 {
$sql="INSERT INTO `main`(`Sr no`, `attributes in table`, `tablename`) VALUES ($i,'$a[$i]','')";
$run=mysqli_multi_query($con,$sql);
	
 }
 if($run)
	 echo" data inserted sucessfully";
 else
	 echo"error";*/
 ?>
