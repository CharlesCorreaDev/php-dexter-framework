# Cria um novo objeto broker

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.enchant-broker-init.php

---

# enchant\_broker\_init

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL enchant >= 0.1.0 )

enchant\_broker\_init — Cria um novo objeto broker

### Descrição

function **enchant\_broker\_init**(): [EnchantBroker](class.enchantbroker.md)|[false](language.types.singleton.md)

### Parâmetros

### Valor Retornado

Retorna um recurso de broker em caso de sucesso ou **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Em caso de sucesso, esta função agora retorna uma instância de [EnchantBroker](class.enchantbroker.md); anteriormente, retornava um [resource](language.types.resource.md). |

### Veja também

- [enchant\_broker\_free()](function.enchant-broker-free.md) - Libera o recurso do broker e seus dicionários

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
