<?php
    trait Dialogie {

        //プロパティの定義
        public $person;
        public $phrase1;
        public $phrase2;
        public $phrase3;
        public $phrase4;
        public $phrase5;
        public $phrase6;

        //コンストラクタ
        function __construct($person) {
            $this -> person = $person;
        }

        public function get_phrase1(){ return $this->phrase1; }
		public function get_phrase2(){ return $this->phrase2; }
		public function get_phrase3(){ return $this->phrase3; }
		public function get_phrase4(){ return $this->phrase4; }
		public function get_phrase5(){ return $this->phrase5; }
		public function get_phrase6(){ return $this->phrase6; }

		public function set_phrase1($phrase1){ $this->phrase1 = $phrase1; }
		public function set_phrase2($phrase2){ $this->phrase2 = $phrase2; }
		public function set_phrase3($phrase3){ $this->phrase3 = $phrase3; }
		public function set_phrase4($phrase4){ $this->phrase4 = $phrase4; }
		public function set_phrase5($phrase5){ $this->phrase5 = $phrase5; }
		public function set_phrase6($phrase6){ $this->phrase6 = $phrase6; }
    }
?>