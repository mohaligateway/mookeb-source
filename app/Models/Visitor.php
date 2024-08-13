<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Visitor extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname', 'lastname', 'mobile', 'national_code', 
        'passport_no', 'city', 'exited_at', 'leaved_at', 'gender', 'user_id',
        'country', 'tent_no'
    ];

    /**
     * search on users table
     *
     * @param object $query
     * @param string $keywords
     * @param array $columns
     * @return void
     */
    public function scopeTableSearch(object $query, string $keywords, array $columns)
    {
        if(!empty($keywords)) {
            if(in_array('fullname', $columns)) {
                array_splice($columns, array_search('fullname', $columns ), 1);
                if(str_contains($keywords, ' ')) {
                    $query->whereRaw("concat(firstname, ' ', lastname) like '%" . $keywords . "%' ");
                }
            }

            foreach($columns as $column) {
                $query->orWhere($column, 'LIKE', '%' . $keywords .'%'); 
            }
        }
        
    }

            /**
     * filter the users by its active
     *
     * @param object $query
     * @param string $level
     * @return object
     */
    public function scopeSearchTent($query, string $no) 
    {
        $query->where('tent_no', 'LIKE', '%' . $no .'%');
    }
}
