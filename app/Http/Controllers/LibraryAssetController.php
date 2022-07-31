<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelibraryAsset;
use App\Http\Requests\UpdateLibraryAsset;
use App\Models\LibraryAsset;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LibraryAssetController extends Controller
{
    public function AddLibraryAsset(StorelibraryAsset $request)
    {
        $asset_unique_id = mt_rand(1000, 9999);
        // dd($request);
        LibraryAsset::create($request->safe()->merge([
            'asset_unique_id' => $asset_unique_id,
        ])->all());
        Alert::success('Asset Created Successfully');
        return redirect()->back();
    }

    public function UpdateLibraryAsset(UpdateLibraryAsset $request, LibraryAsset $asset)
    {
        $asset->update($request->safe()->all());
        Alert::success('Asset Updated Successfully');
        return redirect()->back();
    }

    public function DeleteLibraryAsset(LibraryAsset $asset)
    {
        $asset->delete();
        Alert::success('Library Asset Deleted Successfully');
        return redirect()->back();
    }
}
