<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class GalleryController extends Controller
{
    /**
     * List all media.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $gallery = '/media/gallery/';
        $ext = '.webp';
        $media = collect([
            "Enver Can Özer" => [
                'title' => null,
                'description' => null,
                'author' => 'Enver Can Özer',
                'source' => $gallery . 'enver_can_ozer-1' . $ext,
                'width' => '1328',
                'height' => '747',
            ],
            "Eda Yaman" => [
                'title' => null,
                'description' => null,
                'author' => 'Eda Yaman',
                'source' => $gallery . 'eda_yaman-1' . $ext,
                'width' => '1080',
                'height' => '1350',
            ],
            "Neslihan Aydın" => [
                'title' => null,
                'description' => null,
                'author' => 'Neslihan Aydın',
                'source' => $gallery . 'neslihan_aydin-1' . $ext,
                'width' => '640',
                'height' => '783',
            ],
            "Neslihan Dalga" => [
                'title' => null,
                'description' => null,
                'author' => 'Neslihan Dalga',
                'source' => $gallery . 'neslihan_dalga-1' . $ext,
                'width' => '1228',
                'height' => '1818',
            ],
            "Neslihan Dalga 2" => [
                'title' => null,
                'description' => null,
                'author' => 'Neslihan Dalga',
                'source' => $gallery . 'neslihan_dalga-2' . $ext,
                'width' => '1228',
                'height' => '1818',
            ],
            "Neslihan Dalga 3" => [
                'title' => null,
                'description' => null,
                'author' => 'Neslihan Dalga',
                'source' => $gallery . 'neslihan_dalga-3' . $ext,
                'width' => '1818',
                'height' => '1228',
            ],
            "İstanbul'dan Sahneler 2" => [
                'title' => "İstanbul'dan Sahneler 2",
                'description' => null,
                'author' => 'Rumeysa Alarçın',
                'source' => $gallery . 'rumeysa_alarcin-istanbuldan_sahneler_2' . $ext,
                'width' => '1280',
                'height' => '852',
            ],
            'Neslihan Aydın 8' => [
                'title' => null,
                'description' => null,
                'author' => 'Neslihan Dalga',
                'source' => $gallery . 'neslihan_dalga-8' . $ext,
                'width' => '1818',
                'height' => '1228',
            ],
            "Rumeysa Alarçın 1" => [
                'title' => null,
                'description' => null,
                'author' => 'Rumeysa Alarçın',
                'source' => $gallery . 'rumeysa_alarcin-1' . $ext,
                'width' => '3813',
                'height' => '2747',
            ],
            "Işık" => [
                'title' => 'Işık',
                'description' => '(İspanya Valencia, Ciutat Vella)',
                'author' => 'Rumeysa Alarçın',
                'source' => $gallery . 'rumeysa_alarcin-isik' . $ext,
                'width' => '2309',
                'height' => '3464',
            ],
            'İstanbul Manzaraları 3' => [
                'title' => 'İstanbul Manzaraları 3',
                'description' => null,
                'author' => 'Rumeysa Alarçın',
                'source' => $gallery . 'rumeysa_alarcin-istanbul_manzaraları_3' . $ext,
                'width' => '2392',
                'height' => '2986',
            ],
            "Valencia'dan Sahneler" => [
                'title' => "Valencia'dan Sahneler",
                'description' => '(Iglesia de San Juan del Hospital)',
                'author' => 'Rumeysa Alarçın',
                'source' => $gallery . 'rumeysa_alarcin-valenciadan_sahneler' . $ext,
                'width' => '3372',
                'height' => '2309',
            ],
            "Sedef İnanç 4" => [
                'title' => null,
                'description' => null,
                'author' => 'Sedef İnanç',
                'source' => $gallery . 'sedef_inanc-4' . $ext,
                'width' => '1080',
                'height' => '1012',
            ],
            "Sevgi Tüccar" => [
                'title' => null,
                'description' => null,
                'author' => 'Sevgi Tüccar',
                'source' => $gallery . 'sevgi_tuccar-1' . $ext,
                'width' => '1186',
                'height' => '836',
            ],
            "Sevgi Tüccar 5" => [
                'title' => null,
                'description' => null,
                'author' => 'Sevgi Tüccar',
                'source' => $gallery . 'sevgi_tuccar-5' . $ext,
                'width' => '452',
                'height' => '631',
            ],
            "Sevgi Tüccar 7" => [
                'title' => null,
                'description' => null,
                'author' => 'Sevgi Tüccar',
                'source' => $gallery . 'sevgi_tuccar-7' . $ext,
                'width' => '824',
                'height' => '608',
            ],
            "Sevgi Tüccar 9" => [
                'title' => null,
                'description' => null,
                'author' => 'Sevgi Tüccar',
                'source' => $gallery . 'sevgi_tuccar-9' . $ext,
                'width' => '544',
                'height' => '777',
            ],
            "Sevgi Tüccar 10" => [
                'title' => null,
                'description' => null,
                'author' => 'Sevgi Tüccar',
                'source' => $gallery . 'sevgi_tuccar-10' . $ext,
                'width' => '535',
                'height' => '839',
            ],
            "Sevgi Tüccar 12" => [
                'title' => null,
                'description' => null,
                'author' => 'Sevgi Tüccar',
                'source' => $gallery . 'sevgi_tuccar-12' . $ext,
                'width' => '546',
                'height' => '763',
            ],
            "Sevgi Tüccar 13" => [
                'title' => null,
                'description' => null,
                'author' => 'Sevgi Tüccar',
                'source' => $gallery . 'sevgi_tuccar-13' . $ext,
                'width' => '491',
                'height' => '798',
            ],
            "Sevgi Tüccar 14" => [
                'title' => null,
                'description' => null,
                'author' => 'Sevgi Tüccar',
                'source' => $gallery . 'sevgi_tuccar-14' . $ext,
                'width' => '549',
                'height' => '764',
            ],
            "Sevgi Tüccar 15" => [
                'title' => null,
                'description' => null,
                'author' => 'Sevgi Tüccar',
                'source' => $gallery . 'sevgi_tuccar-15' . $ext,
                'width' => '572',
                'height' => '780',
            ],
            "Sevgi Tüccar 17" => [
                'title' => null,
                'description' => null,
                'author' => 'Sevgi Tüccar',
                'source' => $gallery . 'sevgi_tuccar-17' . $ext,
                'width' => '584',
                'height' => '740',
            ],
            "Sevgi Tüccar 19" => [
                'title' => null,
                'description' => null,
                'author' => 'Sevgi Tüccar',
                'source' => $gallery . 'sevgi_tuccar-19' . $ext,
                'width' => '590',
                'height' => '841',
            ],
            "Sevgi Tüccar 20" => [
                'title' => null,
                'description' => null,
                'author' => 'Sevgi Tüccar',
                'source' => $gallery . 'sevgi_tuccar-20' . $ext,
                'width' => '441',
                'height' => '728',
            ],
            "Şeyma Diş" => [
                'title' => null,
                'description' => null,
                'author' => 'Şeyma Diş',
                'source' => $gallery . 'seyma_dis-1' . $ext,
                'width' => '3024',
                'height' => '4032',
            ],
            "Şeyma Diş 2" => [
                'title' => null,
                'description' => null,
                'author' => 'Şeyma Diş',
                'source' => $gallery . 'seyma_dis-2' . $ext,
                'width' => '3024',
                'height' => '4032',
            ],
            "Şeyma Diş 13" => [
                'title' => null,
                'description' => null,
                'author' => 'Şeyma Diş',
                'source' => $gallery . 'seyma_dis-13' . $ext,
                'width' => '3024',
                'height' => '4032',
            ],
        ]);
        $media = $media->shuffle();
        return Inertia::render('Gallery/Index', [
            'media' => $media
        ]);
    }
}
