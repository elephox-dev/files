<?php
declare(strict_types=1);

namespace Elephox\Files;

use JetBrains\PhpStorm\Pure;
use Throwable;

class UnreadableFileException extends FileException
{
	#[Pure]
	public function __construct(string $path, int $code = 0, ?Throwable $previous = null)
	{
		parent::__construct("Unable to read file at $path", $code, $previous);
	}
}
