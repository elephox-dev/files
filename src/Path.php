<?php
declare(strict_types=1);

namespace Elephox\Files;

class Path
{
	public static function join(string... $args): string
	{
		$parts = array_filter($args, static fn (string $arg) => $arg !== '');
		$path = implode(DIRECTORY_SEPARATOR, $parts);
		return preg_replace('#' . DIRECTORY_SEPARATOR . '+#', DIRECTORY_SEPARATOR, $path);
	}
}
