<?php
namespace Models;
use Interfaces\Locavel;

class Moto extends Veiculo implements Locavel {

    public function calcularAlugel(int $dias): float {
        return $dias * DIARIA_MOTO;
    }

    public function alugar(): string {
        if ($this->disponivel){
            $this->disponivel = false;
            return "Moto '{$this->modelo}' alugado com sucesso!";
        }
        return "Moto '{$this->modelo}' não está disponível.";
    }

    public function devolver(): string {
        if (!$this->disponivel){
            $this->disponivel = true;
            return "Moto '{$this->modelo}' devolvido com sucesso!";
        }
        return "Moto '{$this->modelo}' já está disponível.";
    }
}
