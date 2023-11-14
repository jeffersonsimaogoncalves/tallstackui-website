<?php

namespace App\Enums\Examples\Form;

class Textarea
{
    public const BASIC = <<<'HTML'
    <x-textarea />
    HTML;

    public const RESIZE = <<<'HTML'
    <x-textarea resize />
    HTML;

    public const AUTO_RESIZE = <<<'HTML'
    <x-textarea auto-resize />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-textarea label="Name" hint="Insert your name" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('textarea')
        ->block('block', 'classes');
    HTML;
}
