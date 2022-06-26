<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContentSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    protected array $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('iletisim@tirnakicindedergi.com', 'tırnak içinde dergi')
            ->subject('yeni içerik gönderildi | '.$this->content['subject'])
            ->attach($this->content['file']->getRealPath(),
                [
                    'as' => $this->content['file']->getClientOriginalName(),
                    'mime' => $this->content['file']->getClientMimeType(),
                ])
            ->markdown('emails.contents.submitted', $this->content);
    }
}
