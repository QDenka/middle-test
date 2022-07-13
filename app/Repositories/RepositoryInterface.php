<?php

namespace App\Repositories;

/**
 * Интерфейс репозиториев
 */
interface RepositoryInterface
{
    /**
     * Сохранить репозиторий
     *
     * @param array $request
     * @return collection
     */
    public function save(array $request);

    /**
     * Получить текущую коллекцию репозитория
     *
     * @return void
     */
    public function get();
}
