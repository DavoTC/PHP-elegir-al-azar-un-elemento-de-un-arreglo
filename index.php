<html>
    <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
    $familiares=array();
    array_push($familiares,"herbarth");
    array_push($familiares,"jacqui");
    array_push($familiares,"pablo");
    array_push($familiares,"fanny");
    array_push($familiares,"six");
    array_push($familiares,"totys");
    array_push($familiares,"ervin");
    array_push($familiares,"luis");
    array_push($familiares,"calo");
    array_push($familiares,"titi");
    array_push($familiares,"pili");
    array_push($familiares,"men");
    $amigos=array();
    array_push($amigos,"andy");
    array_push($amigos,"chato");
    array_push($amigos,"max");
    array_push($amigos,"sebas");
    array_push($amigos,"panchi");
    array_push($amigos,"ricky");
	// Sort the list
    sort($familiares);
    rsort($amigos);
	// Randomly select a winner!
	
    print "El Familiar Ganador es: ".strtoupper($familiares[rand(0,count($familiares)-1)]);
    
    print "<br>El Mejor amigo es: ".strtoupper($amigos[rand(0,count($amigos)-1)]);
	// Print the winner's name in ALL CAPS
	?>
	
	</p>
</html>
