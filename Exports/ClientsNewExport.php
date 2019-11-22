<?php 
namespace Modules\Event\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Modules\Event\Repositories\ClientNewRepository;

class ClientsNewExport implements FromCollection, WithStrictNullComparison
{
    public function collection()
    {
        return new Collection($this->data());
    }


    private function data(){
        return array_merge($this->header(), $this->body());
    }

    private function header(){
        return [['cod_cliente', 'comprador', 'email_cliente', 'telefone', 'razao_social', 'nome_fantasia', 'cpf_cnpj', 'rua', 'numero', 'bairo', 'cidade', 'estado', 'cep', 'pedidos']];
    }


    private function body(){
        $client_news = ClientNewRepository::loadNewClients();
        $body = [];

        foreach ($client_news as $client_new) {
            $client = $client_new->client;

            array_push($body, [
                $this->cod_cliente($client),
                $this->comprador($client),
                $this->email_cliente($client),
                $this->telefone($client),
                $this->razao_social($client),
                $this->nome_fantasia($client),
                $this->cpf_cnpj($client),
                $this->rua($client),
                $this->numero($client),
                $this->bairro($client),
                $this->cidade($client),
                $this->estado($client),
                $this->cep($client),
            ]);
        }

        return $body;
    }


    private function cod_cliente($client){
        return $client->id;
    }

    private function comprador($client){
        return $client->buyer;
    }

    private function email_cliente($client){
        return $client->email;
    }

    private function telefone($client){
        return $client->phone;
    }

    private function razao_social($client){
        return $client->corporate_name;
    }

    private function nome_fantasia($client){
        return $client->fantasy_name;
    }

    private function cpf_cnpj($client){
        return $client->cpf_cnpj;
    }

    private function rua($client){
        return $client->client_address->street;
    }

    private function numero($client){
        return $client->client_address->number;
    }

    private function bairro($client){
        return $client->client_address->neighborhood;
    }

    private function cidade($client){
        return $client->client_address->city;
    }

    private function estado($client){
        return $client->client_address->st;
    }

    private function cep($client){
        return $client->client_address->postcode;
    }

}