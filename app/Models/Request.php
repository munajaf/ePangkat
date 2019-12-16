<?php

namespace App\Models;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\QueryBuilder\QueryBuilder;

class Request extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'kategori1_syarat1' => 'array',
        'kategori1_syarat2' => 'array',
        'kategori1_syarat3' => 'array',
        'kategori1_syarat4' => 'array',
        'kategori2_syarat1' => 'array',
        'kategori2_syarat2' => 'array',
        'kategori2_syarat3' => 'array',
        'kategori2_syarat4' => 'array',
        'kategori2_syarat5' => 'array',
        'kategori3_syarat1' => 'array',
        'kategori3_syarat2' => 'array',
        'kategori4_syarat1' => 'array',
        'kategori4_syarat2' => 'array',
    ];

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public static function ifExistsRequest()
    {
        return self::where('user_id', auth()->user()->id)
            ->where('status', 'pending')
            ->first();
    }

    public static function getAllRequest($admin = false)
    {
        return QueryBuilder::for(self::class)
            ->allowedFilters(['id', 'status', 'type'])
            ->allowedSorts('id', 'status', 'type')
            ->when(!$admin, function ($query) {
                return $query->where(['user_id' => auth()->user()->id]);
            })
            ->get();
    }

    public static function makePDF()
    {
        $data = [
            'title' => 'First PDF for Medium',
            'heading' => 'Hello from 99Points.info',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'
            ];

        $pdf = \PDF::loadView('pdf_view', $data);
        return $pdf->download('medium.pdf');
    }

    #todo admin useable
    public static function getRequest($id, $admin = false)
    {
        return self::where(['id' => $id])
            ->when(!$admin, function ($query) {
                return $query->where(['user_id' => auth()->user()->id]);
            })
            ->with('requestMarks')
            ->first();
    }

    public static function editRequest($id, $data, $admin = false)
    {
        $method = self::where(['id' => $id])
            ->when(!$admin, function ($query) {
                return $query->where(['user_id' => auth()->user()->id]);
            })->first();

        $method->update(['status' => $data['status']]);
        unset($data['status']);

        return $method->requestMarks()->update($data);
    }

    public static function deleteRequest($id)
    {
        try {
            self::where('id', $id)->delete();
            return true;
        } catch (\Exception $exception) {
            return false;
        }
    }
}
