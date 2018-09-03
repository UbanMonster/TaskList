<?php 

    class Produto {

        private $id;
        private $style;
	private $itens;

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getStyle() {
            return $this->style;
        }

        public function setStyle($style) {
            $this->style = $style;
        }
	
	public function getItens() {
		return $this->itens;
	}

	public function setItens($itens) {
		$this->itens = $itens;
	}

    }

    ?>
