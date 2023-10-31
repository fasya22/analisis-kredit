<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class CetakController extends Controller
{

    public function cetakaplikasi()
    {
        

        // Render the view as PDF
        $pdf = FacadePdf::loadView('front.pages.home.cetakaplikasi');

        // Display the PDF in the browser
        return $pdf->stream();
    }

    public function cetaklpdu1()
    {
        

        // Render the view as PDF
        $pdf = FacadePdf::loadView('front.pages.home.cetaklpdu1');

        // Display the PDF in the browser
        return $pdf->stream();
    }
    public function cetaklpdu2()
    {
        

        // Render the view as PDF
        $pdf = FacadePdf::loadView('front.pages.home.cetaklpdu2');

        // Display the PDF in the browser
        return $pdf->stream();
    }
    public function cetaklpduum()
    {
        

        // Render the view as PDF
        $pdf = FacadePdf::loadView('front.pages.home.cetaklpduum');

        // Display the PDF in the browser
        return $pdf->stream();
    }
    public function cetaklpjkios()
    {
        

        // Render the view as PDF
        $pdf = FacadePdf::loadView('front.pages.home.cetaklpjkios');

        // Display the PDF in the browser
        return $pdf->stream();
    }
    public function cetaklpjtanahkosong()
    {
        

        // Render the view as PDF
        $pdf = FacadePdf::loadView('front.pages.home.cetaklpjtanahkosong');

        // Display the PDF in the browser
        return $pdf->stream();
    }
    public function cetaklpjtanahbangunan()
    {
        

        // Render the view as PDF
        $pdf = FacadePdf::loadView('front.pages.home.cetaklpjtanahbangunan');

        // Display the PDF in the browser
        return $pdf->stream();
    }
    public function cetaklpjdeposito()
    {
        

        // Render the view as PDF
        $pdf = FacadePdf::loadView('front.pages.home.cetaklpjdeposito');

        // Display the PDF in the browser
        return $pdf->stream();
    }
    public function cetaklpjkendaraan()
    {
        

        // Render the view as PDF
        $pdf = FacadePdf::loadView('front.pages.home.cetaklpjkendaraan');

        // Display the PDF in the browser
        return $pdf->stream();
    }
}

