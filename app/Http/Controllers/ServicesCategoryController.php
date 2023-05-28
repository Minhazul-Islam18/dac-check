<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\servicesCategory;
use PragmaRX\Countries\Package\Countries;

class ServicesCategoryController extends Controller
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
    return view('content.services.category', compact('countryData'));
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
   * @param  \App\Models\servicesCategory  $servicesCategory
   * @return \Illuminate\Http\Response
   */
  public function show(servicesCategory $servicesCategory)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\servicesCategory  $servicesCategory
   * @return \Illuminate\Http\Response
   */
  public function edit(servicesCategory $servicesCategory)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\servicesCategory  $servicesCategory
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, servicesCategory $servicesCategory)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\servicesCategory  $servicesCategory
   * @return \Illuminate\Http\Response
   */
  public function destroy(servicesCategory $servicesCategory)
  {
    //
  }
}