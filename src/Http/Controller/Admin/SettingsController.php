<?php namespace BehaviorLab\StructDataArticleExtension\Http\Controller\Admin;

use BehaviorLab\StructDataArticleExtension\Setting\Form\SettingFormBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use BehaviorLab\StructDataModule\Extension\Contract\ExtensionRepositoryInterface;
use Symfony\Component\HttpFoundation\Response;

class SettingsController extends AdminController
{

    /**
     * Create a new entry.
     *
     * @param SettingFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(SettingFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param SettingFormBuilder $form
     * @param ExtensionRepositoryInterface $dataRepository
     * @param $id
     * @return Response
     */
    public function edit(SettingFormBuilder $form, ExtensionRepositoryInterface $dataRepository, $id)
    {
        /* @var ExtensionRepositoryInterface $entry */
        if (!$entry = $dataRepository->find($id)) {
            abort(404);
        }

        $sectionSettingModelName = str_replace('Data\DataModel', 'Setting\SettingModel', $entry->extension->model);
        $sectionSettingModel = app($sectionSettingModelName);
        $sectionSettings = $sectionSettingModel->find($id);

        if (!$sectionSettings) {
            $sectionSettingModel->create([
                'id' => $id
            ]);
        }

//        $form->make($entry);
//
//        dd($form->getForm());
//        if (!$form->getForm()->getResponse()) {
//            $this->dispatchNow(new SetFormResponse($this));
//        }
        $form->setOption('title', 'Default values for: ' . trans($entry->title));
        $form->setOption('description', $entry->description);
        return $form->render($id);
    }
}
