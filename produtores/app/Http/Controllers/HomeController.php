<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ModelLogProdutor;

class HomeController extends Controller
{
    private $produtores;
    function __construct()
    {

        $ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://191.252.100.72/creditares/api/v1/produtores?key=fpGCVXMudaBEmA46BgRG7LLrHqvQDeSb');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
		$this->produtores = curl_exec($ch);
		curl_close($ch);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dados = json_decode($this->produtores);
        foreach ($dados as $key => $value) {
                
            $log_produtor = DB::select("
                select count(id_produtor) as tot, max( DATE_FORMAT(created_at,'%d/%m/%Y %H:%i:%s')) as dt_ultima_consulta
                from log_produtor 
                where id_produtor = ?", [$value->id]
            );

            $dados[$key]->total_acessos = $log_produtor[0]->tot;
            $dados[$key]->ultimo_acesso = $log_produtor[0]->dt_ultima_consulta;
        
        }
        return view('produtores.lista',compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {   
        $dados = [
            'id_produtor' => $id,
        ];
        return ModelLogProdutor::create($dados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imovel = $request->all();

        $produtores = json_decode($this->produtores);
        $produtor = [];
        $atividades = [];
        foreach ($produtores as $key => $value) {
            if($value->id == $imovel['id_produtor']){
                $produtor = $value;
            }
        }

        foreach ($produtor->imoveis as $key => $value) {
            if($value->id == $imovel['id_imovel']){
                $atividades = $value;
            }
        }

        echo json_encode($atividades->atividades);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->create($id);
        $produtores = json_decode($this->produtores);
        $produtor = [];
        foreach ($produtores as $key => $value) {
            if($value->id == $id){
                $produtor = $value;
            }
        }

        $imoveis = $produtor->imoveis;
        $nome_produtor = $produtor->nome;
        $id_produtor = $produtor->id;
        return view('produtores.imoveis',compact('imoveis','nome_produtor','id_produtor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
