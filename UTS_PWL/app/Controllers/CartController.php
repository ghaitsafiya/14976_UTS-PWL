<?php

namespace App\Controllers;

class CartController extends BaseController
{
    public function add($productId)
    {
        $session = session();

        // Ambil data keranjang dari session
        $cart = $session->get('cart') ?? [];

        // Tambahkan produk ke keranjang
        if (isset($cart[$productId])) {
            $cart[$productId] += 1; // Kalau sudah ada, tambah jumlah
        } else {
            $cart[$productId] = 1; // Kalau belum ada, buat baru
        }

        // Simpan kembali keranjang ke session
        $session->set('cart', $cart);

        return redirect()->to('/products')->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    public function view()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        return view('user/cart', ['cart' => $cart]);
    }
}
