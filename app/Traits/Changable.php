<?php

/**
 * Changable
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Traits;

trait Changable
{
    private array $changable;

    /**
     * Iniciated the changes process
     */
    public function computedChanges(): void
    {
        $this->changable = $this->getChangableProperty();
    }

    /**
     * Generate the changes.
     */
    public function getChanges(): array
    {
        $changes = $this->getChangableProperty();
        $result = [];
        foreach ($changes as $key => $value) {
            if ($value !== $this->changable[$key]) {
                $result[] = [
                    'field' => $key,
                    'old' => $this->changable[$key],
                    'new' => $value
                ];
            }
        }

        return $result;
    }
}