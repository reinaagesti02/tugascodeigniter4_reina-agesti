<?php namespace App\Models;

use CodeIgniter\Model;

class DaerahModel extends Model
{
    /**
	 * table name
	 */
	protected $table = "daerah";
	
	/**
	 * allowed field
	 */
	protected $allowedFields = [
	    'nama_daerah',
		'status'
	];
	
	 public function getDaerah()
	{
	    return $this->findAll();
	}
}