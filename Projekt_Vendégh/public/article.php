<?php include '../app/templates/header.php'; ?>

<?php
$model = $_GET['model'] ?? '911';

$articles = [
    '911' => [
        'title' => 'Porsche 911',
        'subtitle' => 'Ikonické športové auto s nezameniteľným dizajnom.',
        'image' => 'assets/images/porsche911.jpg',
        'history' => 'Porsche 911 patrí medzi najznámejšie športové autá na svete. Prvýkrát bolo predstavené v 60. rokoch a odvtedy sa stalo symbolom značky Porsche. Typické je svojou siluetou, športovým charakterom a motorom umiestneným vzadu. Aj moderné generácie si zachovali pôvodnú myšlienku modelu, no pridali nové technológie, lepšiu bezpečnosť a vyšší výkon. Porsche 911 je obľúbené medzi fanúšikmi športových áut najmä pre presné riadenie a výborný jazdný zážitok.',
        'engine' => 'Model 911 je známy najmä použitím plochého šesťvalcového motora typu boxer. Tento motor je uložený vzadu a poskytuje autu špecifické jazdné vlastnosti. V rôznych verziách môže byť atmosférický alebo preplňovaný turbom. Výkon závisí od konkrétnej verzie, napríklad Carrera, Turbo alebo GT3. Dôležitou súčasťou modelu je aj prevodovka PDK alebo manuálna prevodovka pri vybraných verziách.',
        'design' => 'Dizajn Porsche 911 je veľmi ľahko rozpoznateľný. Auto má nízku karosériu, okrúhle svetlomety a plynulú líniu strechy. Interiér kombinuje športový štýl s kvalitnými materiálmi a modernými technológiami. Napriek tomu, že ide o športové auto, ponúka aj určitú mieru každodennej použiteľnosti. Práve spojenie tradície, výkonu a praktickosti robí z modelu 911 výnimočné vozidlo.',
        'production' => 'od roku 1964',
        'body' => 'kupé / kabriolet',
        'motor' => 'benzínový boxer',
        'drive' => 'zadný / všetkých kolies'
    ],

    'taycan' => [
        'title' => 'Porsche Taycan',
        'subtitle' => 'Elektrický športový model a moderná budúcnosť značky Porsche.',
        'image' => 'assets/images/taycan.jpg',
        'history' => 'Porsche Taycan je prvý plne elektrický sériový model značky Porsche. Predstavuje veľký krok smerom k elektromobilite, no zároveň si zachováva športový charakter typický pre Porsche. Taycan ukazuje, že elektrické auto nemusí byť iba ekologické, ale môže byť aj veľmi rýchle a dynamické. Model je známy okamžitým nástupom výkonu, tichou jazdou a moderným technologickým spracovaním. Vďaka tomu sa stal dôležitým autom v histórii značky.',
        'engine' => 'Taycan nemá klasický spaľovací motor. Používa elektrický pohon, pričom podľa verzie môže mať jeden alebo dva elektromotory. Elektromotory poskytujú okamžitý krútiaci moment, čo znamená veľmi rýchlu akceleráciu. Auto využíva vysokonapäťovú batériu a moderný systém nabíjania. Niektoré verzie majú pohon zadných kolies, výkonnejšie verzie používajú pohon všetkých kolies.',
        'design' => 'Dizajn Taycanu je moderný, nízky a aerodynamický. Auto pôsobí športovo, ale zároveň luxusne. Interiér obsahuje viacero digitálnych displejov a minimalistické ovládanie. Porsche sa pri tomto modeli snažilo spojiť futuristický vzhľad s klasickou športovou atmosférou. Taycan je vhodný pre ľudí, ktorí chcú moderné elektrické auto, ale nechcú sa vzdať emócií zo športovej jazdy.',
        'production' => 'od roku 2019',
        'body' => 'sedan / sport turismo',
        'motor' => 'elektromotor',
        'drive' => 'zadný / všetkých kolies'
    ],

    'cayenne' => [
        'title' => 'Porsche Cayenne',
        'subtitle' => 'Luxusné SUV s výkonom športového auta.',
        'image' => 'assets/images/cayenne.jpg',
        'history' => 'Porsche Cayenne je veľké SUV, ktoré výrazne rozšírilo ponuku značky Porsche. Keď bolo predstavené, išlo o odvážny krok, pretože Porsche bolo dovtedy známe hlavne športovými autami. Cayenne však ukázalo, že aj SUV môže mať športový charakter. Model ponúka veľa priestoru, komfort a zároveň vysoký výkon. Vďaka tomu sa stal veľmi úspešným a dôležitým modelom značky.',
        'engine' => 'Cayenne sa vyrába s viacerými typmi motorov podľa konkrétnej verzie. Základné verzie často používajú preplňovaný šesťvalcový motor, výkonnejšie verzie môžu mať osemvalcový motor V8. Existujú aj hybridné verzie, ktoré kombinujú spaľovací motor s elektromotorom. Porsche pri Cayenne kladie dôraz na silný krútiaci moment, pohodlnú jazdu a schopnosť zvládnuť dlhé trasy. Výkon sa líši podľa verzie, napríklad Cayenne, Cayenne S alebo Turbo.',
        'design' => 'Dizajn Cayenne kombinuje robustnosť SUV s typickými prvkami Porsche. Predná časť pôsobí agresívne a športovo, zatiaľ čo interiér ponúka luxus a veľa priestoru. Auto je vhodné pre rodinu, cestovanie aj dynamickú jazdu. V porovnaní s menšími športovými modelmi je praktickejšie, ale stále si zachováva prémiový charakter. Cayenne je dôkazom, že Porsche vie vytvoriť aj športové SUV.',
        'production' => 'od roku 2002',
        'body' => 'SUV',
        'motor' => 'V6 / V8 / hybrid',
        'drive' => 'všetkých kolies'
    ],

    'panamera' => [
        'title' => 'Porsche Panamera',
        'subtitle' => 'Športová limuzína spájajúca výkon a komfort.',
        'image' => 'assets/images/panamera.jpg',
        'history' => 'Porsche Panamera je luxusná športová limuzína, ktorá spája komfort veľkého auta s výkonom športového modelu. Bola vytvorená pre vodičov, ktorí chcú viac priestoru než v klasickom kupé, ale nechcú stratiť športový charakter. Panamera je vhodná na dlhé cesty, každodenné používanie aj dynamickú jazdu. Model ponúka vysokú kvalitu spracovania, moderné technológie a silné motory. V rámci značky Porsche predstavuje spojenie elegancie a výkonu.',
        'engine' => 'Panamera sa vyrába s rôznymi motorizáciami podľa verzie. Základné verzie často používajú preplňovaný šesťvalcový motor, výkonnejšie verzie môžu mať osemvalcový motor. Dostupné sú aj hybridné verzie, ktoré kombinujú spaľovací motor s elektromotorom. Prevodovka PDK zabezpečuje rýchle radenie a športový prejav. Panamera je navrhnutá tak, aby zvládala pokojné cestovanie aj veľmi dynamickú jazdu.',
        'design' => 'Dizajn Panamery je elegantný a športový zároveň. Auto má dlhú karosériu, nízku líniu strechy a prémiový interiér. Vnútri ponúka pohodlné sedadlá, kvalitné materiály a moderný infotainment. Napriek väčším rozmerom pôsobí dynamicky a zachováva si typické prvky Porsche. Panamera je ideálna pre ľudí, ktorí chcú luxusné auto, ale zároveň nechcú obyčajnú limuzínu.',
        'production' => 'od roku 2009',
        'body' => 'limuzína / sport turismo',
        'motor' => 'V6 / V8 / hybrid',
        'drive' => 'zadný / všetkých kolies'
    ],

    'macan' => [
        'title' => 'Porsche Macan',
        'subtitle' => 'Kompaktné SUV s dynamickým charakterom.',
        'image' => 'assets/images/macan.jpg',
        'history' => 'Porsche Macan je menšie SUV, ktoré bolo navrhnuté ako športovejšia alternatíva v kategórii kompaktných SUV. Je praktickejší než klasické športové modely, no stále ponúka jazdné vlastnosti typické pre Porsche. Macan je obľúbený najmä pre svoju univerzálnosť, pretože sa hodí do mesta, na diaľnicu aj na bežné každodenné používanie. Napriek menším rozmerom pôsobí prémiovo a dynamicky. Je to model, ktorý priniesol značku Porsche širšej skupine vodičov.',
        'engine' => 'Macan sa vyrába s viacerými typmi motorov podľa generácie a verzie. Základné verzie používajú preplňovaný štvorvalcový benzínový motor. Výkonnejšie verzie, napríklad Macan S alebo GTS, môžu používať šesťvalcové motory. Auto je často spojené s prevodovkou PDK a pohonom všetkých kolies. Vďaka tomu ponúka dobrú trakciu, rýchle reakcie a športovejší pocit z jazdy než bežné SUV.',
        'design' => 'Dizajn Macanu je kompaktný, športový a praktický. Predná časť pripomína väčšie modely Porsche, zatiaľ čo zadná časť má moderné svetlá a čisté línie. Interiér je zameraný na vodiča a ponúka kvalitné spracovanie. Macan je vhodný pre ľudí, ktorí chcú SUV, ale nechcú sa vzdať dynamickej jazdy. Je menší než Cayenne, no stále pôsobí luxusne a športovo.',
        'production' => 'od roku 2014',
        'body' => 'kompaktné SUV',
        'motor' => 'R4 turbo / V6',
        'drive' => 'všetkých kolies'
    ]
];

$article = $articles[$model] ?? $articles['911'];
?>

<section class="article-hero">
    <div class="container">
        <h2><?php echo $article['title']; ?></h2>
        <p><?php echo $article['subtitle']; ?></p>
    </div>
</section>

<section class="article-detail">
    <div class="container">

        <img class="article-main-image" src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">

        <div class="article-content">
            <h3>História modelu</h3>
            <p><?php echo $article['history']; ?></p>

            <h3>Motor a výkon</h3>
            <p><?php echo $article['engine']; ?></p>

            <h3>Dizajn a využitie</h3>
            <p><?php echo $article['design']; ?></p>

            <h3>Technické údaje</h3>

            <div class="specs">
                <div class="spec-box">
                    <span>Výroba</span>
                    <strong><?php echo $article['production']; ?></strong>
                </div>

                <div class="spec-box">
                    <span>Karoséria</span>
                    <strong><?php echo $article['body']; ?></strong>
                </div>

                <div class="spec-box">
                    <span>Motor</span>
                    <strong><?php echo $article['motor']; ?></strong>
                </div>

                <div class="spec-box">
                    <span>Pohon</span>
                    <strong><?php echo $article['drive']; ?></strong>
                </div>
            </div>

            <div class="article-gallery">
                <img src="assets/images/<?php echo $model; ?>-1.jpg" alt="<?php echo $article['title']; ?>">
                <img src="assets/images/<?php echo $model; ?>-2.jpg" alt="<?php echo $article['title']; ?>">
                <img src="assets/images/<?php echo $model; ?>-3.jpg" alt="<?php echo $article['title']; ?>">
            </div>

            <a class="back-button" href="clanky.php">← Späť na články</a>
        </div>

    </div>
</section>

<?php include '../app/templates/footer.php'; ?>