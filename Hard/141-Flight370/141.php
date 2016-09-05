<?php
/*
 *  2016-09-05
 *  CodeEval Challenge - Hard
 *  Flight 370
 *  https://www.codeeval.com/open_challenges/141/
 */

// DEBUG
// $input = fopen('./input.txt', 'r');
// PROD
$input = fopen($argv[1], 'r');

$in_xml = false;
$regions = array();
$placemarks = array();
$in_placemark = false;

$id = $nb = $lon = $lat = $ts = 0;
$name = '';

while (!feof($input)) {
    $line  = trim(fgets($input));

    if ($line) {
        if (false !== strpos($line, '<?xml version="1.0"')) {
            $in_xml = true;
        } elseif ($in_xml) {
            $pos = strpos($line,'Placemark');
            if ($pos !== false) {
                $c = $line[$pos-1];
                if ($c == '<') {
                    $in_placemark = true;
                    $id = substr($line, $pos+14, strrpos($line,'"') - $pos - 14);
                } elseif ($c == '/') {
                    $in_placemark = false;
                    $placemarks[] = array(
                        'id' => $id,
                        'name' => $name,
                        'ts' => $ts,
                        'lon' => $lon,
                        'lat' => $lat,
                        'nb' => $nb
                    );
                    $id = $nb = $lon = $lat = $ts = 0;
                    $name = '';
                }
            } elseif ($in_placemark) {
                if ((false !== ($from = strpos($line,'<name>'))) && ( false !== ($to = strpos($line,'</name>',$from)))) {
                    $name = substr($line, $from+6, $to-$from-6);
                } elseif ((false !== ($from = strpos($line,'Confirmation: <b>'))) && ( false !== ($to = strpos($line,'</b>',$from)))) {
                    $nb = substr($line, $from+17, $to-$from-17);
                } elseif ((false !== ($from = strpos($line,'<TimeStamp><when>'))) && ( false !== ($to = strpos($line,'</when></TimeStamp>',$from)))) {
                    $ts = substr($line, $from+17, $to-$from-17);
                } elseif ((false !== ($from = strpos($line,'<Point><coordinates>'))) && ( false !== ($to = strpos($line,'</coordinates></Point>',$from)))) {
                     list($lon,$lat) = explode(',', substr($line,$from+20, $to-$from-20));
                }

            }
        } else {
            $tmp = preg_split('/[;\(\) ,]+/',$line);
            $regions[] = array(
                'km' => $tmp[0],
                'lon' => $tmp[1],
                'lat' => $tmp[2]
            );
        }
    }
}
fclose($input);

$regions_cnt = count($regions);
$placemarks_cnt = count($placemarks);

usort($placemarks,'placemark');

for ($i=0 ; $i < $regions_cnt ; $i++) {
    $km = $regions[$i]['km'];
    $lng1 = $regions[$i]['lon'];
    $lat1 = $regions[$i]['lat'];

    $max = 0;
    $placemarks_ok = array();
    for ($j=0 ; $j < $placemarks_cnt ; $j++) {
        $placemark = $placemarks[$j];
        $lng2 = $placemark['lon'];
        $lat2 = $placemark['lat'];
        $nb = $placemark['nb'];

        if ($nb >= $max) {
            if (dist($lat1, $lng1, $lat2, $lng2) <= $km) {
                if ($nb > $max) {
                    $placemarks_ok = array();
                }
                $placemarks_ok[] = $placemark;
                $max = $nb;
            }
        } else{
            break;
        }
    }

    if ($placemarks_ok) {
        for ($k=0, $cnt = count($placemarks_ok) ; $k < $cnt ; $k++) {
            echo ( $k > 0 ? ', ' : '' ) . $placemarks_ok[$k]['name'];
        }
    } else{
        echo 'None';
    }
    echo PHP_EOL;
}

function dist($lat1, $lng1, $lat2, $lng2)
{
    $pi80 = M_PI / 180;
    $lat1 *= $pi80;
    $lng1 *= $pi80;
    $lat2 *= $pi80;
    $lng2 *= $pi80;
    $r = 6372.797; // Rad of Earth in km
    $dlat = $lat2 - $lat1;
    $dlng = $lng2 - $lng1;
    $a = sin($dlat * 0.5) * sin($dlat * 0.5) + cos($lat1) * cos($lat2) * sin($dlng * 0.5) * sin($dlng * 0.5);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $km = $r * $c;
	return $km;
}

function placemark($a,$b)
{
    $ret = null;
    if ($a['nb'] == $b['nb']) {
        if ( $a['ts'] > $b['ts']) {
            $ret = -1;
        }

        if ($a['ts'] < $b['ts']){
             $ret = 1;
         }
        if($a['ts'] == $b['ts']){
             $ret =  $a['id'] - $b['id'];
         }
    } else {
        $ret = $b['nb'] - $a['nb'];
    }
    return $ret;
}
