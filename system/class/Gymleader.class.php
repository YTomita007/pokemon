<?php
    class Gymleader {
		//プロパティの定義
        public $identify;
        public $name;
        public $picture;
		public $pokemon1;
		public $pokemon2;
		public $pokemon3;
		public $pokemon4;
		public $pokemon5;
		public $pokemon6;

		//コンストラクタ
		function __construct($identify, $name, $picture) {
			$this -> identify = $identify;
			$this -> name = $name;
			$this -> picture = $picture;
		}
		
		public function get_identify(){ return $this->identify; }
		public function get_name(){ return $this->name; }
        public function get_picture(){ return $this->picture; }
        public function get_pokemon1(){ return $this->pokemon1; }
        public function get_pokemon2(){ return $this->pokemon2; }
        public function get_pokemon3(){ return $this->pokemon3; }
        public function get_pokemon4(){ return $this->pokemon4; }
        public function get_pokemon5(){ return $this->pokemon5; }
		public function get_pokemon6(){ return $this->pokemon6; }
		
		public function set_pokemon1($pokemon1){ $this->pokemon1 = $pokemon1; }
		public function set_pokemon2($pokemon2){ $this->pokemon2 = $pokemon2; }
		public function set_pokemon3($pokemon3){ $this->pokemon3 = $pokemon3; }
		public function set_pokemon4($pokemon4){ $this->pokemon4 = $pokemon4; }
		public function set_pokemon5($pokemon5){ $this->pokemon5 = $pokemon5; }
		public function set_pokemon6($pokemon6){ $this->pokemon6 = $pokemon6; }
    }
?>