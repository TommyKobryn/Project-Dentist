<?php namespace Atomiccode\Contact\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Lang;
use App;
use Mail;
use ValidationException;
use Redirect;
use Symfony\Component\HttpFoundation\Request;
use ApplicationException;
use System\Models\MailSetting;
use System\Models\MailTemplate;
use Validator;

class Form extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'form Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onFormSent(){
        // Set a global $_POST variable
        $post = post();


        $params = array(
            'form_name' => $post['name'],
            'form_email' => $post['email'],
            'form_message' => $post['message']
            );

        $sender = MailSetting::get('sender_name');
        $sender_mail = MailSetting::get('sender_email');

        // Email to site owner
        Mail::send('formTemplate', $params, function ($message) use ($post) {
            $message->from($post['email'], $post['name']);
            $message->to(MailSetting::get('sender_email'), MailSetting::get('sender_name'));
            $message->subject($this->subject);
        });

        // Confirmation send to user
        Mail::send('confirmTemplate', $params, function ($message) use ($post) {
            $message->from(MailSetting::get('sender_email'), MailSetting::get('sender_name'));
            $message->to($post['email'], $post['name']);
            $message->subject($this->subject);
        });
          $this->page["result"] = true;
    }
}
