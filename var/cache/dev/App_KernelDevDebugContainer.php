<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSdROxOi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSdROxOi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSdROxOi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSdROxOi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSdROxOi\App_KernelDevDebugContainer([
    'container.build_hash' => 'SdROxOi',
    'container.build_id' => '1815525a',
    'container.build_time' => 1678408619,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSdROxOi');
