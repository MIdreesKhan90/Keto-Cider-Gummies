<?php

namespace app\models\Forms;


use Yii;
use yii\base\Model;
use yii\helpers\Url;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $body;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'body'], 'required'],
            [['name', 'body'], 'string'],
            // email has to be a valid email address
            [['phone'], 'number'],
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha', 'captchaAction' => '/store/contact/captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }

    public function contactform() {
        if ($this->validate()) {
            $email         = $this->email;
            $phone = filter_var($this->phone, FILTER_SANITIZE_STRING);
            $field_message = trim($this->body);
            $field_message = filter_var($field_message,
                                        FILTER_SANITIZE_STRING);
            $field_name    = filter_var(trim($this->name),
                                        FILTER_SANITIZE_STRING);
            // @realEmail support@totalwellnessllc.net
            $to       = 'support@ultra-vitamins.com';
            $from     = $this->email;
            $subject  = "Ultra Vitamins Support | " . $field_name;
            $message  = "Message from $field_name :\n";
            $message  .= "$from | $phone" . "\n\n";
            $message  .= $field_message . "\n\n";
            $headers  = "MIME-Version: 1.0rn";
            $headers  .= "Content-type: text/html; charset=iso-8859-1rn";
            $headers  .= "From: $from\r\n";
            $sendMail = @mail($to,
                             $subject,
                             $message,
                             $headers);

            if(isset( $_SESSION['contact']['sent_at'])){
                if((time() - $_SESSION['contact']['sent_at']) < 24 * 60 * 60 )
                Yii::$app->session->setFlash('danger', 'You recently send message, please wait for response');
                return false;
            }


            if ($sendMail) {
                $_SESSION['contact']['sent_at'] = time();
                Yii::$app->session->setFlash('success', ' Thank you for contacting us. We will respond to you as soon as possible.');
                return TRUE;
            } else {
                Yii::$app->session->setFlash('danger', 'Your message, didnt reach us, pleaase try again later');
                return false;
            }


        }
        Yii::$app->session->setFlash('danger', 'Error');
        return false;

    }
}
