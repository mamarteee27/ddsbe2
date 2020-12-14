<?php
 namespace App\Models;
 use Illuminate\Database\Eloquent\Model;
 
 class UserJob extends Model{
     
    protected $table = 'tbluserjob';


    protected $fillable = [
        'job'
    ];
    public $timestamps = false;

    protected $primarykey = 'jobid';
 }