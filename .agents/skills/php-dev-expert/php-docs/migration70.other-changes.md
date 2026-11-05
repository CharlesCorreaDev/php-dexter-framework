# Outras mudanças

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration70.other-changes.php

---

## Outras mudanças

### Abertura nas restrições de palavras reservadas

Palavras reservadas globalmente agora são permitidas como nomes de propriedades,
constante e métodos dentro de classes, interfaces e traits. Isso reduz o aspecto
de quebras no BC quando novas palavras-chave são introduzidas e evita restrições de nomes em APIS.

Isso é particularmente útil quando estiver criando DSLs com interfaces fluentes:

```
<?php
// 'new', 'private', e 'for' eram proibidas
Project::new('Project Name')->private()->for('purpose here')->with('username here');
?>
```

A única limitação é que a palavra-chave `class` continua
não podendo ser utilizada como nome de constante, caso contrário conflitará
com a sintaxe de resolução de nomes de classe (`ClassName::class`).

### Remoção do aviso do date.timezone

Anteriormente, um aviso era emitido se a
configuração INI `date.timezone` não havia
sido definida antes de utilizar qualquer função de data ou tempo. Agora, este aviso
foi removido (com a
diretiva `date.timezone` padronizada para
UTC).

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
