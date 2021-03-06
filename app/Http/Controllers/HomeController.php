<?php

namespace App\Http\Controllers;

use App\Models\ContactContactUs;
use App\Models\ContactMainOffice;
use App\Models\ContactPlaceholder;
use App\Models\Home;
use App\Models\HomeAboutContant;
use App\Models\HomeCardSection;
use App\Models\HomeCarousel;
use App\Models\HomeCarouselIntro;
use App\Models\HomePromotion;
use App\Models\HomeSection;
use App\Models\HomeService;
use App\Models\HomeTestimonial;
use App\Models\HomeTitre;
use App\Models\HomeTitreSpan;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbHomeAboutContant = HomeAboutContant::all();
        $dbHomeCardSection = HomeCardSection::all();
        $dbHomeCarousel = HomeCarousel::all();
        $dbHomeCarouselIntro = HomeCarouselIntro::all();
        $dbHome = Home::all();
        $dbHomePromotion = HomePromotion::all();
        $dbHomeSection = HomeSection::all();
        $dbHomeService = HomeService::all();
        $dbHomeTestimonial = HomeTestimonial::all();
        $testimonials = HomeTestimonial::orderBy("id", "desc")->limit(6)->get(); //afficher les 6 derniers
        $dbHomeTitreSpan = HomeTitreSpan::all();
        $dbHomeTitre = HomeTitre::all();
        $dbNewsletter = Newsletter::all();
        $contactContactUs = ContactContactUs::first();
        $contactMainOffice = ContactMainOffice::first();
        $contactPlaceholder = ContactPlaceholder::first();

        return view('welcome', compact('dbHomeAboutContant','dbHomeCardSection','dbHomeCarousel','dbHomeCarouselIntro','dbHome','dbHomePromotion','dbHomeSection','dbHomeService','dbHomeTestimonial','testimonials','dbHomeTitreSpan','dbHomeTitre','dbNewsletter','contactContactUs','contactMainOffice','contactPlaceholder'));

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
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
