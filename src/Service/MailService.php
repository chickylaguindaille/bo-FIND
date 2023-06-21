<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

class MailService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmail($subject, $recipient, $name, $action)
    {
        $email = (new TemplatedEmail())
            ->from('folkloreisnotdead.application@gmail.com')
            ->to($recipient)
            ->subject($subject)
            ->htmlTemplate("Mails/mailcontent.html.twig")
            ->context([
                'name' => $name,
                'action' => $action
            ]);

        $this->mailer->send($email);
    }
}

