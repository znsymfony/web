<?php

namespace ZnSymfony\Web\Domain\Base;

use ZnSymfony\Web\Domain\Base\BaseWebApp;

abstract class BaseAdminApp extends BaseWebApp
{

    public function appName(): string
    {
        return 'admin';
    }

    public function import(): array
    {
        return ['i18next', 'container', 'rbac', 'symfonyAdmin'];
    }
}
