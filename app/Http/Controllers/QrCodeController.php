<?php

namespace App\Http\Controllers;

use App\Models\QrCode;
use App\Http\Requests\StoreQrCodeRequest;
use App\Http\Requests\UpdateQrCodeRequest;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

class QrCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qrCodes = QrCode::get();
        return response()->json(
            [
                'qrCodes' => $qrCodes,
            ],
            200,
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQrCodeRequest $request)
    {
        $data = $request->validated();

        if ($request->file('qr')) {
            $qrCodeLink = Storage::putFile('qr-code', $request->file('qr'));
            $data['qr'] = 'storage/' . $qrCodeLink;
        }
        QrCode::create($data);
        return response()->json(
            [
                'status' => true,
                'message' => 'QR Code Store Successfully',
            ],
            200,
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(QrCode $qrCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QrCode $qrCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQrCodeRequest $request, QrCode $qrCode)
    {
        $data = $request->validated();
        if ($qrCode->qr) {
            Storage::delete($qrCode->qr);
        }
        if ($request->file('qr')) {
            $qrCodeLink = Storage::putFile('qr-code', $request->file('qr'));
            $data['qr'] = 'storage/' . $qrCodeLink;
        }

        $qrCode->update($data);

        return response()->json(
            [
                'status' => true,
                'message' => 'QR Code Update Successfully',
            ],
            200,
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QrCode $qrCode)
    {
        if ($qrCode->qr) {
            Storage::delete($qrCode->qr);
        }
        $qrCode->delete();
        return response()->json(
            [
                'status' => true,
                'message' => 'QR Code Deleted Successfully',
            ],
            200,
        );
    }
}
