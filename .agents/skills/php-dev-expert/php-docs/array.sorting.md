# Ordenando Arrays

> **Fonte / Source:** https://www.php.net/manual/pt_BR/array.sorting.php

---

# Ordenando Arrays

O PHP tem muitas funções para lidar com ordenação de arrays, e esse
documento existe para ajudar o desenvolvedor a lidar com elas.

As principais diferenças são:

- Algumas ordenam com base nas chaves do [array](language.types.array.md), enquanto outras
  pelos valores: `$array['chave'] = 'valor';`
- A correlação entre as chaves e os valores do array não são mantidas depois
  da ordenação, o que pode fazer com que as chaves sejam resetadas
  numericamente (0, 1, 2, ...)
- A ordem da ordenação: alfabética, ascendente (menor para maior),
  descendente (maior para menor), natural, aleatório, ou definida pelo usuário
- Nota: Todas essas funções agem diretamente na própria variável do array,
  ao invés de retornar um novo array ordenado
- Se qualquer uma dessas funções avaliar dois membros como iguais
  então eles retém sua ordem original.
  Antes do PHP 8.2.0, sua ordem eram indefinida (a ordenação não é estável).

**Atributos das funções de ordenação**

| Nome da função | Ordena por | Mantém a associação de chaves | Ordenação | Funções relacionadas |
| --- | --- | --- | --- | --- |
| [array\_multisort()](function.array-multisort.md) | valor | [string](language.types.string.md) chaves sim, [int](language.types.integer.md) chaves não | primeiro array ou opções de ordenação | [array\_walk()](function.array-walk.md) |
| [asort()](function.asort.md) | valor | sim | ascendente | [arsort()](function.arsort.md) |
| [arsort()](function.arsort.md) | valor | sim | descendente | [asort()](function.asort.md) |
| [krsort()](function.krsort.md) | chave | sim | descendente | [ksort()](function.ksort.md) |
| [ksort()](function.ksort.md) | chave | sim | ascendente | [krsort()](function.krsort.md) |
| [natcasesort()](function.natcasesort.md) | valor | sim | natural, insensível a maiúsculas/minúsculas | [natsort()](function.natsort.md) |
| [natsort()](function.natsort.md) | valor | sim | natural | [natcasesort()](function.natcasesort.md) |
| [rsort()](function.rsort.md) | valor | não | descendente | [sort()](function.sort.md) |
| [shuffle()](function.shuffle.md) | valor | não | aleatória | [array\_rand()](function.array-rand.md) |
| [sort()](function.sort.md) | valor | não | menor para maior | [rsort()](function.rsort.md) |
| [uasort()](function.uasort.md) | valor | sim | definida pelo usuário | [uksort()](function.uksort.md) |
| [uksort()](function.uksort.md) | chave | sim | definida pelo usuário | [uasort()](function.uasort.md) |
| [usort()](function.usort.md) | valor | não | definida pelo usuário | [uasort()](function.uasort.md) |

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
