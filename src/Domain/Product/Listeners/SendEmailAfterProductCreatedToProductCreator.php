<?php

namespace Domain\Product\Listeners;

use Throwable;
use Domain\Product\Events\ProductCreated;

class SendEmailAfterProductCreatedToProductCreator
{
	public function __construct() {}
	
	public function handle(ProductCreated $event): void
	{
		// TODO: handle the send email logic
	}
	
	public function failed(ProductCreated $event, Throwable $exception): void
	{
		// TODO: handle failure logic
	}
}
