<?php
    class Pokemon {
		//プロパティの定義
        public $identify;
        public $name;
        public $picture;
		private $power;
		private $offensive;
		private $defense;
		private $speed;
		private $attribute1;
		private $attribute2;
		public $evolution;
		private $preform1;
		private $prename1;
		private $preform2;
		private $prename2;
		private $attack1;
		private $attack2;
		private $attack3;
		private $attack4;

		//コンストラクタ
		function __construct($identify, $name, $picture) {
			$this -> identify = $identify;
			$this -> name = $name;
			$this -> picture = $picture;
		}

		public function get_identify(){ return $this->identify; }
		public function get_name(){ return $this->name; }
		public function get_picture(){ return $this->picture; }
		public function get_power(){ return $this->power; }
		public function get_offensive(){ return $this->offensive; }
		public function get_defense(){ return $this->defense; }
		public function get_speed(){ return $this->speed; }
		public function get_attribute1(){ return $this->attribute1; }
		public function get_attribute2(){ return $this->attribute2; }
		public function get_evolution(){ return $this->evolution; }
		public function get_preform1(){ return $this->preform1; }
		public function get_prename1(){ return $this->prename1; }
		public function get_preform2(){ return $this->preform2; }
		public function get_prename2(){ return $this->prename2; }
		public function get_attack1(){ return $this->attack1; }
		public function get_attack2(){ return $this->attack2; }
		public function get_attack3(){ return $this->attack3; }
		public function get_attack4(){ return $this->attack4; }

		public function set_power($power){ $this->power = $power; }
		public function set_offensive($offensive){ $this->offensive = $offensive; }
		public function set_defense($defense){ $this->defense = $defense; }
		public function set_speed($speed){ $this->speed = $speed; }
		public function set_attribute1($attribute1){ $this->attribute1 = $attribute1; }
		public function set_attribute2($attribute2){ $this->attribute2 = $attribute2; }
		public function set_evolution($evolution){ $this->evolution = $evolution; }
		public function set_preform1($preform1){ $this->preform1 = $preform1; }
		public function set_prename1($prename1){ $this->prename1 = $prename1; }
		public function set_preform2($preform2){ $this->preform2 = $preform2; }
		public function set_prename2($prename2){ $this->prename2 = $prename2; }
		public function set_attack1($attack1){ $this->attack1 = $attack1; }
		public function set_attack2($attack2){ $this->attack2 = $attack2; }
		public function set_attack3($attack3){ $this->attack3 = $attack3; }
		public function set_attack4($attack4){ $this->attack4 = $attack4; }

	}
?>