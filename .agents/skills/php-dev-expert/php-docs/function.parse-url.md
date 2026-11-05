# Analisa uma URL e retorna seus componentes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.parse-url.php

---

# parse\_url

(PHP 4, PHP 5, PHP 7, PHP 8)

parse\_url — Analisa uma URL e retorna seus componentes

### Descrição

function **parse\_url**([string](language.types.string.md) `$url`, [int](language.types.integer.md) `$component` = -1): [int](language.types.integer.md)|[string](language.types.string.md)|[array](language.types.array.md)|[null](language.types.null.md)|[false](language.types.singleton.md)

Esta função analisa uma URL e retorna um array associativo contendo cada
um dos vários componentes da URL presentes.
Os valores dos elementos do array *não* são decodificados como URL.

Esta função **não** se destina a validar
o URL fornecido, apenas o divide nas partes listadas abaixo. URLs parciais e inválidos
também são aceitos. **parse\_url()** faz o possível para
analisá-los corretamente.

**Cuidado**

Esta função não segue nenhum padrão estabelecido de URI ou URL.
Ela retornará resultados incorretos ou sem sentido para URLs relativas ou
malformadas. Mesmo para URLs válidas, o resultado pode diferir do de um
analisador de URL diferente, já que existem vários padrões diferentes relacionados
a URLs que visam casos de uso diferentes e que diferem em seus
requisitos.

O processamento de uma URL com analisadores que seguem diferentes padrões de URL é uma
fonte comum de vulnerabilidades de segurança. Por exemplo, validar
uma URL em relação a uma lista de permissões de nomes de host aceitáveis ​​com o analisador A
pode ser ineficaz quando a recuperação real do recurso usa
o analisador B que extrai os nomes de host de forma diferente.

As classes [Uri\Rfc3986\Uri](class.uri-rfc3986-uri.md) e [Uri\WhatWg\Url](class.uri-whatwg-url.md)
seguem rigorosamente os padrões de URL RFC 3986 e WHATWG, respectivamente.
É altamente recomendável usar essas classes para todo o código recém-escrito
e migrar os usos existentes da função **parse\_url()**
para essas classes, a menos que o comportamento de **parse\_url()** precise
ser preservado por motivos de compatibilidade.

### Parâmetros

`url`
:   A URL a ser analisada.

`component`
:   Deve ser especificada uma das constantes **`PHP_URL_SCHEME`**,
    **`PHP_URL_HOST`**, **`PHP_URL_PORT`**,
    **`PHP_URL_USER`**, **`PHP_URL_PASS`**,
    **`PHP_URL_PATH`**, **`PHP_URL_QUERY`**
    ou **`PHP_URL_FRAGMENT`** para recuperar apenas um componente
    específico da URL como uma [string](language.types.string.md) (exceto quando
    **`PHP_URL_PORT`** for informada, que no caso o valor
    de retorno será um [int](language.types.integer.md)).

### Valor Retornado

Em URLs gravemente malformados, **parse\_url()** pode retornar
**`false`**.

Se o parâmetro `component` for omitido, um
[array](language.types.array.md) associativo será retornado. Pelo menos um elemento estará
presente no array. As potenciais chaves dentro deste array são:

- scheme - ex.: `http`
- host
- port
- user
- pass
- path
- query - após o ponto de interrogação `?`
- fragment - após a cerquilha `#`

Se o parâmetro `component` for especificado,
**parse\_url()** retornará uma [string](language.types.string.md) (ou um
[int](language.types.integer.md), no caso de **`PHP_URL_PORT`**)
em vez de um [array](language.types.array.md). Se o componente solicitado não existir
no URL fornecido, **`null`** será retornado.
A partir do PHP 8.0.0, **parse\_url()** diferencia consultas e fragmentos
ausentes de vazios:

```
http://example.com/foo → consulta = null, fragmento = null
http://example.com/foo? → consulta = "",   fragmento = null
http://example.com/foo# → consulta = null, fragmento = ""
http://example.com/foo?# → consulta = "",   fragmento = ""
```

Anteriormente, todos os casos resultavam em consulta e fragmento **`null`**.

Observe que os caracteres de controle (compare com [ctype\_cntrl()](function.ctype-cntrl.md)) nos
componentes são substituídos por sublinhados (`_`).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **parse\_url()** agora diferencia consultas e fragmentos vazios de ausentes. |

### Examples

**Exemplo #1 Um exemplo de **parse\_url()****

```
<?php
$url = 'http://username:password@hostname:9090/path?arg=value#anchor';

var_dump(parse_url($url));
var_dump(parse_url($url, PHP_URL_SCHEME));
var_dump(parse_url($url, PHP_URL_USER));
var_dump(parse_url($url, PHP_URL_PASS));
var_dump(parse_url($url, PHP_URL_HOST));
var_dump(parse_url($url, PHP_URL_PORT));
var_dump(parse_url($url, PHP_URL_PATH));
var_dump(parse_url($url, PHP_URL_QUERY));
var_dump(parse_url($url, PHP_URL_FRAGMENT));
?>
```

O exemplo acima produzirá:

```
array(8) {
  ["scheme"]=>
  string(4) "http"
  ["host"]=>
  string(8) "hostname"
  ["port"]=>
  int(9090)
  ["user"]=>
  string(8) "username"
  ["pass"]=>
  string(8) "password"
  ["path"]=>
  string(5) "/path"
  ["query"]=>
  string(9) "arg=value"
  ["fragment"]=>
  string(6) "anchor"
}
string(4) "http"
string(8) "username"
string(8) "password"
string(8) "hostname"
int(9090)
string(5) "/path"
string(9) "arg=value"
string(6) "anchor"
```

**Exemplo #2 Um exemplo de **parse\_url()** com esquema ausente**

```
<?php
$url = '//www.example.com/path?googleguy=googley';

// Antes do PHP 5.4.7, o "path" seria "//www.example.com/path"
var_dump(parse_url($url));
?>
```

O exemplo acima produzirá:

```
array(3) {
  ["host"]=>
  string(15) "www.example.com"
  ["path"]=>
  string(5) "/path"
  ["query"]=>
  string(17) "googleguy=googley"
}
```

### Notas

> **Nota**:
>
> Esta função destina-se especificamente à análise de URLs e
> não de URIs. No entanto, para cumprir os requisitos de compatibilidade com versões
> anteriores do PHP, ele abre uma exceção para o esquema `file://` onde barras
> triplas (`file:///...`) são permitidas. Para qualquer outro esquema isto é inválido.

### Veja também

- [pathinfo()](function.pathinfo.md) - Retorna informações sobre um caminho de arquivo
- [parse\_str()](function.parse-str.md) - Interpreta uma string como uma requisição URL
- [http\_build\_query()](function.http-build-query.md) - Gera a string de consulta em formato URL
- [dirname()](function.dirname.md) - Retorna o caminho para o diretório pai
- [basename()](function.basename.md) - Retorna a última parte do caminho
- [» RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986)

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
