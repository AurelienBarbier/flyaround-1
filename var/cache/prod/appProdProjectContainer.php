<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerI8xkqjo\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerI8xkqjo/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerI8xkqjo.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerI8xkqjo\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerI8xkqjo\appProdProjectContainer(array(
    'container.build_hash' => 'I8xkqjo',
    'container.build_id' => 'd0078bb3',
    'container.build_time' => 1526041950,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerI8xkqjo');