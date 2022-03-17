<?php
    function kelulusan($nilai_rata2) {
        if ($nilai_rata2 > 55) {
            return $lulus = "Selamat Anda Dinyatakan Lulus!";
        } else {
            return $lulus = "Mohon Maaf Anda Harus Mengulang Pada Tahun Ajaran Mendatang.";
        }
    }

    function grade($nilai_rata2) {
        if ($nilai_rata2 <= 35) {
            return $grade = 'E';
        } elseif ($nilai_rata2 <= 55) {
            return $grade = 'D';
        } elseif ($nilai_rata2 <= 69) {
            return $grade = 'C';
        } elseif ($nilai_rata2 <= 84) {
            return $grade = 'B';
        } elseif ($nilai_rata2 <= 100) {
            return $grade = 'A';
        } else {
            return $grade = 'I';
        }
    }

    function predikat($nilai_rata2) {
        switch (grade($nilai_rata2)) {
            case 'A':
                return $keterangan = 'Sangat Memuaskan';
                break;
            case 'B':
                return $keterangan = 'Memuaskan';
                break;
            case 'C':
                return $keterangan = 'Cukup';
                break;
            case 'D':
                return $keterangan = 'Kurang';
                break;
            case 'E':
                return $keterangan = 'Sangat Kurang';
                break;
            default:
                return $keterangan = 'Tidak Ada';
                break;
        }
    }
?>