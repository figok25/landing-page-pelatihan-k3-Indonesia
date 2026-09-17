<?php

namespace App\Data;

/**
 * Konten kurasi (badge kecil + deskripsi satu-kalimat) per pelatihan,
 * dipakai di kartu Direktori Lengkap. Sebagian besar diambil dari isi
 * yang sudah ditulis manual di partials/katalog/a-group..f-group (commit
 * sebelumnya) — dipindah ke sini supaya jadi satu sumber data, bukan
 * HTML yang diulang-ulang per file. Item yang belum dikurasi otomatis
 * pakai fallback generik lewat TrainingContent::for().
 */
class TrainingContent
{
    /**
     * @return array<string, array{badge: string, description: string}>
     */
    public static function overrides(): array
    {
        return [
            'ahli-k3-umum' => ['badge' => 'KEMNAKER RI', 'description' => 'Sertifikasi personil kunci pengawasan K3 di tempat kerja sesuai Permenaker 02/1992.'],
            'authorizer-gas-tester' => ['badge' => 'GAS TESTER', 'description' => 'Kalibrasi detektor H2S, Oksigen, LEL di area berbahaya eksplosif.'],
            'bekerja-di-ketinggian' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Bekerja di Ketinggian.'],
            'compressor' => ['badge' => 'COMPRESSOR', 'description' => 'Manajemen dan K3 pengoperasian sistem kompresi tinggi migas.'],
            'confined-space-utama' => ['badge' => 'CONFINED SPACE', 'description' => 'Sertifikasi petugas utama dan madya untuk bekerja di manhole dan tangki.'],
            'ddt-defensive-driving-training' => ['badge' => 'DRIVING', 'description' => 'Sertifikasi berkendara aman armada tambang, rig, dan logistik berat.'],
            'drilling' => ['badge' => 'DRILLING', 'description' => 'Keselamatan operasi rig pengeboran dan sumur minyak/gas.'],
            'drilling-machine' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Drilling Machine.'],
            'ergonomi' => ['badge' => 'SOFT SKILLS', 'description' => 'Modul komprehensif terapan pencegahan hazard behavior dan sistem permit industri.'],
            'h2s' => ['badge' => 'SOFT SKILLS', 'description' => 'Modul komprehensif terapan pencegahan hazard behavior dan sistem permit industri.'],
            'hazmat' => ['badge' => 'SOFT SKILLS', 'description' => 'Modul komprehensif terapan pencegahan hazard behavior dan sistem permit industri.'],
            'insiden-investigator' => ['badge' => 'INVESTIGASI', 'description' => 'Analisa RCA, wawancara insiden, dan CAPA pasca-kecelakaan berat.'],
            'juru-las-welder' => ['badge' => 'WELDING', 'description' => 'Kualifikasi juru las busur SMAW/GMAW posisi 1G-6G tekanan tinggi.'],
            'k3-konstruksi' => ['badge' => 'KEMNAKER RI', 'description' => 'Sertifikasi personil K3 Konstruksi untuk pengawasan keselamatan di proyek bangunan dan infrastruktur.'],
            'k3-pertambangan' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk K3 Pertambangan.'],
            'k3-ruang-terbatas' => ['badge' => 'CONFINED SPACE', 'description' => 'Sertifikasi petugas utama dan madya untuk bekerja di manhole dan tangki.'],
            'lift-eskalator' => ['badge' => 'ELEVATOR', 'description' => 'Teknisi operasional dan pemeliharaan travelator serta eskalator gedung.'],
            'loto' => ['badge' => 'SOFT SKILLS', 'description' => 'Modul komprehensif terapan pencegahan hazard behavior dan sistem permit industri.'],
            'mekanik-drilling' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Mekanik Drilling.'],
            'mobile-crane' => ['badge' => 'HEAVY CRANE', 'description' => 'Operasional pesawat angkat mobile dan pedestal offshore.'],
            'olb3-operator-pengelola-limbah-b3' => ['badge' => 'LIMBAH B3', 'description' => 'Penanggung Jawab dan Operator Pengelola TPS dan manifest Limbah B3.'],
            'operator-alat-berat' => ['badge' => 'ALAT BERAT', 'description' => 'Sertifikasi Earth Moving untuk proyek konstruksi dan tambang.'],
            'operator-bulldozer' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Operator Bulldozer.'],
            'operator-dump-truck' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Operator Dump Truck.'],
            'operator-excavator' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Operator Excavator.'],
            'operator-forklift-kelas-1' => ['badge' => 'SIO KEMNAKER', 'description' => 'Pengoperasian forklift aman untuk logistik, kelas 1 dan 2 kapasitas >15 Ton.'],
            'operator-genset' => ['badge' => 'PEMBANGKIT', 'description' => 'Operasional mesin diesel daya besar, sinkronisasi panel distribusi.'],
            'operator-gondola' => ['badge' => 'KETINGGIAN', 'description' => 'Operasional gondola gedung bertingkat untuk fasad dan pembersihan kaca.'],
            'operator-k3-cargo-hoist-crane-kelas-3-lift-barang' => ['badge' => 'HOIST', 'description' => 'Operasional monorail crane dan lift barang sesuai regulasi keselamatan angkat.'],
            'operator-k3-migas' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Operator K3 Migas.'],
            'operator-mesin-produksi-perkakas' => ['badge' => 'PRODUKSI', 'description' => 'Keselamatan mesin bubut, milling, CNC, dan stamping press.'],
            'operator-motor-grader' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Operator Motor Grader.'],
            'operator-pesawat-tenaga-produksi-ptp' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Operator Pesawat Tenaga & Produksi (PTP).'],
            'operator-pita-transport-conveyor' => ['badge' => 'PITA TRANSPORT', 'description' => 'Operasional sistem ban berjalan dan kompresor bertekanan industri.'],
            'operator-scaffolding' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Operator Scaffolding.'],
            'operator-tanur' => ['badge' => 'SMELTER', 'description' => 'Pengoperasian tungku peleburan logam tinggi dan panas ekstrem (furnace).'],
            'operator-tower-crane' => ['badge' => 'CRANE TINGGI', 'description' => 'Operasional crane menara proyek high-rise dan pemahaman load chart.'],
            'operator-trailer' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Operator Trailer.'],
            'operator-vibro' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Operator Vibro.'],
            'operator-wheel-loader' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Operator Wheel Loader.'],
            'overhead-crane' => ['badge' => 'HEAVY CRANE', 'description' => 'Operasional pesawat angkat mobile dan pedestal offshore.'],
            'pedestal-crane' => ['badge' => 'HEAVY CRANE', 'description' => 'Operasional pesawat angkat mobile dan pedestal offshore.'],
            'penanggung-jawab-operasional-pertama-pop' => ['badge' => 'TAMBANG', 'description' => 'Pengawasan keselamatan tambang Minerba ESDM tingkat Pratama, Madya, Utama.'],
            'penanggungjawab-operasional-pengolahan-air-limbah-popal' => ['badge' => 'AIR LIMBAH', 'description' => 'Pengendalian instalasi WWTP industri sesuai Baku Mutu Lingkungan.'],
            'penanggungjawab-pengendalian-pencemaran-air-pppa' => ['badge' => 'PENCEMARAN AIR', 'description' => 'Manajemen dokumen neraca air dan perizinan buangan limbah cair.'],
            'penanggungjawab-pengendalian-pencemaran-udara-pppu' => ['badge' => 'PENCEMARAN UDARA', 'description' => 'Pengendalian emisi udara industri dan pemenuhan baku mutu udara ambien sesuai regulasi KLHK.'],
            'pengambil-contoh-uji-air-pcua' => ['badge' => 'SAMPLING', 'description' => 'Metodologi sampling air sesuai ISO 17025 jaminan mutu laboratorium.'],
            'pengawas-k3-migas' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Pengawas K3 Migas.'],
            'perancah-scaffolding' => ['badge' => 'PERANCAH', 'description' => 'Sertifikasi Scaffolder teknisi dan supervisi pipa tubular ringlock.'],
            'perawatan-sumur-drilling' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Perawatan Sumur Drilling.'],
            'permit-to-work' => ['badge' => 'SOFT SKILLS', 'description' => 'Modul komprehensif terapan pencegahan hazard behavior dan sistem permit industri.'],
            'pesawat-angkat-pesawat-angkut' => ['badge' => 'PESAWAT ANGKAT', 'description' => 'Standarisasi inspeksi, perawatan, dan operasional seluruh PAA di area kerja.'],
            'pesawat-uap-boiler-kelas-1' => ['badge' => 'BOILER', 'description' => 'Sertifikasi operator ketel uap Kelas 1 (>10 Ton/jam) dan Kelas 2.'],
            'pipe-fitter' => ['badge' => 'PIPING', 'description' => 'Fabrikasi, perakitan, dan penyambungan isometrik pipa industri.'],
            'plate-welder' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Plate Welder.'],
            'plb3-penanggung-jawab-pengelolaan-b3' => ['badge' => 'LIMBAH B3', 'description' => 'Penanggung Jawab dan Operator Pengelola TPS dan manifest Limbah B3.'],
            'poippu-operator-pengendalian-pencemaran-udara' => ['badge' => 'PENCEMARAN UDARA', 'description' => 'Operator teknis instalasi pengolahan dan pengendalian pencemaran udara di fasilitas industri.'],
            'rigger-juru-ikat' => ['badge' => 'RIGGING', 'description' => 'Keahlian ikat beban, sling angle, penggunaan wire rope dan komunikasi sinyal.'],
            'sea-survival-huet-bosiet-t-bosiet' => ['badge' => 'OFFSHORE', 'description' => 'Keselamatan lepas pantai, evakuasi helikopter, dan rescue air laut.'],
            'teknisi-bejana-tekan-tangki-timbun' => ['badge' => 'TEKANAN', 'description' => 'Inspeksi hydrostatic pressure, safety valve, air receiver tank.'],
            'teknisi-scaffolding' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Teknisi Scaffolding.'],
            'tenaga-kerja-bangunan-tinggi-tkbt-tingkat-1' => ['badge' => 'KETINGGIAN', 'description' => 'Akses keselamatan fasad dan roof area tanpa suspensi tali.'],
            'tenaga-kerja-pada-ketinggian-tkpk-tingkat-1' => ['badge' => 'ROPE ACCESS', 'description' => 'Akses tali profesional tingkat 1, 2, dan 3 untuk struktur ekstrem.'],
            'turbin-uap-gas' => ['badge' => 'TURBIN', 'description' => 'Sertifikasi untuk sistem turbin pembangkit tenaga pabrik dan kelistrikan.'],
            'wah-working-at-height' => ['badge' => 'WAH', 'description' => 'Pemahaman proteksi jatuh (fall protection) dan full body harness.'],
            'workover-drilling' => ['badge' => 'NEW', 'description' => 'Pelatihan dan sertifikasi profesional untuk Workover Drilling.'],
        ];
    }

    /**
     * @return array{badge: string, description: string}
     */
    public static function for(string $slug, string $name): array
    {
        return self::overrides()[$slug] ?? [
            'badge' => 'Sertifikasi Resmi',
            'description' => "Pelatihan dan sertifikasi profesional untuk {$name}.",
        ];
    }
}
