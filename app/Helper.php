<?php

use Carbon\Carbon;

function tagsHumanize($tags)
{
	return explode(',', $tags);
}

function timeAgo($date)
{
    return Carbon::parse($date)->diffForHumans();
}

function timeHumanize($date)
{
    return \Carbon\Carbon::parse($date)->locale('tr')->isoFormat('D MMMM YYYY');
}

function segments($index = null)
{
    $baseUrl = config('BASE_URL');
    $baseArray = explode('/', trim(parse_url($baseUrl, PHP_URL_PATH) ?? '', '/'));

    $requestUri = $_SERVER['REQUEST_URI'];
    $requestArray = explode('/', trim(parse_url($requestUri, PHP_URL_PATH) ?? '', '/'));

    $diffArray = array_values(array_diff($requestArray, $baseArray));

	if ($index)
	{
		if (isset($diffArray[$index]))
		{
			return $diffArray[$index];
		}
		else
		{
			return false;
		}
	}
	else
	{
		return $diffArray;
	}
}

function turkishLira($par)
{
	return number_format($par, 2, ',', '.');
}

function hashid($limit = 11)
{
	$chars = 'bcdfghjklmnpqrstvwxyz';
	$chars .= 'BCDFGHJKLMNPQRSTVWXYZ';
	$chars .= '0123456789';

	while (1)
	{
		$key = '';
		srand((double) microtime() * 1000000);

		for ($i = 0; $i < $limit; $i++)
		{
			$key .= substr($chars, (rand() % (strlen($chars))), 1);
		}

		break;
	}

	return $key;
}
