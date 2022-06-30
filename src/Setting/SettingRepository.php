<?php namespace ConductLab\StructDataArticleExtension\Setting;

use ConductLab\StructDataArticleExtension\Setting\Contract\SettingRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class SettingRepository extends EntryRepository implements SettingRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var SettingModel
     */
    protected $model;

    /**
     * Create a new SettingRepository instance.
     *
     * @param SettingModel $model
     */
    public function __construct(SettingModel $model)
    {
        $this->model = $model;
    }
}
