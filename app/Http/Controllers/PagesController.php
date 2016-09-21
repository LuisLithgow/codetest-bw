<?php
  namespace App\Http\Controllers;

  class PagesController extends Controller {
    public function getIndex() {
      return view('pages/welcome');
    }

    public function getAdmin() {
      return view('pages/admin');
    }

    public function getAbout() {
      $fname = "Luis";
      $lname = "Lithgow";
      $fullName = $fname . " " . $lname ;
      $email = "lalithgow@gmail.com";
      $data = [];
      $data["email"] = $email;
      $data["fullName"] = $fullName;

      return view('pages/about')->with("fullName", $fullName)
        -> with("email", $email);

        // -> with("data", $data) ;
      // return view('pages/about')->withFullName($fullName);
    }

    public function postData() {
      //
    }

    public function deleteApplication() {
      //
    }

  }




 ?>
