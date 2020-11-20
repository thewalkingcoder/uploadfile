<?php

namespace App\MessageHandler;

use App\Message\AddFilesCommand;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

final class AddFilesCommandHandler implements MessageHandlerInterface
{
    public function __invoke(AddFilesCommand $message)
    {
        // do something with your message
    }
}
