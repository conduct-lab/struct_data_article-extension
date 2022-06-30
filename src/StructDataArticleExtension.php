<?php namespace ConductLab\StructDataArticleExtension;

use ConductLab\StructDataArticleExtension\Data\DataModel;
use ConductLab\StructDataModule\StructuredDatum\StructuredDatumExtension;

class StructDataArticleExtension extends StructuredDatumExtension
{
    /**
     * The extension category.
     *
     * @var string
     */
    protected $category = 'content';

    /**
     * This extension provides a section for the sections module.
     *
     * @var string
     */
    protected $provides = 'conduct_lab.module.struct_data::type.article';

    /**
     * The section view.
     *
     * @var string
     */
    protected $view = 'conduct_lab.extension.struct_data_article::content';

    /**
     * The section model.
     *
     * @var string
     */
    protected $model = DataModel::class;

}
