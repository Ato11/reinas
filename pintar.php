<?php
// $board;

$N = $_GET['numero'];
if( Solve() ){
    echo($board);
};

function Solve()
{
	// $board = array( 
	// 	array(0, 0, 0, 0, 0, 0, 0, 0 ),
	// 	array(0, 0, 0, 0, 0, 0, 0, 0 ),
	// 	array(0, 0, 0, 0, 0, 0, 0, 0 ),
	// 	array(0, 0, 0, 0, 0, 0, 0, 0 ),
	// 	array(0, 0, 0, 0, 0, 0, 0, 0 ),
	// 	array(0, 0, 0, 0, 0, 0, 0, 0 ),
	// 	array(0, 0, 0, 0, 0, 0, 0, 0 ),
	// 	array(0, 0, 0, 0, 0, 0, 0, 0 )
	// );

    // $lista1 = array();
    // for ($i=0; $i < $N ; $i++) { 
    //     $lista2 = array();
    //     for ($j=0; $j < $N ; $j++) { 
    //         $lista2[] = 0;		
    //     }
    //     $lista1[] = $lista2;
    // }

        $board = array();
    for ($i=0; $i < $N ; $i++) { 
        $board[] = array(0,0,0,0,0,0,0,0);
    }
    // $board = array($lista);


	if (SolveNQ($board, 0) == false)
		return false;

	PrintSolution($board);
	return true;
	// echo $board;
}

function PrintSolution(&$board)
{
	global $N;
	
	for ($i = 0; $i < $N; ++$i)
	{
		for ($j = 0; $j < $N; ++$j){
			echo " " . $board[$i][$j] . " ";
        }
		// echo "<br/>";
		echo "\n";
	}
}

function IsSafe(&$board, $row, $col)
{
	global $N;
	$i; $j;

	for ($i = 0; $i < $col; ++$i)
		if ($board[$row][$i])
			return false;

	for ($i = $row, $j = $col; $i >= 0 && $j >= 0; --$i, --$j)
		if ($board[$i][$j])
			return false;

	for ($i = $row, $j = $col; $j >= 0 && $i < $N; ++$i, --$j)
		if ($board[$i][$j])
			return false;

	return true;
}

function SolveNQ(&$board, $col)
{
	global $N;
	
	if ($col >= $N)
		return true;

	for ($i = 0; $i < $N; ++$i)
	{
		if (IsSafe($board, $i, $col))
		{
			$board[$i][$col] = 1;

			if (SolveNQ($board, $col + 1))
				return true;

			$board[$i][$col] = 0;
		}
	}

	return false;
}





?>