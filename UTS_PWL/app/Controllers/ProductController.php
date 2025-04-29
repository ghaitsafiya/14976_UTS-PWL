<?php

namespace App\Controllers;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();

        if (session()->get('role') == 'admin') {
            return view('admin/product_list', $data);
        } else {
            return view('user/product_list', $data);
        }
    }

    public function create()
    {
        return view('admin/product_form');
    }

    public function store()
    {
        $model = new ProductModel();
        $model->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
        ]);
        return redirect()->to('/products');
    }

    public function edit($id)
    {
        $model = new ProductModel();
        $data['product'] = $model->find($id);
        return view('admin/product_form', $data);
    }

    public function update($id)
    {
        $model = new ProductModel();
        $model->update($id, [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
        ]);
        return redirect()->to('/products');
    }

    public function delete($id)
    {
        $model = new ProductModel();
        $model->delete($id);
        return redirect()->to('/products');
    }
}
