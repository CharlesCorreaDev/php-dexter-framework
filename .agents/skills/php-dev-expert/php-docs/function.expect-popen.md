# Executa comando via Bourne shell, e abre o fluxo PTY para
  o processo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.expect-popen.php

---

# expect\_popen

(PECL expect >= 0.1.0)

expect\_popen — Executa comando via Bourne shell, e abre o fluxo PTY para
o processo

### Descrição

function **expect\_popen**([string](language.types.string.md) `$command`): [resource](language.types.resource.md)

Executa comando via Bourne shell, e abre o fluxo PTY para o processo.

### Parâmetros

`command`
:   Comando a executar.

### Valor Retornado

Retorna um fluxo aberto PTY para o processo `stdio`,
`stdout` e `stderr`.

Em caso de falha, esta função retorna **`false`**.

### Examples

**Exemplo #1 Exemplo de **expect\_popen()****

```
<?php
// Registra-se no repositório CVS do PHP.net:
$stream = expect_popen ("cvs -d :pserver:anonymous@cvs.php.net:/repository login");
sleep (3);
fwrite ($stream, "phpfi\n");
fclose ($stream);
?>
```

### Veja também

- [popen()](function.popen.md) - Abre um processo como ponteiro de arquivo

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
