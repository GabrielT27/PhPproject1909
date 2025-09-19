<?php 
class disciplina {

private $materia;
private $professor;
private $lab;
private $nalunos;
private $nmedia;

private function __construct($materia, $professor, $lab, $nalunos, $nmedia) {
    $this->setMateria($materia);
    $this->setProfessor($professor);
    $this->setNalunos($nalunos);
    $this->setNmedia($nmedia);

}

private function setMateria ($materia) {
    $this->materia = ucwords(strtolower($materia));
}

private function setProfessor ($professor) {
    $this->professor = ucwords(strtolower($professor));

}

private function setNalunos ($nalunos) {
    $this->nalunos = abs($nalunos);
}

private function setNmedia ($nmedia) {
    $this->nmedia = number_format($nmedia, 2,);
}

public function ativar ($ativar) {
    if ($ativar == true) {
        echo "Essa disciplina esta ativa";
    }

    else {
        "Essa disciplina acabou de ser ativada";
        return true;
    }
}



}