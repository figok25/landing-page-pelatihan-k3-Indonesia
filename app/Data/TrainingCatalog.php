<?php

namespace App\Data;

/**
 * Master data 169 program pelatihan K3.
 * Sumber: List_Pelatihan-7.docx (dokumen client).
 * JANGAN mengubah nama program tanpa instruksi client.
 *
 * Kategori 'sektoral-umum' (Group G) adalah kelompok pelatihan yang TIDAK
 * ada padanannya di skema Grup A-F milik pelatihank3indonesia.com (mis.
 * Pertanian, Kelapa Sawit, HRD, Akuntansi) — atas keputusan client, ini
 * diberi grup sendiri, bukan digabung ke grup lain.
 */
class TrainingCatalog
{
    public static function all(): array
    {
        return [
            ['name' => 'Ahli K3 Umum', 'slug' => 'ahli-k3-umum', 'category' => 'personil-manajemen'],
            ['name' => 'Confined Space Madya', 'slug' => 'confined-space-madya', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Confined Space Utama', 'slug' => 'confined-space-utama', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Confined Space Rescue', 'slug' => 'confined-space-rescue', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Auditor SMK3', 'slug' => 'auditor-smk3', 'category' => 'personil-manajemen'],
            ['name' => 'Operator Forklift Kelas 1', 'slug' => 'operator-forklift-kelas-1', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Forklift Kelas 2', 'slug' => 'operator-forklift-kelas-2', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Forklift Kelas 3', 'slug' => 'operator-forklift-kelas-3', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Alat Berat', 'slug' => 'operator-alat-berat', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Excavator', 'slug' => 'operator-excavator', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Bulldozer', 'slug' => 'operator-bulldozer', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Vibro', 'slug' => 'operator-vibro', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Dump Truck', 'slug' => 'operator-dump-truck', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Wheel Loader', 'slug' => 'operator-wheel-loader', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Motor Grader', 'slug' => 'operator-motor-grader', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Compactor', 'slug' => 'operator-compactor', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Telehandler', 'slug' => 'operator-telehandler', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Drilling Machine', 'slug' => 'drilling-machine', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Mekanik Drilling', 'slug' => 'mekanik-drilling', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Perawatan Sumur Drilling', 'slug' => 'perawatan-sumur-drilling', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Workover Drilling', 'slug' => 'workover-drilling', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Operator Trailer', 'slug' => 'operator-trailer', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Lifting', 'slug' => 'lifting', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'TOT (Train of Trainer)', 'slug' => 'tot-train-of-trainer', 'category' => 'personil-manajemen'],
            ['name' => 'Mining Training', 'slug' => 'mining-training', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Kelistrikan', 'slug' => 'kelistrikan', 'category' => 'personil-manajemen'],
            ['name' => 'Teknisi Instrumentasi', 'slug' => 'teknisi-instrumentasi', 'category' => 'personil-manajemen'],
            ['name' => 'Reklamasi Pertambangan', 'slug' => 'reklamasi-pertambangan', 'category' => 'personil-manajemen'],
            ['name' => 'Teknisi Survei (Juru Ukur)', 'slug' => 'teknisi-survei-juru-ukur', 'category' => 'personil-manajemen'],
            ['name' => 'Telekomunikasi', 'slug' => 'telekomunikasi', 'category' => 'personil-manajemen'],
            ['name' => 'Bekerja di Ketinggian', 'slug' => 'bekerja-di-ketinggian', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Operator Gondola', 'slug' => 'operator-gondola', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Dasar K3', 'slug' => 'dasar-k3', 'category' => 'sektoral-umum'],
            ['name' => 'MEP (Mechanical Electrical Plumbing)', 'slug' => 'mep-mechanical-electrical-plumbing', 'category' => 'pesawat-tenaga-produksi-uap'],
            ['name' => 'Operator Lifter', 'slug' => 'operator-lifter', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Manlift', 'slug' => 'operator-manlift', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Boomlift', 'slug' => 'operator-boomlift', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Skylift', 'slug' => 'operator-skylift', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Scissor Lift', 'slug' => 'operator-scissor-lift', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Pallet Mover', 'slug' => 'operator-pallet-mover', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Liftstacker', 'slug' => 'operator-liftstacker', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Reachstacker', 'slug' => 'operator-reachstacker', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Tower Crane', 'slug' => 'operator-tower-crane', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Overhead Crane', 'slug' => 'overhead-crane', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Mobile Crane', 'slug' => 'mobile-crane', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Pedestal Crane', 'slug' => 'pedestal-crane', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator Pita Transport (Conveyor)', 'slug' => 'operator-pita-transport-conveyor', 'category' => 'pesawat-tenaga-produksi-uap'],
            ['name' => 'Basic First Aid', 'slug' => 'basic-first-aid', 'category' => 'personil-manajemen'],
            ['name' => 'Basic Fire Fighting', 'slug' => 'basic-fire-fighting', 'category' => 'personil-manajemen'],
            ['name' => 'Rigger (Juru Ikat)', 'slug' => 'rigger-juru-ikat', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Operator K3 Cargo Hoist Crane Kelas 3 (Lift Barang)', 'slug' => 'operator-k3-cargo-hoist-crane-kelas-3-lift-barang', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Pesawat Angkat & Pesawat Angkut', 'slug' => 'pesawat-angkat-pesawat-angkut', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Lift & Eskalator', 'slug' => 'lift-eskalator', 'category' => 'pesawat-tenaga-produksi-uap'],
            ['name' => 'Operator Genset', 'slug' => 'operator-genset', 'category' => 'pesawat-tenaga-produksi-uap'],
            ['name' => 'Turbin Uap & Gas', 'slug' => 'turbin-uap-gas', 'category' => 'pesawat-tenaga-produksi-uap'],
            ['name' => 'Operator Mesin Produksi & Perkakas', 'slug' => 'operator-mesin-produksi-perkakas', 'category' => 'pesawat-tenaga-produksi-uap'],
            ['name' => 'Operator Tanur', 'slug' => 'operator-tanur', 'category' => 'pesawat-tenaga-produksi-uap'],
            ['name' => 'Operator Pesawat Tenaga & Produksi (PTP)', 'slug' => 'operator-pesawat-tenaga-produksi-ptp', 'category' => 'sektoral-umum'],
            ['name' => 'Pesawat Uap Boiler Kelas 1', 'slug' => 'pesawat-uap-boiler-kelas-1', 'category' => 'pesawat-tenaga-produksi-uap'],
            ['name' => 'Pesawat Uap Boiler Kelas 2', 'slug' => 'pesawat-uap-boiler-kelas-2', 'category' => 'pesawat-tenaga-produksi-uap'],
            ['name' => 'Teknisi Bejana Tekan & Tangki Timbun', 'slug' => 'teknisi-bejana-tekan-tangki-timbun', 'category' => 'personil-manajemen'],
            ['name' => 'Ahli Bejana Tekan & Tangki Timbun', 'slug' => 'ahli-bejana-tekan-tangki-timbun', 'category' => 'personil-manajemen'],
            ['name' => 'Petugas P3K', 'slug' => 'petugas-p3k', 'category' => 'personil-manajemen'],
            ['name' => 'First Aider', 'slug' => 'first-aider', 'category' => 'personil-manajemen'],
            ['name' => 'K3 Rumah Sakit', 'slug' => 'k3-rumah-sakit', 'category' => 'personil-manajemen'],
            ['name' => 'Hiperkes Paramedic / Perawat', 'slug' => 'hiperkes-paramedic-perawat', 'category' => 'personil-manajemen'],
            ['name' => 'HIPERKES DOKTER', 'slug' => 'hiperkes-dokter', 'category' => 'personil-manajemen'],
            ['name' => 'K3 Kebakaran DAMKAR DCBA', 'slug' => 'k3-kebakaran-damkar-dcba', 'category' => 'personil-manajemen'],
            ['name' => 'Ahli K3 Kimia', 'slug' => 'ahli-k3-kimia', 'category' => 'personil-manajemen'],
            ['name' => 'Petugas K3 Kimia', 'slug' => 'petugas-k3-kimia', 'category' => 'personil-manajemen'],
            ['name' => 'Operator Dongkrak', 'slug' => 'operator-dongkrak', 'category' => 'sektoral-umum'],
            ['name' => 'Ahli K3 Muda Lingkungan Kerja', 'slug' => 'ahli-k3-muda-lingkungan-kerja', 'category' => 'personil-manajemen'],
            ['name' => 'K3 Ruang Terbatas', 'slug' => 'k3-ruang-terbatas', 'category' => 'sektoral-umum'],
            ['name' => 'Teknisi K3 Listrik', 'slug' => 'teknisi-k3-listrik', 'category' => 'personil-manajemen'],
            ['name' => 'Ahli K3 Listrik', 'slug' => 'ahli-k3-listrik', 'category' => 'personil-manajemen'],
            ['name' => 'Manajemen Gudang', 'slug' => 'manajemen-gudang', 'category' => 'sektoral-umum'],
            ['name' => 'K3 Konstruksi', 'slug' => 'k3-konstruksi', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Perancah (Scaffolding)', 'slug' => 'perancah-scaffolding', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Juru Las (Welder)', 'slug' => 'juru-las-welder', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Tenaga Kerja Bangunan Tinggi (TKBT) Tingkat 1', 'slug' => 'tenaga-kerja-bangunan-tinggi-tkbt-tingkat-1', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Tenaga Kerja Bangunan Tinggi (TKBT) Tingkat 2', 'slug' => 'tenaga-kerja-bangunan-tinggi-tkbt-tingkat-2', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Tenaga Kerja Pada Ketinggian (TKPK) Tingkat 1', 'slug' => 'tenaga-kerja-pada-ketinggian-tkpk-tingkat-1', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Tenaga Kerja Pada Ketinggian (TKPK) Tingkat 2', 'slug' => 'tenaga-kerja-pada-ketinggian-tkpk-tingkat-2', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'WAH (Working at Height)', 'slug' => 'wah-working-at-height', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Pipe Fitter', 'slug' => 'pipe-fitter', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Welder GMAW', 'slug' => 'welder-gmaw', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Welder FCAW', 'slug' => 'welder-fcaw', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Welder GTAW', 'slug' => 'welder-gtaw', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Welder SMAW', 'slug' => 'welder-smaw', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'H2S', 'slug' => 'h2s', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'JSA (Job Safety Analysis)', 'slug' => 'jsa-job-safety-analysis', 'category' => 'personil-manajemen'],
            ['name' => 'ERGONOMI', 'slug' => 'ergonomi', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'PERMIT TO WORK', 'slug' => 'permit-to-work', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Safety Officer', 'slug' => 'safety-officer', 'category' => 'personil-manajemen'],
            ['name' => 'HACCP (Hazard Analysis Critical Control Point)', 'slug' => 'haccp-hazard-analysis-critical-control-point', 'category' => 'personil-manajemen'],
            ['name' => 'HAZMAT', 'slug' => 'hazmat', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'LOTO', 'slug' => 'loto', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Coating and Painting', 'slug' => 'coating-and-painting', 'category' => 'personil-manajemen'],
            ['name' => 'Supply Chain Management', 'slug' => 'supply-chain-management', 'category' => 'sektoral-umum'],
            ['name' => 'Management Gudang', 'slug' => 'management-gudang', 'category' => 'sektoral-umum'],
            ['name' => 'Blasting & Coating', 'slug' => 'blasting-coating', 'category' => 'personil-manajemen'],
            ['name' => 'Authorizer Gas Tester', 'slug' => 'authorizer-gas-tester', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'DDT (Defensive Driving Training)', 'slug' => 'ddt-defensive-driving-training', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Operator K3 Migas', 'slug' => 'operator-k3-migas', 'category' => 'sektoral-umum'],
            ['name' => 'BHD (Bantuan Hidup Dasar)', 'slug' => 'bhd-bantuan-hidup-dasar', 'category' => 'sektoral-umum'],
            ['name' => 'Pengawas K3 Migas', 'slug' => 'pengawas-k3-migas', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Penanggung Jawab Operasional Pertama (POP)', 'slug' => 'penanggung-jawab-operasional-pertama-pop', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Penanggung Jawab Operasional Madya (POM)', 'slug' => 'penanggung-jawab-operasional-madya-pom', 'category' => 'personil-manajemen'],
            ['name' => 'Penanggung Jawab Operasional Utama (POU)', 'slug' => 'penanggung-jawab-operasional-utama-pou', 'category' => 'personil-manajemen'],
            ['name' => 'Insiden Investigator', 'slug' => 'insiden-investigator', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Penanggungjawab Operasional Pengolahan Air Limbah (POPAL)', 'slug' => 'penanggungjawab-operasional-pengolahan-air-limbah-popal', 'category' => 'lingkungan-limbah'],
            ['name' => 'Penanggungjawab Pengendalian Pencemaran Air (PPPA)', 'slug' => 'penanggungjawab-pengendalian-pencemaran-air-pppa', 'category' => 'lingkungan-limbah'],
            ['name' => 'Penanggungjawab Pengendalian Pencemaran Udara (PPPU) &', 'slug' => 'penanggungjawab-pengendalian-pencemaran-udara-pppu', 'category' => 'lingkungan-limbah'],
            ['name' => 'POIPPU (Operator Pengendalian Pencemaran Udara)', 'slug' => 'poippu-operator-pengendalian-pencemaran-udara', 'category' => 'lingkungan-limbah'],
            ['name' => 'PLB3 (Penanggung Jawab Pengelolaan B3)', 'slug' => 'plb3-penanggung-jawab-pengelolaan-b3', 'category' => 'lingkungan-limbah'],
            ['name' => 'OLB3 (Operator Pengelola Limbah B3)', 'slug' => 'olb3-operator-pengelola-limbah-b3', 'category' => 'lingkungan-limbah'],
            ['name' => 'Pengambil Contoh Uji Air (PCUA)', 'slug' => 'pengambil-contoh-uji-air-pcua', 'category' => 'lingkungan-limbah'],
            ['name' => 'Manajemen Risiko', 'slug' => 'manajemen-risiko', 'category' => 'personil-manajemen'],
            ['name' => 'Sea Survival HUET BOSIET & T-BOSIET', 'slug' => 'sea-survival-huet-bosiet-t-bosiet', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Compressor', 'slug' => 'compressor', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Drilling', 'slug' => 'drilling', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Advance Fire Fighting', 'slug' => 'advance-fire-fighting', 'category' => 'personil-manajemen'],
            ['name' => 'Pelatihan Perkapalan', 'slug' => 'pelatihan-perkapalan', 'category' => 'personil-manajemen'],
            ['name' => 'NDT (Non Destructive Test)', 'slug' => 'ndt-non-destructive-test', 'category' => 'personil-manajemen'],
            ['name' => 'K3 Pertambangan', 'slug' => 'k3-pertambangan', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Oil Spill Response', 'slug' => 'oil-spill-response', 'category' => 'personil-manajemen'],
            ['name' => 'Pemberdayaan Masyarakat', 'slug' => 'pemberdayaan-masyarakat', 'category' => 'personil-manajemen'],
            ['name' => 'Plate Welder', 'slug' => 'plate-welder', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Welding Inspector', 'slug' => 'welding-inspector', 'category' => 'personil-manajemen'],
            ['name' => 'PLC (Programmable Logic Controller)', 'slug' => 'plc-programmable-logic-controller', 'category' => 'personil-manajemen'],
            ['name' => 'Teknisi AC', 'slug' => 'teknisi-ac', 'category' => 'personil-manajemen'],
            ['name' => 'Teknisi Scaffolding', 'slug' => 'teknisi-scaffolding', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Operator Scaffolding', 'slug' => 'operator-scaffolding', 'category' => 'alat-berat-angkat-angkut'],
            ['name' => 'Pengawas Scaffolding', 'slug' => 'pengawas-scaffolding', 'category' => 'konstruksi-las-ketinggian'],
            ['name' => 'Penyelamat Ruang Terbatas', 'slug' => 'penyelamat-ruang-terbatas', 'category' => 'personil-manajemen'],
            ['name' => 'Fire Rescue', 'slug' => 'fire-rescue', 'category' => 'personil-manajemen'],
            ['name' => 'Pelatihan Laboratorium', 'slug' => 'pelatihan-laboratorium', 'category' => 'personil-manajemen'],
            ['name' => 'Pelatihan SPBU', 'slug' => 'pelatihan-spbu', 'category' => 'personil-manajemen'],
            ['name' => 'Tukang Batu', 'slug' => 'tukang-batu', 'category' => 'sektoral-umum'],
            ['name' => 'Tukang Kayu', 'slug' => 'tukang-kayu', 'category' => 'sektoral-umum'],
            ['name' => 'Fumigasi', 'slug' => 'fumigasi', 'category' => 'lingkungan-limbah'],
            ['name' => 'Manager Building', 'slug' => 'manager-building', 'category' => 'sektoral-umum'],
            ['name' => 'Staff HRD', 'slug' => 'staff-hrd', 'category' => 'sektoral-umum'],
            ['name' => 'Manager HRD', 'slug' => 'manager-hrd', 'category' => 'sektoral-umum'],
            ['name' => 'Bimtek Desa', 'slug' => 'bimtek-desa', 'category' => 'sektoral-umum'],
            ['name' => 'Bimtek Keuangan', 'slug' => 'bimtek-keuangan', 'category' => 'sektoral-umum'],
            ['name' => 'Mooring / Unmooring Master', 'slug' => 'mooring-unmooring-master', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Loading Master', 'slug' => 'loading-master', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Barge Master', 'slug' => 'barge-master', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'K3 Offshore', 'slug' => 'k3-offshore', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'K3 Onshore', 'slug' => 'k3-onshore', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'HAZOP', 'slug' => 'hazop', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Akuntansi', 'slug' => 'akuntansi', 'category' => 'sektoral-umum'],
            ['name' => 'QC (Quality Control)', 'slug' => 'qc-quality-control', 'category' => 'sektoral-umum'],
            ['name' => 'Leadership', 'slug' => 'leadership', 'category' => 'sektoral-umum'],
            ['name' => 'Supervisory', 'slug' => 'supervisory', 'category' => 'sektoral-umum'],
            ['name' => 'Professional Selling Skill', 'slug' => 'professional-selling-skill', 'category' => 'sektoral-umum'],
            ['name' => 'HSE Shipping', 'slug' => 'hse-shipping', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Higiene Industri Muda (HIMU)', 'slug' => 'higiene-industri-muda-himu', 'category' => 'sektoral-umum'],
            ['name' => 'Higiene Industri Madya (HIMA)', 'slug' => 'higiene-industri-madya-hima', 'category' => 'sektoral-umum'],
            ['name' => 'Pengoperasian Alat Angkut (Underground Truck)', 'slug' => 'pengoperasian-alat-angkut-underground-truck', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'INSPEKTUR GENSET', 'slug' => 'inspektur-genset', 'category' => 'pesawat-tenaga-produksi-uap'],
            ['name' => 'OPERATOR JIB CRANE', 'slug' => 'operator-jib-crane', 'category' => 'hse-migas-tambang-offshore'],
            ['name' => 'Pertanian', 'slug' => 'pertanian', 'category' => 'sektoral-umum'],
            ['name' => 'Kelapa Sawit', 'slug' => 'kelapa-sawit', 'category' => 'sektoral-umum'],
            ['name' => 'Perkebunan', 'slug' => 'perkebunan', 'category' => 'sektoral-umum'],
            ['name' => 'Manggala Agni', 'slug' => 'manggala-agni', 'category' => 'sektoral-umum'],
            ['name' => 'Kehutanan', 'slug' => 'kehutanan', 'category' => 'sektoral-umum'],
            ['name' => 'PLATFORM OFFSHORE', 'slug' => 'platform-offshore', 'category' => 'hse-migas-tambang-offshore'],
        ];
    }

    /**
     * Kategori pelatihan + huruf grup (Direktori Lengkap), urut A-G.
     *
     * @return array<string, array{label: string, letter: string}>
     */
    public static function categories(): array
    {
        return [
            'personil-manajemen' => ['label' => 'Personil, Manajemen & Tanggap Darurat K3', 'letter' => 'A'],
            'alat-berat-angkat-angkut' => ['label' => 'Operator Alat Berat & Alat Angkat-Angkut', 'letter' => 'B'],
            'pesawat-tenaga-produksi-uap' => ['label' => 'Pesawat Tenaga, Produksi & Bejana Tekan', 'letter' => 'C'],
            'konstruksi-las-ketinggian' => ['label' => 'Konstruksi, Pengelasan, Ruang Terbatas & Ketinggian', 'letter' => 'D'],
            'hse-migas-tambang-offshore' => ['label' => 'HSE, Migas, Tambang & Offshore', 'letter' => 'E'],
            'lingkungan-limbah' => ['label' => 'Lingkungan Hidup & Pengelolaan Limbah', 'letter' => 'F'],
            'sektoral-umum' => ['label' => 'Sektoral & Manajemen Umum', 'letter' => 'G'],
        ];
    }

    public static function byCategory(string $category): array
    {
        return array_values(array_filter(self::all(), fn ($item) => $item['category'] === $category));
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
