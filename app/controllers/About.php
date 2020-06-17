<?php

class About
{
  public function index($nama = 'Gunawan', $pekerjaan = 'Dosen')
  {
    echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
  }
  public function page()
  {
    echo 'About/page';
  }
}
