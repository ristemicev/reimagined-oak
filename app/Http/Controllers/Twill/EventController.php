<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\DatePicker;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use A17\Twill\Services\Forms\Fields\Medias;

class EventController extends BaseModuleController
{
    protected $moduleName = 'events';
    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
        $this->disablePermalink(true);
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);

        $form->add(
            Input::make()->name('title')->label('Title')
        );

        $form->add(
            Medias::make()->name('event')->label('Image')
        );

        $form->add(
            DatePicker::make()->name('event_date')->label('Event Date')->time24h(true)
        );

        $form->add(
            Wysiwyg::make()->name('description')->label('Description')
        );

        $form->add(
            Input::make()->name('event_type')->label('Event Type')
        );

        $form->add(
            Input::make()->name('event_location')->label('Event Location')
        );

        $form->add(
            Input::make()->name('event_organizer')->label('Event Organizer')
        );

        return $form;
    }

    /**
     * This is an example and can be removed if no modifications are needed to the table.
     */
    protected function additionalIndexTableColumns(): TableColumns
    {
        $table = parent::additionalIndexTableColumns();

        $table->add(
            Text::make()->field('description')->title('Description')
        );

        return $table;
    }
}
