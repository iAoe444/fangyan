<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class FeedbackController extends Controller
{
    public function addFeedback(Request $request)
    {
        $content = $request->input('feedback');
        if (!empty($content)) {
            Feedback::create(
                ['content' => $content]
            );
            return view('frontend.aboutus')->with('success',true);
        }else {
            return view('frontend.aboutus')->with('success',false);
        }
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        $feedback = Feedback::find($id);
        if ($feedback->delete()) {
            return redirect('manage/feedback')->with('success', '删除成功-' . $id);
        } else {
            return redirect('manage/feedback')->with('success', '删除失败-' . $id);
        }
    }
}
