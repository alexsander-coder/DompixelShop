<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Exibir listagem.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {$products = Product::latest()->paginate(5);
    return view('products.index', compact('products'))
    ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Criação de produtos
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Guarda o produto criado
     *
     * @param  \Illuminate\Http\Request  
     * @return \Illuminate\Http\Response
     */
 public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'price' => 'required',
        'quantity' => 'required',
    ], [
        'name.required' => 'O campo nome é obrigatório.',
        'price.required' => 'O campo preço é obrigatório.',
        'quantity.required' => 'O campo quantidade é obrigatório.',
    ]);

    // converter em formato brl antes do insert
    $price = str_replace(',', '.', str_replace('.', '', $request->input('price'))) / 100;

    Product::create([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'price' => $price,
        'quantity' => $request->input('quantity'),
    ]);

    return redirect()->route('products.index')
        ->with('success', 'Produto criado com sucesso.');
}
/**
* Exibir produto por ID
*
* @param  \App\Product  $product
* @return \Illuminate\Http\Response
*/
public function show(Product $product)
{
return view('products.show',compact('product'));
}
/**
* Formulário para editar o produto selecionado
*
* @param  \App\Product  $product
* @return \Illuminate\Http\Response
*/
public function edit(Product $product)
{
return view('products.edit',compact('product'));
}
/**
* Fazer update do produto
*
* @param  \Illuminate\Http\Request  
* @param  \App\Product  
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Product $product)
{
$request->validate([
'name' => 'required',
'price' => 'required',
'quantity' => 'required',
], [
        'name.required' => 'O campo nome é obrigatório.',
        'price.required' => 'O campo preço é obrigatório.',
        'quantity.required' => 'O campo quantidade é obrigatório.',
    ]);

$product->update($request->all());
return redirect()->route('products.index')
->with('success','Produto alterado com sucesso');
}
/**
* Deleta um produto especifico
*
* @param  \App\Product  $product
* @return \Illuminate\Http\Response
*/
public function destroy(Product $product)
{
$product->delete();
return redirect()->route('products.index')
->with('success','Produto deletado com sucesso');
}
}