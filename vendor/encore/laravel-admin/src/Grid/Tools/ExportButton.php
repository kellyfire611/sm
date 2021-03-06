<?php

namespace Encore\Admin\Grid\Tools;

use Encore\Admin\Admin;
use Encore\Admin\Grid;

class ExportButton extends AbstractTool
{
    /**
     * Create a new Export button instance.
     *
     * @param Grid $grid
     */
    public function __construct(Grid $grid)
    {
        $this->grid = $grid;
    }

    /**
     * Set up script for export button.
     */
    protected function setUpScripts()
    {
        $script = <<<'SCRIPT'

$('.export-selected').click(function (e) {
    e.preventDefault();
    
    var rows = selectedRows().join(',');
    if (!rows) {
        return false;
    }
    
    var href = $(this).attr('href').replace('__rows__', rows);
    location.href = href;
});

SCRIPT;

        Admin::script($script);
    }

    /**
     * Render Export button.
     *
     * @return string
     */
    public function render()
    {
        if (!$this->grid->allowExport()) {
            return '';
        }

        $this->setUpScripts();

        $export = trans('admin.export');
        $all = trans('admin.all');
        $currentPage = trans('admin.current_page');
        $selectedRows = trans('admin.selected_rows');

        $page = request('page', 1);

        return <<<EOT

<div class="btn-group pull-right" role="group" style="margin-right: 10px">
    <button type="button" class="btn btn-sm waves-effect btn-twitter dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        {$export}
        <span class="caret"></span>
        <span class="sr-only"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="{$this->grid->exportUrl('all')}" target="_blank">{$all}</a></li>
        <li><a href="{$this->grid->exportUrl('page', $page)}" target="_blank">{$currentPage}</a></li>
        <li><a href="{$this->grid->exportUrl('selected', '__rows__')}" target="_blank" class='export-selected'>{$selectedRows}</a></li>
    </ul>
</div>
&nbsp;&nbsp;

EOT;
    }
}
