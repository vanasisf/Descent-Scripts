<?php
include("include/header.inc.php");

$get_query = "select SpellGroupType_1,SpellGroupType_2,SpellGroupType_3 from dbc_spell where id in (50096,61274,50108,61275,50109,61276,50110,61277,50111,61278,50447,50448,50449,52284,52295,52296,52297,48266,45902,52374,49410,52285,52286,50842,48721,49926,55258,47476,51426,49927,45529,55259,56222,49913,49939,48743,51427,49928,55260,49914,49940,49929,55261,51428,49915,49941,51429,49916,49930,55262,59921,61455,49142,45477,52372,48263,47528,45524,51416,51408,49896,49020,3714,48792,51417,57330,49903,51423,56815,56816,57532,51418,51409,49904,51424,47568,51419,57623,51410,49909,51425,55268,51411,50444,49560,49575,51969,51983,51970,51986,50536,59879,45469,45470,48778,47632,47633,47541,52375,50977,49576,45462,52373,49998,46584,51325,43265,49917,49892,49999,49918,49936,55265,48707,49893,51326,45463,49919,51373,51376,48265,49937,55270,51327,49923,49920,51374,51378,49894,55271,42650,42651,51328,49938,49895,49924,49921,51375,51379,53341,53331,53343,54447,53342,54446,53323,53344,53428,45902,52374,49410,50842,48721,49926,55258,47476,51426,49927,45529,55259,56222,49913,49939,48743,51427,49928,55260,49914,49940,49929,55261,51428,49915,49941,51429,49916,49930,55262,59921,61455,49142,45477,52372,48263,47528,45524,51416,51408,49896,49020,3714,48792,51417,57330,49903,51423,56815,56816,57532,51418,51409,49904,51424,47568,51419,57623,51410,49909,51425,55268,51411,50444,49560,49575,51969,51983,51970,51986,50536,59879,45469,45470,48778,47632,47633,47541,52375,50977,49576,45462,52373,49998,46584,51325,43265,49917,49892,49999,49918,49936,55265,48707,49893,51326,45463,49919,51373,51376,48265,49937,55270,51327,49923,49920,51374,51378,49894,55271,42650,42651,51328,49938,49895,49924,49921,51375,51379,53341,53331,53343,54447,53342,54446,53323,53344,53428)
";
$get_res=mysql_query($get_query,$dbi) or die(" Q200611231501411 ".mysql_error($dbi));
$tot_flag1=0;
$tot_flag2=0;
$tot_flag3=0;
while(list($it1,$it2,$it3)=mysql_fetch_row($get_res))
{
	$tot_flag1= $tot_flag1 | $it1;
	$tot_flag2= $tot_flag2 | $it2;
	$tot_flag3= $tot_flag3 | $it3;
}
echo "grouped flag $tot_flag1 $tot_flag2 $tot_flag3 <br>";
?>