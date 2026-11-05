# Recursos descontinuados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration73.deprecated.php

---

## Recursos descontinuados

### Núcleo do PHP

#### Constantes Case-Insensitive

A declaração de constantes que não diferenciam maiúsculas de minúsculas foi descontinuada. Passar
**`true`** como o terceiro argumento para [define()](function.define.md) agora gerará um
aviso de descontinuação. O uso de constantes que não diferenciam maiúsculas de minúsculas com
uma maiúscula que difere da declaração também foi descontinuado.

#### assert() com Namespace

Declarar uma função chamada `assert()` dentro de um namespace
foi descontinuado. A função [assert()](function.assert.md) está sujeita a tratamento especial
pelo mecanismo, o que pode levar a um comportamento inconsistente ao definir
uma função com namespace com o mesmo nome.

#### Pesquisando Strings por Needle não string

Passar um valor não string para funções de pesquisa de string foi descontinuado. No futuro,
o valor será interpretado como uma string em vez de um ponto de código
ASCII. Dependendo do comportamento pretendido, você deve converter explicitamente
a valor para string ou executar uma chamada explícita para
[chr()](function.chr.md). As seguintes funções são afetadas:

- [strpos()](function.strpos.md)
- [strrpos()](function.strrpos.md)
- [stripos()](function.stripos.md)
- [strripos()](function.strripos.md)
- [strstr()](function.strstr.md)
- [strchr()](function.strchr.md)
- [strrchr()](function.strrchr.md)
- [stristr()](function.stristr.md)

#### Fluxo com remoção de tags

A função [fgetss()](function.fgetss.md) e o filtro de fluxo [string.strip\_tags](filters.string.md) foram
descontinuados. Isso também afeta o método
[SplFileObject::fgetss()](splfileobject.fgetss.md)
e a função [gzgetss()](function.gzgetss.md).

### Filtragem de Dados

O uso explícito das constantes
**`FILTER_FLAG_SCHEME_REQUIRED`** e
**`FILTER_FLAG_HOST_REQUIRED`** agora está descontinuado; ambos estão
implícitos para **`FILTER_VALIDATE_URL`** de qualquer maneira.

### Processamento de Imagem e GD

[image2wbmp()](function.image2wbmp.md) foi descontinuada.

### Funções de Internacionalização

O uso de **`Normalizer::NONE`** gera um aviso de
descontinuação, se o PHP estiver vinculado a ICU ≥ 56.

### Multibyte String

Os seguintes aliases `mbereg_*()` não documentados
foram descontinuados. Em vez disso, use as variantes `mb_ereg_*()`
correspondentes.

- **mbregex\_encoding()**
- **mbereg()**
- **mberegi()**
- **mbereg\_replace()**
- **mberegi\_replace()**
- **mbsplit()**
- **mbereg\_match()**
- **mbereg\_search()**
- **mbereg\_search\_pos()**
- **mbereg\_search\_regs()**
- **mbereg\_search\_init()**
- **mbereg\_search\_getregs()**
- **mbereg\_search\_getpos()**
- **mbereg\_search\_setpos()**

### Funções ODBC e DB2 (PDO\_ODBC)

A configuração [pdo\_odbc.db2\_instance\_name](ref.pdo-odbc.md#ini.pdo-odbc.db2-instance-name)
foi formalmente descontinuada. Está descontinuada na documentação a
partir do PHP 5.1.1.

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
