<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Countries;

class FAQController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.faq.index', compact('countryData'));
  }
  public function settings()
  {
    $countries = new Countries();
    $countryData = $countries
      ->all()
      ->pluck('name.common')
      ->toArray();
    return view('content.faq.settings', compact('countryData'));
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
   * @param  \App\Models\FAQ  $fAQ
   * @return \Illuminate\Http\Response
   */
  public function show(FAQ $fAQ)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\FAQ  $fAQ
   * @return \Illuminate\Http\Response
   */
  public function edit(FAQ $fAQ)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\FAQ  $fAQ
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, FAQ $fAQ)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\FAQ  $fAQ
   * @return \Illuminate\Http\Response
   */
  public function destroy(FAQ $fAQ)
  {
    //
  }
}
