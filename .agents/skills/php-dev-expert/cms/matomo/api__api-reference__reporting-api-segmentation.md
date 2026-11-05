# Segmentation: API Reference - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/api-reference/reporting-api-segmentation

---

#### [API Reference](api__api-reference.md)

- [Introduction](api__api-reference__api-reference-introduction.md)
- Tracking
  - [Tracking HTTP API](api__api-reference__tracking-api.md)
  - [JavaScript Tracking Client](api__api-reference__tracking-javascript.md)
  - [Java Tracker](api__api-reference__tracking-java.md)
  - [PHP Tracking Client](api__api-reference__PHP-Matomo-Tracker.md)
- Tag Manager
  - [Tag Manager JavaScript API](api__api-reference__tagmanager__javascript-api-reference.md)
- Reporting HTTP API
  - [Reporting API Reference](api__api-reference__reporting-api.md)
  - [Metadata](api__api-reference__reporting-api-metadata.md)
  - [Segmentation](api__api-reference__reporting-api-segmentation.md)
  - [Compatible apiModule and apiAction combinations](api__api-reference__reporting-api-apiModule_apiAction-combinations.md)
- PHP Plugins API
  - [Classes](api__api-reference__classes.md)
  - [Events](api__api-reference__events.md)
  - [Index](api__api-reference__index.md)
- WordPress
  - [Classes](api__api-reference__wordpress__classes-reference.md)
  - [Hooks](api__api-reference__wordpress__hooks-reference.md)
  - [REST API](api__api-reference__wordpress__restapi-reference.md)
- Database
  - [Database schema](api__guides__database-schema.md)

#### Segmentation

- [Segment Parameter in the API URL Request](#segment-parameter-in-the-api-url-request)
- [Segment operators](#segment-operators)
- [Combine Segments with AND and OR expressions](#combine-segments-with-and-and-or-expressions)
- [List of segments](#list-of-segments)
  - [Segment values must be URL encoded](#segment-values-must-be-url-encoded "Segment values must be URL encoded")
  - [Segment where value is empty / is not empty](#segment-where-value-is-empty-is-not-empty "Segment where value is empty / is not empty")

# Segmentation in the API

Learn how to use the powerful segmentation feature available in Matomo. This page explains how to build the 'segment' parameter in your API requests. Segmentation makes it easy to request any Matomo report for a subset of your audience.

This page explains how to build and use the 'segment' API URL parameter, and you will find the list of all the supported visitor segments (country, entry page, keyword, returning visitor, etc.).

## Segment Parameter in the API URL Request

Segmentation can be applied to most API functions. The **segment** parameter contains the definition of the segment you wish to filter your reports to.

For example, you can request the "Best Keywords" report processed for all visits where "Country is Germany AND Browser is Firefox" by doing the following request:

```
https://matomo.example.org/index.php
?token_auth=yourTokenHere
&format=xml
&date=2011-01-11
&period=week
&idSite=1
&module=API&method=Referrers.getKeywords
&segment=browserCode==FF;countryCode==DE
```

Example URL of top countries used by visits landing on the page: [virtual-drums.com/](https://www.virtual-drums.com/): [demo.matomo.org/?module=API&method=**UserCountry.getCountry**&idSite=3&date=yesterday&period=day&format=xml&filter\_truncate=5&language=en**&segment=entryPageUrl==http%3A%2F%2Fwww.virtual-drums.com%2F**](https://demo.matomo.org/?module=API&method=UserCountry.getCountry&idSite=3&date=yesterday&period=day&format=xml&filter_truncate=5&language=en&segment=entryPageUrl==http%3A%2F%2Fwww.virtual-drums.com%2F)

**Note**: Many segment parameter names are case-sensitive, such as `userId` and `idSite`. Always use the exact naming shown in the reference list below to prevent errors or no data.

Let's take a look at the segment string.

## Segment operators

| Operator | Behavior | Example |
| --- | --- | --- |
| == | Equals | `&segment=countryCode==IN` Return results where the country is India |
| != | Not equals | `&segment=actions!=1` Return results where the number of actions (page views, downloads, etc.) is not 1 |
| <= | Less than or equal to | `&segment=actions<=4` Return results where the number of actions (page views, downloads, etc.) is 4 or less |
| < | Less than | `&segment=visitServerHour<12` Return results where the Server time (hour) is before midday. |
| >= | Greater than or equal to | `&segment=visitDuration>=600` Return results where visitors spent 10 minutes or more on the website. |
| > | Greater than | `&segment=daysSinceLastVisit>1` Return results where visitors are coming back to the website 2 days or more after their previous visit. |
| =@ | Contains | `&segment=referrerName=@matomo` Return results where the Referer name (website domain or search engine name) contains the word "matomo". |
| !@ | Does not contain | `&segment=referrerKeyword!@yourBrand` Return results where the keyword used to access the website does not contain word "yourBrand". |
| =^ | Starts with | `&segment=referrerKeyword=^yourBrand` Return results where the keyword used to access the website starts with "yourBrand" (requires at least Matomo 2.15.1). |
| =$ | Ends with | `&segment=referrerKeyword=$yourBrand` Return results where the keyword used to access the website ends with "yourBrand" (requires at least Matomo 2.15.1). |

## Combine Segments with AND and OR expressions

You can combine several segments together with AND and OR logic.

**OR** operator is the `,` (comma) character, for example:

- `&segment=countryCode==US,countryCode==DE` Country is either (United States OR Germany)

**AND** operator is the `;` (semi-colon) character, for example:

- `&segment=visitorType==returning;countryCode==FR` Returning visitors AND Country is France
- `&segment=referrerType==search;referrerKeyword!=Matomo` Visitors from Search engines AND Keyword is not Matomo

Note that if you combine OR and AND operators, the OR operator will take precedence. For example, the following query
`&segment=referrerType==search;referrerKeyword==Matomo,referrerKeyword==analytics`
will select "Visitors from Search engines AND (Keyword is Matomo OR Keyword is analytics)"

## List of segments

**Dimensions**

|  |  |
| --- | --- |
| **Visitors** | |
| aiAgentName | AI Agent Name |
| browserName | Browser Example values: `FireFox, Internet Explorer, Chrome, Safari, Opera etc.` |
| browserCode | Browser code Example values: `FF, IE, CH, SF, OP etc.` |
| browserEngine | Browser engine Example values: `Trident, WebKit, Presto, Gecko, Blink, etc.` |
| browserVersion | Browser version Example values: `1.0, 8.0, etc.` |
| deviceBrand | Device brand Example values: `2E, 3GNET, 3GO, 3Q, 4Good, 4ife, 5IVE, 7 Mobile, 7Ke tree, 10moons, 360, 8848, A&K, A1, A95X, AAUW, Accent, Accesstyle, ACD, Ace, Aceline, Acepad, Acer, Acteck, actiMirror, Adreamer, Adronix, Advan, Advance, Advantage Air, AEEZO, AFFIX, AfriOne, AGM, AG Mobile, AI+, AIDATA, AileTV, Ainol, Airis, Airness, AIRON, Airpha, Airtel, Airties, AirTouch, AIS, Aiuto, Aiwa, Ajib, Akai, AKIRA, Alba, Alcatel, Alcor, ALDI NORD, ALDI SÜD, Alfawise, Alienware, Aligator, AllCall, AllDocube, allente, ALLINmobile, All Star, Allview, Allwinner, Alps, alpsmart, Altech UEC, Altibox, Altice, Altimo, altron, Altus, AMA, Amazon, Amazon Basics, AMCV, AMGOO, Amigoo, Amino, Amoi, ANBERNIC, ANCEL, andersson, Andowl, Angelcare, AngelTech, Anker, Anry, ANS, ANXONIT, AOC, Aocos, Aocwei, AOpen, Aoro, Aoson, AOYODKG, ApoloSign, Apple, Aquarius, Archos, Arian Space, Arival, Ark, ArmPhone, Arnova, ARRIS, Arrow, Artel, artfone, Artizlee, ArtLine, Arçelik, Asano, Asanzo, Ask, Aspera, ASSE, Assistant, ASTECH, astro (MY), Astro (UA), Asus, AT&T, Athesi, ATLANTIC, Atlantic Electrics, Atmaca Elektronik, ATMAN, ATMPC, ATOL, Atom, Atouch, Atozee, Attila, Atvio, Audiovox, AUPO, AURIS, Autan, AUX, Avaya, Avenzo, AVH, Avvio, Awow, AWOX, AXEN, Axioo, AXXA, Axxion, AYA, AYYA, Azeyou, AZOM, Azumi Mobile, Azupik, b2m, Backcell, BAFF, BangOlufsen, Barnes & Noble, BARTEC, Bastyon Mobi, BAUHN, BBK, BB Mobile, BDF, BDQ, BDsharing, Beafon, Becker, Beeline, Beelink, Beetel, Beista, Beko, Bell, Bellphone, Benco, Benesse, BenQ, BenQ-Siemens, BenWee, Benzo, Beyond, Bezkam, BGH, Biegedy, Bigben, BIHEE, BilimLand, Billion, Billow, BioRugged, Bird, Bitel, Bitmore, Bittium, Bkav, Black Bear, Black Box, Black Fox, Blackpcs, Blackphone, Blackton, Blackview, Blaupunkt, Bleck, BLISS, Blloc, Blow, Blu, Bluboo, Bluebird, Bluedot, Bluegood, BlueSky, Bluewave, BluSlate, BMAX, Bmobile, BMW, BMXC, BNCF, Bobarry, bogo, Bolva, Bookeen, Boost, Botech, Boway, bq, Bqeel, BrandCode, Brandt, BRAVE, Bravis, BrightSign, Brigmton, Brondi, BROR, BS Mobile, Bubblegum, Bulsatcom, Bundy, Bush, BuzzTV, BYD, BYJU'S, BYYBUO, C5 Mobile, CADENA, CAGI, Caixun, CALME, Camfone, Canaima, Canal+, Canal Digital, Canguro, Capitel, Captiva, Carbon Mobile, Carrefour, Casio, Casper, Cat, Cavion, CCIT, Cecotec, Ceibal, Celcus, Celkon, Cell-C, Cellacom, CellAllure, Cellution, CENTEK, Centric, CEPTER, CG Mobile, CGV, Chainway, Changhong, CHCNAV, Cherry Mobile, Chico Mobile, ChiliGreen, China Mobile, China Telecom, Chuwi, C Idea, CipherLab, Citycall, CKK Mobile, Claresta, Clarmin, CLAYTON, ClearPHONE, Clementoni, Clikon, Cloudfone, Cloud Mobile, Clout, Clovertek, CMF, CnM, Cobalt, Coby Kyros, Cogeco, Coles, COLORROOM, Colors, Comio, CommScope, Compal, Compaq, COMPUMAX, ComTrade Tesla, Conceptum, Concord, ConCorde, Condor, Connectce, Connex, Conquest, CONSUNG, Continental Edison, Contixo, coocaa, COOD-E, Coolpad, Coopers, copa, CORN, Cosmote, Covia, Cowon, COYOTE, CPDEVICE, CreNova, Crescent, Crestron, Cricket, Crius Mea, Crony, Crosscall, Crown, CRUA, Ctroniq, Cube, CUBOT, CUD, Cuiud, Cultraview, CVTE, Cwowdefu, CX, Cyrus, D-Link, D-Tech, Daewoo, DAMASCO, Danew, DangcapHD, Dany, Daria, DASS, Datalogic, Datamini, Datang, Datawind, Datsun, Dawlance, DbPhone, Dbtel, Dcode, DEALDIG, DEC, Dell, Denali, Denka, Denver, Desay, Devant, DeWalt, DEXP, DEYI, DF, DGTEC, DIALN, Dialog, Dicam, Digi, Digicel, DIGICOM, Digidragon, DIGIFORS, Digihome, Digiland, Digit, Digma, DIJITSU, DIKOM, DIMO, Dinalink, Dinax, DING DING, Diofox, DIORA, DISH, Disney, Ditecma, Diva, DiverMax, Divisat, DIXON, DL, DMOAO, DNS, DoCoMo, Doffler, Dolamee, Dom.ru, Doogee, Doopro, Doov, Dopod, Doppio, Dora, DORLAND, Doro, DPA, DRAGON, Dragon Touch, Dreamgate, Dream Multimedia, DreamStar, Droidlogic, Droxio, DSDevices, DSIC, Dtac, Dual, DUDU AUTO, Dune HD, DUNNS Mobile, DuoTV, Durabase, Durabook, Duubee, Dykemann, Dyon, E-Boda, E-Ceros, E-TACHI, E-tel, Eagle, EagleSoar, EAS Electric, Easypix, EBEN, EBEST, Echo Mobiles, ecom, ECON, ECOO, EcoStar, ECS, Edanix, Edenwood, EE, EFT, EGL, EGOTEK, Ehlel, Einstein, EKO, Eks Mobility, EKT, ELARI, ELCO, ELE-GATE, Elecson, Electroneum, ELECTRONIA, Elekta, Elektroland, Element, Elenberg, Elephone, Elevate, Elista, elit, Elong Mobile, Eltex, Ematic, Emporia, ENACOM, ENDURO, Energizer, Energy Sistem, Engel, ENIE, Enot, eNOVA, Entity, Envizen, Ephone, Epic, EPIK Learning, Epik One, Eplutus, Epson, Equator, Ergo, Ericsson, Erisson, Essential, Essentielb, eSTAR, ETOE, Eton, eTouch, Etuline, Eudora, Eurocase, EUROLUX, Eurostar, EUROVIEW, Evercoss, Everest, Everex, Everfine, Everis, Eversteel, Evertek, Evolio, Evolveo, Evoo, EVPAD, EvroMedia, evvoli, EWIS, EXCEED, Exertis, Exmart, ExMobile, EXO, Explay, Express LUCK, ExtraLink, Extrem, Eyemoo, EYU, Ezio, Ezze, F&U, F+, F2 Mobile, F150, Facebook, Facetel, Facime, Fairphone, Famoco, Famous, Fantec, Fanvace, FaRao Pro, Farassoo, FarEasTone, Fengxiang, Fenoti, FEONAL, Fero, FFF SmartLife, Figgers, FiGi, FiGO, FiiO, Filimo, FILIX, FinePower, FINIX, Finlux, FireFly Mobile, FISE, Fision, FITCO, FLEXY, flow, Fluo, Fly, FLYCAT, FLYCOAY, FMT, FNB, FNF, Fobem, Fondi, Fonos, FONTEL, FOODO, FORME, Formovie, Formuler, Forstar, Fortis, FortuneShip, FOSSiBOT, Fourel, Four Mobile, FOX, Foxconn, FoxxD, FPT, free, Freetel, FreeYond, FRESH, Frunsi, Fuego, FUJICOM, Fujitsu, Funai, Fusion5, Future Mobile Technology, Fxtec, G-Guard, G-PLUS, G-Tab, G-TiDE, G-Touch, G-Vill, Galactic, Galatec, Galaxy Innovations, Gamma, Garmin-Asus, Gateway, Gazal, Gazer, GDL, Geanee, Geant, Gear Mobile, GEEPAS, Gemini, General Mobile, Genesis, Genius Devices, GEOFOX, Geo Phone, Geotel, Geotex, GEOZON, Getnord, GFive, Gfone, Ghia, Ghong, Ghost, Gigabyte, Gigaset, Gini, Ginzzu, Gionee, GIRASOLE, GlobalSec, Globex, Globmall, GlocalMe, Glofiish, GLONYX, Glory Star, GLX, GN Electronics, GOCLEVER, Gocomma, GoGEN, GOLDBERG, GoldMaster, GoldSky, GoldStar, Gol Mobile, Goly, Gome, GoMobile, GOODTEL, Google, Goophone, Gooweel, GOtv, Gplus, Gradiente, Graetz, Grandin, Grape, Great Asia, Gree, Green Lion, Green Orange, Greentel, Gresso, Gretel, GroBerwert, Grundig, Grünberg, Gtel, GTMEDIA, GTX, Guophone, GVC Pro, H96, H133, HAAM, Hafury, Haier, Haipai, Haitech, Haixu, Hamlet, Hammer, Handheld, HannSpree, Hanseatic, Hanson, HAOQIN, HAOVM, Hardkernel, Harper, Hartens, Hasee, Hathway, HAVIT, HDC, HeadWolf, HEC, Heider, Heimat, Helio, Hemilton, HERO, HexaByte, Hezire, Hi, Hi-Level, Hiberg, HiBy, HIGH1ONE, Highscreen, HiGrace, HiHi, HiKing, HiMax, Hi Nova, HIPER, Hipstreet, Hiremco, Hisense, Hitachi, Hitech, HKC, HKPro, HMD, hoco, HOFER, Hoffmann, HOLLEBERG, Homatics, Hometech, Homez, HOMII, Homtom, Honeywell, HongTop, HONKUAHG, Honor, Hoobart, Hoozo, Hopeland, Horion, Horizon, Horizont, Hosin, HOTACK, Hotel TV Company, Hot Pepper, HOTREALS, Hotwav, How, HP, HTC, Huadoo, Huagan, Huavi, Huawei, Hugerock, Humanware, Humax, HUMElab, Hurricane, Huskee, Hyatta, Hykker, Hyrican, Hytera, Hyundai, Hyve, i-Cherry, I-INN, i-Joy, i-mate, i-mobile, I-Plus, iBall, iBerry, ibowin, iBrit, IconBIT, Icone Gold, iData, IDC, iDEA, iDino, iDroid, iFIT, iGet, iHome Life, iHunt, I KALL, Ikea, IKI Mobile, iKoMo, iKon, iKonia, IKU Mobile, iLA, iLepo, iLife, iMan, Imaq, iMars, iMI, IMO Mobile, Imose, Impex, Impression, iMuz, iNavi, INCAR, Inch, Inco, Indurama, iNew, Infiniton, InfinityPro, Infinix, InFocus, InfoKit, Infomir, InFone, Inhon, Inka, Inkti, InnJoo, Inno Hit, Innos, Innostream, Inoi, iNo Mobile, iNOVA, inovo, INQ, Insignia, INSYS, Intek, Intel, Intex, Invens, Inverto, Invin, iOcean, ioplee, IOTWE, iOutdoor, iPEGTOP, iPro, iQ&T, IQM, IRA, Irbis, iReplace, Iris, iRobot, iRola, iRulu, iSafe Mobile, iStar, iSWAG, IT, iTel, iTruck, IUNI, iVA, iView, iVooMi, ivvi, iWaylink, IXI, iXTech, iYou, iZotron, Jambo, JAY-Tech, Jckkcfug, Jeep, Jeka, Jesy, JFone, Jiake, Jiayu, Jide, Jinga, Jin Tu, Jio, Jivi, JKL, johnson, Jolla, Joy, JoySurf, JPay, JREN, Jumper, Juniper Systems, Just5, JUSYEA, JVC, JXD, K-Lite, K-Touch, Kaan, Kaicom, Kaiomy, Kalley, Kanji, KAP, Kapsys, Karbonn, Kata, KATV1, Kazam, Kazuna, KDDI, Kempler & Strauss, Kenbo, Kendo, Keneksi, KENSHI, KENWOOD, Kenxinda, KGTEL, Khadas, Kiano, kidiby, Kingbox, Kingelon, Kingstar, Kingsun, KINGZONE, Kinstone, Kiowa, Kivi, KIWI, Klipad, KMC, KN Mobile, Kobo, Kocaso, Kodak, Kogan, Komu, Konka, Konrow, Koobee, Koolnee, Kooper, KOPO, Korax, Koridy, Koslam, Kraft, KREZ, KRIP, KRONO, Krüger&Matz, KT-Tech, KTC, KUBO, KuGou, Kuliao, Kult, Kumai, Kurio, KVADRA, Kvant, Kydos, Kyocera, Kyowon, Kzen, KZG, L-Max, LAGENIO, LAIQ, Land Rover, Landvo, Lanin, Lanix, Lark, Laser, Laurus, Lava, LCT, Leader Phone, Leagoo, Leben, LeBest, Lectrus, Ledstar, LeEco, Leelbox, Leff, Legend, Leke, Lemco, LEMFO, Lemhoov, Lenco, LENIX, Lenovo, Leotec, Le Pan, Lephone, Lesia, Lexand, Lexibook, LG, Liberton, Lifemaxx, Lime, Lingbo, Lingwin, Linnex, Linsar, Linsay, Listo, LNMBBS, Loewe, LOGAN, Logic, Logic Instrument, Logicom, Logik, Logitech, LOKMAT, LongTV, LoopDL, Loview, Lovme, LT Mobile, Lumigon, Lumitel, Lumus, Luna, LUNNEN, LUO, Luxor, Lville, LW, LYF, LYOTECH LABS, M-Horse, M-KOPA, M-Tech, M.T.T., M3 Mobile, M4tel, MAC AUDIO, Macoox, Mafe, MAG, MAGCH, Magenta, Magicsee, Magnus, Majestic, Malata, Mango, Manhattan, Mann, Manta Multimedia, Mantra, Mara, Marshal, Mascom, Massgo, Masstel, Master-G, Mastertech, Matco Tools, Matrix, Maunfeld, Maxcom, Maxfone, Maximus, Maxtron, MAXVI, Maxwell, Maxwest, MAXX, Maze, Maze Speed, MBI, MBK, MBOX, McLaut, MDC Store, meanIT, Mecer, MECHEN, Mecool, Mediacom, Medion, MEEG, Megacable, MegaFon, MEGAMAX, MEGA VISION, Meitu, Meizu, Melrose, MeMobile, Memup, MEO, MESWAO, Meta, Metz, MEU, Microlab, MicroMax, Microsoft, Microtech, Mightier, MIIA, Minix, Mint, Mintt, Mio, Mione, mipo, MIRAL, Miray, Mitchell & Brown, Mito, Mitsubishi, Mitsui, MIVO, MIWANG, MIXC, MiXzo, MLLED, MLS, Mobell, Mobicel, MobiIoT, Mobiistar, Mobile Kingdom, Mobiola, Mobistel, MobiWire, Mobo, Mobvoi, Mode 1, Modecom, Mode Mobile, Mofut, Moondrop, MORTAL, Mosimosi, Motiv, Motorola, Motorola Solutions, Movic, MOVISUN, Movitel, Moxee, mPhone, Mpman, MSI, MStar, MTC, MTN, multibox, Multilaser, MultiPOS, MultiSmart, MULTYNET, MwalimuPlus, MYFON, MyGica, MygPad, Mymaga, MyMobile, MyPhone (PH), myPhone (PL), Myria, Myros, Mystery, MyTab, MyWigo, N-one, Nabi, NABO, Nadco, Nanho, Naomi Phone, NASCO, National, National PRO, Navcity, Navitech, Navitel, Navon, NavRoad, NEC, Necnot, Nedaphone, Neffos, NEI, NEKO, NEO, neoCore, Neolix, Neomi, Neon IQ, Neoregent, Nesons, NetBox, Netgear, Netmak, NETWIT, NeuImage, NeuTab, NEVIR, Newal, New Balance, New Bridge, Newgen, Newland, Newman, Newsday, NewsMy, Nexa, Nexar, NEXBOX, Nexian, NEXON, NEXT, Next & NextStar, Nextbit, NextBook, NextTab, NGM, NG Optics, NGpon, NIKAI, Nikon, NILAIT, NINETEC, NINETOLOGY, Nintendo, nJoy, NOA, Noain, Nobby, Nobel, Noblex, NOBUX, noDROPOUT, NOGA, Nokia, Nomi, Nomu, Noontec, Nordfrost, Nordmende, NORMANDE, NorthTech, NORTHWAY, Nos, Nothing, Nous, Novacom, Novex, Novey, NOVIS, NoviSea, NOVO, NTT West, NuAns, Nubia, NUU Mobile, NuVision, Nuvo, Nvidia, NYX Mobile, O+, O2, Oale, Oangcc, OASYS, Obabox, Ober, Obi, OCEAN, OCEANIC, Odotpad, Odys, Oilsky, OINOM, ok., Okapi, Okapia, Oking, OKSI, OKWU, Olax, Olkya, Ollee, ollz, OLTO, Olympia, OMIX, Onda, OneClick, OneLern, OnePlus, Onida, Onix, Onkyo, ONN, ONVO, ONYX BOOX, Ookee, Ooredoo, OpelMobile, Openbox, Ophone, OPPO, Opsson, Optoma, Orange, Orange Pi, Orava, Orbic, Orbita, Orbsmart, Ordissimo, Orion, OSCAL, OTT, OTTO, OUJIA, Ouki, Oukitel, OUYA, Overmax, Ovvi, Owwo, OX TAB, OYSIN, Oysters, Oyyu, OzoneHD, Pacific Research Alliance, Packard Bell, PAGRAER, Paladin, Palm, Panacom, Panasonic, Panavox, Pano, Panodic, Panoramic, Pantech, PAPYRE, Parrot Mobile, Partner Mobile, PCBOX, PCD, PCD Argentina, PC Smart, PEAQ, Pelitt, Pendoo, Penta, Pentagram, Perfeo, Phicomm, Philco, Philips, Phonemax, phoneOne, Pico, PINE64, Pioneer, Pioneer Computers, PiPO, PIRANHA, Pixela, Pixelphone, PIXPRO, Pixus, Planet Computers, Platoon, Play Now, PLDT, Ployer, Plum, PlusStyle, Pluzz, PocketBook, POCO, Point Mobile, Point of View, Polar, PolarLine, Polaroid, Polestar, PolyPad, Polytron, Pomp, Poppox, POPTEL, Porsche, Portfolio, Positivo, Positivo BGH, Powerway, PPDS, PPTV, PREMIER, Premier Star, Premio, Prestigio, PRIME, Primepad, Primux, PRISM+, Pritom, Prixton, ProCaster, PROFiLO, Proline, Prology, ProScan, PROSONIC, Protruly, ProVision, PULID, Punos, Purism, PVBox, Q-Box, Q-Touch, Q.Bell, QFX, Qilive, QIN, Qiuwoky, QLink, QMobile, Qnet Mobile, QTECH, Qtek, Quanta Computer, Quantum, Quart, Quatro, Qubo, Quechua, Quest, Quipus, Qumo, Qupi, Qware, QWATT, R-TV, R3Di, Rakuten, Ramos, Raspberry, Ravoz, Raylandz, Razer, RAZZ, RCA Tablets, RCT, Reach, Readboy, Realix, Realme, RED, RED-X, Redbean, redbeat, Redfox, RedLine, Redway, Reeder, REGAL, RelNAT, Relndoo, Remdun, Renova, RENSO, rephone, Retroid Pocket, Revo, Revomovil, Rhino, Ricoh, Rikomagic, RIM, Ringing Bells, Rinno, Ritmix, Ritzviva, Riviera, Rivo, Rizzen, ROADMAX, Roadrover, Roadstar, Roam Cat, ROCH, Rocket, Rokid, Rokit, Roku, Rombica, Romsat, Ross&Moor, Rover, Rover Computers, Royole, RoyQueen, RTK, RT Project, RugGear, RuggeTech, Ruggex, Ruio, Runbo, RunGee, Rupa, Ryte, S-Color, S-TELL, S2Tel, Saba, Safaricom, Sagem, Sagemcom, Saiet, SAILF, Salora, Sambox, Samsung, Samtech, Samtron, Sanei, Sankey, Sansui, Santin, SANY, Sanyo, Savio, Sber, SCHAUB LORENZ, Schneider, Schok, SCHONTECH, Scoole, Scosmos, Seatel, SEBBE, Seeken, SEEWO, SEG, Sega, SEHMAX, Selecline, Selenga, Selevision, Selfix, SEMP TCL, Sencor, Sencrom, Sendo, Senkatel, SENNA, Senseit, Senwa, SERVO, Seuic, Sewoo, SFR, SGIN, Shanling, Sharp, SHIFT, Shivaki, Shtrikh-M, Shuttle, Sico, Siemens, Siera, Sigma, Silelis, Silent Circle, Silva Schneider, Simbans, simfer, Simply, SINGER, Singtech, Siragon, Sirin Labs, Siswoo, SK Broadband, SKG, SKK Mobile, Sky, Skyline, SkyStream, Skytech, Skyworth, Smadl, Smailo, Smart, Smartab, SmartBook, SMARTEC, Smart Electronic, Smartex, Smartfren, Smartisan, Smart Kassel, Smart Tech, Smarty, Smooth Mobile, Smotreshka, SMT Telecom, SMUX, SNAMI, SobieTech, Soda, Softbank, Soho Style, Solas, SOLE, SOLO, Solone, SONASHI, Sonim, SONOS, Sony, Sony Ericsson, SOSH, SoulLink, Soundmax, SOWLY, Soyes, Spark NZ, Sparx, SPC, SPECTRA, Spectralink, Spectrum, Spice, Spider, SPURT, SQOOL, SSKY, Ssmart, Star-Light, Starlight, Starmobile, Star Track, Starway, Starway (SA), Starwind, STF Mobile, STG Telecom, Stilevs, STK, Stonex, Storex, StrawBerry, StreamSystem, STRONG, Stylo, SUAAT, Subor, Sugar, SULPICE TV, Sumvision, SUNGATE, Sun King, Sunmax, Sunmi, Sunny, Sunstech, SunVan, Sunvell, SUNWIND, SuperBOX, Super General, Supermax, SuperSonic, SuperTab, SuperTV, Supra, Supraim, Surfans, SURFTV, Surge, Suzuki, Sveon, Swipe, SWISSMOBILITY, Swisstone, Switel, SWOFY, Syco, SYH, Sylvania, Symphony, Syrox, System76, SZ TPS, T-Mobile, T96, TADAAM, TAG Tech, Taiga System, Takara, TALBERG, Talius, Tambo, Tanix, TAUBE, TB Touch, TCL, TCL SCBC, TD Systems, TD Tech, TeachTouch, Techmade, Technical, Technicolor, Technika, TechniSat, Technopc, TECHNOSAT, TechnoTrend, TechPad, Techstorm, Techwood, Teclast, Tecno Mobile, TecToy, TEENO, Teknosa, Tele2, Telefunken, Telego, Telenor, TELE System, Telezone, Telia, Telit, Telkom, Telly, Telma, TeloSystems, Telpo, Telstra, Temigereev, TENPLUS, Teracube, Terra, Tesco, Tesla, TETC, Tetratab, teXet, ThL, Thomson, Thuraya, TIANYU, Tibuta, Tigers, Time2, Timovi, TIMvision, Tinai, Tinmo, TIOK, TiPhone, Tivax, TiVo, TJC, TJD, TOKYO, Tolino, Tone, TOOGO, Tooky, Top-Tech, TopDevice, TOPDON, Topelotek, Top House, Toplux, TOPSHOWS, Topsion, Topway, Torex, TORNADO, Torque, TOSCIDO, Toshiba, Touchmate, Touch Plus, TOX, Transpeed, Trecfone, TrekStor, Trevi, TriaPlay, Tricolor, Trident, Trifone, Trimble, Trio, Tronsmart, True, True Slim, Tsinghua Tongfang, TTEC, TTfone, TTK-TV, TuCEL, TUCSON, Tunisie Telecom, Turbo, Turbo-X, TurboKids, TurboPad, Turkcell, Tuvio, TV+, TVC, TwinMOS, TWL Mobile, TWM, TWZ Corporation, TYD, Tymes, Türksat, Türk Telekom, U-Magic, U.S. Cellular, UD, UGINE, Ugoos, Uhans, Uhappy, Ulefone, UltraX Privacy, Umax, UMIDIGI, Umiio, Unblock Tech, Uniden, Unihertz, Unikalne Smartphones, Unimax, Uniqcell, Uniscope, Unistrong, Unitech, UNITED, United Group, UNIWA, Unknown, Unnecto, Unnion Technologies, UNNO, Unonu, UnoPhone, Unowhy, UOOGOU, Urovo, UTime, UTOK, UTStarcom, UZ Mobile, V-Gen, V-HOME, V-HOPE, v-mobile, V7, VAIO, VALE, VALEM, VALTECH, Valve Corporation, VANGUARD, Vankyo, VANWIN, Vargo, VASOUN, Vastking, VAVA, VC, VDVD, Vega, Veidoo, Vekta, Venso, Venstar, Venturer, VEON, Verico, Verizon, Vernee, Verssed, Versus, Vertex, Vertu, Verykool, Vesta, Vestel, VETAS, Vexia, VG, VGO TEL, ViBox, Victurio, VIDA, Videocon, Videoweb, Viendo, ViewSonic, VIIPOO, VIKUSHA, VILLAON, VIMOQ, Vinabox, Vinga, Vinsoc, Vios, Viper, Vipro, Virzo, Vision Technology, Vision Touch, Visitech, Visual Land, Vitelcom, Vitumi, Vityaz, Viumee, Vivax, VIVIBright, VIVIMAGE, Vivo, VIWA, Vizio, Vizmo, VK Mobile, VKworld, VNPT Technology, VOCAL, Vodacom, Vodafone, VOGA, VOIX, VOLIA, VOLKANO, Volla, Volt, Von, Vonino, Vontar, Vorago, Vorcom, Vorke, Vormor, Vortex, VORTEX (RO), Voto, VOX Electronics, Voxtel, Voyo, Vsmart, Vsun, VUCATIMES, Vue Micro, Vulcan, VVETIME, Völfen, W&O, WAF, Wainyok, waipu.tv, Walker, Waltham, Walton, Waltter, WANSA, WE, We. by Loewe., Webfleet, Web TV, WeChip, Wecool, Weelikeit, Weiimi, Weimei, WellcoM, WELLINGTON, Western Digital, Weston, Westpoint, Wexler, Whoop, Wieppo, Wigor, Wiko, WildRed, Wileyfox, Winds, Wink, Winmax, Winnovo, Winstar, Wintouch, Wiseasy, WIWA, WizarPos, Wizz, Wolder, Wolfgang, Wolki, WONDER, Wonu, Woo, Woxter, WOZIFAN, WS, X-AGE, X-BO, X-Mobile, X-TIGI, X-View, X.Vision, X88, X96, X96Q, XB, Xcell, XCOM, Xcruiser, XElectron, XGEM, XGIMI, Xgody, Xiaodu, Xiaolajiao, Xiaomi, Xion, Xolo, Xoro, XPPen, XREAL, Xshitou, Xsmart, Xtouch, Xtratech, Xwave, XY Auto, Yandex, Yarvik, YASIN, YELLYOUTH, YEPEN, Yes, Yestel, Yezz, YIKEMI, Yoka TV, Yooz, Yota, YOTOPT, Youin, Youwei, Ytone, Yu, Yuandao, YU Fly, YUHO, YUMKEM, YUNDOO, Yuno, YunSong, Yusun, Yutmart, Yxtel, Z-Kai, Zaith, ZALA, Zamolxe, Zatec, Zealot, Zeblaze, Zebra, Zeeker, Zeemi, Zen, Zenek, Zentality, Zfiner, ZH&K, Zhongyu Display, Zidoo, ZIFFLER, ZIFRO, Zigo, ZIK, Zimmer, Zinox, ZIOVO, Ziox, Zonda, Zonko, Zoom, ZoomSmart, Zopo, ZTE, Zuum, Zync, ZYQ, Zyrex, ZZB, öwn` |
| deviceModel | Device model Example values: `iPad, Nexus 5, Galaxy S5, Fire TV, etc.` |
| deviceType | Device type Example values: `desktop, smartphone, tablet, feature phone, console, tv, car browser, smart display, camera, portable media player, phablet, smart speaker, wearable, peripheral` |
| fingerprint | Fingerprint Note: This segment can only be used by an Admin user Example values: `1eceaa833348b187 - any 16 Hexadecimal chars ID, which can be fetched from API.getLastVisitsDetails` |
| visitLocalHour | Local time — hour (start of visit) Example values: `0, 1, 2, 3, ..., 20, 21, 22, 23` |
| operatingSystemName | Operating system Example values: `Windows, Linux, Mac, Android, iOS etc.` |
| operatingSystemCode | Operating system code Example values: `WIN, LIN, MAX, AND, IOS etc.` |
| operatingSystemVersion | Operating system version Example values: `XP, 7, 2.3, 5.1, ...` |
| profilable | Profilable Example values: `1 for profilable (eg cookies were used), 0 for not profilable (eg no cookies were used)` |
| resolution | Resolution Example values: `1280x1024, 800x600, etc.` |
| visitStartServerHour | Site time — hour (start of visit) Example values: `0, 1, 2, 3, ..., 20, 21, 22, 23` |
| visitServerHour | Site time — hour (time of last action) Example values: `0, 1, 2, 3, ..., 20, 21, 22, 23` |
| visitEndServerDate | Time in UTC — date (time of last action) Example values: `2018-12-31, 2018-03-20, ...` |
| visitEndServerDayOfMonth | Time in UTC — day of month (time of last action) Example values: `0, 1, 2, 3, ..., 29, 30, 31` |
| visitEndServerDayOfWeek | Time in UTC — day of week (time of last action) Example values: `1, 2, 3, 4, 5, 6, 7` |
| visitEndServerDayOfYear | Time in UTC — day of year (time of last action) Example values: `1, 2, 3, 4, ..., 365, 366` |
| visitStartServerMinute | Time in UTC — minute (start of visit) Example values: `0, 1, 2, 3, ..., 56, 57, 58, 59` |
| visitEndServerMinute | Time in UTC — minute (time of last action) Example values: `0, 1, 2, 3, ..., 56, 57, 58, 59` |
| visitEndServerMonth | Time in UTC — month (time of last action) Example values: `1, 2, 3, ..., 11, 12` |
| visitEndServerQuarter | Time in UTC — quarter (time of last action) Example values: `1, 2, 3, 4` |
| visitEndServerSecond | Time in UTC — second (Time of last action) Example values: `0, 1, 2, 3, ..., 58, 59` |
| visitEndServerWeekOfYear | Time in UTC — week of year (time of last action) Example values: `1, 2, 3, 4, ..., 51, 52, 53` |
| visitEndServerYear | Time in UTC — year (time of last action) Example values: `2016, 2017, 2018, ..., 9998, 9999` |
| userId | User ID Note: This segment can only be used by an Admin user Example values: `any non empty unique string identifying the user (such as an email address or a username).` |
| visitEcommerceStatus | Visit Ecommerce status at the end of the visit Example values: `none, ordered, abandonedCart, orderedThenAbandonedCart. For example, to select all visits that have made an Ecommerce order, the API request would contain "&segment=visitEcommerceStatus==ordered,visitEcommerceStatus==orderedThenAbandonedCart"` |
| visitId | Visit ID Note: This segment can only be used by an Admin user Example values: `Any positive integer` |
| visitConvertedGoalId | Visit converted a specific Goal Id Example values: `1, 2, 3, etc.` |
| visitConvertedGoalName | Visit converted a specific Goal Name Example values: `myGoal, myOtherGoal, etc.` |
| visitConverted | Visit converted at least one Goal Example values: `0, 1` |
| visitorType | Visit type Example values: `new, returning, returningCustomer. For example, to select all visitors who have returned to the website, including those who have bought something in their previous visits, the API request would contain "&segment=visitorType==returning,visitorType==returningCustomer"` |
| visitorId | Visitor ID Note: This segment can only be used by an Admin user Example values: `34c31e04394bdc63 - any 16 Hexadecimal chars ID, which can be fetched using the Tracking API function getVisitorId()` |
| **Visitor location** | |
| city | City Example values: `Sydney, Sao Paolo, Rome, etc.` |
| continentCode | Continent Example values: `eur, asi, amc, amn, ams, afr, ant, oce` |
| countryName | Country Example values: `Germany, France, Spain, ...` |
| countryCode | Country code Example values: `ISO 3166-1 alpha-2 country codes (de, us, fr, in, es, etc.)` |
| languageCode | Language Example values: `de, fr, en-gb, zh-cn, etc.` |
| latitude | Latitude Example values: `-33.578, 40.830, etc. You can select visitors within a lat/long range using &segment=lat>X;lat<Y;long>M;long<N.` |
| longitude | Longitude Example values: `-70.664, 14.326, etc.` |
| provider | Provider Example values: `comcast.net, proxad.net, etc.` |
| regionCode | Region Example values: `01, 02, OR, P8,… eg. region=BFC;country=fr` |
| **Custom Variables** | |
| customVariableName1 | Custom Variable name 1 (scope visit) |
| customVariableName2 | Custom Variable name 2 (scope visit) |
| customVariablePageName1 | Custom Variable name 1 (scope page) |
| customVariablePageValue1 | Custom Variable value 1 (scope page) |
| customVariableValue1 | Custom Variable value 1 (scope visit) |
| customVariableValue2 | Custom Variable value 2 (scope visit) |
| There are 5 custom variables available, so you can segment across any segment name and value range.  For example, `customVariableName1==Type;customVariableValue1==Customer`  Returns all visitors that have the Custom Variable "Type" set to "Customer".  Custom Variables of scope "page" can be queried separately. For example, to query the Custom Variable of scope "page",  stored in index 1, you would use the segment `customVariablePageName1==ArticleLanguage;customVariablePageValue1==FR` | |
| **Behaviour** | |
| actionType | Action Type Example values: `A type of action, such as: pageviews, contents, sitesearches, events, outlinks, downloads` |
| actionUrl | Action URL |
| siteSearchCategory | Category (Site Search) |
| outlinkUrl | Clicked Outlink |
| contentInteraction | Content Interaction Example values: `The type of interaction with the content. For instance "click" or "submit".` |
| contentName | Content Name Example values: `The name of a content block, for instance "Ad Sale"` |
| contentPiece | Content Piece Example values: `The actual content. For instance "ad.jpg" or "My text ad"` |
| contentTarget | Content Target Example values: `For instance the URL of a landing page: "http://landingpage.example.com"` |
| downloadUrl | Download URL |
| entryPageUrl | Entry Page URL |
| entryPageTitle | Entry Page title |
| exitPageTitle | Exit Page Title |
| exitPageUrl | Exit Page URL |
| siteSearchKeyword | Keyword (Site Search) |
| siteSearchCount | Keyword count (Site Search) |
| pageTitle | Page Title |
| pageUrl | Page URL |
| actionServerHour | Site time — hour |
| actionServerMinute | Time in UTC — minute Example values: `0, 1, 2, 3, ..., 56, 57, 58, 59` |
| **Events** | |
| eventAction | Event Action |
| eventCategory | Event Category |
| eventName | Event Name |
| eventUrl | Event URL Example values: `The URL must be URL encoded, for example: http%3A%2F%2Fexample.com%2Fpath%2Fpage%3Fquery` |
| **Acquisition** | |
| adClickId | Ad Click ID Example values: `A unique Click ID which was generated by an ad provider and used by visitors to reach your website.` |
| adProvider | Ad provider Example values: `An ad provider that refers visitors to your website with a specific Click ID.` |
| campaignContent | Campaign Content |
| campaignGroup | Campaign Group |
| campaignId | Campaign Id |
| campaignKeyword | Campaign Keyword |
| campaignMedium | Campaign Medium |
| campaignName | Campaign Name |
| campaignPlacement | Campaign Placement |
| campaignSource | Campaign Source |
| referrerType | Channel Type Example values: `direct, search, website, campaign, ai` |
| referrerKeyword | Keyword Example values: `Encoded%20Keyword, keyword` |
| referrerName | Referrer Name Example values: `twitter.com, www.facebook.com, Bing, Google, Yahoo, CampaignName` |
| referrerUrl | Referrer URL Example values: `http%3A%2F%2Fwww.example.org%2Freferer-page.htm` |
| **Ecommerce** | |
| productCategory | Product Category |
| productName | Product Name |
| productSku | Product SKU |
| productViewCategory | Viewed Product Category |
| productViewName | Viewed Product Name |
| productViewSku | Viewed Product SKU |
| **Funnels** | |
| funnels\_name | Visit participated in funnel Example values: `Accepts any funnel name of a currently activated funnel.` |
| **Forms** | |
| form\_name | Form Name Example values: `Accepts any form name of a currently running form.` |
| **Media** | |
| media\_impression\_type | Impressions of media type Example values: `Segment visitors who have viewed a page that had this media type on the page, needs to be either 'audio' or 'video'` |
| media\_player | Media player Example values: `Segment visitors who used a certain media player on your website` |
| media\_resource | Media resource URL Example values: `Accepts any media resource (audio / video URL)` |
| media\_title | Media title Example values: `Accepts any title of your media titles` |
| media\_plays\_type | Plays of media type Example values: `Segment visitors who have played a specific media type, needs to be either 'audio' or 'video'` |
| **A/B Tests** | |
| abtesting\_experiment | A/B test Example values: `Accepts any experiment name of a currently running or finished experiment.` |
| abtesting\_variation | Variation Example values: `Accepts any variation name of a currently running or finished experiment.` |
| abtesting\_entered | Visit entered A/B test Example values: `Eg "1", "0", "true", "false"` |
| **Crashes** | |
| crashCategory | Crash Category |
| crashHour | Crash Hour Example values: `0, 1, 2, 3, ..., 20, 21, 22, 23` |
| crashMessage | Crash Message |
| crashMinute | Crash Minute Example values: `0, 1, 2, 3, ..., 56, 57, 58, 59` |
| crashType | Crash Type Example values: `A crash type such as "TypeError" or "SyntaxError".` |
| crashSource | Source |

  
**Metrics**

|  |  |
| --- | --- |
| **Visitors** | |
| actions | Actions In Visit |
| daysSinceFirstVisit | Days since first visit |
| daysSinceLastEcommerceOrder | Days since last Ecommerce order |
| daysSinceLastVisit | Days since last visit |
| events | Events Example values: `To select all visits who triggered an Event, use: &segment=events>0` |
| visitLocalMinute | Local time — minute (start of visit) Example values: `0, 1, 2, 3, ..., 67, 57, 58, 59` |
| interactions | Number of Interactions Example values: `Any positive integer` |
| searches | Number of Internal Searches Example values: `To select all visits who used internal Site Search, use: &segment=searches>0` |
| visitCount | Number of visits |
| secondsSinceFirstVisit | Seconds since first visit |
| secondsSinceLastEcommerceOrder | Seconds since last Ecommerce order |
| secondsSinceLastVisit | Seconds since last visit |
| visitDuration | Visit Duration (in seconds) |
| visitIp | Visitor IP Note: This segment can only be used by an Admin user Example values: `13.54.122.1. Select IP ranges with notation: visitIp>13.54.122.0;visitIp<13.54.122.255` |
| **Events** | |
| eventValue | Event value |
| **Ecommerce** | |
| orderId | Order ID |
| revenueOrder | Order Revenue |
| productPrice | Product Price |
| revenueAbandonedCart | Revenue Left In Cart |
| productViewPrice | Viewed Product Price |
| **Funnels** | |
| funnels\_step\_position | Visit participated in funnel at step position Example values: `Accepts any step position (eg 1, 2, or 3). Should be used in conjunction with the funnel name segment as it might otherwise match multiple funnels` |
| **Forms** | |
| form\_converted | Form Converted Example values: `Accepts either 1 or 0.` |
| form\_num\_starts | Number of Form Starts Example values: `Accepts any number of form starts.` |
| form\_num\_submissions | Number of Form Submissions Example values: `Accepts any number of form submissions.` |
| form\_timespent | Spent Time on Form (in ms) Example values: `Any number in milliseconds, for example 1000.` |
| **Media** | |
| media\_length | Media length (in seconds) Example values: `Segment visitors who watched a video or listened to audio with a certain length. In seconds` |
| media\_spent\_time | Time spent playing media (in seconds) Example values: `Segment for how long a user watched a video or listened to an audio. In seconds` |
| media\_time\_initial\_play | Time to initial media play (in seconds) Example values: `Segment for how long it took for a user to start a video. In seconds` |

### Segment values must be URL encoded

The segment value (located after the segment operator) must be URL encoded before being sent to Matomo. For example to select all visitors that visited your website via a Search keyword containing `My brand`, you need to URL encode the value such as: `&segment=referrerKeyword!@My%20brand`.

### Segment where value is empty / is not empty

You may sometimes want to segment your analytics reports, for all visitors where a given dimension is empty (a value was not set). This is similar to the SQL "is null" clause. To do so, you can leave the value blank after the operator `==` in the segment string. For example, to select all visitors that did not have any referrer keyword set, you can write:
`referrerKeyword==`

You can combine it with other segments, for example to select all visitors that come from India and did not have any keyword set:
`referrerKeyword==;countryCode==in`

Similarly, you can segment your traffic to select visitors where a particular segment is not empty (a value was set). This is similar to the SQL "is not null" clause. To do so, you can leave the value blank after the operator `!=` in the segment string. For example to select all visitors that come from India and have a City set, you can write:
`city!=;countryCode==in`

*Note: Leaving an empty value is supported for the operators == and !=*
