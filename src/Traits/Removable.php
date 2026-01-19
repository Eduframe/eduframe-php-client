<?php

namespace Eduframe\Traits;

trait Removable
{
    use BaseTrait;

    /**
     * @throws \Eduframe\Exceptions\ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete(): array|null {
        return $this->connection()->delete($this->getEndpoint() . '/' . urlencode($this->id));
    }
}
