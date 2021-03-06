<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneCategoryNewsController extends Controller
{

    public function oneCategory($nameCategory)
    {
        $listNews = match ($nameCategory) {
            'Детские новости' => [
                '1' => [
                    'titleNews' => 'Российским школьникам расскажут о способах защиты от киберугроз на "Уроке цифры"',
                    'descriptionNews' => 'Российским школьникам расскажут про существующие киберугрозы и способы защиты от них на образовательном проекте "Урок цифры", который при поддержке Минпросвещения состоится с 17 января по 6 февраля. Об этом сообщается на сайте министерства.',
                ],
                '2' => [
                    'titleNews' => 'В Африке обнаружена древнейшая в истории человечества "социальная сеть"',
                    'descriptionNews' => 'Археологи из Института науки об истории человечества имени Макса Планка обнаружили доказательства существования в Восточной и Южной Африке социальной сети. Она существовала примерно 50 000 лет тому назад. Для общения homo sapiens использовали бусинки, изготовленные из скорлупы яиц страусов.',
                ],
                '3' => [
                    'titleNews' => 'Родительский контроль может сделать ребенка хулиганом',
                    'descriptionNews' => 'Ученые из Университета Вермонта предупреждают: контроль со стороны родителей пробуждает в детях реляционную агрессию. Это косвенная форма агрессии, которая выражается в оскорблениях и распространении ложных сведений о человеке. От реакции детей на стресс зависит, сразу они выплеснут эту агрессию или будут ждать подходящего момента для продуманных издевательств над сверстником.',
                ],
                '4' => [
                    'titleNews' => 'Школьники будут изучать Арктику',
                    'descriptionNews' => 'По проекту "Арктиковедение" для российских школьников разработана программа, посвященная географии, истории, биологии и обществознанию Арктической зоны России. Отдельная программа для младших классов уже готова. А для ребят, которые учатся в 5-9-х классах, она будет дополнять учебники в рамках Федерального государственного образовательного стандарта (ФГОС). Как это будет?',
                ],
                '5' => [
                     'titleNews' => 'Детская песня впервые собрала 10 миллиардов просмотров на YouTube',
                     'descriptionNews' => 'Впервые в истории детская песня собрала на видеохостинге YouTube 10 миллиардов просмотров.',
                    ],

            ],
            'Мир науки' => [
                '1' => [
                    'titleNews' => 'В Саудовской Аравии нашли древние дороги и гробницы возрастом 4500 лет',
                    'descriptionNews' => 'Команда археологов из Гуманитарной школы Университета Западной Австралии узнала, что в эпоху раннего и среднего бронзового века жители Аравии сооружали погребальные аллеи.',
                ],
                '2' => [
                    'titleNews' => 'В Екатеринбурге впервые родился генетически модифицированный теленок',
                    'descriptionNews' => 'В уральской столице родился теленок, полученный с помощью генной инженерии. Об этом «Вечерним ведомостям» сообщили в пресс-службе УрФАНИЦ УрО РАН.',
                ],
                '3' => [
                    'titleNews' => 'В Университете Аделаиды сделан первый шаг к созданию квантовых батарей',
                    'descriptionNews' => 'Австралийские ученые из Университета Аделаиды первыми в мире смогли реализовать на практике концепцию сверхпоглощения с помощью органических молекул.',
                ],
                '4' => [
                    'titleNews' => 'Томские ученые предложили утилизировать покрышки через плазму дугового тока',
                    'descriptionNews' => 'Энергетики Томского политехнического университета придумали утилизировать резиновые покрышки с помощью плазмы дугового тока в открытом воздухе. Об этом сообщили в пресс-службе ТПУ.',
                ],
                '5' => [
                    'titleNews' => 'Некоторые восточноафриканские птицы поют одну и ту же песню сотни тысяч лет',
                    'descriptionNews' => 'Новое исследование, проведенное биологами из Калифорнийского университета в Беркли и Университета штата Миссури в Спрингфилде, документирует песни восточноафриканских нектарниц из семейства Cinnyris, которые почти не изменились на протяжении более 500 000 лет, а возможно, и на протяжении миллиона лет. Их песни почти неотличимы от песен родственников, с которыми они давно разлучены. ',
                ],

            ],
            default => ['Информации по этой теме нет'],
        };
        return view('oneCategory', [
            'title' => $nameCategory,
            'listNews' => $listNews,
        ]);
    }
}
