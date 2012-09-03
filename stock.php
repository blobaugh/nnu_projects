Put in some number(or use the defaults) and hit submit<br/>
<form action="" method="get">
Principal: <input type="text" name="principal" value="1000">
<br/>Stock Price: <input type="text" name="stock_price" value="25.20">
<br />Dividend Amount: <input type="text" name="dividend" value="0.35">
<br />Years to Calc: <input type="text" name="years" value="32">
<input type="submit">
</form>
<br/>
<?php







$start_amount = $_GET['principal'];
$stock_price = $_GET['stock_price'];
$dividend = $_GET['dividend'];;
$years_to_calc = $_GET['years'];


$current_amount = $start_amount;
$current_num_stocks = floor($start_amount / $stock_price);
$start_num_stocks = $current_num_stocks;
echo "Starting with \$$start_amount, you purchased $current_num_stocks stocks at \$$stock_price";
echo "<br/><br/>Hypothesizing that the stock price remains the same, here is your standing reinvesting the divided over $years_to_calc years";

echo "<br/>";

$years_dividend = 0;
$quarter_dividend = 0;
$new_quarter_stocks = 0;
$new_num_stocks = 0;
$free_money = 0;
$total_dividends = 0;

for($year = 1; $year <= $years_to_calc; $year++) {
            $years_dividend = 0;
            $new_num_stocks = 0;
            // This is to calc each quarter
            for($i = 0; $i < 4; $i++){
               // To get the dividend multiply the current number of stocks by the dividend amount
               $quarter_dividend = $current_num_stocks * $dividend;//number_format($current_num_stocks * $dividend, 2);
               $total_dividend += $quarter_dividend;
               $years_dividend += $quarter_dividend;
               // Add the dividend into the free money pot. This is anything extra after buying stock
               $free_money += $years_dividend;
               // To get the number of new stocks divide the free money by the stock price to see how many you can get
               $new_quarter_stocks = floor($free_money / $stock_price);
               $new_num_stocks += $new_quarter_stocks;
               // If it is greater than 0 be sure to pull the money out of free money
               if($new_quarter_stocks > 0) {
                        // Found out how much to pull out by multiplying the amount of new stock by the price
                        $free_money -= ($new_quarter_stocks * $stock_price);
               }
               // Add the new stock into the pot
               $current_num_stocks += $new_quarter_stocks;

                $current_amount = ($current_num_stocks * $stock_price) + $free_money;
            }


                echo "<br/>$year: Num Stocks: $current_num_stocks, Dividend: \$$years_dividend, Amount to purchase: $new_num_stocks, Total Value: $current_amount";
}

$new_stock = $current_num_stocks - $start_num_stocks;
echo "<br/><br/>After $years_to_calc years you have \$$current_amount and $current_num_stocks stocks with a dividend payout of \$$total_dividend and $new_num_stocks new shares";
