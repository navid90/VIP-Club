<?php
/**
 * Created by PhpStorm.
 * User:
 * Date:
 * Time:
 */

namespace App\Datatables;

use App\Http\Schemas\UserSchema;
use App\Models\User;
use Yajra\DataTables\Services\DataTable;

class UserDatatable extends DataTable
{
    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function model(User $model)
    {
        return $model->orderBy('id', 'desc');
    }
    /**
     * * Build DataTable class.
     *
     * @param mixed $model Results from model() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($model)
    {

        return datatables($model) ->editColumn('id', function($row){
            return $row['id'];
        })
            ->editColumn('action', function($row){
                return
                    '<a class="fa fa-edit text-navy dt-btn action-loader"  title="'.trans('letter.edit').'" style="color: #1c84c6" href='.route('users.edit', ['id' => $row->id]).'></a>';
            })
            ->rawColumns(['action'])
            ;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
//            ->addAction(['id'],1)
//            ->addAction(['title' => trans('letter.user_id')],1)
//            ->addAction(['title' => trans('letter.configuration')])
//            ->parameters($this->getBuilderParameters())
            ;
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        $userInputs = (new UserSchema())->userInputs();
        $userInputsName = [];
        foreach ($userInputs as $input)
        {
            isset($input['show_index']) && $input['show_index'] ? $userInputsName [] =   $input['name'] : null;
        }
        $userInputsName[$input['name']]['title']  = trans('letter.'.$input['name']);
        $userInputsName[$input['name']]['searchable']  = isset($input['searchable']) && $input['searchable'] ? $input['searchable'] :  null;
        unset($userInputsName[null]);
        return $userInputsName;
//        return ['id'];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */


//    protected function getBuilderParameters()
//    {
//        return [
//            'dom' => 'frtip',
//            'scrollX' => false,
            //'buttons' => [],
//            'pageLength' => 10,
            //'order' => [[5, 'desc']],
            //'responsive' => true,
//            'language' => [
//                "sProcessing" => "درحال پردازش...",
//                "sLengthMenu" => "نمایش محتویات _MENU_",
//                "sZeroRecords" => "موردی یافت نشد",
//                "sInfo" => "نمایش _START_ تا _END_ از مجموع _TOTAL_ مورد",
//                "sInfoEmpty" => "تهی",
//                "sInfoFiltered" => "(فیلتر شده از مجموع _MAX_ مورد)",
//                "sInfoPostFix" => "",
//                "sSearch" => "Search:",
//                "sUrl" => "",
//                "oPaginate" => [
//                    "sFirst" => "ابتدا",
//                    "sPrevious" => "قبلی",
//                    "sNext" => "بعدی",
//                    "sLast" => "انتها"
//                ]
//            ]
//        ];
//    }
}
