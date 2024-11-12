<?php

namespace App\Modules\Authentication\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tbl_users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'first_name',
        'middle_name',
        'last_name',
        'primary_email_address',
        'secondary_email_address',
        'password',
        'dob',
        'national_id_passport',
        'primary_phone_number',
        'secondary_phone_number',
        'user_role_id',
        'country_of_residence_id',
        'county_of_residence_id',
        'sub_county_of_residence_id',
        'status',
        'profile_photo',
        'newsletter',
    ];

    protected bool $allowEmptyInserts = false;

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];
}
