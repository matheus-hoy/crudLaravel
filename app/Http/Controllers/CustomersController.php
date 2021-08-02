<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;


class CustomersController extends Controller
{
    public function create()
    {
        return view("customers.create", [
            'title' => 'Cadastrar Cliente'
        ]);
    }

    public function edit($id)
    {
        return view("customers.edit", [
            'title' => 'Meu Titulo',
            'customer' => Customer::find($id)
        ]);
    }

    public function index()
    {
        return view("customers.index", [
            'title' => 'Listar Clientes',
            'customers' => Customer::paginate(4)
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required',
            'cpf'      => 'required',
            'email'    => 'required|email|unique:customers,email',
            'telefone' => 'required'
        ]);

        Customer::create($data);

        session()->flash('success', "Cliente cadastrado com sucesso!");

        return redirect()->route('customers.index');
    }

    public function show($id)
    {
        return view("customers.show", [
            'title' => 'Visualização de Cliente',
            'customer' => Customer::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'cpf' =>  'required',
            'email' => 'required|email|max:255|unique:customers,email,' . $id,
            'telefone' => 'required'
        ]);
        $customer = Customer::findOrFail($id);

        $customer->update($data);

        return redirect()->route('customers.index')->with(
            'success',
            'Cliente atualizado com sucesso'
        );
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);

        $customer->delete();

        return redirect()->route('customers.index')->with(
            'success',
            'Cliente removido com sucesso'
        );
    }

}
