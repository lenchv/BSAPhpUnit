<?php
declare(strict_types=1);

namespace BSA;

use BSA\Contracts\IClosable;

class Security
{
    private $closableEntities = [];

    public function addClosable(IClosable $entity) : Security
    {
        $this->closableEntities[] = $entity;

        return $this;
    }

    public function securityOn()
    {
        foreach($this->closableEntities as $entity) {
            $entity->close();
        }
    }
}
