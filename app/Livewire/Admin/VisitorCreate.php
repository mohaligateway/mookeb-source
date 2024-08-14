<?php

namespace App\Livewire\Admin;

use App\Models\Visitor;
use Livewire\Attributes\Validate;
use Livewire\Component;

class VisitorCreate extends Component
{

    #[Validate('nullable|persian_alpha')] 
    public $firstname;
    
    #[Validate('nullable|persian_alpha')]
    public $lastname;

    #[Validate('nullable|ir_mobile')]
    public $mobile;

    #[Validate('nullable|ir_national_code')]
    public $national_code;

    public $passport_no;

    #[Validate('nullable|persian_alpha')]
    public $city;

    #[Validate('required|numeric')]
    public $tent_no;

    #[Validate('required|numeric')]
    public $row_no;

    #[Validate('required|persian_alpha')]
    public $gender;

    public $nationalCodeCounter = 0;

    public $mobileCounter = 0;

    public $passportNoCounter = 0;



    public function submit()
    {
        $this->validate();

        Visitor::create([
            'firstname' => $this->firstname, 
            'lastname' => $this->lastname, 
            'mobile' => $this->mobile, 
            'national_code' => $this->national_code, 
            'passport_no' => $this->passport_no, 
            'city' => $this->city, 
            'tent_no' => $this->tent_no . '/' . $this->row_no,
            'gender' => $this->gender,
            'user_id' => auth()->user()->id
        ]);

        $this->dispatch('visitor-register');

        $this->firstname = '';
        
        $this->lastname = '';
    
        $this->mobile = '';
    
        $this->national_code = '';
    
        $this->passport_no = '';
    
        $this->city = '';
    
        $this->tent_no = '';
    
        $this->row_no = '';
    
        $this->gender = '';
    
        $this->nationalCodeCounter = 0;
    
        $this->mobileCounter = 0;
    
        $this->passportNoCounter = 0;


    }

    public function updated($prop)
    {
        if($prop === 'national_code') {
            $this->nationalCodeCounter = Visitor::whereNationalCode($this->national_code)->count();
        }

        if($prop === 'mobile') {
            $this->mobileCounter = Visitor::whereMobile($this->mobile)->count();
        }

        if($prop === 'passport_no') {
            $this->passportNoCounter = Visitor::wherePassportNo($this->passport_no)->count();
        }

    }

    public function render()
    {
        return view('livewire.admin.visitor-create');
    }
}
