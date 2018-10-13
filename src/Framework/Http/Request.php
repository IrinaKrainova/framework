<?php

namespace Framework\Http;

class Request{
	public function getQueryParams(){
		return $_GET;
	}

	public function getParsedBody(){
		return $_POST ?: null;
	}
}