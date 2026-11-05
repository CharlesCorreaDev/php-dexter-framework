# A classe StreamBucket

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.streambucket.php

---

# A classe StreamBucket

(PHP 8 >= 8.4.0)

## Introdução

Um bucket de fluxo é um pedaço do fluxo que pode ser estraído de brigadas de buckets.

## Resumo da classe

final
class ****StreamBucket****
{

/\* Propriedades \*/

public
readonly
[resource](language.types.resource.md)
[$bucket](class.streambucket.md#streambucket.props.bucket);

public
readonly
[string](language.types.string.md)
[$data](class.streambucket.md#streambucket.props.data);

public
readonly
[int](language.types.integer.md)
[$datalen](class.streambucket.md#streambucket.props.datalen);

public
readonly
[int](language.types.integer.md)
[$dataLength](class.streambucket.md#streambucket.props.datalength);

}

## Propriedades

resource bucket
:   Um recurso `userfilter.bucket`.

string data
:   A string atual no bucket.

int datalen
:   O comprimento da string no bucket.
    Descontinuado a partir do PHP 8.4 em favor de `StreamBucket::$dataLength`.

int dataLength
:   O comprimento da string no bucket.

## Veja também

- [stream\_bucket\_new()](function.stream-bucket-new.md)
- [stream\_bucket\_append()](function.stream-bucket-append.md)
- [stream\_bucket\_prepend()](function.stream-bucket-prepend.md)
- [stream\_bucket\_make\_writeable()](function.stream-bucket-make-writeable.md)

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
