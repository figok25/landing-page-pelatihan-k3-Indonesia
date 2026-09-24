<?php

namespace App\Data;

/**
 * Konten kurasi (badge kecil + deskripsi satu-kalimat) per layanan jasa,
 * padanan TrainingContent.php untuk sisi pelatihan. Dipakai di kartu
 * katalog jasa supaya badge tidak lagi statis "JASA K3" untuk semua
 * layanan, melainkan mengikuti jenis layanannya masing-masing.
 */
class ServiceContent
{
    /**
     * @return array<string, array{badge: string, description: string}>
     */
    public static function overrides(): array
    {
        return [
            'jasa-ukl-upl-amdal-pertek-rintek' => ['badge' => 'AMDAL & LINGKUNGAN', 'description' => 'Penyusunan dokumen UKL-UPL, AMDAL, Pertek, dan Rintek sesuai ketentuan lingkungan.'],
            'jasa-sertifikat-laik-fungsi-dan-nomor-induk-data-instalasi' => ['badge' => 'SLF & NIDI', 'description' => 'Pengurusan Sertifikat Laik Fungsi bangunan beserta Nomor Induk Data Instalasi.'],
            'jasa-sertifikat-laik-operasi' => ['badge' => 'SLO', 'description' => 'Pengurusan Sertifikat Laik Operasi untuk instalasi dan peralatan listrik.'],
            'jasa-riksa-uji-alat' => ['badge' => 'RIKSA UJI ALAT', 'description' => 'Pemeriksaan dan pengujian teknis kelayakan alat sesuai regulasi K3.'],
            'silo' => ['badge' => 'SILO', 'description' => 'Pengurusan Surat Izin Layak Operasi untuk peralatan dan instalasi kerja.'],
            'sia' => ['badge' => 'SIA', 'description' => 'Pengurusan Surat Izin Alat sebagai bagian dari kelengkapan legalitas operasional.'],
            'jasa-transportasi-pengelolaan-limbah-b3' => ['badge' => 'LIMBAH B3', 'description' => 'Layanan transportasi dan pengelolaan limbah B3 sesuai ketentuan lingkungan.'],
            'jasa-audit-keuangan-perusahaan' => ['badge' => 'AUDIT KEUANGAN', 'description' => 'Audit keuangan perusahaan untuk mendukung transparansi dan kepatuhan.'],
            'jasa-kajian-safety-culture-maturity-level' => ['badge' => 'SAFETY CULTURE', 'description' => 'Pengukuran tingkat kematangan budaya keselamatan kerja di perusahaan.'],
            'jasa-kajian-fire-risk-asessment' => ['badge' => 'FIRE RISK', 'description' => 'Kajian risiko kebakaran untuk mendukung mitigasi dan kesiapsiagaan.'],
            'jasa-kajian-lingkungan' => ['badge' => 'KAJIAN LINGKUNGAN', 'description' => 'Kajian dampak dan pengelolaan aspek lingkungan pada kegiatan usaha.'],
            'jasa-kajian-transportasi' => ['badge' => 'KAJIAN TRANSPORTASI', 'description' => 'Kajian teknis aspek transportasi terkait kegiatan operasional perusahaan.'],
            'jasa-kajian-maritim' => ['badge' => 'KAJIAN MARITIM', 'description' => 'Kajian teknis aspek maritim untuk kegiatan dan fasilitas terkait perairan.'],
            'jasa-kajian-budaya-kerja-perusahaan' => ['badge' => 'BUDAYA KERJA', 'description' => 'Kajian budaya kerja untuk mendukung produktivitas dan keselamatan perusahaan.'],
            'jasa-kajian-kesehatan' => ['badge' => 'KAJIAN KESEHATAN', 'description' => 'Kajian aspek kesehatan kerja untuk mendukung kesejahteraan tenaga kerja.'],
            'jasa-kajian-ekonomi' => ['badge' => 'KAJIAN EKONOMI', 'description' => 'Kajian aspek ekonomi terkait kelayakan dan dampak kegiatan usaha.'],
            'jasa-kajian-sosial' => ['badge' => 'KAJIAN SOSIAL', 'description' => 'Kajian aspek sosial kemasyarakatan terkait kegiatan dan operasional perusahaan.'],
            'jasa-kajian-pendidikan' => ['badge' => 'KAJIAN PENDIDIKAN', 'description' => 'Kajian aspek pendidikan dan pengembangan kompetensi terkait kebutuhan perusahaan.'],
        ];
    }

    /**
     * @return array{badge: string, description: string}
     */
    public static function for(string $slug, string $name): array
    {
        return self::overrides()[$slug] ?? [
            'badge' => 'Jasa K3',
            'description' => "Layanan {$name} sesuai kebutuhan dan ketentuan yang berlaku.",
        ];
    }
}
