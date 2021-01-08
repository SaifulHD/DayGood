<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
	protected $table = 'pembayaran';
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'id_trans', 'bayar'
	];
	protected $returnType = 'App\Entities\Pembayaran';
	protected $useTimestamps = false;
}
