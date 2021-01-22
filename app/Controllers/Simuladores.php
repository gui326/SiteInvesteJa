<?php namespace App\Controllers;

class Simuladores extends BaseController
{
	public function index()
	{
		return view('simuladores');
	}
    
    public function simular()
	{
		helper(['form', 'url']); 
    
        $dado = $this->request->getPost();
        
        $valor = $dado['valor'];
        settype($valor, "double");
        
        $taxa = $dado['taxa'];
        settype($taxa, "double"); 
        
        $prazo = $dado['prazo'];
        settype($prazo, "double");
        
        $calculo = $valor * (( 1 + $taxa / 100) ** $prazo); 
        
        $total = number_format($calculo, 2, ',', '.'); 
        $capital = number_format($valor, 2, ',', '.'); 
        
        $conta = $calculo - $valor;
        
        $lucro = number_format($conta, 2, ',', '.'); 
        
        $teste = ['total' => $total,
                  'capital' => $capital,
                  'lucro' => $lucro,
                 ];
        
        echo view('simuladores', $teste);
	}

	//--------------------------------------------------------------------

}
