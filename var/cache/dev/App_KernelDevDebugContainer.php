<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPw6w2eP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPw6w2eP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPw6w2eP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPw6w2eP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPw6w2eP\App_KernelDevDebugContainer([
    'container.build_hash' => 'Pw6w2eP',
    'container.build_id' => '61801bba',
    'container.build_time' => 1739355360,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPw6w2eP');
