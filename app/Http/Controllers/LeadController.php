<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLeadRequest;
use App\Http\Requests\UpdateLeadRequest;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::all();
        return view('leads.index', compact('leads'));
    }

    public function create()
    {
        return view('leads.create');
    }

    public function store(StoreLeadRequest $request)
    {
        Lead::create($request->validated());

        return redirect()->route('leads.index')->with('success', 'Lead added successfully');
    }

    public function edit(Lead $lead)
    {
        return view('leads.edit', compact('lead'));
    }

    public function update(UpdateLeadRequest $request, Lead $lead)
    {
        $lead->update($request->validated());

        return redirect()->route('leads.index')->with('success', 'Lead updated successfully');
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();

        return redirect()->route('leads.index')->with('success', 'Lead deleted successfully');
    }
}
