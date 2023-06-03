<?php

namespace App\Http\Controllers;

use App\Models\TaskItem;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TaskItemController extends Controller
{
    /**
     * Update the item,
     *
     */
    public function update(Request $request)
    {
        try {

            $data = json_decode($request->getContent(),true);

            // $ids = array_column($data, 'id');

            // $attributesToUpdate = [
            //     'position'
            // ];

            // $valuesToUpdate = [];

            // foreach ($attributesToUpdate as $attribute) {
            //     $valuesToUpdate[$attribute] = array_column($data, $attribute);
            // }

            // Log::info($valuesToUpdate);

            // TaskItem::whereIn('id', $ids)->update($valuesToUpdate);

            foreach ($data as $item) {
                $model = TaskItem::findOrFail($item['id']);
                $model->position = $item['position'];
                $model->save(); // Save the changes to the database
                Log::info($item);
            }

            // $data->map(function ($item){
            //     Log::info($item);
            //     // return get_object_vars($item);
            // });

            return response()->json(['success' => 'Got Simple Ajax Request.']);
        } catch (Exception $e) {
            //throw $th;
        }
    }
}
