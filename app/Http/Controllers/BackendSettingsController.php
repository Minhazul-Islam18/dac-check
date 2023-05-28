<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PragmaRX\Countries\Package\Countries;

class BackendSettingsController extends Controller
{
    public function GeneralSettings()
    {
        $countries = new Countries();
        $countryData = $countries
            ->all()
            ->pluck('name.common')
            ->toArray();
        return view('content.settings.index', compact('countryData'));
    }
    public function FooterSettings()
    {
        $countries = new Countries();
        $countryData = $countries
            ->all()
            ->pluck('name.common')
            ->toArray();
        return view('content.settings.footer', compact('countryData'));
    }
    public function HeaderSettings()
    {
        $countries = new Countries();
        $countryData = $countries
            ->all()
            ->pluck('name.common')
            ->toArray();
        return view('content.settings.header', compact('countryData'));
    }
    public function PreloaderSettings()
    {
        $countries = new Countries();
        $countryData = $countries
            ->all()
            ->pluck('name.common')
            ->toArray();
        return view('content.settings.preloader', compact('countryData'));
    }
    public function ThirdPartySettings()
    {
        $countries = new Countries();
        $countryData = $countries
            ->all()
            ->pluck('name.common')
            ->toArray();
        return view('content.settings.third-party', compact('countryData'));
    }
    public function SocialSettings()
    {
        $countries = new Countries();
        $countryData = $countries
            ->all()
            ->pluck('name.common')
            ->toArray();
        return view('content.settings.social', compact('countryData'));
    }
    public function MaintenanceSettings()
    {
        $countries = new Countries();
        $countryData = $countries
            ->all()
            ->pluck('name.common')
            ->toArray();
        return view('content.settings.maintenance', compact('countryData'));
    }
    public function SocialAuthSettings()
    {
        $countries = new Countries();
        $countryData = $countries
            ->all()
            ->pluck('name.common')
            ->toArray();
        return view('content.settings.social-login', compact('countryData'));
    }
    public function MailSettings()
    {
        $countries = new Countries();
        $countryData = $countries
            ->all()
            ->pluck('name.common')
            ->toArray();
        return view('content.settings.mail.settings', compact('countryData'));
    }
    public function MailTemplates()
    {
        $countries = new Countries();
        $countryData = $countries
            ->all()
            ->pluck('name.common')
            ->toArray();
        return view('content.settings.mail.mail-templates', compact('countryData'));
    }
    public function WalletSettings()
    {
        $countries = new Countries();
        $countryData = $countries
            ->all()
            ->pluck('name.common')
            ->toArray();
        return view('content.settings.wallet.settings', compact('countryData'));
    }
    public function WalletType()
    {
        $countries = new Countries();
        $countryData = $countries
            ->all()
            ->pluck('name.common')
            ->toArray();
        return view('content.settings.wallet.type', compact('countryData'));
    }
    public function WalletMovements()
    {
        $countries = new Countries();
        $countryData = $countries
            ->all()
            ->pluck('name.common')
            ->toArray();
        return view('content.settings.wallet.movements.index', compact('countryData'));
    }
    public function  DepositDetatils()
    {
        $countries = new Countries();
        $countryData = $countries
            ->all()
            ->pluck('name.common')
            ->toArray();
        return view('content.settings.wallet.movements.details', compact('countryData'));
    }
    public function  FiscalYears()
    {
        $countries = new Countries();
        $countryData = $countries
            ->all()
            ->pluck('name.common')
            ->toArray();
        return view('content.user_management.fiscal-years', compact('countryData'));
    }
}
