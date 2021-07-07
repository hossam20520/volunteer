<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'        => 'Number of volunteers (Branches)',
            'chart_type'         => 'pie',
            'report_type'        => 'group_by_string',
            'model'              => 'App\Models\Registered',
            'group_by_field'     => 'branch',
            'aggregate_function' => 'count',
            'filter_field'       => 'created_at',
            'filter_period'      => 'year',
            'column_class'       => 'col-md-3',
            'entries_number'     => '5',
            'translation_key'    => 'registered',
        ];

        $chart1 = new LaravelChart($settings1);

        $settings2 = [
            'chart_title'        => 'volunteer (This month)',
            'chart_type'         => 'pie',
            'report_type'        => 'group_by_string',
            'model'              => 'App\Models\Registered',
            'group_by_field'     => 'branch',
            'aggregate_function' => 'count',
            'filter_field'       => 'created_at',
            'filter_period'      => 'month',
            'column_class'       => 'col-md-3',
            'entries_number'     => '5',
            'translation_key'    => 'registered',
        ];

        $chart2 = new LaravelChart($settings2);

        $settings3 = [
            'chart_title'        => 'Volunteer (this week)',
            'chart_type'         => 'pie',
            'report_type'        => 'group_by_string',
            'model'              => 'App\Models\Registered',
            'group_by_field'     => 'branch',
            'aggregate_function' => 'count',
            'filter_field'       => 'created_at',
            'filter_period'      => 'week',
            'column_class'       => 'col-md-3',
            'entries_number'     => '5',
            'translation_key'    => 'registered',
        ];

        $chart3 = new LaravelChart($settings3);

        $settings4 = [
            'chart_title'        => 'Volunteer (This Year)',
            'chart_type'         => 'bar',
            'report_type'        => 'group_by_string',
            'model'              => 'App\Models\Registered',
            'group_by_field'     => 'branch',
            'aggregate_function' => 'count',
            'filter_field'       => 'created_at',
            'filter_period'      => 'year',
            'column_class'       => 'col-md-3',
            'entries_number'     => '5',
            'translation_key'    => 'registered',
        ];

        $chart4 = new LaravelChart($settings4);

        $settings5 = [
            'chart_title'           => 'None volunteer',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Other',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-3',
            'entries_number'        => '5',
            'translation_key'       => 'other',
        ];

        $settings5['total_number'] = 0;
        if (class_exists($settings5['model'])) {
            $settings5['total_number'] = $settings5['model']::when(isset($settings5['filter_field']), function ($query) use ($settings5) {
                if (isset($settings5['filter_days'])) {
                    return $query->where($settings5['filter_field'], '>=',
                now()->subDays($settings5['filter_days'])->format('Y-m-d'));
                }
                if (isset($settings5['filter_period'])) {
                    switch ($settings5['filter_period']) {
                case 'week': $start = date('Y-m-d', strtotime('last Monday')); break;
                case 'month': $start = date('Y-m') . '-01'; break;
                case 'year': $start = date('Y') . '-01-01'; break;
            }
                    if (isset($start)) {
                        return $query->where($settings5['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings5['aggregate_function'] ?? 'count'}($settings5['aggregate_field'] ?? '*');
        }

        $settings6 = [
            'chart_title'           => 'None Volunteer (this month)',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Other',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'month',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-3',
            'entries_number'        => '5',
            'translation_key'       => 'other',
        ];

        $settings6['total_number'] = 0;
        if (class_exists($settings6['model'])) {
            $settings6['total_number'] = $settings6['model']::when(isset($settings6['filter_field']), function ($query) use ($settings6) {
                if (isset($settings6['filter_days'])) {
                    return $query->where($settings6['filter_field'], '>=',
                now()->subDays($settings6['filter_days'])->format('Y-m-d'));
                }
                if (isset($settings6['filter_period'])) {
                    switch ($settings6['filter_period']) {
                case 'week': $start = date('Y-m-d', strtotime('last Monday')); break;
                case 'month': $start = date('Y-m') . '-01'; break;
                case 'year': $start = date('Y') . '-01-01'; break;
            }
                    if (isset($start)) {
                        return $query->where($settings6['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings6['aggregate_function'] ?? 'count'}($settings6['aggregate_field'] ?? '*');
        }

        $settings7 = [
            'chart_title'           => 'Volunteer (this year)',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Registered',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'year',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-3',
            'entries_number'        => '5',
            'translation_key'       => 'registered',
        ];

        $settings7['total_number'] = 0;
        if (class_exists($settings7['model'])) {
            $settings7['total_number'] = $settings7['model']::when(isset($settings7['filter_field']), function ($query) use ($settings7) {
                if (isset($settings7['filter_days'])) {
                    return $query->where($settings7['filter_field'], '>=',
                now()->subDays($settings7['filter_days'])->format('Y-m-d'));
                }
                if (isset($settings7['filter_period'])) {
                    switch ($settings7['filter_period']) {
                case 'week': $start = date('Y-m-d', strtotime('last Monday')); break;
                case 'month': $start = date('Y-m') . '-01'; break;
                case 'year': $start = date('Y') . '-01-01'; break;
            }
                    if (isset($start)) {
                        return $query->where($settings7['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings7['aggregate_function'] ?? 'count'}($settings7['aggregate_field'] ?? '*');
        }

        $settings8 = [
            'chart_title'           => 'Volunteer (this month)',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Registered',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'month',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-3',
            'entries_number'        => '5',
            'translation_key'       => 'registered',
        ];

        $settings8['total_number'] = 0;
        if (class_exists($settings8['model'])) {
            $settings8['total_number'] = $settings8['model']::when(isset($settings8['filter_field']), function ($query) use ($settings8) {
                if (isset($settings8['filter_days'])) {
                    return $query->where($settings8['filter_field'], '>=',
                now()->subDays($settings8['filter_days'])->format('Y-m-d'));
                }
                if (isset($settings8['filter_period'])) {
                    switch ($settings8['filter_period']) {
                case 'week': $start = date('Y-m-d', strtotime('last Monday')); break;
                case 'month': $start = date('Y-m') . '-01'; break;
                case 'year': $start = date('Y') . '-01-01'; break;
            }
                    if (isset($start)) {
                        return $query->where($settings8['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings8['aggregate_function'] ?? 'count'}($settings8['aggregate_field'] ?? '*');
        }

        $settings9 = [
            'chart_title'           => 'volunteer (created )',
            'chart_type'            => 'line',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Registered',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'month',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'translation_key'       => 'registered',
        ];

        $chart9 = new LaravelChart($settings9);

        $settings10 = [
            'chart_title'           => 'None Volunteer (Created)',
            'chart_type'            => 'line',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Other',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_period'         => 'month',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'translation_key'       => 'other',
        ];

        $chart10 = new LaravelChart($settings10);

        $settings11 = [
            'chart_title'           => 'Total Volunteer',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Registered',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-3',
            'entries_number'        => '5',
            'translation_key'       => 'registered',
        ];

        $settings11['total_number'] = 0;
        if (class_exists($settings11['model'])) {
            $settings11['total_number'] = $settings11['model']::when(isset($settings11['filter_field']), function ($query) use ($settings11) {
                if (isset($settings11['filter_days'])) {
                    return $query->where($settings11['filter_field'], '>=',
                now()->subDays($settings11['filter_days'])->format('Y-m-d'));
                }
                if (isset($settings11['filter_period'])) {
                    switch ($settings11['filter_period']) {
                case 'week': $start = date('Y-m-d', strtotime('last Monday')); break;
                case 'month': $start = date('Y-m') . '-01'; break;
                case 'year': $start = date('Y') . '-01-01'; break;
            }
                    if (isset($start)) {
                        return $query->where($settings11['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings11['aggregate_function'] ?? 'count'}($settings11['aggregate_field'] ?? '*');
        }

        $settings12 = [
            'chart_title'           => 'Total None Volunteer',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Other',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-3',
            'entries_number'        => '5',
            'translation_key'       => 'other',
        ];

        $settings12['total_number'] = 0;
        if (class_exists($settings12['model'])) {
            $settings12['total_number'] = $settings12['model']::when(isset($settings12['filter_field']), function ($query) use ($settings12) {
                if (isset($settings12['filter_days'])) {
                    return $query->where($settings12['filter_field'], '>=',
                now()->subDays($settings12['filter_days'])->format('Y-m-d'));
                }
                if (isset($settings12['filter_period'])) {
                    switch ($settings12['filter_period']) {
                case 'week': $start = date('Y-m-d', strtotime('last Monday')); break;
                case 'month': $start = date('Y-m') . '-01'; break;
                case 'year': $start = date('Y') . '-01-01'; break;
            }
                    if (isset($start)) {
                        return $query->where($settings12['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings12['aggregate_function'] ?? 'count'}($settings12['aggregate_field'] ?? '*');
        }

        $settings13 = [
            'chart_title'        => 'Geander',
            'chart_type'         => 'pie',
            'report_type'        => 'group_by_string',
            'model'              => 'App\Models\Registered',
            'group_by_field'     => 'gender',
            'aggregate_function' => 'count',
            'filter_field'       => 'created_at',
            'column_class'       => 'col-md-6',
            'entries_number'     => '5',
            'translation_key'    => 'registered',
        ];

        $chart13 = new LaravelChart($settings13);

        return view('home', compact('chart1', 'chart2', 'chart3', 'chart4', 'settings5', 'settings6', 'settings7', 'settings8', 'chart9', 'chart10', 'settings11', 'settings12', 'chart13'));
    }
}
