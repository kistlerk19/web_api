<?php

namespace App\Repositories\Contracts;

interface UserRepositoryContract
{
  public function registerUser(array $data);
  public function activateUser(int $userId);
  public function checkIfUserExistsByEmail(string $email);
  public function getUserByEmail(string $email);
}