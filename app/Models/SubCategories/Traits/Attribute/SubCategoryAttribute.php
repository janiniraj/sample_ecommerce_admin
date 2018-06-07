<?php

namespace App\Models\SubCategories\Traits\Attribute;

/**
 * Class SubCategoryAttribute.
 */
trait SubCategoryAttribute
{
    /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
        if(access()->allow('edit-subcategory'))
        {
            return '<a class="btn btn-flat btn-default" href="'.route('admin.subcategories.edit', $this).'">
                    <i data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.edit').'" class="fa fa-pencil"></i>
                </a>';
        }
    }

    /**
     * @return string
     */
    public function getDeleteButtonAttribute()
    {
        if(access()->allow('delete-subcategory'))
        {
            return '<a class="btn btn-flat btn-default" href="'.route('admin.subcategories.destroy', $this).'" data-method="delete"
                    data-trans-button-cancel="'.trans('buttons.general.cancel').'"
                    data-trans-button-confirm="'.trans('buttons.general.crud.delete').'"
                    data-trans-title="'.trans('strings.backend.general.are_you_sure').'">
                        <i data-toggle="tooltip" data-placement="top" title="Delete" class="fa fa-trash"></i>
                </a>';
        }
    }

    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">
                    ' .$this->getEditButtonAttribute(). '
                    ' .$this->getDeleteButtonAttribute(). '
                </div>';
    }
}
