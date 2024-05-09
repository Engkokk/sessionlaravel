<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', [SessionController::class,'index']);

class SessionController extends Controller
{
public function index(){
    echo '<ul>';
    echo '<li><a href=/buat-session>Buat Session</a></li>';
    echo '<li><a href=/akses-session>Akses Session</a></li>';
    echo '<li><a href=/hapus-session>Hapus Session</a></li>';
    echo '<li><a href=/flash-session>Flash Session</a></li>';
    echo '</ul>';
    }
}