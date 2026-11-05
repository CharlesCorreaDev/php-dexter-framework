# Tags PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.basic-syntax.phptags.php

---

## Tags PHP

Quando o PHP processa um arquivo, ele reconhece as etiquetas de abertura e
fechamento, `<?php` e `?>`, para
definir os limites da execução de código PHP. O conteúdo fora destas
etiquetas é ignorado pelo interpretador PHP, permitindo que o PHP
seja incluído em vários tipos de documentos.

Um caractere de espaço em branco (espaço, tabulação ou nova linha) precisa estar presente logo após
`<?php` para assegurar uma separação correta de tokens.
Omitir este espaço resultará em erro de sintaxe.

O PHP também inclui a etiqueta `<?=`
que é um encurtamento para `<?php echo`.

**Exemplo #1 Tags de Abertura e Fechamento do PHP**

```
1.  <?php echo 'Se quiser servir código PHP em documentos XHTML ou XML,
                use essas tags'; ?>

2.  A tag echo curta <?= 'imprima essa string' ?> também pode ser usada.
    Ela é equivalente a <?php echo 'imprima essa string' ?>.

3.  <? echo 'Este código está entre tags curtas, mas só funcionará '.
            'se a diretiva short_open_tag estiver habilitada'; ?>
```

As tags curtas (a terceira linha no exemplo acima) estão disponíveis por padrão mas podem ser desabilitadas
através da diretiva [short\_open\_tag](ini.core.md#ini.short-open-tag)
no arquivo de configuração php.ini, ou estarão desabilitadas por padrão se o PHP
for compilado com a configuração **--disable-short-tags**.

> **Nota**:
>
> Como as tags curtas podem ser desabilitadas, é recomendado usar apenas as tags
> normais (`<?php ?>` e `<?= ?>`) para
> maximizar a compatibilidade.

Se um arquivo terminar com código PHP, é preferível omitir a tag de fechamento do PHP
no final do arquivo. Isso evita que espaços em branco ou novas linhas
sejam adicionados acidentalmente após a tag de fechamento do PHP, o que pode causar efeitos indesejados,
porque o PHP iniciará o buffer de saída quando não houver intenção
de enviar qualquer saída naquele ponto do script.

**Exemplo #2 Arquivo apenas com código PHP**

```
<?php
echo "Olá Mundo\n";

// ... mais código

echo "Última instrução\n";

// o script termina aqui sem a tag de fechamento do PHP
```

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
