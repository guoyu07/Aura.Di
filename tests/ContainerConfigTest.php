<?php
namespace Aura\Di\_Config;

class ContainerConfigTest extends AbstractContainerTest
{
    protected function getConfigClasses()
    {
        return [
            'Aura\Di\FakeLibraryConfig',
            'Aura\Di\FakeProjectConfig',
        ];
    }

    protected function getAutoResolve()
    {
        return false;
    }

    public function provideGet()
    {
        return [
            ['library_service', 'StdClass'],
            ['project_service', 'StdClass'],
        ];
    }

    public function provideNewInstance()
    {
        return [
            ['StdClass'],
        ];
    }
}
