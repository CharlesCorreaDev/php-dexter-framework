# Funções de Enchant

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.enchant.php

---

# Funções de Enchant

## Índice

- [enchant\_broker\_describe](function.enchant-broker-describe.md) — Enumera os provedores de Enchant
- [enchant\_broker\_dict\_exists](function.enchant-broker-dict-exists.md) — Informa se um dicionário existe ou não
- [enchant\_broker\_free](function.enchant-broker-free.md) — Libera o recurso do broker e seus dicionários
- [enchant\_broker\_free\_dict](function.enchant-broker-free-dict.md) — Libera um recurso de dicionário
- [enchant\_broker\_get\_dict\_path](function.enchant-broker-get-dict-path.md) — Obtém o caminho do diretório para um determinado back-end
- [enchant\_broker\_get\_error](function.enchant-broker-get-error.md) — Retorna o último erro do broker
- [enchant\_broker\_init](function.enchant-broker-init.md) — Cria um novo objeto broker
- [enchant\_broker\_list\_dicts](function.enchant-broker-list-dicts.md) — Retorna uma lista de dicionários disponíveis
- [enchant\_broker\_request\_dict](function.enchant-broker-request-dict.md) — Cria um novo dicionário usando uma etiqueta
- [enchant\_broker\_request\_pwl\_dict](function.enchant-broker-request-pwl-dict.md) — Cria um dicionário usando um arquivo PWL
- [enchant\_broker\_set\_dict\_path](function.enchant-broker-set-dict-path.md) — Define o caminho do diretório para um determinado back-end
- [enchant\_broker\_set\_ordering](function.enchant-broker-set-ordering.md) — Declara uma preferência de dicionários a serem usados ​​para o idioma
- [enchant\_dict\_add](function.enchant-dict-add.md) — Adiciona uma palavra à lista de palavras personalizadas
- [enchant\_dict\_add\_to\_personal](function.enchant-dict-add-to-personal.md) — Sinônimo de enchant\_dict\_add
- [enchant\_dict\_add\_to\_session](function.enchant-dict-add-to-session.md) — Adciona uma palavra a esta sessão de verificação de ortografia
- [enchant\_dict\_check](function.enchant-dict-check.md) — Verifica se uma palavra está escrita de forma correta
- [enchant\_dict\_describe](function.enchant-dict-describe.md) — Descreve um dicionário individual
- [enchant\_dict\_get\_error](function.enchant-dict-get-error.md) — Retorna o último erro da sessão de correção ortográfica atual
- [enchant\_dict\_is\_added](function.enchant-dict-is-added.md) — Informa se uma palavra existe ou não nesta sessão de correção ortográfica
- [enchant\_dict\_is\_in\_session](function.enchant-dict-is-in-session.md) — Sinônimo de enchant\_dict\_is\_added
- [enchant\_dict\_quick\_check](function.enchant-dict-quick-check.md) — Verifica se a palavra está escrita corretamente e fornece sugestões
- [enchant\_dict\_remove](function.enchant-dict-remove.md) — Add a word to the exclusion list and remove it from the personal dictionary
- [enchant\_dict\_remove\_from\_session](function.enchant-dict-remove-from-session.md) — Remove a word from the session dictionary
- [enchant\_dict\_store\_replacement](function.enchant-dict-store-replacement.md) — Adiciona uma correção para uma palavra
- [enchant\_dict\_suggest](function.enchant-dict-suggest.md) — Sugere grafias para uma palavra

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
