<?php

return [
    'name' => 'Blog Utils',
    'description' => 'Alcuni strumenti utili per il blogging',
    'proposals' => [
        'single' => 'Proposta',
        'multiple' => 'Proposte',
        'columns' => [
            'name' => 'Nome',
            'works' => 'Lavori'
        ],
        'fields' => [
            'name' => 'Nome',
            'icon_comment' => 'Inserisci solo il nome dell\'icona (es. per "icon-user" inserisci "user"). Lista icone: https://octobercms.com/docs/ui/icon'
        ],
        'toolbar' => [
            'new' => 'Nuova proposta',
            'delete_selected' => 'Elimina selezionate',
            'confirm_deletion' => 'Sei sicuro di voler eliminare le Proposte selezionate?'
        ],
        'create' => [
            'title' => 'Crea proposta',
            'create' => 'Crea',
            'creating' => 'Creazione proposta...',
            'create_close' => 'Crea e chiudi',
            'cancel' => 'o <a href=":url">Annulla</a>',
            'return' => 'Ritorna alla lista delle proposte'
        ],
        'update' => [
            'title' => 'Modifica proposta',
            'save' => '<u>S</u>alva',
            'saving' => 'Salvataggio proposta...',
            'save_close' => 'Salva e chiudi',
            'cancel' => 'o <a href=":url">Annulla</a>',
            'confirm_deletion' => 'Eliminare questa Proposta?',
            'deleting' => 'Eliminazione proposta...',
            'return' => 'Ritorna alla lista delle proposte'
        ],
        'preview' => [
            'title' => 'Visualizza proposta',
            'return' => 'Ritorna alla lista delle proposte'
        ],
        'list' => [
            'title' => 'Gestisci Proposte'
        ]
    ],
    'components' => [
        'lastpost' => [
            'name' => 'Ultimo Articolo',
            'description' => 'Mostra il tuo ultimo articolo ovunque tu voglia!'
        ],
        'prevnextposts' => [
            'name' => 'Articolo Precedente e Successivo',
            'description' => 'Mostra l\'articolo precedente ed il successivo per ogni post'
        ],
        'proposals' => [
            'name' => 'Proposte',
            'description' => 'Consenti agli utenti di inviarti proposte per il tuo blog',
            'columns' => [
                'name' => 'Nome',
                'email' => 'Email',
                'proposal' => 'Proposta',
                'used' => 'Usata?'
            ],
            'fields' => [
                'name' => 'Nome',
                'email' => 'Email',
                'proposal' => 'Proposta',
                'used' => 'Usata'
            ],
            'form' => [
                'name' => 'Nome (opzionale)',
                'email' => 'Email (opzionale)',
                'proposal' => 'Cosa vuoi leggere?',
                'submit' => 'Invia',
                'sending' => 'Sto inviando la tua proposta...',
                'sent-success' => 'Grazie per la tua proposta! Tieniti aggiornato e probabilmente leggerai un articolo al riguardo! :D',
                'missing-error' => 'Inserisci tutti i dati obbligatori, per favore'
            ]
        ]
    ]
];
