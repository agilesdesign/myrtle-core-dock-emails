<?php

namespace Myrtle\Core\Docks;

class EmailsDock extends Dock
{
    public $description = 'Emails system';

    public function configPaths()
    {
        return [
            'docks.' . self::class => dirname(__DIR__, 3) . '/config/docks/emails.php',
        ];
    }

    public function migrationPaths()
    {
        return [
            dirname(__DIR__, 3) . '/database/migrations',
        ];
    }
}
