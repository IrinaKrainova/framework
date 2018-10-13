<?php

namespace Tests\Framework\Http; 

use Framework\Http\Request; 
use PHPUnit\Framework\TestCase; 

class RequestTest extends TestCase{ 
public function testEmpty(){ 
$_GET=[]; 
$_POST=[]; 

$request=new Request(); 

self::assertEquals([],$request->getQueryParams()); 
self::assertNull($request->getParsedBody()); 
} 

public function testQueryParams(){ 

} 