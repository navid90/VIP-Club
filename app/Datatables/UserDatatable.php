<?php
/**
 * Created by PhpStorm.
 * User:
 * Date:
 * Time:
 */

namespace App\Datatables;

use App\Models\User;
use Yajra\DataTables\Services\DataTable;

class UserDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->editColumn('id', function($row){
                return $row->id;
            })
            ->editColumn('firstname', function($row){
                return $row->first_name;
            })
            ->editColumn('email', function($row){
                return $row->email;
            })
            ->editColumn('mobile', function($row){
                return $row->mobile;
            })
            ->editColumn('user_type', function($row){
                return $row->user_type ==1 ? 'ادمین' : 'مشتری';
            })
            ->editColumn('activation', function($row){
                return $row->activation ==1 ? 'فعال' : 'مسدود';
            })
            ->editColumn('configuration', function($row){
                return
                    '<a class="fa fa-edit text-navy dt-btn action-loader"  title="'.trans('letter.edit').'" style="color: #1c84c6" href='.route('user.edit', ['id' => $row->id]).'></a>';
            })
            ->rawColumns(['configuration'])
            ;
    }
    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $query)
    {
        return $query;

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
                    ->addAction(['title' => trans('letter.configuration')])
                    ->parameters($this->getBuilderParameters());
    }

    protected function getBuilderParameters()
    {
        return [
            'dom' => 'frtip',
            'scrollX' => false,
            //'buttons' => [],
            'pageLength' => 10,
            //'order' => [[5, 'desc']],
            //'responsive' => true,
            'language' => [
                "sProcessing" => "درحال پردازش...",
                "sLengthMenu" => "نمایش محتویات _MENU_",
                "sZeroRecords" => "موردی یافت نشد",
                "sInfo" => "نمایش _START_ تا _END_ از مجموع _TOTAL_ مورد",
                "sInfoEmpty" => "تهی",
                "sInfoFiltered" => "(فیلتر شده از مجموع _MAX_ مورد)",
                "sInfoPostFix" => "",
                "sSearch" => "Search:",
                "sUrl" => "",
                "oPaginate" => [
                    "sFirst" => "ابتدا",
                    "sPrevious" => "قبلی",
                    "sNext" => "بعدی",
                    "sLast" => "انتها"
                ]
            ]
        ];
    }

    /**
     * Get columns.
     *
     * @return array
     */


    protected function getColumns()
    {
        return [
            'id'                => ['title' => trans('letter.user_id'), 'searchable' => true],
            'first_name'        => ['title' => trans('letter.full_name')],
            'email'             => ['title' => trans('letter.email'),],
            'mobile'            => ['title' => trans('letter.mobile'),],
            'national_code'     => ['title' => trans('letter.national_code'),],
            'user_type'         => ['title' => trans('letter.user_type'),],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Users_' . date('YmdHis');
    }
}
