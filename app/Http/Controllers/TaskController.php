<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TaskController  extends Controller
{
    /**
     * タスク一覧ページを表示する
     * 
     * @return \Illuminate\View\View
     */
  public function list()
  {
      return view('task.list');
  }
  
  /**
   * 2ndページを表示する
   * 
   * @return \Illuminate\View
   */
  
}