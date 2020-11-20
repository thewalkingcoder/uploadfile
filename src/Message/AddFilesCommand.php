<?php

namespace App\Message;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

final class AddFilesCommand
{
    /**
     * @var array<UploadedFile>

     * @Assert\NotBlank(message="Veuillez sélectionner un fichier.")
     * @Assert\All({
     *     @Assert\File(
     *         maxSize = "500k",
     *         maxSizeMessage = "Custom message max size.",
     *         uploadIniSizeErrorMessage = "Custom message max size ini",
     *         uploadFormSizeErrorMessage = "Custom message max size form",
     *     )
     * })
     */
    public $files;
}
