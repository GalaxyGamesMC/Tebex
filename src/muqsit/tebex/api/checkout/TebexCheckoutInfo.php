<?php

declare(strict_types=1);

namespace muqsit\tebex\api\checkout;

use muqsit\tebex\api\TebexResponse;

final class TebexCheckoutInfo implements TebexResponse{

	private string $url;
	private string $expires;

	public function __construct(string $url, string $expires){
		$this->url = $url;
		$this->expires = $expires;
	}

	public function getUrl() : string{
		return $this->url;
	}

	public function getExpires() : string{
		return $this->expires;
	}
}