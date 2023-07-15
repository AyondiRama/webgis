<?php

namespace App\Controllers;

class Home extends BaseController
{

    // INI FUNCTION CLASS CONTROLLER UNTUK INDEX MENAMPILKAN PADA HALAMAN DASHBOARD (VIEW -> V_DASHBOARD)

    public function index()
    {
        $data = [];
        $data['validation'] = null;

        if ($this->request->getMethod() === 'post') {
            $rules = [
                'username' => 'required',
                'password' => 'required'
            ];

            if ($this->validate($rules)) {
                $username = $this->request->getVar('username');
                $password = $this->request->getVar('password');

                // Cek username dan password yang diberikan
                if ($username === 'admin' && $password === 'password') {
                    session()->set('logged_in', true);
                    return redirect()->to(base_url('home/dashboard'));

                } else {
                    $data['error'] = 'Username atau password salah';
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        echo view('login', $data);
    }

    public function logout()
    {
        session()->remove('logged_in');
        return redirect()->to('login');
    }


    public function dashboard() // INI ADALAH CLASS INDEX
    {
        $data = [
            'head' => 'Dashboard',
            'page' => 'v_dashboard',
        ];
        return view('v_tamplate',$data);
    }

    
    public function viewmap()
    {
        $data = [
            'head' => 'ViewMap',
            'page' => 'v_viewmap',
        ];
        return view('v_tamplate',$data);
    }

    public function basemap()
    {
        $data = [
            'head' => 'BaseMap',
            'page' => 'v_basemap',
        ];
        return view('v_tamplate',$data);
    }

    public function viewmarker()
    {
        $data = [
            'head' => 'ViewMarker',
            'page' => 'v_marker',
        ];
        return view('v_tamplate',$data);
    }
    public function circle()
    {
        $data = [
            'head' => 'CircleZone',
            'page' => 'v_circle',
        ];
        return view('v_tamplate',$data);
    }

    public function polyline()
    {
        $data = [
            'head' => 'PolyLine',
            'page' => 'v_polyline',
        ];
        return view('v_tamplate',$data);
    }
    public function polygon()
    {
        $data = [
            'head' => 'Polygon',
            'page' => 'v_polygon',
        ];
        return view('v_tamplate',$data);
    }
    public function geojson()
    {
        $data = [
            'head' => 'GeoJSON',
            'page' => 'v_geojson',
        ];
        return view('v_tamplate',$data);
    }

    public function getcoordinat()
    {
        $data = [
            'head' => 'GetCoordinat',
            'page' => 'v_get_coordinat',
        ];
        return view('v_tamplate',$data);
    }
    public function getcoordinatradius()
    {
        $data = [
            'head' => 'GetCoordinatRadius',
            'page' => 'v_get_coordinat_radius',
        ];
        return view('v_tamplate',$data);
    }

    public function geolocation()
    {
        $data = [
            'head' => 'Geolocation',
            'page' => 'v_geolocation',
        ];
        return view('v_tamplate',$data);
    }

    public function rute()
    {
        $data = [
            'head' => 'RuteMap',
            'page' => 'v_rute',
        ];
        return view('v_tamplate',$data);
    }
    public function ruteuser()
    {
        $data = [
            'head' => 'RuteUser',
            'page' => 'v_rute_user',
        ];
        return view('v_tamplate',$data);
    }
}
