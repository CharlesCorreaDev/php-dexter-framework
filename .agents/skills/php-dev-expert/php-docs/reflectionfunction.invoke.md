# Invoca função

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfunction.invoke.php

---

# ReflectionFunction::invoke

(PHP 5, PHP 7, PHP 8)

ReflectionFunction::invoke — Invoca função

### Descrição

public function **ReflectionFunction::invoke**([mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

Invoca uma função refletida.

### Parâmetros

`args`
:   A lista de argumentos passada. Aceita um número variável de
    argumentos que são passados para a função de forma muito semelhante
    à função [call\_user\_func()](function.call-user-func.md).

### Valor Retornado

Retorna o resultado da chamada de função invocada.

### Examples

**Exemplo #1 Exemplo de **ReflectionFunction::invoke()****

```
<?php
function title($title, $name)
{
    return sprintf("%s. %s\r\n", $title, $name);
}

$function = new ReflectionFunction('title');

echo $function->invoke('Dr', 'Phil');
?>
```

O exemplo acima produzirá:

```
Dr. Phil
```

### Notas

> **Nota**:
>
> **ReflectionFunction::invoke()** não pode ser usado quando parâmetros de referência são esperados.
> [ReflectionFunction::invokeArgs()](reflectionfunction.invokeargs.md) deve ser usado (passando referências na lista de argumentos).

### Veja também

- [ReflectionFunction::export()](reflectionfunction.export.md) - Função de exportação
- [\_\_invoke()](language.oop5.magic.md#object.invoke)
- [call\_user\_func()](function.call-user-func.md) - Chama a função de retorno informada no primeiro parâmetro

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
