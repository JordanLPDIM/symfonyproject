<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJ2uZ4Pc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJ2uZ4Pc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJ2uZ4Pc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJ2uZ4Pc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJ2uZ4Pc\App_KernelDevDebugContainer([
    'container.build_hash' => 'J2uZ4Pc',
    'container.build_id' => '0ff8c6e7',
    'container.build_time' => 1677441437,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJ2uZ4Pc');
