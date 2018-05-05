<?php 
class fakultas{
	public function getFakultas(){
		$kode = [
            '1'  => 'Fakultas Kedokteran',
            '2'  => 'Fakultas Ilmu Komputer',
            '3'  => 'Fakultas Hukum',
            '4'  => 'Fakultas Kedokteran Hewan',
            '5'  => 'Fakultas Teknik'
        ];
		return $kode[rand(1,5)];
	} 
}

?>
