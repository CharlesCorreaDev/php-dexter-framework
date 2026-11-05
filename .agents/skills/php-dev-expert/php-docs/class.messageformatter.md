# A classe MessageFormatter

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.messageformatter.php

---

# A classe MessageFormatter

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

## Introdução

MessageFormatter é uma classe concreta que permite aos usuários produzir
mensagens concatenadas, neutras do ponto de vista da língua. Os métodos fornecido nesta
classe são usados para construir todas as mensagens que são vistas pelos usuários finais.

A classe MessageFormatter monta mensagens a partir de vários fragmentos (como
fragmentos de texto, números e datas) fornecidos pelo programa. Por causa da
classe MessageFormatter, o programa não precisa saber a ordem dos
fragmentos. A classe usa as especificações de formatação para os
fragmentos para montá-los em uma mensagem que fica contida em uma única
string dentro de um pacote de recurso. Por exemplo, MessageFormatter permite
mostrar a frase "Concluída a impressão de x arquivos em um total de y..." de uma maneira
que ainda permita flexibilidade na tradução.

Anteriormente, uma mensagem para o usuário final era criada como uma frase e manipulada como uma
string. Este procedimento criava problemas para localizadores porque a
estrutura da frase, ordem de palavras, formato de números e outros mais são muito diferentes
de língua para língua. A maneira neutra de criar mensagens
mantém cada parte da mensagem separada e fornece chaves para os dados.
Usando estas chaves, a classe MessageFormatter pode concatenar as partes da
mensagem, localizá-las, e monstrar uma string bem formada ao
usuário final.

MessageFormatter toma um conjunto de objetos, formata-os, e depois insere
as strings formatadas no modelo nos locais apropriados. Formatos de escolha
podem ser usados em conjunto com MessageFormatter para manipular
plurais, fazer correspondência de números, e fazer seleção a partir de um array de itens. Tipicamente, o
formato da mensagem virá de recursos e os argumentos serão
definidos dinamicamente em tempo de execução.

## Resumo da classe

class ****MessageFormatter****
{

/\* Métodos \*/

public function [\_\_construct](messageformatter.create.md)([string](language.types.string.md) `$locale`, [string](language.types.string.md) `$pattern`)

public static function [create](messageformatter.create.md)([string](language.types.string.md) `$locale`, [string](language.types.string.md) `$pattern`): [?](language.types.null.md)[MessageFormatter](class.messageformatter.md)

public function [format](messageformatter.format.md)([array](language.types.array.md) `$values`): [string](language.types.string.md)|[false](language.types.singleton.md)

public static function [formatMessage](messageformatter.formatmessage.md)([string](language.types.string.md) `$locale`, [string](language.types.string.md) `$pattern`, [array](language.types.array.md) `$values`): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [getErrorCode](messageformatter.geterrorcode.md)(): [int](language.types.integer.md)

public function [getErrorMessage](messageformatter.geterrormessage.md)(): [string](language.types.string.md)

public function [getLocale](messageformatter.getlocale.md)(): [string](language.types.string.md)

public function [getPattern](messageformatter.getpattern.md)(): [string](language.types.string.md)|[false](language.types.singleton.md)

public function [parse](messageformatter.parse.md)([string](language.types.string.md) `$string`): [array](language.types.array.md)|[false](language.types.singleton.md)

public static function [parseMessage](messageformatter.parsemessage.md)([string](language.types.string.md) `$locale`, [string](language.types.string.md) `$pattern`, [string](language.types.string.md) `$message`): [array](language.types.array.md)|[false](language.types.singleton.md)

public function [setPattern](messageformatter.setpattern.md)([string](language.types.string.md) `$pattern`): [bool](language.types.boolean.md)

}

## Veja também

- [» 
  Documentação de formatação ICU](https://unicode-org.github.io/icu/userguide/format_parse/)
- [» 
  Descrição de formatação de mensagens ICU](https://unicode-org.github.io/icu/userguide/format_parse/messages/)
- [» Formatadores de mensagem ICU](https://unicode-org.github.io/icu/userguide/format_parse/messages/)
- [» Formatadores de escolha ICU](https://unicode-org.github.io/icu-docs/apidoc/released/icu4c/classChoiceFormat.html)

## Índice

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
