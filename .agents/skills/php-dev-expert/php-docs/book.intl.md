# Funções de Internacionalização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.intl.php

---

# Funções de Internacionalização

# Introdução

A extensão de Internacionalização (referenciada a partir daqui como Intl) é um empacotador
para a biblioteca [» ICU](https://icu.unicode.org/),
e permite que programadores de PHP realizem várias operações dependentes de localidade, incluindo
mas não limitadas a formatação, transliteração, conversão de codificação, operações de calendário,
colação em conformidade com [» UCA](https://www.unicode.org/reports/tr10/), localização
de limites de texto e tarefas com identificadores de localidade, de fusos horários e de grafemas.

A extensão tende a seguir de perto as APIs da ICU, para que as pessoas com experiência
em ICU com C/C++ ou Java possam facilmente usar a API do PHP.
Além disso, dessa forma a documentação da ICU torna-se útil para se compreender várias
funções da ICU.

Intl consiste de vários módulos, cada um expondo a correspondente
API da ICU:

- Agrupador: fornece capacidade de comparação de strings com suporte
  ao ordenamento adequado, dependente da localidade.
- Formatador de Números: permite apresentar um número de acordo com o formato
  da localidade ou com um padrão ou conjunto de regras fornecido, e interpretar strings como
  números.
- Formatador de Mensagem: permite criar mensagens incorporando dados (como
  números ou datas) formatados de acordo com um padrão fornecido e com regras de
  localidade, e analisar mensagens extraindo dados delas. Pode lidar com plurais,
  números dependentes de localidade, moedas, condições e muito mais.
- Normalizador: fornece uma função para transformar texto em uma das formas de normalização
  Unicode, e fornece uma rotina para testar se uma string fornecida já
  está normalizada.
- Localidade: fornece interação com identificadores de localidade na forma de
  funções para obter sub-etiquetas a partir deles; analisar, compor e
  comparar (pesquisa e filtro) identificadores de localidade.
- Calendário: fornece uma classe que pode ser usada para operações de calendário dependentes de localidade
  e obtenção de várias informações como fuso horário para a localidade escolhida, primeiro dia da semana
  ou horário de verão.
- Fuso Horário: fornece um empacotador sobre o [» banco de dados "Olson"](https://www.iana.org/time-zones)
  que tem informação sobre todos os fusos horário ao redor do mundo.
- Formatador de Data: permite apresetar data e horário de acordo com o formato da
  localidade, ou um padrão ou um conjunto de regras fornecido, e converter strings como
  data e hora.
- Transliterador: permite obter representação latina de strings em várias línguas.

## Links

- [» Documentos ICU miscelâneos](https://icu.unicode.org/docs/)
- [» Guia do Usuário ICU](https://unicode-org.github.io/icu/userguide/)
- [» Algoritmo de Agrupamento Unicode](https://www.unicode.org/reports/tr10/)

- [Instalação/Configuração](intl.setup.md)
  - [Dependências](intl.requirements.md)
  - [Instalação](intl.installation.md)
  - [Configurações de Execução](intl.configuration.md)
- [Constantes predefinidas](intl.constants.md)
- [Examples](intl.examples.md)
  - [Uso básico desta extensão](intl.examples.basic.md)
- [Collator](class.collator.md) — A classe Collator
  - [Collator::asort](collator.asort.md) — Ordena array mantendo associação de índice
  - [Collator::compare](collator.compare.md) — Compara duas strings Unicode
  - [Collator::\_\_construct](collator.construct.md) — Cria um agrupador (Collator)
  - [Collator::create](collator.create.md) — Cria um agrupador
  - [Collator::getAttribute](collator.getattribute.md) — Obtém o valor de atributo de um agrupador
  - [Collator::getErrorCode](collator.geterrorcode.md) — Obtém o último código de erro do agrupador
  - [Collator::getErrorMessage](collator.geterrormessage.md) — Obtém o texto para o último código de erro do agrupador
  - [Collator::getLocale](collator.getlocale.md) — Obtém o nome da localidade do agrupador
  - [Collator::getSortKey](collator.getsortkey.md) — Obtém a chave de ordenação de uma string
  - [Collator::getStrength](collator.getstrength.md) — Obtém a força atual de agrupamento
  - [Collator::setAttribute](collator.setattribute.md) — Define atributo do agrupador
  - [Collator::setStrength](collator.setstrength.md) — Define a força do agrupador
  - [Collator::sort](collator.sort.md) — Ordena um array usando o agrupador especificado
  - [Collator::sortWithSortKeys](collator.sortwithsortkeys.md) — Ordena um array usando agrupador e chaves de ordenação especificados
- [NumberFormatter](class.numberformatter.md) — A classe NumberFormatter
  - [NumberFormatter::create](numberformatter.create.md) — Cria um formatador de número
  - [NumberFormatter::format](numberformatter.format.md) — Formata um número
  - [NumberFormatter::formatCurrency](numberformatter.formatcurrency.md) — Formata um valor de moeda
  - [NumberFormatter::getAttribute](numberformatter.getattribute.md) — Obtém um atributo
  - [NumberFormatter::getErrorCode](numberformatter.geterrorcode.md) — Obtém o último código de erro do formatador
  - [NumberFormatter::getErrorMessage](numberformatter.geterrormessage.md) — Obtém a última mensagem de erro do formatador
  - [NumberFormatter::getLocale](numberformatter.getlocale.md) — Obtém a localidade do formatador
  - [NumberFormatter::getPattern](numberformatter.getpattern.md) — Obtém padrão do formatador
  - [NumberFormatter::getSymbol](numberformatter.getsymbol.md) — Obtém um valor de símbolo
  - [NumberFormatter::getTextAttribute](numberformatter.gettextattribute.md) — Obtém um atributo de texto
  - [NumberFormatter::parse](numberformatter.parse.md) — Interpreta um número
  - [NumberFormatter::parseCurrency](numberformatter.parsecurrency.md) — Interpreta um valor monetário
  - [NumberFormatter::setAttribute](numberformatter.setattribute.md) — Define um atributo
  - [NumberFormatter::setPattern](numberformatter.setpattern.md) — Define o padrão do formatador
  - [NumberFormatter::setSymbol](numberformatter.setsymbol.md) — Define um valor de símbolo
  - [NumberFormatter::setTextAttribute](numberformatter.settextattribute.md) — Define um atributo de texto
- [Locale](class.locale.md) — A classe Locale
  - [Locale::acceptFromHttp](locale.acceptfromhttp.md) — Tenta descobrir a melhor localidade disponível baseado no cabeçalho HTTP "Accept-Language"
  - [Locale::addLikelySubtags](locale.addlikelysubtags.md) — Add likely subtags to a locale
  - [Locale::canonicalize](locale.canonicalize.md) — Canoniza a string de localidade
  - [Locale::composeLocale](locale.composelocale.md) — Retorna ID de localidade corretamente ordenado e delimitado
  - [Locale::filterMatches](locale.filtermatches.md) — Verifica se um filtro de etiqueta de língua corresponde à localidade
  - [Locale::getAllVariants](locale.getallvariants.md) — Obtém as variantes para a localidade
  - [Locale::getDefault](locale.getdefault.md) — Obtém o valor de localidade padrão da variável global de INTL 'default\_locale'
  - [Locale::getDisplayLanguage](locale.getdisplaylanguage.md) — Retorna um nome apropriadamente localizado para a língua da localidade
  - [Locale::getDisplayName](locale.getdisplayname.md) — Retorna um nome apropriadamente localizado para a localidade
  - [Locale::getDisplayRegion](locale.getdisplayregion.md) — Retorna um nome apropriadamente localizado para a região da localidade
  - [Locale::getDisplayScript](locale.getdisplayscript.md) — Retorna um nome apropriadamente localizado para o tipo de escrita da localidade
  - [Locale::getDisplayVariant](locale.getdisplayvariant.md) — Retorna um nome apropriadamente localizado para as variantes da localidade
  - [Locale::getKeywords](locale.getkeywords.md) — Obtém as palavras-chave para a localidade
  - [Locale::getPrimaryLanguage](locale.getprimarylanguage.md) — Obtém a língua primária para a localidade
  - [Locale::getRegion](locale.getregion.md) — Obtém a região para a localidade
  - [Locale::getScript](locale.getscript.md) — Obtém o tipo de escrita para a localidade
  - [Locale::isRightToLeft](locale.isrighttoleft.md) — Verifica se uma localidade usa um sistema de escrita da direita para a esquerda
  - [Locale::lookup](locale.lookup.md) — Pesquisa a lista de etiquetas de língua pela melhor correspondência à língua
  - [Locale::minimizeSubtags](locale.minimizesubtags.md) — Remove likely subtags from a locale
  - [Locale::parseLocale](locale.parselocale.md) — Retorna um array de chaves-valores de elementos de sub-etiquetas de ID de localidade
  - [Locale::setDefault](locale.setdefault.md) — Define a localidade padrão em tempo de execução
- [Normalizer](class.normalizer.md) — A classe Normalizer
  - [Normalizer::getRawDecomposition](normalizer.getrawdecomposition.md) — Obtém a propriedade Decomposition\_Mapping para o ponto de código UTF-8 fornecido
  - [Normalizer::isNormalized](normalizer.isnormalized.md) — Verifica se a string fornecida já está normalizada
    na forma especificada.
  - [Normalizer::normalize](normalizer.normalize.md) — Normaliza a entrada fornecida e retorna a string normalizada
- [MessageFormatter](class.messageformatter.md) — A classe MessageFormatter
  - [MessageFormatter::create](messageformatter.create.md) — Constrói um novo formatador de mensagem
  - [MessageFormatter::format](messageformatter.format.md) — Formata a mensagem
  - [MessageFormatter::formatMessage](messageformatter.formatmessage.md) — Formata uma mensagem rapidamente
  - [MessageFormatter::getErrorCode](messageformatter.geterrorcode.md) — Obtém o código de erro da última operação
  - [MessageFormatter::getErrorMessage](messageformatter.geterrormessage.md) — Obtém o texto do erro da última operação
  - [MessageFormatter::getLocale](messageformatter.getlocale.md) — Obtém a localidade para a qual o formatador foi criado
  - [MessageFormatter::getPattern](messageformatter.getpattern.md) — Obtém o modelo usado pelo formatador
  - [MessageFormatter::parse](messageformatter.parse.md) — Interpreta a string de entrada de acordo com o modelo
  - [MessageFormatter::parseMessage](messageformatter.parsemessage.md) — Interpreta rapidamente a string de entrada
  - [MessageFormatter::setPattern](messageformatter.setpattern.md) — Define o modelo usado pelo formatador
- [IntlCalendar](class.intlcalendar.md) — A classe IntlCalendar
  - [IntlCalendar::add](intlcalendar.add.md) — Adiciona uma quantidade de tempo (com sinal) a um campo
  - [IntlCalendar::after](intlcalendar.after.md) — Informa se o instante de tempo deste objeto é posterior ao instante do objeto passado
  - [IntlCalendar::before](intlcalendar.before.md) — Informa se o instante de tempo deste objeto é anterior ao instante do objeto passado
  - [IntlCalendar::clear](intlcalendar.clear.md) — Limpa um campo ou todos os campos
  - [IntlCalendar::\_\_construct](intlcalendar.construct.md) — Construtor privado para não permitir instanciação
  - [IntlCalendar::createInstance](intlcalendar.createinstance.md) — Cria um novo IntlCalendar
  - [IntlCalendar::equals](intlcalendar.equals.md) — Compara horários de dois objetos IntlCalendar para igualidade
  - [IntlCalendar::fieldDifference](intlcalendar.fielddifference.md) — Calcula a diferença entre o horário fornecido e o horário deste objeto
  - [IntlCalendar::fromDateTime](intlcalendar.fromdatetime.md) — Cria um IntlCalendar a partir de um objeto DateTime ou uma string
  - [IntlCalendar::get](intlcalendar.get.md) — Obtém o valor de um campo
  - [IntlCalendar::getActualMaximum](intlcalendar.getactualmaximum.md) — O valor máximo para um campo, considerando o horário atual do objeto
  - [IntlCalendar::getActualMinimum](intlcalendar.getactualminimum.md) — O valor mínimo para um campo, considerando o horário atual do objeto
  - [IntlCalendar::getAvailableLocales](intlcalendar.getavailablelocales.md) — Obtém um array de localidades para as quais existem dados
  - [IntlCalendar::getDayOfWeekType](intlcalendar.getdayofweektype.md) — Informa se o dia é dia de semana, de final de semana ou de transição entre os dois
  - [IntlCalendar::getErrorCode](intlcalendar.geterrorcode.md) — Obtém o último código de erro no objeto
  - [IntlCalendar::getErrorMessage](intlcalendar.geterrormessage.md) — Obtém a última mensagem de erro no objeto
  - [IntlCalendar::getFirstDayOfWeek](intlcalendar.getfirstdayofweek.md) — Obtém o primeiro dia da semana para a localidade do calendário
  - [IntlCalendar::getGreatestMinimum](intlcalendar.getgreatestminimum.md) — Obtém o maior valor mínimo local para um campo
  - [IntlCalendar::getKeywordValuesForLocale](intlcalendar.getkeywordvaluesforlocale.md) — Obtém um conjunto de valores de palavras-chaves de localidade
  - [IntlCalendar::getLeastMaximum](intlcalendar.getleastmaximum.md) — Obtém o menor máximo local para um campo
  - [IntlCalendar::getLocale](intlcalendar.getlocale.md) — Obtém a localidade associada com o objeto
  - [IntlCalendar::getMaximum](intlcalendar.getmaximum.md) — Obtém o valor máximo global para um campo
  - [IntlCalendar::getMinimalDaysInFirstWeek](intlcalendar.getminimaldaysinfirstweek.md) — Obtém o número mínimo de dias que a primeira semana do ano ou do mês pode ter
  - [IntlCalendar::getMinimum](intlcalendar.getminimum.md) — Obtém o mínimo global para um campo
  - [IntlCalendar::getNow](intlcalendar.getnow.md) — Obtém um número representando o horário atual
  - [IntlCalendar::getRepeatedWallTimeOption](intlcalendar.getrepeatedwalltimeoption.md) — Obtém o comportamento ao lidar com o horário de relógio repetido
  - [IntlCalendar::getSkippedWallTimeOption](intlcalendar.getskippedwalltimeoption.md) — Obtém o comportamento para o horário de relógio saltado
  - [IntlCalendar::getTime](intlcalendar.gettime.md) — Obtém o horário atualmente representado pelo objeto
  - [IntlCalendar::getTimeZone](intlcalendar.gettimezone.md) — Obtém o fuso horário do objeto
  - [IntlCalendar::getType](intlcalendar.gettype.md) — Obtém o tipo de calendário
  - [IntlCalendar::getWeekendTransition](intlcalendar.getweekendtransition.md) — Obtém o horário do dia no qual o final de semana inicia ou termina
  - [IntlCalendar::inDaylightTime](intlcalendar.indaylighttime.md) — Informa se o horário do objeto está no horário de verão
  - [IntlCalendar::isEquivalentTo](intlcalendar.isequivalentto.md) — Verifica se outro calendário é igual exceto pelo horário
  - [IntlCalendar::isLenient](intlcalendar.islenient.md) — Verifica se a interpretação de data/horário está no modo leniente
  - [IntlCalendar::isSet](intlcalendar.isset.md) — Verifica se um campo está definido
  - [IntlCalendar::isWeekend](intlcalendar.isweekend.md) — Verifica se uma data e um horário estão no final de semana
  - [IntlCalendar::roll](intlcalendar.roll.md) — Adiciona valor ao campo sem transferir para campos mais significativos
  - [IntlCalendar::set](intlcalendar.set.md) — Define um campo de horário ou vários campos comuns de uma vez
  - [IntlCalendar::setDate](intlcalendar.setdate.md) — Define campos de data
  - [IntlCalendar::setDateTime](intlcalendar.setdatetime.md) — Define campos de data e horário
  - [IntlCalendar::setFirstDayOfWeek](intlcalendar.setfirstdayofweek.md) — Define o dia da semana no qual a semana inicia
  - [IntlCalendar::setLenient](intlcalendar.setlenient.md) — Define se a interpretação de data/horário deve ser leniente
  - [IntlCalendar::setMinimalDaysInFirstWeek](intlcalendar.setminimaldaysinfirstweek.md) — Define o número mínimo de dias que a primeira semana do ano ou do mês pode ter
  - [IntlCalendar::setRepeatedWallTimeOption](intlcalendar.setrepeatedwalltimeoption.md) — Define o comportamento ao lidar com horário de relógio repetido ao sair do horário de verão
  - [IntlCalendar::setSkippedWallTimeOption](intlcalendar.setskippedwalltimeoption.md) — Define o comportamento ao lidar com horário de relógio saltado ao entrar no horário de verão
  - [IntlCalendar::setTime](intlcalendar.settime.md) — Define o horário do calendário em milissegundos desde a época de referência
  - [IntlCalendar::setTimeZone](intlcalendar.settimezone.md) — Define o fuso horário usado por este calendário
  - [IntlCalendar::toDateTime](intlcalendar.todatetime.md) — Converte um objeto IntlCalendar para um DateTime
- [IntlGregorianCalendar](class.intlgregoriancalendar.md) — A classe IntlGregorianCalendar
  - [IntlGregorianCalendar::\_\_construct](intlgregoriancalendar.construct.md) — Cria um objeto de calendário gregoriano
  - [IntlGregorianCalendar::createFromDate](intlgregoriancalendar.createfromdate.md) — Cria uma nova instância de IntlGregorianCalendar a partir de uma data
  - [IntlGregorianCalendar::createFromDateTime](intlgregoriancalendar.createfromdatetime.md) — Cria uma instância de IntlGregorianCalendar a partir de data e horário
  - [IntlGregorianCalendar::getGregorianChange](intlgregoriancalendar.getgregorianchange.md) — Obtém a data de mudança do calendário gregoriano
  - [IntlGregorianCalendar::isLeapYear](intlgregoriancalendar.isleapyear.md) — Determina se o ano é bissexto
  - [IntlGregorianCalendar::setGregorianChange](intlgregoriancalendar.setgregorianchange.md) — Define a data de mudança do calendário gregoriano
- [IntlTimeZone](class.intltimezone.md) — A classe IntlTimeZone
  - [IntlTimeZone::\_\_construct](intltimezone.construct.md) — Construtor privado para não permitir instanciação direta
  - [IntlTimeZone::countEquivalentIDs](intltimezone.countequivalentids.md) — Obtém o número de IDs no grupo de equivalÇencia que inclui o ID informado
  - [IntlTimeZone::createDefault](intltimezone.createdefault.md) — Cria uma nova cópia do fuso horário padrão para este host
  - [IntlTimeZone::createEnumeration](intltimezone.createenumeration.md) — Obtém uma enumeração a partir de IDs de fuso horário associados com o
    país informado ou com o deslocamento UTC
  - [IntlTimeZone::createTimeZone](intltimezone.createtimezone.md) — Cria um objeto IntlTimeZone para o ID informado
  - [IntlTimeZone::createTimeZoneIDEnumeration](intltimezone.createtimezoneidenumeration.md) — Obtém uma enumeração a partir de IDs de fuso horário do sistema com as condições de filtro informadas
  - [IntlTimeZone::fromDateTimeZone](intltimezone.fromdatetimezone.md) — Cria um objeto IntlTimeZone a partir de um DateTimeZone
  - [IntlTimeZone::getCanonicalID](intltimezone.getcanonicalid.md) — Obtém o ID do fuso horário de sistema canônico ou o cutomizado normalizado para o ID de fuso horário informado
  - [IntlTimeZone::getDisplayName](intltimezone.getdisplayname.md) — Obtém o nome do fuso horário adequado para apresentação ao usuário
  - [IntlTimeZone::getDSTSavings](intltimezone.getdstsavings.md) — Obtém a quantidade de tempo a ser adicionado ao horário local padrão para obter o horário local real de relógio
  - [IntlTimeZone::getEquivalentID](intltimezone.getequivalentid.md) — Obtém um ID no grupo de equivalência que inclui o ID informado
  - [IntlTimeZone::getErrorCode](intltimezone.geterrorcode.md) — Obtém o último código de erro no objeto
  - [IntlTimeZone::getErrorMessage](intltimezone.geterrormessage.md) — Obtém a última mensagem de erro no objeto
  - [IntlTimeZone::getGMT](intltimezone.getgmt.md) — Cria um fuso horário GMT (UTC)
  - [IntlTimeZone::getIanaID](intltimezone.getianaid.md) — Traduz um identificador de fuso horário para seu equivalente IANA
  - [IntlTimeZone::getID](intltimezone.getid.md) — Obtém o ID do fuso horário
  - [IntlTimeZone::getIDForWindowsID](intltimezone.getidforwindowsid.md) — Traduz um fuso horário do Windows para um fuso horário de sistema
  - [IntlTimeZone::getOffset](intltimezone.getoffset.md) — Obtém o deslocamento UTC padrão e o deslocamento com horário de verão para um determinado timestamp Unix
  - [IntlTimeZone::getRawOffset](intltimezone.getrawoffset.md) — Obtém o deslocamento UTC puro (antes de considerar horário de verão)
  - [IntlTimeZone::getRegion](intltimezone.getregion.md) — Obtém o código da região associada com o ID de fuso horário de sistema informado
  - [IntlTimeZone::getTZDataVersion](intltimezone.gettzdataversion.md) — Obtém a versão de dados de fuso horário atualmente usados pela ICU
  - [IntlTimeZone::getUnknown](intltimezone.getunknown.md) — Obtém o fuso horário "desconhecido"
  - [IntlTimeZone::getWindowsID](intltimezone.getwindowsid.md) — Traduz um fuso horário de sistema em um fuso horário do Windows
  - [IntlTimeZone::hasSameRules](intltimezone.hassamerules.md) — Verifica se um fuso horário tem as mesmas regras e deslocamentos de um outro
  - [IntlTimeZone::toDateTimeZone](intltimezone.todatetimezone.md) — Converte em um objeto DateTimeZone
  - [IntlTimeZone::useDaylightTime](intltimezone.usedaylighttime.md) — Verifica se o fuso horário usa horário de verão
- [IntlDateFormatter](class.intldateformatter.md) — A classe IntlDateFormatter
  - [IntlDateFormatter::create](intldateformatter.create.md) — Cria um formatador de data
  - [IntlDateFormatter::format](intldateformatter.format.md) — Formata data/horário como uma string
  - [IntlDateFormatter::formatObject](intldateformatter.formatobject.md) — Formata um objeto
  - [IntlDateFormatter::getCalendar](intldateformatter.getcalendar.md) — Obtém o tipo de calendário usado para o IntlDateFormatter
  - [IntlDateFormatter::getDateType](intldateformatter.getdatetype.md) — Obtém o tipo de data usado para o IntlDateFormatter
  - [IntlDateFormatter::getErrorCode](intldateformatter.geterrorcode.md) — Obtém o código de erro da última operação
  - [IntlDateFormatter::getErrorMessage](intldateformatter.geterrormessage.md) — Obtém a mensagem de erro da última operação
  - [IntlDateFormatter::getLocale](intldateformatter.getlocale.md) — Obtém a localidade usada pelo formatador
  - [IntlDateFormatter::getPattern](intldateformatter.getpattern.md) — Obtém o modelo usado para o IntlDateFormatter
  - [IntlDateFormatter::getTimeType](intldateformatter.gettimetype.md) — Obtém o tipo de horário usado para o IntlDateFormatter
  - [IntlDateFormatter::getTimeZoneId](intldateformatter.gettimezoneid.md) — Obtém o identificador de fuso horário usado para o IntlDateFormatter
  - [IntlDateFormatter::getCalendarObject](intldateformatter.getcalendarobject.md) — Obtém uma cópia do objeto de calendário do formatador
  - [IntlDateFormatter::getTimeZone](intldateformatter.gettimezone.md) — Obtem o fuso horário do formatador
  - [IntlDateFormatter::isLenient](intldateformatter.islenient.md) — Obtém a leniência usada para o IntlDateFormatter
  - [IntlDateFormatter::localtime](intldateformatter.localtime.md) — Interpreta uma string para um valor de horário baseado em campos
  - [IntlDateFormatter::parse](intldateformatter.parse.md) — Interpreta uma string para uma valor de timestamp
  - [IntlDateFormatter::parseToCalendar](intldateformatter.parsetocalendar.md) — Analisa uma string e a converte em um timestamp, atualizando um calendário aberto
  - [IntlDateFormatter::setCalendar](intldateformatter.setcalendar.md) — Define o tipo de calendário usado pelo formatador
  - [IntlDateFormatter::setLenient](intldateformatter.setlenient.md) — Define a leniência do interpretador
  - [IntlDateFormatter::setPattern](intldateformatter.setpattern.md) — Define o modelo usado para o IntlDateFormatter
  - [IntlDateFormatter::setTimeZone](intldateformatter.settimezone.md) — Define o fuso horário do formatador
- [ResourceBundle](class.resourcebundle.md) — A classe ResourceBundle
  - [ResourceBundle::count](resourcebundle.count.md) — Obtém o número de elementos no pacote
  - [ResourceBundle::create](resourcebundle.create.md) — Cria um pacote de recursos
  - [ResourceBundle::get](resourcebundle.get.md) — Obtém os dados do pacote
  - [ResourceBundle::getErrorCode](resourcebundle.geterrorcode.md) — Obtém o código do último erro gerado pelo pacote.
  - [ResourceBundle::getErrorMessage](resourcebundle.geterrormessage.md) — Obtém a última mensagem de erro gerada pelo pacote
  - [ResourceBundle::getLocales](resourcebundle.locales.md) — Obtém as localidades suportadas
- [Spoofchecker](class.spoofchecker.md) — A classe Spoofchecker
  - [Spoofchecker::areConfusable](spoofchecker.areconfusable.md) — Verifica se as strings fornecidas podem ser confundidas
  - [Spoofchecker::\_\_construct](spoofchecker.construct.md) — Construtor
  - [Spoofchecker::isSuspicious](spoofchecker.issuspicious.md) — Verifica se um texto fornecido contém algum caractere suspeito
  - [Spoofchecker::setAllowedChars](spoofchecker.setallowedchars.md) — Define o conjunto de caracteres permitidos ao executar verificações
  - [Spoofchecker::setAllowedLocales](spoofchecker.setallowedlocales.md) — Localidades a usar nas verificações executadas
  - [Spoofchecker::setChecks](spoofchecker.setchecks.md) — Define as verificações que serão executadas
  - [Spoofchecker::setRestrictionLevel](spoofchecker.setrestrictionlevel.md) — Define o nível de restrição
- [Transliterator](class.transliterator.md) — A classe Transliterator
  - [Transliterator::\_\_construct](transliterator.construct.md) — Construtor privado para proibir instanciação
  - [Transliterator::create](transliterator.create.md) — Cria um transliterador
  - [Transliterator::createFromRules](transliterator.createfromrules.md) — Cria um transliterador a partir de regras
  - [Transliterator::createInverse](transliterator.createinverse.md) — Cria um transliterador inverso
  - [Transliterator::getErrorCode](transliterator.geterrorcode.md) — Obtém o último código de erro
  - [Transliterator::getErrorMessage](transliterator.geterrormessage.md) — Obtém a última mensagem de erro
  - [Transliterator::listIDs](transliterator.listids.md) — Obtém IDs de transliteradores
  - [Transliterator::transliterate](transliterator.transliterate.md) — Translitera uma string
- [IntlBreakIterator](class.intlbreakiterator.md) — A classe IntlBreakIterator
  - [IntlBreakIterator::\_\_construct](intlbreakiterator.construct.md) — Construtor privado para não permitir instanciação
  - [IntlBreakIterator::createCharacterInstance](intlbreakiterator.createcharacterinstance.md) — Cria um iterador de quebra para limites de sequências de combinação de caracteres
  - [IntlBreakIterator::createCodePointInstance](intlbreakiterator.createcodepointinstance.md) — Cria um iterador de quebra para limites de pontos de código
  - [IntlBreakIterator::createLineInstance](intlbreakiterator.createlineinstance.md) — Cria um iterador de quebra para quebras de linha logicamente possíveis
  - [IntlBreakIterator::createSentenceInstance](intlbreakiterator.createsentenceinstance.md) — Cria um iterador de quebra para separação de sentenças
  - [IntlBreakIterator::createTitleInstance](intlbreakiterator.createtitleinstance.md) — Cria um iterador para quebras de letras de título
  - [IntlBreakIterator::createWordInstance](intlbreakiterator.createwordinstance.md) — Cria um iterador de quebra para separação de palavras
  - [IntlBreakIterator::current](intlbreakiterator.current.md) — Obtém o índice da posição atual
  - [IntlBreakIterator::first](intlbreakiterator.first.md) — Define a posição para o primeiro caractere no texto
  - [IntlBreakIterator::following](intlbreakiterator.following.md) — Avança o iterador para o primeiro limite após o deslocamento especificado
  - [IntlBreakIterator::getErrorCode](intlbreakiterator.geterrorcode.md) — Obtém o último código de erro no objeto
  - [IntlBreakIterator::getErrorMessage](intlbreakiterator.geterrormessage.md) — Obtém a última mensagem de erro no objeto
  - [IntlBreakIterator::getLocale](intlbreakiterator.getlocale.md) — Obtém a localidade associada com o objeto
  - [IntlBreakIterator::getPartsIterator](intlbreakiterator.getpartsiterator.md) — Cria um iterador para navegar por fragmentos entre limites
  - [IntlBreakIterator::getText](intlbreakiterator.gettext.md) — Obtém o texto sendo percorrido
  - [IntlBreakIterator::isBoundary](intlbreakiterator.isboundary.md) — Indica se uma posição é um posição de limite
  - [IntlBreakIterator::last](intlbreakiterator.last.md) — Define a posição do iterador para um índice além do último caractere
  - [IntlBreakIterator::next](intlbreakiterator.next.md) — Avança o iterador para o próximo limite
  - [IntlBreakIterator::preceding](intlbreakiterator.preceding.md) — Define a posição do iterador para o primeiro limite depois de um deslocamento
  - [IntlBreakIterator::previous](intlbreakiterator.previous.md) — Define a posição do iterador para o limite imediatamente anterior ao atual
  - [IntlBreakIterator::setText](intlbreakiterator.settext.md) — Define o texto a ser percorrido
- [IntlRuleBasedBreakIterator](class.intlrulebasedbreakiterator.md) — A classe IntlRuleBasedBreakIterator
  - [IntlRuleBasedBreakIterator::\_\_construct](intlrulebasedbreakiterator.construct.md) — Cria um iterador a partir de um conjunto de regras
  - [IntlRuleBasedBreakIterator::getBinaryRules](intlrulebasedbreakiterator.getbinaryrules.md) — Obtém a forma binária de regras compiladas
  - [IntlRuleBasedBreakIterator::getRules](intlrulebasedbreakiterator.getrules.md) — Obtém o conjunto de regras usado para criar este objeto
  - [IntlRuleBasedBreakIterator::getRuleStatus](intlrulebasedbreakiterator.getrulestatus.md) — Obtém o maior valor de status a partir de regras de quebras que determinaram a posição de quebra atual
  - [IntlRuleBasedBreakIterator::getRuleStatusVec](intlrulebasedbreakiterator.getrulestatusvec.md) — Obtém os valores de status das regras de quebra que determinaram a posição de quebra atual
- [IntlCodePointBreakIterator](class.intlcodepointbreakiterator.md) — A classe IntlCodePointBreakIterator
  - [IntlCodePointBreakIterator::getLastCodePoint](intlcodepointbreakiterator.getlastcodepoint.md) — Obtém o último code point passado após avançar ou retroceder o iterador
- [IntlDatePatternGenerator](class.intldatepatterngenerator.md) — A classe IntlDatePatternGenerator
  - [IntlDatePatternGenerator::create](intldatepatterngenerator.create.md) — Cria uma nova instância de IntlDatePatternGenerator
  - [IntlDatePatternGenerator::getBestPattern](intldatepatterngenerator.getbestpattern.md) — Determina o formato de data/horário mais adequado
- [IntlListFormatter](class.intllistformatter.md) — A classe IntlListFormatter
  - [IntlListFormatter::\_\_construct](intllistformatter.construct.md) — Cria uma instância de IntlListFormatter
  - [IntlListFormatter::format](intllistformatter.format.md) — Formata uma lista de itens
- [IntlPartsIterator](class.intlpartsiterator.md) — A classe IntlPartsIterator
  - [IntlPartsIterator::getBreakIterator](intlpartsiterator.getbreakiterator.md) — Obtém o IntlBreakIterator que é utilizado pelo iterador
- [UConverter](class.uconverter.md) — A classe UConverter
  - [UConverter::\_\_construct](uconverter.construct.md) — Cria um objeto UConverter
  - [UConverter::convert](uconverter.convert.md) — Converte uma string de um conjunto de caracteres (charset) para outro
  - [UConverter::fromUCallback](uconverter.fromucallback.md) — Função de retorno de origem padrão
  - [UConverter::getAliases](uconverter.getaliases.md) — Obtém o pseudônimo de um nome
  - [UConverter::getAvailable](uconverter.getavailable.md) — Obtém os nomes canônicos dos conversores disponíveis
  - [UConverter::getDestinationEncoding](uconverter.getdestinationencoding.md) — Obtém a codificação de destino
  - [UConverter::getDestinationType](uconverter.getdestinationtype.md) — Obtém o tipo do conversor de destino
  - [UConverter::getErrorCode](uconverter.geterrorcode.md) — Obtém o código do último erro gerado pelo objeto
  - [UConverter::getErrorMessage](uconverter.geterrormessage.md) — Obtém a mensagem do último erro gerado pelo objeto
  - [UConverter::getSourceEncoding](uconverter.getsourceencoding.md) — Obtém a codificação de origem
  - [UConverter::getSourceType](uconverter.getsourcetype.md) — Obtém o tipo do conversor de origem
  - [UConverter::getStandards](uconverter.getstandards.md) — Obtém os nomes dos conversores padrão associados
  - [UConverter::getSubstChars](uconverter.getsubstchars.md) — Obtém os caracteres de substituição
  - [UConverter::reasonText](uconverter.reasontext.md) — Obtém uma representação em string da razão da chamada de retorno
  - [UConverter::setDestinationEncoding](uconverter.setdestinationencoding.md) — Define a codificação de destino
  - [UConverter::setSourceEncoding](uconverter.setsourceencoding.md) — Define a codificação da origem
  - [UConverter::setSubstChars](uconverter.setsubstchars.md) — Define os caracteres de substituição
  - [UConverter::toUCallback](uconverter.toucallback.md) — Função de retorno padrão de destino
  - [UConverter::transcode](uconverter.transcode.md) — Converte uma string de uma codificação de caracteres para outra
- [Funções de Grapheme](ref.intl.grapheme.md)
  - [grapheme\_extract](function.grapheme-extract.md) — Extrai uma sequência de grupos padrão de grafemas de um buffer de texto em UTF-8
  - [grapheme\_levenshtein](function.grapheme-levenshtein.md) — Calculate Levenshtein distance between two strings in grapheme units
  - [grapheme\_str\_split](function.grapheme-str-split.md) — Separa uma string em um array
  - [grapheme\_stripos](function.grapheme-stripos.md) — Encontra a posição (em unidades de grafema) da primeira ocorrência de uma string não sensível a maiúsculas/minúsculas
  - [grapheme\_stristr](function.grapheme-stristr.md) — Retorna parte de uma string a partir da primeira ocorrência de outra string (insensível a maiúsculas/minúsculas) até o final
  - [grapheme\_strlen](function.grapheme-strlen.md) — Obtém o comprimento de uma string em unidade de grafema
  - [grapheme\_strpos](function.grapheme-strpos.md) — Encontra a posição (em unidades de grafema) da primeira ocorrência de uma string
  - [grapheme\_strripos](function.grapheme-strripos.md) — Encontra a posição (em unidades de grafema) da última ocorrência de uma string (insensível a maiúsculas/minúsculas)
  - [grapheme\_strrpos](function.grapheme-strrpos.md) — Encontra a posição (em unidades de grafema) da última ocorrência de uma string
  - [grapheme\_strstr](function.grapheme-strstr.md) — Retorna parte de uma string a partir da primeira ocorrência de outra string até o final
  - [grapheme\_substr](function.grapheme-substr.md) — Retorna parte de uma string
- [Funções de IDN](ref.intl.idn.md)
  - [idn\_to\_ascii](function.idn-to-ascii.md) — Converte nome de domínio para a forma ASCII IDNA
  - [idn\_to\_utf8](function.idn-to-utf8.md) — Converte nome de domínio de ASCII IDNA para Unicode
- [IntlChar](class.intlchar.md)
  - [IntlChar::charAge](intlchar.charage.md) — Obtém a "idade" do ponto de código
  - [IntlChar::charDigitValue](intlchar.chardigitvalue.md) — Obtém o valor do dígito decimal de um caractere de dígito decimal
  - [IntlChar::charDirection](intlchar.chardirection.md) — Obtém o valor de categoria bidirecional para um ponto de código
  - [IntlChar::charFromName](intlchar.charfromname.md) — Encontra um caractere Unicode pelo nome e retorna seu valor de ponto de código
  - [IntlChar::charMirror](intlchar.charmirror.md) — Obtém o caractere "espelho" para um ponto de código
  - [IntlChar::charName](intlchar.charname.md) — Obtém o nome de um caractere Unicode
  - [IntlChar::charType](intlchar.chartype.md) — Obtém o valor da categoria geral para um ponto de código
  - [IntlChar::chr](intlchar.chr.md) — Retorna um caractere Unicode por valor de ponto de código
  - [IntlChar::digit](intlchar.digit.md) — Obtém o valor de dígito decimal de um ponto de código para uma base fornecida
  - [IntlChar::enumCharNames](intlchar.enumcharnames.md) — Enumera todos os caracteres Unicode atribuídos dentro de um intervalo
  - [IntlChar::enumCharTypes](intlchar.enumchartypes.md) — Enumera todos os pontos de código com suas categorias gerais Unicode
  - [IntlChar::foldCase](intlchar.foldcase.md) — Converte maiúscula/minúscula em um ponto de código
  - [IntlChar::forDigit](intlchar.fordigit.md) — Obtém a representação em caractere para um dígito e uma base fornecidos
  - [IntlChar::getBidiPairedBracket](intlchar.getbidipairedbracket.md) — Obtém o caractere de par de abertura/fechamento para um ponto de código
  - [IntlChar::getBlockCode](intlchar.getblockcode.md) — Obtém o bloco de alocação Unicode contendo um ponto de código
  - [IntlChar::getCombiningClass](intlchar.getcombiningclass.md) — Obtém a classe de combinação de um ponto de código
  - [IntlChar::getFC\_NFKC\_Closure](intlchar.getfc-nfkc-closure.md) — Obtém a propriedade FC\_NFKC\_Closure para um ponto de código
  - [IntlChar::getIntPropertyMaxValue](intlchar.getintpropertymaxvalue.md) — Obtém o valor máximo para uma propriedade Unicode
  - [IntlChar::getIntPropertyMinValue](intlchar.getintpropertyminvalue.md) — Obtém o valor mínimo para uma propriedade Unicode
  - [IntlChar::getIntPropertyValue](intlchar.getintpropertyvalue.md) — Obtém o valor de uma propriedade Unicode de um ponto de código
  - [IntlChar::getNumericValue](intlchar.getnumericvalue.md) — Obtém o valor numérico para um ponto de código Unicode
  - [IntlChar::getPropertyEnum](intlchar.getpropertyenum.md) — Obtém o valor da constante da propriedade para uma propriedade informada
  - [IntlChar::getPropertyName](intlchar.getpropertyname.md) — Obtém o nome Unicode de uma propriedade
  - [IntlChar::getPropertyValueEnum](intlchar.getpropertyvalueenum.md) — Obtém o valor da propriedade para um nome de valor fornecido
  - [IntlChar::getPropertyValueName](intlchar.getpropertyvaluename.md) — Obtém o nome Unicode para um valor de propriedade
  - [IntlChar::getUnicodeVersion](intlchar.getunicodeversion.md) — Obtém a versão do Unicode
  - [IntlChar::hasBinaryProperty](intlchar.hasbinaryproperty.md) — Verifica uma propriedade binária Unicode para um ponto de código
  - [IntlChar::isalnum](intlchar.isalnum.md) — Verifica se um ponto de código é um caractere alfanumérico
  - [IntlChar::isalpha](intlchar.isalpha.md) — Verifica se um ponto de código é uma letra
  - [IntlChar::isbase](intlchar.isbase.md) — Verifica se um ponto de código é um caractere base
  - [IntlChar::isblank](intlchar.isblank.md) — Verifica se um ponto de código é um caractere "vazio" ou um "espaço horizontal"
  - [IntlChar::iscntrl](intlchar.iscntrl.md) — Verifica se um ponto de código é um caractere de controle
  - [IntlChar::isdefined](intlchar.isdefined.md) — Verifica se o ponto de código está definido
  - [IntlChar::isdigit](intlchar.isdigit.md) — Verifica se um ponto de código é um caractere de dígito
  - [IntlChar::isgraph](intlchar.isgraph.md) — Verifica se um ponto de código é um caractere gráfico
  - [IntlChar::isIDIgnorable](intlchar.isidignorable.md) — Verifica se um ponto de código é um caractere ignorável
  - [IntlChar::isIDPart](intlchar.isidpart.md) — Verifica se um ponto de código é permissível em um identificador
  - [IntlChar::isIDStart](intlchar.isidstart.md) — Verifica se um ponto de código é permissível como o primeiro caractere em um identificador
  - [IntlChar::isISOControl](intlchar.isisocontrol.md) — Verifica se o ponto de código é um código de controle ISO
  - [IntlChar::isJavaIDPart](intlchar.isjavaidpart.md) — Verifica se um ponto de código é permissível em um identificador Java
  - [IntlChar::isJavaIDStart](intlchar.isjavaidstart.md) — Verifica se um ponto de código é permissível como o primeiro caractere em um identificador Java
  - [IntlChar::isJavaSpaceChar](intlchar.isjavaspacechar.md) — Verifica se um ponto de código é um caractere de espaçamento de acordo com o Java
  - [IntlChar::islower](intlchar.islower.md) — Verifica se um ponto de código é uma letra minúscula
  - [IntlChar::isMirrored](intlchar.ismirrored.md) — Verifica se um ponto de código tem a propriedade Bidi\_Mirrored
  - [IntlChar::isprint](intlchar.isprint.md) — Verifica se um ponto de código é um caractere imprimível
  - [IntlChar::ispunct](intlchar.ispunct.md) — Verifica se um ponto de código é um caractere de pontuação
  - [IntlChar::isspace](intlchar.isspace.md) — Verifica se um ponto de código é um caractere de espaçamento
  - [IntlChar::istitle](intlchar.istitle.md) — Verifica se um ponto de código é uma letra com grafia mista
  - [IntlChar::isUAlphabetic](intlchar.isualphabetic.md) — Verifica se um ponto de código tem a propriedade Alphabetic do Unicode
  - [IntlChar::isULowercase](intlchar.isulowercase.md) — Verifica se um ponto de código tem a propriedade Lowercase do Unicode
  - [IntlChar::isupper](intlchar.isupper.md) — Verifica se um ponto de código tem a categoria geral "Lu" (letra maiúscula)
  - [IntlChar::isUUppercase](intlchar.isuuppercase.md) — Verifica se um ponto de código tem a propriedade Uppercase do Unicode
  - [IntlChar::isUWhiteSpace](intlchar.isuwhitespace.md) — Verifica se um ponto de código tem a propriedade White\_Space do Unicode
  - [IntlChar::isWhitespace](intlchar.iswhitespace.md) — Verifica se um ponto de código é um caractere de espaço em branco de acordo com a ICU
  - [IntlChar::isxdigit](intlchar.isxdigit.md) — Verifica se um ponto de código é um dígito hexadecimal
  - [IntlChar::ord](intlchar.ord.md) — Retorna o valor do ponto de código Unicode do caractere
  - [IntlChar::tolower](intlchar.tolower.md) — Transforma o caractere Unicode em minúscula
  - [IntlChar::totitle](intlchar.totitle.md) — Transforma o caractere Unicode em letra de título
  - [IntlChar::toupper](intlchar.toupper.md) — Transforma um caractere Unicode em maiúscula
- [IntlException](class.intlexception.md) — Classe de exceção para erros da extensão Intl
- [IntlIterator](class.intliterator.md) — A classe IntlIterator
  - [IntlIterator::current](intliterator.current.md) — Retorna o elemento atual
  - [IntlIterator::key](intliterator.key.md) — Retorna a chave do elemento atual
  - [IntlIterator::next](intliterator.next.md) — Avança para o próximo elemento
  - [IntlIterator::rewind](intliterator.rewind.md) — Rebobina o iterador para o primeiro elemento
  - [IntlIterator::valid](intliterator.valid.md) — Verifica se a posição atual é válida
- [Funções de Intl](ref.intl.md)
  - [intl\_error\_name](function.intl-error-name.md) — Obtém nome simbólico para um código de erro informado
  - [intl\_get\_error\_code](function.intl-get-error-code.md) — Obtém o último código de erro
  - [intl\_get\_error\_message](function.intl-get-error-message.md) — Obtém a descrição do último erro
  - [intl\_is\_failure](function.intl-is-failure.md) — Verifica se o código de erro fornecido indica falha

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
