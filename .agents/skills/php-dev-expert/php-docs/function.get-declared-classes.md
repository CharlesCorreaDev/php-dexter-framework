# Retorna um array com os nomes das classes definidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-declared-classes.php

---

# get\_declared\_classes

(PHP 4, PHP 5, PHP 7, PHP 8)

get\_declared\_classes — Retorna um array com os nomes das classes definidas

### Descrição

function **get\_declared\_classes**(): [array](language.types.array.md)

Obtém as classes declaradas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array de nomes das classes declaradas no script
atual.

> **Nota**:
>
> Observe que, dependendo de quais bibliotecas tenham sido compiladas ou
> carregadas no PHP, classes adicionais podem estar presentes. Isto significa que
> não será possível definir classes de usuário usando estes
> nomes. Há uma lista de classes predefinidas na seção [Classes Predefinidas](reserved.classes.md) dos
> apêndices.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | Anteriormente a função **get\_declared\_classes()** sempre retornada classes pais antes das classes filhas. Isto não é mais o que acontece. Nenhuma ordem em particular é garantida para o valor de retorno de **get\_declared\_classes()**. |

### Examples

**Exemplo #1 Exemplo de **get\_declared\_classes()****

```
<?php
print_r(get_declared_classes());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => stdClass
    [1] => __PHP_Incomplete_Class
    [2] => Directory
)
```

### Veja também

- [class\_exists()](function.class-exists.md) - Verifica se uma classe foi definida
- [get\_declared\_interfaces()](function.get-declared-interfaces.md) - Retorna um array com todas as interfaces declaradas
- [get\_defined\_functions()](function.get-defined-functions.md) - Retorna um array com todas as funções definidas

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
