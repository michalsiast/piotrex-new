<?php

namespace App\Models;

use App\Helpers\Enum;
use ReflectionClass;

abstract class PageType extends Enum
{
    /*
     * examples:
     * #1: controller_moduleCategory.action
     * #2: controller.action
     *
     * action = view
    */

    const INDEX_SHOW = [
        'name' => 'index.show',
        'module' => false,
        'fields' => [
            'rotator' => ['rotator', 'Slider'],
            'heading_about_us' => ['head', 'Nagłówek - O nas'],
            'description_about_us' => ['text', 'Opis - O nas'],
            'heading_statistics' => ['head', 'Nagłówek - Statystyki'],
            'number_1_counters' => ['head', 'Liczba 1 - Liczniki'],
            'heading_1_counters' => ['head', 'Nagłówek 1 - Liczniki'],
            'unit_1_counters' => ['head', 'Jednostka 1 - Liczniki'],
            'number_2_counters' => ['head', 'Liczba 2 - Liczniki'],
            'heading_2_counters' => ['head', 'Nagłówek 2 - Liczniki'],
            'unit_2_counters' => ['head', 'Jednostka 2 - Liczniki'],
            'number_3_counters' => ['head', 'Liczba 3 - Liczniki'],
            'heading_3_counters' => ['head', 'Nagłówek 3 - Liczniki'],
            'unit_3_counters' => ['head', 'Jednostka 3 - Liczniki'],
            'heading_services' => ['head', 'Nagłówek - Usługi'],
            'heading_contact' => ['head', 'Nagłówek - Kontakt'],
            'description_contact' => ['text', 'Opis - Kontakt'],
        ]
    ];
    const PAGE_SHOW = [
        'name' => 'page.show',
        'module' => false,
        'fields' => [
            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const GALLERY_SHOW = [
        'name' => 'gallery.show',
        'module' => false,
        'fields' => [
//            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const ABOUT_US_SHOW = [
        'name' => 'about-us.show',
        'module' => false,
        'fields' => [
            'heading_about_us' => ['head', 'Nagłówek - O nas'],
            'description_about_us' => ['text', 'Opis - O nas'],
        ]
    ];
    const CONTACT_SHOW = [
        'name' => 'contact.show',
        'module' => false,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const ARTICLE_INDEX = [
        'name' => 'article.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const ARTICLE_CATEGORY_INDEX = [
        'name' => 'article_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const OFFER_INDEX = [
        'name' => 'offer.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const OFFER_CATEGORY_INDEX = [
        'name' => 'offer_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const REALIZATION_INDEX = [
        'name' => 'realization.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const REALIZATION_CATEGORY_INDEX = [
        'name' => 'realization_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];


    static function getNames() : array {
        $class = new ReflectionClass(get_called_class());
        $types = array_values($class->getConstants());
        $names = [];
        foreach ($types as $type) {
            $names[] = $type['name'];
        }
        return $names;
    }

    static function getByName($name) : array {
        $class = new ReflectionClass(get_called_class());
        $types = array_values($class->getConstants());
        foreach ($types as $type) {
            if($type['name'] == $name)
                return $type;
        }
//        return $names;
    }
}
