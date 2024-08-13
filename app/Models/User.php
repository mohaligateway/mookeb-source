<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'mobile', 'national_code', 'qrcode', 'password', 'is_admin'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

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
}
