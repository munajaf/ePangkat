<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestMarks;
use App\Http\Requests\RequestRequest;
use App\Models\Request;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    use WithoutMiddleware;

    public function email()
    {
        $to_name = "Ammar Munajaf";
        $to_email = "munajaf21@gmail.com";
        $data = array("name" => "Ogbonna Vitalis(sender_name)", "body" => "A test mail");
        \Mail::send("backend.mail", $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject("Laravel Test Mail");
            $message->from("ammarmunajaf@gmail.com", "Test Mail");
        });

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $list = Request::getAllRequest(true);
        return view('backend.requests.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        /* if (Request::ifExistsRequest()) {
             return redirect()->route('backend.user.request.index')->withFlashDanger('You cant make anymore request');
         }
         return view('backend.requests.create');*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestRequest $request)
    {
        $detachedParams = [
            '_token',
            'type',
            'kategori1_syarat1_1',
            'kategori1_syarat1_2',
            'kategori1_syarat1_3',
            /*            'kategori1_syarat2_1',
                        'kategori1_syarat2_2',
                        'kategori1_syarat2_3',
                        'kategori1_syarat3_1',
                        'kategori1_syarat4_1',
                        'kategori1_syarat4_2'*/
        ];

        $preparedData = $this->prepareData($request
            ->except($detachedParams)
        );

        array_shift($detachedParams);
        array_shift($detachedParams);
        $preparedDetachedParams = [];
        foreach ($request->only($detachedParams) as $detachedParamsKey => $derp) {
            $validateSyarat = explode('_', $detachedParamsKey);

            $path = $request->file($detachedParamsKey)->store("public/" . auth()->user()->id);
            $path = str_replace('public/', 'storage/', $path);
            $preparedDetachedParams[$validateSyarat[1]][((int)$validateSyarat[2] - 1)] = $path;

        }

        foreach ($preparedData as $key => $data) {
            //$key = kategori2_syarat1
            foreach ($data as $newKey => $newData) {
                //$newKey = 0
                if (isset($newData['attach']) && !is_null($newData['attach'])) {
                    $path = $newData['attach']->store("public/" . auth()->user()->id);
                    $path = str_replace('public/', 'storage/', $path);
                    $preparedData[$key][$newKey]['attach'] = $path;
                }
            }

        }


        $syarat2 = [$preparedData['kategori1_syarat2_1'], $preparedData['kategori1_syarat2_2'], $preparedData['kategori1_syarat2_3']];
        $syarat4 = [$preparedData['kategori1_syarat4_1'], $preparedData['kategori1_syarat4_2']];

        DB::transaction(function () use ($request, $preparedDetachedParams, $preparedData, $syarat2, $syarat4) {
            $createdRequest = Request::create([
                'user_id' => auth()->user()->id,
                'type' => $request->type,
                'status' => 'pending',
                'kategori1_syarat1' => $preparedDetachedParams['syarat1'],
                'kategori1_syarat2' => $syarat2,
                'kategori1_syarat3' => $preparedData['kategori1_syarat3_1'],
                'kategori1_syarat4' => $syarat4,
                'kategori2_syarat1' => $preparedData['kategori2_syarat1'],
                'kategori2_syarat2' => $preparedData['kategori2_syarat2'],
                'kategori2_syarat3' => $preparedData['kategori2_syarat3'],
                'kategori2_syarat4' => $preparedData['kategori2_syarat4'],
                'kategori2_syarat5' => $preparedData['kategori2_syarat5'],
                'kategori3_syarat1' => $preparedData['kategori3_syarat1'],
                'kategori3_syarat2' => $preparedData['kategori3_syarat2'],
                'kategori4_syarat1' => $preparedData['kategori4_syarat1'],
                'kategori4_syarat2' => $preparedData['kategori4_syarat2'],
            ]);

//            $createdRequest->requestMarks()->create(['request_id' => $createdRequest->id]);

        }, 3);


        return redirect()->route('backend.user.request.index')->withFlashSuccess('Request has been submitted!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $data = Request::getRequest($id, true);
        return view('backend.requests.view', compact('data'));
    }

    public function accept($id)
    {
        $data = Request::where('id', $id)->update(['status' => 'accepted']);
        $toName = $data->users->full_name;
        $toEmail = $data->users->email;
        $data = array("name" => $toName, "body" => "Tahniah Permohonan anda telah diterima!");
        \Mail::send("backend.mail", $data, function ($message) use ($toName, $toEmail) {
            $message->to($toEmail, $toName)
                ->subject("Laravel Test Mail");
            $message->from("ammarmunajaf@gmail.com", "Test Mail");
        });

    }

    public function rejected($id)
    {
        Request::where('id', $id)->update(['status' => 'rejected']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data = Request::getRequest($id, true);
        return view('backend.requests.edit', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestMarks $request, $id)
    {
        if ($request->status == "rejected") {
            Request::where('id', $id)->update(['status' => 'rejected']);
            return redirect()->route('admin.request.index')->withFlashSuccess('Permohonan telah ditolak!');
        } else {
            Request::where('id', $id)->update(['status' => 'accepted']);
            return redirect()->route('admin.request.index')->withFlashSuccess('Permohonan telah diterima');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Request::deleteRequest($id)) {
            return redirect()->route('backend.user.request.index')->withFlashSuccess('Request Deleted');
        }
        return redirect()->route('backend.user.request.index')->withFlashDanger('Delete Failed!');

    }


    protected function prepareData($allData)
    {
        $realData = [];
        foreach ($allData as $key => $data) {
            //$key = kategori2_syarat1_1
            foreach ($data as $realKey => $values) {
                //realkey = jenis
                foreach ($values as $lastKey => $value) {
                    $realData[$key][$lastKey][$realKey] = $value;
                }
            }
        }

        return $realData;
    }

}
