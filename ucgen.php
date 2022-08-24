<?php

function piramit($deger)
{
	for($i=1;$i<$deger;$i++)
	{
		$sayac=0;
		while($sayac < $i)
		{
			echo "0";
			$sayac++;
		}
		echo "<br>";

	}

}



piramit(15);