<?php

return [
    'name' => 'Blog Utils',
    'description' => 'Some useful tools for blogging',
    'proposals' => [
        'single' => 'Proposal',
        'multiple' => 'Proposals',
        'columns' => [
            'name' => 'Name',
            'icon' => 'Icon',
            'works' => 'Works'
        ],
        'fields' => [
            'name' => 'Name',
            'icon' => 'Icon',
            'icon_comment' => 'Insert only the name of the icon (eg. for "icon-user" insert "user"). Icons list: https://octobercms.com/docs/ui/icon'
        ],
        'toolbar' => [
            'new' => 'New proposal',
            'delete_selected' => 'Delete selected',
            'confirm_deletion' => 'Are you sure you want to delete the selected Proposals?'
        ],
        'create' => [
            'title' => 'Create proposal',
            'create' => 'Create',
            'creating' => 'Creating proposal...',
            'create_close' => 'Create and close',
            'cancel' => 'or <a href=":url">Cancel</a>',
            'return' => 'Return to proposals list'
        ],
        'update' => [
            'title' => 'Edit proposal',
            'save' => '<u>S</u>ave',
            'saving' => 'Saving proposal...',
            'save_close' => 'Save and close',
            'cancel' => 'or <a href=":url">Cancel</a>',
            'confirm_deletion' => 'Delete this Proposal?',
            'deleting' => 'Deleting proposal...',
            'return' => 'Return to proposals list'
        ],
        'preview' => [
            'title' => 'Preview proposal',
            'return' => 'Return to proposals list'
        ],
        'list' => [
            'title' => 'Manage Proposals'
        ]
    ],
    'components' => [
        'lastpost' => [
            'name' => 'Last Post',
            'description' => 'Show your last post wherever you want!'
        ],
        'prevnextposts' => [
            'name' => 'Prev and Next Posts',
            'description' => 'Show the previous and the next posts for each post'
        ],
        'proposals' => [
            'name' => 'Proposals',
            'description' => 'Let users send you proposals for your blog',
            'columns' => [
                'name' => 'Name',
                'email' => 'Email',
                'proposal' => 'Proposal',
                'used' => 'Used?'
            ],
            'fields' => [
                'name' => 'Name',
                'email' => 'Email',
                'proposal' => 'Proposal',
                'used' => 'Used'
            ],
            'form' => [
                'name' => 'Name (optional)',
                'email' => 'Email (optional)',
                'proposal' => 'What do you want to read?',
                'submit' => 'Submit',
                'sending' => 'Sending your proposal...',
                'sent-success' => 'Thanks for your proposal! Keep up to date and you\'ll probably read a post about it! :D',
                'missing-error' => 'Insert all required data, please'
            ]
        ]
    ]
];
