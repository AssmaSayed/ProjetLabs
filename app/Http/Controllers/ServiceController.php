<?php

namespace App\Http\Controllers;

use App\Models\ContactContactUs;
use App\Models\ContactMainOffice;
use App\Models\ContactPlaceholder;
use App\Models\Newsletter;
use App\Models\Service;
use App\Models\ServicesFeature;
use App\Models\ServicesFeatureImg;
use App\Models\ServicesService;
use App\Models\ServicesServicesCard;
use App\Models\ServicesTitreSpan;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbServicesTitreSpan = ServicesTitreSpan::all();
        $dbServicesServices = ServicesService::orderBy("id", "DESC")->paginate(9);
        $dbServicesFeatureImg = ServicesFeatureImg::all();
        $dbServicesFeature = ServicesFeature::all();
        $dbNewsletter = Newsletter::all();
        $dbServicesServicesCard = ServicesServicesCard::all();
        $contactContactUs = ContactContactUs::first();
        $contactMainOffice = ContactMainOffice::first();
        $contactPlaceholder = ContactPlaceholder::first();

        return view('pages.services', compact('dbServicesTitreSpan','dbServicesServices','dbServicesFeatureImg','dbServicesFeature','dbNewsletter','dbServicesServicesCard','contactContactUs','contactMainOffice','contactPlaceholder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
