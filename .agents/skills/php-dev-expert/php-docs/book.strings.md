# Strings

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.strings.php

---

# Strings

# Introdução

Todas estas funções manipulam strings de várias formas. Algumas
seções mais especializadas podem ser encontradas nas seções de [expressões regulares](book.pcre.md)
e [manipulação de URLs](book.url.md).

Para informações sobre como as strings funcionam, especialmente sobre
o uso de aspas simples, aspas duplas e sequências de escape veja
o verbete sobre [Strings](language.types.string.md)
na seção [Tipos](language.types.md)
do manual.

- [Instalação/Configuração](strings.setup.md)
  - [Instalação](strings.installation.md)
- [Constantes predefinidas](string.constants.md)
- [Funções de String](ref.strings.md)
  - [addcslashes](function.addcslashes.md) — Escapa string com barras invertidas no estilo C
  - [addslashes](function.addslashes.md) — Adiciona barras invertidas a uma string
  - [bin2hex](function.bin2hex.md) — Converte um dado binário em representação hexadecimal
  - [chop](function.chop.md) — Sinônimo de rtrim
  - [chr](function.chr.md) — Gera uma string de um byte a partir de um número
  - [chunk\_split](function.chunk-split.md) — Divide uma string em pedaços menores
  - [convert\_cyr\_string](function.convert-cyr-string.md) — Converte de um conjunto de caracteres cirílico para outro
  - [convert\_uudecode](function.convert-uudecode.md) — Decodifica uma string codificada com uuencode
  - [convert\_uuencode](function.convert-uuencode.md) — Codifica uma string com uuencode
  - [count\_chars](function.count-chars.md) — Retorna informação sobre caracteres usados em uma string
  - [crc32](function.crc32.md) — Calcula polinômio crc32 de uma string
  - [crypt](function.crypt.md) — Hash unidirecional de string
  - [echo](function.echo.md) — Envia uma ou mais strings para a saída
  - [explode](function.explode.md) — Divide uma string com base em outra string
  - [fprintf](function.fprintf.md) — Escreve uma string formatada para um fluxo
  - [get\_html\_translation\_table](function.get-html-translation-table.md) — Retorna a tabela de tradução usada por htmlspecialchars e htmlentities
  - [hebrev](function.hebrev.md) — Converte texto hebraico lógico para texto visual
  - [hebrevc](function.hebrevc.md) — Converte texto hebraico lógico para texto visual com conversão de novas linhas
  - [hex2bin](function.hex2bin.md) — Decodifica uma string binária codificada em hexadecimal
  - [html\_entity\_decode](function.html-entity-decode.md) — Converte entidades HTML aos seus caracteres correspondentes
  - [htmlentities](function.htmlentities.md) — Converte todos os caracteres aplicáveis em entidades HTML
  - [htmlspecialchars](function.htmlspecialchars.md) — Converte caracteres especiais para entidades HTML
  - [htmlspecialchars\_decode](function.htmlspecialchars-decode.md) — Converte entidades especiais HTML de volta para caracteres
  - [implode](function.implode.md) — Aglutina elementos de um array com uma string
  - [join](function.join.md) — Sinônimo de implode
  - [lcfirst](function.lcfirst.md) — Torna minúsculo o primeiro caractere de uma string
  - [levenshtein](function.levenshtein.md) — Calcula a distância Levenshtein entre duas strings
  - [localeconv](function.localeconv.md) — Obtém informação de formatação numérica
  - [ltrim](function.ltrim.md) — Retira espaços em branco (ou outros caracteres) do início de uma string
  - [md5](function.md5.md) — Calcula o hash md5 de uma string
  - [md5\_file](function.md5-file.md) — Calcula o hash md5 de um arquivo
  - [metaphone](function.metaphone.md) — Calcula a chave de Metaphone de uma string
  - [money\_format](function.money-format.md) — Formata um número como uma string de moeda
  - [nl\_langinfo](function.nl-langinfo.md) — Consulta informação de língua e localidade
  - [nl2br](function.nl2br.md) — Insere quebras de linha HTML antes de todos os caracteres de nova linha em um string
  - [number\_format](function.number-format.md) — Formata um número com milhares agrupados
  - [ord](function.ord.md) — Converte o primeiro byte de uma string para um valor entre 0 e 255
  - [parse\_str](function.parse-str.md) — Interpreta uma string como uma requisição URL
  - [print](function.print.md) — Exibe uma string
  - [printf](function.printf.md) — Envia uma string formatada para a saída
  - [quoted\_printable\_decode](function.quoted-printable-decode.md) — Converte uma string Quoted-Printable para uma string de 8 bits
  - [quoted\_printable\_encode](function.quoted-printable-encode.md) — Converte uma string de 8 bits para uma string Quoted-Printable
  - [quotemeta](function.quotemeta.md) — Escapa meta caracteres
  - [rtrim](function.rtrim.md) — Retira espaços em branco (ou outros caracteres) do final de uma string
  - [setlocale](function.setlocale.md) — Define informação de localidade
  - [sha1](function.sha1.md) — Calcula o hash SHA1 de uma string
  - [sha1\_file](function.sha1-file.md) — Calcula a hash sha1 de um arquivo
  - [similar\_text](function.similar-text.md) — Calcula a similaridade entre duas strings
  - [soundex](function.soundex.md) — Calcula a chave soundex de uma string
  - [sprintf](function.sprintf.md) — Retona uma string formatada
  - [sscanf](function.sscanf.md) — Interpreta a entrada de uma string de acordo com um formato
  - [str\_contains](function.str-contains.md) — Determina se uma string contém uma substring fornecida
  - [str\_decrement](function.str-decrement.md) — Decrementa uma string alfanumérica
  - [str\_ends\_with](function.str-ends-with.md) — Verifica se uma string termina com uma substring fornecida
  - [str\_getcsv](function.str-getcsv.md) — Analisa uma string CSV e retorna os dados em um array
  - [str\_increment](function.str-increment.md) — Incrementa uma string alfanumérica
  - [str\_ireplace](function.str-ireplace.md) — Versão insensível a maiúsculas/minúsculas de str\_replace
  - [str\_pad](function.str-pad.md) — Preenche uma string até um determinado comprimento com outra string
  - [str\_repeat](function.str-repeat.md) — Repete uma string
  - [str\_replace](function.str-replace.md) — Substitui todas as ocorrências da string de pesquisa com a string de substituição
  - [str\_rot13](function.str-rot13.md) — Executa a transformação rot13 em uma string
  - [str\_shuffle](function.str-shuffle.md) — Embaralha uma string aleatoriamente
  - [str\_split](function.str-split.md) — Converte uma string em um array
  - [str\_starts\_with](function.str-starts-with.md) — Verifica se uma string começa com uma substring fornecida
  - [str\_word\_count](function.str-word-count.md) — Retorna informação sobre palavras usadas em uma string
  - [strcasecmp](function.strcasecmp.md) — Comparação binária segura de strings insensível a maiúsculas/minúsculas
  - [strchr](function.strchr.md) — Sinônimo de strstr
  - [strcmp](function.strcmp.md) — Comparação binária segura de strings
  - [strcoll](function.strcoll.md) — Comparação de strings baseada em localidade
  - [strcspn](function.strcspn.md) — Encontra o tamanho do segmento inicial que não corresponde à máscara
  - [strip\_tags](function.strip-tags.md) — Retira as tags HTML e PHP de uma string
  - [stripcslashes](function.stripcslashes.md) — Remove o escape de strings escapadas com addcslashes
  - [stripos](function.stripos.md) — Encontra a posição da primeira ocorrência de uma substring em uma string, de forma insensível a maiúsculas/minúsculas
  - [stripslashes](function.stripslashes.md) — Desfaz os escapes de uma string escapada
  - [stristr](function.stristr.md) — strstr insensível a maiúsculas/minúsculas
  - [strlen](function.strlen.md) — Retorna o tamanho de uma string
  - [strnatcasecmp](function.strnatcasecmp.md) — Comparação de strings insensível a maiúsculas/minúsculas usando o algoritmo de "ordem natural"
  - [strnatcmp](function.strnatcmp.md) — Comparações de strings usando um algoritmo de "ordem natural"
  - [strncasecmp](function.strncasecmp.md) — Comparação binária de strings, insensível a maiúsculas/minúsculas, dos primeiros n caracteres
  - [strncmp](function.strncmp.md) — Comparação de strings segura para binários dos primeiros n caracteres
  - [strpbrk](function.strpbrk.md) — Procura na string por um dos caracteres de um conjunto
  - [strpos](function.strpos.md) — Encontra a posição da primeira ocorrência de uma substring em uma string
  - [strrchr](function.strrchr.md) — Encontra a última ocorrência de um caractere em uma string
  - [strrev](function.strrev.md) — Reverte uma string
  - [strripos](function.strripos.md) — Encontra a posição da última ocorrência de uma substring em uma string, insensível a maiúsculas/minúsculas
  - [strrpos](function.strrpos.md) — Encontra a posição da última ocorrência de uma substring em uma string
  - [strspn](function.strspn.md) — Encontra o comprimento do segmento inicial de uma string composta
    totalmente de caracteres contidos em uma máscara informada
  - [strstr](function.strstr.md) — Encontra a primeira ocorrência de uma string
  - [strtok](function.strtok.md) — Divide uma string em tokens
  - [strtolower](function.strtolower.md) — Converte uma string para minúsculas
  - [strtoupper](function.strtoupper.md) — Converte uma string em maiúsculas
  - [strtr](function.strtr.md) — Traduz caracteres ou substitui substrings
  - [substr](function.substr.md) — Retorna parte de uma string
  - [substr\_compare](function.substr-compare.md) — Comparação binária de duas strings a partir de uma posição até n caracteres
  - [substr\_count](function.substr-count.md) — Conta o número de ocorrências de uma substring
  - [substr\_replace](function.substr-replace.md) — Substitui o texto dentro de uma parte de uma string
  - [trim](function.trim.md) — Retira espaços (ou outros caracteres) do início e do final de uma string
  - [ucfirst](function.ucfirst.md) — Transforma o primeiro caractere de uma string em maiúsculo
  - [ucwords](function.ucwords.md) — Converte para maiúsculas o primeiro caractere de cada palavra
  - [utf8\_decode](function.utf8-decode.md) — Converte uma string de UTF-8 para ISO-8859-1, substituindo caracteres inválidos ou não
    representáveis
  - [utf8\_encode](function.utf8-encode.md) — Converte uma string ISO-8859-1 em UTF-8
  - [vfprintf](function.vfprintf.md) — Escreve uma string formatada para um fluxo
  - [vprintf](function.vprintf.md) — Mostra uma string formatada
  - [vsprintf](function.vsprintf.md) — Retorna uma string formatada
  - [wordwrap](function.wordwrap.md) — Quebra uma string em um dado número de caracteres
- [Registro de Alterações](changelog.strings.md)

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
