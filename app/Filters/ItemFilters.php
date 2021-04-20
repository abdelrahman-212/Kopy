<?php  namespace App\Filters;

class ItemFilters extends QueryFilter
{
    public function category($value = null) {
        if ($value != null and $value !='all')
            return $this->builder->where('category_id', $value);
    }
}
