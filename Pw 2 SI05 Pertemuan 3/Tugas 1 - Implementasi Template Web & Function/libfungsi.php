<?php

function dataNilai($uts, $uas, $tugas){
    $total_nilai = $uts + $uas + $tugas;
    $dn = $total_nilai/3;

    return $dn;
}
	function kelulusan($dn){
		/**
		* Function kelulusan, jika:
		* total nilai lebih dari 55 maka lulus
		* total nilai kurang dari 55 maka tidak lulus
		*/
        if ($dn >= 55){
            return "Lulus";
        }else {
            return "Tidak Lulus";
        }
	}
	/**
		* Function grade, jika:
		* total nilai <= 100 maka A
		* total nilai <= 84 maka B
		* total nilai <= 69 maka C
		* total nilai <= 55 maka D
		* total nilai <= 35 maka E
		* selain itu maka I
		*/ 
	function grade($dn) {

        if($dn <= 35) {
            return 'E';
        } elseif ($dn <= 55) {
            return 'D';
        } elseif ($dn <= 69) {
            return 'C';
        } elseif ($dn <= 84) {
            return 'B';
        } elseif ($dn <= 100) {
            return 'A';
        } else {
            return 'I';
        }
    }
        
	
	
		/**
		* Function predikat, jika:
		* grade A maka Sangat Memuaskan
		* grade B maka Memuaskan
		* grade C maka Cukup
		* grade D maka Kurang
		* grade E maka Sangat Kurang
		* selain itu maka Tidak Ada
		*
		* Tips: Gunakan switch untuk mempermudah 
		* melakukan pengecekan kondisi berdasarkan function grade
		*/
    function predikat($dn){ 
        switch (grade($dn)) {
            case 'A' :
                return 'Sangat Memuaskan';
                break;
            case 'B' :
                return 'Memuaskan';
                break;
            case 'C' :
                return 'Cukup';
                break;
            case 'D' :
                return 'Kurang';
                break;
            case 'E' :
                return 'Sangat Kurang';
                break;
            
            
        }
	}
?>