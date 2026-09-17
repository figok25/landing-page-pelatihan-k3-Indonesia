<?php

namespace App\Data;

/**
 * Master data 21 baris jasa dari dokumen client (List_Pelatihan-7.docx).
 *
 * CATATAN PENTING:
 * Dari 21 baris, 18 adalah layanan jasa yang berbeda (type=primary).
 * 3 baris sisanya (JASA SILO SIA RIKSA UJI ALAT, JASA SIA SILO RIKSA UJI
 * ALAT, JASA RIKSA UJI SILO SIA) adalah variasi urutan kata dari layanan
 * yang SAMA dengan 'Jasa Riksa Uji Alat' (type=keyword_variant, lihat
 * variant_of_slug). Baris-baris ini TIDAK dibuatkan halaman/artikel
 * terpisah agar tidak melanggar aturan blueprint #14 (artikel tidak boleh
 * duplikat) - namun tetap disimpan sebagai data mentah dan bisa dipakai
 * sebagai variasi long-tail keyword pada title/meta description halaman
 * jasa utamanya.
 */
class ServiceCatalog
{
    /**
     * @return array<int, array{name: string, slug: string, type: string, category: string, variant_of_slug?: string}>
     */
    public static function all(): array
    {
        return [
            ['name' => 'Jasa UKL-UPL AMDAL Pertek Rintek', 'slug' => 'jasa-ukl-upl-amdal-pertek-rintek', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa Sertifikat Laik Fungsi (SLF) dan Nomor Induk Data Instalasi (NIDI)', 'slug' => 'jasa-sertifikat-laik-fungsi-dan-nomor-induk-data-instalasi', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa Sertifikat Laik Operasi (SLO)', 'slug' => 'jasa-sertifikat-laik-operasi', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'JASA SILO SIA RIKSA UJI ALAT', 'slug' => 'jasa-silo-sia-riksa-uji-alat', 'type' => 'keyword_variant', 'category' => 'jasa-perizinan-riksa-uji', 'variant_of_slug' => 'jasa-riksa-uji-alat'],
            ['name' => 'JASA SIA (SURAT IZIN ALAT) SILO (SURAT IZIN LAYAK OPERASI) RIKSA UJI ALAT', 'slug' => 'jasa-sia-silo-riksa-uji-alat', 'type' => 'keyword_variant', 'category' => 'jasa-perizinan-riksa-uji', 'variant_of_slug' => 'jasa-riksa-uji-alat'],
            ['name' => 'JASA RIKSA UJI SILO (SURAT IZIN LAYAK OPERASI) SIA (SURAT IZIN ALAT)', 'slug' => 'jasa-riksa-uji-silo-sia', 'type' => 'keyword_variant', 'category' => 'jasa-perizinan-riksa-uji', 'variant_of_slug' => 'jasa-riksa-uji-alat'],
            ['name' => 'Jasa Riksa Uji Alat', 'slug' => 'jasa-riksa-uji-alat', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'SILO (Surat Izin Layak Operasi)', 'slug' => 'silo', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'SIA (Surat Izin Alat)', 'slug' => 'sia', 'type' => 'primary', 'category' => 'jasa-perizinan-riksa-uji'],
            ['name' => 'Jasa Transportasi & Pengelolaan Limbah B3', 'slug' => 'jasa-transportasi-pengelolaan-limbah-b3', 'type' => 'primary', 'category' => 'jasa-lingkungan-limbah'],
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
        ];
    }

    /**
     * Hanya layanan utama (untuk ditampilkan sebagai card / dibuatkan halaman).
     *
     * @return array<int, array{name: string, slug: string, type: string, category: string}>
     */
    public static function primary(): array
    {
        return array_values(array_filter(self::all(), fn ($item) => $item['type'] === 'primary'));
    }

    /**
     * @return array<string, string>
     */
    public static function categories(): array
    {
        return [
            'jasa-perizinan-riksa-uji' => 'Jasa Perizinan & Riksa Uji Teknis',
            'jasa-kajian-teknis' => 'Jasa Kajian Teknis & Keselamatan',
            'jasa-lingkungan-limbah' => 'Jasa Lingkungan & Pengelolaan Limbah',
            'jasa-lainnya' => 'Jasa Lainnya',
        ];
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
