<?php

namespace App\Data;

/**
 * Katalog jasa sinkron dengan 43 artikel dari list.md.
 * Semua item pada daftar baru memiliki halaman artikel sendiri.
 */
class ServiceCatalog
{
    public static function all(): array
    {
        return [
            ['name' => 'Jasa UKL-UPL AMDAL PERTEK RINTEK UJI LINGKUNGAN', 'slug' => 'jasa-ukl-upl-amdal-pertek-rintek-uji-lingkungan', 'type' => 'primary', 'category' => 'jasa-lingkungan-limbah'],
            ['name' => 'Jasa Sertifikat Laik Fungsi (SLF) dan Nomor Induk Data Instalasi (NIDI)', 'slug' => 'jasa-sertifikat-laik-fungsi-slf-dan-nomor-induk-data-instalasi-nidi', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa Sertifikat Laik Operasi (SLO)', 'slug' => 'jasa-sertifikat-laik-operasi-slo', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'JASA RIKSA UJI SILO (SURAT IZIN LAYAK OPERASI) SIA (SURAT IZIN ALAT)', 'slug' => 'jasa-riksa-uji-silo-surat-izin-layak-operasi-sia-surat-izin-alat', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'JASA SILO (SURAT IZIN LAYAK OPERASI) RIKSA UJI SIA (SURAT IZIN ALAT)', 'slug' => 'jasa-silo-surat-izin-layak-operasi-riksa-uji-sia-surat-izin-alat', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'JASA SIA (SURAT IZIN ALAT) SILO (SURAT IZIN LAYAK OPERASI) RIKSA UJI', 'slug' => 'jasa-sia-surat-izin-alat-silo-surat-izin-layak-operasi-riksa-uji', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa Riksa Uji Alat', 'slug' => 'jasa-riksa-uji-alat', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa SILO (Surat Izin Layak Operasi)', 'slug' => 'jasa-silo-surat-izin-layak-operasi', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa SIA (Surat Izin Alat)', 'slug' => 'jasa-sia-surat-izin-alat', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa Transportasi & Pengelolaan Limbah B3', 'slug' => 'jasa-transportasi-dan-pengelolaan-limbah-b3', 'type' => 'primary', 'category' => 'jasa-lingkungan-limbah'],
            ['name' => 'Jasa Audit Keuangan Perusahaan', 'slug' => 'jasa-audit-keuangan-perusahaan', 'type' => 'primary', 'category' => 'jasa-lainnya'],
            ['name' => 'Jasa Kajian Safety Culture Maturity Level', 'slug' => 'jasa-kajian-safety-culture-maturity-level', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
            ['name' => 'Jasa Kajian Fire Risk Asessment', 'slug' => 'jasa-kajian-fire-risk-asessment', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
            ['name' => 'Jasa Kajian Lingkungan', 'slug' => 'jasa-kajian-lingkungan', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
            ['name' => 'Jasa Kajian Transportasi', 'slug' => 'jasa-kajian-transportasi', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
            ['name' => 'Jasa Kajian Maritim', 'slug' => 'jasa-kajian-maritim', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
            ['name' => 'Jasa Kajian Budaya Kerja Perusahaan', 'slug' => 'jasa-kajian-budaya-kerja-perusahaan', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
            ['name' => 'Jasa Kajian Kesehatan', 'slug' => 'jasa-kajian-kesehatan', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
            ['name' => 'Jasa Kajian Ekonomi', 'slug' => 'jasa-kajian-ekonomi', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
            ['name' => 'Jasa Kajian Sosial', 'slug' => 'jasa-kajian-sosial', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
            ['name' => 'Jasa Kajian Pendidikan', 'slug' => 'jasa-kajian-pendidikan', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
            ['name' => 'Jasa Penyusunan Dokumen Studi Kelayakan Bisnis/Usaha', 'slug' => 'jasa-penyusunan-dokumen-studi-kelayakan-bisnis-usaha', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
            ['name' => 'Jasa Penyusunan Kajian Tarif Medis & Non Medis Rumah Sakit BLUD RSUD', 'slug' => 'jasa-penyusunan-kajian-tarif-medis-dan-non-medis-rumah-sakit-blud-rsud', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
            ['name' => 'Jasa Publikasi Jurnal Internasional Scopus', 'slug' => 'jasa-publikasi-jurnal-internasional-scopus', 'type' => 'primary', 'category' => 'jasa-lainnya'],
            ['name' => '⁠Jasa Publikasi Jurnal Sinta 1, 2, 3, 4 & 5', 'slug' => 'jasa-publikasi-jurnal-sinta-1-2-3-4-dan-5', 'type' => 'primary', 'category' => 'jasa-lainnya'],
            ['name' => 'Jasa Pembuatan Akun LPSE', 'slug' => 'jasa-pembuatan-akun-lpse', 'type' => 'primary', 'category' => 'jasa-lainnya'],
            ['name' => 'Jasa Lapor LKPM', 'slug' => 'jasa-lapor-lkpm', 'type' => 'primary', 'category' => 'jasa-lainnya'],
            ['name' => 'Jasa Lapor Rups', 'slug' => 'jasa-lapor-rups', 'type' => 'primary', 'category' => 'jasa-lainnya'],
            ['name' => 'Jasa ISO 19650 BIM', 'slug' => 'jasa-iso-19650-bim', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
            ['name' => 'Jasa ISO 50001 Sistem Manajemen Energi (EnMS)', 'slug' => 'jasa-iso-50001-sistem-manajemen-energi-enms', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
            ['name' => 'Jasa ISO 9001, 14001 dan 45001', 'slug' => 'jasa-iso-9001-14001-dan-45001', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
            ['name' => 'Jasa ISO 22000, HACCP, GMP dan FSSC', 'slug' => 'jasa-iso-22000-haccp-gmp-dan-fssc', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
            ['name' => 'Jasa SBU Konstruksi, SBU Kelistrikan, SBU Konsultan, SBU KADIN', 'slug' => 'jasa-sbu-konstruksi-sbu-kelistrikan-sbu-konsultan-sbu-kadin', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa Pengurusan Sertifikat Standar atau IUJK', 'slug' => 'jasa-pengurusan-sertifikat-standar-atau-iujk', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa SKK/SKA/SKT', 'slug' => 'jasa-skk-ska-skt', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa SERKOM', 'slug' => 'jasa-serkom', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa Pengurusan PKKPR', 'slug' => 'jasa-pengurusan-pkkpr', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa INU (Izin Niaga Umum)', 'slug' => 'jasa-inu-izin-niaga-umum', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa Izin Pengangkutan Migas', 'slug' => 'jasa-izin-pengangkutan-migas', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa SPDA CIVD', 'slug' => 'jasa-spda-civd', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa SIUPKK (KEAGENAN KAPAL) Free ISO 9001', 'slug' => 'jasa-siupkk-keagenan-kapal-free-iso-9001', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa SIUJPT (Surat Izin Usaha Jasa Pengurusan Transportasi) KBLI 52291', 'slug' => 'jasa-siujpt-surat-izin-usaha-jasa-pengurusan-transportasi-kbli-52291', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa Sertifikat HACCP', 'slug' => 'jasa-sertifikat-haccp', 'type' => 'primary', 'category' => 'jasa-kajian-teknis'],
        ];
    }

    public static function primary(): array
    {
        return array_values(array_filter(self::all(), fn ($item) => $item['type'] === 'primary'));
    }

    public static function categories(): array
    {
        return [
            'jasa-perizinan-riksa-uji' => ['label' => 'Jasa Perizinan & Riksa Uji Teknis', 'letter' => 'H'],
            'jasa-kajian-teknis' => ['label' => 'Jasa Kajian Teknis & Keselamatan', 'letter' => 'I'],
            'jasa-lingkungan-limbah' => ['label' => 'Jasa Lingkungan & Pengelolaan Limbah', 'letter' => 'J'],
            'jasa-lainnya' => ['label' => 'Jasa Lainnya', 'letter' => 'K'],
        ];
    }

    public static function byCategory(string $category): array
    {
        return array_values(array_filter(self::primary(), fn ($item) => $item['category'] === $category));
    }

    public static function findBySlug(string $slug): ?array
    {
        foreach (self::all() as $item) {
            if ($item['slug'] === $slug) {
                return $item;
            }
        }

        return null;
    }
}
