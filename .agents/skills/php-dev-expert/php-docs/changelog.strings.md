# Registro de Alterações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/changelog.strings.php

---

# Registro de Alterações

As alterações a seguir foram feitas em
classes/funções/métodos desta extensão.

| Version | Function | Description |
| --- | --- | --- |
| 8.5.0 | [chr](function.chr.md) | Passar inteiros fora do intervalo [0, 255] foi descontinuado. |
|  | [ord](function.ord.md) | Passar uma string que não seja um byte único foi descontinuado. |
|  | [setlocale](function.setlocale.md) | Passar um inteiro 0 como o argumento de locales não é mais suportado e agora lança um TypeError. |
| 8.4.0 | [str\_getcsv](function.str-getcsv.md) | Depender do valor padrão de escape agora está descontinuado. |
|  | [str\_getcsv](function.str-getcsv.md) | Agora lança um ValueError se separator, enclosure, ou escape for inválido. Isto imita o comportamento de fgetcsv e de fputcsv. |
|  | [strcspn](function.strcspn.md) | Antes do PHP 8.4.0, quando characters fosse uma string vazia, a pesquisa incorretamente encerraria no primeiro byte nulo em string. |
| 8.3.0 | [number\_format](function.number-format.md) | Adicionada a manipulação de valores negativos para decimals. |
|  | [str\_getcsv](function.str-getcsv.md) | Uma string vazia é retornada ao invés de uma string com um único byte nulo para o último campo, se ele contiver apenas um demarcador não terminado. |
|  | [strrchr](function.strrchr.md) | O parâmetro before\_needle foi adicionado. |
|  | [strtok](function.strtok.md) | Agora emite um alerta E\_WARNING quando token não for informado. |
| 8.2.0 | [lcfirst](function.lcfirst.md) | A conversão de maiúsculas e minúsculas não depende mais da localidade definida com setlocale. Somente caracteres ASCII serão convertidos. |
|  | [str\_ireplace](function.str-ireplace.md) | A redução de todas as letras a maiúsculas ou minúsculas não depende mais da localidade definida com setlocale. Somente a redução de todas as letras ASCII a maiúsculas ou minúsculas será feita. Os bytes não ASCII serão comparados por seu valor de byte. |
|  | [str\_split](function.str-split.md) | Se string estiver vazio, um array agora é retornado. Anteriormente, um array contendo uma única string vazia foi retornada. |
|  | [strcasecmp](function.strcasecmp.md) | Não é mais garantido que esta função retornará strlen($string1) - strlen($string2) quando os comprimentos das strings não forem iguais, mas ppodem agora retornar -1 ou 1 no lugar. |
|  | [strcmp](function.strcmp.md) | Não é mais garantido que esta função retornará strlen($string1) - strlen($string2) quando os comprimentos das strings não forem iguais, mas ppodem agora retornar -1 ou 1 no lugar. |
|  | [stripos](function.stripos.md) | A redução de todas as letras a maiúsculas ou minúsculas não depende mais da localidade definida com setlocale. Somente a redução de todas as letras ASCII a maiúsculas ou minúsculas será feita. Os bytes não ASCII serão comparados por seu valor de byte. |
|  | [stristr](function.stristr.md) | A redução de todas as letras a maiúsculas ou minúsculas não depende mais da localidade definida com setlocale. Somente a redução de todas as letras ASCII a maiúsculas ou minúsculas será feita. Os bytes não ASCII serão comparados por seu valor de byte. |
|  | [strnatcasecmp](function.strnatcasecmp.md) | Não é mais garantido que esta função retornará strlen($string1) - strlen($string2) quando os comprimentos das strings não forem iguais, mas ppodem agora retornar -1 ou 1 no lugar. |
|  | [strnatcmp](function.strnatcmp.md) | Não é mais garantido que esta função retornará strlen($string1) - strlen($string2) quando os comprimentos das strings não forem iguais, mas ppodem agora retornar -1 ou 1 no lugar. |
|  | [strncasecmp](function.strncasecmp.md) | Não é mais garantido que esta função retornará strlen($string1) - strlen($string2) quando os comprimentos das strings não forem iguais, mas ppodem agora retornar -1 ou 1 no lugar. |
|  | [strncmp](function.strncmp.md) | Não é mais garantido que esta função retornará strlen($string1) - strlen($string2) quando os comprimentos das strings não forem iguais, mas ppodem agora retornar -1 ou 1 no lugar. |
|  | [strripos](function.strripos.md) | A redução de todas as letras a maiúsculas ou minúsculas não depende mais da localidade definida com setlocale. Somente a redução de todas as letras ASCII a maiúsculas ou minúsculas será feita. Os bytes não ASCII serão comparados por seu valor de byte. |
|  | [strtolower](function.strtolower.md) | A conversão de maiúsculas e minúsculas não depende mais da localidade definida com setlocale. Somente caracteres ASCII serão convertidos. |
|  | [strtoupper](function.strtoupper.md) | A conversão de maiúsculas e minúsculas não depende mais da localidade definida com setlocale. Somente caracteres ASCII serão convertidos. |
|  | [substr\_compare](function.substr-compare.md) | Não é mais garantido que esta função retornará strlen($string1) - strlen($string2) quando os comprimentos das strings não forem iguais, mas ppodem agora retornar -1 ou 1 no lugar. |
|  | [ucfirst](function.ucfirst.md) | A conversão de maiúsculas e minúsculas não depende mais da localidade definida com setlocale. Somente caracteres ASCII serão convertidos. |
|  | [ucwords](function.ucwords.md) | A conversão de maiúsculas e minúsculas não depende mais da localidade definida com setlocale. Somente caracteres ASCII serão convertidos. |
|  | [utf8\_decode](function.utf8-decode.md) | Esta função foi descontinuada. |
|  | [utf8\_encode](function.utf8-encode.md) | Esta função foi descontinuada. |
| 8.1.0 | [get\_html\_translation\_table](function.get-html-translation-table.md) | flags mudou de ENT\_COMPAT para ENT\_QUOTES | ENT\_SUBSTITUTE | ENT\_HTML401. |
|  | [html\_entity\_decode](function.html-entity-decode.md) | O padrão de flags mudou de ENT\_COMPAT para ENT\_QUOTES | ENT\_SUBSTITUTE | ENT\_HTML401. |
|  | [htmlentities](function.htmlentities.md) | O padrão de flags mudou de ENT\_COMPAT para ENT\_QUOTES | ENT\_SUBSTITUTE | ENT\_HTML401. |
|  | [htmlspecialchars](function.htmlspecialchars.md) | O padrão para flags mudou de ENT\_COMPAT para ENT\_QUOTES | ENT\_SUBSTITUTE | ENT\_HTML401. |
|  | [htmlspecialchars\_decode](function.htmlspecialchars-decode.md) | O padrão de flags mudou de ENT\_COMPAT para ENT\_QUOTES | ENT\_SUBSTITUTE | ENT\_HTML401. |
| 8.0.0 | [convert\_cyr\_string](function.convert-cyr-string.md) | Esta função foi removida. |
|  | [convert\_uuencode](function.convert-uuencode.md) | Antes desta versão, tentar converter uma string vazia retornava false sem nenhuma razão particular. |
|  | [count\_chars](function.count-chars.md) | Antes desta versão, a função retornava false em caso de falha. |
|  | [crypt](function.crypt.md) | O parâmetro salt não é mais opcional. |
|  | [explode](function.explode.md) | explode agora lança um ValueError quando separator é informado com uma string vazia (""). Anteriormente, explode retornava false nesse caso. |
|  | [fprintf](function.fprintf.md) | Esta função não retorna mais false em caso de falha. |
|  | [fprintf](function.fprintf.md) | Lança um erro ValueError se o número de argumentos for zero; anteriormente, esta função emitia um E\_WARNING. |
|  | [fprintf](function.fprintf.md) | Lança um erro ValueError se [width] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente, esta função emitia um E\_WARNING. |
|  | [fprintf](function.fprintf.md) | Lança um erro ValueError se [precision] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente, esta função emitia um E\_WARNING. |
|  | [fprintf](function.fprintf.md) | Lança um erro ArgumentCountError quando menos argumentos do que o necessário são fornecidos; anteriormente, esta função emitia um E\_WARNING. |
|  | [hebrevc](function.hebrevc.md) | Esta função foi removida. |
|  | [html\_entity\_decode](function.html-entity-decode.md) | encoding agora pode ser nulo. |
|  | [htmlentities](function.htmlentities.md) | encoding agora pode ser nulo. |
|  | [implode](function.implode.md) | Passar separator depois de array não é mais suportado. |
|  | [levenshtein](function.levenshtein.md) | Antes desta versão, levenshtein tinha de ser chamada com dois ou com cinco argumentos. |
|  | [levenshtein](function.levenshtein.md) | Antes desta versão, levenshtein retornaria -1 se uma das strings fosse maior que 255 caracteres. |
|  | [metaphone](function.metaphone.md) | Esta função retornava false em caso de falha. |
|  | [money\_format](function.money-format.md) | Esta função foi removida. |
|  | [number\_format](function.number-format.md) | Antes desta versão, number\_format aceitava um, dois ou quatro parâmetros (mas não três). |
|  | [parse\_str](function.parse-str.md) | result não é mais opcional. |
|  | [printf](function.printf.md) | Esta função não retorna mais false em caso de falha. |
|  | [printf](function.printf.md) | Lança um erro ValueError se o número de argumentos for zero; anteriormente, esta função emitia um E\_WARNING. |
|  | [printf](function.printf.md) | Lança um erro ValueError se [width] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente, esta função emitia um E\_WARNING. |
|  | [printf](function.printf.md) | Lança um erro ValueError se [precision] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente, esta função emitia um E\_WARNING. |
|  | [printf](function.printf.md) | Lança um erro ArgumentCountError quando menos argumentos do que o necessário são fornecidos; anteriormente, esta função emitia um E\_WARNING. |
|  | [soundex](function.soundex.md) | Antes desta versão, chamar a função com uma string vazia retornava false por nenhuma razão em particular. |
|  | [sprintf](function.sprintf.md) | Esta função não retorna mais false em caso de falha. |
|  | [sprintf](function.sprintf.md) | Lança um erro ValueError se o número de argumentos for zero; anteriormente, esta função emitia um E\_WARNING. |
|  | [sprintf](function.sprintf.md) | Lança um erro ValueError se [width] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente, esta função emitia um E\_WARNING. |
|  | [sprintf](function.sprintf.md) | Lança um erro ValueError se [precision] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente, esta função emitia um E\_WARNING. |
|  | [sprintf](function.sprintf.md) | Lança um erro ArgumentCountError quando menos argumentos do que o necessário são fornecidos; anteriormente, esta função emitia um E\_WARNING. |
|  | [str\_split](function.str-split.md) | Se length for menor que 1, uma exceção ValueError será lançada agora; anteriormente, um erro de nível E\_WARNING era gerado e a função retornava false. |
|  | [str\_word\_count](function.str-word-count.md) | characters agora pode ser nulo. |
|  | [strcspn](function.strcspn.md) | length agora pode ser nulo. |
|  | [strip\_tags](function.strip-tags.md) | allowed\_tags agora pode ser nulo. |
|  | [stripos](function.stripos.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [stripos](function.stripos.md) | Passar um int em needle não é mais suportado. |
|  | [stristr](function.stristr.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [stristr](function.stristr.md) | Passar um int em needle não é mais suportado. |
|  | [strpos](function.strpos.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [strpos](function.strpos.md) | Passar um int em needle não é mais suportado. |
|  | [strrchr](function.strrchr.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [strrchr](function.strrchr.md) | Passar um int em needle não é mais suportado. |
|  | [strripos](function.strripos.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [strripos](function.strripos.md) | Passar int no parâmetro needle não é mais suportado. |
|  | [strrpos](function.strrpos.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [strrpos](function.strrpos.md) | Passar int no parâmetro needle não é mais suportado. |
|  | [strspn](function.strspn.md) | length agora pode ser nulo. |
|  | [strstr](function.strstr.md) | O parâmetro needle agora aceita uma string vazia. |
|  | [strstr](function.strstr.md) | Passar um int em needle não é mais suportado. |
|  | [substr](function.substr.md) | length agora pode ser nulo. Quando length for especificamente definido para null, a função retorna uma substring terminando no final da string, quando anteriormente retornava uma string vazia. |
|  | [substr](function.substr.md) | A função retorna uma string vazia quando antes retornava false. |
|  | [substr\_compare](function.substr-compare.md) | length agora pode ser nulo. |
|  | [substr\_count](function.substr-count.md) | length agora pode ser nulo. |
|  | [substr\_replace](function.substr-replace.md) | length agora pode ser nulo. |
|  | [vfprintf](function.vfprintf.md) | Esta função não mais retorna false em caso de falha. |
|  | [vfprintf](function.vfprintf.md) | Lança uma exceção ValueError se o número de argumentos for zero; anteriormente esta função emitia um E\_WARNING. |
|  | [vfprintf](function.vfprintf.md) | Lança uma exceção ValueError se [width] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente esta função emitia um E\_WARNING. |
|  | [vfprintf](function.vfprintf.md) | Lança uma exceção ValueError se [precision] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente esta função emitia um E\_WARNING. |
|  | [vfprintf](function.vfprintf.md) | Lança uma exceção ValueError quando houver menos parâmetros que os necessários; anteriormente esta função emitia um E\_WARNING. |
|  | [vprintf](function.vprintf.md) | Esta função não mais retorna false em caso de falha. |
|  | [vprintf](function.vprintf.md) | Lança uma exceção ValueError se o número de argumentos for zero; anteriormente esta função emitia um E\_WARNING. |
|  | [vprintf](function.vprintf.md) | Lança uma exceção ValueError se [width] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente esta função emitia um E\_WARNING. |
|  | [vprintf](function.vprintf.md) | Lança uma exceção ValueError se [precision] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente esta função emitia um E\_WARNING. |
|  | [vprintf](function.vprintf.md) | Lança uma exceção ValueError quando houver menos parâmetros que os necessários; anteriormente esta função emitia um E\_WARNING. |
|  | [vsprintf](function.vsprintf.md) | Esta função não mais retorna false em caso de falha. |
|  | [vsprintf](function.vsprintf.md) | Lança uma exceção ValueError se o número de argumentos for zero; anteriormente esta função emitia um E\_WARNING. |
|  | [vsprintf](function.vsprintf.md) | Lança uma exceção ValueError se [width] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente esta função emitia um E\_WARNING. |
|  | [vsprintf](function.vsprintf.md) | Lança uma exceção ValueError se [precision] for menor que zero ou maior que PHP\_INT\_MAX; anteriormente esta função emitia um E\_WARNING. |
|  | [vsprintf](function.vsprintf.md) | Lança uma exceção ValueError quando houver menos parâmetros que os necessários; anteriormente esta função emitia um E\_WARNING. |
|  | [wordwrap](function.wordwrap.md) | Se break for uma string vazia, uma exceção ValueError é lançada; anteriormente, neste caso, um E\_WARNING era emitido e a função retornava false. |
| 7.4.0 | [chr](function.chr.md) | A função não mais aceita silenciosamente códigos não suportados no parâmetro codepoint, convertendo-os para 0. |
|  | [convert\_cyr\_string](function.convert-cyr-string.md) | Esta função foi descontinuada. |
|  | [hebrevc](function.hebrevc.md) | Esta função foi descontinuada. |
|  | [implode](function.implode.md) | Passar separator depois de array (isto é, usando a assinatura legada) foi descontinuado. |
|  | [money\_format](function.money-format.md) | Esta função foi descontinuada. Utilize NumberFormatter::formatCurrency em seu lugar. |
|  | [str\_getcsv](function.str-getcsv.md) | O parâmetro escape agora interpreta uma string vazia como o sinal para desabilitar o mecanismo de escape. Antes, uma string vazia era tratada como valor padrão do parâmetro. |
|  | [strip\_tags](function.strip-tags.md) | O parâmetro allowed\_tags agora alternativamente aceita um array. |
| 7.3.5 | [substr\_compare](function.substr-compare.md) | offset agora pode ser igual ao comprimento de haystack. |
| 7.3.0 | [stripos](function.stripos.md) | Passar um int em needle foi descontinuado. |
|  | [stristr](function.stristr.md) | Passar um int em needle foi descontinuado. |
|  | [strpos](function.strpos.md) | Passar um int em needle foi descontinuado. |
|  | [strrchr](function.strrchr.md) | Passar um int em needle foi descontinuado. |
|  | [strripos](function.strripos.md) | Passar um int no parâmetro needle foi descontinuado. |
|  | [strrpos](function.strrpos.md) | Passar um int no parâmetro needle foi descontinuado. |
|  | [strstr](function.strstr.md) | Passar um int em needle foi descontinuado. |
| 7.2.18 | [substr\_compare](function.substr-compare.md) | offset agora pode ser igual ao comprimento de haystack. |
| 7.2.0 | [number\_format](function.number-format.md) | number\_format foi modificado para não ser capaz de retornar -0, anteriormente -0 poderia ser retornado para casos onde num fosse -0.01. |
|  | [parse\_str](function.parse-str.md) | Utilização de parse\_str sem o segundo parâmetro agora emite um aviso de E\_DEPRECATED. |
|  | [utf8\_decode](function.utf8-decode.md) | Esta função foi movida de extensão XML para o núcleo do PHP. Em versões anteriores, estava disponível somente se a extensão XML estivesse instalada. |
|  | [utf8\_encode](function.utf8-encode.md) | Esta função foi movida de extensão XML para o núcleo do PHP. Em versões anteriores, estava disponível somente se a extensão XML estivesse instalada. |
| 7.1.0 | [str\_shuffle](function.str-shuffle.md) | O algoritmo interno de randomização mudou e agora usa o Gerador de Números Aleatórios Mersenne Twister em vez da função rand da biblioteca libc. |
|  | [stripos](function.stripos.md) | Suporte para valores negativos em offset foi adicionado. |
|  | [strpos](function.strpos.md) | Suporte a offset negativo foi adicionado. |
|  | [substr\_count](function.substr-count.md) | Suporte a valores negativos para offset e length foi adicionado. length agora também pode ser 0. |

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
