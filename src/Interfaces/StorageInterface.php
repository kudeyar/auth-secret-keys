<?php

namespace harlam\Auth\Secrets\Interfaces;

use harlam\Auth\Secrets\Entity\KeyEntity;
use harlam\Auth\Secrets\Exception\StorageException;

/**
 * Interface StorageInterface
 * @package harlam\Security\Auth\Interfaces
 */
interface StorageInterface
{
    /**
     * @param KeyEntity $entity
     * @return KeyEntity
     * @throws StorageException
     */
    public function create(KeyEntity $entity): KeyEntity;

    /**
     * @param $uid
     * @return KeyEntity|null
     */
    public function find($uid): ?KeyEntity;

    /**
     * @param KeyEntity $entity
     * @return KeyEntity
     * @throws StorageException
     */
    public function update(KeyEntity $entity): KeyEntity;

    /**
     * @param string $owner
     * @return KeyEntity|null
     */
    public function getLastKey(string $owner): ?KeyEntity;
}