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

            Flash::success(Lang::get('al3xtig3r.blogutils::lang.components.proposals.sent-success'));
        }
        else
            Flash::error(Lang::get('al3xtig3r.blogutils::lang.components.proposals.missing-error'));
    }
}
