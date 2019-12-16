<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestRequest;
use App\Models\Request;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    use WithoutMiddleware;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $list = Request::getAllRequest();
        return view('frontend.requests.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        if (Request::ifExistsRequest()) {
            return redirect()->route('frontend.user.request.index')->withFlashDanger('You cant make anymore request');
        }
        return view('frontend.requests.create');
    }

    public function extendCreate($id)
    {
        $data = Request::getRequest($id);
        return view('frontend.requests.create', compact('data'));
    }

    public function extendCreateUpdate(RequestRequest $request, $id)
    {
        $data = Request::getRequest($id);
        $detachedParams = ['_token', 'type', 'page', '_method'];
        if (!isset($request->page)) {
            Request::where('id', $id)->update(['type' => $request->type]);
            return redirect()->route('frontend.user.extender.create', [$id, 'page=1']);
        }
        if ($request->page == "1") {
            $first = ['kategori1_syarat1_1', 'kategori1_syarat1_2', 'kategori1_syarat1_3'];
            foreach ($request->only($first) as $detachedParamsKey => $derp) {
                $validateSyarat = explode('_', $detachedParamsKey);
                $path = $request->file($detachedParamsKey)->store("public/" . auth()->user()->id);
                $path = str_replace('public/', 'storage/', $path);
                $preparedDetachedParams[$validateSyarat[1]][((int)$validateSyarat[2] - 1)] = $path;
            }

            $first = ['_token', 'type', 'page', '_method', 'kategori1_syarat1_1', 'kategori1_syarat1_2', 'kategori1_syarat1_3'];
            $preparedData = $this->prepareData($request->except($first));

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

            if (!isset($preparedData['kategori1_syarat2_1'])) {
                $preparedData['kategori1_syarat2_1'] = [];
            } elseif (!isset($preparedData['kategori1_syarat2_2'])) {
                $preparedData['kategori1_syarat2_2'] = [];
            } elseif (!isset($preparedData['kategori1_syarat2_3'])) {
                $preparedData['kategori1_syarat2_3'] = [];
            }

            if (!isset($preparedData['kategori1_syarat2_1'])) {
                $preparedData['kategori1_syarat2_1'] = [];
            } elseif (!isset($preparedData['kategori1_syarat2_2'])) {
                $preparedData['kategori1_syarat2_2'] = [];
            }

            $syarat2 = [$preparedData['kategori1_syarat2_1'], $preparedData['kategori1_syarat2_2'], $preparedData['kategori1_syarat2_3']];
            $syarat4 = [$preparedData['kategori1_syarat4_1'], $preparedData['kategori1_syarat4_2']];
            Request::where('id', $id)->update([
                'kategori1_syarat1' => $preparedDetachedParams['syarat1'],
                'kategori1_syarat2' => $syarat2,
                'kategori1_syarat3' => $preparedData['kategori1_syarat3_1'],
                'kategori1_syarat4' => $syarat4,
            ]);
            return redirect()->route('frontend.user.extend.create', [$id, 'page=2'])->withFlashSuccess('Request has been submitted!');
        }
        if ($request->page == 2) {
            $preparedData = $this->prepareData($request->except($detachedParams));

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

            Request::where('id', $id)->update([
                'kategori2_syarat1' => $preparedData['kategori2_syarat1'],
                'kategori2_syarat2' => $preparedData['kategori2_syarat2'],
                'kategori2_syarat3' => $preparedData['kategori2_syarat3'],
                'kategori2_syarat4' => $preparedData['kategori2_syarat4'],
                'kategori2_syarat5' => $preparedData['kategori2_syarat5'],
            ]);

            return redirect()->route('frontend.user.extend.create', [$id, 'page=3'])->withFlashSuccess('Request has been submitted!');


        }
        if ($request->page == 3) {
            $preparedData = $this->prepareData($request->except($detachedParams));

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

            Request::where('id', $id)->update([
                'kategori3_syarat1' => $preparedData['kategori3_syarat1'],
                'kategori3_syarat2' => $preparedData['kategori3_syarat2'],
            ]);

            return redirect()->route('frontend.user.extend.create', [$id, 'page=4'])->withFlashSuccess('Request has been submitted!');
        }
        if ($request->page == 4) {
            $preparedData = $this->prepareData($request->except($detachedParams));

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

            Request::where('id', $id)->update([
                'status' => 'pending',
                'kategori4_syarat1' => $preparedData['kategori4_syarat1'],
                'kategori4_syarat2' => $preparedData['kategori4_syarat2'],
            ]);

            return redirect()->route('frontend.user.request.index')->withFlashSuccess('Request has been submitted!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestRequest $request)
    {
        $created = Request::create([
            'user_id' => auth()->user()->id,
            'type' => $request->type,
            'status' => 'draft',
        ]);

        return redirect()->route('frontend.user.extend.create', [$created->id, 'page=1'])->withFlashSuccess('Request has been submitted!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $data = Request::getRequest($id);
        if ($data->status == "draft") {
            return redirect()->route('frontend.user.request.index')->withFlashDanger('Cant view drafted data');
        }
        return view('frontend.requests.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data = Request::getRequest($id);
        if ($data->status != "draft") {
            return redirect()->route('frontend.user.request.index')->withFlashDanger('Cant because it is not draft!, delete it if you want to make changes');
        }
//        dd($data->kategori1_syarat2);
        return view('frontend.requests.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestRequest $request, $id)
    {
        $data = Request::getRequest($id);
        $detachedParams = ['_token', 'type', 'page', '_method'];
        if ($request->page == "1") {
            $first = ['kategori1_syarat1_1', 'kategori1_syarat1_2', 'kategori1_syarat1_3'];
            foreach ($request->only($first) as $detachedParamsKey => $derp) {
                $validateSyarat = explode('_', $detachedParamsKey);
                $path = $request->file($detachedParamsKey)->store("public/" . auth()->user()->id);
                $path = str_replace('public/', 'storage/', $path);
                $preparedDetachedParams[$validateSyarat[1]][((int)$validateSyarat[2] - 1)] = $path;
            }

            $first = ['_token', 'type', 'page', '_method', 'kategori1_syarat1_1', 'kategori1_syarat1_2', 'kategori1_syarat1_3'];
            $preparedData = $this->prepareData($request->except($first));

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

            if (!isset($preparedData['kategori1_syarat2_1'])) {
                $preparedData['kategori1_syarat2_1'] = [];
            } elseif (!isset($preparedData['kategori1_syarat2_2'])) {
                $preparedData['kategori1_syarat2_2'] = [];
            } elseif (!isset($preparedData['kategori1_syarat2_3'])) {
                $preparedData['kategori1_syarat2_3'] = [];
            }

            if (!isset($preparedData['kategori1_syarat2_1'])) {
                $preparedData['kategori1_syarat2_1'] = [];
            } elseif (!isset($preparedData['kategori1_syarat2_2'])) {
                $preparedData['kategori1_syarat2_2'] = [];
            }

            $syarat2 = [$preparedData['kategori1_syarat2_1'], $preparedData['kategori1_syarat2_2'], $preparedData['kategori1_syarat2_3']];
            $syarat4 = [$preparedData['kategori1_syarat4_1'], $preparedData['kategori1_syarat4_2']];
            Request::where('id', $id)->update([
                'kategori1_syarat1' => $preparedDetachedParams['syarat1'],
                'kategori1_syarat2' => $syarat2,
                'kategori1_syarat3' => $preparedData['kategori1_syarat3_1'],
                'kategori1_syarat4' => $syarat4,
            ]);
            return redirect()->route('frontend.user.request.edit', [$id, 'page=2'])->withFlashSuccess('Request has been submitted!');
        }
        if ($request->page == 2) {
            $preparedData = $this->prepareData($request->except($detachedParams));

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

            Request::where('id', $id)->update([
                'kategori2_syarat1' => $preparedData['kategori2_syarat1'],
                'kategori2_syarat2' => $preparedData['kategori2_syarat2'],
                'kategori2_syarat3' => $preparedData['kategori2_syarat3'],
                'kategori2_syarat4' => $preparedData['kategori2_syarat4'],
                'kategori2_syarat5' => $preparedData['kategori2_syarat5'],
            ]);

            return redirect()->route('frontend.user.request.edit', [$id, 'page=3'])->withFlashSuccess('Request has been submitted!');


        }
        if ($request->page == 3) {
            $preparedData = $this->prepareData($request->except($detachedParams));

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

            Request::where('id', $id)->update([
                'kategori3_syarat1' => $preparedData['kategori3_syarat1'],
                'kategori3_syarat2' => $preparedData['kategori3_syarat2'],
            ]);

            return redirect()->route('frontend.user.request.edit', [$id, 'page=4'])->withFlashSuccess('Request has been submitted!');
        }
        if ($request->page == 4) {
            $preparedData = $this->prepareData($request->except($detachedParams));

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

            Request::where('id', $id)->update([
                'status' => 'pending',
                'kategori4_syarat1' => $preparedData['kategori4_syarat1'],
                'kategori4_syarat2' => $preparedData['kategori4_syarat2'],
            ]);

            return redirect()->route('frontend.user.request.index')->withFlashSuccess('Request has been submitted!');
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
            return redirect()->route('frontend.user.request.index')->withFlashSuccess('Request Deleted');
        }
        return redirect()->route('frontend.user.request.index')->withFlashDanger('Delete Failed!');

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
