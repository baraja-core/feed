<?php

declare(strict_types=1);

namespace Mk\Feed\Generators\Custom;


class Image
{
	private string $url;


	public function __construct(string $url)
	{
		$this->url = $url;
	}


	public function getUrl(): string
	{
		return $this->url;
	}
}
