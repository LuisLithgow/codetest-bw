<?php
  namespace App\Http\Controllers;

  class PagesController extends Controller {
    public function getIndex() {
      return view('pages/welcome');
    }

    public function getAdmin() {
      return view('pages/admin');
    }

    public function postData() {
      //
    }

    public function deleteApplication() {
      //
    }

  }




 ?>
