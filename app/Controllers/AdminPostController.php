<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;

class AdminPostController extends BaseController
{

    protected $PostModel;

    public function __construct() {
        $this->PostModel = new PostModel();
    }

    public function index()
    {
        $PostModel = model("PostModel");
        $data = [
            'post' => $PostModel->findAll()
        ];

        return view("posts/index", $data);
    }

    public function create(){
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('posts/create', $data);
    }

    public function store(){

        $valid = $this->validate([
                "judul" => [
                    'label' => "Judul",
                    'rules' => "required",
                    'error' => [
                        "required" => "{field} Harus Diisi!",
                    ]
                ],
                "slug" => [
                    'label' => "Slug",
                    'rules' => "required|is_unique[posts.slug]",
                    'error' => [
                        "required" => "{field} Harus Diisi!",
                        "is_unique" => "{field} Sudah Ada!",
                    ]
                ],
                "kategori" => [
                    'label' => "Kategori",
                    'rules' => "required",
                    'error' => [
                        "required" => "{field} Harus Diisi!",
                    ]
                ],
                "author" => [
                    'label' => "Author",
                    'rules' => "required",
                    'error' => [
                        "required" => "{field} Harus Diisi!",
                    ]
                ],
                "desc" => [
                    'label' => "Deskripsi",
                    'rules' => "required",
                    'error' => [
                        "required" => "{field} Harus Diisi!",
                    ]
                ]
            ]);

        if($valid){
            $data = [
                'judul' => $this->request->getVar('judul'),
                'slug' => $this->request->getVar('slug'),
                'kategori' => $this->request->getVar('kategori'),
                'author' => $this->request->getVar('author'),
                'desc' => $this->request->getVar('desc')
            ];

            $PostModel = model('PostModel');
            $PostModel -> insert($data);
            return redirect()->to(base_url('admin/posts'));

        }else{
            return redirect()->to(base_url('admin/posts/create'))->withInput()->with('validation',$this->validator);
        }

    }

    public function delete($slug){

        $posts = new PostModel();
        $posts->where(['slug' => $slug]) -> delete();
        session()->setFlashdata('message', 'Post berhasil dihapus');
        session()->setFlashdata('alert-class', 'alert-danger');
        return redirect()->to(base_url('admin/posts'));

    }

    public function edit($slug){
        session();

        $data = [
            'validation' => \Config\Services::validation(),
            'posts' => $this->PostModel->getPosts($slug)
        ];

        return view('posts/edit', $data);

    }

    public function update($slug){

        $valid = $this->validate([
            "judul" => [
                'label' => "Judul",
                'rules' => "required",
                'error' => [
                    "required" => "{field} Harus Diisi!",
                ]
            ],
            "slug" => [
                'label' => "Slug",
                'rules' => "required|is_unique[posts.slug]",
                'error' => [
                    "required" => "{field} Harus Diisi!",
                    "is_unique" => "{field} Sudah Ada!",
                ]
            ],
            "kategori" => [
                'label' => "Kategori",
                'rules' => "required",
                'error' => [
                    "required" => "{field} Harus Diisi!",
                ]
            ],
            "author" => [
                'label' => "Author",
                'rules' => "required",
                'error' => [
                    "required" => "{field} Harus Diisi!",
                ]
            ],
            "desc" => [
                'label' => "Deskripsi",
                'rules' => "required",
                'error' => [
                    "required" => "{field} Harus Diisi!",
                ]
            ],
        ]);

        if($valid){
            $PostModel = model("PostModel");
            $data = $this->request->getPost();
            $PostModel->update($slug, $data);
            session()->setFlashData('message', 'Post Berhasil di Update');
            session()->setFlashData('alert-class', 'alert-success');
            return redirect()->to(base_url('/admin/posts/'));
        }else{
            return redirect()->to(base_url('admin/posts/edit/' . $this->request->getVar('slug')))->withInput()->with('validation', $this->validator);
        }

    }

}
