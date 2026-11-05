# Verifica o arquivo formatado em resolv.conf

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventdnsbase.parseresolvconf.php

---

# EventDnsBase::parseResolvConf

(PECL event >= 1.2.6-beta)

EventDnsBase::parseResolvConf — Verifica o arquivo formatado em resolv.conf

### Descrição

public
function **EventDnsBase::parseResolvConf**(
[int](language.types.integer.md) `$flags`
, 
[string](language.types.string.md) `$filename`
): [bool](language.types.boolean.md)

Verifica o arquivo formatado em resolv.conf armazenado em 'filename' e lê todas as
opções dele que estão listadas em 'flags'.

### Parâmetros

`flags`
:   Determina quais informações são analisadas do arquivo
    `resolv.conf`.
    Veja a página do manual para
    `resolv.conf`
    para o formato deste arquivo.

    As seguintes diretivas não são analisadas do arquivo:
    `sortlist, rotate, no-check-names, inet6, debug`.

    Se esta função encontrar um erro, os possíveis valores de retorno são:

    - `1` = não foi possível abrir o arquivo
    - `2` = não foi possível consultar o arquivo
    - `3` = arquivo muito grande
    - `4` = sem memória
    - `5` = leitura curta do arquivo
    - `6` = nenhum servidor de nomes listado no arquivo

`filename`
:   Caminho para
    o arquivo
    `resolv.conf`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
