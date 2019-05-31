<?php namespace Al3xTig3r\BlogUtils\Components;

use Cms\Classes\ComponentBase;

use Flash;
use Input;
use Lang;
use Mail;

use Al3xTig3r\BlogUtils\Models\Proposal;

class Proposals extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => Lang::get('al3xtig3r.blogutils::lang.components.proposals.name'),
            'description' => Lang::get('al3xtig3r.blogutils::lang.components.proposals.description')
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onPropose()
    {
        if(Input::get('proposal-input')){
            $newProposal = new Proposal();
            $newProposal->name = Input::get('name-input');
            $newProposal->email = Input::get('email-input');
            $newProposal->proposal = Input::get('proposal-input');
            $newProposal->save();

            $vars = [
                'name' => $newProposal->name,
                'email' => $newProposal->email,
                'proposal' => $newProposal->question
            ];

            // Mail::send('al3xtig3r.questions::new-question', $vars, function($message) use ($newProposal) {

            //     $message->to('info@alessiovietri.it', 'AV | Digital Solutions');
            //     $message->subject('Nuova proposta');

            // });

            Flash::success(Lang::get('al3xtig3r.blogutils::lang.components.proposals.sent-success'));

            // TODO: prima di pubblicarlo, inserire:
            // - Settings
            // - Selezione modello email domande nelle Settings
            // - Selezione modello email risposte nelle Settings
            // - default del form svincolato dal tema (semplice)
            // - Traduzione controller vari
            // - Dati testuali tradotti (descrizione, nome ecc)
            // - Aggiungere descrizione metodo
            // - Cambiare if con validazione
            // - Aggiungere invio email quando rispondo
            // - Nella pagina con columns mettere un filtro: "non risposte" -> come "ldv non generata" su TP
        }
        else
            Flash::error(Lang::get('al3xtig3r.blogutils::lang.components.proposals.missing-error'));
    }
}
