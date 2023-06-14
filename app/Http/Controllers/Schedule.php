<?php

namespace App\Http\Controllers;

use App\Models\Schedule as ModelsSchedule;
use App\Models\SchoolDetail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class Schedule extends Controller
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

        $data['title'] = 'Data Penjadwalan Kunjungan';
        return view('admin.schedule.index', $data);
    }

    public function tambahSchedule(Request $request)
    {
        $data['title'] = 'Tambah Penjadwalan Kunjungan';

        $data['pegawaiAll'] = User::where('role', '=', '5')
            ->get();
        $data['school'] = SchoolDetail::get();
        if ($request->isMethod('post')) {
            // dd($request);
            $this->validate($request, [
                'school' => 'required',
                'date' => 'required',
                'pic1' => 'required',
                'pic2' => 'required',
                'surat_dinas' => 'image|mimes:jpg,png,jpeg,gif,svg|max:1024',
                'description' => 'required',
            ]);

            $img = null;
            if ($request->file('surat_dinas')) {
                $nama_gambar = time() . '_' . $request->file('surat_dinas')->getClientOriginalName();
                $upload = $request->surat_dinas->storeAs('public/admin/img/surat_dinas', $nama_gambar);
                $img = Storage::url($upload);
            }
            ModelsSchedule::create([
                'school_id' => $request->school,
                'date' => $request->date,
                'pic_1' => $request->pic1,
                'pic_2' => $request->pic2,
                'surat_dinas' => $img,
                'description' => $request->description,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            return redirect()->route('schedule.index')->with('status', 'Data telah tersimpan di database');
        }
        return view('admin.schedule.addschedule', $data);
    }
    public function dataTable(Request $request)
    {
        $totalFilteredRecord = $totalDataRecord = $draw_val = "";
        $columns_list = array(
            0 => 'no',
            1 => 'pic',
            2 => 'school',
            3 => 'date',
            4 => 'options',
        );

        $totalDataRecord = ModelsSchedule::count();

        $totalFilteredRecord = $totalDataRecord;

        $limit_val = $request->input('length');
        $start_val = $request->input('start');
        $order_val = 'id';
        $dir_val = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $schedule_data = ModelsSchedule::offset($start_val)
                ->limit($limit_val)
                ->orderBy($order_val, $dir_val)
                ->get();
        } else {
            $search_text = $request->input('search.value');

            $schedule_data =  ModelsSchedule::where('id', 'LIKE', "%{$search_text}%")
                ->orWhere('name', 'LIKE', "%{$search_text}%")
                ->orWhere('email', 'LIKE', "%{$search_text}%")
                ->offset($start_val)
                ->limit($limit_val)
                ->orderBy($order_val, $dir_val)
                ->get();

            $totalFilteredRecord = ModelsSchedule::where('id', 'LIKE', "%{$search_text}%")
                ->orWhere('name', 'LIKE', "%{$search_text}%")
                ->orWhere('email', 'LIKE', "%{$search_text}%")
                ->count();
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
                $akunnestedData['no'] = $i + 1;
                $akunnestedData['pic'] = $pic1[0]->name . ',' . $pic2[0]->name;
                $akunnestedData['school'] =  $school[0]->name;
                $akunnestedData['date'] =  $sch->date;
                $akunnestedData['options'] = "<a href='$url'><i class='fas fa-edit fa-lg'></i></a> <a style='border: none; background-color:transparent;' class='hapusData' data-id='$sch->id' data-url='$urlHapus'><i class='fas fa-trash fa-lg text-danger'></i></a>";
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
