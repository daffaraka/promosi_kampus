<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule as ModelsSchedule;
use App\Models\SchoolDetail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return redirect(route('home'));
    }

    public function schedule()
    {

        $data['title'] = 'Report Penjadwalan Kunjungan';

        $data['schedule'] = ModelsSchedule::where('date', 'like', '%' . Carbon::now()->year . '%')->get();
        $data['fdate'] = ModelsSchedule::where('date', 'like', '%' . Carbon::now()->year . '%')->max('date');
        $data['udate'] = ModelsSchedule::where('date', 'like', '%' . Carbon::now()->year . '%')->min('date');

        return view('admin.report.schedule', $data);
    }
    public function reportschedule(Request $request)
    {

        $totalFilteredRecord = $totalDataRecord = $draw_val = "";
        $columns_list = array(
            0 => 'no',
            1 => 'pic_1',
            1 => 'pic_2',
            2 => 'school',
            3 => 'date',
            4 => 'surat_dinas',
        );
        if (Auth::user()->role == '6') {
            $totalDataRecord = ModelsSchedule::where('pic_1', Auth::id())
                ->orwhere('pic_2', Auth::id())
                ->count();
        } else {
            $totalDataRecord = ModelsSchedule::count();
        }
        $totalFilteredRecord = $totalDataRecord;

        $limit_val = $request->input('length');
        $start_val = $request->input('start');
        $order_val = 'id';
        $dir_val = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {

            if (Auth::user()->role == '6') {
                $schedule_data = ModelsSchedule::where('pic_1', Auth::id())
                    ->orwhere('pic_2', Auth::id())
                    ->offset($start_val)
                    ->limit($limit_val)
                    ->orderBy($order_val, $dir_val)
                    ->get();
            } else {
                $schedule_data = ModelsSchedule::offset($start_val)
                    ->limit($limit_val)
                    ->orderBy($order_val, $dir_val)
                    ->get();
            }
        } else {
            $search_text = $request->input('search.value');

            if (Auth::user()->role == '6') {

                $schedule_data =  ModelsSchedule::where('id', 'LIKE', "%{$search_text}%")
                    ->where('pic_1', Auth::id())
                    ->orwhere('pic_2', Auth::id())
                    // ->orWhere('name', 'LIKE', "%{$search_text}%")
                    // ->orWhere('email', 'LIKE', "%{$search_text}%")
                    ->offset($start_val)
                    ->limit($limit_val)
                    ->orderBy($order_val, $dir_val)
                    ->get();

                $totalFilteredRecord = ModelsSchedule::where('id', 'LIKE', "%{$search_text}%")
                    ->where('pic_1', Auth::id())
                    ->orwhere('pic_2', Auth::id())

                    // ->orWhere('name', 'LIKE', "%{$search_text}%")
                    // ->orWhere('email', 'LIKE', "%{$search_text}%")
                    ->count();
            } else {
                $schedule_data =  ModelsSchedule::where('id', 'LIKE', "%{$search_text}%")
                    // ->orWhere('name', 'LIKE', "%{$search_text}%")
                    // ->orWhere('email', 'LIKE', "%{$search_text}%")
                    ->offset($start_val)
                    ->limit($limit_val)
                    ->orderBy($order_val, $dir_val)
                    ->get();

                $totalFilteredRecord = ModelsSchedule::where('id', 'LIKE', "%{$search_text}%")
                    // ->orWhere('name', 'LIKE', "%{$search_text}%")
                    // ->orWhere('email', 'LIKE', "%{$search_text}%")
                    ->count();
            }
        }

        $data_val = array();
        if (!empty($schedule_data)) {
            foreach ($schedule_data as $i => $sch) {
                $url = route('schedule.edit', ['id' => $sch->id]);
                $urlHapus = route('schedule.delete', $sch->id);
                // if ($sch->surat_image) {
                $img = $sch->surat_image;
                // } else {
                //     $img = asset('vendor/adminlte3/img/user2-160x160.jpg');
                // }

                $pic1 =  User::where('id', $sch->pic_1)
                    ->get();
                $pic2 =  User::where('id', $sch->pic_2)
                    ->get();
                $school =  SchoolDetail::where('id', $sch->school_id)
                    ->get();
                if ($sch->pic_1_status == '1') {
                    $statuspic1 = '<br/><span class="bg-success badge badge-success" >Accepted</span>';
                } else if ($sch->pic_1_status == '2') {
                    $statuspic1 = '<br/><span class="bg-danger badge badge-danger" >Rejected</span>';
                } else {
                    $statuspic1 = '<br/><span class="bg-secondary badge badge-gray" >On Confirm</span>';
                }
                if ($sch->pic_2_status == '1') {
                    $statuspic2 = '<br/><span class="bg-success badge badge-success" >Accepted</span>';
                } else if ($sch->pic_2_status == '2') {
                    $statuspic2 = '<br/><span class="bg-danger badge badge-danger" >Rejected</span>';
                } else {
                    $statuspic2 = '<br/><span class="bg-secondary badge badge-gray" >On Confirm</span>';
                }

                if (Auth::user()->role == '6') {

                    //check user on data
                    $checkpic1 =  ModelsSchedule::where('id', $sch->id)
                        ->where(
                            'pic_1',
                            Auth::id()
                        )->count();
                    $checkpic2 =  ModelsSchedule::where('id', $sch->id)
                        ->where('pic_2', Auth::id())
                        ->count();

                    if ($checkpic1 > 0) {
                        $status = $sch->pic_1_status;
                    } else if ($checkpic2 > 0) {
                        $status = $sch->pic_2_status;
                    }
                    $urlconfirm = route('schedule.editconfirm', $sch->id);

                    $action = "<select class='form-control confirm-status' id='confirm-status' data-url='" . $urlconfirm . "' data-id='" . $sch->id . "'> ";
                    if ($status == '0') {
                        $action .= " <option value='0' selected >On Confirm</option>";
                    } else {
                        $action .= " <option value='0' >On Confirm</option>";
                    }
                    if ($status == '1') {
                        $action .= " <option value='1' selected >Accept</option> ";
                    } else {
                        $action .= " <option value='1' >Accept</option> ";
                    }
                    if ($status == '2') {
                        $action .= " <option value='2' selected>Reject</option> ";
                    } else {
                        $action .= " <option value='2' >Reject</option> ";
                    }
                    $action .= "  </select>";
                } else {
                    $action = "<a href='$url'><i class='fas fa-edit fa-lg'></i></a> <a style='border: none; background-color:transparent;' class='hapusData' data-id='$sch->id' data-url='$urlHapus'><i class='fas fa-trash fa-lg text-danger'></i></a>";
                }

                if ($sch->surat_dinas) {
                    $surat = '<div class="col-md-4">
                        <a class="btn btn-info btn-sm" target="_BLANK"
                            href="' . asset($sch->surat_dinas) . '">File</a>
                    </div>';
                } else {
                    $surat = 'Surat Belum Diupload';
                }
                $akunnestedData['no'] = $i + 1;
                $akunnestedData['pic_1'] =  $pic1[0]->name;
                $akunnestedData['pic_2'] = $pic2[0]->name;
                $akunnestedData['school'] =  $school[0]->name;
                $akunnestedData['date'] =  $sch->date;
                $akunnestedData['surat_dinas'] =  $surat;
                $data_val[] = $akunnestedData;
            }
        }
        $draw_val = $request->input('draw');
        $get_json_data = array(
            "draw"            => intval($draw_val),
            "recordsTotal"    => intval($totalDataRecord),
            "recordsFiltered" => intval($totalFilteredRecord),
            "data"            => $data_val
        );

        echo json_encode($get_json_data);
    }
}
