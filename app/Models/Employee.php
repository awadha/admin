<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['image_path'];
    public function getImagePathAttribute()
    {
        return asset('uploads/user_images/' . $this->image);

    }//end of get image path

   /* public function calculateOvertime() {
        return $this->overtime * $this->overtimeRate;
    }
    public function calculateAbbsent() {
        return $this->abbsent * $this->abbsentRate;
    }
    public function calculateTotalSalary() {
        return
            ($this->salary - ($this->salary * $this->tax)) + $this->allowances +
            ($this->salary - ($this->salary * $this->insurances)) +
            $this->calculateOvertime() - $this->calculateAbbsent() - $this->delay;
    }*/

}
