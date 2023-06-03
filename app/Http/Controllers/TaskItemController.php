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

            $data = json_decode($request->getContent(), true);

            foreach ($data as $item) {
                $model = TaskItem::findOrFail($item['id']);
                $model->position = $item['position'];
                $model->save(); // Save the changes to the database
                Log::info($item);
            }

            return response()->json(['success' => 'Got Simple Ajax Request.']);
        } catch (Exception $e) {
            //throw $th;
        }
    }
}
