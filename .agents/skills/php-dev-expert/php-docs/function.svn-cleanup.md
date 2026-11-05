# Limpa recursivamente um diretório de cópia de trabalho, concluindo operações incompletas e removendo bloqueios

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.svn-cleanup.php

---

# svn\_cleanup

(PECL svn >= 0.1.0)

svn\_cleanup — Limpa recursivamente um diretório de cópia de trabalho, concluindo operações incompletas e removendo bloqueios

### Descrição

function **svn\_cleanup**([string](language.types.string.md) `$workingdir`): [bool](language.types.boolean.md)

Limpa recursivamente o diretório da cópia de trabalho `workingdir`,
concluindo quaisquer operações incompletas e removendo bloqueios da cópia de trabalho. Use
quando uma cópia de trabalho estiver em suspenso e precisar ser utilizável novamente.

### Parâmetros

`workingdir`
:   String com o caminho para o diretório de trabalho local para limpeza.

    > **Nota**:
    >
    > Os caminhos relativos serão resolvidos como se o diretório de trabalho atual fosse aquele que contém o binário do PHP. Para usar o diretório de trabalho do script de chamada, use [realpath()](function.realpath.md) ou dirname(\_\_FILE\_\_).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo básico**

Este exemplo demonstra a limpeza de uma cópia de trabalho em um
diretório chamado help-me:

```
<?php
svn_cleanup(realpath('help-me'));
?>
```

A chamada [realpath()](function.realpath.md) é necessária devido ao tratamento peculiar
de caminhos relativos do SVN.

### Notas

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Veja também

- **update()**
- [» Documentação do SVN sobre svn cleanup](https://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.cleanup.html)

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
