<?php

/*
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Apigee\Edge\Api\Monetization\Controller;

use Apigee\Edge\Controller\BaseEndpointAwareControllerTrait;
use Psr\Http\Message\UriInterface;

/**
 * Trait EntityListingControllerAwareTrait.
 *
 * @see \Apigee\Edge\Api\Monetization\Controller\EntityListingControllerInterface
 */
trait EntityListingControllerAwareTrait
{
    use BaseEndpointAwareControllerTrait;

    /**
     * @inheritdoc
     */
    public function getEntities(): array
    {
        return $this->listEntities($this->getBaseEndpointUri());
    }

    abstract protected function listEntities(UriInterface $uri): array;
}
