<?php
include("include/header.inc.php");

$spell_list="24985,24986,24987,24989,24990,24988,15999,16450,53082,10721,28487,28740,10698,10695,10697,10699,10696,51851,23432,23431,23430,23429,23428,26010,43697,26391,40990,42609,15067,45082,28871,48406,28738,46425,10720,10719,10718,10717,10716,10715,10714,10713,45175,36029,25849,53768,45890,45125,15049,36028,10712,35157,10711,10710,35239,10709,28505,46599,53316,27570,10684,39181,10682,10683,10681,10680,17567,10708,10706,10707,10705,25162,24696,25018,43698,28739,35910,35911,35909,35907,33057,19363,26067,35156,33050,40405,40319,19772,45127,17469,17468,26533,27241,45174,36027,10703,10704,23811,10702,10701,43918,36034,10700,49964,48408,17709,23530,23531,17707,32298,17708,52615,10688,46426,10687,10686,12243,13548,10685,10679,10678,10677,10676,15648,10674,10673,10675,15048,36031,40549,44369,39709,30156,30152,51716,55068,4055,40613,40614,40634,54187,45048,26541,26045,26529,58636,59250,61349,61348,61351,61350,61357,61472,61855,61991";

$get_query = "select EffectMiscValue_1,EffectMiscValue_2,EffectMiscValue_3 from dbc_spell where id in ($spell_list)";
$get_res=mysql_query($get_query,$dbi) or die(" Q200611231501411 ".mysql_error($dbi));
$unique_list="";
while($row=mysql_fetch_row($get_res))
{
	for($i=0;$i<3;$i++)
		$unique_list[$row[$i]]=1;
}

foreach($unique_list as $key => $value)
	if($key>0)
	{
			echo "insert ignore INTO `creature_proto` (`entry`, `minlevel`, `maxlevel`, `faction`, `minhealth`, `maxhealth`) values ($key,1,1,3,1,1); <br>";
	}
?>