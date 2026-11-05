# Retorna recursos ativos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-resources.php

---

# get\_resources

(PHP 7, PHP 8)

get\_resources — Retorna recursos ativos

### Descrição

function **get\_resources**([?](language.types.null.md)[string](language.types.string.md) `$type` = **`null`**): [array](language.types.array.md)

Retorna um array de todos os recursos do tipo [resource](language.types.resource.md) atualmente ativos, opcionalmente
filtrados por tipo de recurso.

> **Nota**:
>
> Esta função destina-se a fins de depuração e teste. Não deve ser
> usada em ambientes de produção, especialmente para não acessar ou mesmo manipular
> recursos que normalmente não são acessíveis (por exemplo, o recurso de fluxo
> subjacente de instâncias de [SplFileObject](class.splfileobject.md)).

### Parâmetros

`type`
:   Se definido, isso fará com que **get\_resources()** retorne
    apenas recursos do tipo especificado.
    [Uma lista de tipos de recursos está disponível.](resource.md)

    Se a [string](language.types.string.md) `Unknown` for fornecida como
    o tipo, somente os recursos de tipo desconhecido serão
    retornados.

    Se omitido, todos os recursos serão devolvidos.

### Valor Retornado

Retorna um [array](language.types.array.md) de recursos atualmente ativos, indexados pelo
número do recurso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `type` agora pode ser nulo. |

### Examples

**Exemplo #1 **get\_resources()** sem filtro**

```
<?php
$fp = tmpfile();
var_dump(get_resources());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1) {
  [1]=>
  resource(1) of type (stream)
}
```

**Exemplo #2 **get\_resources()** com filtro**

```
<?php
$fp = tmpfile();
var_dump(get_resources('stream'));
var_dump(get_resources('curl'));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(1) {
  [1]=>
  resource(1) of type (stream)
}
array(0) {
}
```

### Veja também

- [get\_loaded\_extensions()](function.get-loaded-extensions.md) - Retorna um array com os nomes de todos os módulos compilados e carregados
- [get\_defined\_constants()](function.get-defined-constants.md) - Retorna um array associativo com os nomes de todas as constantes e seus valores
- [get\_defined\_functions()](function.get-defined-functions.md) - Retorna um array com todas as funções definidas
- [get\_defined\_vars()](function.get-defined-vars.md) - Retorna um array com todas variáveis definidas

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
