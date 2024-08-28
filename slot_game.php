<?php
// Setting Variables
$symbols = ['A', 'B', 'C'];
$totalWinnings = 0;
$spins = [];
$maxSpins = 20;

// $random = array_rand($symbols);
// $randSymbols = $symbols[$symbols]

// Game Loop
while ($totalWinnings < 500 && count($spins) < $maxSpins){
    $spin = '';

    for ($i = 0; $i < 3; $i++ ) {
        $spin .= $symbols [array_rand($symbols)];
   } 

// Money
$payout = match ($spin) {
    'AAA', 'BBB', 'CCC' => 100, 
        'AAB', 'ABA', 'BAA', 'ABB', 'BBA', 'BAB',
         'BCC', 'CBC', 'CCB', 'ACC', 'CAC', 'CCA' => 50, 
        default => 0,
};

//    Update Results
$spins[] = "$spin payoff $payout";
$totalWinnings += $payout;

}

foreach ($spins as $spinResults) {
    echo $spinResults . "<br>";
}

echo "Game over. Total winnings: $totalWinnings dollars";
?>
