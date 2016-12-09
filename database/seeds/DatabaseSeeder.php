<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use App\Models\Category;
use App\Models\Lang;
use App\Models\User;
use App\Models\Text;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('UserTableSeeder');
        $this->call('ArticlesSeeder');
        $this->call('CategoriesSeeder');
        $this->call('LangsSeeder');
        $this->call('UsersSeeder');
        $this->call('TextsSeeder');

    }

}

class ArticlesSeeder extends Seeder {

    public function run()
    {
        DB::table('Articles')->delete();

        Article::create([
            'category_id' => 1,
            'title' => 'Коротко про нас|Krótko o nas|Briefly about us',
            'short_description' => 'EUROSTANDARD sp. z o.o. є фірма, що надає спеціалізовані послуги в сфері забезпечення персоналом (аутсорсинг персоналу або лізинг працівників). На Замовлення наших клієнтів ми формуємо бригади працівників відповідної спеціальності та кваліфікації та делегуємо їх для виконання завданнь таких замовників. Ми беремо на себе повністю обовязки роботодавця, забезпечуючи фірмі, що користується робочою силою виключно організацію виробничих процесів. Особливістю нашого підприємства є те, що EUROSTANDARD sp. z o.o. є оператором надання послуг на території Польщі нашого дочірнього підприємства Приватне підприємство міжнародне кадрове агентство «Європейський Стандарт» (Україна, м. Луцьк). Працівники працевлаштовані на українській фірмі та направляються у відрядження на EUROSTANDARD sp. z o.o., яке, в свою чергу надає послуги польским клієнтам.
            |EUROSTANDARD Sp. z o.o. firma, co świadczyć specjalistyczne usługi w zakresie udostępniania pracowników ( Leasing pracowników lub Outsourcing pracowniczy). Na Zamówienie naszych Klientów formujemy brygady pracowników odpowiedniego zawodu i kwalifikacji i delegujemy ich dla wykonania zadań takich zleceniodawców. Bierzemy na siebie w całości obowiązki pracodawcy, zabezpieczając firmie, co korzysta siłą roboczą wyjątkowo organizację procesów produkcyjnych.Czym wyróżniamy się spoza wielu firm tej branzy? EUROSTANDARD dysponuje wyjątkowo pracownikami z Ukrainy i nie zatrudniają ich u siebie na firmie bezpośrednio. Na terytorium Polski oni pracuja na podstawie zezwolen na prace, wydanych odpowiednio do dlugoterminowej umowy z firma Prywatne przedsiębiorstwo "Europejski Standard Ukraina" (Ukraina, m. Łuck). Pracownicy są zatrudnione na ukraińskiej firmie i oddelegowane do EUROSTANDARD sp. z o.o., która, z kolei nadaje usługi polskim Klientom.
            |EUROSTANDARD sp. z. o. o. is a firm that provides specialized services in the human resources area (HR outsourcing and workforce leasing). On the orders of our clustomers we form teams of workers of relevant qualification and specialization and assign them to perform tasks given by our customers. We fully undertake all employer obligations, providing a company that uses the labor force the ability to deal exclusively with the organization of production processes.The special feature of our company is that EUROSTANDARD sp. z. o. o. is an operator that provides services in Poland of our subsidiary private enterprise  “European Standard Ukraine” (Lutsk, Ukraine). Workers are hired by a Ukrainian company and then are sent on a business trip to EUROSTANDARD sp. z. o. o., which by-turn provides services to Polish customers.',
            'description' => 'EUROSTANDARD sp. z o.o. є фірма, що надає спеціалізовані послуги в сфері забезпечення персоналом (аутсорсинг персоналу або лізинг працівників). На Замовлення наших клієнтів ми формуємо бригади працівників відповідної спеціальності та кваліфікації та делегуємо їх для виконання завданнь таких замовників. Ми беремо на себе повністю обовязки роботодавця, забезпечуючи фірмі, що користується робочою силою виключно організацію виробничих процесів. Особливістю нашого підприємства є те, що EUROSTANDARD sp. z o.o. є оператором надання послуг на території Польщі  нашого дочірнього підприємства Приватне підприємство міжнародне кадрове агентство «Європейський Стандарт» (Україна, м. Луцьк). Працівники працевлаштовані на українській фірмі та направляються у відрядження на EUROSTANDARD sp. z o.o., яке, в свою чергу надає послуги польским клієнтам. Така форма співпраці надає додаткові переваги та позбавляє ризиків наших партнерів. Оформлення на роботу наших працівників в Україні значно знижує вартість затрат при працевлаштуванні, що дає змогу запропонувати низькі ціни на наші послуги. З іншої сторони польська фірма – замовник має контрагента іншу польську фірму, яка працює виключно в рамках законодавства Республіки Польща. Ми працюємо на польскому ринку з 2006 року (донедавна послуги надавали безпосередньо через українську фірму) та за короткий період часу здобули репутацію надійного партнера серед замовників робіт в Республіці Польща. Працівники ПП  «ЄВРОПЕЙСЬКИЙ СТАНДАРТ УКРАЇНА» одержують гідну винагороду за свою працю, що безперечно відображається на продуктивності праці, а відтак на якості наданих послуг. Перевагами нашого підприємства є поєднання доступних цін та якості послуг, що базується на досвіді роботи та колективі працівників, які є справжнім капіталом фірми. Запрошуємо скористатись нашими послугами польських  підприємців, які бажають забезпечити реалізацію своїх проектів кваліфікованими кадрами з України. Ми завжди відкриті до співробітництва
            |EUROSTANDARD Sp. z o.o. firma, co świadczyć specjalistyczne usługi w zakresie udostępniania pracowników ( Leasing pracowników lub Outsourcing pracowniczy). Na Zamówienie naszych Klientów formujemy brygady pracowników odpowiedniego zawodu i kwalifikacji i delegujemy ich dla wykonania zadań takich zleceniodawców. Bierzemy na siebie w całości obowiązki pracodawcy, zabezpieczając firmie, co korzysta siłą roboczą wyjątkowo organizację procesów produkcyjnych. Czym wyróżniamy się spoza wielu firm tej branzy? EUROSTANDARD dysponuje wyjątkowo pracownikami z Ukrainy i nie zatrudniają ich u siebie na firmie bezpośrednio. Na terytorium Polski oni pracuja na podstawie zezwolen na prace, wydanych odpowiednio do dlugoterminowej umowy z firma Prywatne przedsiębiorstwo "Europejski Standard Ukraina" (Ukraina, m. Łuck). Pracownicy są zatrudnione na ukraińskiej firmie i oddelegowane do EUROSTANDARD sp. z o.o., która, z kolei nadaje usługi polskim Klientom. Taki schemat pozwala zaproponować konkurencyjne ceny  dla naszych Partnerów i  legalność zatrudnienia. Z drugiej strony cała odpowiedzialność za dotrzymanie wszystkich obowiązujących w Polsce przepisów prawa zatrudnienia cudzoziemców leży po naszej stronie. Pracujemy na Polskim rynku od 2006 roku (do 2010 roku usługi świadczły bezpośrednio przez ukraińską firmę). Własne biuro w Ukrainie pozwala nam szybko i jakościowo rekrutować fachowców. Sprawdzać ich jeszcze do wyjazdu do Polski. Dobra komunikacija z personelem, stabilna (wg dlogoterminowych zezwolen), dobrze płatna i legalna praca pozwalia nam sformować zespol zmotywowanych pracowników. Przewagi konkurencyjni EUROSTANDARDA - pojednanie dobrych cen i jakości usług, co bazuje się na doświadczeniu i zespole pracowników, które są prawdziwym kapitałem firmy. Jesteśmy zawsze otwarte do współpracy
            |EUROSTANDARD sp. z. o. o. is a firm that provides specialized services in the human resources area (HR outsourcing and workforce leasing). On the orders of our clustomers we form teams of workers of relevant qualification and specialization and assign them to perform tasks given by our customers. We fully undertake all employer obligations, providing a company that uses the labor force the ability to deal exclusively with the organization of production processes. The special feature of our company is that EUROSTANDARD sp. z. o. o. is an operator that provides services in Poland of our subsidiary private enterprise  “European Standard Ukraine” (Lutsk, Ukraine). Workers are hired by a Ukrainian company and then are sent on a business trip to EUROSTANDARD sp. z. o. o., which by-turn provides services to Polish customers. Such form of cooperation grants additional benefits and protects our partners from any additional risks. Employing workers in Ukraine significantly reduces the expenses, which makes it possible for us to offer low prices for our services. On the other hand our Polish customers deal with a Polish company which operates strictly under the laws of the Republic of Poland. We have been working in Poland since 2006 (until recently all the serviced were provided directly through a Ukrainian company) and over a short period of time we have received a reputation of a reliable partner among our customers  in the Republic of Poland. Employees of PE  “European Standard Ukraine” receive a decent reward for their work, which undoubtedly reflects upon their efficiency and therefore on the quality of the services offered. The main advantage of our company is a combination of reasonable prices and high quality service which is based on the working experience and a team of workers who are the most valuable asset of our company. We invite you to use our services in order to ensure the fulfilment of your projects with the help of skilled personnel from Ukraine. We are always looking forward to new partnerships.',
            'imgs' => '',
            'date' => DB::raw('CURRENT_TIMESTAMP'),
            'active' => true,
        ]);

        Article::create([
            'category_id' => 3,
            'title' => 'Міжнародний Економічний Форум|Międzynarodowe Forum Gospodarcze|International Economic Forum',
            'short_description' => 'У Форумі взяли участь близько 300 учасників, 50 доповідачів з 12 країн світу, серед яких інвестори, вчені, експерти, бізнесмени.
            |W Forum wzięło udział około 300 uczestników, 50 prelegentów z 12 krajów, w tym inwestorów, naukowców, ekspertów, przedsiębiorców, autoryzowany
            |The Forum was attended by about 300 participants, 50 speakers from 12 countries, including investors, academics, experts, businessmen, authorized',
            'description' => 'У Форумі взяли участь близько 300 учасників, 50 доповідачів з 12 країн світу, серед яких інвестори, вчені, експерти, бізнесмени, повноважні гості.У Форумі взяли участь близько 300 учасників, 50 доповідачів з 12 країн світу, серед яких інвестори, вчені, експерти, бізнесмени.
            |W Forum wzięło udział około 300 uczestników, 50 prelegentów z 12 krajów, w tym inwestorów, naukowców, ekspertów, przedsiębiorców, autoryzowany. W Forum wzięło udział około 300 uczestników, 50 prelegentów z 12 krajów, w tym inwestorów, naukowców, ekspertów, przedsiębiorców, autoryzowany
            |The Forum was attended by about 300 participants, 50 speakers from 12 countries, including investors, academics, experts, businessmen, authorized.The Forum was attended by about 300 participants, 50 speakers from 12 countries, including investors, academics, experts, businessmen, authorized.',
            'imgs' => '[]',
            'date' => DB::raw('CURRENT_TIMESTAMP'),
            'active' => true,
        ]);
        Article::create([
            'category_id' => 3,
            'title' => 'Збільшення пенсійного віку|Podniesienie wieku emerytalnego|Increasing the retirement age',
            'short_description' => "Пенсійний вік підвищуватимуть поступово, але список професій, які дають право дострокового виходу на пенсію, суттєво скоротять починаючи з...
             |Wiek emerytalny będzie stopniowo wzrastać, ale lista zawodów, które mają prawo do wcześniejszej emerytury, zmniejszają się znacznie od ...
             |The retirement age would increase gradually, but the list of professions that are entitled to early retirement, reduce substantially since ...",
            'description' => 'Пенсійний вік підвищуватимуть поступово, але список професій, які дають право дострокового виходу на пенсію, суттєво скоротять починаючи з...Пенсійний вік підвищуватимуть поступово, але список професій, які дають право дострокового виходу на пенсію, суттєво скоротять починаючи з...
            |Wiek emerytalny będzie stopniowo wzrastać, ale lista zawodów, które mają prawo do wcześniejszej emerytury, zmniejszają się znacznie od ...Wiek emerytalny będzie stopniowo wzrastać, ale lista zawodów, które mają prawo do wcześniejszej emerytury, zmniejszają się znacznie od ...
            |The retirement age would increase gradually, but the list of professions that are entitled to early retirement, reduce substantially since ...The retirement age would increase gradually, but the list of professions that are entitled to early retirement, reduce substantially since ...',
            'imgs' => '[]',
            'date' => DB::raw('CURRENT_TIMESTAMP'),
            'active' => true,
        ]);
        Article::create([
            'category_id' => 3,
            'title' => 'Польща вироблятиме власні електромобілі|Polska produkuje swoje samochody elektryczne|Poland produce their own electric cars',
            'short_description' => 'У 2017 році у Польщі з\'являться перші національні електромобілі, повідомляє Експрес.У Польщі набирає популярності проект національного електромобіля. У листопаді 2016 року оголосять конкурс з вироблення кузова для майбутнього авто.
            |W 2017 roku Polska będzie pierwszym narodowym samochodów elektrycznych, raporty Ekspres.U zyskuje popularność polskiego narodowego projektu elektrycznego. W listopadzie 2016 roku ogłoszono konkurs na opracowanie ciała dla przyszłych samochodów.
            |In 2017 Poland will first national electric cars, reports Ekspres.U gaining popularity Polish national electric project. In November 2016 announced a competition to develop a body for future cars.',
            'description' => "У 2017 році у Польщі з'являться перші національні електромобілі, повідомляє Експрес.У Польщі набирає популярності проект національного електромобіля. У листопаді 2016 року оголосять конкурс з вироблення кузова для майбутнього авто. Енергетичні компанії Polska Grupa Energetyczna (PGE), Energa, Enea і Tauron Polska Energia 20 жовтня створили компанію ElectroMobility Poland, яка має втілити цей проект у життя. Бажання приєднатися до цієї ініціативи висловив також польський нафтовий концерн PKN Orlen, який планує на своїх заправних станціях встановити пункти швидкої зарядки електромобілів. Польське авто з електричним двигуном буде коштувати до 70 тисяч злотих (до 16 тисяч євро) і щонайменше 60% його запчастин будуть виробляти польські підприємства. У планах польського енергетичного сектора закладено, що в 2020 році у Польщі має бути щонайменше 75 тисяч зареєстрованих автівок із електричним двигуном, а ще через п’ять років таких транспортних засобів мало би бути вже понад мільйон. Однак скептики, яких нині більшість, вважають, що все це тільки мрії. Натомість польський уряд для заохочення майбутніх власників автівок з електричним або гібридним двигуном планують впровадити податкові пільги та нульову ставку податку на додану вартість. Згоду на це має дати ще Європейська комісія.Водночас у Польщі хочуть ввести у дію вищу оплату за користування старшими автівками із двигунами внутрішнього згоряння, що виділяють велику кількість шкідливих газів в атмосферу.До слова, ринок електромобілів в Україні за шість місяців ріс відразу в 2,5 рази. Всього за півроку продано 192 нових електрокара, тоді як за аналогічний період минулого року – лише 72. Цей показник вищий, ніж, наприклад, в сусідніх Польщі та Росії, і в 2,2 рази більший, ніж в Естонії, Латвії та Литві разом узятих.
            |W 2017 roku Polska będzie pierwszym narodowym samochodów elektrycznych, raporty Ekspres.U zyskuje popularność polskiego narodowego projektu elektrycznego. W listopadzie 2016 roku ogłoszono konkurs na opracowanie ciała dla przyszłych samochodów. Spółka energetyczna Polska Grupa Energetyczna (PGE), Energa, Enea i Tauron Polska Energia 20 października stworzył firmę Elektromobilność Polska, która jest umieszczenie projektu w praktyce. Chęć przyłączenia się do inicjatywy i wyraził Polskiego Koncernu Naftowego PKN Orlen, który planuje na swoich stacjach benzynowych szybko instalacji elektrycznych punktów ładowania. Polski samochód z silnikiem elektrycznym będzie kosztować nawet 70 tysięcy złotych (16 euro) i co najmniej 60% jego części będzie produkować polską firmę. Plany polskiego sektora energetycznego zawarte w 2020 roku w Polsce musi wynosić co najmniej 75.000 zarejestrowanych avtivok z silnikiem elektrycznym, a po pięciu latach takich pojazdów będzie trochę więcej niż milion. Ale sceptycy są teraz w większości wierzą, że to tylko sen. Zamiast tego, polski rząd, aby zachęcić przyszłych właścicieli avtivok z planem elektrycznym lub hybrydowym silnikiem wprowadzenia zwolnień podatkowych oraz zerową stawkę VAT. Umowa w tej sprawie jeszcze nie dać europejskich komisiya.Vodnochas w Polsce chce mieć na miejscu wyższą zapłatę za wykorzystanie starszych samochodem z silników spalinowych, które emitują duże ilości szkodliwych gazów w atmosferu.Do słowy, rynek pojazdów elektrycznych na Ukrainie do sześciu miesięcy wzrosła raz na 2 , 5 razy. W ciągu zaledwie sześciu miesięcy sprzedano 192 nowy elektryczny pojazd, podczas gdy w tym samym okresie ubiegłego roku - tylko 72. Ta liczba jest wyższa niż poziom w sąsiedniej Polsce i Rosji, a 2,2 razy wyższe niż w Estonii, Łotwie i Litwie razem.
            |In 2017 Poland will first national electric cars, reports Ekspres.U gaining popularity Polish national electric project. In November 2016 announced a competition to develop a body for future cars. The energy company Polska Grupa Energetyczna (PGE), Energa, Enea and Tauron Polska Energia 20 October created a company ElectroMobility Poland, which is to put the project into practice. The desire to join the initiative and expressed the Polish oil concern PKN Orlen, which plans on its petrol stations to install electric charging points fast. Polish car with an electric motor will cost up to 70 thousand zlotys (16 euros) and at least 60% of its parts will produce a Polish company. The plans of the Polish energy sector laid, in 2020 in Poland must be at least 75 thousand registered avtivok with an electric motor, and after five years of such vehicles would be little more than a million. But skeptics are now the majority, believe that this is only a dream. Instead, the Polish government to encourage future owners avtivok with electric or hybrid engine plan to introduce tax exemptions and zero rate of VAT. The agreement on this has yet to give European komisiya.Vodnochas in Poland want to have in place a higher payment for the use of elders by car with internal combustion engines that emit large amounts of harmful gases in atmosferu.Do words, market electric vehicles in Ukraine for six months has grown once in 2 , 5 times. In just six months sold 192 new electric vehicle, while during the same period last year - only 72. This figure is higher than the level in neighboring Poland and Russia, and 2.2 times higher than in Estonia, Latvia and Lithuania together.",
            'imgs' => '[]',
            'date' => DB::raw('CURRENT_TIMESTAMP'),
            'active' => true,
        ]);
        Article::create([
            'category_id' => 3,
            'title' => 'Збільшення пенсійного віку|Podniesienie wieku emerytalnego|Increasing the retirement age',
            'short_description' => "Пенсійний вік підвищуватимуть поступово, але список професій, які дають право дострокового виходу на пенсію, суттєво скоротять починаючи з...
             |Wiek emerytalny będzie stopniowo wzrastać, ale lista zawodów, które mają prawo do wcześniejszej emerytury, zmniejszają się znacznie od ...
             |The retirement age would increase gradually, but the list of professions that are entitled to early retirement, reduce substantially since ...",
            'description' => 'Пенсійний вік підвищуватимуть поступово, але список професій, які дають право дострокового виходу на пенсію, суттєво скоротять починаючи з...Пенсійний вік підвищуватимуть поступово, але список професій, які дають право дострокового виходу на пенсію, суттєво скоротять починаючи з...
            |Wiek emerytalny będzie stopniowo wzrastać, ale lista zawodów, które mają prawo do wcześniejszej emerytury, zmniejszają się znacznie od ...Wiek emerytalny będzie stopniowo wzrastać, ale lista zawodów, które mają prawo do wcześniejszej emerytury, zmniejszają się znacznie od ...
            |The retirement age would increase gradually, but the list of professions that are entitled to early retirement, reduce substantially since ...The retirement age would increase gradually, but the list of professions that are entitled to early retirement, reduce substantially since ...',
            'imgs' => '[]',
            'date' => DB::raw('CURRENT_TIMESTAMP'),
            'active' => true,
        ]);
        Article::create([
            'category_id' => 3,
            'title' => 'Польща вироблятиме власні електромобілі|Polska produkuje swoje samochody elektryczne|Poland produce their own electric cars',
            'short_description' => 'У 2017 році у Польщі з\'являться перші національні електромобілі, повідомляє Експрес.У Польщі набирає популярності проект національного електромобіля. У листопаді 2016 року оголосять конкурс з вироблення кузова для майбутнього авто.
            |W 2017 roku Polska będzie pierwszym narodowym samochodów elektrycznych, raporty Ekspres.U zyskuje popularność polskiego narodowego projektu elektrycznego. W listopadzie 2016 roku ogłoszono konkurs na opracowanie ciała dla przyszłych samochodów.
            |In 2017 Poland will first national electric cars, reports Ekspres.U gaining popularity Polish national electric project. In November 2016 announced a competition to develop a body for future cars.',
            'description' => "У 2017 році у Польщі з'являться перші національні електромобілі, повідомляє Експрес.У Польщі набирає популярності проект національного електромобіля. У листопаді 2016 року оголосять конкурс з вироблення кузова для майбутнього авто. Енергетичні компанії Polska Grupa Energetyczna (PGE), Energa, Enea і Tauron Polska Energia 20 жовтня створили компанію ElectroMobility Poland, яка має втілити цей проект у життя. Бажання приєднатися до цієї ініціативи висловив також польський нафтовий концерн PKN Orlen, який планує на своїх заправних станціях встановити пункти швидкої зарядки електромобілів. Польське авто з електричним двигуном буде коштувати до 70 тисяч злотих (до 16 тисяч євро) і щонайменше 60% його запчастин будуть виробляти польські підприємства. У планах польського енергетичного сектора закладено, що в 2020 році у Польщі має бути щонайменше 75 тисяч зареєстрованих автівок із електричним двигуном, а ще через п’ять років таких транспортних засобів мало би бути вже понад мільйон. Однак скептики, яких нині більшість, вважають, що все це тільки мрії. Натомість польський уряд для заохочення майбутніх власників автівок з електричним або гібридним двигуном планують впровадити податкові пільги та нульову ставку податку на додану вартість. Згоду на це має дати ще Європейська комісія.Водночас у Польщі хочуть ввести у дію вищу оплату за користування старшими автівками із двигунами внутрішнього згоряння, що виділяють велику кількість шкідливих газів в атмосферу.До слова, ринок електромобілів в Україні за шість місяців ріс відразу в 2,5 рази. Всього за півроку продано 192 нових електрокара, тоді як за аналогічний період минулого року – лише 72. Цей показник вищий, ніж, наприклад, в сусідніх Польщі та Росії, і в 2,2 рази більший, ніж в Естонії, Латвії та Литві разом узятих.
            |W 2017 roku Polska będzie pierwszym narodowym samochodów elektrycznych, raporty Ekspres.U zyskuje popularność polskiego narodowego projektu elektrycznego. W listopadzie 2016 roku ogłoszono konkurs na opracowanie ciała dla przyszłych samochodów. Spółka energetyczna Polska Grupa Energetyczna (PGE), Energa, Enea i Tauron Polska Energia 20 października stworzył firmę Elektromobilność Polska, która jest umieszczenie projektu w praktyce. Chęć przyłączenia się do inicjatywy i wyraził Polskiego Koncernu Naftowego PKN Orlen, który planuje na swoich stacjach benzynowych szybko instalacji elektrycznych punktów ładowania. Polski samochód z silnikiem elektrycznym będzie kosztować nawet 70 tysięcy złotych (16 euro) i co najmniej 60% jego części będzie produkować polską firmę. Plany polskiego sektora energetycznego zawarte w 2020 roku w Polsce musi wynosić co najmniej 75.000 zarejestrowanych avtivok z silnikiem elektrycznym, a po pięciu latach takich pojazdów będzie trochę więcej niż milion. Ale sceptycy są teraz w większości wierzą, że to tylko sen. Zamiast tego, polski rząd, aby zachęcić przyszłych właścicieli avtivok z planem elektrycznym lub hybrydowym silnikiem wprowadzenia zwolnień podatkowych oraz zerową stawkę VAT. Umowa w tej sprawie jeszcze nie dać europejskich komisiya.Vodnochas w Polsce chce mieć na miejscu wyższą zapłatę za wykorzystanie starszych samochodem z silników spalinowych, które emitują duże ilości szkodliwych gazów w atmosferu.Do słowy, rynek pojazdów elektrycznych na Ukrainie do sześciu miesięcy wzrosła raz na 2 , 5 razy. W ciągu zaledwie sześciu miesięcy sprzedano 192 nowy elektryczny pojazd, podczas gdy w tym samym okresie ubiegłego roku - tylko 72. Ta liczba jest wyższa niż poziom w sąsiedniej Polsce i Rosji, a 2,2 razy wyższe niż w Estonii, Łotwie i Litwie razem.
            |In 2017 Poland will first national electric cars, reports Ekspres.U gaining popularity Polish national electric project. In November 2016 announced a competition to develop a body for future cars. The energy company Polska Grupa Energetyczna (PGE), Energa, Enea and Tauron Polska Energia 20 October created a company ElectroMobility Poland, which is to put the project into practice. The desire to join the initiative and expressed the Polish oil concern PKN Orlen, which plans on its petrol stations to install electric charging points fast. Polish car with an electric motor will cost up to 70 thousand zlotys (16 euros) and at least 60% of its parts will produce a Polish company. The plans of the Polish energy sector laid, in 2020 in Poland must be at least 75 thousand registered avtivok with an electric motor, and after five years of such vehicles would be little more than a million. But skeptics are now the majority, believe that this is only a dream. Instead, the Polish government to encourage future owners avtivok with electric or hybrid engine plan to introduce tax exemptions and zero rate of VAT. The agreement on this has yet to give European komisiya.Vodnochas in Poland want to have in place a higher payment for the use of elders by car with internal combustion engines that emit large amounts of harmful gases in atmosferu.Do words, market electric vehicles in Ukraine for six months has grown once in 2 , 5 times. In just six months sold 192 new electric vehicle, while during the same period last year - only 72. This figure is higher than the level in neighboring Poland and Russia, and 2.2 times higher than in Estonia, Latvia and Lithuania together.",
            'imgs' => '[]',
            'date' => DB::raw('CURRENT_TIMESTAMP'),
            'active' => true,
        ]);
        Article::create([
            'category_id' => 3,
            'title' => 'Збільшення пенсійного віку|Podniesienie wieku emerytalnego|Increasing the retirement age',
            'short_description' => "Пенсійний вік підвищуватимуть поступово, але список професій, які дають право дострокового виходу на пенсію, суттєво скоротять починаючи з...
             |Wiek emerytalny będzie stopniowo wzrastać, ale lista zawodów, które mają prawo do wcześniejszej emerytury, zmniejszają się znacznie od ...
             |The retirement age would increase gradually, but the list of professions that are entitled to early retirement, reduce substantially since ...",
            'description' => 'Пенсійний вік підвищуватимуть поступово, але список професій, які дають право дострокового виходу на пенсію, суттєво скоротять починаючи з...Пенсійний вік підвищуватимуть поступово, але список професій, які дають право дострокового виходу на пенсію, суттєво скоротять починаючи з...
            |Wiek emerytalny będzie stopniowo wzrastać, ale lista zawodów, które mają prawo do wcześniejszej emerytury, zmniejszają się znacznie od ...Wiek emerytalny będzie stopniowo wzrastać, ale lista zawodów, które mają prawo do wcześniejszej emerytury, zmniejszają się znacznie od ...
            |The retirement age would increase gradually, but the list of professions that are entitled to early retirement, reduce substantially since ...The retirement age would increase gradually, but the list of professions that are entitled to early retirement, reduce substantially since ...',
            'imgs' => '[]',
            'date' => DB::raw('CURRENT_TIMESTAMP'),
            'active' => true,
        ]);
        Article::create([
            'category_id' => 3,
            'title' => 'Польща вироблятиме власні електромобілі|Polska produkuje swoje samochody elektryczne|Poland produce their own electric cars',
            'short_description' => 'У 2017 році у Польщі з\'являться перші національні електромобілі, повідомляє Експрес.У Польщі набирає популярності проект національного електромобіля. У листопаді 2016 року оголосять конкурс з вироблення кузова для майбутнього авто.
            |W 2017 roku Polska będzie pierwszym narodowym samochodów elektrycznych, raporty Ekspres.U zyskuje popularność polskiego narodowego projektu elektrycznego. W listopadzie 2016 roku ogłoszono konkurs na opracowanie ciała dla przyszłych samochodów.
            |In 2017 Poland will first national electric cars, reports Ekspres.U gaining popularity Polish national electric project. In November 2016 announced a competition to develop a body for future cars.',
            'description' => "У 2017 році у Польщі з'являться перші національні електромобілі, повідомляє Експрес.У Польщі набирає популярності проект національного електромобіля. У листопаді 2016 року оголосять конкурс з вироблення кузова для майбутнього авто. Енергетичні компанії Polska Grupa Energetyczna (PGE), Energa, Enea і Tauron Polska Energia 20 жовтня створили компанію ElectroMobility Poland, яка має втілити цей проект у життя. Бажання приєднатися до цієї ініціативи висловив також польський нафтовий концерн PKN Orlen, який планує на своїх заправних станціях встановити пункти швидкої зарядки електромобілів. Польське авто з електричним двигуном буде коштувати до 70 тисяч злотих (до 16 тисяч євро) і щонайменше 60% його запчастин будуть виробляти польські підприємства. У планах польського енергетичного сектора закладено, що в 2020 році у Польщі має бути щонайменше 75 тисяч зареєстрованих автівок із електричним двигуном, а ще через п’ять років таких транспортних засобів мало би бути вже понад мільйон. Однак скептики, яких нині більшість, вважають, що все це тільки мрії. Натомість польський уряд для заохочення майбутніх власників автівок з електричним або гібридним двигуном планують впровадити податкові пільги та нульову ставку податку на додану вартість. Згоду на це має дати ще Європейська комісія.Водночас у Польщі хочуть ввести у дію вищу оплату за користування старшими автівками із двигунами внутрішнього згоряння, що виділяють велику кількість шкідливих газів в атмосферу.До слова, ринок електромобілів в Україні за шість місяців ріс відразу в 2,5 рази. Всього за півроку продано 192 нових електрокара, тоді як за аналогічний період минулого року – лише 72. Цей показник вищий, ніж, наприклад, в сусідніх Польщі та Росії, і в 2,2 рази більший, ніж в Естонії, Латвії та Литві разом узятих.
            |W 2017 roku Polska będzie pierwszym narodowym samochodów elektrycznych, raporty Ekspres.U zyskuje popularność polskiego narodowego projektu elektrycznego. W listopadzie 2016 roku ogłoszono konkurs na opracowanie ciała dla przyszłych samochodów. Spółka energetyczna Polska Grupa Energetyczna (PGE), Energa, Enea i Tauron Polska Energia 20 października stworzył firmę Elektromobilność Polska, która jest umieszczenie projektu w praktyce. Chęć przyłączenia się do inicjatywy i wyraził Polskiego Koncernu Naftowego PKN Orlen, który planuje na swoich stacjach benzynowych szybko instalacji elektrycznych punktów ładowania. Polski samochód z silnikiem elektrycznym będzie kosztować nawet 70 tysięcy złotych (16 euro) i co najmniej 60% jego części będzie produkować polską firmę. Plany polskiego sektora energetycznego zawarte w 2020 roku w Polsce musi wynosić co najmniej 75.000 zarejestrowanych avtivok z silnikiem elektrycznym, a po pięciu latach takich pojazdów będzie trochę więcej niż milion. Ale sceptycy są teraz w większości wierzą, że to tylko sen. Zamiast tego, polski rząd, aby zachęcić przyszłych właścicieli avtivok z planem elektrycznym lub hybrydowym silnikiem wprowadzenia zwolnień podatkowych oraz zerową stawkę VAT. Umowa w tej sprawie jeszcze nie dać europejskich komisiya.Vodnochas w Polsce chce mieć na miejscu wyższą zapłatę za wykorzystanie starszych samochodem z silników spalinowych, które emitują duże ilości szkodliwych gazów w atmosferu.Do słowy, rynek pojazdów elektrycznych na Ukrainie do sześciu miesięcy wzrosła raz na 2 , 5 razy. W ciągu zaledwie sześciu miesięcy sprzedano 192 nowy elektryczny pojazd, podczas gdy w tym samym okresie ubiegłego roku - tylko 72. Ta liczba jest wyższa niż poziom w sąsiedniej Polsce i Rosji, a 2,2 razy wyższe niż w Estonii, Łotwie i Litwie razem.
            |In 2017 Poland will first national electric cars, reports Ekspres.U gaining popularity Polish national electric project. In November 2016 announced a competition to develop a body for future cars. The energy company Polska Grupa Energetyczna (PGE), Energa, Enea and Tauron Polska Energia 20 October created a company ElectroMobility Poland, which is to put the project into practice. The desire to join the initiative and expressed the Polish oil concern PKN Orlen, which plans on its petrol stations to install electric charging points fast. Polish car with an electric motor will cost up to 70 thousand zlotys (16 euros) and at least 60% of its parts will produce a Polish company. The plans of the Polish energy sector laid, in 2020 in Poland must be at least 75 thousand registered avtivok with an electric motor, and after five years of such vehicles would be little more than a million. But skeptics are now the majority, believe that this is only a dream. Instead, the Polish government to encourage future owners avtivok with electric or hybrid engine plan to introduce tax exemptions and zero rate of VAT. The agreement on this has yet to give European komisiya.Vodnochas in Poland want to have in place a higher payment for the use of elders by car with internal combustion engines that emit large amounts of harmful gases in atmosferu.Do words, market electric vehicles in Ukraine for six months has grown once in 2 , 5 times. In just six months sold 192 new electric vehicle, while during the same period last year - only 72. This figure is higher than the level in neighboring Poland and Russia, and 2.2 times higher than in Estonia, Latvia and Lithuania together.",
            'imgs' => '[]',
            'date' => DB::raw('CURRENT_TIMESTAMP'),
            'active' => true,
        ]);

        Article::create([
            'category_id' => 4,
            'title' => 'Зварювальник|Spawacz|Welder',
            "short_description" => "Потрібні зварювальники з досвідом роботи для зварювання труб для водопостачання та пожежогасіння. Роботи по місту Києву. Повне завантаження. Офіційне працевлаштування. Можливе розселення.
            |Szukam spawaczy z doświadczeniem w spawaniu rur do wody i ognia. Pracuje dla miasta Kijowa. Full download. Dziennik zatrudnienia. Możliwe rozliczenie.
            |Looking welders with experience for welding pipes for water and fire. Works for the city of Kyiv. Full download. Official employment. The possible settlement.",
            'description' => 'Фірма пропонує: Стабільну роботу по контракту, на весь термін дії візи. Медичне страхування та робочий одяг. Проживання на квартирах /по 2-3 чол/ з усіма зручностями/кухня, ванна/ оплачує роботодавець. Проживання по можливості недалеко до місця праці. Роботодавець забезпечує доїзд.Фірма забезпечує зустріч кандидата по приїзді в Польщу. Заробітна плата - від 16 до 19 зл нетто/год роботи (в залежності від вмінь та досвіду) Виплата зарплати до 10-го числа кожного місяця на картковий рахунок /відкриває фірма. Роботу по 10-12 год в день з ПН - по СБ (в залежності від проекту).Робота в сучасних фірмах.
            |Firma oferuje: stabilną pracę na podstawie umowy na czas wizy. Ubezpieczenie zdrowotne i ubrania robocze. Zakwaterowanie w mieszkaniu / 2-3 osób / ze wszystkimi udogodnieniami / kuchnia, łazienka / zapłacone przez pracodawcę. Noclegi możliwie blisko miejsca pracy. Pracodawca zapewnia doyizd.Firma Kandydat dostarcza spotkaniu w dniu przyjazdu w Polsce. Płace - od 16 do 19 zł netto / godzin pracy (w zależności od umiejętności i doświadczenia) Wypłata wynagrodzenia przez 10 dnia każdego miesiąca na rachunek karty / Open Company. W pracy 10-12 godzin dziennie od pon - sob na (w zależności od projektu) .Robota w nowoczesnych przedsiębiorstwach.
            |The company offers: Stable work on contract for the duration of the visa. Health insurance and work clothes. Accommodation in apartment / 2-3 persons / with all amenities / kitchen, bath / paid by the employer. Accommodation near as possible to the place of work. The employer provides doyizd.Firma candidate provides meeting on arrival in Poland. Wages - from 16 to 19 zł net / hours of work (depending on skills and experience) Payment of salaries by the 10th of each month on the card account / open company. The work 10-12 hours a day from Mon - Sat on (depending on the project) .Robota in modern companies.',
            'price' => 10000,
            'imgs' => '',
            'date' => DB::raw('CURRENT_TIMESTAMP'),
            'active' => true,
        ]);
        Article::create([
            'category_id' => 4,
            'title' => 'Водії кат.С Е|Kierowcy kat.C E|Drivers Cat.C E',
            "short_description" => "Робота в Варшаві, повна зайнятість.Водії кат. З ЕРобота по всій Европе, в Місяці водії наїждяють до 10.000 км.ФедьЕвНусе, Sp. z o.o. , Варшава
            |Praca w Warszawie, pełne zaynyatist.Vodiyi kota. Z ERobota całej Europie, kierowcy Księżyc nayizhdyayut do 10000 km.FedEvNuse, Sp. z o.o. Warszawa
            |Working in Warsaw, full zaynyatist.Vodiyi cat. With ERobota throughout Europe, the Moon drivers nayizhdyayut to 10,000 km.FedEvNuse, Sp. z o.o. Warsaw",
            'description' => 'Робота по всій Європі,в місяці водії наїждяють до 10.000 км.Вимагається знання тахографа,кумунікативне знання польської і мін. англійської. З-п 1400 зл ставка 0,50 зл за 1 км.
            |Pracując w całej Europie, w miesiącu do 10,000 kierowców nayizhdyayut km.Vymahayetsya tachografu wiedzy kumunikatyvne znajomości języka polskiego i kopalniach. English. Od 1400 roku, pan zł kurs 0,50 zł za 1 km.
            |Working across Europe, in the month to 10,000 drivers nayizhdyayut km.Vymahayetsya knowledge tachograph kumunikatyvne knowledge of Polish and mines. English. Since 1400, Mr. PLN 0,50 PLN rate for 1 km.',
            'price' => "15000",
            'imgs' => '',
            'date' => DB::raw('CURRENT_TIMESTAMP'),
            'active' => true,
        ]);
        Article::create([
            'category_id' => 4,
            'title' => 'Виробництво тентів і бічних штор Roland International Polska|Produkcja wychyleń oraz boczne kurtyny Roland International Polska|Production of tilts and side curtains Roland International Polska',
            "short_description" => 'Вакансія: робітник на виробництво (Roland International Polska) FedJobHouse, Sp. z o.o. , Варшава
            |Praca: Pracownik Produkcji (na Roland International Polska) Fedyobґouse, Sp. z o.o. Warszawa
            |Job: Production worker on (Roland International Polska) Fedyobґouse, Sp. z o.o. Warsaw',
            'description' => 'Вакансія: робітник на виробництво (Roland International Polska)
            Опис діяльності фірми: виробництво тентів і бічних штор для міжнародного транспорту
            Локація: Конін
            Вимоги: чоловіки і жінки
            Умови праці: Робота на виробництві тентів, обслуговування робочого обладнання, фізична робота.
            Робота: позмінна, 3 зміни.
            Оплата: 11 Zł в годину (брутто), після 3х міс. роботи премії до 300 zł/міс, доп. години 50% або 100%, нічні зміни
            Проживання: за рахунок роботодавця, на території фірми
            Термін дії: вакансія діюча, попередня реєстрація за 5-7 днів до приїзду
            |Praca: Pracownik Produkcji na (Roland International Polska)
            Opis firmy: Produkcja markiz i zasłon bocznych w transporcie międzynarodowym
            Lokalizacja: Konin
            Wymagania: mężczyźni i kobiety
            Warunki pracy: Praca przy produkcji markiz, konserwacji sprzętu roboczego, praca fizyczna.
            Praca: przesunięcie, 3 zmiany.
            Płatność: 11 zł za godzinę (brutto) po 3 miesiącach. Nagroda w wysokości 300 zł / mc, wew. godzina 50% lub 100%, nocne zmiany
            Zakwaterowanie: pracodawca na terenie firmy
            Ważny wakat prąd wstępnej rejestracji przez 5-7 dni przed przyjazdem
            |Job: Production worker on (Roland International Polska)
            Description of the company: manufacture of awnings and side curtains for international transport
            Location: Konin
            Requirements: men and women
            Working conditions: Working in the manufacture of awnings, maintenance of work equipment, physical work.
            Job: shift, 3 shifts.
            Payment: 11 Zł per hour (gross) after 3 months. Prize of 300 zł / month, ext. hours 50% or 100%, night shifts
            Accommodation: by the employer in the territory of the company
            Valid current vacancy, pre-registration for 5-7 days before arrival',
            'price' => "",
            'imgs' => '',
            'date' => DB::raw('CURRENT_TIMESTAMP'),
            'active' => true,
        ]);
        Article::create([
            'category_id' => 4,
            'title' => 'Зварювальник|Spawacz|Welder',
            "short_description" => "Потрібні зварювальники з досвідом роботи для зварювання труб для водопостачання та пожежогасіння. Роботи по місту Києву. Повне завантаження. Офіційне працевлаштування. Можливе розселення.
            |Szukam spawaczy z doświadczeniem w spawaniu rur do wody i ognia. Pracuje dla miasta Kijowa. Full download. Dziennik zatrudnienia. Możliwe rozliczenie.
            |Looking welders with experience for welding pipes for water and fire. Works for the city of Kyiv. Full download. Official employment. The possible settlement.",
            'description' => 'Фірма пропонує: Стабільну роботу по контракту, на весь термін дії візи. Медичне страхування та робочий одяг. Проживання на квартирах /по 2-3 чол/ з усіма зручностями/кухня, ванна/ оплачує роботодавець. Проживання по можливості недалеко до місця праці. Роботодавець забезпечує доїзд.Фірма забезпечує зустріч кандидата по приїзді в Польщу. Заробітна плата - від 16 до 19 зл нетто/год роботи (в залежності від вмінь та досвіду) Виплата зарплати до 10-го числа кожного місяця на картковий рахунок /відкриває фірма. Роботу по 10-12 год в день з ПН - по СБ (в залежності від проекту).Робота в сучасних фірмах.
            |Firma oferuje: stabilną pracę na podstawie umowy na czas wizy. Ubezpieczenie zdrowotne i ubrania robocze. Zakwaterowanie w mieszkaniu / 2-3 osób / ze wszystkimi udogodnieniami / kuchnia, łazienka / zapłacone przez pracodawcę. Noclegi możliwie blisko miejsca pracy. Pracodawca zapewnia doyizd.Firma Kandydat dostarcza spotkaniu w dniu przyjazdu w Polsce. Płace - od 16 do 19 zł netto / godzin pracy (w zależności od umiejętności i doświadczenia) Wypłata wynagrodzenia przez 10 dnia każdego miesiąca na rachunek karty / Open Company. W pracy 10-12 godzin dziennie od pon - sob na (w zależności od projektu) .Robota w nowoczesnych przedsiębiorstwach.
            |The company offers: Stable work on contract for the duration of the visa. Health insurance and work clothes. Accommodation in apartment / 2-3 persons / with all amenities / kitchen, bath / paid by the employer. Accommodation near as possible to the place of work. The employer provides doyizd.Firma candidate provides meeting on arrival in Poland. Wages - from 16 to 19 zł net / hours of work (depending on skills and experience) Payment of salaries by the 10th of each month on the card account / open company. The work 10-12 hours a day from Mon - Sat on (depending on the project) .Robota in modern companies.',
            'price' => 10000,
            'imgs' => '',
            'date' => DB::raw('CURRENT_TIMESTAMP'),
            'active' => true,
        ]);
        Article::create([
            'category_id' => 4,
            'title' => 'Водії кат.С Е|Kierowcy kat.C E|Drivers Cat.C E',
            "short_description" => "Робота в Варшаві, повна зайнятість.Водії кат. З ЕРобота по всій Европе, в Місяці водії наїждяють до 10.000 км.ФедьЕвНусе, Sp. z o.o. , Варшава
            |Praca w Warszawie, pełne zaynyatist.Vodiyi kota. Z ERobota całej Europie, kierowcy Księżyc nayizhdyayut do 10000 km.FedEvNuse, Sp. z o.o. Warszawa
            |Working in Warsaw, full zaynyatist.Vodiyi cat. With ERobota throughout Europe, the Moon drivers nayizhdyayut to 10,000 km.FedEvNuse, Sp. z o.o. Warsaw",
            'description' => 'Робота по всій Європі,в місяці водії наїждяють до 10.000 км.Вимагається знання тахографа,кумунікативне знання польської і мін. англійської. З-п 1400 зл ставка 0,50 зл за 1 км.
            |Pracując w całej Europie, w miesiącu do 10,000 kierowców nayizhdyayut km.Vymahayetsya tachografu wiedzy kumunikatyvne znajomości języka polskiego i kopalniach. English. Od 1400 roku, pan zł kurs 0,50 zł za 1 km.
            |Working across Europe, in the month to 10,000 drivers nayizhdyayut km.Vymahayetsya knowledge tachograph kumunikatyvne knowledge of Polish and mines. English. Since 1400, Mr. PLN 0,50 PLN rate for 1 km.',
            'price' => "15000",
            'imgs' => '',
            'date' => DB::raw('CURRENT_TIMESTAMP'),
            'active' => true,
        ]);
        Article::create([
            'category_id' => 4,
            'title' => 'Зварювальник|Spawacz|Welder',
            "short_description" => "Потрібні зварювальники з досвідом роботи для зварювання труб для водопостачання та пожежогасіння. Роботи по місту Києву. Повне завантаження. Офіційне працевлаштування. Можливе розселення.
            |Szukam spawaczy z doświadczeniem w spawaniu rur do wody i ognia. Pracuje dla miasta Kijowa. Full download. Dziennik zatrudnienia. Możliwe rozliczenie.
            |Looking welders with experience for welding pipes for water and fire. Works for the city of Kyiv. Full download. Official employment. The possible settlement.",
            'description' => 'Фірма пропонує: Стабільну роботу по контракту, на весь термін дії візи. Медичне страхування та робочий одяг. Проживання на квартирах /по 2-3 чол/ з усіма зручностями/кухня, ванна/ оплачує роботодавець. Проживання по можливості недалеко до місця праці. Роботодавець забезпечує доїзд.Фірма забезпечує зустріч кандидата по приїзді в Польщу. Заробітна плата - від 16 до 19 зл нетто/год роботи (в залежності від вмінь та досвіду) Виплата зарплати до 10-го числа кожного місяця на картковий рахунок /відкриває фірма. Роботу по 10-12 год в день з ПН - по СБ (в залежності від проекту).Робота в сучасних фірмах.
            |Firma oferuje: stabilną pracę na podstawie umowy na czas wizy. Ubezpieczenie zdrowotne i ubrania robocze. Zakwaterowanie w mieszkaniu / 2-3 osób / ze wszystkimi udogodnieniami / kuchnia, łazienka / zapłacone przez pracodawcę. Noclegi możliwie blisko miejsca pracy. Pracodawca zapewnia doyizd.Firma Kandydat dostarcza spotkaniu w dniu przyjazdu w Polsce. Płace - od 16 do 19 zł netto / godzin pracy (w zależności od umiejętności i doświadczenia) Wypłata wynagrodzenia przez 10 dnia każdego miesiąca na rachunek karty / Open Company. W pracy 10-12 godzin dziennie od pon - sob na (w zależności od projektu) .Robota w nowoczesnych przedsiębiorstwach.
            |The company offers: Stable work on contract for the duration of the visa. Health insurance and work clothes. Accommodation in apartment / 2-3 persons / with all amenities / kitchen, bath / paid by the employer. Accommodation near as possible to the place of work. The employer provides doyizd.Firma candidate provides meeting on arrival in Poland. Wages - from 16 to 19 zł net / hours of work (depending on skills and experience) Payment of salaries by the 10th of each month on the card account / open company. The work 10-12 hours a day from Mon - Sat on (depending on the project) .Robota in modern companies.',
            'price' => 10000,
            'imgs' => '',
            'date' => DB::raw('CURRENT_TIMESTAMP'),
            'active' => true,
        ]);
        Article::create([
            'category_id' => 4,
            'title' => 'Водії кат.С Е|Kierowcy kat.C E|Drivers Cat.C E',
            "short_description" => "Робота в Варшаві, повна зайнятість.Водії кат. З ЕРобота по всій Европе, в Місяці водії наїждяють до 10.000 км.ФедьЕвНусе, Sp. z o.o. , Варшава
            |Praca w Warszawie, pełne zaynyatist.Vodiyi kota. Z ERobota całej Europie, kierowcy Księżyc nayizhdyayut do 10000 km.FedEvNuse, Sp. z o.o. Warszawa
            |Working in Warsaw, full zaynyatist.Vodiyi cat. With ERobota throughout Europe, the Moon drivers nayizhdyayut to 10,000 km.FedEvNuse, Sp. z o.o. Warsaw",
            'description' => 'Робота по всій Європі,в місяці водії наїждяють до 10.000 км.Вимагається знання тахографа,кумунікативне знання польської і мін. англійської. З-п 1400 зл ставка 0,50 зл за 1 км.
            |Pracując w całej Europie, w miesiącu do 10,000 kierowców nayizhdyayut km.Vymahayetsya tachografu wiedzy kumunikatyvne znajomości języka polskiego i kopalniach. English. Od 1400 roku, pan zł kurs 0,50 zł za 1 km.
            |Working across Europe, in the month to 10,000 drivers nayizhdyayut km.Vymahayetsya knowledge tachograph kumunikatyvne knowledge of Polish and mines. English. Since 1400, Mr. PLN 0,50 PLN rate for 1 km.',
            'price' => "15000",
            'imgs' => '',
            'date' => DB::raw('CURRENT_TIMESTAMP'),
            'active' => true,
        ]);

        Article::create([
            'category_id' => 7,
            'name' => 'meta.company',
            'title' => 'Seo для Компанії|SEO for Hotel|Seo для Отеля',
            'meta_title' => 'META Title|META Title EN|META Title RU',
            'meta_description' => 'Meta_description|META Description EN|META Description RU',
            'meta_keywords' => 'META Keywords, META Title, META Title1|META KeywordsEN|META Keywords RU',
            'active' => true,
        ]);
        Article::create([
            'category_id' => 7,
            'name' => 'meta.news',
            'title' => 'Seo для Новин|SEO for Rooms|Seo для Номеров',
            'meta_title' => 'META Title|META Title EN|META Title RU',
            'meta_description' => 'Meta_description|META Description EN|META Description RU',
            'meta_keywords' => 'META Keywords, META Title, META Title1|META KeywordsEN|META Keywords RU',
            'active' => true,
        ]);
        Article::create([
            'category_id' => 7,
            'name' => 'meta.works',
            'title' => 'Seo для Вакансій|SEO for Services|Seo для Услуг',
            'meta_title' => 'META Title|META Title EN|META Title RU',
            'meta_description' => 'Meta_description|META Description EN|META Description RU',
            'meta_keywords' => 'META Keywords, META Title, META Title1|META KeywordsEN|META Keywords RU',
            'active' => true,
        ]);
        Article::create([
            'category_id' => 7,
            'name' => 'meta.gallery',
            'title' => 'Seo для Галереї|SEO for Gallery|Seo для Галлереи',
            'meta_title' => 'META Title|META Title EN|META Title RU',
            'meta_description' => 'Meta_description|META Description EN|META Description RU',
            'meta_keywords' => 'META Keywords, META Title, META Title1|META KeywordsEN|META Keywords RU',
            'active' => true,
        ]);
        Article::create([
            'category_id' => 7,
            'name' => 'meta.contact',
            'title' => 'Seo для Контактів|SEO for Contacts|Seo для Контактов',
            'meta_title' => 'META Title|META Title EN|META Title RU',
            'meta_description' => 'Meta_description|META Description EN|META Description RU',
            'meta_keywords' => 'META Keywords, META Title, META Title1|META KeywordsEN|META Keywords RU',
            'active' => true,
        ]);
    }

}

class CategoriesSeeder extends Seeder {

    public function run()
    {
        DB::table('Categories')->delete();

        Category::create([
            'id' => "1",
            'name' => 'Головна',
            'link' => 'main',
            'fields' => '["title","short_description","description"]',
        ]);
        Category::create([
            'id' => "2",
            'name' => 'Про компанію',
            'link' => 'company',
            'fields' => '["title","short_description","description"]',
        ]);

        Category::create([
            'id' => "3",
            'name' => 'Новини',
            'link' => 'news',
            'fields' => '["title","short_description","description","gallery","date","priority","active"]',
        ]);

        Category::create([
            'id' => "4",
            'name' => 'Вакансії',
            'link' => 'works',
            'fields' => '["title","short_description","description","gallery","priority","active","price"]',
        ]);

        /* Category::create([
             'id' => "4",
             'name' => 'Події',
             'link' => 'events',
             'fields' => '["title","description","gallery","date","priority","active"]',
         ]);*/

        Category::create([
            'id' => "5",
            'name' => 'Галерея',
            'link' => 'gallery',
            'fields' => '["title","short_description","description","gallery","priority","active"]',
        ]);

        Category::create([
            'id' => "6",
            'name' => 'Слайдер',
            'link' => 'slider',
            'fields' => '["title","short_description","description","gallery","priority","active"]',
        ]);
        Category::create([
            'id' => "7",
            'name' => 'Seo',
            'link' => 'seo',
            'fields' => '["title","meta_title","meta_description","meta_keywords"]',
        ]);
        Category::create([
            'id' => "8",
            'name' => 'Коментарі',
            'link' => 'comments',
            'fields' => '["title","meta_title","meta_description","meta_keywords"]',
        ]);
        Category::create([
            'id' => "9",
            'name' => 'Резюме',
            'link' => 'resume',
            'fields' => '["title","meta_title","meta_description","meta_keywords"]',
        ]);
    }

}

class LangsSeeder extends Seeder {

    public function run()
    {
        DB::table('langs')->delete();

        Lang::create([
            'lang' => 'ua',
        ]);

        Lang::create([
            'lang' => 'pl',
        ]);

        Lang::create([
            'lang' => 'en',
        ]);

    }

}

class UsersSeeder extends Seeder {

    public function run()
    {
        DB::table('Users')->delete();

        User::create([
            'name' => 'admin',
            'email' => 'raun@i.ua',
            'password' => '$2y$10$KCR5WbIyUHXgZbsthDHHHOJgtdcmTA2Um.eXHbRwnvBWRgcJN/0O.',
        ]);

        User::create([
            'name' => 'root',
            'email' => 'webdesignstudio@gmail.com',
            'password' => '$2y$10$BdvnOe9NrHYCkipriMsBRuvfVrOGQI0oi7XzPHQSQ42pUpJGg4Q6y',
        ]);
    }

}
class TextsSeeder extends Seeder {

    public function run()
    {
        DB::table('Texts')->delete();

        Text::create([
            'page_id' => '0',
            'name' => "header.tel1",
            'type' => 'input',
            'title' => 'Контактний номер телефону 1',
            'description' => '+3809912345',
            'priority' => '3',
            'lang_active' => "0",
        ]);
        Text::create([
            'page_id' => '0',
            'name' => "header.tel2",
            'type' => 'input',
            'title' => 'Контактний номер телефону 2',
            'description' => '+3809854321',
            'priority' => '3',
            'lang_active' => "0",
        ]);

        Text::create([
            'page_id' => '0',
            'name' => "header.address",
            'type' => 'input',
            'title' => 'Адреса',
            'description' => 'м.Луцьк вул.Драгоманова 7',
            'priority' => '2',
            'lang_active' => "1",
        ]);

        Text::create([
            'page_id' => '0',
            'name' => "header.mail",
            'type' => 'input',
            'title' => 'Пошта',
            'description' => 'exampl@gmail.com',
            'priority' => '1',
            'lang_active' => "0",
        ]);



    }

}


