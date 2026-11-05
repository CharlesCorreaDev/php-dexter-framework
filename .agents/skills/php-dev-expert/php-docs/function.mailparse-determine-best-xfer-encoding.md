# Obtém a melhor forma de codificação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mailparse-determine-best-xfer-encoding.php

---

# mailparse\_determine\_best\_xfer\_encoding

(PECL mailparse >= 0.9.0)

mailparse\_determine\_best\_xfer\_encoding — Obtém a melhor forma de codificação

### Descrição

function **mailparse\_determine\_best\_xfer\_encoding**([resource](language.types.resource.md) `$fp`): [string](language.types.string.md)

Determina a melhor forma de codificar o conteúdo lido do ponteiro de
arquivo fornecido.

### Parâmetros

`fp`
:   Um ponteiro de arquivo válido, que deve ser capaz de realizar operações de busca.

### Valor Retornado

Retorna uma das codificações de caracteres suportadas pelo módulo
[mbstring](ref.mbstring.md).

### Examples

**Exemplo #1 Exemplo de **mailparse\_determine\_best\_xfer\_encoding()****

```
<?php

$fp = fopen('somemail.eml', 'r');
echo 'Best encoding: ' . mailparse_determine_best_xfer_encoding($fp);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Best encoding: 7bit
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
