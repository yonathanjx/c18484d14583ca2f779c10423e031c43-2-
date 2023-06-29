<?PHP

//Example 2_1

print "---------------Example 2_1----------------";
print "<br>";
if (!$_POST) {
    print <<<_HTML_
<form method="post" action="$_SERVER[$PHP_SELF]">
    Type in your Email address:<input type="text" name="email"/><br/>
    Type in your phone number:<input type="text" name="phoneno" />
    <button type="submit"> Send </button>
</form>
_HTML_;
    print <<<_HTML_
<form method="post" action="$_SERVER[$PHP_SELF]">
    Type in your Zipcode:<input type="text" name="zipcode"/><br/>
   
</form>
_HTML_;
} else {
    //Example 2-3


    $phoneNumber = trim($_POST['phoneno']);
    $stringLength = strlen($phoneNumber);
    if ($stringLength != 10) {
        print("Please enter a true and real \"10\" digit number. \n Thank you.");
        print "\n";

   //Example 2-3
        if (trim($_POST['email']) == 'yhunetaw@gmail.com'
        || strcasecmp($_POST['email'],'yhunetaw@gmail.com' ) == 0){
        
            print 'Match\'s Email too!';
        }
    }
    if (strlen(trim($_POST['zipcode'])) != 6) {
        print "please enter a valid 5 digit zipcode";
    }
}
print "<br>";

//Exercises 2

print "---------------Chaper 2 - Exercises 2----------------";
print "<br>";
//Chaper 2 - Exercises 2
//
$hamburger = 4.95;
$chocolateMilkshake = 1.95; 
$cola = 0.85;

$totalCost = 2*$hamburger + $chocolateMilkshake + $cola;

$pretaxtip = (16/100)*$totalCost;
$salesTax = (7.5/100)*$totalCost;
$total = $totalCost + $pretaxtip + $salesTax;
print ("<br>".$total);
print "<br>";


$hamburger = 4.95;
$shake = 1.95;
$cola = 0.85;
$tip_rate = 0.16;
$tax_rate = 0.075;
$food = (2 * $hamburger) + $shake + $cola;
$tip = $food * $tip_rate;
$tax = $food * $tax_rate;
$total = $food + $tip + $tax;
print '<br>The total cost of the meal is $' . $total;
echo("<br>");



//Chaper 2 - Exercises 3
echo("<br>");
print "---------------Chaper 2 - Exercises 3----------------";
print "<br>";

print ("<br>The bill is");
 print ("<br>Humburger $$hamburger X 2 = $").$hamburger*2;
 print ("<br>Chocolate Milkshake $$chocolateMilkshake X 1 = $$chocolateMilkshake");
 print ("<br>Cola $$cola X 1 = $$cola");
 print nl2br( "\n"."Pre-tax total = $food");
 print "<br>";
 $taxedFood = $food+$tax;
 print ("Post-tax total = $").$taxedFood;
 print nl2br( "\n"."Total with tax and tip = $".$total);
echo nl2br("\n");
print nl2br( "\n"."haha");
echo("<br>");


//Exercise 3 Answer
echo("<br>");
print "---------------Chaper 2 - Exercises 3----------------";
print "<br>";
$hamburger1 =4.95;
$shake1 = 1.95;
$coke1 = 0.85;
$tip_rate1 = 0.16;
$tax_rate1 = 0.075;
$food1 = (2 * $hamburger) + $shake + $cola;
$tip1 = $food * $tip_rate;
$tax1 = $food * $tax_rate;
$total1 = $food + $tip + $tax;



printf("%d %-9s at \$%.2f each: \$%5.2f\n", 2, 'Hamburger', $hamburger1, 2* $hamburger1);
echo nl2br("\n");
printf("%d %-9s at \$%.2f each: \$%5.2f\n", 1, 'Shake',$shake1, $hamburger1);
echo("<br>");
printf("%14545s: \$%765756.33f\n", 'Food Total', 1222222.22222222);
print nl2br( "\n");


printf("%d %-9s at \$%.2f each: \$%5.2f\n", 2, 'Hamburger', $hamburger1, 2* $hamburger1);
printf( "<br>");
printf("%d %-9s at \$%.2f each: \$%5.2f\n", 2, 'Hamburger', $hamburger1, 2* $hamburger1);
print( "<br>");
printf("%d %-9s at \$%.2f each: \$%10.2f\n", 2, 'Hamburger', $hamburger1, 2* $hamburger1);
$first_Name = 'Yonathan';
$last_Name = 'Zewdie';
printf("<br>%s,%10000s", $first_Name, $last_Name);
print( "<br>");
print "<br>";
print strlen($first_Name)+strlen($last_Name);
 ?>
