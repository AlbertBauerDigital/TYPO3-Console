<?php
return [
    'commands' => [
        'commandreference:render' => [
            'class' => \Typo3Console\CreateReferenceCommand\Command\CommandReferenceRenderCommand::class,
            'runLevel' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE,
            'vendor' => 'typo3_console',
        ],
    ],
];
