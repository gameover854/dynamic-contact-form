<?php

namespace VCComponent\Laravel\ConfigContact\Entites;

use Illuminate\Database\Eloquent\Model;
use VCComponent\Laravel\ConfigContact\Entites\ContactFormInputItem;
use VCComponent\Laravel\ConfigContact\Entites\ContactFormInputValidation;
use VCComponent\Laravel\ConfigContact\Entites\ContactForm;
class ContactFormInput extends Model
{
    protected $fillable = [
        'id',
        'contact_form_id',
        'label',
        'slug',
        'order',
        'type_input',
        'note',
        'placeholder',
    ];

    public function contactFormInputItems()
    {
        return $this->hasMany(ContactFormInputItem::class);
    }
    public function contactFormInputValidations()
    {
        return $this->hasMany(ContactFormInputValidation::class);
    }
    public function contactForm()
    {
        return $this->belongsTo(ContactForm::class);
    }
    public function ableToUse($user)
    {
        return true;
    }
}
