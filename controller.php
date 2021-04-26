<?php
    include 'functions.php';

    if(isset($_GET['getTriangle'])){
        $s1 = intval($_GET['s1']);
        $s2 = intval($_GET['s2']);

        echo "Result: " . getMaxRangeTriangleLastEdge($s1, $s2);
    }

    if(isset($_GET['countOnes'])){
        $n = intval($_GET['n']);

        echo "Result: " . countAllOnesInBinary($n);
    }

    if(isset($_GET['joinParts'])){
        $p1 = $_GET['p1'];
        $p2 = $_GET['p2'];

        echo "Result: " . joinParts($p1, $p2);
    }

    if(isset($_GET['validateSastry'])){
        $n = intval($_GET['n']);

        echo "Result: " . isSastryNumber($n);
    }
?>