# Obtém a versão do banco de dados de fuso horário.

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.timezone-version-get.php

---

# timezone\_version\_get

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

timezone\_version\_get — 
Obtém a versão do banco de dados de fuso horário.

### Descrição

function **timezone\_version\_get**(): [string](language.types.string.md)

Obtém a versão atual do banco de dados de fuso horário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma [string](language.types.string.md) no formato
`YYYY.incremento`, como em `2022.2`.

Se a versão instalada do banco de dados de fuso horário for antiga (por exemplo, ela
não mostra o ano atual), pode-se atualizar a informação do fuso horário
tanto atualizando a versão do PHP, ou instalando o pacote PECL [» timezonedb](https://pecl.php.net/package/timezonedb).

Algumas distribuições Linux alteram o suporte do PHP para data/horário para usar uma
fonte alternativa de informação de fuso horário. Neste caso, esta função
irá retornar `0.system`. Recomenda-se instalar o pacote PECL
[» timezonedb](https://pecl.php.net/package/timezonedb)
neste caso também.

### Examples

**Exemplo #1 Obtendo a versão do banco de dados de fuso horário**

```
<?php
echo timezone_version_get();
```

O exemplo acima produzirá
algo semelhante a:

```
2022.2
```

### Veja também

- [Lista de fusos horários suportados](timezones.md)

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
