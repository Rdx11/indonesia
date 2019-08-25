<?php

namespace Laravolt\Indonesia\Tables;

use Laravolt\Suitable\Columns\Numbering;

class KabupatenTable extends \Laravolt\Suitable\TableView
{
    protected function columns()
    {
        return [
            Numbering::make('No'),
            \Laravolt\Suitable\Columns\Id::make('id', 'Kode')->sortable(),
            \Laravolt\Suitable\Columns\Text::make('name', 'Kota/Kabupaten')->sortable(),
            \Laravolt\Suitable\Columns\Text::make('province_name', 'Provinsi')->sortable('province.name'),
            \Laravolt\Suitable\Columns\RestfulButton::make('indonesia::kabupaten')->except('view'),
        ];
    }
}
