<?php
    class Assassinate {
		//プロパティの定義
        public $name;
        public $display;
		public $attack;
		public $cure;

		//コンストラクタ
		function __construct($name, $display, $attack, $cure) {
            $this -> name = $name;
            $this -> display = $display;
            $this -> attack = $attack;
            $this -> cure = $cure;
        }

        public function get_name(){ return $this->name; }
        public function get_display(){ return $this->display; }
        public function get_attack(){ return $this->attack; }
        public function get_cure(){ return $this->cure; }
    }
?>