# Cria um agrupador (Collator)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/collator.construct.php

---

# Collator::\_\_construct

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

Collator::\_\_construct — Cria um agrupador (Collator)

### Descrição

public function **Collator::\_\_construct**([string](language.types.string.md) `$locale`)

Cria uma nova instância de [Collator](class.collator.md).

### Parâmetros

`locale`
:   A localidade cujas regras de agrupamento devem ser usadas. Valores especiais para
    localidades podem ser passadas - se uma [string](language.types.string.md) vazia for passada, as
    regras de agrupamento da localidade padrão serão usadas. Se `"root"` for passado,
    as regras [» UCA](https://www.unicode.org/reports/tr10/) serão usadas.

    O atributo `locale` é tipicamente o mais importante para
    ordenação e correspondências corretas, conforme expectativas do usuário em
    diferentes países e regiões. A ordenação
    [» UCA](https://www.unicode.org/reports/tr10/) padrão
    ordenará somente poucas línguas como holandês e português
    corretamente ("corretamente" significa de acordo com a expectativa normal para
    os usuários da língua). Em outras situações, é necessário fornecer a localidade para a
    UCA para agrupar adequadamente o texto para uma língua específica. Portanto, uma
    localidade precisa ser informada para que seja escolhido um agrupador que tenha
    sido corretamente elaborado para aquela localidade. A escolha de uma localidade irá
    predefinir automaticamente os valores de todos os atributos para algo que
    seja razoável para a localidade. Por isso, na maior parte do tempo os outros
    atributos não precisam ser definidos explicitamente. Em alguns casos, a escolha
    de localidade fará diferença em desempenho de comparação de strings
    e/ou em comprimento de chave de ordenação.

### Erros/Exceções

Retorna um objeto "vazio" em caso de erro.
User as funções [intl\_get\_error\_code()](function.intl-get-error-code.md)
e/ou [intl\_get\_error\_message()](function.intl-get-error-message.md)
para descobrir o que ocorreu.

### Examples

**Exemplo #1 Exemplo de **Collator::\_\_construct()****

```
<?php
$coll = new Collator('en_CA');
?>
```

### Veja também

- [Collator::create()](collator.create.md) - Cria um agrupador
- [collator\_create()](collator.create.md) - Cria um agrupador

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
