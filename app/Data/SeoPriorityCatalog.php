<?php

namespace App\Data;

/**
 * Daftar kombinasi (pelatihan + kota) dan (jasa + kota) yang SENGAJA dipilih
 * untuk dibuatkan halaman SEO Level 2 (/pelatihan/{slug}/{kota} dan
 * /jasa/{slug}/{kota}).
 *
 * Mengikuti prinsip blueprint #38 & #39: dengan 169 pelatihan x 514
 * kabupaten/kota = 86.966 kemungkinan kombinasi, TIDAK BOLEH digenerate
 * otomatis semuanya. Halaman regional hanya dibuat untuk kombinasi
 * high-value keyword + lokasi relevan yang benar-benar punya konten
 * yang cukup (bukan artikel tipis hasil find-replace nama kota).
 *
 * Isi awal di bawah ini persis mengikuti contoh prioritas pada blueprint
 * bagian #39. Tambahkan baris baru di sini HANYA setelah konten artikel
 * untuk kombinasi tersebut sudah disiapkan (lihat blueprint #14 & #40).
 */
class SeoPriorityCatalog
{
    /**
     * @return array<int, array{training_slug: string, city_slug: string}>
     */
    public static function trainingLocations(): array
    {
        return [
            ['training_slug' => 'ahli-k3-umum', 'city_slug' => 'kota-malang'],
            ['training_slug' => 'ahli-k3-umum', 'city_slug' => 'kota-surabaya'],
            ['training_slug' => 'operator-forklift-kelas-1', 'city_slug' => 'kota-malang'],
            ['training_slug' => 'k3-konstruksi', 'city_slug' => 'kota-surabaya'],
        ];
    }

    /**
     * @return array<int, array{service_slug: string, city_slug: string}>
     */
    public static function serviceLocations(): array
    {
        return [
            ['service_slug' => 'jasa-riksa-uji-alat', 'city_slug' => 'kota-malang'],
        ];
    }

    public static function isTrainingLocationAllowed(string $trainingSlug, string $citySlug): bool
    {
        foreach (self::trainingLocations() as $item) {
            if ($item['training_slug'] === $trainingSlug && $item['city_slug'] === $citySlug) {
                return true;
            }
        }

        return false;
    }

    public static function isServiceLocationAllowed(string $serviceSlug, string $citySlug): bool
    {
        foreach (self::serviceLocations() as $item) {
            if ($item['service_slug'] === $serviceSlug && $item['city_slug'] === $citySlug) {
                return true;
            }
        }

        return false;
    }
}
