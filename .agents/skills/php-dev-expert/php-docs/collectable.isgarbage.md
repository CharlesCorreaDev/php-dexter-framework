# Determina se um objeto foi marcado como lixo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/collectable.isgarbage.php

---

# Collectable::isGarbage

(PECL pthreads >= 2.0.8)

Collectable::isGarbage — Determina se um objeto foi marcado como lixo

### Descrição

public function **Collectable::isGarbage**(): [true](language.types.singleton.md)

Pode ser chamado em [Pool::collect()](pool.collect.md) para determinar se este objeto é lixo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Veja também

- [Pool::collect()](pool.collect.md) - Coleta referências a tarefas concluídas

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
