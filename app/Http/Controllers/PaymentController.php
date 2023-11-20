<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Payment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $payments = Payment::all();
        return view('payment.index')->with('payments', $payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $enrollments = Enrollment::pluck('eroll_no', 'id');
        return view('payment.create', compact('enrollments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        Payment::create($input);
        return redirect('payment')->with('flash_message', 'payment Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $payment = Payment::find($id);
        return view('payment.show')->with('payment', $payment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $payments = Payment::find($id);
        $enrollments = Enrollment::pluck('eroll_no', 'id');
        return view('payment.edit', compact('payments','enrollments'));

    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $payment = Payment::find($id);
        $input = $request->all();
        $payment->update($input);
        return redirect('payment')->with('flash_message', 'payment Added!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Payment::destroy($id);
        return redirect('payment')->with('fash_message', 'deleted');
    }
}