<?php namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    /**
	 * table name
	 */
	protected $table = "kategori";
	
	/**
	 * allowed field
	 */
	protected $allowedFields = [
		'nama_kategori',
		'status'
	];
	
	 public function getDaerah()
	{
	    return $this->findAll();
	}
}