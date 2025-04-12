<?php

namespace App\Imports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelDataImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Post([
            'img_file' => $row['img_name'],
            'title' => $row['title'],
            'content' => $row['content'],
            'author_name' => $row['author'],
            'user_id' => (int)$row['user_id'],
        ]);
    }
}
