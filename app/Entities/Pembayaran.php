<?php

namespace App\Entities;

use CodeIgniter\Entity;

class Pembayaran extends Entity
{
  public function setPembayaran($file)
  {
    $fileName = $file->getRandomName();
    $writePath = './uploads';
    $file->move($writePath, $fileName);
    $this->attributes['pembayaran'] = $fileName;
    return $this;
  }
}
